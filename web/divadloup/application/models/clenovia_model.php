<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clenovia_model extends CI_Model {
	
	function zoznamClenov() 
	{
		$query = $this->db->get('up_clenovia');

			return $query -> result();
	}
}