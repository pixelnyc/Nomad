<?php
/* ----UPLOAD VIDEO GALLERY ITEM MP4 VERSION--- */

include("db-connect.php");	//connect to dbase


//If directory doesnot exists create it.
$output_dir = "../../uploads/gallery/video-gallery/";


if(isset($_FILES["video_gallery_file"]))
{
	$ret = array();

	$error =$_FILES["video_gallery_file"]["error"];
   {
    
    	if(!is_array($_FILES["video_gallery_file"]['name'])) //single file
    	{
       	 	$fileName = $_FILES["video_gallery_file"]["name"];
			
			$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
			$file_new_name = time().".".$file_ext;	//NEW File Name Defined
			
       	 	move_uploaded_file($_FILES["video_gallery_file"]["tmp_name"],$output_dir. $file_new_name);
       	 	 //echo "<br> Error: ".$_FILES["video_gallery_file"]["error"];
       	 	 
	       	 	 
				 
				 

						
						
						$date_added = time();
						$query = "INSERT INTO posts_gallery_slides (Post_Id, Slide_Title, Slide_Src_File, Date_Added, Status)VALUES('".$_REQUEST['p_id']."','".$_REQUEST['slide_title']."', '".$file_new_name."', '".$date_added."', '1')";
						mysql_query($query) or die(mysql_error());
						
						$inser_id = mysql_insert_id();
						$ret["insert_file_id"] = $inser_id;
						
						

												/*-----------------------------------XML Playlist Writing-----------------------------------------*/
						
						$file = '../../assets/jcplayer/HTML embed/Templates/Aquarium/Embed_Auto-detect/xml-source/source_file-'.$_REQUEST['p_id'].'.xml';

						//-------------------------------Fetch Thumbnail for player cover--------------------
						$post_sql = "SELECT Post_Thumbnail FROM posts WHERE Post_Id='".$_REQUEST['p_id']."'";
						$post_rcd = mysql_query($post_sql) or die(mysql_error());
						$post_row = mysql_fetch_array($post_rcd);
						//-------------------------------------------------------------------------------------
						
						$sql = "SELECT * FROM posts_gallery_slides WHERE Post_Id='".$_REQUEST['p_id']."'";
						$rcds = mysql_query($sql) or die(mysql_error());

						$xmlDATA = '<?xml version="1.0" encoding="utf-8"?>';
						$xmlDATA .= '<playlist>';
						$xmlDATA .= '<title><![CDATA[New Playlist]]></title>';
						$xmlDATA .= '<items>';

						if(mysql_num_rows($rcds) > 0){
							
							$nodecounter = 1;
							while($row = mysql_fetch_array($rcds)){
								$xmlDATA .= '<item>';
								$xmlDATA .= '<title><![CDATA[]]></title>';
								$xmlDATA .= '<description><![CDATA[]]></description>';
								$xmlDATA .= '<image>../../../../../../uploads/thumbs/'.$post_row["Post_Thumbnail"].'</image>';
								if($nodecounter == 1){
								$xmlDATA .= '<startFromThis>true</startFromThis>';
								}else{
								$xmlDATA .= '<startFromThis>false</startFromThis>';	
								}
								
								$xmlDATA .= '<duration> </duration>';
								$xmlDATA .= '<source>../../../../../../uploads/gallery/video-gallery/'.$row["Slide_Src_File"].'</source>';
								$xmlDATA .= '<sourceAlt>../../../../../../uploads/gallery/video-gallery/'.$row["Slide_Src_File2"].'</sourceAlt>';
								$xmlDATA .= '<sourceType>direct</sourceType>';
								
								
								$xmlDATA .= '</item>';
								
								$nodecounter++;
							}
						}
						
						
						$xmlDATA .= '</items>';
						$xmlDATA .= '</playlist>';
						
						file_put_contents($file, $xmlDATA);
						
						
						
						/*------------------------------------------------------------------------------------------------*/
				 
				 
    	}
    	
    }
    echo json_encode($ret);
 
}

?>