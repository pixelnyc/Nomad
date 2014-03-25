<?php

class post_m extends CI_Model {








  function get_posts($id="NULL") {


	$this->db->select('*');
	$this->db->from('posts');
	if($id !="NULL"){
	$this->db->where('posts.Cat_Id',$id);
	}
	$this->db->join('categories', 'categories.Cat_Id = posts.Cat_Id');
    $posts = $this->db->get()->result_array();

    if( is_array($posts) && count($posts) > 0 ) {
      return $posts;
    }

    return false;
  }





  function get_post($id) {

    $this->db->from('posts');
	$this->db->where( array('Post_Id'=>$id) );
    $post = $this->db->get()->result();

    //if( is_array($post) && count($post) > 0 ) {
      return $post;
   // }

    //return false;
  }









/*  function get_all_other_posts( $user_id, $team_id, $is_admin, $num_posts = 10 ) {
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
  */
  
  
  function get_posts_data_content($id) {

    $this->db->from('posts_data');
	$this->db->where( array('Posts_Data_Id'=>$id) );
    $postsdata = $this->db->get()->row();

	return $postsdata;
/*    if( is_array($postsdata) && count($postsdata) > 0 ) {
      
    }*/

  }
 
  
  	function get_front_video_list() {
    	
		$this->db->from('front_page_video');
		$videos_list = $this->db->get()->result_array();	
		return $videos_list;
		
	}
	
	function get_slideshow_media_list($id) {
    	
		
		$this->db->from('slideshow_media');
		$this->db->where( array('Section_Id'=>$id) );
		$this->db->order_by("Sort_Id", "asc");
		$media_list = $this->db->get()->result_array();	
		return $media_list;
		
	}
	
	
	
	
	function del_slide_file($id) {
    	
		$this->db->where('Id', $id);
		$this->db->delete('slideshow_media');		
	}
	
		function del_gallery_slide_file($id) {
    	
		$this->db->where('Id', $id);
		$this->db->delete('posts_gallery_slides');		
	}
	
	
	function update_tile_display($id, $val) {
    	
		$data['Post_Thumbnail_Display'] = $val;
		$this->db->where('Post_Id', $id);
		$this->db->update('posts', $data);		
	}
	
	
	
	
		function update_slideshow_sorting($articleData){
		
		$updateRecordsArray = $articleData["recordsArray"];		
		$sortingCounter = 1;
			foreach ($updateRecordsArray as $recordIDValue) {		
				$query = "UPDATE slideshow_media SET Sort_Id = ? WHERE Id = ?";
				$this->db->query($query, array($sortingCounter, $recordIDValue));
				$sortingCounter = $sortingCounter + 1;	
			}
	
		}
		
		function update_section_sorting($articleData){
		
		$updateRecordsArray = $articleData["recordsArray"];		
		$sortingCounter = 1;
			foreach ($updateRecordsArray as $recordIDValue) {		
				$query = "UPDATE categories SET Sort_Id = ? WHERE Cat_Id = ?";
				$this->db->query($query, array($sortingCounter, $recordIDValue));
				$sortingCounter = $sortingCounter + 1;	
			}
	
		}
		
		
		function del_section($id) {
    	
		$this->db->where('Cat_Id', $id);
		$this->db->delete('categories');		
		}
		
		
		
	
  



}












