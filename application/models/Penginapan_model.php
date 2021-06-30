<?php
class Penginapan_model extends CI_Model {
	public $db_table = 'tb_penginapan';	

	public function get_all_penginapan()
	{
		return $this->db->order_by('id_penginapan','DESC')
						->get($this->db_table)
						->result();
	}

	public function get_harga_tertinggi()
	{
		return $this->db->order_by('harga_penginapan','DESC')
						->get($this->db_table)
						->result();
	}

	public function get_harga_terendah()
	{
		return $this->db->order_by('harga_penginapan','ASC')
						->get($this->db_table)
						->result();
	}

	public function get_penginapan_detail($id_penginapan)
	{
		return $this->db->where('id_penginapan',$id_penginapan)
						->limit(1)
						->get($this->db_table)
						->row();
	}

	public function get_four_penginapan()
	{
		return $this->db->order_by('id_penginapan','DESC')
						->limit(4)
						->get($this->db_table)
						->result();
	}
}