<?php
/* UPLOAD AUTHOR THUMBNAILS*/

include("db-connect.php");	//connect to dbase

//If directory doesnot exists create it.
$output_dir = "../../uploads/author-thumbs/";

if(isset($_FILES["author_thumb_file"]))
{
	$ret = array();

	$error =$_FILES["author_thumb_file"]["error"];
   {
    
    	if(!is_array($_FILES["author_thumb_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["author_thumb_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined
			
       	 	move_uploaded_file($_FILES["author_thumb_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["author_thumb_file"]["error"];
       	 	 
	       	 	 $ret[$file_new_name]= $output_dir.$file_new_name;
				 
				 

						
						$query = "UPDATE authors SET Author_Thumbnail='".$file_new_name."' WHERE Author_Id='".$_REQUEST['id']."'";
						mysql_query($query);
				 
				 
    	}
    	
    }
    
 
}
?>