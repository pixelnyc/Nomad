<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if( !$this->session->userdata('isLoggedIn') ) {
			redirect('/login/show_login');
		}
		$this->load->model('author_m');
		$this->load->helper('form');
	}
	
	
	
	public function author_list($filter_key="NULL", $value="NULL")
	{		
		
		//$data['sections'] = $this->categories_m->get_categories();
		$data["author_list"] = $this->author_m->get_author_list();
		$this->load->view("author_list", $data);
	}
	
	
	public function add_author()
	{
			$this->load->view("add_author");
	}
	
	
	public function submit_author_step1()
	{
			$authorData["author_name"] = $this->input->post('author_name');
			$authorData["author_slug"] = url_title($this->input->post('author_name'), 'dash', true);
			$authorData["email"] = $this->input->post('email');
			$authorData["author_bio"] = $this->input->post('author_bio');
			
			$id = $this->author_m->add_author_step1($authorData);
			redirect('/author/add_author_picture/'.$id);
			
	}	
	
	
	public function add_author_picture($id)
	{
			$data["id"] = $id;
			$this->load->view("add_author_thumbnail", $data);
	}	
	
	
	

}