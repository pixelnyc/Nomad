<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Pages extends CI_Controller {
	
	
	
		  public function __construct()
		  {
			parent::__construct();
		
			if( !$this->session->userdata('isLoggedIn') ) {
				redirect('/login/show_login');
			}
		  }	
	
	
	

	
	
	
	
	
	
	

		public function view($page)
		{
		
			$data['title'] = ucfirst($page); // Capitalize the first letter
		
			if($page == "add_article"){
				$this->load->helper('form');
				$this->load->model('categories_m');
				$this->load->model('author_m');
				$data['sections'] = $this->categories_m->get_categories();
				$data['authors'] = $this->author_m->get_authors();
				$data["post_type"] = "article"; 	
			}
			if($page == "add_image_gallery"){
				$this->load->helper('form');
				$this->load->model('categories_m');
				$data['sections'] = $this->categories_m->get_categories();
				$data["post_type"] = "gallery";
				$data["gallery_type"] = "image-gallery";  	
			}
			
			if($page == "add_video_gallery"){
				$this->load->helper('form');
				$this->load->model('categories_m');
				$data['sections'] = $this->categories_m->get_categories();
				$data["post_type"] = "gallery";
				$data["gallery_type"] = "video-gallery";  	
			}
			
			
			
			$this->load->view($page, $data);		
		}



}