<?php

class Destinasi_model extends CI_Model {
	public $db_table = 'tb_destinasi';

	function insert($data,$table){
		return $this->db->insert($table,$data);
	}

	public function get_all_destinasi()
	{
		return $this->db->order_by('id_destinasi','DESC')
						->get($this->db_table)
						->result();
	}

	public function get_six_destinasi()
	{
		return $this->db->order_by('id_destinasi','DESC')
						->limit(6)
						->get($this->db_table)
						->result();
	}

	public function get_two_destinasi()
	{
		return $this->db->order_by('id_destinasi','DESC')
						->limit(2)
						->get($this->db_table)
						->result();
	}

	public function get_four_destinasi()
	{
		return $this->db->order_by('id_destinasi','DESC')
						->limit(4)
						->get($this->db_table)
						->result();
	}

	public function get_destinasi_detail($id_destinasi)
	{
		return $this->db->where('id_destinasi',$id_destinasi)
						->limit(1)
						->get($this->db_table)
						->row();
	}
}