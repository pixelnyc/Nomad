<?php
//If directory doesnot exists create it.


include("db-connect.php");	//connect to dbase


if($_REQUEST['cover_type'] == "image"){
	$output_dir = "../../uploads/image-covers/";
}else if($_REQUEST['cover_type'] == "video"){
	$output_dir = "../../uploads/video-covers/";	
}


if(isset($_FILES["article_cover_file"]))
{
	$ret = array();

	$error =$_FILES["article_cover_file"]["error"];
   {
    
    	if(!is_array($_FILES["article_cover_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["article_cover_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined
			
       	 	move_uploaded_file($_FILES["article_cover_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["article_cover_file"]["error"];
       	 	 
	       	 	 $ret[$file_new_name]= $output_dir.$file_new_name;
				 

						
						
						
						
						$query = "UPDATE posts SET Post_Cover_Type='".$_REQUEST['cover_type']."', Post_Cover_File='".$file_new_name."' WHERE Post_Id='".$_REQUEST['p_id']."'";
						mysql_query($query);
				 
				 
    	}
    	
    }
    echo json_encode($ret);
 
}

?>