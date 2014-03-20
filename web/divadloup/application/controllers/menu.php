<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('clenovia_model');
	}

	function clenovia()
	{
		$data['up_clenovia'] = $this->clenovia_model->zoznamClenov();
		
		$this->template->set('title', 'Členovia');	
		$this->template->view('clenovia_view', $data);
	}
	
	function predstavenia()
	{
		$this->template->set('title', 'Predstavenia');	
		$this->template->view('predstavenia_view');
	}
	
	function galeria()
	{
		$this->template->set('title', 'Galéria');	
		$this->template->view('galeria_view');
	}
	
	function kontakt()
	{
		$this->template->set('title', 'Kontakt');	
		$this->template->view('kontakt_view');
	}
}