<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if( !$this->session->userdata('isLoggedIn') ) {
			redirect('/login/show_login');
		}
		$this->load->model('categories_m');
		$this->load->model('article_m');
		$this->load->model('post_m');
		$this->load->helper('form');
		//$this->load->model('Products_model');
		//$this->load->library('form_validation');
	}
	
	
	public function index()
	{
		$data = $this->summary_view_build();		
		$this->load->view('dashboard', $data);
	}
	

	function summary_view_build(){
		$data["articles_count_summary"]["article"] = $this->article_m->get_posts_count("article");
		$data["articles_count_summary"]["gallery"] = $this->article_m->get_posts_count("gallery");
		$data["articles_count_summary"]["draft"] = $this->article_m->get_drafts_count();	
		return $data;
	}
	
		

	public function articles_list($filter_key="NULL", $value="NULL")
	{	
		//$data = $this->summary_view_build();	
		
		$data['sections'] = $this->categories_m->get_categories();
		$data["articles_list"] = $this->article_m->get_articles_list($filter_key, $value);
		$data["selected_value"] = $value;
		$this->load->view("articles_list", $data);
	}
	
	public function drafts_list($filter_key="NULL", $value="NULL")
	{	
		//$data = $this->summary_view_build();	
		
		$data['sections'] = $this->categories_m->get_categories();
		$data["drafts_list"] = $this->article_m->get_drafts_list($filter_key, $value);
		$data["selected_value"] = $value;
		$this->load->view("drafts_list", $data);
	}
	
	
	
	public function slideshow_list()
	{	
		$data['sections'] = $this->categories_m->get_categories();	
		//$data["slideshow_media_list"] = $this->post_m->get_slideshow_media_list();
		$this->load->view("slideshow_list", $data);
	}
	
	public function slideshow($section_id)
	{		
		$data["section_id"] = $section_id;
		$data["slideshow_media_list"] = $this->post_m->get_slideshow_media_list($section_id);
		$this->load->view("slideshow", $data);
	}
	
	
	
	
	public function delete_slide() {
		
		$id = $this->input->post('del_item_id');
		$this->post_m->del_slide_file($id);
		echo "success";
	}
	
	
	public function delete_gallery_slide() {
		
		$id = $this->input->post('del_item_id');
		$this->post_m->del_gallery_slide_file($id);
		echo "success";
	}
	
	
	
	public function gallery_list($filter_key="NULL", $value="NULL")
	{		
		
		$data['sections'] = $this->categories_m->get_categories();
		$data["gallery_list"] = $this->article_m->get_gallery_list($filter_key, $value);
		$data["selected_value"] = $value;
		$this->load->view("gallery_list", $data);
	}	
		
	
	public function display_options($filter_key="NULL", $value="NULL")
	{		
		
		$data['sections'] = $this->categories_m->get_categories();
		$data["posts_list"] = $this->article_m->get_all_posts_list($filter_key, $value);
		$data["selected_value"] = $value;
		$this->load->view("display_posts_list", $data);
	}
	
	public function update_tile_display() {
		
		$id = $this->input->post('upd_item_id');
		$upd_val = $this->input->post('upd_tile_val');
		$this->post_m->update_tile_display($id, $upd_val);
		echo "success";
	}
	
	
	
	
	
		public function slideshow_sort_list($id){
			$this->load->helper('common_methods_helper');
			$this->load->model('post_m');	
			$list = $this->post_m->get_slideshow_media_list($id);
			
			if($list){
				$data["slideshow_list"] = $list;
				$this->load->view("slideshow_sorting",$data);	
			}
		}
		
		
		
		
		public function update_slideshow_sorting(){
			
			$this->load->model('post_m');
			$articleData["recordsArray"] = $this->input->post('recordsArray');
			$this->post_m->update_slideshow_sorting($articleData);
			echo "Rearranged";
			
		}
		
		
		
		public function sections_list()
		{		
			$data['sections_list'] = $this->categories_m->get_categories();
			$this->load->view("side_menu", $data);
		}
	
	
		public function section_sort_list(){
			
			$this->load->helper('common_methods_helper');	
			$data['sections_list'] = $this->categories_m->get_categories();
			$this->load->view("section_sorting",$data);		
		}
		
		
		
		
		public function update_section_sorting(){
			
			$articleData["recordsArray"] = $this->input->post('recordsArray');
			$this->post_m->update_section_sorting($articleData);
			echo "Rearranged";
			
		}
		
		
		public function delete_section() {
		
		$id = $this->input->post('del_item_id');
		$this->post_m->del_section($id);
		echo "success";
		}
		
		
		public function edit_section($id) {
		
		$data["action_mode"] = "edit";
		$data['section'] = $this->categories_m->get_category($id);
		$data['sections_list'] = $this->categories_m->get_categories();
		$this->load->view("side_menu", $data);
		}
		
		
		public function submit_upd_section() {
		
			$articleData["section_title"] = $this->input->post('section_title');
			$articleData["section_id"] = $this->input->post('section_id');
			$response = $this->categories_m->upd_section($articleData);
				
			if($response){					
				$data['sections_list'] = $this->categories_m->get_categories();
			}
				//$this->load->view("side_menu", $data);
				redirect("/manage/sections_list");
		}
		
		
		public function submit_section() {
		
			$articleData["section_title"] = $this->input->post('section_title');
			$this->categories_m->insert_section($articleData);					
			$data['sections_list'] = $this->categories_m->get_categories();
			//$this->load->view("side_menu", $data);
			redirect("/manage/sections_list");
		}
		
		
		
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*--------------------------NOT USED-------------------------------------*/
	function add_product() {
		$this->data['title'] = 'Add Product';

		//validate form input
		$this->form_validation->set_rules('name', 'Product name', 'required|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');
		$this->form_validation->set_rules('price', 'Price', 'required|xss_clean');
		$this->form_validation->set_rules('picture', 'Picture', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{		
			$data = array(
				'name'				=> $this->input->post('name'),
				'description'		=> $this->input->post('description'),
				'price' 			=> $this->input->post('price'),
				'picture'  			=> $this->input->post('picture')
			);
			
			$this->Products_model->insert_product($data);
			
			$this->session->set_flashdata('message', "<p>Product added successfully.</p>");
			
			redirect(base_url().'manage');
		}else{
			//display the add product form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));

			$this->data['name'] = array(
				'name'  	=> 'name',
				'id'    	=> 'name',
				'type'  	=> 'text',
				'style'		=> 'width:300px;',
				'value' 	=> $this->form_validation->set_value('name'),
			);			
			$this->data['description'] = array(
				'name'  	=> 'description',
				'id'    	=> 'description',
				'type'  	=> 'text',
				'cols'		=>	60,
				'rows'		=>	5,
				'value' 	=> $this->form_validation->set_value('description'),
			);
			$this->data['price'] = array(
				'name'  	=> 'price',
				'id'    	=> 'price',
				'type'  	=> 'text',
				'style'		=> 'width:40px;text-align: right',
				'value' 	=> $this->form_validation->set_value('price'),
			);
			$this->data['picture'] = array(
				'name'  => 'picture',
				'id'    => 'picture',
				'type'  => 'text',
				'style'	=> 'width:250px;',
				'value' => $this->form_validation->set_value('picture'),
			);
			
			$this->load->view('add_product', $this->data);
		}
	}

	function edit_product($product_id) {
		$product = $this->Products_model->get_product($product_id);

		$this->data['title'] = 'Edit Product';
	
		//validate form input
		$this->form_validation->set_rules('name', 'Product name', 'required|xss_clean');$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');
		$this->form_validation->set_rules('price', 'Price', 'required|xss_clean');
		$this->form_validation->set_rules('picture', 'Picture', 'required|xss_clean');
	
		if (isset($_POST) && !empty($_POST))
		{		
			$data = array(
				'name'					=> $this->input->post('name'),
				'description'			=> $this->input->post('description'),
				'price' 				=> $this->input->post('price'),
				'picture' 				=> $this->input->post('picture'),
			);

			if ($this->form_validation->run() === true)
			{
				$this->Products_model->update_product($product_id, $data);

				$this->session->set_flashdata('message', "<p>Product updated successfully.</p>");
				
				redirect(base_url().'product/edit/'.$product_id);
			}			
		}

		$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
		
		$this->data['product'] = $product;
		
		//display the edit product form
		$this->data['name'] = array(
			'name'  	=> 'name',
			'id'    	=> 'name',
			'type'  	=> 'text',
			'style'		=> 'width:300px;',
			'value' 	=> $this->form_validation->set_value('name', $product['name']),
		);
		
		$this->data['description'] = array(
			'name'  	=> 'description',
			'id'    	=> 'description',
			'type'  	=> 'text',
			'cols'		=>	60,
			'rows'		=>	5,
			'value' 	=> $this->form_validation->set_value('description', $product['description']),
		);

		$this->data['price'] = array(
			'name'  	=> 'price',
			'id'    	=> 'price',
			'type'  	=> 'text',
			'style'		=> 'width:40px;text-align: right',
			'value' 	=> $this->form_validation->set_value('price', $product['price']),
		);
	
		$this->data['picture'] = array(
			'name'  => 'picture',
			'id'    => 'picture',
			'type'  => 'text',
			'style'	=> 'width:250px;',
			'value' => $this->form_validation->set_value('picture', $product['picture']),
		);

		$this->load->view('edit_product', $this->data);
	}	
	
	function delete_product($product_id) {
		$this->Products_model->del_product($product_id);
		
		$this->session->set_flashdata('message', '<p>Product were successfully deleted!</p>');
		
		redirect('manage');
	}
}