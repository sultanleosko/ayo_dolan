<?php

class Paket_model extends CI_Model {
	public $db_table = 'tb_paket';

	public function get_six_paket()
	{
		return $this->db->order_by('id_paket','DESC')
						->limit(6)
						->get($this->db_table)
						->result();
	}

	public function get_four_paket()
	{
		return $this->db->order_by('id_paket','DESC')
						->limit(4)
						->get($this->db_table)
						->result();
	}

	public function get_paket_detail($id_paket)
	{
		return $this->db->where('id_paket',$id_paket)
						->limit(1)
						->get($this->db_table)
						->row();
	}

	public function get_all_paket()
	{
		return $this->db->order_by('id_paket','DESC')
						->get($this->db_table)
						->result();
	}
}	