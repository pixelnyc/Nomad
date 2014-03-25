<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
	
	public function archive($cat_slug){
			
		$this->load->model('categories_m');
		$this->load->model('post_m');
		$this->load->helper('common_methods_helper');
		
		$id = $this->categories_m->get_cat_slug_id($cat_slug);
    	$categories = $this->categories_m->get_categories();
    	$posts = $this->post_m->get_posts($id);
		//$data["front_page_video"] = $this->post_m->get_front_video();	
		$data["slideshow_media_files"] = $this->post_m->get_slideshow_media_files($id);
    	if ($categories) {
      		$data['categories'] = $categories;
    	}
    	if ($posts) {
      		$data['posts'] = $posts;
    	}
		$this->load->view('trending',$data);
	}
	
	
	
	
	
	
}