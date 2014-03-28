<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('blog_model');
		$this->load->helper('typography');
		
		if ( !$this->session->userdata('logged_in') )
		{
			redirect('login');
		}
		
	}
	
	function index()
	{				
		$this->template->set('title', 'United Blog');
		$this->template->view('new-topic_view');
	}
	
	function topics()
	{
		$data['topics'] = $this->blog_model->getTopics();
				
		$this->template->set('title', 'Zoznam článkov | United Blog');
		$this->template->view('topics_view', $data);
	}
	
	function topicsUpdate($id)
	{
		$data['topic'] = $this->blog_model->getTopicsForEdit($id);
		
		$this->template->set('title', 'Upraviť článok | United Blog');
		$this->template->view('update-topic_view', $data);
	}
	
	function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nazov', 'Názov', 'trim|required|xss_clean|htmlspecialchars')
							  ->set_rules('text', 'Text', 'trim|required|xss_clean|htmlspecialchars')
							  ->set_error_delimiters('<p class="validation_error">', '</p>');
		
		if($this->form_validation->run())
		{
			$data = array(
				'nazov' => $this->input->post('nazov'),
				'text' => $this->input->post('text'),
			);
			
			set_flash_data('success', 'Nový článok bol úspešne pridaný.');
			$this->blog_model->addTopic($data);
			redirect('blog');
		}
		else		
		{
			$this->index();
		}
	}
	
	function update($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nazov', 'Názov', 'trim|required|xss_clean|htmlspecialchars')
							  ->set_rules('text', 'Text', 'trim|required|xss_clean|htmlspecialchars')
							  ->set_error_delimiters('<p class="validation_error">', '</p>');
		
		if($this->form_validation->run())
		{
			$data = array(
				'nazov' => $this->input->post('nazov'),
				'text' => $this->input->post('text'),
			);
			
			set_flash_data('success', 'Článok bol aktualizovaný.');
			$this->blog_model->updateTopic($id, $data);
			redirect('blog');
		}
		else		
		{
			$data['topic'] = $this->blog_model->getTopicsForEdit($id);
		
			$this->template->set('title', 'Upraviť článok | United Blog');
			$this->template->view('update-topic_view', $data);
		}
	}

}