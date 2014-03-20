<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}
	
	function index()
	{
		$this->load->view('blog_view');	
	}
	
	function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
		$this->form_validation->set_rules('heslo', 'Heslo', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<p class="validation_error">','</p>');
		
		// ak prejde validaciou a uspesne sa zaregistruje
		if($this->form_validation->run())
		{
			if($this->auth_model->check())
			{
				// vytvorime session
				$data = $this->auth_model->getUserData($_POST['login']);
				$data['logged_in'] = true;
				
				$this->session->set_userdata($data);
				redirect('blog');
			}
			else
			{
				echo 'Nesprávne prihlasovacie meno alebo heslo.';
			}
		}
		else		
		{
			// chyba
		}
		
		$this->load->view('login_view');
	}
	
	function logout()
	{
		$this->session->unset_userdata(array('login'=>'', 'logged_in'=>'', 'uid'=>''));
		$this->login();
	}

}