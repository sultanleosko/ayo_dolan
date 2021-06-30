<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public $data = '';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('booking_model');
		$this->load->model('destinasi_model');
		$this->load->model('blog_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		
	}

	public function lihat($id_blog)
	{
		$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();
		$data['blog_detail'] = $this->blog_model->get_blog_detail($id_blog);
		$data['three_blog'] = $this->blog_model->get_three_blog();
		$data['main_view'] = 'blog_detail_view';
		$this->load->view('template_view', $data);
	}
}