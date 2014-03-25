<?php


class article_m extends CI_Model {

    
	 function  add_article_step1( $articleData ) {
      $data['Post_Author'] = $articleData['author'];
	  $data['Author_Id'] = $articleData['author_id'];
      $data['Post_Headline'] = $articleData['headline'];
      $data['Post_Byline'] = $articleData['byline'];
	  $data['Cat_Id'] = $articleData['section'];
	  $data['Photographer_Name'] = $articleData['photographer_name'];
	  $data['Photographer_Gps'] = $articleData['photographer_gps_code'];
	  $data['Post_Type'] = $articleData['post_type'];
	  if($data['Post_Type'] == "gallery"){
	  	$data['Gallery_Type'] = $articleData['gallery_type'];		  
	  }
	  $data['Post_Slug'] = $articleData['slug'];
	  $data['Date_Added'] = time();
	  $data['Status'] = "draft";
      $this->db->insert('posts',$data);
	  return mysql_insert_id();
    }
	
	 function  add_article_step2( $articleData, $id ) {
	  $data['Post_Cover_Type'] = $articleData['cover_type'];
	  $data['Post_Cover_File'] = $articleData['cover_file'];
	  $this->db->where('Post_Id', $id);
      return $this->db->update('posts',$data);
    }
	
	
	
	
	
	
	 function  add_gallery_step1( $articleData ) {

      $data['Post_Author'] = $articleData['author_name'];
	  $data['Post_Headline'] = $articleData['headline'];
      $data['Post_Byline'] = $articleData['byline'];
	  $data['Cat_Id'] = $articleData['section'];
	  $data['Photographer_Name'] = $articleData['photographer_name'];
	  $data['Photographer_Gps'] = $articleData['photographer_gps_code'];
	  $data['Post_Type'] = $articleData['post_type'];
	  if($data['Post_Type'] == "gallery"){
	  	$data['Gallery_Type'] = $articleData['gallery_type'];		  
	  }
	  $data['Post_Slug'] = $articleData['slug'];
	  $data['Date_Added'] = time();
	  $data['Status'] = "draft";
      $this->db->insert('posts',$data);
	  return mysql_insert_id();
    }	
	
	
	
	
	
	
	
	
	function  insert_article_content( $articleData ) {
		
	  $sort_id = $this->get_sort_id($articleData['post_id']);
	  
      $data['Post_Id'] = $articleData['post_id'];
      $data['Data_Type'] = $articleData['data_type'];
	  $data['Data'] = $articleData['data_contents'];
	  $data['Sort_Id'] = $sort_id;
    	
	  
	  $this->db->insert('posts_data',$data);
	  $data_return["id"] = mysql_insert_id();	
	  if($data['Data_Type']=="article"){
	  $h2t = new html2text($articleData["data_contents"]);
	  $data_return["data_contents"] = substr($h2t->get_text(), 0, 70)."[...]";
	  }else{
	  $data_return["data_contents"] = $articleData["data_contents"];	  
	  }
	  
	   
	  return $data_return;
	}
	



	
	function get_sort_id($id){	
		
		$sql = "SELECT Sort_Id FROM posts_data WHERE Post_Id = ? ORDER BY Sort_Id ASC"; 
		$query_data = $this->db->query($sql, $id);
		
		$new_sort_id = "";
		if($query_data->num_rows()>0){
			
		$arr = "";
			
		   foreach ($query_data->result() as $row){
			$arr[] = $row->Sort_Id;
		   }
		$new_sort_id =  end($arr)+1;	
		}else{
	    $new_sort_id = 1;
		}
		return $new_sort_id;	
	}
	
	
	function update_article_content_sorting($articleData){
		
		$updateRecordsArray = $articleData["recordsArray"];		
		$sortingCounter = 1;
		foreach ($updateRecordsArray as $recordIDValue) {		
			$query = "UPDATE posts_data SET Sort_Id = ? WHERE Posts_Data_Id = ?";
			$this->db->query($query, array($sortingCounter, $recordIDValue));
			$sortingCounter = $sortingCounter + 1;	
		}
	
	}
	
	
	
	function delete_article_content( $id ) {
    		  
	  $query = "DELETE FROM posts_data WHERE Posts_Data_Id = ? ";
	  return $this->db->query($query, $id); 	
	}
	
	
	function delete_article($id){
		
	  $query = "DELETE FROM posts WHERE Post_Id = ? ";
	  
	  if($this->db->query($query, $id)){
	  
	  	$query = "DELETE FROM posts_data WHERE Post_Id = ? ";
	  		$this->db->query($query, $id); 	
		$query = "DELETE FROM posts_gallery_slides WHERE Post_Id = ? ";
	  		$this->db->query($query, $id);   
			
			return 1;
	  }
	  
	  	
	}
	
	
	function get_article_content_list( $id ) {
    	
		$this->db->from('posts_data');
		$this->db->where('Post_Id', $id);
		$this->db->order_by("Sort_Id", "asc");
		$article_content_list = $this->db->get()->result_array();	
		
		if( is_array($article_content_list) && count($article_content_list) > 0 ) {
		  return $article_content_list;
		}
		
	}	
	
	
	
	function get_articles_list($filter_key, $value) {
    	
		$where = array();
		$this->db->from('posts');
		if($filter_key !="NULL" &&  $value != "NULL"){
			if($filter_key =="section"){
				$where["Cat_Id"] = $value;
			}
		}
		$where["Status"] = "published";
		$where["Post_Type"] = "article";
		$this->db->where($where);
		$this->db->order_by("Sort_Id", "desc");
		$articles_list = $this->db->get()->result_array();	
		
		if( is_array($articles_list) && count($articles_list) > 0 ) {
		  return $articles_list;
		}
		
	}
	
	
	
	function get_drafts_list($filter_key, $value) {
    	
		$where = array();
		$this->db->from('posts');
		if($filter_key !="NULL" &&  $value != "NULL"){
			if($filter_key =="section"){
				$where["Cat_Id"] = $value;
			}
		}
		$where["Status"] = "draft";
		$this->db->where($where);
		$this->db->order_by("Post_Id", "desc");
		$articles_list = $this->db->get()->result_array();	
		
		if( is_array($articles_list) && count($articles_list) > 0 ) {
		  return $articles_list;
		}
		
	}	
	
	function  upd_article_step1( $articleData ) {
		
      $data['Post_Author'] = $articleData['author'];
	  $data['Author_Id'] = $articleData['author_id'];
      $data['Post_Headline'] = $articleData['headline'];
      $data['Post_Byline'] = $articleData['byline'];
	  $data['Cat_Id'] = $articleData['section'];
	  $data['Photographer_Name'] = $articleData['photographer_name'];
	  $data['Photographer_Gps'] = $articleData['photographer_gps_code'];
	  $data['Post_Gallery_Attachment_Link'] = $articleData['gallery_attach_link'];
	  $data['Post_Slug'] = $articleData['slug'];
	  
	  $key = $articleData['p_id'];
	  $this->db->where('Post_Id', $key);
	  $this->db->update('posts', $data);
	  
    }
	
	
	function  upd_unique_article_content( $articleData ) {
		
      $data['Data'] = $articleData['html_contents'];
	  $key = $articleData['id'];
	  $this->db->where('Posts_Data_Id', $key);
	  if($this->db->update('posts_data', $data)){
		return true;  
	  }
	  else{
		return false;  
	  }
	  
    }
	
	
	function get_posts_count($filter){
		
		$this->db->from('posts');
		if($filter == "article"){			
		$this->db->where(array("Post_Type"=>"article", "Status"=>"published"));
		}
		if($filter == "gallery"){			
		$this->db->where(array("Post_Type"=>"gallery", "Status"=>"published"));
		}
		$articles_list = $this->db->get();	
		return $articles_list->num_rows();
	}
	
	
	function get_drafts_count(){
		
		$this->db->from('posts');			
		$this->db->where("Status", "draft");
		$draft_list = $this->db->get();	
		return $draft_list->num_rows();
	}
	
	
	
	
	function publish_article($articleData){
		
	  $data['Status'] = "published";
	  $data['Sort_Id'] = time();
	  $this->db->where('Post_Id', $articleData["id"]);
	  $this->db->update('posts', $data);
	}
	
	
	
	
	function get_image_gallery_slide_list($id) {
    	
		
		$this->db->from('posts_gallery_slides');
		$this->db->where( array('Post_Id'=>$id) );
		$media_list = $this->db->get()->result_array();	
		return $media_list;
		
	}
	
	function get_video_gallery_slide_list($id) {
    	
		
		$this->db->from('posts_gallery_slides');
		$this->db->where( array('Post_Id'=>$id) );
		$media_list = $this->db->get()->result_array();	
		return $media_list;
		
	}
	
	
	
	
		function get_gallery_list($filter_key, $value) {
    	
		$where = array();
		$this->db->from('posts');
		if($filter_key !="NULL" &&  $value != "NULL"){
			if($filter_key =="section"){
				$where["Cat_Id"] = $value;
			}
		}
		$where["Status"] = "published";
		$where["Post_Type"] = "gallery";
		$this->db->where($where);
		$this->db->order_by("Post_Id", "desc");
		$gallery_list = $this->db->get()->result_array();	
		
		if( is_array($gallery_list) && count($gallery_list) > 0 ) {
		  return $gallery_list;
		}
		
	}
	
	
	
		function get_all_posts_list($filter_key, $value) {
    	
		$where = array();
		$this->db->from('posts');
		if($filter_key !="NULL" &&  $value != "NULL"){
			if($filter_key =="section"){
				$where["Cat_Id"] = $value;
			}
		}
		$where["Status"] = "published";
		/*$where["Post_Type"] = "article";*/
		$this->db->where($where);
		$this->db->order_by("Post_Id", "desc");
		$articles_list = $this->db->get()->result_array();	
		
		if( is_array($articles_list) && count($articles_list) > 0 ) {
		  return $articles_list;
		}
		
	}
	
	
	

	function sort_article($id){
		
	  $data['Sort_Id'] = time();
	  $this->db->where('Post_Id', $id);
      $this->db->update('posts',$data);
	  return 1;
	  	
	}	
	
	
	
	
}