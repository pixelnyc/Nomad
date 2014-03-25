<?php include("templates/header.php");?>
    
<style>

#video_fd_container{
	display:none;
	height:0px;
	opacity:0;	
}

</style> 






    <link href="<?php echo base_url();?>jquery-multiple-file-upload/assets/uploadfile.css" rel="stylesheet">
    <script src="<?php echo base_url();?>jquery-multiple-file-upload/assets/jquery.uploadfile.min.js"></script>
    
    

<script type="text/javascript">
$(document).ready(function(){  



	$(document).on("click", "#articles_grid a.del_item ",function(){

			if(confirm("Are You sure to Delete?")){

			
			var del_item_id = $(this).attr('id').split('_');
			var data_values = 'del_item_id='+del_item_id[1]; 
			//alert(data_values);
			$.post("<?php echo base_url();?>manage/delete_gallery_slide", data_values, function(theResponse){
				
				if(theResponse == "success"){
					
					var data_values = 'p_id=<?php echo $id;?>';
					$.post("<?php echo base_url();?>jquery-multiple-file-upload/update-xml.php", data_values, function(theResponse){
						if(theResponse == "xml_success"){
							$('#articles_grid #row_'+del_item_id[1]).fadeOut(200, function(){$(this).remove()});	
						}else{
							alert("error Generating XML");	
						}
					});
					
					
					
						
				}else{
					alert(theResponse);	
				}
			});	
	
			}//end if
	});
 
 
 
 
 
 
    
});
    </script>     
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
<?php include("templates/side_bar.php");?>          


        
        <!-- START PAGE -->
        <div id="page">
        	

           	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar" style="width:350px;">	<h2>Video Gallery</h2>	<p></p></div>
                            
                            <div class="shortcuts-icons" style="width:300px;">
                            <a style="margin-right:15px; margin-top:4px; float:right;" class="button-green" href="<?php echo $this->config->item("front_site_url");?>gallery/preview/<?php echo $id;?>" target="_blank">Preview</a>
                            <a style="margin-right:15px; margin-top:4px; float:right;" class="button-green" href="<?php echo base_url();?>article/publish_post/<?php echo $id;?>/gallery_list">Publish It</a>
                             
                            
                           </div>
                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                

                
                	<!-- START CONTENT -->
                    <div class="content">



						<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Slideshow Media Files Upload</h3>
                                </div>
                                <div class="body">
                                 
                               
                                
                                    <div class="st-form-line" style="z-index: 620;">		


<input name="video_title" type="text" class="st-forminput tips-right" id="video_title" style="width:430px; margin-bottom:10px;" original-title="Enter Slide Title" placeholder="Slide Title" /> 
 <input type="hidden" name="video_insert_id" id="video_insert_id" />

                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>                                
                                

                                  
                                    
                                    
                                    
                                                                  
                                    

                                    
                                    
                                    
                                                                        
                                                                                                            

                                    
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<!--<span class="st-labeltext">Upload Cover File</span>-->	
                                              


<div  id="video_type_uploader">
	<div id="singlefile-uploader-3">Upload Video(mp4)</div>
	<div id="status-3"></div> 
</div>
<div  id="video_type_uploader_webm" style="display:none">
    <div id="singlefile-uploader-4">Upload Video(webm)</div>
	<div id="status-4"></div>
</div>



                                                   
<script>


$(document).ready(function(){



/*------------------------------------------------------------------------------------------*/
<?php /*?>var settings_2 = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-image-gallery-item.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,jpeg",
	fileName: "image_gallery_file",
	multiple: false,
	dynamicFormData: function()
{

	var slide_title = $("#video_title").val();
	var data ={ "slide_title":slide_title, "p_id":<?php echo $id;?>}
	return data;
},
	onSuccess:function(files,data,xhr)
	{
			
		$("#status-2").html("<font color='green'>Upload is success</font>");
		location.reload(true);
	
	},
	onError: function(files,status,errMsg)
	{		
		$("#status-2").html("<font color='red'>Upload is Failed</font>");
	},
	uploadButtonClass:"ajax-file-upload-green"
}

$("#singlefile-uploader-2").uploadFile(settings_2);<?php */?>
/*-------------------------------------------------------------------------------------------*/










/*----------------------------------------VIDEO----------------------------------------------------*/
var settings_3 = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-video-gallery-item-1.php",
	method: "POST",
	allowedTypes:"mp4",
	fileName: "video_gallery_file",
	multiple: false,
	dynamicFormData: function()
{
	
	var slide_title = $("#video_title").val();
	var data ={ "slide_title":slide_title, "p_id":<?php echo $id;?>}
	return data;
	
},
	onSuccess:function(files,data,xhr)
	{
			
		$("#status-3").html("<font color='green'>Upload is success</font>");
		var returned_obj = jQuery.parseJSON(data);
		//alert(returned_obj.insert_file_id);
		$("#video_insert_id").val(returned_obj.insert_file_id);
		$("#video_type_uploader").css("display", "none");
		$("#video_type_uploader_webm").css("display", "block");
		
		
		
		
		
	},
	onError: function(files,status,errMsg)
	{		
		$("#status-3").html("<font color='red'>Upload is Failed</font>");
	},
	uploadButtonClass:"ajax-file-upload-green"
}


$("#singlefile-uploader-3").uploadFile(settings_3);




var settings_4 = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-video-gallery-item-2.php",
	method: "POST",
	allowedTypes:"webm",
	fileName: "video_gallery_file",
	multiple: false,
	dynamicFormData: function()
{

	var video_slide_id = $("#video_insert_id").val();
	//alert(video_slide_id);
	var data ={ "video_slide_id":video_slide_id, "p_id":<?php echo $id;?>}
	return data;
},
	onSuccess:function(files,data,xhr)
	{
		//alert(data);	
		$("#status-4").html("<font color='green'>Upload is success</font>");
		location.reload(true);
	},
	onError: function(files,status,errMsg)
	{		
		$("#status-4").html("<font color='red'>Upload is Failed</font>");
	},
	uploadButtonClass:"ajax-file-upload-green"
}


$("#singlefile-uploader-4").uploadFile(settings_4);
/*----------------------------------------------------------------------------------*/








});

</script>






                                  		<div class="clear"></div> 
                                    </div>
                         


                                    
                          
                           
                                
  
                                </div>
                            </div>
                            
                            
                  
                    
                    
                    <div class="clear"></div>

                    
                    
                    
                    </div>
                    <!-- END CONTENT -->





















                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    
                    
	

                                  
                                                   
<?php /*?> 
<div id="video_fd_container">   
<input name="video_title" type="text" class="st-forminput tips-right" id="video_title" style="width:430px; margin-bottom:10px;" original-title="Enter Video Title" placeholder="Video Title" />         
 <div id="single-fileuploader-1">Upload Video</div>
  <div id="status-1"></div>






       <div class="clear" style="z-index: 670;"></div>
</div>
<?php */?>
                    
                    
                    
                        <!-- START TABLE -->
                      <div class="simplebox grid740">
                        
                       	<div class="titleh">
                       	 <!-- <h3>Article Listning</h3>-->
                        </div>




<style>
img.thumb{
	border: 3px solid white;
}
</style>





							<table cellpadding="0" cellspacing="0" border="0" class="display data-table" id="articles_grid">
                            
								<thead>
									<tr>
                                    	<th width="5%">SNO</th>
                                        <th width="70%">Title</th>
                                        <th width="17%">Thumbnails</th>
                                        <th width="8%">Actions</th>
                                    </tr>
                               	</thead>
                                
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
<?php $counter=1; ?>                                
<?php
if(count($video_gallery_slide_list) > 0){
	foreach($video_gallery_slide_list as $gallery_slide){
?>                                    
										
										
										<tr  id="row_<?php echo $gallery_slide["Id"]; ?>" class="gradeA">
											<td><?php echo $counter;?></td>
											<td>
	<strong><?php echo $gallery_slide["Slide_Title"]; ?></strong></td>
											<td>
											<video height="240" width="240" src="<?php echo $this->config->item("front_site_url");?>uploads/gallery/video-gallery/<?php echo $gallery_slide["Slide_Src_File"]; ?>" controls=""></video>
                                            </td>
											<td class="center">
											<a id="item_<?php echo $gallery_slide["Id"]; ?>" class="clickable_link del_item"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /></a>
											</td>
										</tr>
										
<?php
	$counter++;
	}
}else{
?>

                                    <tr class="gradeA">
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>
                                    	<td class="center"></td>
                                    	<td class="center"></td>
                                    </tr>    
<?php	
}
?>                                                                
                                

                                    
								</tbody>
							</table>

                            
                            
                            
                        </div>
                        <!-- END TABLE -->       


                      
                      
                      
                      
                      
                      
                      
                      <div class="clear"></div>


                    
                    
                    
                    </div>
                    <!-- END CONTENT -->
                
            
            
            
            
            
            
        </div>
        <!-- END PAGE -->

    <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    
    <!-- START FOOTER -->
    <div id="footer">
    	<div class="left-column">&copy; Copyright 2013 - All rights reserved.</div>

    </div>
    <!-- END FOOTER -->

</div>
</body>
</html>