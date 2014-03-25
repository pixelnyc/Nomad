<?php
//If directory doesnot exists create it.

include("db-connect.php");	//connect to dbase


$output_dir = "../../uploads/slideshow-media-files/";


if(isset($_FILES["slide_video_file"]))
{
	$ret = array();

	$error =$_FILES["slide_video_file"]["error"];
   {
    
    	if(!is_array($_FILES["slide_video_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["slide_video_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined
			
       	 	move_uploaded_file($_FILES["slide_video_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["slide_video_file"]["error"];
       	 	 
				 
				 

						
						$query = "UPDATE slideshow_media SET Slide_Src_File2='".$file_new_name."' WHERE Id='".$_REQUEST['video_slide_id']."'";
						mysql_query($query) or die(mysql_error());		
				 
				 
    	}
    	
    }
    echo "success";
 
}

?>