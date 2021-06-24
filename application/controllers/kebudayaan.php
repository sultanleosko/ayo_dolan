<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebudayaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kebudayaan_model');
	}

	public function index()
	{
		
	}

	public function lihat($id)
	{
		$data['kebudayaan_detail'] = $this->kebudayaan_model->get_kebudayaan_detail($id);
		$data['two_kebudayaan'] = $this->kebudayaan_model->get_two_kebudayaan();	
		$data['four_kebudayaan'] = $this->kebudayaan_model->get_four_kebudayaan();
		$data['main_view'] = 'kebudayaan_view';
		$this->load->view('template_view', $data);
	}

	public function semua_kebudayaan()
	{
		$data['all_kebudayaan'] = $this->kebudayaan_model->get_all_kebudayaan();
		$data['two_kebudayaan'] = $this->kebudayaan_model->get_two_kebudayaan();	
		$data['main_view'] = 'semua_kebudayaan_view';
		$this->load->view('template_view', $data);
	}

	public function do_add()
	{
		if($this->session->userdata("tipe_user") == '1'){
			$name = $this->input->post('name');
			$description= $this->input->post('description');
			$foto = $this->do_upload();

			$data = array(
			'name' => $name,
			'description' => $description,
			'thumbnail' => $foto,
			);

			if($foto == null){
				$foto = "blank.jpg";
				$this->kebudayaan_model->insert($data, 'tb_kebudayaan');
				redirect('admin/tabel_kebudayaan_view');
			}
			else{
				$this->kebudayaan_model->insert($data, 'tb_kebudayaan');
				redirect('admin/tabel_kebudayaan_view');
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
			$name = $this->input->post('name');
			$description= $this->input->post('description');
			$foto = $this->do_upload();

			$data = '';

			if($foto == null){
				$data = array(
					'name' => $name,
					'description' => $description,
				);
				$this->kebudayaan_model->update($data, $id, 'tb_kebudayaan');
				redirect('admin/tabel_kebudayaan_view');
			}

			else{
				$data = array(
			'name' => $name,
			'description' => $description,
			'thumbnail' => $foto
			);
				$this->kebudayaan_model->update($data, $id, 'tb_kebudayaan');
				redirect('admin/tabel_kebudayaan_view');
			}

		} else {
			redirect('admin');
		}
	}
}