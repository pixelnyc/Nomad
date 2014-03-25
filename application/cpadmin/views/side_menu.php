<?php include("templates/header.php");?>
    
    
    
    
    
    
    

<!-- Add fancyBox -->
	<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/jquery.fancybox-1.3.4.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fancybox/source/jquery.fancybox-1.3.4.css" media="screen" />
<!-- Add fancyBox -->      






	<script type="text/javascript">
	
	
$(document).ready(function(){  






	$(document).on("click", "#articles_grid a.del_item ",function(){

			if(confirm("Are You sure to Delete?")){

			
			var del_item_id = $(this).attr('id').split('_');
			var data_values = 'del_item_id='+del_item_id[1]; 
			//alert(data_values);
			$.post("<?php echo base_url();?>manage/delete_section", data_values, function(theResponse){
				
				if(theResponse == "success"){
					$('#articles_grid #row_'+del_item_id[1]).fadeOut(200, function(){$(this).remove()});	
				}else{
					alert(theResponse);	
				}
			});	
	
			}//end if
	});
 
 
 
 
 
 
 
 
 
 
 
 
 	$("#sort_window").fancybox({
		'width'				: '75%',
		'height'			: '75%',
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		onClosed	:	function() {
            
			parent.location.reload(true);
			//alert('Closed!');
		}
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
                    		<div class="titlebar">	<h2>Sections</h2>	<p>Sections or Category Management System</p></div>
                            

                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    
                    
                    
                    
       
       
       
       
       
       
       
       
       
       
       
       
                               <!-- START SIMPLE FORM -->
                        	<div class="simplebox grid740">
                            	<div class="titleh">
                                	<h3>Add New Section</h3>
                                   
                                </div>
                                <div class="body">
                                
                                
                                
                                
                                <?php
								if(isset($action_mode) && $action_mode == "edit"){
								?>
                                  <?php /*?><form id="form2" name="form2" method="post" action=""><?php */?>
                                  <?php echo form_open('manage/submit_upd_section'); ?>
                                  
                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Section Title</span>	
                      <input name="section_title" type="text" class="st-forminput" id="section_title" style="width:510px" value="<?php echo $section[0]->Cat_Title?>" /> 
                                    <div class="clear"></div>
                                    </div>
                                  


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Submit" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
                                      <input type="hidden" name="section_id" id="section_id" value="<?php echo $section[0]->Cat_Id?>" class="st-clear"/>
                                    </div>
                                    
                                  </form>                                
                                
                                
                                <?php
								}else{
								?>
                                
                                  <?php /*?><form id="form2" name="form2" method="post" action=""><?php */?>
                                  <?php echo form_open('manage/submit_section'); ?>
                                  
                                  	<div class="st-form-line">	
                                    	<span class="st-labeltext">Enter Section Title</span>	
                                        <input name="section_title" type="text" class="st-forminput" id="section_title" style="width:510px" value="" /> 
                                    <div class="clear"></div>
                                    </div>
                                  


                                    
                                    <div class="button-box">
                                   	  <input type="submit" name="button" id="button" value="Submit" class="st-button"/>
                                   	  <input type="reset" name="button" id="button2" value="Reset" class="st-clear"/>
                                    </div>
                                    
                                  </form>
                                  <?php
								}
								  ?>
                                </div>
                            </div>
                        <!-- END SIMPLE FORM -->             
                    
            


                      <div class="clear">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
        
                      </div>

                        



                        <!-- START TABLE -->
                      <div class="simplebox grid740">
                        
                       	<div class="titleh">
                       	 <div class="shortcuts-icons">
                            	
                                <a id="sort_window" class="tips" href="<?php echo base_url();?>manage/section_sort_list/" original-title="Sort Items"><img src="<?php echo base_url();?>img/arrange-icon.png" width="16" height="16" alt="icon"></a>
                                
                                </div>
                            
                            <div class="clear"></div>
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
                                        <th width="85%">Section Title</th>
                                      

                                        <th width="10%">Actions</th>
                                    </tr>
                               	</thead>
                                
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
<?php $counter=1; ?>                                
<?php
if(count($sections_list) > 0){
	foreach($sections_list as $section){
?>                                    
										
										
										<tr  id="row_<?php echo $section["Cat_Id"]; ?>" class="gradeA">
											<td><?php echo $counter;?></td>
											<td>
	<strong><a href="<?php echo $this->config->item("front_site_url");?>category/<?php echo $section["Cat_Slug"];?>" target="_blank"><?php echo $section["Cat_Title"];?></a></strong></td>
								
											<td class="center">
											<a id="item_<?php echo $section["Cat_Id"]; ?>" class="clickable_link del_item"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /></a>

											<a href="<?php echo base_url();?>manage/edit_section/<?php echo $section["Cat_Id"]; ?>" class="clickable_link"><img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></a>

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