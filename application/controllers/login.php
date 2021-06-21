<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('destinasi_model');
		$this->load->model('blog_model');
	}

	public function index()
	{
		$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$this->data['main_view'] = 'login_view';
		$this->load->view('template_view', $this->data);
	}

	public function admin()
	{
		$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
		$this->data['main_view'] = 'admin_view';
		$this->load->view('template_view', $this->data);
	}

	public function do_login() 
	{
		if($this->session->userdata('login') == FALSE){
			if($this->input->post('submit_login')){

				$this->form_validation->set_rules('username_login', 'Username', 'trim|required');
				$this->form_validation->set_rules('password_login', 'Password', 'required|min_length[5]');

				if ($this->form_validation->run() == TRUE) {
					if ($this->user_model->cek_user() == TRUE) {
						redirect('home');
					} else {
						$this->session->set_flashdata('notif_login', '<p class="alert alert-danger">Akun Anda Belum Terdaftar!</p>');
						$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
						$this->data['main_view'] = 'register_view';
						$this->load->view('template_view', $this->data);
					}
				} else {
					$this->session->set_flashdata('notif_login', '<div class="alert alert-danger">'.validation_errors().'</div>');
					$this->data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
					$this->data['main_view'] = 'register_view';
					$this->load->view('template_view', $this->data);
				}
			} else {
				redirect('register');
			}
		} else {
			redirect('home');
		}
	}

	public function logout()
	{
		$session_data = array('login' => FALSE, 'username' => '');
		$this->session->unset_userdata($session_data);
		$this->session->sess_destroy();
		redirect('home');
	}
}