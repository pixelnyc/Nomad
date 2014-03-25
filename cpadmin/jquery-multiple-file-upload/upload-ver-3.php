<?php
//If directory doesnot exists create it.

include("db-connect.php");	//connect to dbase

/*$output_file_url = "http://localhost/nomadmag/uploads/article-content-images/";*/

$output_dir = "../../uploads/article-content-images/";
$output_file_url = "http://nomadmag.co/uploads/article-content-images/";

if(isset($_FILES["article_content_image_file"]))
{
	$ret = array();

	$error =$_FILES["article_content_image_file"]["error"];
   {
    
    	if(!is_array($_FILES["article_content_image_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["article_content_image_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined

       	 	move_uploaded_file($_FILES["article_content_image_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["article_content_image_file"]["error"];
       	 	 
	       	 	 //$ret[$file_new_name]= $output_dir.$file_new_name;
				 $ret["uploaded_file_url"]= $output_file_url.$file_new_name;
				 
				 

						
												
						$sort_id = get_sort_id($_REQUEST['p_id']);
						if($file_ext=="mp4"){
						$data_type = "video"; 	
						}else if(($file_ext=="jpg") || ($file_ext=="png") || ($file_ext=="gif") || ($file_ext=="jpeg")){
						$data_type = "image"; 
						}
						$query = "INSERT INTO posts_data (Post_Id, Data_Type, Data, Data_Link, Sort_Id)VALUES('".$_REQUEST['p_id']."', '".$data_type."', '".$file_new_name."', '".$_REQUEST['target_link']."', '".$sort_id."')";
						mysql_query($query);
						$inser_id = mysql_insert_id();
						$ret["insert_file_id"] = $inser_id;
						$ret["uploaded_file_type"] = $data_type;
						
						
						
						
						
						
						
						
				 
				 
    	}
/*    	else
    	{
    	    	$fileCount = count($_FILES["article_content_image_file"]['name']);
    		  for($i=0; $i < $fileCount; $i++)
    		  {
    		  	$fileName = $_FILES["article_content_image_file"]["name"][$i];
	       	 	 $ret[$fileName]= $output_dir.$fileName;
    		    move_uploaded_file($_FILES["article_content_image_file"]["tmp_name"][$i],$output_dir.$fileName );
    		  }
    	
    	}*/
    }
    echo json_encode($ret);
 
}






	function get_sort_id($id){	

		include("db-connect.php");	//connect to dbase
						
						
								
		$sql = "SELECT Sort_Id FROM posts_data WHERE Post_Id = $id ORDER BY Sort_Id ASC"; 
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