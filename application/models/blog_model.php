<?php

class Blog_model extends CI_Model {
	public $db_table = 'tb_blog';

	public function get_four_blog()
	{
		return $this->db->order_by('id_blog','DESC')
						->limit(4)
						->get($this->db_table)
						->result();
	}

	public function get_three_blog()
	{
		return $this->db->order_by('id_blog','DESC')
						->limit(3)
						->get($this->db_table)
						->result();
	}

	public function get_blog_detail($id_blog)
	{
		return $this->db->where('id_blog',$id_blog)
						->limit(1)
						->get($this->db_table)
						->row();
	}
}