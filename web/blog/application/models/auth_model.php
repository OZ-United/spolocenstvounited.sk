<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {
	
	function check()
	{
		$select = $this->db->where('login', $_POST['login'])
						   ->where('heslo', $_POST['heslo'])
						   ->get('blog_users');
						   
						   
		return $select->num_rows();
	}
	
	function getUserData($login)
	{
		$select = $this->db->select('uid, login')
						   ->where('login', $login)
						   ->limit(1)
						   ->get('blog_users');
						   
		if ($select->num_rows() > 0) return $select->row_array();
		else return false;
	}
}