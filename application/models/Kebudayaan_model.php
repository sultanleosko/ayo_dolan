<?php

class Kebudayaan_model extends CI_Model {
	public $db_table = 'tb_kebudayaan';

	function insert($data,$table){
		return $this->db->insert($table,$data);
	}

	function update($data, $id, $table){
		$this->db->where('id', $id);
		$this->db->update($table, $data);
	}

	public function get_all_kebudayaan()
	{
		return $this->db->order_by('id','DESC')
						->get($this->db_table)
						->result();
	}

	public function get_six_kebudayaan()
	{
		return $this->db->order_by('id','DESC')
						->limit(6)
						->get($this->db_table)
						->result();
	}

	public function get_two_kebudayaan()
	{
		return $this->db->order_by('id','DESC')
						->limit(2)
						->get($this->db_table)
						->result();
	}

	public function get_four_kebudayaan()
	{
		return $this->db->order_by('id','DESC')
						->limit(4)
						->get($this->db_table)
						->result();
	}

	public function get_kebudayaan_detail($id)
	{
		return $this->db->where('id',$id)
						->limit(1)
						->get($this->db_table)
						->row();
	}
}