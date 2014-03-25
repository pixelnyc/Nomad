<?php
//If directory doesnot exists create it.

include("db-connect.php");	//connect to dbase


$output_dir = "../../uploads/slideshow-media-files/";


if(isset($_FILES["slide_image_file"]))
{
	$ret = array();

	$error =$_FILES["slide_image_file"]["error"];
   {
    
    	if(!is_array($_FILES["slide_image_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["slide_image_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined
			
       	 	move_uploaded_file($_FILES["slide_image_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["slide_image_file"]["error"];

				 
				 

						
						$sort_id = get_sort_id($_REQUEST['section_id']);
						$date_added = time();
						$query = "INSERT INTO slideshow_media (Section_Id, Slide_Title, Slide_Description, Slide_Link, Slide_Link_Type, Slide_Src_File, Slide_Src_Type, Background_Position, Date_Added, Status, Sort_Id)VALUES('".$_REQUEST['section_id']."','".$_REQUEST['slide_title']."','".$_REQUEST['slide_descript']."', '".$_REQUEST['slide_link']."', '".$_REQUEST['slide_link_type']."', '".$file_new_name."', '".$_REQUEST['slide_type']."', '".$_REQUEST['background_pos']."', '".$date_added."', '1', '".$sort_id."')";
						mysql_query($query);
				 
				 
    	}
    	
    }
    echo "success";
 
}






	function get_sort_id($id){	

		include("db-connect.php");	//connect to dbase
						
						
								
		$sql = "SELECT Sort_Id FROM slideshow_media WHERE Section_Id = $id ORDER BY Sort_Id ASC"; 
		$query_data = mysql_query($sql);
		
		$new_sort_id = "";
		if(mysql_num_rows($query_data)>0){
			
		$arr = "";
		
		while($row = mysql_fetch_array($query_data)){	
			$arr[] = $row["Sort_Id"];	
		}
		   		   
		$new_sort_id =  end($arr)+1;	
		}else{
	    $new_sort_id = 1;
		}
		return $new_sort_id;	
	}
	
	
	

?>