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
                    		<div class="titlebar">	<h2>ADD ARTICLE</h2>	<p>Create New Article, Image gallery, Videos Do what ever you want :)</p></div>
                            
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
                                
                                
                                
                                
<?php /*?>                                    <div class="st-form-line" style="z-index: 620;">	
                                    	<span class="st-labeltext">Thumbnail Display</span>	
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="" name="thumb_size" class="uniform" value="onexone" style="opacity: 0;" checked="checked"></span></div> 1x1</label> 
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="" name="thumb_size" class="uniform" value="twoxone" style="opacity: 0;"></span></div> 2x1</label>
                                        <label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="" name="thumb_size" class="uniform" value="twoxtwo" style="opacity: 0;"></span></div> 2x2</label>
                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>  <?php */?>                                  









                                    <div class="st-form-line" style="z-index: 620;">	
                                   <!-- 	<span class="st-labeltext">Upload Article Thumbnail</span>-->
                                        
                                            <div id="single-fileuploader-1">Upload Thumbnail</div>
                                            <div id="status-1"></div>
<script>

$(document).ready(function(){

var settings = {
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-ver-1.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,jpeg",
	fileName: "article_thumb_file",
	multiple: false,
	dynamicFormData: function(){
			var data ={ "p_id":"<?php echo $id;?>"}
			return data;
	},
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
                                
                                
                             

                                  
                                    
                                    
                                    <div class="st-form-line" style="z-index: 620;">	
                                    	<span class="st-labeltext">Cover Type</span>	
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="imagetype" name="cover_type" class="uniform" value="image" style="opacity: 0;" checked="checked"></span></div> Image</label> 
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="videotype" name="cover_type" class="uniform" value="video" style="opacity: 0;"></span></div> Video</label>
                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>
                                                                  
                                    
                                    
                                                                                                            

                                    
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<!--<span class="st-labeltext">Upload Cover File</span>-->	

<div id="image_type_uploader">
   <div id="singlefile-uploader-2">Upload Cover Image</div>
   <div id="status-2"></div> 
</div>                                                   




<div  id="video_type_uploader" style="display:none">
	<div id="singlefile-uploader-3">Upload Cover Video(mp4)</div>
	<div id="status-3"></div> 
    <div id="singlefile-uploader-4">Upload Cover Video(webm)</div>
	<div id="status-4"></div>
</div>
                                                   
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
	url: "<?php echo base_url();?>jquery-multiple-file-upload/upload-cover-image.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,jpeg",
	fileName: "article_cover_file",
	multiple: false,
	dynamicFormData: function()
{

	var cover_type_value = $("input[type='radio'][name='cover_type']:checked").val();
	var data ={ "p_id":"<?php echo $id;?>", "cover_type":cover_type_value}
	return data;
},
	onSuccess:function(files,data,xhr)
	{
			
		$("#status-2").html("<font color='green'>Upload is success</font>");
		
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
	fileName: "article_cover_file",
	multiple: false,
	dynamicFormData: function()
{

	var cover_type_value = $("input[type='radio'][name='cover_type']:checked").val();
	var data ={ "p_id":"<?php echo $id;?>", "cover_type":cover_type_value}
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
	fileName: "article_cover_file",
	multiple: false,
	dynamicFormData: function()
{

	var cover_type_value = $("input[type='radio'][name='cover_type']:checked").val();
	var data ={ "p_id":"<?php echo $id;?>", "cover_type":cover_type_value}
	return data;
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
                         


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="proceed_button" value="Save and Continue" class="st-button" />
                                      <script>$(function(){
                                      $("#proceed_button").click(function(){$(location).attr('href', '<?php echo base_url();?>article/proceed_step3/<?php echo $id;?>');});
                                      })</script>
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