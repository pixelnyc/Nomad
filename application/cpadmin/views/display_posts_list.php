<?php include("templates/header.php");?>
    
    
    
    

<style>
.article_filteres{
	margin-top: 7px;
	margin-left: 9px;	
}
</style>








<script type="text/javascript">
$(document).ready(function(){  


	$(document).on("click", "#articles_grid a.del_item ",function(){

			var upd_item_id = $(this).attr('id').split('_');
			var rad_group = "tile_display_"+upd_item_id[1]; 
			var tile_display_value = $("input[type='radio'][name="+rad_group+"]:checked").val();
			var data_values = 'upd_item_id='+upd_item_id[1]+'&upd_tile_val='+tile_display_value;
			$.post("<?php echo base_url();?>manage/update_tile_display", data_values, function(theResponse){
				
				if(theResponse == "success"){
					alert("updated");
					//$('#articles_grid #row_'+del_item_id[1]).fadeOut(200, function(){$(this).remove()});	
				}else{
					alert(theResponse);	
				}
			});	
	});
	

 
$('#section').on('change', function() {
  var key_val=$(this).val();
  window.location="<?php echo base_url();?>manage/display_options/section/"+key_val;
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
                    		<div class="titlebar">	<h2>ALL PUBLISHED POSTS</h2>	<p>View Article List. Sort, Edit Delete Articles</p></div>
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">
                    
                    
                    
                    
                    
                    
                        <!-- START TABLE -->
                      <div class="simplebox grid740">
                        
                       	<div class="titleh">
                       	 <!-- <h3>Article Listning</h3>-->
                         		<div class="article_filteres">
                                    <select name="section" id="section" class="uniform">
                                    	<option value="">All</option>
										<?php foreach( $sections as $section ) : ?>
                                        <?php if($section['Cat_Id'] == $selected_value){$select="SELECTED";}else{$select="";}?>
										<option value="<?php echo $section['Cat_Id'] ?>" <?php echo $select;?>><?php echo $section['Cat_Title'] ?></option>
                                        <?php endforeach; ?>
                               		</select>
								</div>
                        </div>
                            
                            
                            
                            
<?php /*?>                            <!-- Start Data Tables Initialisation code -->
							<script type="text/javascript" charset="utf-8">
								$(document).ready(function() {
								oTable = $('#articles_grid').dataTable({
							"bJQueryUI": true,
							"sPaginationType": "full_numbers"
							});
							} );
						</script>
                            <!-- End Data Tables Initialisation code --><?php */?>




<style>
img.thumb{
	border: 3px solid white;
}
</style>





							<table cellpadding="0" cellspacing="0" border="0" class="display data-table" id="articles_grid">
                            
								<thead>
									<tr>
                                    	<th width="5%">SNO</th>
                                        <th width="40%">Title</th>
                                        <th width="17%">Thumbnails</th>
                                        <th width="30%">Date Added</th>
                                        <th width="8%">Actions</th>
                                    </tr>
                               	</thead>
                                
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
<?php $counter=1; ?>                                
<?php
if(count($posts_list) > 0){
	foreach($posts_list as $post){
		$rad_1="";
		$rad_2="";
		$rad_3="";
		if($post['Post_Thumbnail_Display'] == "onexone"){
		$rad_1 = "checked";	
		}else if($post['Post_Thumbnail_Display'] == "twoxone"){
		$rad_2 = "checked";	
		}else if($post['Post_Thumbnail_Display'] == "twoxtwo"){
		$rad_3 = "checked";		
		}else{
		$rad_1 = "checked";	
		}
?>                                    
										
										
										<tr  id="row_<?php echo $post["Post_Id"]; ?>" class="gradeA">
											<td><?php echo $counter;?></td>
											<td>
	<strong><?php echo $post["Post_Headline"];?></strong></td>
											<td><img class="thumb" src="<?php echo $this->config->item("thumbnails_upload_path");?><?php echo $post["Post_Thumbnail"];?>" width="102" height="68" /></td>
											<td class="center">
                                                                                	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="" name="tile_display_<?php echo $post["Post_Id"]; ?>" class="uniform" value="onexone" style="opacity: 0;" <?php echo $rad_1;?>></span></div> 1x1</label> 
                                    	<label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="" name="tile_display_<?php echo $post["Post_Id"]; ?>" class="uniform" value="twoxone" style="opacity: 0;" <?php echo $rad_2;?>></span></div> 2x1</label>
                                        <label class="margin-right10"><div class="radio" id="uniform-undefined"><span><input type="radio" id="" name="tile_display_<?php echo $post["Post_Id"]; ?>" class="uniform" value="twoxtwo" style="opacity: 0;" <?php echo $rad_3;?>></span></div> 2x2</label>
                                            </td>
											<td class="center">
											<a id="item_<?php echo $post["Post_Id"]; ?>" class="clickable_link del_item">update</a>

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