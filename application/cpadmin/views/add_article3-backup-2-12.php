<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOMAD MAG ADMINISTRATION</title>
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/reset.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/root.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/grid.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/typography.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/jquery-plugin-base.css" />
    
    <!--[if IE 7]>	  <link rel="stylesheet" type="text/css" href="style/ie7-style.css" />	<![endif]-->
 
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.11.custom.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-settings.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/toogle.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/raphael.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/analytics.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.tabs.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.accordion.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>       
	<style>#stats{display:block;}</style>         






<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url();?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script>
$(document).ready(function() {
	
	
	
	
	$(".sort_window").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>





<style>

#text_editor_container, #image_fd_container{
	display:none;
	height:0px;
	opacity:0;	
}

</style> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <script type="text/javascript">
 
 
$(document).ready(function(){ 

$("#add_text_btn").click(function(){
	$('#text_editor_container').css({'display':'block'}).animate({height:344, 'opacity':'1'}, 1000);
});

$("#add_image_btn").click(function(){ 
	$('#image_fd_container').css({'display':'block'}).animate({height:35, 'opacity':'1'}, 500);
});









						   
	$("#submit_text_art_btn").click(function(){
		
		//var data_contents = $("#html_contents").html();
		var data_contents = CKEDITOR.instances.html_contents.getData();
		//alert(data_contents);
		var data_type = "article";
		$('#text_editor_container').animate({height:0, 'opacity':'0'}, 1000, function(){ $(this).css({'display':'none'}) });
		
		
		var datavalues = 'p_id=<?php echo $id;?>&data_type='+data_type+'&data_contents='+escape(data_contents); 	
		  $.ajax({ 
			  url: '<?php echo base_url();?>article/add_article_content',
			  type: 'post',
			  data: datavalues, 
			  dataType: 'json', 
			  success: function(theResponse){  
				  var newRowContent = '<tr id="row_'+theResponse.Posts_Data_Id+'"><td>'+theResponse.Posts_Data_Id+'</td><td>'+data_type+'</td><td>'+theResponse.Data+'</td><td align="center"><a id="item_'+theResponse.Posts_Data_Id+'" href="#" class="mini-delete del_item">Delete</a>	<div class="clear" style="z-index: 580;"></div></td></tr>';
				  $("#article_content_grid tbody").append(newRowContent);
			  }
		  });		
	});
	
	
	$("#submit_image_btn").click(function(){
		var data_contents = $("#image_url_fd").val();
		var data_type = "image";
		$('#image_fd_container').animate({height:0, 'opacity':'0'}, 500, function(){ $(this).css({'display':'none'}) });
		
		var datavalues = 'p_id=<?php echo $id;?>&data_type='+data_type+'&data_contents='+data_contents; 	
		  $.ajax({ 
			  url: '<?php echo base_url();?>article/add_article_content',
			  type: 'post',
			  data: datavalues, 
			  dataType: 'json', 
			  success: function(theResponse){  
				  
				  
				  				  var newRowContent = '<tr id="row_'+theResponse.Posts_Data_Id+'"><td>'+theResponse.Posts_Data_Id+'</td><td>'+data_type+'</td><td><img src="'+data_contents+'" width="46"></td><td align="center"><a id="item_'+theResponse.Posts_Data_Id+'" href="#" class="mini-delete del_item">Delete</a>	<div class="clear" style="z-index: 580;"></div></td></tr>';
				  $("#article_content_grid tbody").append(newRowContent);
			  }
		  });		
	});
	

	
	






	$(document).on("click", "#article_content_grid a.del_item ",function(){

			var del_item_id = $(this).attr('id').split('_');
			var data_values = 'del_item_id='+del_item_id[1]; 
			$.post("<?php echo base_url();?>article/delete_article_content", data_values, function(theResponse){
				
				if(theResponse == "success"){
					$('#article_content_grid #row_'+del_item_id[1]).fadeOut(200, function(){$(this).remove()});
						
				}else{
					alert(theResponse);	
				}
			});
	
	});




		
	

});	
</script>



<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>

    
</head>
<body>
<div class="wrapper">




	<!-- START HEADER -->
    <div id="header">
    
    
    	<!-- logo -->
    	<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/logo.png" width="112" height="43" /></a></div>
        
        
        <!-- notifications -->
        <div id="notifications"></div>
        
        
        <!-- quick menu -->
        <div id="quickmenu">
        	<a href="#" class="qbutton-left tips" title="Add a new post"><img src="<?php echo base_url();?>img/icons/header/newpost.png" width="18" height="14" alt="new post" /></a>
        	<a id="open-stats" href="#" class="qbutton-right tips" title="Statistics"><img src="<?php echo base_url();?>img/icons/header/graph.png" width="17" height="15" alt="graph" /></a>
            <div class="clear"></div>
        </div>
        
        
        <!-- profile box -->
        <div id="profilebox">
        	<a href="#" class="display">
            	<img src="<?php echo base_url();?>img/simple-profile-img.jpg" width="33" height="33" alt="profile"/>	<b>Logged in as</b>	<span>Administrator</span>
            </a>
            
            <div class="profilemenu">
            	<ul>
                	<li><a href="#">Account Settings</a></li>
                	<li><a href="<?php echo base_url() ?>login/logout_user">Logout</a></li>
                </ul>
            </div>
            
        </div>
        
        
        <div class="clear"></div>
    </div>
    <!-- END HEADER -->
    
    
    
    
    
    
    
    
    
    <!-- START MAIN -->
    <div id="main">
    
		
        
        
        
        <!-- START SIDEBAR -->
        <div id="sidebar">
        	
            <!-- start searchbox -->
            <div id="searchbox">
            	<div class="in">
               	  <form id="form1" name="form1" method="post" action="">
                  	<input name="textfield" type="text" class="input" id="textfield" onfocus="$(this).attr('class','input-hover')" onblur="$(this).attr('class','input')"  />
               	  </form>
            	</div>
            </div>
            <!-- end searchbox -->
            
            <!-- start sidemenu -->
            <div id="sidemenu">
            	<ul>
                	<li><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>article/archive"><img src="<?php echo base_url();?>img/icons/sidemenu/copy.png" width="16" height="16" alt="icon"/>Articles List</a></li>
                    <li class="active"><a href="<?php echo base_url();?>pages/view/add_article"><img src="<?php echo base_url();?>img/add.png" width="16" height="16" alt="icon"/>Add Article</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/drafts"><img src="<?php echo base_url();?>img/icons/sidemenu/calendar.png" width="16" height="16" alt="icon"/>Drafts</a></li>

               	  <li><a href="<?php echo base_url();?>pages/view/side_menu"><img src="<?php echo base_url();?>img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>Side Menu</a></li>
                    
                    <li><a href="<?php echo base_url();?>pages/view/google_any"><img src="<?php echo base_url();?>img/icons/sidemenu/lock.png" width="16" height="16" alt="icon"/>Google Analytics</a></li>
                     <li ><a href="<?php echo base_url();?>pages/view/display_options"><img src="<?php echo base_url();?>img/icons/16x16/boxes.png" width="16" height="16" alt="icon"/>Display Options</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/admin_settings"><img src="<?php echo base_url();?>img/icons/16x16/settings.png" width="16" height="16" alt="icon"/>Admin Settings</a></li>
                    <li><a href="<?php echo base_url();?>pages/view/ad_management"><img src="<?php echo base_url();?>img/icons/16x16/video.png" width="16" height="16" alt="icon"/>Ad Management</a></li>


               	  <!-- start submenu with icon -->
                    <!-- end submenu with icon -->
                    <!-- start submenu without icon -->
                    <!-- end submenu without icon -->
                    
                </ul>
            </div>
            <!-- end sidemenu -->
            
        </div>
        <!-- END SIDEBAR -->

        
        <!-- START PAGE -->
        <div id="page">
        	
            	<!-- start stats -->
                <div id="stats">
                    <!-- use it up/down on <b> tag for different colors -->
                	<div class="column">	<b>458</b>Published Articles</div>
                	<div class="column">	<b>12</b>	Drafts</div>
                	<div class="column">	<b>554</b>	Featured Articles</div>
               	  <div class="column">	<b class="down">85</b>Image	Galleries</div>
                <!-- this is last column --><a href="#" title="Close Stats" class="close tips">close</a></div>
                <!-- end stats -->
            	
                
                <!-- start page title -->
                <div class="page-title">
                	<div class="in">
                    		<div class="titlebar">	<h2>ADD ARTICLE</h2>	<p>Create New Article, Image gallery, Videos Do what ever you want :)</p></div>
                            
                            <div class="shortcuts-icons">

                            
                            	<a class="shortcut tips sort_window" data-fancybox-type="iframe" href="<?php echo base_url();?>article/article_content_list/<?php echo $id;?>" original-title="Sort Contents"><img src="<?php echo base_url();?>img/icons/shortcut/question.png" width="25" height="25" alt="icon"></a>
                            	<a class="shortcut tips" href="#" title="Add Video"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                            	<a id="add_image_btn" class="shortcut tips" href="#" title="Add Image"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                           	<a id="add_text_btn" class="shortcut tips" href="#" title="Add Text"><img src="<?php echo base_url();?>img/icons/shortcut/plus.png" width="25" height="25" alt="icon" /></a>
                            </div>
                            
                            <div class="clear"></div>
                    </div>
                </div>
                <!-- end page title -->
                
                
                
                
                
                
                
                	<!-- START CONTENT -->
                    <div class="content">

                     
                      
<div id="text_editor_container">
<textarea name="html_contents" id="html_contents"  class="st-forminput" rows="5" cols="87" style="width:96.5%;"></textarea>
			<script type="text/javascript">
				CKEDITOR.replace( 'html_contents' );
			</script>
    <div class="button-box" style="text-align:right;">
    <input type="submit" name="submit_text_art_btn" id="submit_text_art_btn" value="Submit" class="st-button">
    </div>
</div>


<div id="image_fd_container">
           <input name="image_url_fd" type="text" class="st-forminput" id="image_url_fd" style="width:510px" placeholder="Enter Image URL.." value=""> 
           <input type="submit" name="submit_image_btn" id="submit_image_btn" value="Submit" class="st-button">
       <div class="clear" style="z-index: 670;"></div>
</div>
                    
                                                           
                    
                    <div class="clear"></div>







                        
                        <!-- START TABLE -->
                        <div class="simplebox grid740">
                        
                        	<div class="titleh">
                            <h3 style="width:70%; float:left;">Article Contents</h3>
                            <a style="margin-right:15px; margin-top:4px; float:right;" class="button-green" href="http://damnlolpix.com/article/view/<?php echo $id;?>" target="_blank">View Article</a>
                            </div>

   
                            	
                                <table id="article_content_grid" class="tablesorter">
                                    <thead> 
                                		<tr> 
                                			<th>ID</th> 
                                			<th>Type</th> 
                                			<th>Preview</th>
                                			<th>Actions</th> 
                                		</tr> 
                                	</thead>
                                    <tbody> 
                                    
 
                            
   
   <?php
   if(isset($article_content_list)){
	?>
 
 
            <?php foreach( $article_content_list as $article_content_item ) : ?>
            <?php 
			if($article_content_item["Data_Type"] == "article"){
			$h2t = new html2text($article_content_item["Data"]);
			?>
            
          
                                    <tr id="row_<?php echo $article_content_item["Posts_Data_Id"]; ?>"><td><?php echo $article_content_item["Posts_Data_Id"]; ?></td><td><?php echo $article_content_item["Data_Type"]; ?></td><td><?php echo substr($h2t->get_text(),0,70)." [...]"; ?></td><td align="center"><a id="item_<?php echo $article_content_item["Posts_Data_Id"]; ?>" href="#" class="mini-delete del_item">Delete</a><div class="clear" style="z-index: 580;"></div></td></tr>


				
			<?php
			}else if($article_content_item["Data_Type"] == "image"){
			?>
            
                                                <tr id="row_<?php echo $article_content_item["Posts_Data_Id"]; ?>"><td><?php echo $article_content_item["Posts_Data_Id"]; ?></td><td><?php echo $article_content_item["Data_Type"]; ?></td><td><img src="<?php echo $article_content_item["Data"]; ?>" width="46" /></td><td align="center"><a id="item_<?php echo $article_content_item["Posts_Data_Id"]; ?>" href="#" class="mini-delete del_item">Delete</a><div class="clear" style="z-index: 580;"></div></td></tr>
			<?php		
			}
			?>
			 <?php endforeach; ?>
 
<?php
   }
?> 
 
 
 
 
 
                                    
                                    
                                    
                                    

                                    </tbody> 
                                </table>
                            
                            
                        </div>
                        <!-- END TABLE -->





















                        



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