<?php


class author_m extends CI_Model {

 
 		function get_author_list() {
    	
		$this->db->from('authors');
		$this->db->order_by("Author_Id", "desc");
		$author_list = $this->db->get()->result_array();	
		
		if( is_array($author_list) && count($author_list) > 0 ) {
		  return $author_list;
		}
		
		}
		
		
		
		function get_authors() {
    	
		$this->db->from('authors');
		$this->db->order_by("Author_Name", "asc");
		$author_list = $this->db->get()->result_array();	
		
		if( is_array($author_list) && count($author_list) > 0 ) {
		  return $author_list;
		}
		
		}
		
		
		
	
	
	
	
	function add_author_step1($authorData) {
	
	  $data['Author_Slug'] = $authorData['author_slug'];
      $data['Author_Name'] = $authorData['author_name'];
      $data['Author_Bio'] = $authorData['author_bio'];
	  $data['Author_Thumbnail'] = "";
	  $data['Date_Added'] = time();
	  $data['Author_Email'] = $authorData['email'];
	  $this->db->insert('authors',$data);
	  
	  return mysql_insert_id();
	}
 
 
 
 
 
 
 
 
 
 
	
	
	
}