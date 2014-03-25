<?php include("templates/header.php");?>
    
    
    
    
    
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
<?php include("templates/side_bar.php");?>        

        
        <!-- START PAGE -->
        <div id="page">
        	

            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	<h2>DRAFTS</h2>	<p>View Article List. Sort, Edit Delete Articles</p></div>
                            
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
                    
                    
                    
                    
                    
                    
                        <!-- START TABLE -->
                      <div class="simplebox grid740">
                        
                       	<div class="titleh">
                       	  <h3>Scheduled Articles</h3>
                        	</div>
                            
                            
                            
                            
                            <!-- Start Data Tables Initialisation code -->
							<script type="text/javascript" charset="utf-8">
								$(document).ready(function() {
								oTable = $('#example').dataTable({
							"bJQueryUI": true,
							"sPaginationType": "full_numbers"
							});
							} );
						</script>
                            <!-- End Data Tables Initialisation code -->




<style>
img.thumb{
	border: 3px solid white;
}
</style>






							<table cellpadding="0" cellspacing="0" border="0" class="display data-table" id="example">
                            
								<thead>
									<tr>
                                    	<th width="5%">SNO</th>
                                        <th width="60%">Title</th>
                                        <th width="17%">Thumb</th>
                                        <th width="11%">Schedule  Date</th>
                                        <th width="7%">Actions</th>
                                    </tr>
                               	</thead>
                                
                                <tbody>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <tr class="gradeA">
                                    	<td>1</td>
                                    	<td>
<strong><a href="#">The Fa$hion Killa Contest: Win one of two shopping spree prize packs worth over $500!</a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb1.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                
                                	<tr class="gradeA">
                                    	<td>2</td>
                                    	<td><h1><a href="#">What You Didn&rsquo;t Know About The 50 Shades Movie</a></h1></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb2.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                    
                                    <tr class="gradeA">
                                    	<td>3</td>
                                    	<td><h2><a href="#">Dos and Don'ts</a></h2></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb3.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                
                                	<tr class="gradeA">
                                    	<td>4</td>
                                    	<td><h1><a href="#">World, meet Indiana (yes, named after Jones)</a></h1></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb4.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                    
                                    <tr class="gradeA">
                                    	<td>5</td>
                                    	<td><strong>
                                      <a href="#">Jonathan + Olivia kicks off Toronto Fashion Week </a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb5.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                
                                	<tr class="gradeA">
                                    	<td>6</td>
                                    	<td><strong>
                                      <a href="#">Street Style, Toronto: 20 fashion week shots from outside the first night of Spring 2014 shows</a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb6.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                    
                                    <tr class="gradeA">
                                    	<td>7</td>
                                    	<td><strong>
                                      <a href="#">Sport meets city with ’90s-inspired waves for Bellavance’s Spring 2014 beauty look</a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb7.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                
                                	<tr class="gradeA">
                                    	<td>8</td>
                                    	<td><strong><a href="#">Bellavance Spring 2014: The up and coming New York</a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb8.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                    
                                    <tr class="gradeA">
                                    	<td>9</td>
                                    	<td><strong>
                                      <a href="#">How to wear purple makeup:</a></strong> </td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb9.jpg" width="102" height="68" /></td>
                                    	<td class="center">31/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                                
                                	<tr class="gradeA">
                                    	<td>10</td>
                                    	<td><strong>
                                      <a href="#">Calla Spring 2014: ’90s nostalgia gets a couture quality boost with 26 looks perfect for sun, sand and Californian surf</a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb10.jpg" width="102" height="68" /></td>
                                    	<td class="center">22/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>
                                    </tr>
                              
                                
  
  
                                  	<tr class="gradeA">
                                    	<td>11</td>
                                    	<td>
<strong><a href="#">Friendship bracelets and fishtail braids</a></strong></td>
                                    	<td><img class="thumb" src="<?php echo base_url();?>img/thumbs/thumb11.jpg" width="102" height="68" /></td>
                                    	<td class="center">21/08/2013</td>
                                    	<td class="center"><img src="<?php echo base_url();?>img/thumbs/cross.png" width="16" height="16" /> <img src="<?php echo base_url();?>img/thumbs/edit.png" width="16" height="16" /></td>

                                        
                                        
                                        </td>
                                    </tr>
                                    
                                    
                                    
                                                                  
                                

                                    
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