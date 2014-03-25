<?php include("templates/header.php");?>
    
    
    
    

<style>
.article_filteres{
	margin-top: 7px;
	margin-left: 9px;	
}
</style>








<script type="text/javascript">
$(document).ready(function(){  

 
 
    
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
                    		<div class="titlebar" style="width:370px;">	<h2>Autors</h2></div>
                            
                            
                            <div class="shortcuts-icons" style="width:315px;">
                
    
                 <a style="margin-right:15px; margin-top:4px; float:right;" class="button-green" href="<?php echo base_url();?>author/add_author">Add Author</a>
                            
                            
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
if(count($author_list) > 0){
	foreach($author_list as $author){
		
		if($author["Author_Thumbnail"] == ""){
			$thumbnail = base_url()."img/author-icon.png";
		
		}else{
			$thumbnail = $this->config->item("front_site_url")."uploads/author-thumbs/".$author["Author_Thumbnail"];
		}
?>                                    
										
										
										<tr  id="row_<?php echo $author["Author_Id"]; ?>" class="gradeA">
											<td><?php echo $counter;?></td>
											<td>
	<strong><a href="<?php echo $this->config->item("front_site_url");?>author/view/<?php echo $author["Author_Slug"];?>" target="_blank"><?php echo $author["Author_Name"];?></a></strong></td>
											<td align="center"><img class="thumb" src="<?php echo $thumbnail;?>" width="50" /></td>
											<td class="center"><?php echo gmdate("d-m-Y", $author["Date_Added"]); ?></td>
											<td class="center">
									<?php /*?>		<a id="item_<?php echo $author["Author_Id"]; ?>" class="clickable_link del_item"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /></a>
										<?php */?>
											
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