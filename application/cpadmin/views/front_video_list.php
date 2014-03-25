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



<?php /*?>$("#add_video_btn").click(function(){ 
	$('#video_fd_container').css({'display':'block'}).animate({height:130, 'opacity':'1'}, 500);
});<?php */?>




<?php /*?>
var settings = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-ver-4.php",
	method: "POST",
	allowedTypes:"mp4",
	fileName: "front_video_file",
	multiple: false,
	dynamicFormData: function(){
		var vid_title = $("#video_title").val();
		var data ={ "vid_title":vid_title}
		return data;
	},
	onSuccess:function(files,data,xhr)
	{
		var returned_obj = jQuery.parseJSON(data);
		alert(returned_obj.uploaded_file_title);	
		
		$("#status-1").html("<font color='green'>Upload is success</font>");
		$('#video_fd_container').animate({height:0, 'opacity':'0'}, 500, function(){ $(this).css({'display':'none'}) });


		var newRowContent = '<tr  id="row_'+returned_obj.insert_file_id+'" class="gradeA"><td></td><td><strong>'+returned_obj.uploaded_file_title+'</strong></td><td><video height="240" width="240" src="'+returned_obj.uploaded_file_url+'" controls=""></video></td><td class="center">'+returned_obj.uploaded_file_date_added+'</td><td class="center"><a id="item_'+returned_obj.insert_file_id+'" class="clickable_link del_item"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /></a></td></tr>';		

						
		$("#articles_grid tbody").append(newRowContent);

	},
	onError: function(files,status,errMsg)
	{		
		$("#status-1").html("<font color='red'>Upload is Failed</font>");
	},
	uploadButtonClass:"ajax-file-upload-green"
}
$("#single-fileuploader-1").uploadFile(settings);<?php */?>











	$(document).on("click", "#articles_grid a.del_item ",function(){

			if(confirm("Are You sure to Delete?")){


			var del_item_id = $(this).attr('id').split('_');
			var data_values = 'del_item_id='+del_item_id[1]; 
			//alert(data_values);
			$.post("<?php echo base_url();?>manage/delete_front_video", data_values, function(theResponse){
				
				if(theResponse == "success"){
					$('#articles_grid #row_'+del_item_id[1]).fadeOut(200, function(){$(this).remove()});	
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
                    		<div class="titlebar">	<h2>FRONT PAGE VIDEOS LIST</h2>	<p></p></div>
                            
                            <div class="shortcuts-icons">
                           	<a id="add_video_btn" class="shortcut tips" href="#" title="Add New Video"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a></div>
                            
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


                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>                                
                                

                                  
                                    
                                    
                                    <div class="st-form-line" style="z-index: 620;">	
                                    	<span class="st-labeltext">Slide Type</span>	
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="imagetype" name="slide_type" class="uniform" value="image" style="opacity: 0;" checked="checked"></span></div> Image</label> 
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="videotype" name="slide_type" class="uniform" value="video" style="opacity: 0;"></span></div> Video</label>
                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>
                                                                  
                                    

                                    
                                    
                                    
                                                                        
                                                                                                            

                                    
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<!--<span class="st-labeltext">Upload Cover File</span>-->	

<div id="image_type_uploader">
   <div id="singlefile-uploader-2">Upload Slide Image</div>
   <div id="status-2"></div> 
</div>                                                   

<?php /*?>


<div  id="video_type_uploader" style="display:none">
	<div id="singlefile-uploader-3">Upload Video(mp4)</div>
	<div id="status-3"></div> 
    <div id="singlefile-uploader-4">Upload Video(webm)</div>
	<div id="status-4"></div>
</div><?php */?>
                                                   
<script>


$(document).ready(function(){


$('#videotype').click(function() {     
  var checked = $(this).attr('checked');
  if(checked){ 
		$('#image_type_uploader').css("display", "none");
		$('#video_type_uploader').css("display", "block");
  }
});

$('#imagetype').click(function() {     
  var checked = $(this).attr('checked');
  if(checked){ 
		$('#video_type_uploader').css("display", "none");
		$('#image_type_uploader').css("display", "block");
		
  }
});


/*------------------------------------------------------------------------------------------*/
var settings_2 = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-slideshow-image.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,jpeg",
	fileName: "slide_image_file",
	multiple: false,
	dynamicFormData: function()
{

	var slide_type_value = $("input[type='radio'][name='slide_type']:checked").val();
	var slide_title = $("#video_title").val();
	var data ={ "slide_title":slide_title, "slide_type":slide_type_value}
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

$("#singlefile-uploader-2").uploadFile(settings_2);
/*-------------------------------------------------------------------------------------------*/











/*----------------------------------------VIDEO----------------------------------------------------*/
var settings_3 = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-cover-video-1.php",
	method: "POST",
	allowedTypes:"mp4",
	fileName: "slide_video_file",
	multiple: false,
	dynamicFormData: function()
{

	var slide_type_value = $("input[type='radio'][name='slide_type']:checked").val();
	var slide_title = $("#video_title").val();
	var data ={ "slide_title":slide_title, "slide_type":slide_type_value}
	return data;
},
	onSuccess:function(files,data,xhr)
	{
			
		$("#status-3").html("<font color='green'>Upload is success</font>");
		
	},
	onError: function(files,status,errMsg)
	{		
		$("#status-3").html("<font color='red'>Upload is Failed</font>");
	},
	uploadButtonClass:"ajax-file-upload-green"
}


$("#singlefile-uploader-3").uploadFile(settings_3);




var settings_4 = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-cover-video-2.php",
	method: "POST",
	allowedTypes:"webm",
	fileName: "slide_video_file",
	multiple: false,
	dynamicFormData: function()
{

<?php /*?>	var cover_type_value = $("input[type='radio'][name='cover_type']:checked").val();
	var data ={ "p_id":"<?php echo $id;?>", "cover_type":cover_type_value}
	return data;<?php */?>
},
	onSuccess:function(files,data,xhr)
	{
			
		$("#status-4").html("<font color='green'>Upload is success</font>");
		
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
                                        <th width="54%">Title</th>
                                        <th width="17%">Thumbnails</th>
                                        <th width="16%">Date Published</th>
                                        <th width="8%">Actions</th>
                                    </tr>
                               	</thead>
                                
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
<?php $counter=1; ?>                                
<?php
if(count($slideshow_media_list) > 0){
	foreach($slideshow_media_list as $slideshow_media){
?>                                    
										
										
										<tr  id="row_<?php echo $slideshow_media["Id"]; ?>" class="gradeA">
											<td><?php echo $counter;?></td>
											<td>
	<strong><?php echo $slideshow_media["Slide_Title"]; ?></strong></td>
											<td>
                                            <?php if ($slideshow_media["Slide_Src_Type"] == "video"){ ?>
                                            
                                            <video height="240" width="240" src="<?php echo $this->config->item("front_site_url");?>uploads/slideshow-media-files/<?php echo $slideshow_media["Slide_Src_File"]; ?>" controls=""></video>
                                            <?php }else if($slideshow_media["Slide_Src_Type"] == "image"){ ?>
												
											<img src="<?php echo $this->config->item("front_site_url");?>uploads/slideshow-media-files/<?php echo $slideshow_media["Slide_Src_File"]; ?>" width="102" height="68" />	
												
												
											<?php }?>
                                            
                                            
                                            </td>
											<td class="center"><?php echo gmdate("d-m-Y", $slideshow_media["Date_Added"]); ?></td>
											<td class="center">
											<a id="item_<?php echo $slideshow_media["Id"]; ?>" class="clickable_link del_item"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /></a>
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