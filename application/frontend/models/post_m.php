<?php

class post_m extends CI_Model {








  function get_posts($id="NULL") {

	$where = array();
	$this->db->select('*');
	$this->db->from('posts');
	if($id !="NULL"){
	$where["posts.Cat_Id"] = $id;
	//$this->db->where('posts.Cat_Id',$id);
	}
	$where["posts.Status"] = "published";
	$this->db->where($where);
	$this->db->join('categories', 'categories.Cat_Id = posts.Cat_Id');
	$this->db->order_by('posts.Sort_Id','desc');
    $posts = $this->db->get()->result_array();

    if( is_array($posts) && count($posts) > 0 ) {
      return $posts;
    }

    return false;
  }





  function get_post($id) {



	if($this->check_post_author($id) > 0){
	
    $this->db->from('posts');
	$this->db->join('authors', 'posts.Author_Id = authors.Author_Id');
	$this->db->where( array('Post_Id'=>$id) );
    $query = $this->db->get();
	
	if ($query->num_rows() > 0){
		$post = $query->result();
		$this->update_view_counter($id);
		return $post;
	}else{
		return 0;
	}
	
	}else{
		
		
    $this->db->from('posts');
	$this->db->where( array('Post_Id'=>$id) );
    $query = $this->db->get();
	
	if ($query->num_rows() > 0){
		$post = $query->result();
		$this->update_view_counter($id);
		return $post;
	}else{
		return 0;
	}		
		
	}
	

  }//end get_post()
  
  function check_post_author($id) {
	  
	  $this->db->select('Author_Id');
	  $this->db->from('posts');
	  $this->db->where( array('Post_Id'=>$id) );
	  $query = $this->db->get();
	  $row = $query->row();
	  return $row->Author_Id;
  }
  
  
  
  
  
    function get_slug_id($slug) {

	$this->db->select('Post_Id');
    $this->db->from('posts');
	$this->db->where( array('Post_Slug'=>$slug) );
    $query = $this->db->get();

	if ($query->num_rows() > 0){
		$row = $query->row();
		return $row->Post_Id;
	}else{
		return 0;
	}

  }//end get_slug_id()






  function get_all_other_posts( $user_id, $team_id, $is_admin, $num_posts = 10 ) {
    // start building a query
    $this->db->from('post');
    $this->db->join('user','post.userId=user.id');

    // restrict to teammates if not an admin
    if(!$is_admin){
      $this->db->where('teamId',$team_id);
    }

    $this->db->where_not_in('userId', array($user_id));
    $this->db->limit( $num_posts );
    $this->db->order_by('createdDate','desc');

    $posts = $this->db->get()->result_array();

    if( is_array($posts) && count($posts) > 0 ) {
      return $posts;
    }

    return false;
  }

  function get_post_count_for_user( $user_id ) {

    $this->db->from('post');
    $this->db->where( array('userId'=>$user_id) );

    return $this->db->count_all_results();
  }
  
  
  
  function get_posts_data($id) {

    $this->db->from('posts_data');
	$this->db->where( array('Post_Id'=>$id) );
	$this->db->order_by('Sort_Id','asc');
    $postsdata = $this->db->get()->result_array();

    if( is_array($postsdata) && count($postsdata) > 0 ) {
      return $postsdata;
    }

    return false;
  }
  
  
  
  
  
  function get_gallery_data($id) {

    $this->db->from('posts_gallery_slides');
	$this->db->where( array('Post_Id'=>$id) );
    $gallerydata = $this->db->get()->result_array();

    if( is_array($gallerydata) && count($gallerydata) > 0 ) {
      return $gallerydata;
    }

    return false;
  }
    
  
  
  
  
  
  
  
  
    function get_front_video() {

    $this->db->from('front_page_video');
	$this->db->where('Status', "1");
    $data = $this->db->get()->row();

      return $data;
  }
  
  
  
    function get_slideshow_media_files($id) {

    $this->db->from('slideshow_media');
	$this->db->where(array("Status"=>"1","Section_Id"=>$id));
	$this->db->order_by('Sort_Id','asc');
    $data = $this->db->get()->result_array();

    return $data;
  }
  
  
  function update_view_counter($id){
	  
	  	  $sql = "UPDATE posts SET  Post_View_Counter=Post_View_Counter+1 WHERE Post_Id = ?"; 
	  	  //$data['Post_View_Counter'] = $articleData['cover_file'];
		  //$this->db->where('Post_Id', $id);
		  $query_data = $this->db->query($sql, $id);
      	  //$this->db->update('posts',$data);  
  }
  
  
  
  
  
  
  
  
  
  
  function get_most_viewed_posts($id="NULL",$limit){
	
	
	$where = array();
	$this->db->select('*');
	$this->db->from('posts');
	if($id !="NULL"){
	$where["posts.Cat_Id"] = $id;
	//$this->db->where('posts.Cat_Id',$id);
	}
	$where["posts.Status"] = "published";
	$this->db->where($where);
	/*$this->db->join('categories', 'categories.Cat_Id = posts.Cat_Id');*/
	$this->db->order_by('posts.Post_View_Counter','desc');
	$this->db->limit($limit);
    $posts = $this->db->get()->result_array();

    if( is_array($posts) && count($posts) > 0 ) {
      return $posts;
    }

    return false;
	
	  
  }
  
  
  
  
  
  


}