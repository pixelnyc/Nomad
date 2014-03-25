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
  
  function get_cat_slug_id($cat_slug) {

	$this->db->select('Cat_Id');
    $this->db->from('categories');
	$this->db->where( array('Cat_Slug'=>$cat_slug) );
    $cat = $this->db->get()->row();

    return $cat->Cat_Id;

  }
  
 

}
