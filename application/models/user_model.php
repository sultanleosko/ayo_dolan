<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public $db_table = 'tb_user';

	public function cek_user()
	{
		$username = $this->input->post('username_login');
		$password = $this->input->post('password_login');
		$id_user = $this->get_detail_profile($username);

		$query = $this->db->where('username',$username)
				 		  ->where('password',$password)
				 		  ->limit(1)
				 		  ->get($this->db_table);
				 		  
		$tipe_user = $query->row();
		if($query->num_rows() == 1) {
			$array_login = array(
					'login' => TRUE,
					'id_user' => $id_user->id_user,
					'username' => $username,
					'tipe_user' => $tipe_user->tipe_user
				);
			$this->session->set_userdata($array_login);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_detail_profile($username)
	{
		return $this->db->where('username', $username)
						->limit(1)
						->get($this->db_table)
						->row();
	}

	public function hapus_data($where, $table)
	{
						$this->db->where($where)
				 		->delete($table);
	}

	public function edit_data($where)
	{
		$query = array(
				'status_booking' => "pending"
			);
		$query1 = $this->db->where('id_booking',$where)
						  ->limit(1)
						  ->update('tb_booking', $query);
		return $query;
	}

	public function register_data()
	{
		$register_data = array(
				'nama_lengkap' => $this->input->post('namalengkap_reg'),
				'username' 	=> $this->input->post('username_reg'),
				'password' 	=> $this->input->post('password_reg'),
				'alamat' 	=> $this->input->post('alamat_reg'),
				'email' => $this->input->post('email_reg'),
				'tipe_user' => 2
			);
		$query = $this->db->insert($this->db_table, $register_data);

		if($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ganti_password()
	{
		$data = array(
		        'password' => $this->input->post('password_update')
			);

		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->update('tb_user', $data);
	}

	public function ganti_profil()
	{
		$data = array(
				'username' => $this->input->post('username_update'),
				'nama_lengkap' => $this->input->post('namalengkap_update'),
		        'alamat' => $this->input->post('alamat_update'),
		        'email' => $this->input->post('email_update')
			);

		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->update('tb_user', $data);
	}

	public function order_paket()
	{
		$query = $this->db->select('*')
						  ->from('tb_booking')
						  ->join('tb_user', 'tb_booking.username = tb_user.username')
						  ->join('tb_paket', 'tb_booking.id_paket = tb_paket.id_paket')
						  ->where('tb_booking.username', $this->session->userdata('username'))
						  ->order_by('tb_booking.id_booking', 'DESC')
						  ->get();
		return $query->result_array();
	}

	public function myorder()
	{
		return $this->db->select('tb_booking.id_booking, tb_booking.status_booking, tb_paket.nama_paket, tb_booking.total_booking, tb_booking.tanggal_booking, tb_booking.id_paket, tb_booking.bukti_transfer')
		->join('tb_paket','tb_paket.id_paket = tb_booking.id_paket')
		->join('tb_user','tb_user.username = tb_booking.username')
		->where('tb_user.username', $this->session->userdata('username'))
		->order_by('tb_booking.id_booking', 'DESC')
		->get('tb_booking')
		->result();
	}
}