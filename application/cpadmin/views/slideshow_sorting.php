<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOMAD MAG ADMINISTRATION</title>
      

 
 
<script type="text/javascript" src="<?php echo base_url();?>js/sortable/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/sortable/jquery-ui-1.7.1.custom.min.js"></script>


<style>

.wrapper{
margin:0 auto;
max-width:950px;	
}



ul#sortable {
	margin: 0;
	padding:0;
}



ul#sortable li {
	list-style: none;
	margin: 0 0 4px 0;
	padding: 7px;
	cursor:pointer;

}

ul#sortable li.text_art_style {
	background-color:#00CCCC;
	border: #CCCCCC solid 1px;
	color:#fff;	
}

ul#sortable li.image_art_style {
	background-color:#CC5200;
	border: #CCCCCC solid 1px;
	color:#fff;	
}

</style>


 <script type="text/javascript">
 
 
$(document).ready(function(){ 

 
 	$(function() {
		$("ul#sortable").sortable({ opacity: 0.6, cursor: 'move', update: function() {
			var order = $(this).sortable("serialize"); 
			$.post("<?php echo base_url();?>manage/update_slideshow_sorting", order, function(theResponse){
				//alert(theResponse);
			}); 															 
		}								  
		});
	});
	

});	
</script>
    
</head>
<body>
<div class="wrapper">


			<ul id="sortable">
            <?php foreach( $slideshow_list as $slideshow_item ) : ?>
            <?php 
			if($slideshow_item["Slide_Src_Type"] == "image"){
			$class = "image_art_style";
			?>
            			<li id="recordsArray_<?php echo $slideshow_item["Id"]; ?>" class="<?php echo $class;?>">
						<img src="<?php echo $this->config->item("front_site_url");?>uploads/slideshow-media-files/<?php echo $slideshow_item["Slide_Src_File"]; ?>" width="46" />
                        </li>
			<?php		
			}else if ($slideshow_item["Slide_Src_Type"] == "video"){ 
			$class = "video_art_style";
			?>
                        <li id="recordsArray_<?php echo $slideshow_item["Id"]; ?>" class="<?php echo $class;?>">
                                    <video width="320" src="<?php echo $this->config->item("front_site_url");?>uploads/slideshow-media-files/<?php echo $slideshow_item["Slide_Src_File"]; ?>" controls=""></video>
                        </li>
            <?php
            }
			?>
            
			 <?php endforeach; ?>
            
			</ul>

</div>    


</body>
</html>