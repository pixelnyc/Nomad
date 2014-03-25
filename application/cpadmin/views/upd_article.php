<?php include("templates/header.php");?>
    
    
    
    
    
    
    
    
    
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
                    
                    
                    
       
                               <!-- START SIMPLE FORM -->
                        	<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Step 1</h3>
                                    <div class="shortcuts-icons">	<a class="shortcut tips" href="#" title="This is Simple Form"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon" /></a>	</div>
                                </div>
                                <div class="body">
                                
                                 <?php /*?> <form id="article_form" name="article_form" method="post" action="" enctype="multipart/form-data"><?php */?>
                                 <?php echo form_open('article/submit_upd_art_step1'); ?>
                                  
<?php /*?>                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Author Name</span>	
                                        <input name="author_name" type="text" class="st-forminput  tips-right" id="author_name" style="width:300px" original-title="Enter Author Name" value="<?php echo $article_data[0]->Post_Author;?>" /> 
                                    <div class="clear"></div>
                                    </div><?php */?>
                                    
                                     <input name="author_name" type="hidden" class="st-forminput  tips-right" id="author_name" style="width:300px" original-title="Enter Author Name" value="<?php echo $article_data[0]->Post_Author;?>" /> 
                                  
                                  
                                  
                                  
                                  	 <!-- This is uniform selectbox - view this item class -->
                                  	<div class="st-form-line">	<span class="st-labeltext">Authors</span>	
                                   	<select name="author_id" id="author_id" class="uniform">
										<?php foreach( $authors as $author ) : ?>
                                        <?php
                                        if($article_data[0]->Author_Id == $author['Author_Id']){$select="SELECTED";}else{$select="";}
										?>
										<option value="<?php echo $author['Author_Id'] ?>" <?php echo $select;?>><?php echo $author['Author_Name'] ?></option>
                                        <?php endforeach; ?>
                               		</select>
                                    	<div class="clear"></div> 
                                    </div>
                                    
                                    
                                    
                                  	
                                    <div class="st-form-line">	
                                    	<span class="st-labeltext">Headline</span>	
                                        <input name="headline" type="text" class="st-forminput tips-right" id="headline" style="width:510px" original-title="Enter Headline" value="<?php echo $article_data[0]->Post_Headline;?>" /> 
                                    <div class="clear"></div>
                                    </div>
     
                                  	



									<div class="st-form-line" style="z-index: 480;">	
                                    	<span class="st-labeltext">Byline</span>	
                                        <textarea name="byline" class="st-forminput tips-right" id="byline" style="width:510px" rows="3" cols="47" original-title="Enter Byline"><?php echo $article_data[0]->Post_Byline;?></textarea> 
                                    <div class="clear" style="z-index: 470;"></div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <!-- This is uniform selectbox - view this item class -->
                                  	<div class="st-form-line">	<span class="st-labeltext">Section</span>	
                                   	<select name="section" id="section" class="uniform">
										<?php foreach( $sections as $section ) : ?>
                                        <?php
                                        if($article_data[0]->Cat_Id == $section['Cat_Id']){$select="SELECTED";}else{$select="";}
										?>
										<option value="<?php echo $section['Cat_Id']; ?>" <?php echo $select;?>><?php echo $section['Cat_Title'] ?></option>
                                        <?php endforeach; ?>
                               		</select>
                                    	<div class="clear"></div> 
                                    </div>
                                                                       





									<div class="st-form-line">	
                                    	<span class="st-labeltext">Photographer Name</span>	
                                        <input name="photographer_name" type="text" class="st-forminput  tips-right" id="photographer_name" style="width:300px" original-title="Enter Photographer Name" value="<?php echo $article_data[0]->Photographer_Name;?>" /> 
                                    <div class="clear"></div>
                                    </div>    
                                    
                                    
                                    <div class="st-form-line">	
                                    	<span class="st-labeltext">Photographer's GPS Code</span>	
                                        <input name="photographer_gps_code" type="text" class="st-forminput  tips-right" id="photographer_gps_code" style="width:300px" original-title="Enter Photographer's GPS Code" value="<?php echo $article_data[0]->Photographer_Gps;?>" /> 
                                    <div class="clear"></div>
                                    </div>


<?php /*?>                                    <div class="st-form-line" style="z-index: 600;">	
                                    	<span class="st-labeltext">Gallery Attchment</span>	
                                        <label class="margin-right10"><div class="checker" id="uniform-checkbox1"><span class=""><input type="checkbox" name="gallery_attach" id="gallery_attach" value="1" class="uniform" style="opacity: 0;"></span></div></label>
                                        <input name="gallery_attach_link" type="text" class="st-forminput  tips-right" id="gallery_attach_link" style="width:300px" original-title="Enter Gallery Attachment Link" value="<?php echo $article_data[0]->Post_Gallery_Attachment_Link;?>" /> 
                                  		<div class="clear" style="z-index: 590;"></div> 
                                    </div><?php */?>
                                    
                                                                        
                                    
                                    
                                    <div class="st-form-line">	
                                    	<span class="st-labeltext">Gallery Attachment Link</span>	
                                        <input name="gallery_attach_link" type="text" class="st-forminput  tips-right" id="gallery_attach_link" style="width:300px" original-title="Enter Gallery Attachment Link" value="<?php echo $article_data[0]->Post_Gallery_Attachment_Link;?>" /> 
                                    <div class="clear"></div>
                                    </div>
                                    
                                    

                                    
                                    

                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Update and Continue" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
                                      <input type="hidden" name="p_id" value="<?php echo $id; ?>">
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