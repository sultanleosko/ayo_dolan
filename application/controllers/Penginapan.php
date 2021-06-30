<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penginapan extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('penginapan_model');
		$this->load->model('destinasi_model');
		$this->load->model('blog_model');
	}

	public function index()
	{
		$data['all_penginapan'] = $this->penginapan_model->get_all_penginapan();
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$data['harga_tertinggi'] = $this->penginapan_model->get_harga_tertinggi();
		$data['harga_terendah'] = $this->penginapan_model->get_harga_terendah();
		$data['three_blog'] = $this->blog_model->get_three_blog();
		$data['main_view'] = 'penginapan_view';
		$this->load->view('template_view', $data);
	}

	public function lihat_penginapan($id_penginapan)
	{
		$data['penginapan_detail'] = $this->penginapan_model->get_penginapan_detail($id_penginapan);
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$data['four_penginapan'] = $this->penginapan_model->get_four_penginapan();
		$data['three_blog'] = $this->blog_model->get_three_blog();
		$data['main_view'] = 'detail_penginapan_view';
		$this->load->view('template_view', $data);
	}
}