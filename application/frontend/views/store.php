<!DOCTYPE html>
<html class="windows"><head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/sprite.gallery.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/global.gallery.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/authentication.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/photos/css/photoDetail.gallery.min.css" />
		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome-4.0.1/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/additional-styles.css" />
	
<?php /*?>    <!--[if lt IE 9]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<![endif]--><?php */?>


<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!--<![endif]-->



<?php include("includes/typekit.php");?> 




<script>

$(document).ready(function(){

		resize_height();
		resize_width();



$(window).resize(function(){

	resize_height();	
	resize_width();
	

});


function resize_width(){

	var photodetailcontainer_width = $("#photoDetailContainer").css("width");
	photodetailcontainer_width = parseInt(photodetailcontainer_width.slice(0, -2));
	var photoRailContainer_width = 305; // width of sidebar detail
	var photoCarousel_width_calculated = photodetailcontainer_width - photoRailContainer_width;
	$(".photoCarousel").css("width", "100%");
	
}

function resize_height(){

var container_moved_top_bottom = 40; // only top  margin 40
var wrap_height = $("#wrap").css("height");

var photodetailcontainer_height_calculated = parseInt(wrap_height.slice(0, -2)) - container_moved_top_bottom;
$("#photoDetailContainer").css("height", photodetailcontainer_height_calculated);
$(".photoCarousel").css("min-height", photodetailcontainer_height_calculated);
	
}


function player_centered(){
	//var height_evaluate  = $('#video_player_container').height()-$('.flowplayer').height();
	//$('.flowplayer').css("top",height_evaluate/2);		
	
	var height_evaluate  = $('#video_player_container').height()-$('.player_wrapper').height();
	$('.player_wrapper').css("top",height_evaluate/2);			
}



});

</script>



    
	<title> Nomad Magazine</title>




 
    
    <style>


	
	iframe{
		width: 100%;
		height: 100%;
		min-height: 100%;
	}

	
	</style>
    





    
</head>

<body class="storeTemplate">



<div id="fb-root"></div>

<div id="header-nav-strip" class="empty noStations queue signedOut allowSkips">	
	<div id="global">
		

<nav data-tour-id="globalnav">
	<ul>
		<li class="">
			<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/nomad-logo.png"></a>
		</li>		
	</ul>
</nav>






<div id="social_icons_box">
<a href="https://www.facebook.com/NomadMag" target="_blank"><img src="<?php echo base_url();?>assets/images/facebook.png" width="30" /></a>
<a href="http://twitter.com/share?text=Nomad Magazine Store" class="twitter popup" data-count="none"><img src="<?php echo base_url();?>assets/images/twitter.png" width="30" height="30" /></a>
<a href="#" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo base_url();?>store/', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="<?php echo base_url();?>assets/images/gplus.png" width="30" /></a>
</div>		
















						
	</div>
</div>










	<div id="container">
		<div id="siteAlert"><div id="siteAlertContent"></div><i class="close_18 close"></i></div>
		
		
<section id="sidebar">
		
	<nav data-tour-id="sidebarnav">
		<ul>
			<?php $last_item_class=""; ?>
			<?php  $nav_last_key = end(array_keys($categories)); ?>			
            <?php foreach( $categories as $key=>$category ) : ?>
            <?php if ($key == $nav_last_key) {$last_item_class="last-item";}?>
            <li class="<?php echo $last_item_class; ?>">               
                <a href="<?php echo base_url();?>category/<?php echo $category['Cat_Slug'] ?>">		
                <span><?php echo $category['Cat_Title'] ?></span>
                </a>
            </li>
            <?php endforeach; ?>
             <li>               
                <a href="<?php echo base_url();?>store/">		
                <span>FASHION</span>
                </a>
            </li>
		</ul>
	</nav>
		
</section>
        
        
        
        
        

		<div id="wrap" class="container" data-uid="09390a56-bfe4-4610-a4ab-b82cde3d0106">
			


<div id="photoDetailContainer">
    <div class="photoCarousel">
    <div class="photoItems">
        <div class="container" id="video_player_container">








<iframe src="<?php echo base_url();?>shop_landing.php"></iframe>










   
    
        </div>
    </div>


 
 
 
 
 
 
 
 
 
 

    
    
    
       

    

    
</div>
    


</div>
			
		</div>




    </div>
    
    

      
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/twitter-popup-script.js"></script>



   
</body>
</html>