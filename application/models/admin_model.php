<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public $db_table = 'tb_destinasi';	
	public $db_table2 = 'tb_booking';	
	public $db_table3 = 'tb_user';
	public $db_kebudayaan = 'tb_kebudayaan';

	public function add_kota()
	{
		$tambah_kota = array(
				'nama_kota' => $this->input->post('namakota_tambah'),
				'julukan_kota' => $this->input->post('julukankota_tambah'),
				'kondisi_kota' => $this->input->post('kondisikota_tambah'),
				'deskripsi_kota' => $this->input->post('deskripsikota_tambah'),
				'gambar_kota' => $this->input->post('gambarkota_tambah'),
				'slide_satu' => $this->input->post('slidesatukota_tambah'),
				'slide_dua' => $this->input->post('slideduakota_tambah'),
				'slide_tiga' => $this->input->post('slidetigakota_tambah')
			);
		$query = $this->db->insert($this->db_table, $tambah_kota);

		if($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapus_data($where, $table)
	{
		return $this->db->where($where)
				 		->delete($table);
	}

	public function updatestatus($where)
	{
		$query = array(
				'status_booking' => "sukses"
			);
		$query1 = $this->db->where('id_booking',$where)
						  ->limit(1)
						  ->update('tb_booking', $query);
		return $query;
	}

	public function get_tabel_destinasi() 
	{
		return $this->db->order_by('id_destinasi', 'ASC')
						->get($this->db_table)
						->result();
	}

	public function get_tabel_kebudayaan() 
	{
		return $this->db->order_by('id', 'ASC')
						->get($this->db_kebudayaan)
						->result();
	}

	public function get_tabel_booking() 
	{
		return $this->db->order_by('id_booking', 'ASC')
						->get($this->db_table2)
						->result();
	}

	public function get_tabel_user() 
	{
		return $this->db->order_by('id_user', 'ASC')
						->get($this->db_table3)
						->result();
	}

}