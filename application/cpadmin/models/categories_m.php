<?php

class categories_m extends CI_Model {








	  function get_categories() {
	
		$this->db->from('categories');
		$this->db->order_by("Sort_Id", "asc");
		$categories = $this->db->get()->result_array();
	
		if( is_array($categories) && count($categories) > 0 ) {
		  return $categories;
		}
	
		return false;
	  }
  
  
		function get_category($id) {
	
		$this->db->from('categories');
		$this->db->where('Cat_Id', $id);
		$category = $this->db->get()->result();
	
	
		  return $category;
	
	  }
  
	 function upd_section($articleData) { 
	 
		  $key = $articleData['section_id'];
		  $data['Cat_Title'] = $articleData['section_title'];
		  $this->db->where('Cat_Id', $key);
		  $this->db->update('categories', $data);
			return true;
	 }
	 
	 function insert_section($articleData) {
		
		
		$data["Cat_Title"] = $articleData['section_title'];
		$data["Cat_Slug"] = strtolower($articleData['section_title']); 
		$data["Sort_Id"] = $this->get_section_sort_id();
		$this->db->insert('categories',$data); 
		 
	 }
	 
	 function get_section_sort_id(){	
		
		$sql = "SELECT Sort_Id FROM categories  ORDER BY Sort_Id ASC"; 
		$query_data = $this->db->query($sql);
		
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
	 
  
  
  


}
