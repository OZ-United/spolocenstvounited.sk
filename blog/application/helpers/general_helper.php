<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function pre_r($expression, $return = false)
{
	if ($return)
	{
	  if (is_string($expression)) return '<pre>' . print_r(str_replace(array('<','>'), array('&lt;','&gt;'), $expression), true) . '</pre>';
		return '<pre>' . print_r($expression, true) . '</pre>';
	}
	else
	{
		echo '<pre>';
		if (is_string($expression)) print_r(str_replace(array('<','>'), array('&lt;','&gt;'), $expression), false);
		else print_r($expression, false);
		echo '</pre>';
	}
}

function set_flash_data($type = 'error', $message) // ak nic nezadame, defaultne to bude error
{
	$ci =& get_instance();
	$ci->session->set_flashdata('message', '<p class="flash ' . $type . '">' . $message . '</p>');
}