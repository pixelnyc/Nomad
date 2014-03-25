<?php
//AJAX file upload for front page video

include("db-connect.php");	//connect to dbase

//If directory doesnot exists create it.
/*$output_file_url = "http://localhost/nomadmag/uploads/front-page-videos/";*/

$output_dir = "../../uploads/front-page-videos/";
$output_file_url = "http://nomadmag.co/uploads/front-page-videos/";

if(isset($_FILES["front_video_file"]))
{
	$ret = array();

	$error =$_FILES["front_video_file"]["error"];
   {
    
    	if(!is_array($_FILES["front_video_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["front_video_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined

       	 	move_uploaded_file($_FILES["front_video_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["front_video_file"]["error"];
       	 	 
	       	 	 //$ret[$file_new_name]= $output_dir.$file_new_name;
				 $ret["uploaded_file_url"]= $output_file_url.$file_new_name;
				 
				 

						
						$date_added = time();
						$query = "INSERT INTO front_page_video (Video_Title, Video, Date_Added)VALUES('".$_REQUEST['vid_title']."', '".$file_new_name."', '".$date_added."')";
						mysql_query($query);
						$inser_id = mysql_insert_id();
						$ret["insert_file_id"] = $inser_id;
						$ret["uploaded_file_title"] = $_REQUEST['vid_title'];		
						$ret["uploaded_file_date_added"] =  gmdate("d-m-Y", $date_added);		 
				 
    	}

    }
    echo json_encode($ret);
 
}

?>