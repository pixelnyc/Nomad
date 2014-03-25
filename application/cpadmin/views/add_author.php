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

                            <h2>ADD AUTHOR</h2>	<p></p>
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
                                 <?php echo form_open('author/submit_author_step1'); ?>
                                  
                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Author Name</span>	
                                        <input name="author_name" type="text" class="st-forminput  tips-right" id="author_name" style="width:300px" original-title="Enter Author Name" /> 
                                    <div class="clear"></div>
                                    </div>
                                  
                                  	
                                    <div class="st-form-line">	
                                    	<span class="st-labeltext">Author Email</span>	
                                        <input name="email" type="text" class="st-forminput tips-right" id="email" style="width:510px" original-title="Enter Author Email" /> 
                                    <div class="clear"></div>
                                    </div>
     
                                  	



									<div class="st-form-line" style="z-index: 480;">	
                                    	<span class="st-labeltext">Author Bio</span>	
                                        <div style="float:right">
                                        <textarea name="author_bio" class="st-forminput tips-right" id="wysiwyg" style="width:510px" rows="3" cols="47" original-title="Enter Author Bio"></textarea> 
                                        </div>
                                    <div class="clear" style="z-index: 470;"></div>
                                    </div>
                                    
                                    
                                    
                                    
                                 
                                    
                                    
                                    
                                    
                             
                                    

                                    


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Submit" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
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