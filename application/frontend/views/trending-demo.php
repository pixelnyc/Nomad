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
    
    
    
    
    

    
    
    
    
    
<title>Nomad Magazine</title>
 

 

 
 

  
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
<?php /*?>		
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
		
<?php */?>		

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
<?php /*?><?php foreach( $most_viewed_list as $most_viewd_post ) : ?>
<article class="rail-article format-video has-icon">  <div class="content"><img class="rail-article-photo" src="<?php echo base_url();?>thumbnail-generator/phpThumb.php?src=../<?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $most_viewd_post['Post_Thumbnail'];?>&w=300&h=300&zc=1&hash=47db60e11d23dda928e0a154d488512a">    <h3 class="rail-article-title">      <a class="article-permalink" href="#" data-event="tile"><?php echo $most_viewd_post["Post_Headline"];?></a></h3><span class="tile-icon time-icons time-icons-video"></span>  </div>  </article>
<?php endforeach; ?><?php */?>
</div>            
            
            
		</div>
	</section>
</div>

</div><!--//end sidebar-->

<!------------------------------------------------------------------------------------------>



<div class="horizontalContent">
	<div>
		<div id="foreground" class="discoverFilter">
			<section class="filterContent loading" id="welcome">
	
	

<div class="flexslider">
          <ul class="slides">
<?php /*?>          <li>
          <script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/12183845/Homepage_Carousel_Static', [1200, 1200], 'div-gpt-ad-1392422074161-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
          </li><?php */?>
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











<?php  /*-------------------------------------------------------------------------------------------------------*/ ?>
		
	

</ul>
		</div>
	</div>
</div>


			
		</div>




    </div>
    
    
    
    
    
    
    
 
   
    
    
    
    
<?php /*?><footer id="footer" class="empty noStations queue signedOut allowSkips">
<nav id="links">
	
Copyright &copy; 2013 Icarus Enterprises, Inc.  <a href="#">About Us</a> | <a href="#">People</a> | <a href="#">Advertise</a> | <a href="#">Contact</a>
    
</nav>

</footer> <?php */?>   
    
    
    
    
    
    
    
		


	


	<script>templates = {"common/views/footer/_queueItem":"<%\n\tvar id = queueItem.id ? ' id=\"' + queueItem.id + '\"' : '';\n\n\tvar classes = '';\n\n\tif (queueItem.mediaType == 'video') \n\t\tclasses += 'video ';\n\n\tif (queueItem.error)\n\t\tclasses += 'error ';\n\n\tif (queueItem.selected) {\n\t\tclasses += 'selected ';\n\t\tdelete queueItem.selected;\n\t}\n\n\tif (queueItem.classes)\n\t\tclasses += (queueItem.classes.trim() + ' ');\n\t\t\n\tclasses = classes.length ? ' class=\"' + classes.trim() + '\"' : '';\n\n\tvar draggable = queueItem.mediaType && queueItem.isLiveStream != true && queueItem.private != true ? ' draggable=\"true\"' : '';\n%><% if (queueItem.isAvailable != false || queueItem.isFreeTheTrackSong) { %><li<%- id %><%- classes %><%- draggable %>>\n\t<% if (queueItem.iconClass) { %>\n\t\t<i class=\"<%- queueItem.iconClass %>\"></i>\n\t<% } else { %>\n\t\t<img src=\"<%- queueItem.imageUrl %>\">\n\t<% } %>\n\t<div class=\"info\">\n\t\t<% if (queueItem.disableLinks) { %>\n\t\t\t<h6><span title=\"<%= queueItem.title %>\"><%= queueItem.title %></span></h6>\n\t\t\t<span title=\"<%= queueItem.type == 'radio' ? 'Radio' : (queueItem.artistName || queueItem.name) %>\"><%= queueItem.type == 'radio' ? 'Radio' : (queueItem.artistName || queueItem.name) %></span>\n\t\t<% } else { %>\n\t\t\t<h6><a href=\"<%- queueItem.url || queueItem.detailUrl %>\" title=\"<%= queueItem.title %>\"><%= queueItem.title %></a></h6>\n\t\t\t<a href=\"<%- queueItem.artistUrl %>\" title=\"<%= queueItem.artistName || queueItem.name %>\"><%= queueItem.artistName || queueItem.name %></a>\n\t\t<% } %>\n\t</div>\n\t<% if (!queueItem.disableControls) { %>\n\t\t<div class=\"controls\">\n\t\t\t<% if (queueItem.isLiveStream) { %>\n\t\t\t\t<button class=\"playBtn play_25 video\" data-type=\"video\" <%- formatter.attributify(queueItem) %>></button>\n\t\t\t<% } else { %>\n\t\t\t\t<%- play(queueItem.type == 'radio' ? 'radio' : queueItem.mediaType == 'video' ? 'video' : 'song', queueItem) %>\n\t\t\t<% } %>\n\n\t        <% if (queueItem.mediaType === 'video') { %>\n\t            <button class=\"expand expandOverlayBtn\" data-action=\"expand\"></button>\n\t        <% } %>\n\n\t        <% if (queueItem.mediaType && !queueItem.private) { %>\n\t        \t<div class=\"connectButton tooltips<%- queueItem.isConnected ? ' connected' : '' %>\" data-is-connected=\"<%- !!queueItem.isConnected %>\" data-id=\"<%- queueItem.mediaId %>\" data-entity-key=\"<%- queueItem.entityKey %>\" data-uid=\"<%- queueItem.uid %>\" data-radio-station-entity-key=\"<%- queueItem.radioStationEntityKey %>\" data-title=\"<%= queueItem.title %>\" data-artist-id=\"<%- queueItem.artistId %>\" data-area=\"<%- queueItem.mediaType == 'video' ? 'video' : 'music' %>\" data-type=\"<%- queueItem.mediaType == 'video' ? 'video' : 'song' %>\" data-media-release-id=\"<%- queueItem.mediaReleaseId %>\" data-image-url=\"<%- queueItem.imageUrl %>\" data-owner=\"<%= queueItem.artistName %>\" data-release-entity-key=\"<%= (queueItem.mediaType == 'video' ? 'videorelease_' : 'songrelease_')  + queueItem.mediaReleaseId %>\" data-is-live-stream=\"<%= (queueItem.mediaType == 'video' && queueItem.isLiveStream) ? 'true' : 'false' %>\" data-user-entity-key=\"<%- 'profile_' + queueItem.artistId %>\"> <span></span><span></span></div>\n\t        <% } %>\n\n\t\t\t<button class=\"noStyle remove x_18_border\" data-action=\"remove\"></button>\n\t\t</div>\n\t<% } %>\n\t<% if (queueItem.error) { %>\n\t\t<div class=\"error\">\n\t\t\t<i class=\"error_24\"></i>\n\t\t\t<span>Error Playing</span>\n\t\t</div>\n\t<% } %>\n</li><% } %>","areas/mixes/views/dialogs/addItemsToMix":"<form id=\"addItemsToMix\" class=\"lightbox\">\n\t<h1>Save your queue</h1>\n\n\t<div class=\"createNew\">\n\t\t<p>Create a new mix</p>\n\t\t<input type=\"text\" />\n\t\t<button type=\"submit\" class=\"primary\">Create</button>\n\t</div>\n\n\t<div class=\"or\">\n\t\t<hr><span>OR</span><hr>\n\t</div>\n\n\t<div class=\"addToExisting\">\n\t\t<p>Add to an existing mix</p>\n\t\t<ul></ul>\n\t</div>\n</form>\n","areas/mixes/views/dialogs/mixForms":"<% var mode;\nif (command === 'mix.create') {\nmode = 'create';\n} else {\nmode = 'add';\n} %>\n\n<form id=\"mixForm\" class=\"mixDialog lightbox\" >\n\t<input type=\"hidden\" name=\"objectVersion\" id=\"objectVersion\" value=\"<%= mixtape.objectVersion || '' %>\" />\n\t<input type=\"hidden\" name=\"playlistId\" id=\"playlistId\" value=\"<%= mixtape.playlistId || '' %>\"  />\n\t<input type=\"hidden\" name=\"mediaId\" id=\"mediaId\" value=\"<%= mixtape.mediaId || '' %>\" />\n\t<input type=\"hidden\" name=\"mediaType\" id=\"mediaType\" value=\"<%= mixtape.mediaType || '' %>\" />\n\t<input type=\"hidden\" name=\"releaseId\" id=\"releaseId\" value=\"<%= mixtape.releaseId || '' %>\" />\n\t<section id=\"createForm\" class=\"<%- mode == 'add' ? ' hide' : ''  %>\">\n\t\t<header>\n\t\t\t<h1 class=\"create\">Create Mix</h1>\n\t\t</header>\n\t\t<div>\n\t\t\t<div class=\"mixImage\">\n\t\t\t\t<div id=\"mixtapeImageContainer\" data-tip-text=\"The image was attached\">\n\t\t\t\t\t<div class=\"tipHolder\"></div>\n\t\t\t\t\t<img class=\"mixtapeImage\" alt=\"\" src=\"<%- mixtape.image ? mixtape.image : mixtape.emptyPlaylistImage %>\" />\n\t\t\t\t</div>\n\t\t\t\t<div id=\"mixHTMLUploader\">\n\t\t\t\t\t<input name=\"mixCoverFile\" id=\"mixCoverFile\" type=\"file\" size=\"8\" accept=\"image/*\"/>\n\t\t\t\t\t<button>Choose Image</button>\n\t\t\t\t</div>\n\t\t\t\t<p>20MB max, 1024x768 min</p>\n\t\t\t</div>\n\t\t\t<div class=\"mixInfo\">\n\t\t\t\t<div class=\"title\">\n\t\t\t\t\t<label for=\"mixTitle\">name your mix</label>\n\t\t\t\t\t<div class=\"tipHolder\"></div>\n\t\t\t\t\t<input type=\"text\" id=\"mixTitle\" name=\"title\" placeholder=\"Give your mix a name\" maxlength=\"60\" size=40 value=\"<%= mixtape.title || '' %>\" />\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"description\">\n\t\t\t\t\t<label for=\"mixDescription\">description</label>\n\t\t\t\t\t<span class=\"charCount\" data-len=\"-1\">0/600</span>\n\t\t\t\t\t<% if(context.features.isMixTagginEnable) {%>\n\t\t\t\t\t\t<div placeholder=\"Tell us about your mix\" id=\"mixDescription\" name=\"description\" contenteditable=\"true\" class=\"textarea\"><%= mixtape.description || '' %></div>\n\t\t\t\t\t<%}else{%>\n\t\t\t\t\t\t<textarea id=\"mixDescription\" name=\"description\" placeholder=\"Tell us about your mix\" size=\"40\"><%= mixtape.description || '' %></textarea>\n\t\t\t\t\t<%}%>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"privacySetting\">\n\t\t\t\t\t<input type=\"checkbox\" id=\"privacyCheck\" name=\"privacy\" value=\"1\" <% if (mixtape.visibility === 'Private'){ %>checked=\"checked\"<% } %> />\n\t\t\t\t\t<label for=\"privacyCheck\">Hide this mix from my public profile</label>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\n\t\t<footer>\n\t\t\t<% if (mode == 'add') { %>\n\t\t\t<button class=\"myMixes\">My Mixes</button>\n\t\t\t<% } %>\n\t\t\t<a class=\"cancel\">Cancel</a>\n\t\t\t<button class=\"create primary\">Create Mix</button>\n\t\t</footer>\n\t</section>\n\t<% if (mode === 'add') { %>\n\t\t<section id=\"addToSection\">\n\t\t\t<header>\n\t\t\t\t<h1>Add To Mix</h1>\n\t\t\t</header>\n\n\t\t\t<div>\n\t\t\t\t<div class=\"mixImage\">\n\t\t\t\t\t<div id=\"selectedMixImage\">\n\t\t\t\t\t\t<img class=\"hide\" alt=\"\" src=\"<%= mixtape.image ? mixtape.image : mixtape.emptyPlaylistImage %>\" />\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"mixtapeCollections\">\n\t\t\t\t\t<label for=\"myMixtapes\">Select a mix:</label>\n\t\t\t\t\t<select id=\"myMixtapes\" name=\"myMixtapes\"></select>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<footer>\n\t\t\t\t<button class=\"createMixAndAdd\">Create New Mix</button>\n\t\t\t\t<a class=\"cancel\">Cancel</a>\n\t\t\t\t<button class=\"save primary\">Add</button>\n\t\t\t</footer>\n\t\t</section>\n\t<% } %>\n</form>\n\n","areas/music/views/radioDialog":"<form id=\"radioDialog\" class=\"lightbox\">\n\t<header>\n\t\t<h1>Search radio</h1>\n\t\t<div>\n\t\t\t<span>Not sure what to play?</span>\n\t\t\t<a href=\"/discover/radio\">Why not browse our radio stations »</a>\n\t\t</div>\n\t</header>\n\n\t<div class=\"search\">\n\t\t<h3>Search for a genre</h3>\n\t\t<input type=\"text\" />\n\t\t<div>\n\t\t\t<ul class=\"genres\"></ul>\n\t\t\t<ul class=\"results\"></ul>\n\t\t</div>\n\t</div>\n</form>\n","areas/music/views/media/_songSquare":"<%\n\tvar songLink = '#',\n\t\ttoolTipAttribute = \"\";\n\n    if(songSquare.songUrl){\n\t\tsongLink = songSquare.songUrl;\n\t} else {\n\t\tsongLink = songSquare.song.url;\n\t}\n\n    if(songSquare.size == 'small' || songSquare.size == 'medium'){\n\t\ttoolTipAttribute = \"rel='tooltip'\" ;\n\t}\n\n\tvar classes = \"song mediaSquare\";\n\tif(songSquare.size) {\n\t\tclasses += \" \" + songSquare.size;\n\t}\n\tif(songSquare.inline){\n\t\tclasses += \" inline\";\n\t}\n\n%>\n\n<div class=\"<%- classes %>\" data-mediaid=\"<%- songSquare.song.songId %>\" data-mediatype=\"Audio\" draggable=\"true\">\n    <a href=\"<%- songLink %>\" data-original-title=\"<%= songSquare.song.title %> - <%= songSquare.song.artistName %>\"  <%= toolTipAttribute %> >\n        <%- play('song', songSquare.song) %>\n        <% if (songSquare.size != 'medium' && songSquare.size != 'small' && typeof(connect) != 'undefined') { %>\n        <%- connect('song', songSquare.song, songSquare.connections || locals.connections) %>\n        <% } %>\n        <img src=\"<%- songSquare.song.imageUrl %>\" />\n        <% if (songSquare.song.isExplicit && songSquare.size !== 'small') { %>\n        <span class=\"explicit\">EXPLICIT</span>\n        <% } %>\n    </a>\n\n    <% if(!songSquare.hideMetaInfo){%>\n        <div class=\"<%- songSquare.metaInfoClass %>\">\n            <h6>\n                <a href=\"<%- songLink %>\"><%= songSquare.song.title %></a>\n                <% if(songSquare.song.isExplicit && songSquare.size === 'small') { %><i class=\"explicit_10\">Explicit</i> <% } %>\n            </h6>\n            <%- songSquare.song.artistDisplayText %>\n        </div>\n    <%}%>\n</div>","areas/music/views/media/_albumSquare":"<%\n\tvar albumLink = '#', artistLink = '#', toolTipAttribute = \"\", albumImageUrl = albumSquare.album.imageUrl;\n\n    if(albumSquare.albumUrl){\n        albumLink = albumSquare.albumUrl;\n    } else {\n\t\talbumLink = albumSquare.album.albumUrl;\n\t}\n\n    if(albumSquare.artistLink){\n        artistLink =albumSquare.artistLink\n    }else if(albumSquare.album.artistId && typeof(links) != 'undefined') {\n\t\tartistLink = albumSquare.album.artistUrl;\n\t}\n\n\tif(albumSquare.size == 'small' || albumSquare.size == 'medium'){\n\t    toolTipAttribute = \"rel='tooltip'\";\n        if(!albumSquare.showMetaInfo) albumSquare.showMetaInfo = \"none\";\n\t}\n\n\tvar classes = \"album mediaSquare\";\n\tif(albumSquare.size) {\n\t\tclasses += \" \" + albumSquare.size;\n\t}\n\tif(albumSquare.inline){\n\t\tclasses += \" inline\";\n\t}\n\n    if(!albumSquare.notUseCommonHelper && (albumSquare.size == 'small' || albumSquare.size == 'medium'))\n    {\n        albumImageUrl  = common.helpers.albumImage(albumSquare.album, '70x70');\n    }\n%>\n<div class=\"<%- classes %>\" data-mediaid=\"<%- albumSquare.album.albumId %>\"  data-entitykey=\"<%- albumSquare.album.entityKey%>\" data-radiostationentitykey=\"<%- albumSquare.album.radioStationEntityKey%>\"  data-mediatype=\"Album\" itemscope itemtype=\"http://schema.org/MusicAlbum\" draggable=\"true\">\n\t<meta itemprop=\"url\" content =\"<%= albumLink %>\">\n\t<a href=\"<%= albumLink %>\"  data-original-title=\"<%= albumSquare.album.title %> - <%= albumSquare.album.artistName %>\" <%= toolTipAttribute %>>\n\t\t<%- play('album', albumSquare.album) %>\n\t\t<% if (albumSquare.size != 'medium' && albumSquare.size != 'small' && typeof(connect) != 'undefined') { %>\n\t\t\t<%- connect('album', albumSquare.album, albumSquare.connections || locals.connections) %>\n\t\t<% } %>\n\n\n\t\t<img itemprop=\"image\" src=\"<%-  albumImageUrl || 'http://cms.myspacecdn.com/cms/Music%20Vertical/Common/Images/default_large.jpg' %>\" />\n\t\t<% if (albumSquare.album.isExplicit && albumSquare.size !== 'small') { %>\n\t\t\t<span class=\"explicit\">EXPLICIT</span>\n\t\t<% } %>\n\t</a>\n\n\t<!-- Album Meta Info - Regular -->\n\t<% if(!(albumSquare.showMetaInfo && (albumSquare.showMetaInfo == \"none\" || albumSquare.showMetaInfo == \"extended\"))) { %>\n\t\t<div class=\"<%- albumSquare.metaInfoClass %>\">\n\t\t\t<h6>\n                <a href=\"<%= albumLink %>\" itemprop=\"name\"><%= albumSquare.album.title %></a>\n                <% if (albumSquare.album.isExplicit && albumSquare.size === 'small') { %><i class=\"explicit_10\">Explicit</i> <% } %>\n            </h6>\n\t\t\t<% if (albumSquare.album.artistId) { %>\n\t\t\t\t<a href=\"<%= artistLink %>\" itemprop=\"byArtist\"><%= albumSquare.album.artistName %></a>\n\t\t\t<% } else { %>\n\t\t\t\t<%- albumSquare.album.artistId %>\n\t\t\t<% } %>\n\t\t</div>\n\t<% } %>\n\n</div>\n\n<!-- Album Meta Info - Extended Info -->\n<% if(albumSquare.showMetaInfo && albumSquare.showMetaInfo == \"extended\") { %>\n\t<div class=\"extended\">\n\t\t<dl>\n\t\t\t<dt>Released</dt>\n\t\t\t<dd><%- formatter.date(albumSquare.album.releaseDate, \"mmm dd, yyyy\") %></dd>\n\n\t\t\t<dt>Recorded</dt>\n\t\t\t<dd><%- formatter.date(albumSquare.album.releaseDate, \"yyyy\") %></dd>\n\n\t\t\t<% if(albumSquare.album.genreName && albumSquare.album.genreName.length > 0) { %>\n\t\t\t\t<dt>Genre</dt>\n\t\t\t\t<dd><%= albumSquare.album.genreName %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.displayLabel && albumSquare.album.displayLabel.length > 0) { %>\n\t\t\t\t<dt>Label</dt>\n\t\t\t\t<dd><%= albumSquare.album.displayLabel %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.tones && albumSquare.album.tones.length > 0) { %>\n\t\t\t\t<dt>Moods</dt>\n\t\t\t\t<dd><%- albumSquare.album.tones.join(\", \") %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.styles && albumSquare.album.styles.length > 0) { %>\n\t\t\t\t<dt>Styles</dt>\n\t\t\t\t<dd><%- albumSquare.album.styles.join(\", \") %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.themes && albumSquare.album.themes.length > 0) { %>\n\t\t\t\t<dt>Themes</dt>\n\t\t\t\t<dd><%- albumSquare.album.themes.join(\", \") %></dd>\n\t\t\t<% } %>\n\t\t</dl>\n\t</div>\n<% } %>","common/views/generic/postcontrol":"<div class=\"postControl\">\n\t<%if((context.features.isMentionProfileEnabled || locals.enableMentions) && !locals.disableMentions) { %>\n\t\t<div placeholder=\"<%= locals.placeholder || \"\" %>\" <%- locals.id ? \"id='\" + locals.id + \"'\" : '' %> <%= locals.name ? \"name='\" + locals.name + \"'\" : '' %> <%- locals.readonly ? \"readonly='readonly'\" : \"\" %> contenteditable=\"true\" class=\"textarea\"><%= locals.text || \"\"%></div>\n\t<% } else { %>\n\t\t<textarea placeholder=\"<%= locals.placeholder || \"\" %>\" <%- locals.id ? \"id='\" + locals.id + \"'\" : '' %> <%= locals.name ? \"name='\" + locals.name + \"'\" : '' %> <%- locals.readonly ? \"readonly='readonly'\" : \"\" %> ><%= locals.text || \"\"%></textarea>\n\t<% } %>\n</div>\n","common/views/generic/superpost/_song":"<% locals.forEach(function(song) { %>\n<li data-id='<%= song.songId %>' data-entity-key='<%= song.entityKey %>'>\n    <%if(song.imageUrl) { %>\n\t\t<img src='<%= song.imageUrl %>' /> \n\t<% } %>\n\t<div <%= song.nowPlaying ? \"class='currentSong'\" : \"\" %>>\n\t\t<%if(song.nowPlaying){%><strong>Current Song</strong><%}%> \n\t\t<h6><%= song.title %></h6><p><%= song.artistName %></p>\n\t</div>\n</li>\n<%})%>\n","common/views/generic/superpost/_location":"<% locals.forEach(function(item) { %>\n<li data-entity-key='<%= item.entityKey %>' data-id='<%= item.locationId %>'>\n    <%= item.locationNameWithHierarchy %>\n    </li>\n<% }) %>\n","common/views/generic/superpost/_share":"<% if (locals.imageUrl) { %>\n\t<%if (locals.inline) { %>\n\t<div class=\"imageFrame<%- locals.imageUrl.indexOf(',') > -1 ? ' collage' : '' %>\">\n\t\t<% locals.imageUrl.split(',').forEach(function(image){ %>\n\t\t<img src='<%= image %>' />\n\t\t<% }); %>\n\t</div>\n\t<% } else {%>\n\t<img src='<%= locals.imageUrl %>' />\n\t<% } %>\n<% } %>\n<div>\n\t<%if (locals.inline) { %>\n\t<p>\n\t\t<strong><%= locals.title %></strong><%if (locals.owner) { %> - <%= locals.owner %> <% } %>\n\t\t<i class=\"x_14\"></i>\n\t</p>\n\t<% } else { %>\n\t<h6><%= locals.title %></h6>\n\t<%if (locals.owner) { %>\n\t\t<p><%= locals.owner %></p>\n\t<% } %>\n\t<% } %>\n\t<i class='x_14'>remove</i>\n</div>\n","common/views/generic/superpost/_linkpreview":"<% var hasImage = locals.images && locals.images.length > 0 || 0;%>\n<div class=\"linkPreviewer processing\">\n\t<% if(hasImage) { %>\n\t<div class=\"loading white linkImage\">\n\t</div>\n\t<%}%>\n\t<div class=\"linkDetails\">\n\t\t<p contenteditable=\"true\" class=\"linkTitle\"><%= locals.title || \"\" %></p>\n\t\t<p title=\"<%= locals.url %>\" class=\"linkUrl\"><%= locals.hostName || \"\" %></p>\n\t\t<% if(hasImage) { %>\n\t\t<p class=\"linkThumbnailOption\">\n\t\t\t<i class=\"arrow_left_16_dark disabled\"></i>\n\t\t\t<i class=\"arrow_right_16_dark\"></i>\n\t\t\t<span class=\"preview_count\"></span>\n\t\t\t<span>Choose a Thumbnail</span>\n\t\t</p>\n\t\t<p class=\"linkNoThumbnail\">\n\t\t\t<label>\n\t\t\t\t<input type=\"checkbox\" /> <span></span>No Thumbnail\n\t\t\t</label>\n\t\t</p>\n\t\t<% } %>\n\t</div>\n</div>\n","common/views/generic/superpost/_mention":"<% var isPublicProfileList = false; %>\n<% locals.forEach(function(mention, index) { %>\n<% if(!mention.connected && !isPublicProfileList) {\n\t\tisPublicProfileList = true; %>\n\t<% if (index !== 0) { %>\n\t<li class=\"publicProfile ignore\">Also on Myspace </li>\n\t<% } %>\n<%}%>\t\t\n\t\t\n<li data-id=\"<%= mention.profileId %>\" <%-formatter.attributify(mention)%> <%- index == 0 ? 'class=\"selected\"' : '' %>>\n    <%if(mention.profileImage) { %>\n\t\t<img src=\"<%= mention.profileImage %>\" /> \n\t<% } %>\n\t<div>\n\t\t<p><strong><%= mention.fullName %></strong></p> \n\t\t<p class=\"username\"><%= mention.username %></p>\n\t</div>\n</li>\n<%})%>\n","common/views/_linkEmbedDialog":"<% var coverImages = options.imageUrl.split(','); %>\n<div>\n\t<div class=\"main\">\n\t\t<a class=\"cover<%- coverImages.length > 1 ? ' collage' : '' %>\" href=\"<%- options.url %>\">\n\t\t\t<% coverImages.forEach(function (imageUrl) { %>\n\t\t\t\t<img src=\"<%- imageUrl %>\">\n\t\t\t<% }); %>\n\t\t</a>\n\t\t<div class=\"info\">\n\t\t\t<h6><a href=\"<%- options.url %>\"><%= options.title %></a></h6>\n\t\t\t<a href=\"<%- options.artistUrl %>\"><%= options.artistName %></a>\n\t\t</div>\n\t</div>\n\t<div class=\"fields\">\n\t\t<div class=\"link\">\n\t\t\t<div class=\"field\">\n\t\t\t\t<i class=\"link_40_light\"></i>\n\t\t\t\t<i class=\"link_40_dark copied\"></i>\n\t\t\t\t<input type=\"text\" value=\"<%- options.link %>\" readonly=\"true\">\n\t\t\t</div>\n\t\t</div>\n\t\t<% if (options.iframe) { %>\n\t\t\t<div class=\"embed<%- options.resizable ? ' resizable' : ''%>\">\n\t\t\t\t<div class=\"field\">\n\t\t\t\t\t<i class=\"embed_40_light\"></i>\n\t\t\t\t\t<i class=\"embed_40_dark copied\"></i>\n\t\t\t\t\t<input type=\"text\" value=\"<%= options.iframe %>\" readonly=\"true\">\n\t\t\t\t</div>\n\t\t\t\t<% if (options.resizable) { %>\n\t\t\t\t\t<div class=\"resizer\">\n\t\t\t\t\t\t<div class=\"width\">W:<input type=\"number\" pattern=\"[0-9]*\" min=\"160\" max=\"960\" maxlength=\"3\" value=\"<%- options.size.split('x')[0] %>\"></div>\n\t\t\t\t\t\t<div class=\"height\">H:<input type=\"number\" pattern=\"[0-9]*\" min=\"90\" max=\"540\" maxlength=\"3\" value=\"<%- options.size.split('x')[1] %>\"></div>\n\t\t\t\t\t</div>\n\t\t\t\t<% } %>\n\t\t\t</div>\n\t\t<% } %>\n\t\t<% if (options.miniplayer) { %>\n\t\t\t<div class=\"miniplayer\">\n\t\t\t\t<div class=\"field\">\n\t\t\t\t\t<i class=\"embed_40_light\"></i>\n\t\t\t\t\t<i class=\"embed_40_dark copied\"></i>\n\t\t\t\t\t<input type=\"text\" value=\"<%= options.miniplayer %>\" readonly=\"true\">\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t<% } %>\n\t</div>\n\t<% if (options.iframe && options.sizeOptions) { %>\n\t\t<form class=\"size\">\n\t\t\t<ul>\n\t\t\t\t<% if (options.sizeOptions['300x90']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x90\" name=\"size\" type=\"radio\" value=\"300x90\" checked><label for=\"layout_300x90\"><div><span>300 x 90</span><i class=\"layout-300x90\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['300x423']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x423\" name=\"size\" type=\"radio\" value=\"300x423\"><label for=\"layout_300x423\"><div><span>300 x 423</span><i class=\"layout-300x423\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['300x600']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x600\" name=\"size\" type=\"radio\" value=\"300x600\"><label for=\"layout_300x600\"><div><span>300 x 600</span><i class=\"layout-300x600\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['600x300']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_600x300\" name=\"size\" type=\"radio\" value=\"600x300\"><label for=\"layout_600x300\"><div><span>600 x 300</span><i class=\"layout-600x300\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } %>\n\t\t\t</ul>\n\t\t</form>\n\t<% } %>\n</div>","areas/videos/views/shared/_videoHead":"<div>\n    <h2><%= video.title %></h2>\n    <p><a href=\"<%= video.artistUrl %>\"><%= video.artistName %></a></p>\n    <p><i class=\"plays_12\">Plays</i> <span class=\"stats\"><%= (video.stats && video.stats.AllTime) ? video.stats.AllTime : 1 %></span> plays</p>\n</div>\n<div>\n    <%- video.description %>\n</div>","areas/mixes/views/shared/_mixHead":"<% var imageUrl = mix.imageUrl || ''; %>\n<div class=\"mixtape mediaSquare medium<%- imageUrl.split(',').length > 1 ? ' collage' : '' %><%- mix.mediaCount > 0 ? '' : ' noMedia' %>\">\n\t<a href=\"<%= mix.url || '#' %>\">\n\t\t<%- play('mixtape', mix) %>\n\t\t<%  imageUrl && imageUrl.split(',').forEach(function(image) { %>\n\t\t\t<img src=\"<%- image %>\" />\n\t\t<% }) %>\n\t</a>\n\t<div>\n\t\t<h6> <a href=\"<%= mix.url %>\"><%= mix.title %></a></h6>\n\t\t<a href=\"<%= ('/' + mix.username) %>\"><%= mix.owner %></a>\n\t</div>\n</div>\n","areas/photos/views/_photoRightRailHead":"<div>\n    <h2>Photo from <a href=\"<%= photo.mixDetailUrl %>\"><%- photo.mixTitle %></a></h2>\n    <p>by <a href=\"/<%= photo.ownerUserName %>\"><%- photo.ownerFullName %></a></p>\n</div>\n\n<div class=\"postText\">\n\t<%if(photo.captionWithLinks) { %>\n\t\t<%- photo.captionWithLinks %>\n\t<% } else { %>\n\t\t<%= photo.caption || '' %>\n\t<% } %>\n</div>\n<div><a>Show more</a></div>\n","areas/discover/views/shared/_articleHead":"<div>\n\t<h2><a href=\"<%- article.blogDetailUrl %>\"><%- article.title %></a></h2>\n\t<p><a href=\"<%- article.blogDetailUrl %>\"><%- article.summary %></a></p>\n</div>\n","areas/misc/views/shared/_linksRightRailHead":"<div>\n\t<h2><a href=\"<%= link.shortUrl %>\"><%= link.title %></a></h2>\n\t<p><a href=\"<%= link.shortUrl %>\"><%= link.hostName || link.linkUrl %></a></p>\n</div>\n","areas/misc/views/shared/sharePrompt":"<article id=\"sharePrompt\" class=\"dialog\">\n\t<i class=\"close x_14\">Close</i>\n\t<header>\n     \t<h2 class=\"promptText\">Share this song</h2>\n \t</header>\n\t<section>\n\t\t<p>\n\t\t\t<a href='#' class=\"msSignIn\">Sign in</a> to share on Myspace. <br />\n\t\t\tYou can also share on Facebook and Twitter.\n\t\t</p>\n\n\t\t<div>\n\t\t\t<div class=\"thirdParty\">\n\t\t\t\t<button class=\"facebook\" data-provider=\"facebook\"><i class=\"facebook_40\"></i><span>Facebook</span></button>\n\t\t\t\t<button class=\"twitter\" data-provider=\"twitter\"><i class=\"twitter_40\"></i><span>Twitter</span></button>\n\t\t\t</div>\n\t\t</div>\n\t</section>\n</article>","common/views/generic/photos/_photoCropper":"<div id=\"photoCropper\" class=\"dialog\">\n    <div class=\"header dotted\">\n        <h2>Crop Your Photo</h2>\n        <i class=\"x_18_border\"></i>\n    </div>\n\n    <div class=\"content\">\n        <p>To crop your photo, drag, resize, and adjust the position of the box.</p>\n        <div class=\"cropContainer\"></div>\n    </div>\n\n    <div class=\"footer\">\n        <button class=\"cancel\">Cancel</button>\n        <button class=\"primary save\">Save</button>\n    </div>\n</div>","common/views/footer/messages/_message":"<div class=\"messageGroup <%- locals.isSelf ? 'self' : '' %>\" data-influencer=\"<%- locals.profileId %>\">\n\t<a <% if(locals.username) { %>href=\"/<%- locals.username %>\"<%}%> class=\"sender\" data-show-presence=\"true\" data-profile-id=\"<%- locals.profileId %>\">\n\t\t<img src=\"<%- locals.imgUrl %>\" />\n\t</a>\n\t<div class=\"message\">\n\t\t<div>\n\t\t\t<% if(locals.bodyText) { %><span><%= locals.bodyText %></span><% }%>\n\t\t\t<% if(locals.mediaHtml) { %><div class=\"messageMedia\"><%- locals.mediaHtml %></div><% } %>\n\t\t\t<time data-datetime=\"<%- locals.timestamp %>\"></time>\n\t\t</div>\n\t</div>\n</div>","common/views/footer/messages/_typing":"<div class=\"messageGroup typingIndicator\">\n\t<div class=\"sender presence online\">\n\t\t<img src=\"<%- locals.imgUrl %>\" />\n\t</div>\n\t<div class=\"message typing\">\n\t\t<div>\n\t\t\t<div class=\"typing loading white\"></div>\n\t\t</div>\n\t</div>\n</div>","common/views/footer/messages/_thread":"<li class=\"<%- thread.selected ? 'selected ' : '' %><%- thread.unseenCount > 0 ? 'unread' : '' %>\" data-conversation-id=\"<%- thread.conversationId %>\" data-url=\"<%= thread.url || ('/messages/' + thread.conversationId) %>\" data-last-item-id=\"<%- thread.lastItemId %>\" data-profile-id=\"<%- thread.otherParticipantProfileId || (thread.participants.length && thread.participants[0].profileId) || 0 %>\">\n\t<div class=\"media size_60 inline presence\" data-show-presence=\"true\" data-profile-id=\"<%- thread.otherParticipantProfileId || (thread.participants.length && thread.participants[0].profileId) || 0 %>\">\n\t\t<a class=\"profileLink\" href=\"/<%-(thread.username || thread.participants.length && (thread.participants[0].username || thread.otherParticipantProfileId || (thread.participants[0].profileId != 0 ? thread.participants[0].profileId : ''))) %>\">\n\t\t\t<img src=\"<%- thread.images[0] %>\" alt=\"\" />\n\t\t</a> \n\t\t<div class=\"nameplate\">\n\t\t\t<h6><%= thread.headline || (thread.participants.length && thread.participants[0].fullName) %></h6>\n\t\t\t<p><%= thread.lastMessage %></p>\n\t\t\t<time data-datetime=\"<%- thread.lastUpdated %>\"></time>\n\t\t</div>\n\t</div>\n\t<i class=\"more_22 threeDots\"></i>\n\t<i class=\"popout_11 openInConversation\"></i>\n</li>\t"};
	
	
	
context = {"text":{},"uuid":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","profileId":-1,"loginId":-1,"realtime":{<?php /*?>"serverUrl":"/realtime","enableWebSockets":true,"subscriptions":{}<?php */?>},"searchOverlay":{<?php /*?>"delay":150,"minimumQueryLength":2,"enterKeySubmits":false<?php */?>},"termsOfService":{<?php /*?>"showTOSBOX":false<?php */?>},"ipDerivedIsoCountryCode":"<?php /*?>PK<?php */?>","ipDerivedLocationId":1246752,"assignedExperiments":null,"hashMashter":"<?php /*?>Zjk2MWE1YzQ2ZDA5NzNmZAk0wqMiIzgxw4lFwo0YwonDjwnCuisEw50+YsOpw4B9wo3CsMK1KzbDm8KJw4rDngYEYQjDlAFpL8OrEsOcZ8Omw54GKwnDvmoHwqZ0AR/CnwbCn8KZLiVawoFyccK+A8KRw43DuRFnw4tPwpjCuwjCqivDu2PCqFhfw7p8wrjClcOHwrguAcKnw5ZAUcOjY8KwBcKwZWzDrcOkUMO8wpDCv8OOFw%3D%3D<?php */?>","features":{<?php /*?>"isMessagingEnabled":true,"isMessagingToStrangerEnabled":true,"isOfflineMessagingEnabled":true,"isRadioEnabled":true,"isRealtimeEnabled":true,"isSearchEnabled":true,"isMentionProfileEnabled":true,"isPostTaggingEnabled":false,"isLinkScrapeEnabled":true,"isVideosPostEnabled":true,"isVideosExternalPostEnabled":true,"isRenderPresenceEnabled":true,"isPlayerQueueSortable":true,"isPostInEnable":true,"isShareIsEnable":true,"isOffSiteEmbedsEnabled":true,"isMixTagginEnable":true,"isPageviewBeaconV3Enabled":false,"isPlayerBeaconV3Enabled":true,"isWebcamEnabled":true,"isSignUpEnabled":true,"isSignInEnabled":true<?php */?>},"pfc":"splash","discover":{<?php /*?>"ajaxMoreUrl":"/ajax/discover/trending","maxChartItems":400,"filters":{"start":0,"max":40}<?php */?>},"selectedGlobalNav":"discover","messaging":{},"playInitialAd":true,"playInitialAdLocationId":null,"ads":{/*"pixels":[{"subdomain":"mpp2","pixelId":21032201,"targetingDisabled":true}],"msd":"2:2:Qa948i6eGJ3myCUMx4eEYB6szYBTiL4TmOAyBR-o9Gc"*/},"beaconData":{/*"dsid":2,"dsv":1,"pggd":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","pageId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","vgd":"390907e3-02eb-48ad-b156-c7780d5cf0aa","visitId":"390907e3-02eb-48ad-b156-c7780d5cf0aa","isnv":1,"lid":-1,"currentUserLoginId":null,"llid":-1,"lastLoginId":null,"lltime":"1970-01-01T00:00:00.000Z","lastLoginUtcDateTime":"1970-01-01T00:00:00.000Z","prid":-1,"currentUserProfileId":null,"lprid":-1,"lastProfileId":null,"tprid":-1,"targetProfileId":null,"pid":"f20eab64-6582-44ca-8879-978437855e38","persistentId":"f20eab64-6582-44ca-8879-978437855e38","abt":0,"abtb":0,"sn":"las1-app005","webServerName":"las1-app005","webServerIPAddressId":"10.144.18.15","pc":"en-US","currentCultureCode":"en-US","pf":"splash","pageFunctionalContextText":"splash","rpf":"","referrerPageFunctionalContextText":"","ll":"34.076212|-118.393564","i":null,"cek":"","currentContentEntityKeyText":null,"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752*/},"beaconDataV3":{/*"actionText":"view","directObjectEntityKeyText":"page_splash","pageId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","persistentId":"f20eab64-6582-44ca-8879-978437855e38","previousReferrerPageFunctionalContextText":"","referrerPageFunctionalContextText":"","requestFunctionalContextText":"splash","requestTrackingId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","requestUrl":"http://myspace.com/","visitId":"390907e3-02eb-48ad-b156-c7780d5cf0aa"*/},"audioAds":{/*"enabled":true,"skippingEnabled":false,"unskippableDuration":5,"firstAdAfter":900,"subsequentAdsAfter":900*/},"adPlayer":{/*"initialVisitAdPlay":{"enabled":true,"locationIds":"162618","loggedOutDefaultLocationIds":"none","loggedOutOtherLocationIds":"none","loggedInDefaultLocationIds":"162799","loggedInOtherLocationIds":"162799","unregisteredDefaultLocationIds":"none","unregisteredOtherLocationIds":"162804","pfcBlackList":"404,unsupportedBrowser","adInterval":86400000},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAdsRatio":{"audio_audio":0.9,"audio_video":0.9,"video_video":1,"video_audio":0.9},"firstAdAfter":900,"subsequentAdsAfter":900*/},"signedOutPlays":10000,"playVideosLinkedToSongs":false,"messageMaxLength":4000,"emptyProfileImage":"/common/images/user.png","camanjsPath":"<?php /*?>https://x.myspacecdn.com/new/stream/js/caman.b46d87ffa3c91c9293ec5aa666d31fd0.js<?php */?>"};




config = {"urls":{},"thirdParty":{"facebookAppId":"373499472709067"}};</script>



<script src="<?php echo base_url();?>assets/new/common/js/global.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/authentication.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/player.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/discover/js/discoverBundle.46BB9F26DC19CD45FDF4180A47C9C450.min.js"></script>
<script src="<?php echo base_url();?>assets/new/discover/js/discoverTrendingBundle.FE7F1801B5BC50C87D9C0FC34B578167.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/twitter-popup-script.js"></script>



<?php /*?>context = {"text":{},"uuid":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","profileId":-1,"loginId":-1,"realtime":{"serverUrl":"/realtime","enableWebSockets":true,"subscriptions":{}},"searchOverlay":{"delay":150,"minimumQueryLength":2,"enterKeySubmits":false},"termsOfService":{"showTOSBOX":false},"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752,"assignedExperiments":null,"hashMashter":"Zjk2MWE1YzQ2ZDA5NzNmZAk0wqMiIzgxw4lFwo0YwonDjwnCuisEw50+YsOpw4B9wo3CsMK1KzbDm8KJw4rDngYEYQjDlAFpL8OrEsOcZ8Omw54GKwnDvmoHwqZ0AR/CnwbCn8KZLiVawoFyccK+A8KRw43DuRFnw4tPwpjCuwjCqivDu2PCqFhfw7p8wrjClcOHwrguAcKnw5ZAUcOjY8KwBcKwZWzDrcOkUMO8wpDCv8OOFw%3D%3D","features":{"isMessagingEnabled":true,"isMessagingToStrangerEnabled":true,"isOfflineMessagingEnabled":true,"isRadioEnabled":true,"isRealtimeEnabled":true,"isSearchEnabled":true,"isMentionProfileEnabled":true,"isPostTaggingEnabled":false,"isLinkScrapeEnabled":true,"isVideosPostEnabled":true,"isVideosExternalPostEnabled":true,"isRenderPresenceEnabled":true,"isPlayerQueueSortable":true,"isPostInEnable":true,"isShareIsEnable":true,"isOffSiteEmbedsEnabled":true,"isMixTagginEnable":true,"isPageviewBeaconV3Enabled":false,"isPlayerBeaconV3Enabled":true,"isWebcamEnabled":true,"isSignUpEnabled":true,"isSignInEnabled":true},"pfc":"splash","discover":{"ajaxMoreUrl":"/ajax/discover/trending","maxChartItems":400,"filters":{"start":0,"max":40}},"selectedGlobalNav":"discover","messaging":{},"playInitialAd":true,"playInitialAdLocationId":null,"ads":{"pixels":[{"subdomain":"mpp2","pixelId":21032201,"targetingDisabled":true}],"msd":"2:2:Qa948i6eGJ3myCUMx4eEYB6szYBTiL4TmOAyBR-o9Gc"},"beaconData":{"dsid":2,"dsv":1,"pggd":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","pageId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","vgd":"390907e3-02eb-48ad-b156-c7780d5cf0aa","visitId":"390907e3-02eb-48ad-b156-c7780d5cf0aa","isnv":1,"lid":-1,"currentUserLoginId":null,"llid":-1,"lastLoginId":null,"lltime":"1970-01-01T00:00:00.000Z","lastLoginUtcDateTime":"1970-01-01T00:00:00.000Z","prid":-1,"currentUserProfileId":null,"lprid":-1,"lastProfileId":null,"tprid":-1,"targetProfileId":null,"pid":"f20eab64-6582-44ca-8879-978437855e38","persistentId":"f20eab64-6582-44ca-8879-978437855e38","abt":0,"abtb":0,"sn":"las1-app005","webServerName":"las1-app005","webServerIPAddressId":"10.144.18.15","pc":"en-US","currentCultureCode":"en-US","pf":"splash","pageFunctionalContextText":"splash","rpf":"","referrerPageFunctionalContextText":"","ll":"34.076212|-118.393564","i":null,"cek":"","currentContentEntityKeyText":null,"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752},"beaconDataV3":{"actionText":"view","directObjectEntityKeyText":"page_splash","pageId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","persistentId":"f20eab64-6582-44ca-8879-978437855e38","previousReferrerPageFunctionalContextText":"","referrerPageFunctionalContextText":"","requestFunctionalContextText":"splash","requestTrackingId":"76cdd48f-c51f-4066-a408-f9a0fc3d60dc","requestUrl":"http://myspace.com/","visitId":"390907e3-02eb-48ad-b156-c7780d5cf0aa"},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5,"firstAdAfter":900,"subsequentAdsAfter":900},"adPlayer":{"initialVisitAdPlay":{"enabled":true,"locationIds":"162618","loggedOutDefaultLocationIds":"none","loggedOutOtherLocationIds":"none","loggedInDefaultLocationIds":"162799","loggedInOtherLocationIds":"162799","unregisteredDefaultLocationIds":"none","unregisteredOtherLocationIds":"162804","pfcBlackList":"404,unsupportedBrowser","adInterval":86400000},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAdsRatio":{"audio_audio":0.9,"audio_video":0.9,"video_video":1,"video_audio":0.9},"firstAdAfter":900,"subsequentAdsAfter":900},"signedOutPlays":10000,"playVideosLinkedToSongs":false,"messageMaxLength":4000,"emptyProfileImage":"/common/images/user.png","camanjsPath":"https://x.myspacecdn.com/new/stream/js/caman.b46d87ffa3c91c9293ec5aa666d31fd0.js"};<?php */?>


<?php /*?>config = {"urls":{"cdn":"https://x.myspacecdn.com/new","playerSwf":"https://x.myspacecdn.com/new/common/swf/APIPlayer.2.12.323.a534095c60e5332b913d0d76971a00ff.swf?enableBeacons=false","upload":"/upload/","beacon":"/beacon","emptyPlaylistImage":"https://x.myspacecdn.com/new/common/images/mix.png","emptySongImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyAlbumImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyVideoImage":"https://x.myspacecdn.com/new/common/images/video.png","videoSwf":"https://x.myspacecdn.com/new/common/swf/videoPlayer.74bbdd4cf8f3974ed0986ec1ed8fadc0.swf","videoConfig":"videoPlayerConfig.5434f1cdef1e738d03cc05fe25823aba.xml","clipboardSwf":"https://x.myspacecdn.com/new/common/swf/ZeroClipboard.9f4401cdc4405d0730362256b4c04cc0.swf","swfupload":"https://x.myspacecdn.com/new/common/swf/swfupload.3a1c6cc728dddc258091a601f28a9c12.swf","scomm":"https://x.myspacecdn.com/new/common/html/scomm.782b85c048f5996874a47f427bb592ac.html","noRail":"norail="},"thirdParty":{"facebookAppId":"373499472709067"}};<?php */?>



	
	
	

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
  </script>
  
  <script>
    $(document).ready(function(){
		$('#top_nav a#show_nav_btn').on('click', function() {
			$("#nav_link_list").toggleClass("show_nav");
    	});
	
	});
	</script>


</body>
</html>

