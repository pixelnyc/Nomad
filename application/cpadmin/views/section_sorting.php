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
			$.post("<?php echo base_url();?>manage/update_section_sorting", order, function(theResponse){
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
            <?php foreach( $sections_list as $section_item ) : ?>
            <?php 
			$class = "image_art_style";
			?>
            			<li id="recordsArray_<?php echo $section_item["Cat_Id"]; ?>" class="<?php echo $class;?>">
						<?php echo $section_item["Cat_Title"]; ?>
                        </li>

            
			 <?php endforeach; ?>
            
			</ul>

</div>    


</body>
</html>