<?php


				 
include("db-connect.php");	//connect to dbase
						
						
						
						/*-----------------------------------XML Playlist Writing-----------------------------------------*/
						
						$file = '../../assets/jcplayer/HTML embed/Templates/Aquarium/Embed_Auto-detect/xml-source/source_file-'.$_REQUEST['p_id'].'.xml';

						
						
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
								$xmlDATA .= '<title><![CDATA['.$row["Slide_Title"].']]></title>';
								$xmlDATA .= '<description><![CDATA[]]></description>';
								$xmlDATA .= '<image> </image>';
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
						
						
						echo "xml_success";
						/*------------------------------------------------------------------------------------------------*/
                        
?>