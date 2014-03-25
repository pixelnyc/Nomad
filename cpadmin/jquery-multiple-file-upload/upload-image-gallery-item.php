<?php
/* ----UPLOAD IMAGE GALLERY ITEM --- */

include("db-connect.php");	//connect to dbase

//If directory doesnot exists create it.
/*$output_file_url = "http://localhost/nomadmag/uploads/image-gallery/";*/

$output_dir = "../../uploads/gallery/image-gallery/";
$output_file_url = "http://nomadmag.co/uploads/gallery/image-gallery/";


if(isset($_FILES["image_gallery_file"]))
{
	$ret = array();

	$error =$_FILES["image_gallery_file"]["error"];
   {
    
    	if(!is_array($_FILES["image_gallery_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["image_gallery_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined
			
       	 	move_uploaded_file($_FILES["image_gallery_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["image_gallery_file"]["error"];
       	 	 
	       	 	  $ret["uploaded_file_url"]= $output_file_url.$file_new_name;
				 
				 
						
						
						$date_added = time();
						$query = "INSERT INTO posts_gallery_slides (Post_Id, Slide_Title, Slide_Description, Photographer_Name, Photographer_Gps, Slide_Src_File, Date_Added, Status)VALUES('".$_REQUEST['p_id']."','".$_REQUEST['slide_title']."', '".$_REQUEST['slide_detail']."', '".$_REQUEST['photographer_name']."', '".$_REQUEST['photographer_gps_code']."', '".$file_new_name."', '".$date_added."', '1')";
						mysql_query($query) or die(mysql_error());
						$inser_id = mysql_insert_id();
						$ret["insert_file_id"] = $inser_id;
						$ret["uploaded_file_title"] = $_REQUEST['slide_title'];		
						$ret["uploaded_file_date_added"] =  gmdate("d-m-Y", $date_added);
				 
				 
    	}
    	
    }
    echo "success";
 
}

?>