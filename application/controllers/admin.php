<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
			$data['tabel_booking'] = $this->admin_model->get_tabel_booking();
			$data['tabel_user'] = $this->admin_model->get_tabel_user();	
			$data['admin_view'] = 'admin/admin_view';
			$this->load->view('admin/template_view', $data);
		} else {
			redirect('home');
		}
	}

	public function hapus_booking($id)
	{
		if ($this->session->userdata("tipe_user") == '1') {	
			$where = array('id_booking' => $id);
			$this->admin_model->hapus_data($where,'tb_booking');
			redirect('admin/tabel_booking_view');
		} else {
			redirect('home');
		}
	}

	public function hapus_destinasi($id)
	{
		if ($this->session->userdata("tipe_user") == '1') {	
			$where = array('id_destinasi' => $id);
			$this->admin_model->hapus_data($where,'tb_destinasi');
			redirect('admin/tabel_destinasi_view');
		} else {
			redirect('home');
		}
	}

	public function hapus_user($id)
	{
		if ($this->session->userdata("tipe_user") == '1') {	
			$where = array('id_user' => $id);
			$this->admin_model->hapus_data($where,'tb_user');
			redirect('admin/tabel_user_view');
		} else {
			redirect('home');
		}
	}


	public function update($id_booking) 
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$where = $id_booking;
			$this->admin_model->updatestatus($where, 'tb_booking');
			redirect('admin/tabel_booking_view');
		} else {
			redirect('home');
		}
	}

	public function tabel_destinasi_view() 
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
			$data['tabel_destinasi'] = $this->admin_model->get_tabel_destinasi();	
			$data['admin_view'] = 'admin/tabel_destinasi';
			$this->load->view('admin/template_view', $data);
		} else {
			redirect('home');
		}
	}

	public function tambah_destinasi_view() 
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
			$data['admin_view'] = 'admin/tambah_destinasi';
			$this->load->view('admin/template_view', $data);
		} else {
			redirect('home');
		}
	}

	public function tabel_booking_view() 
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
			$data['tabel_booking'] = $this->admin_model->get_tabel_booking();	
			$data['admin_view'] = 'admin/tabel_booking';
			$this->load->view('admin/template_view', $data);
		} else {
			redirect('home');
		}
	}

	public function tambah_booking_view() 
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
			$data['admin_view'] = 'admin/tambah_booking';
			$this->load->view('admin/template_view', $data);
		} else {
			redirect('home');
		}
	}

	public function tabel_user_view() 
	{
		if ($this->session->userdata("tipe_user") == '1') {
			$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
			$data['tabel_user'] = $this->admin_model->get_tabel_user();	
			$data['admin_view'] = 'admin/tabel_user';
			$this->load->view('admin/template_view', $data);
		} else {
			redirect('home');
		}
	}


	public function tambah_destinasi()
	{
		if($this->session->userdata('login') == TRUE) {
			if($this->input->post('submit_destinasi')) {

				$this->form_validation->set_rules('nama_des', 'Nama Destinasi', 'required');
				$this->form_validation->set_rules('lok_des', 'Lokasi', 'required');
				$this->form_validation->set_rules('intro_des', 'Deskripsi', 'required');
				$this->form_validation->set_rules('foto', 'Gambar Destinasi', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
					if ($this->admin_model->add_Destinasi() == TRUE) {
						$this->session->set_flashdata('notif_login', '<p class="alert alert-success"><strong>Menambahkan Destinasi sukses.</strong></p>');
						$data['main_view'] = '';
						$this->load->view('template_view', $data);
					} else {
						$this->session->set_flashdata('notif_reg', '<p class="alert alert-danger"><strong>Menambahkan Destinasi gagal!.</strong></p>');
						$data['main_view'] = '';
						$this->load->view('template_view', $data);
					}
				} else {
					$this->session->set_flashdata('notif_reg', '<div class="alert alert-danger">'.validation_errors().'</div>');
					$data['main_view'] = '';
					$this->load->view('template_view', $data);
				}
			} else {
				redirect('');
			}
		} else {
			redirect('');
		}
	}

	function do_upload(){
    	$type = explode('.', $_FILES["pic"]["name"]);
    	$type = $type[count($type)-1];
    	$url = uniqid(rand()).'.'.$type;
    	if(in_array($type, array("jpg","jpeg","gif","png","PNG")))
    		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
    			if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./assets/img/malang/".$url))
    				return $url;
    	return "";
    }
}