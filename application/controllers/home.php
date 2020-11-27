<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('destinasi_model');
		$this->load->model('paket_model');
	}

	public function index()
	{
		$data['six_paket'] = $this->paket_model->get_six_paket();
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();		
		$data['six_destinasi'] = $this->destinasi_model->get_six_destinasi();
		$data['main_view'] = 'home_view';
		$this->load->view('template_view', $data);
	}

	public function kontak()
	{
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$data['main_view'] = 'contact_view';
		$this->load->view('template_view', $data);
	}
}

?>