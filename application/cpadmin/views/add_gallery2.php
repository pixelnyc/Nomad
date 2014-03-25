<?php include("templates/header.php");?> 
    
    
    
<link href="<?php echo base_url();?>jquery-multiple-file-upload/assets/uploadfile.css" rel="stylesheet">
<script src="<?php echo base_url();?>jquery-multiple-file-upload/assets/jquery.uploadfile.min.js"></script>    
    
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
<?php include("templates/side_bar.php");?>

        
        <!-- START PAGE -->
        <div id="page">
        	

            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	<h2>ADD Gallery</h2></div>
                            
                            <div class="shortcuts-icons">
                            	<a class="shortcut tips" href="#" title="Refresh"><img src="<?php echo base_url();?>img/icons/shortcut/refresh.png" width="25" height="25" alt="icon" /></a>
                            	<a class="shortcut tips" href="#" title="Dashboard"><img src="<?php echo base_url();?>img/icons/shortcut/dashboard.png" width="25" height="25" alt="icon" /></a>
                           	<a class="shortcut tips" href="#" title="Add New Item"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a></div>
                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">



						<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Media Files Upload</h3>
                                </div>
                                <div class="body">
                                 
                                    <div class="st-form-line" style="z-index: 620;">	
                                   <!-- 	<span class="st-labeltext">Upload Article Thumbnail</span>-->
                                        
                                            <div id="single-fileuploader-1">Upload Thumbnail</div>
                                            <div id="status-1"></div>
<script>

$(document).ready(function()
{

var settings = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-ver-1.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,jpeg",
	fileName: "article_thumb_file",
	multiple: false,
	formData: {"p_id":"<?php echo $id;?>"},
	onSuccess:function(files,data,xhr)
	{
			
		$("#status-1").html("<font color='green'>Upload is success</font>");
		
	},
	onError: function(files,status,errMsg)
	{		
		$("#status-1").html("<font color='red'>Upload is Failed</font>");
	},
	uploadButtonClass:"ajax-file-upload-green"
}
$("#single-fileuploader-1").uploadFile(settings);

});
</script>
                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>                                
                                
                                
                                

                                  
                                    

                                                                  
                                    
                                    
                                                                                                            

                                    
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<!--<span class="st-labeltext">Upload Cover File</span>-->	






                                  		<div class="clear"></div> 
                                    </div>
                         


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="proceed_button" value="Save and Continue" class="st-button" />
                                      <?php if($gallery_type == "image-gallery"){?>
                                      <script>$(function(){
                                      $("#proceed_button").click(function(){$(location).attr('href', '<?php echo base_url();?>article/proceed_image_gallery_step3/<?php echo $id;?>');});
                                      })</script>
                                      <?php
									  }else if($gallery_type == "video-gallery"){
									  ?>
                                      <script>$(function(){
                                      $("#proceed_button").click(function(){$(location).attr('href', '<?php echo base_url();?>article/proceed_video_gallery_step3/<?php echo $id;?>');});
                                      })</script>  
                                      <?php
									  }
									  ?>
                                    </div>
                           
                                
  
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                                                        
                            
                                               
                    
       
                               <!-- START SIMPLE FORM -->
                        	<?php /*?><div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Article Cover Upload</h3>
                                    <div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is Simple Form"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                                </div>
                                <div class="body">
                                
                                 <?php echo form_open_multipart('article/submit_art_step2'); ?>
                                  

                                    
                                    
                                    
                                    
                                    <div class="st-form-line" style="z-index: 620;">	
                                    	<span class="st-labeltext">Cover Type</span>	
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" name="cover_type" class="uniform" value="image" style="opacity: 0;" checked="checked"></span></div> Image</label> 
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" name="cover_type" class="uniform" value="video" style="opacity: 0;"></span></div> Video</label>
                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>
                                    
                                    
                                    
                                    
                                                                                                            

                                    
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Upload Cover File</span>	
                                        <input type="file" class="uniform" name="cover_file"/>
                                  		<div class="clear"></div> 
                                    </div>

                                    

                                    


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Save and Continue" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                  </form>
                                
  
                                </div>
                            </div><?php */?>
                        <!-- END SIMPLE FORM -->                      
                    
                    
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