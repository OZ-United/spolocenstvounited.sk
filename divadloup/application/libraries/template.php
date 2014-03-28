<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template {
	
	var $template_data = array();
	
	function set($name, $value)
	{
		$this->template_data[$name] = $value; // do $name sa ulozi 'title' a do $value 'Home page'
	}
	
	function view($view = '', $view_data = array())
	{
		$ci =& get_instance();
		
		$this->set('content', $ci->load->view($view, $view_data, true));
		
		return $ci->load->view('template', $this->template_data);
	}
	
}