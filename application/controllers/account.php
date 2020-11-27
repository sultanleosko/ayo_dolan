<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public $data = '';

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('paket_model');
		$this->load->model('destinasi_model');
	}

	public function index() 
	{
		$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$this->data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
		$this->data['main_view'] = 'user_account_view';
		$this->load->view('template_view', $this->data);
	}

	public function lihat_user_order()
	{
		$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();
		$this->data['order'] = $this->user_model->myorder();	
		$this->data['main_view'] = 'user_order_view';
		$this->load->view('template_view', $this->data);
	}

	public function update_password()
	{
		if($this->session->userdata('login') == TRUE) {
			$this->form_validation->set_rules('password_update', 'Password Update', 'required|min_length[5]');
			$this->form_validation->set_rules('repassword_update', 'Konfirmasi Update Password', 'required|min_length[5]|matches[password_update]');

			if ($this->form_validation->run() == TRUE) {
				$this->user_model->ganti_password();
				$this->session->set_flashdata('notif_pass', '<p class="alert alert-success"><strong>Ganti password sukses.</strong></p>');
				$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
				$this->data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
				$this->data['main_view'] = 'user_account_view';
				$this->load->view('template_view', $this->data);
			} else {
				$this->session->set_flashdata('notif_pass', '<div class="alert alert-danger">'.validation_errors().'</div>');
				$this->data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
				$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();
				$this->data['main_view'] = 'user_account_view';
				$this->load->view('template_view', $this->data);
			}
		} else {
			redirect('login');
		}
	}

	public function update_detail_personal()
	{
		if($this->session->userdata('login') == TRUE) {
			$this->form_validation->set_rules('username_update', 'Username', 'trim');
			$this->form_validation->set_rules('namalengkap_update', 'Nama Lengkap');
			$this->form_validation->set_rules('telepon_update', 'Nomor Telepon', 'trim|max_length[13]');
			$this->form_validation->set_rules('alamat_update', 'Alamat');
			$this->form_validation->set_rules('email_update', 'Email', 'trim|valid_email');
			$this->form_validation->set_rules('kota_update', 'Nama Kota');
			$this->form_validation->set_rules('kodepos_update', 'Kode Pos', 'trim');

			if ($this->form_validation->run() == TRUE) {
				$this->user_model->ganti_profil();
				$this->session->set_flashdata('notif_detail', '<p class="alert alert-success"><strong>Ganti personal detail sukses.</strong></p>');
				$this->data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
				$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
				$this->data['main_view'] = 'user_account_view';
				$this->load->view('template_view', $this->data);
			} else {
				$this->session->set_flashdata('notif_detail', '<div class="alert alert-danger">'.validation_errors().'</div>');
				$this->data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
				$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
				$this->data['main_view'] = 'user_account_view';
				$this->load->view('template_view', $this->data);
			}
		} else {
			redirect('login');
		}
	}

	public function hapus_booking($id, $id_paket)
	{
		$where = array('id_booking' => $id);
		$this->user_model->hapus_data($where,'tb_booking');
		redirect('account/lihat_user_order/');
	}

	public function edit_booking($id, $id_paket)
	{
		$this->user_model->edit_data($id,'tb_booking');
		redirect('account/lihat_user_order/');
	}

	public function cancelbook($id_booking)
	{
		if ($this->booking_model->dell($id_booking) == TRUE); {
			redirect('account/lihat_user_order');
		}
	}

	public function confirmbook($id_booking)
	{
		if ($this->input->post('submit'))
		{
			if ($this->booking_model->confirm($id_booking) == TRUE) {
			redirect('account/lihat_user_order');
			} else {
				$data['main_view'] = 'confirm_view';
				$this->load->view('template_view', $data);	
			}
		} else {
			$data['main_view'] = 'confirm_view';
			$this->load->view('template_view', $data);
		}
	}
}
?>