<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Article extends CI_Controller {
	
	
	
	  public function __construct()
	  {
		parent::__construct();
	
		if( !$this->session->userdata('isLoggedIn') ) {
			redirect('/login/show_login');
		}
	  }	
	

		
		public function submit_art_step1()
		{
			$this->load->model('article_m');
	
			$articleData["author"] = $this->input->post('author_name');
			$articleData["author_id"] = $this->input->post('author_id');
			$articleData["headline"] = $this->input->post('headline');
			$articleData["byline"] = $this->input->post('byline');
			$articleData["section"] = $this->input->post('section');
			$articleData["photographer_name"] = $this->input->post('photographer_name');
			$articleData["photographer_gps_code"] = $this->input->post('photographer_gps_code');
			$articleData["post_type"] = $this->input->post('post_type');
			if($articleData["post_type"] == "gallery"){
			$articleData["gallery_type"] = $this->input->post('gallery_type');	
			}
			$articleData["slug"] = url_title($articleData["headline"], 'dash', true);
			
			
			$id = $this->article_m->add_article_step1($articleData);
			if($id){
			$data["id"] = $id;
			$this->load->helper('form');
			
				if($articleData["post_type"] == "article"){
					$this->load->view("add_article2", $data);
				}else{
					$this->load->view("add_image_gallery2", $data);
				}
			}				
    	}
		


		public function submit_art_step2()
		{
			$this->load->model('article_m');
				
				
			$articleData["cover_type"] = $this->input->post('cover_type');
			
			if($articleData["cover_type"] == "image"){
							
			$config['upload_path'] = '../uploads/large/';
			$config['allowed_types'] = 'gif|jpg|png';
			
			}elseif($articleData["cover_type"] == "video"){
				
			$config['upload_path'] = '../uploads/videos/';
			$config['allowed_types'] = 'mp4';	
			}
			$this->load->library('upload', $config);
		
		
			if ( ! $this->upload->do_upload('cover_file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}else{
				
				$uploaded_file_info = $this->upload->data();
				$articleData["cover_file"] = $uploaded_file_info["file_name"];
				$id = $this->input->post('id');
				if($this->article_m->add_article_step2($articleData, $id)){
					
					$data["id"] = $id;
					$list = $this->article_m->get_article_content_list($id);
					if($list){
					$this->load->helper('common_methods_helper');	
					$data["article_content_list"] = $list;	
					}
					$this->load->helper('form');
					$this->load->view("add_article3", $data);
					
					
					
				}

			}
		
    	}	
	







		public function submit_gallery_step1()
		{
			$this->load->model('article_m');
	
			$articleData["author_name"] = $this->input->post('author_name');
			$articleData["headline"] = $this->input->post('headline');
			$articleData["byline"] = $this->input->post('byline');
			$articleData["section"] = $this->input->post('section');
			$articleData["photographer_name"] = $this->input->post('photographer_name');
			$articleData["photographer_gps_code"] = $this->input->post('photographer_gps_code');
			$articleData["post_type"] = $this->input->post('post_type');
			if($articleData["post_type"] == "gallery"){
			$articleData["gallery_type"] = $this->input->post('gallery_type');	
			}
			$articleData["slug"] = url_title($articleData["headline"], 'dash', true);
			
			
			$id = $this->article_m->add_gallery_step1($articleData);
			if($id){
			$data["id"] = $id;
			$data["gallery_type"] = $articleData["gallery_type"];
			$this->load->helper('form');

			$this->load->view("add_gallery2", $data);
			}				
    	}













		
			public function add_article_text($id){
			$data["p_id"] = $id;
			$this->load->view("add_article_text", $data);	
			}
			
			public function add_article_content(){
			$this->load->helper('common_methods_helper');
			$this->load->model('article_m');
			$articleData["post_id"] = $this->input->post('p_id');
			$articleData["data_type"] = $this->input->post('data_type');
			$articleData["data_contents"] = $this->input->post('html_contents');
			$data = $this->article_m->insert_article_content($articleData);
			echo "Text Added Successfully...";
			
		}
		
		
	
		public function update_article_content_sorting(){
			
			$this->load->model('article_m');
			$articleData["recordsArray"] = $this->input->post('recordsArray');
			$this->article_m->update_article_content_sorting($articleData);
			echo "Rearranged";
			
		}	
		
		
		
		
		public function delete_article_content(){
			
			$this->load->model('article_m');	
			$id = $this->input->post('del_item_id');
			if($this->article_m->delete_article_content($id)){
				echo "success";	
			}
		}
		
		
		public function delete_article(){
			
			$this->load->model('article_m');	
			$id = $this->input->post('del_item_id');
			if($this->article_m->delete_article($id)){
				echo "success";	
			}
		}
		
		
		
		public function article_content_list($id){
			$this->load->helper('common_methods_helper');
			$this->load->model('article_m');	
			//$this->load->view("article_content_sorting");
			$list = $this->article_m->get_article_content_list($id);
			
			if($list){
				$data["article_content_list"] = $list;
				$this->load->view("article_content_sorting",$data);	
			}
		}
		
		
		public function proceed_step3($id){
					$this->load->model('article_m');
					$data["id"] = $id;
					$list = $this->article_m->get_article_content_list($id);
					if($list){
					$this->load->helper('common_methods_helper');	
					$data["article_content_list"] = $list;	
					}
					$this->load->helper('form');
					$this->load->view("add_article3", $data);	
		}
		
		
		public function proceed_image_gallery_step3($id){
					$this->load->model('article_m');
					$data["id"] = $id;
					$data["image_gallery_slide_list"] = $this->article_m->get_image_gallery_slide_list($id);
					$this->load->view("add_image_gallery3", $data);	
		}
		
		public function proceed_video_gallery_step3($id){
					$this->load->model('article_m');
					$data["id"] = $id;
					$data["video_gallery_slide_list"] = $this->article_m->get_video_gallery_slide_list($id);
					$this->load->view("add_video_gallery3", $data);	
		}
		
		
		
		
		
		

		


		
		public function update_article($id){
			
			$this->load->model('post_m');
			$this->load->model('categories_m');
			$this->load->model('author_m');
			$data['sections'] = $this->categories_m->get_categories();
			$data['authors'] = $this->author_m->get_authors();
			$this->load->helper('form');
			$data["id"] = $id;
			$data["article_data"]= $this->post_m->get_post($id);
			$this->load->view("upd_article", $data);	
		}
		
		
		
		
		
		public function submit_upd_art_step1()
		{
			$this->load->model('article_m');	
			$articleData["author"] = $this->input->post('author_name');
			$articleData["author_id"] = $this->input->post('author_id');
			$articleData["headline"] = $this->input->post('headline');
			$articleData["byline"] = $this->input->post('byline');
			$articleData["section"] = $this->input->post('section');
			$articleData["photographer_name"] = $this->input->post('photographer_name');
			$articleData["photographer_gps_code"] = $this->input->post('photographer_gps_code');
			$articleData["gallery_attach_link"] = $this->input->post('gallery_attach_link');
			$articleData["p_id"] = $this->input->post('p_id');
			$articleData["slug"] = url_title($articleData["headline"], 'dash', true);
			
			$this->article_m->upd_article_step1($articleData);
			$data["id"] = $articleData["p_id"];
			$this->load->helper('form');
			$this->load->view("upd_article2", $data);			
    	}
		
		public function proceed_upd_step3($id){

					$this->load->model('article_m');
					$data["id"] = $id;
					$list = $this->article_m->get_article_content_list($id);
					if($list){
					$this->load->helper('common_methods_helper');	
					$data["article_content_list"] = $list;	
					}
					$this->load->helper('form');
					$this->load->view("upd_article3", $data);	
		}
		
		
		
		
		
		
		
		
		public function update_video_gallery($id){
			
			$this->load->model('post_m');
			$this->load->model('categories_m');
			$data['sections'] = $this->categories_m->get_categories();
			$this->load->helper('form');
			$data["id"] = $id;
			$data["gallery_data"]= $this->post_m->get_post($id);
			$this->load->view("update_video_gallery", $data);	
		}
		
		
		
		
		
		
		
		
		
		
		
		public function get_unique_art_data_content($id){
			$this->load->model('post_m');
			
			$data["unique_art_data_content"]= $this->post_m->get_posts_data_content($id);
			$data["id"] = $id;
			$this->load->view("update_article_text", $data);
		}
		
		
	public function submit_unique_art_contents(){
			$this->load->model('article_m');
			$articleData['id'] = $this->input->post('id');
			$articleData['html_contents'] = $this->input->post('html_contents');
			if($this->article_m->upd_unique_article_content($articleData)){
				echo "Article Text Updated!";
			}
	}
	
	
	
	public function publish_article($id,$return = "NULL"){
			$this->load->model('article_m');
			$articleData['id'] = $id;
			
			$this->article_m->publish_article($articleData);
			if($return != "NULL"){
			redirect('manage/'.$return);	
			}else{
			redirect('manage/articles_list');
			}
			
	}
	
	public function publish_post($id,$return = "NULL"){
			$this->load->model('article_m');
			$articleData['id'] = $id;
			
			$this->article_m->publish_article($articleData);
			if($return != "NULL"){
			redirect('manage/'.$return);	
			}else{
			redirect('manage/articles_list');
			}
			
	}
	
		public function sort_article(){
			
			$this->load->model('article_m');	
			$id = $this->input->post('sort_item_id');
			if($this->article_m->sort_article($id)){
				echo "success";	
			}
		}
	
	
	
	
	
	
	
	
	
	
	
/*------------------Duplicate to other controller-------------------------------*/	
	
			public function archive(){
			
					$this->load->model('article_m');
					$art_list = $this->article_m->get_articles_list();
					if($art_list){	
					$data["articles_list"] = $art_list;	
					}
					$this->load->view("article_list", $data);	
			}
		
		
		



}