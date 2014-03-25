<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function view($slug)
	{
		$this->load->model('categories_m');
		$this->load->model('post_m');
		
		$id = $this->post_m->get_slug_id($slug);
		
		if($id){
			
				$categories = $this->categories_m->get_categories();	
				$post = $this->post_m->get_post($id);
				$gallerydata = $this->post_m->get_gallery_data($id);
				
				if ($categories) {
					$data['categories'] = $categories;
				}
				if ($post) {
					$data['post'] = $post;
				}
				if ($gallerydata) {
					$data['gallerydata'] = $gallerydata;
				}
		
				if($post[0]->Gallery_Type == "image-gallery"){
					$this->load->view('image-gallery',$data);
				}else if($post[0]->Gallery_Type == "video-gallery"){
					$this->load->view('video-gallery',$data);
				}
		
				

		}else{
			//check if 0 retured = no record found....redirect to home page
			redirect('/');			
		}
		
		

		
	}
	
	
	
	
	public function preview($id)
	{
		$this->load->model('categories_m');
		$this->load->model('post_m');
		
    	$categories = $this->categories_m->get_categories();	
		$post = $this->post_m->get_post($id);
		
		if ($post) {
				$gallerydata = $this->post_m->get_gallery_data($id);
				if ($categories) {
					$data['categories'] = $categories;
				}
      			$data['post'] = $post;
			
				if ($gallerydata) {
					$data['gallerydata'] = $gallerydata;
				}
				if($post[0]->Gallery_Type == "image-gallery"){
					$this->load->view('image-gallery-preview',$data);
				}else if($post[0]->Gallery_Type == "video-gallery"){
					$this->load->view('video-gallery-preview',$data);
				}
		
		
    	}else{
			//check if 0 retured = no record found....redirect to home page
			redirect('/');
		}

		
	}

	
	

	
}