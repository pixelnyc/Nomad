<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		$this->load->model('categories_m');
		$this->load->model('post_m');
		$this->load->helper('common_methods_helper');
		
    	$categories = $this->categories_m->get_categories();
    	$posts = $this->post_m->get_posts();	
	
    	if ($categories) {
      		$data['categories'] = $categories;
    	}
    	if ($posts) {
      		$data['posts'] = $posts;
    	}
		
		
		
		$most_viewed_posts = $this->post_m->get_most_viewed_posts("NULL", 10);
		$data["most_viewed_list"] = $most_viewed_posts;
		
		
		
		
		//$data["front_page_video"] = $this->post_m->get_front_video();
		$section_id = "0";	// for frontpage 
		$data["slideshow_media_files"] = $this->post_m->get_slideshow_media_files($section_id);
		$this->load->view('trending-demo',$data);
	}
	
	
	
	
		public function newtiles()
	{
		$this->load->model('categories_m');
		$this->load->model('post_m');
		$this->load->helper('common_methods_helper');
		
    	$categories = $this->categories_m->get_categories();
    	$posts = $this->post_m->get_posts();	
	
    	if ($categories) {
      		$data['categories'] = $categories;
    	}
    	if ($posts) {
      		$data['posts'] = $posts;
    	}
		
		
		
		$most_viewed_posts = $this->post_m->get_most_viewed_posts("NULL", 10);
		$data["most_viewed_list"] = $most_viewed_posts;
		
		
		
		
		//$data["front_page_video"] = $this->post_m->get_front_video();
		$section_id = "0";	// for frontpage 
		$data["slideshow_media_files"] = $this->post_m->get_slideshow_media_files($section_id);
		$this->load->view('trending-demo-newtiles',$data);
	}





	
	

}
