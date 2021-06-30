<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
    public $data = '';

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('paket_model');
        $this->load->model('destinasi_model');
        $this->load->model('blog_model');
    }

    public function index() 
    {
        
    }

    public function lihat_paket($id_paket)
    {
    	$data['paket_detail'] = $this->paket_model->get_paket_detail($id_paket);
        
    	$data['four_paket'] = $this->paket_model->get_four_paket();
    	$data['main_view'] = 'paket_view';
		$this->load->view('template_view', $data);
    }

    public function semua_paket()
    {
        $data['all_paket'] = $this->paket_model->get_all_paket();
        $data['two_destinasi'] = $this->destinasi_model->get_two_destinasi(); 
        $data['main_view'] = 'semua_paket_view';
        $this->load->view('template_view', $data);
    }
}