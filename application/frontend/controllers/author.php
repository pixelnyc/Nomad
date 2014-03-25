<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {

	public function view($slug)
	{
		$this->load->model('categories_m');
		$this->load->model('author_m');
		$this->load->helper('common_methods_helper');
		
		$id = $this->author_m->get_slug_id($slug);
		
		if($id){		
		
				$categories = $this->categories_m->get_categories();	
				$post = $this->author_m->get_author($id);
				//$gallerydata = $this->post_m->get_gallery_data($id);
				
				if ($categories) {
					$data['categories'] = $categories;
				}
				if ($post) {
					$data['post'] = $post;
				}
				
				$data['posts_count'] = $this->author_m->get_posts_count($id);
				$data['author_posts'] = $this->author_m->get_author_posts($id);
				
				
				
		if($post[0]->Author_Thumbnail == ""){
			$data['auth_thumbnail'] = base_url()."assets/images/author-icon.png";
		}else{
			$data['auth_thumbnail'] = base_url()."uploads/author-thumbs/".$post[0]->Author_Thumbnail;
		}
	
				
				$this->load->view('author-profile',$data);
		
		}else{
			//check if 0 retured = no record found....redirect to home page
			redirect('/');			
		}
		
		
	}
	

	
}
