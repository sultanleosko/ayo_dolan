<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public $data = '';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('booking_model');
		$this->load->model('paket_model');
		$this->load->model('blog_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		
	}

	public function konfirmasi_data($id_paket)
	{
		if($this->session->userdata('login') == true) {
			$kuantitas = $this->input->post('jumlah_tiket');
			$tanggal = $this->input->post('tanggal_berangkat');

			if($this->input->post('submit_booking')) {
				$this->form_validation->set_rules('tanggal_berangkat', 'Tanggal Berangkat', 'required');

				if ($this->form_validation->run() == TRUE) {
					$data['paket_detail'] = $this->paket_model->get_paket_detail($id_paket);
					$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));	
					$data['jml'] = $kuantitas;
					$data['tgl'] = $tanggal;
					$data['main_view'] = 'konfirmasi_data_view';
					$this->load->view('template_view', $data);					
				} else {
					$this->session->set_flashdata('notif_booking', '<p class="alert alert-danger">Pilih tanggal berangkat</p>');
					redirect('booking/jumlah_tiket/'.$this->uri->segment(3));
				}
			} else {
				redirect('home');
			}
		} else {
			redirect('home');
		}
		
	}

	public function jumlah_tiket($id_paket)
	{
		$data['paket_detail'] = $this->paket_model->get_paket_detail($id_paket);
		$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));

		$data['main_view'] = 'jumlah_tiket_view';
		$this->load->view('template_view', $data);
	}

	public function daftar_order($id_paket)
	{
		if($this->session->userdata('login') == true) {
			$kuantitas = $this->input->post('jumlah_tiket');
			$tanggal = $this->input->post('tanggal_berangkat');

			if($this->input->post('submit_konvermasi')) {
				$data['paket_detail'] = $this->paket_model->get_paket_detail($id_paket);
				$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
				$data['paket_order'] = $this->user_model->order_paket();
				$data['jml'] = $kuantitas;
				$data['tgl'] = $tanggal;
				$data['main_view'] = 'daftar_order_view';
				$this->load->view('template_view', $data);
			} else {
				redirect('home');
			}
		} else {
			redirect('home');
		}
	}

	public function pembayaran($id_paket)
	{
		if($this->session->userdata('login') == true) {
			$kuantitas = $this->input->post('jumlah_tiket');
			$data_paket = $this->booking_model->ambil_data_paket($id_paket);
			$total_booking = $kuantitas * $data_paket[0]['harga_tiket'];

			if($this->input->post('submit_booking')) {
				if ($this->booking_model->booking_data($id_paket,$total_booking) == TRUE) {
					$data['paket_detail'] = $this->paket_model->get_paket_detail($id_paket);
					$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
					$data['paket_order'] = $this->user_model->order_paket();
					$data['ttl'] = $total_booking;
					$data['main_view'] = 'pembayaran_view';
					$this->load->view('template_view', $data);
				} else {
					redirect('booking/daftar_order/'.$this->uri->segment(3));
				}
			} else {
				redirect('booking/daftar_order/'.$this->uri->segment(3));
			}
		} else {
			redirect('home');
		}
	}

	public function do_booking($id_paket)
	{
		if($this->session->userdata('login') == true) {
			$kuantitas = $this->input->post('jumlah_tiket');
			$data_paket = $this->booking_model->ambil_data_paket($id_paket);
			$total_booking = $kuantitas * $data_paket[0]['harga_tiket'];

			if($this->input->post('submit_booking')) {
				$this->form_validation->set_rules('tanggal_berangkat', 'Tanggal Berangkat', 'required');

				if ($this->form_validation->run() == TRUE) {
					if ($this->booking_model->booking_data($id_paket,$total_booking) == TRUE) {
						$data['paket_detail'] = $this->paket_model->get_paket_detail($id_paket);
						$data['profil_user'] = $this->user_model->get_detail_profile($this->session->userdata('username'));
						$data['main_view'] = 'konfirmasi_data_view';
						$this->load->view('template_view', $data);
					} else {
						redirect('booking/jumlah_tiket/'.$this->uri->segment(3));
					}
				} else {
					$this->session->set_flashdata('notif_booking', '<p class="alert alert-danger">Pilih tanggal berangkat</p>');
					redirect('booking/jumlah_tiket/'.$this->uri->segment(3));
				}
			} else {
				redirect('home');
			}
		} else {
			redirect('home');
		}
	}
}