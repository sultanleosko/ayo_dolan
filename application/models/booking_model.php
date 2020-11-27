<?php

class Booking_model extends CI_Model {
	public $db_table = 'tb_booking';

	public function index()
	{

	}

	public function booking_data($id_paket,$total_booking)
	{
		$booking_data = array(
				'username' => $this->session->userdata('username'),
				'tanggal_booking' => $this->input->post('tanggal_berangkat'),
				'kuantitas' => $this->input->post('jumlah_tiket'),
				'status_booking' => "book",
				'id_paket' => $id_paket,
				'total_booking' => $total_booking
			);
		$query = $this->db->insert($this->db_table, $booking_data);

		if($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ambil_data_paket($id_paket)
	{
		$query = $this->db->select('*')
						->from('tb_paket')
						->where('id_paket',$id_paket)
						->get();
		return $query->result_array();
	}

	public function dell($id_booking)
	{
		$this->db->where('id_booking', $id_booking)
				->delete('tb_booking');
		
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function confirm($id_booking)
	{
		$book = $this->db->select('id_booking')
		->where('id_booking', $id_booking)
		->get('tb_booking')
		->row();

		$book = $this->input->post('book');

		if ($kode == $book->id_booking) {

			$data = array(
			'username' => $this->session->userdata('username'),
			'book' => $kode
			);

		$this->db->insert('payment', $data);
		if ($this->db->affected_rows() == 1) 
		{
			$data2 = array('status'=>terkonfirm);
			$this->db->where('id_booking', $id_booking)->update('tb_booking', $data2);
			if ($this->db->affected_rows()==terkonfirm) {
				return TRUE;
		} 
			else {
				return TRUE;
			}
		} else {
			return FALSE;
		}
	}
		else {
			return FALSE;
		}
	}

	public function update($qty)
	{
		$query = ('UPDATE `tb_paket` SET `kuota` = `kuota` - '.$qty.' where `id_paket` ='.$this->uri->segment(4));

		$this->db->query($query);

	}

	
	public function get_booking_detail($id_booking)
	{
		return $this->db->where('id_booking',$id_booking)
						->limit(1)
						->get($this->db_table)
						->row();
	}
}