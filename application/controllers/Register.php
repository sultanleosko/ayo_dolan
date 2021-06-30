<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('destinasi_model');
		$this->load->model('blog_model');
	}

	public function index()
	{
		$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();
		$data['main_view'] = 'register_view';
		$this->load->view('template_view', $data);
	}

	public function do_register()
	{
		if($this->session->userdata('login') == FALSE) {
			if($this->input->post('submit_reg')) {

				$this->form_validation->set_rules('namalengkap_reg', 'Nama Lengkap', 'required');
				$this->form_validation->set_rules('username_reg', 'Username', 'trim|required');
				$this->form_validation->set_rules('password_reg', 'Password', 'required');
				$this->form_validation->set_rules('repassword_reg', 'Konfirmasi Password', 'required|matches[password_reg]');
				$this->form_validation->set_rules('alamat_reg', 'Alamat', 'required');
				$this->form_validation->set_rules('email_reg', 'Email', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
					if ($this->user_model->register_data() == TRUE) {
						$this->session->set_flashdata('notif_login', '<p class="alert alert-success"><strong>Registrasi sukses.</strong> Silahkan login!</p>');
						$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
						$data['main_view'] = 'login_view';
						$this->load->view('template_view', $data);
					} else {
						$this->session->set_flashdata('notif_reg', '<p class="alert alert-danger"><strong>Registrasi gagal!.</strong></p>');
						$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
						$data['main_view'] = 'register_view';
						$this->load->view('template_view', $data);
					}	
				} else {
					$this->session->set_flashdata('notif_reg', '<div class="alert alert-danger">'.validation_errors().'</div>');
					$data['two_destinasi'] = $this->destinasi_model->get_two_destinasi();	
					$data['main_view'] = 'register_view';
					$this->load->view('template_view', $data);
				}
			} else {
				redirect('register');
			}
		} else {
			redirect('home');
		}
	}
}