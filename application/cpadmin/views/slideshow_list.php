<?php include("templates/header.php");?>

    

<script type="text/javascript">
$(document).ready(function(){  



$("#submit_button").click(function(){ 
	var sec_val = $("#section").val();
	var action_url = "<?php echo base_url()?>manage/slideshow/"+sec_val;
	$(location).attr('href', action_url);
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
                    		<div class="titlebar">	<h2>SLIDESHOW LIST</h2>	<p></p></div>
                            
                            
                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                

                
                	<!-- START CONTENT -->
                    <div class="content">



						<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Sections</h3>
                                </div>
                                <div class="body">
                                                               
<form name="slideshow_section_form" id="slideshow_section_form">                                
                                    <div class="st-form-line" style="z-index: 620;">		

                         		<div class="article_filteres">
                                    <select name="section" id="section" class="uniform">
                                    	<option value="0">Front Page</option>
										<?php foreach( $sections as $section ) : ?>
                                        <?php if($section['Cat_Id'] == $selected_value){$select="SELECTED";}else{$select="";}?>
										<option value="<?php echo $section['Cat_Id'] ?>" <?php echo $select;?>><?php echo $section['Cat_Title'] ?></option>
                                        <?php endforeach; ?>
                               		</select><input type="button" name="submit_button" id="submit_button" value="Select and Continue" class="st-button"/>
								</div>


                                  		<div class="clear" style="z-index: 610;"></div> 
                                    </div>                                

                                 
                                    <!-- This is uniform upload input -->
                                  	<div class="st-form-line">	
                                    	<!--<span class="st-labeltext">Upload Cover File</span>-->	
                                  		<div class="clear"></div> 
                                    </div>
                         
</form>

                                    
                          
                           
                                
  
                                </div>
                            </div>
                            
                            
                  
                    
                    
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