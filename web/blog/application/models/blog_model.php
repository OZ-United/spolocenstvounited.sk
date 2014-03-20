<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {
	
	function getTopics()
	{
		$query = $this->db->order_by('id desc')
						  ->get('blog');

		return $query->result();
	}
	
	function getTopicsForEdit($id)
	{
		$query = $this->db->where('id', $id)
						  ->get('blog');

		return $query->row();
	}
	
	function addTopic($data)
	{
		$this->db->insert('blog', $data);
	}
	
	function updateTopic($id, $data)
	{
		$this->db->where('id', $id)
				 ->limit(1)
				 ->update('blog', $data);
				 
		return $this->db->affected_rows();
	}
}