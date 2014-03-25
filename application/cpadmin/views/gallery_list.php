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

			var del_item_id = $(this).attr('id').split('_');
			var data_values = 'del_item_id='+del_item_id[1]; 
			//alert(data_values);
			$.post("<?php echo base_url();?>article/delete_article", data_values, function(theResponse){
				
				if(theResponse == "success"){
					$('#articles_grid #row_'+del_item_id[1]).fadeOut(200, function(){$(this).remove()});	
				}else{
					alert(theResponse);	
				}
			});	
	});
	

 
$('#section').on('change', function() {
  var key_val=$(this).val();
  window.location="<?php echo base_url();?>manage/gallery_list/section/"+key_val;
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
                    		<div class="titlebar" style="width:370px;">	<h2>PUBLISHED Galleries</h2>	<p>View Gallery List.</p></div>
                            
                            
                            <div class="shortcuts-icons" style="width:315px;">
                
                 <a style="margin-right:15px; margin-top:4px; float:right;" class="button-green" href="<?php echo base_url();?>pages/view/add_video_gallery">Add Video Gallery</a>
                 <a style="margin-right:15px; margin-top:4px; float:right;" class="button-green" href="<?php echo base_url();?>pages/view/add_image_gallery">Add Image Gallery</a>
                            
                            
                            </div>
                            
                            
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
                                        <th width="54%">Title</th>
                                        <th width="17%">Thumbnails</th>
                                        <th width="16%">Date Added</th>
                                        <th width="8%">Actions</th>
                                    </tr>
                               	</thead>
                                
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
<?php $counter=1; ?>                                
<?php
if(count($gallery_list) > 0){
	foreach($gallery_list as $gallery){
?>                                    
										
										
										<tr  id="row_<?php echo $gallery["Post_Id"]; ?>" class="gradeA">
											<td><?php echo $counter;?></td>
											<td>
	<strong><a href="<?php echo $this->config->item("front_site_url");?>gallery/view/<?php echo $gallery["Post_Slug"];?>" target="_blank"><?php echo $gallery["Post_Headline"];?></a></strong></td>
											<td><img class="thumb" src="<?php echo $this->config->item("thumbnails_upload_path");?><?php echo $gallery["Post_Thumbnail"];?>" width="102" height="68" /></td>
											<td class="center"><?php echo gmdate("d-m-Y", $gallery["Date_Added"]); ?></td>
											<td class="center">
											<a id="item_<?php echo $gallery["Post_Id"]; ?>" class="clickable_link del_item"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /></a>
										
											
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