<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->template->set('title', 'Úvod');	
		$this->template->view('home_view');
	}
}