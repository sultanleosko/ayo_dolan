<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('destinasi_model');
		$this->load->model('blog_model');
	}

	public function index()
	{
		
	}

	public function lihat($id_destinasi)
	{
		$data['destinasi_detail'] = $this->destinasi_model->get_destinasi_detail($id_destinasi);
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$data['four_destinasi'] = $this->destinasi_model->get_four_destinasi();
		$data['main_view'] = 'destinasi_view';
		$this->load->view('template_view', $data);
	}

	public function semua_destinasi()
	{
		$data['all_destinasi'] = $this->destinasi_model->get_all_destinasi();
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$data['main_view'] = 'semua_destinasi_view';
		$this->load->view('template_view', $data);
	}

	public function do_add()
	{
		if($this->session->userdata("tipe_user") == '1'){
			$nama_des = $this->input->post('nama_des');
			$lok_des = $this->input->post('lok_des');
			$intro_des= $this->input->post('intro_des');
			$foto = $this->do_upload();

			$data = array(
			'nama_destinasi' => $nama_des,
			'lokasi' => $lok_des,
			'intro_destinasi' => $intro_des,
			'gambar_destinasi' => $foto
			);

			if($foto == null){
				$foto = "blank.jpg";
				$this->destinasi_model->insert($data, 'tb_destinasi');
				redirect('admin/tabel_destinasi_view');
			}
			else{
				$this->destinasi_model->insert($data, 'tb_destinasi');
				redirect('admin/tabel_destinasi_view');
			}

		} else {
			redirect('admin');
		}
	}

	public function do_upload()
	{

    	$type = explode('.', $_FILES["pic"]["name"]);
    	$type = $type[count($type)-1];
    	$url = uniqid(rand()).'.'.$type;
    	if(in_array($type, array("jpg","jpeg","gif","png","PNG")))
    		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
    			if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./assets/img/malang/".$url))
    				return "malang/".$url;
    	return "";
    }

    public function do_update()
	{
		if($this->session->userdata("tipe_user") == '1'){
			$id = $this->input->post('id');
			$nama_des = $this->input->post('nama_des');
			$lok_des = $this->input->post('lok_des');
			$intro_des= $this->input->post('intro_des');
			$foto = $this->do_upload();

			$data = '';

			if($foto == null){
				$data = array(
					'nama_destinasi' => $nama_des,
					'lokasi' => $lok_des,
					'intro_destinasi' => $intro_des,
				);
				$this->destinasi_model->update($data, $id, 'tb_destinasi');
				redirect('admin/tabel_destinasi_view');
			}

			else{
				$data = array(
			'nama_destinasi' => $nama_des,
			'lokasi' => $lok_des,
			'intro_destinasi' => $intro_des,
			'gambar_destinasi' => $foto
			);
				$this->destinasi_model->update($data, $id, 'tb_destinasi');
				redirect('admin/tabel_destinasi_view');
			}

		} else {
			redirect('admin');
		}
	}
}