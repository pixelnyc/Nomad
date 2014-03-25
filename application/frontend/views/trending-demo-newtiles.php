<!DOCTYPE html>

<html class="windows"><head>
	<meta charset="utf-8" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/sprite.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/global.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/authentication.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/discover/css/discoverBundle.1011901F4CA86E24A67BBE493434931F.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/discover/css/discoverTrendingBundle.694656FF7E5D1643CBE346AFC2461891.min.css" />
    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome-4.0.1/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/additional-styles.css" />


<?php /*?><!--[if lt IE 9]>
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




<link rel="stylesheet" href="<?php echo base_url();?>assets/flexi-slider/flexslider.css" type="text/css" media="screen" />
 
 
 
 
 
    

   <style>
    video.welcomeVideo {
		width: 100%   !important;
		height: auto   !important;
		min-height:100% !important;
		position:absolute;
	}
	
	a.slideshow_link{display:block; position:relative;}
	
	
	/*#sound_buttons{ position:relative; bottom:40px; right:20px; float:right;}*/
	#sound_buttons{ position:absolute; bottom:20px; right:20px;}
 	#mute_button{ background:url(<?php echo base_url();?>assets/images/mute.png);display:none;}
 	#unmute_button{background:url(<?php echo base_url();?>assets/images/unmute.png); }
 	#mute_button, #unmute_button{ background-repeat:no-repeat; background-position:50% center; opacity:1;}
	
	
	
	
.carousel-label { padding: 20px; text-align: left; width: 300px;background: #fff;background: rgba(255, 255, 255, 0.85);position: absolute;left: 0;bottom: 30px; white-space:normal;}
.carousel-label h1 {
	/*font-family: "acta-display",sans-serif;*/
	font-weight: bold;
	line-height: 28px;
	font-size: 28px;
	letter-spacing: .06em;
	color: #000;
	margin:20px 0;
}

	
.carousel-label h2{
	font-family: "museo-slab",serif;
	font-weight: 300;
	font-size: 14px;
	line-height: 16px;
	letter-spacing: .06em;
	color: #000;
}

.carousel-label .read-more {
margin-top: 10px;
display: inline-block;
zoom: 1;
background: #DE3300;
opacity: .9;
color: white;
padding: 11px 19px;
float: right;
margin-right: 0px;
margin-bottom: -4px;
font-weight: 500;
font-family: "Graphik Compact Medium", "Helvetica Neue", Helvetica, Arial, sans-serif;
position: relative;
text-transform: uppercase;
font-size: 12px;
}

.view-slideshow {
width: 100px;
/*height: 46px;*/
text-transform: uppercase;
position: relative;
display: inline-block;
zoom: 1;
white-space: nowrap;
background-color: #DE3300;
color: white;
float: right;
background-image: url("<?php echo base_url();?>assets/images/sprite.svg");
background-position: 104px -908px;
background-repeat: no-repeat;
margin-top: 10px;
margin-right: 0px;
margin-bottom: -4px;
font-family: "Graphik Compact Medium", "Helvetica Neue", Helvetica, Arial, sans-serif;
font-weight: 500;
padding:11px 19px;
}




.frontpage #editorsPicks .isotopeSummary h4{
/*padding-top: 10%;
font-family: "acta-display",sans-serif;
font-weight: 100;
line-height: 44px;*/
/*font-size: 46px;*/
/*color: #fff;
text-shadow: 0px 0px 10px #999;*/
}



.frontpage .isotope li .isotopeSummary .isotopeDetailed>.description {
/*font-family: "museo-slab",serif;
font-weight: 100;*/
/*font-size: 18px;*/
/*line-height: 22px;
letter-spacing: .08em;
color: #fff;
text-shadow: 0px 0px 10px #999;*/
}






.frontpage .horizontalContent {

left:326px;
}

.horizontalContent{
top:80px !important;
bottom:0 !important;	
}



#header-nav-strip #global{

height:80px !important;	
}

.horizontalContent>div{
/*overflow-x:hidden;*/
}

.horizontalContent>div:hover{
/*overflow:auto;*/
}

#global>nav{
left:73px;	
}
</style>
















<style>


.left-rail-topper {
position: absolute;
top: 80px;
left: 0;
z-index: 1;
width: 324px;
border-left: 2px solid #e90606;
}
.tabs, .section-rail-tabs, .rail-tabs, .magazine-region-header {
background: #e3e3e3;
vertical-align: baseline;
text-align: left;
}
.rail-tabs {
height: 38px;
width: 100%;
}

.tabs-inner {
position: relative;
border-bottom: 1px solid #e3e3e3;
}
.tab, .rail-tab {
display: inline-block;
padding: 0 1.25em;
color: #3a3a3a;
vertical-align: baseline;
text-transform: uppercase;
font-size: 0.7875em;
font-weight:bold;
}

.rail-tab {
border-right: 1px solid #dfdfdf;
height: 37px;
line-height: 38px;
}

.active.tab, .active.rail-tab {
height: 38px;
background: white;
}

:hover.rail-tab {
background-color: #f8f8f8;
color: #3a3a3a;
}


















.left-rail{
position:absolute;
right:0;
left:0;
top: 80px !important;
bottom: 0px !important;	
width: 326px;
background-color: white;
overflow: hidden;
}
	
.rail-articles {
background: #fff;
position: relative;
height: 100%;
bottom: 0;
color: #282828;
}

.rail-articles-scroll:hover, .rail-articles-scroll.scroll, .touch .rail-articles-scroll {
overflow-y: auto;
}

.rail-articles-scroll {
overflow-x: hidden;
overflow-y: hidden;
background: white;
position: absolute;
top: 38px;
left: 0;
right: 0;
bottom: 0;
}


.rail-articles-scroll .article-list {
border-left: 2px solid #e90606;
background-color: #f2f2f2;
width: 326px;
overflow: hidden;
}

.rail-article-photo {
margin: 0 3.5% 0 0;
max-width: 65px;
float: left;
vertical-align: middle;
}

.active.rail-article:first-child, .active.rail-article-brand:first-child, .active.rail-article-author:first-child, .active.rail-article-summary:first-child, .active.rail-article-list:first-child, .active.rail-article-magazine:first-child, .active.rail-article-magazine-cover:first-child {
margin-top: 0;
}


.rail-articles-scroll .article-list .rail-article, .rail-articles-scroll .article-list .rail-article-brand, .rail-articles-scroll .article-list .rail-article-author, .rail-articles-scroll .article-list .rail-article-summary, .rail-articles-scroll .article-list .rail-article-list, .rail-articles-scroll .article-list .rail-article-magazine, .rail-articles-scroll .article-list .rail-article-magazine-cover {
padding-right: 20px;
overflow: hidden;
}


.rail-articles-scroll .article-list>* {
background-color: white;
}

.left-rail-row, .rail-article, .rail-article-brand, .rail-article-author, .rail-article-summary, .rail-article-list, .rail-article-magazine, .rail-article-magazine-cover, .rail-article-sponsored {
padding: 0.75em 1.0625em;
background: white;
border-right: 2px solid #f2f2f2;
border-bottom: 1px solid #f2f2f2;
}



.rail-article-title, .rail-article-list-title {
display: block;
margin: 0;
vertical-align: middle;
font-size: 1.1em;
line-height: 1.4;
overflow: hidden;
letter-spacing: 0em;
font-weight:600;
}


.rail-article-title a, .rail-article-list-title a {
color: #3a3a3a;
}


:hover.headline-hover, .article-header a:hover, .rail-article-title a:hover, .rail-article-list-title a:hover, .author-bio a:hover, .divider-articles a:hover, .divider-articles a h4:hover, .divider-taboola a:hover, .divider-taboola a h4:hover, .read-more-divider-hero .article-title:hover{
	color: #e90606;
}




</style> 
  
	<style>


		#top_nav
		{
			width: 27em; /* 1000 */
			font-family: 'Open Sans', sans-serif;
			font-weight: 400;
			position: absolute;
			top: 25%;
			left: 50%;
			margin-left: -30em; /* 30 480 */
		}

			#top_nav > a
			{
				display: none;
			}

			#top_nav li
			{
				position: relative;
			}
				#top_nav li a
				{
					color: #fff;
					display: block;
				}
				#top_nav li a:active
				{
					background-color: #c00 !important;
				}

			#top_nav span:after
			{
				width: 0;
				height: 0;
				border: 0.313em solid transparent; /* 5 */
				border-bottom: none;
				border-top-color: #efa585;
				content: '';
				vertical-align: middle;
				display: inline-block;
				position: relative;
				right: -0.313em; /* 5 */
			}

			/* first level */

			#top_nav > ul
			{
				height: 3.75em; /* 60 */
				/*background-color: #e15a1f;*/
				background-color: #000;
			}
				#top_nav > ul > li
				{
					width: 25%;
					height: 100%;
					float: left;
				}
					#top_nav > ul > li > a
					{
						height: 100%;
						font-size: 1.2em; /* 24 */
						line-height: 2.5em; /* 60 (24) */
						text-align: center;
					}
						#top_nav > ul > li:not( :last-child ) > a
						{
							border-right: 1px solid #cc470d;
						}
						#top_nav > ul > li:hover > a,
						#top_nav > ul:not( :hover ) > li.active > a
						{
							background-color: #cc470d;
						}


				/* second level */

				#top_nav li ul
				{
					background-color: #cc470d;
					display: none;
					position: absolute;
					top: 100%;
				}
					#top_nav li:hover ul
					{
						display: block;
						left: 0;
						right: 0;
					}
						#top_nav li:not( :first-child ):hover ul
						{
							left: -1px;
						}
						#top_nav li ul a
						{
							font-size: 1.25em; /* 20 */
							border-top: 1px solid #e15a1f;
							padding: 0.75em; /* 15 (20) */
						}
							#top_nav li ul li a:hover,
							#top_nav li ul:not( :hover ) li.active a
							{
								background-color: #e15a1f;
							}



		.show_nav{
			display:block !important;
		}
		@media only screen /* 640 */
		{


			#top_nav
			{
				position: relative;
				top: 0px;
				left: -8px;
				margin: 0;
			}
				#top_nav > a
				{
					width: 80px; /* 50 */
					height: 80px; /* 50 */
					text-align: left;
					/*text-indent: -9999px;*/
					/*background-color: #e15a1f;*/
					position: relative;
				}
					#top_nav > a:before,
					#top_nav > a:after
					{
						position: absolute;
						border: 2px solid #fff;
						top: 35%;
						left: 25%;
						right: 25%;
						/*content: '';*/
					}
					#top_nav > a:after
					{
						top: 60%;
					}

				#top_nav:not( :target ) > a:first-of-type,
				#top_nav:target > a:last-of-type
				{
					display: block;
				}


			/* first level */

			#top_nav > ul
			{
				height: auto;
				display: none;
				position: absolute;
				left: -6px;
				right: 0;
				list-style:none;
				top:80px;
			}
				#top_nav:target > ul
				{
					display: block;
				}
				#top_nav > ul > li
				{
					width: 100%;
					float: none;
				}
					#top_nav > ul > li > a
					{
						height: auto;
						text-align: left;
						padding: 0 0.833em; /* 20 (24) */
					}
						#top_nav > ul > li:not( :last-child ) > a
						{
							border-right: none;
							border-bottom: 1px solid #cc470d;
						}


				/* second level */

				#top_nav li ul
				{
					position: static;
					padding: 1.25em; /* 20 */
					padding-top: 0;
				}
		}

	</style>	
    
    
<style>

div.infoplate


{
/*margin-top:-55px;*/	
}




.tileSummary {
position: absolute;
overflow: visible;
margin: 6px 15px 0;
left: 0;
right: 0;
bottom: 55px;
text-align: left;
color: rgba(255,255,255,.75);
padding: 0;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-transition: color .3s,bottom .3s;
-moz-transition: color .3s,bottom .3s;
transition: color .3s,bottom .3s;
}


.tileinfo{ top:-57px;}
.tileinfo h6{  margin-bottom:10px;}
.tileinfo h4 a{ font-weight:bold}
.tiles-container{ margin-left:12px;}
</style>    
    
    

    
    
    
    
    
<title>Nomad Magazine</title>
 

 <script src="<?php echo base_url();?>assets/final-tiles-gallery/js/jquery.finalTilesGallery.js"></script>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('#gallery').finalTilesGallery();
  });
</script>

 
 

  
</head>

<body class="frontpage">


<div id="header-nav-strip" class="empty noStations queue signedOut allowSkips">
	
	<div id="global">
		
<div id="top_nav" role="navigation">
	<a href="#nav" id="show_nav_btn" title="Show navigation"><img src="<?php echo base_url();?>assets/images/smart_nav_icon.png" style="width:80px;"></a>
	<a href="#" title="Hide navigation">Hide navigation</a>
	<ul id="nav_link_list" class="clearfix">
			<?php  $nav_last_key = end(array_keys($categories)); ?>			
            <?php foreach( $categories as $key=>$category ) : ?>
            <li><a href="<?php echo base_url();?>category/<?php echo $category['Cat_Slug'] ?>"><?php echo $category['Cat_Title'] ?></a></li>
            <?php endforeach; ?>
    
	</ul>
</div>


<nav data-tour-id="globalnav" style="top:-80px;">
	<ul>
		<li>
			<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/nomad-new-logo.png" style="width:212px; height:80px;"></a>
		</li>		
	</ul>
</nav>















				
	</div>
	


</div>



	<div id="container">		

		<div id="wrap" class="container" data-uid="76cdd48f-c51f-4066-a408-f9a0fc3d60dc">


<!------------------------------------------------------------------------------------------>
<div id="side-container">

<div class="left-rail-topper">
		<header class="rail-tabs" role="tablist"><div class="tabs-inner">  <a href="#" class="rail-tab active" id="rail" data-sub="" role="tab" aria-controls="rail-articles" data-event="nav-latest" data-silent="">MOST VIEWED </a><a href="#" class="rail-tab" id="popular" data-sub="" role="tab" aria-controls="rail-articles" data-event="nav-popular">Popular</a><a href="#" class="rail-tab" id="videos" data-sub="" role="tab" aria-controls="rail-articles" data-event="nav-video">Latest</a> </div></header>
</div>
    
    
    
    
    
    
    
    
    



 
<div class="left-rail " >
	<section class="rail-articles" id="rail-articles" aria-live="polite" role="region">
						<div class="rail-articles-scroll">

<div class="article-list" id="list-1">
<?php foreach( $most_viewed_list as $most_viewd_post ) : ?>
<?php if($most_viewd_post['Post_Type'] == "gallery"){ $controller_select = "gallery/view/";}else{$controller_select = "article/view/"; } ?>
                
<article class="rail-article format-video has-icon">  <div class="content"><img class="rail-article-photo" src="<?php echo base_url();?>thumbnail-generator/phpThumb.php?src=../<?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $most_viewd_post['Post_Thumbnail'];?>&w=300&h=300&zc=1&hash=47db60e11d23dda928e0a154d488512a">    <h3 class="rail-article-title">      <a class="article-permalink" href="<?php echo base_url();?><?php echo $controller_select;?><?php echo $most_viewd_post['Post_Slug']; ?>" data-event="tile"><?php echo $most_viewd_post["Post_Headline"];?></a></h3><span class="tile-icon time-icons time-icons-video"></span>  </div>  </article>
<?php endforeach; ?>
</div>					
			
<div class="article-list" id="list-2" style="display:none">
</div>            
            
            
		</div>
	</section>
</div>

</div><!--//end sidebar-->

<!------------------------------------------------------------------------------------------>

			



<div class="horizontalContent">
	<div style="overflow-x:hidden; overflow-y:scroll;">



<section id="gallery" class="tiles-container">
    <div class="ftg-items">
    
   
    
<?php foreach( $posts as $post ) : ?>

                <?php
                if($post['Post_Type'] == "gallery"){
					$controller_select = "gallery/view/";
				}else{
					$controller_select = "article/view/";	
				}
				?>



<?php
if($post['Post_Thumbnail_Display'] == "twoxone"){
	$thumb_lib_args = "&w=600&h=300&zc=1";
}else{
	$thumb_lib_args = "&w=600";	
}

?>


 
        <div class="tile">
           <a class="tile-inner" href="<?php echo base_url();?><?php echo $controller_select;?><?php echo $post['Post_Slug']; ?>">
                <img class="item" src="<?php echo base_url();?>thumbnail-generator/phpThumb.php?src=../<?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post['Post_Thumbnail'];?><?php echo $thumb_lib_args; ?>&hash=47db60e11d23dda928e0a154d488512a" />
 		  
          <div class="tileinfo">
          <h6><a style="color:#FFF;" href="#"><?php echo $post['Cat_Title']; ?></a></h6>
		   <h4>
			<a href='<?php echo base_url();?><?php echo $controller_select;?><?php echo $post['Post_Slug']; ?>' data-type="profile" itemprop="name"><?php echo $post["Post_Headline"];?></a>

			</h4> 
            <div class="isotopeDetailed">
			   <p class="description"><?php echo limit_text($post["Post_Byline"],100);?></p>
			   <div class="counters dotted white top"></div>
		   </div>             
              </div>  
               
                
                
                
                




<?php /*?><div class="tile mediaSquare large profile <?php echo $post['Post_Thumbnail_Display']; ?> category-profiles">
		<a href="<?php echo base_url();?><?php echo $controller_select;?><?php echo $post['Post_Slug']; ?>" class="gradient">

                <img class="item" src="<?php echo base_url();?>thumbnail-generator/phpThumb.php?src=../<?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post['Post_Thumbnail'];?><?php echo $thumb_lib_args; ?>&hash=47db60e11d23dda928e0a154d488512a" />
		   				
		</a>
		
		<div class="infoplate isotopeSummary trendingInfo">
		   <h6><a style="color:#FFF;" href="#"><?php echo $post['Cat_Title']; ?></a></h6>
		   
				<h4>

					<a href='<?php echo base_url();?><?php echo $controller_select;?><?php echo $post['Post_Slug']; ?>' data-type="profile" itemprop="name"><?php echo $post["Post_Headline"];?></a>

				</h4>
			
		   
		   <div class="isotopeDetailed">
			   <p class="description"><?php echo limit_text($post["Post_Byline"],100);?></p>
			   <div class="counters dotted white top">
 	

	
	
	
</div>
		   </div>
			
		</div>
		
	</div><!---/////--><?php */?>









                
                
                
                
                
                
                
                
            </a>
        </div>













<?php endforeach; ?>    

       
        
    </div>
</section>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
		<?php /*?><div id="foreground" class="discoverFilter">
			<section class="filterContent loading" id="welcome">
	
	

<div class="flexslider">
          <ul class="slides">

          <?php
          $vid_counter = 1;
		  ?>
          <?php foreach($slideshow_media_files as $slide){ ?>
                 <?php
						
					$target_response = "";
					if($slide['Slide_Link_Type'] == "outside"){$target_response = "_blank";}
				?>         
          
          		<li>
                
                <?php if($slide['Slide_Src_Type'] == "video"){ ?>
                <a class="slideshow_link" href="<?php echo $slide['Slide_Link']; ?>" target="<?php echo $target_response;?>">
  	    	    <video id="<?php echo "slide_vid_".$vid_counter++; ?>" class="welcomeVideo" muted>
					<source src="<?php echo base_url();?>uploads/slideshow-media-files/<?php echo $slide['Slide_Src_File'];?>" type="video/mp4">
                    <source src="<?php echo base_url();?>uploads/slideshow-media-files/<?php echo $slide['Slide_Src_File2'];?>" type="video/webm">
				</video>
                </a>
            
                <div id="sound_buttons">    
    				<button id="mute_button"></button>
       				 <button id="unmute_button"></button>
				</div>
                <?php }else if($slide['Slide_Src_Type'] == "image"){ ?>
               <div class="image_slides" style="background-image:url(<?php echo base_url();?>uploads/slideshow-media-files/<?php echo $slide['Slide_Src_File'];?>); height:100%; background-position:<?php echo $slide['Background_Position'];?> center; position:relative;">
                
                <img src="" style="height:100%;" />
                




<div class="carousel-label">
        <a class="slideshow_link" href="<?php echo $slide['Slide_Link']; ?>" target="<?php echo $target_response;?>" style="display:inline;">
        <h1><?php echo $slide['Slide_Title']; ?></h1>
        <h2><?php echo $slide['Slide_Description']; ?></h2>
        <br>
        <?php if($slide['Slide_Link_Type'] == "article"){ ?>    
        <span class="read-more">Read more</span>
        
        <?php }else if($slide['Slide_Link_Type'] == "image-gallery"){ ?>
        <span  class="view-slideshow">See Photos </span>
        <?php }else if($slide['Slide_Link_Type'] == "video-gallery"){ ?>
        <span  class="view-slideshow">See Video </span>
        <?php }else if($slide['Slide_Link_Type'] == "outside"){?>
        <span class="read-more">Read more</span>
        <?php } ?>
        </a>

</div>


            
                </div>
                


                <?php } ?>
  	    		</li>
  
                <?php } ?>                 	    	    
          </ul>
        </div>	
	
		</section>

			<ul id="editorsPicks" class="isotope" data-use-isotope="true" data-aspect-ratio="1">

	










<?php foreach( $posts as $post ) : ?>

                <?php
                if($post['Post_Type'] == "gallery"){
					$controller_select = "gallery/view/";
				}else{
					$controller_select = "article/view/";	
				}
				?>



<?php
if($post['Post_Thumbnail_Display'] == "twoxone"){
	$thumb_lib_args = "&w=600&h=300&zc=1";
}else{
	$thumb_lib_args = "&w=600";	
}

?>


<li>
	<div class="mediaSquare large profile <?php echo $post['Post_Thumbnail_Display']; ?> category-profiles">
		<a href="<?php echo base_url();?><?php echo $controller_select;?><?php echo $post['Post_Slug']; ?>" class="gradient">

                <img src="<?php echo base_url();?>thumbnail-generator/phpThumb.php?src=../<?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post['Post_Thumbnail'];?><?php echo $thumb_lib_args; ?>&hash=47db60e11d23dda928e0a154d488512a" />
		   				
		</a>
		
		<div class="infoplate isotopeSummary trendingInfo">
		   <h6><a href="#"><?php echo $post['Cat_Title']; ?></a></h6>
		   
				<h4>

					<a href='<?php echo base_url();?><?php echo $controller_select;?><?php echo $post['Post_Slug']; ?>' data-type="profile" itemprop="name"><?php echo $post["Post_Headline"];?></a>

				</h4>
			
		   
		   <div class="isotopeDetailed">
			   <p class="description"><?php echo limit_text($post["Post_Byline"],100);?></p>
			   <div class="counters dotted white top">
 	

	
	
	
</div>
		   </div>
			
		</div>
		
	</div>
</li>

<?php endforeach; ?>





		
	

</ul>
		</div><?php */?>
        
        
        
        
        
        
        
        
        
	</div>
</div>


			
		</div>




    </div>
    
    
    
    
    
    
    
 
   
    
    
    
    
<?php /*?><footer id="footer" class="empty noStations queue signedOut allowSkips">
<nav id="links">
	
Copyright &copy; 2013 Icarus Enterprises, Inc.  <a href="#">About Us</a> | <a href="#">People</a> | <a href="#">Advertise</a> | <a href="#">Contact</a>
    
</nav>

</footer> <?php */?>   
    
    
    
    
    
    
    
		


	



<?php /*?><script src="<?php echo base_url();?>assets/new/common/js/global.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/authentication.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/player.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/discover/js/discoverBundle.46BB9F26DC19CD45FDF4180A47C9C450.min.js"></script>
<script src="<?php echo base_url();?>assets/new/discover/js/discoverTrendingBundle.FE7F1801B5BC50C87D9C0FC34B578167.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/twitter-popup-script.js"></script><?php */?>



<?php /*?>context = {"text":{},"uuid":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","profileId":-1,"loginId":-1,"realtime":{"serverUrl":"/realtime","enableWebSockets":true,"subscriptions":{}},"searchOverlay":{"delay":150,"minimumQueryLength":2,"enterKeySubmits":false},"termsOfService":{"showTOSBOX":false},"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752,"assignedExperiments":null,"hashMashter":"Zjk2MWE1YzQ2ZDA5NzNmZAk0wqMiIzgxw4lFwo0YwonDjwnCuisEw50+YsOpw4B9wo3CsMK1KzbDm8KJw4rDngYEYQjDlAFpL8OrEsOcZ8Omw54GKwnDvmoHwqZ0AR/CnwbCn8KZLiVawoFyccK+A8KRw43DuRFnw4tPwpjCuwjCqivDu2PCqFhfw7p8wrjClcOHwrguAcKnw5ZAUcOjY8KwBcKwZWzDrcOkUMO8wpDCv8OOFw%3D%3D","features":{"isMessagingEnabled":true,"isMessagingToStrangerEnabled":true,"isOfflineMessagingEnabled":true,"isRadioEnabled":true,"isRealtimeEnabled":true,"isSearchEnabled":true,"isMentionProfileEnabled":true,"isPostTaggingEnabled":false,"isLinkScrapeEnabled":true,"isVideosPostEnabled":true,"isVideosExternalPostEnabled":true,"isRenderPresenceEnabled":true,"isPlayerQueueSortable":true,"isPostInEnable":true,"isShareIsEnable":true,"isOffSiteEmbedsEnabled":true,"isMixTagginEnable":true,"isPageviewBeaconV3Enabled":false,"isPlayerBeaconV3Enabled":true,"isWebcamEnabled":true,"isSignUpEnabled":true,"isSignInEnabled":true},"pfc":"splash","discover":{"ajaxMoreUrl":"/ajax/discover/trending","maxChartItems":400,"filters":{"start":0,"max":40}},"selectedGlobalNav":"discover","messaging":{},"playInitialAd":true,"playInitialAdLocationId":null,"ads":{"pixels":[{"subdomain":"mpp2","pixelId":21032201,"targetingDisabled":true}],"msd":"2:2:Qa948i6eGJ3myCUMx4eEYB6szYBTiL4TmOAyBR-o9Gc"},"beaconData":{"dsid":2,"dsv":1,"pggd":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","pageId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","vgd":"390907e3-02eb-48ad-b156-c7780d5cf0aa","visitId":"390907e3-02eb-48ad-b156-c7780d5cf0aa","isnv":1,"lid":-1,"currentUserLoginId":null,"llid":-1,"lastLoginId":null,"lltime":"1970-01-01T00:00:00.000Z","lastLoginUtcDateTime":"1970-01-01T00:00:00.000Z","prid":-1,"currentUserProfileId":null,"lprid":-1,"lastProfileId":null,"tprid":-1,"targetProfileId":null,"pid":"f20eab64-6582-44ca-8879-978437855e38","persistentId":"f20eab64-6582-44ca-8879-978437855e38","abt":0,"abtb":0,"sn":"las1-app005","webServerName":"las1-app005","webServerIPAddressId":"10.144.18.15","pc":"en-US","currentCultureCode":"en-US","pf":"splash","pageFunctionalContextText":"splash","rpf":"","referrerPageFunctionalContextText":"","ll":"34.076212|-118.393564","i":null,"cek":"","currentContentEntityKeyText":null,"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752},"beaconDataV3":{"actionText":"view","directObjectEntityKeyText":"page_splash","pageId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","persistentId":"f20eab64-6582-44ca-8879-978437855e38","previousReferrerPageFunctionalContextText":"","referrerPageFunctionalContextText":"","requestFunctionalContextText":"splash","requestTrackingId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","requestUrl":"http://myspace.com/","visitId":"390907e3-02eb-48ad-b156-c7780d5cf0aa"},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5,"firstAdAfter":900,"subsequentAdsAfter":900},"adPlayer":{"initialVisitAdPlay":{"enabled":true,"locationIds":"162618","loggedOutDefaultLocationIds":"none","loggedOutOtherLocationIds":"none","loggedInDefaultLocationIds":"162799","loggedInOtherLocationIds":"162799","unregisteredDefaultLocationIds":"none","unregisteredOtherLocationIds":"162804","pfcBlackList":"404,unsupportedBrowser","adInterval":86400000},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAdsRatio":{"audio_audio":0.9,"audio_video":0.9,"video_video":1,"video_audio":0.9},"firstAdAfter":900,"subsequentAdsAfter":900},"signedOutPlays":10000,"playVideosLinkedToSongs":false,"messageMaxLength":4000,"emptyProfileImage":"/common/images/user.png","camanjsPath":"https://x.myspacecdn.com/new/stream/js/caman.b46d87ffa3c91c9293ec5aa666d31fd0.js"};<?php */?>


<?php /*?>config = {"urls":{"cdn":"https://x.myspacecdn.com/new","playerSwf":"https://x.myspacecdn.com/new/common/swf/APIPlayer.2.12.323.a534095c60e5332b913d0d76971a00ff.swf?enableBeacons=false","upload":"/upload/","beacon":"/beacon","emptyPlaylistImage":"https://x.myspacecdn.com/new/common/images/mix.png","emptySongImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyAlbumImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyVideoImage":"https://x.myspacecdn.com/new/common/images/video.png","videoSwf":"https://x.myspacecdn.com/new/common/swf/videoPlayer.74bbdd4cf8f3974ed0986ec1ed8fadc0.swf","videoConfig":"videoPlayerConfig.5434f1cdef1e738d03cc05fe25823aba.xml","clipboardSwf":"https://x.myspacecdn.com/new/common/swf/ZeroClipboard.9f4401cdc4405d0730362256b4c04cc0.swf","swfupload":"https://x.myspacecdn.com/new/common/swf/swfupload.3a1c6cc728dddc258091a601f28a9c12.swf","scomm":"https://x.myspacecdn.com/new/common/html/scomm.782b85c048f5996874a47f427bb592ac.html","noRail":"norail="},"thirdParty":{"facebookAppId":"373499472709067"}};<?php */?>



	
	
	
<?php /*?>
  <!-- FlexSlider -->
  <script defer src="<?php echo base_url();?>assets/flexi-slider/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(window).load(function(){
	
	//------------------slideshow carousel-----------
      $('.flexslider').flexslider({
        animation: "slide",
		animationLoop: false,
		controlsContainer: false,
		start: function(slider){
          $('#welcome').removeClass('loading');
		  $('.flex-control-nav').hide();
		  $(".flexslider").animate({opacity: 1}, 700);
        },
		init: function(slider) {$(".flexslider").css("opacity", 0);} 
      });
	//-----------------------------------------------	  



	//----------------OTHER landing page tweaks-------------------------------
		$('#slide_vid_1')[0].play();  	//Autoplay video 
		$('a.slideshow_link').css('height', $('#welcome').height()+'px');
		$('.image_slides').css('height', $('#welcome').height()+'px');
		$(window).resize(function(){
			$('a.slideshow_link').css('height', $('#welcome').height()+'px');
			$('.image_slides').css('height', $('#welcome').height()+'px');
		});
	//-----------------------------------------------




    $('#background video').on('loadeddata', function() {
       //$(this).prop('muted', false);
    });	
	$('#mute_button').on('click', function() {
       $("#slide_vid_1").prop('muted', true);
	   $(this).css("display", "none");
	   $("#unmute_button").css("display", "block");
    });
	$('#unmute_button').on('click', function() {
       $("#slide_vid_1").prop('muted', false);
	   $(this).css("display", "none");
	   $("#mute_button").css("display", "block");
    });
		
    
	


	
	});
  </script><?php */?>
  
  <script>
    $(document).ready(function(){
		$('#top_nav a#show_nav_btn').on('click', function() {
			$("#nav_link_list").toggleClass("show_nav");
    	});
	
	});
	</script>


</body>
</html>

