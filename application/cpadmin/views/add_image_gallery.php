<?php include("templates/header.php");?> 
    
    
    
    
    
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
        
<?php include("templates/side_bar.php");?>

        
        <!-- START PAGE -->
        <div id="page">
        	

            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	

                            <h2>ADD Image Gallery</h2>	<p>Create New Image gallery :)</p>
                            </div>

                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    
                    
                    
       
                               <!-- START SIMPLE FORM -->
                        	<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Basic Information</h3>
                                    <div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is Simple Form"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                                </div>
                                <div class="body">
                                
                                 <?php /*?> <form id="article_form" name="article_form" method="post" action="" enctype="multipart/form-data"><?php */?>
                                 <?php echo form_open('article/submit_gallery_step1'); ?>
                                  
                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Author Name</span>	
                                        <input name="author_name" type="text" class="st-forminput  tips-right" id="author_name" style="width:300px" original-title="Enter Author Name" /> 
                                    <div class="clear"></div>
                                    </div>
                                  
                                  	
                                    <div class="st-form-line">	
                                    	<span class="st-labeltext">Gallery Title</span>	
                                        <input name="headline" type="text" class="st-forminput tips-right" id="headline" style="width:510px" original-title="Enter Headline" /> 
                                    <div class="clear"></div>
                                    </div>
     
                                  	



									<div class="st-form-line" style="z-index: 480;">	
                                    	<span class="st-labeltext">Description</span>	
                                        <textarea name="byline" class="st-forminput tips-right" id="byline" style="width:510px" rows="3" cols="47" original-title="Enter Byline"></textarea> 
                                    <div class="clear" style="z-index: 470;"></div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <!-- This is uniform selectbox - view this item class -->
                                  	<div class="st-form-line">	<span class="st-labeltext">Section</span>	
                                   	<select name="section" id="section" class="uniform">
										<?php foreach( $sections as $section ) : ?>
										<option value="<?php echo $section['Cat_Id'] ?>"><?php echo $section['Cat_Title'] ?></option>
                                        <?php endforeach; ?>
                               		</select>
                                    	<div class="clear"></div> 
                                    </div>
                                    
                                    
                                    
                                    
                                   
<?php /*?>									<div class="st-form-line">	
                                    	<span class="st-labeltext">Photographer Name</span>	
                                        <input name="photographer_name" type="text" class="st-forminput  tips-right" id="photographer_name" style="width:300px" original-title="Enter Photographer Name" /> 
                                    <div class="clear"></div>
                                    </div>    
                                    
                                    
                                    <div class="st-form-line">	
                                    	<span class="st-labeltext">Photographer's GPS Code</span>	
                                        <input name="photographer_gps_code" type="text" class="st-forminput  tips-right" id="photographer_gps_code" style="width:300px" original-title="Enter Photographer's GPS Code" /> 
                                    <div class="clear"></div>
                                    </div> <?php */?>                             
                                    <input type="hidden" name="photographer_name" id="photographer_name" value="null" class="st-clear"/>
									<input type="hidden" name="photographer_gps_code" id="photographer_gps_code" value="null" class="st-clear"/>
                                    


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Save and Continue" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
                                      <input type="hidden" name="post_type" id="post_type" value="<?php echo $post_type; ?>" class="st-clear"/>
                                      <input type="hidden" name="gallery_type" id="gallery_type" value="<?php echo $gallery_type; ?>" class="st-clear"/>
                                    </div>
                                    
                                  </form>
                                
  
                                </div>
                            </div>
                        <!-- END SIMPLE FORM -->                      
                    
                    
                    <div class="clear"></div>

                        



                        <!-- start simplebox with shortcuts --><!-- end simplebox with shortcuts -->

                        <!-- START TABLE --><!-- END TABLE -->

                        <!-- start statistics --><!-- end statistics -->

                        <!-- start tabs --><!-- end tabs -->

                            		<!-- start alert boxes codes --><!-- end alert boxes codes -->
                        
                        
                        
                        
                            		<!-- start alert boxes codes --><!-- end alert boxes codes -->

                      <div class="clear"></div>

                        <!-- start simplebox --><!-- end simplebox -->
                    
                    
                    
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