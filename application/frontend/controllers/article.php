<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {
	
		public function view($slug){
			
		$this->load->model('categories_m');
		$this->load->model('post_m');
		$this->load->helper('common_methods_helper');
		$id = $this->post_m->get_slug_id($slug);
		
		if($id){		
			$categories = $this->categories_m->get_categories();
			$post = $this->post_m->get_post($id);	
			$postsdata = $this->post_m->get_posts_data($id);
		
			if ($categories) {
				$data['categories'] = $categories;
			}
			if ($post) {
				$data['post'] = $post;
			}
			if ($postsdata) {
				$data['postsdata'] = $postsdata;
			}
			$this->load->view('article',$data);
		}else{
			//check if 0 retured = no record found....redirect to home page
			redirect('/');			
		}
	}
	
	
	public function preview($id){
			
		$this->load->model('categories_m');
		$this->load->model('post_m');
		$this->load->helper('common_methods_helper');
				
    	$categories = $this->categories_m->get_categories();
    	$post = $this->post_m->get_post($id);	
		
	

    	if ($post) {
			
			$postsdata = $this->post_m->get_posts_data($id);
			if ($categories) {
				$data['categories'] = $categories;
			}
      		$data['post'] = $post;
			if ($postsdata) {
				$data['postsdata'] = $postsdata;
			}
			$this->load->view('article-preview',$data);	
		
		
		}else{
			//check if 0 retured = no record found....redirect to home page
			redirect('/');
		}
		
	}
	
	
	
	
	
}