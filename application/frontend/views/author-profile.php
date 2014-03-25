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
	var photoRailContainer_width = 330; // width of sidebar detail 300(w)+15(padding left)+15(space-right)
	var photoCarousel_width_calculated = photodetailcontainer_width - photoRailContainer_width;
	$(".photoCarousel").css("width", photoCarousel_width_calculated);
	
}

function resize_height(){

var container_moved_top_bottom = 60; // top bottom margin 40,20
var wrap_height = $("#wrap").css("height");

var photodetailcontainer_height_calculated = parseInt(wrap_height.slice(0, -2)) - container_moved_top_bottom;
$("#photoDetailContainer").css("height", photodetailcontainer_height_calculated);
$(".photoCarousel").css("min-height", photodetailcontainer_height_calculated);
	
}






});

</script>


<?php /*?>	<link href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#photoDetailContainer").mCustomScrollbar({
					theme:"light-thin",
					scrollInertia: 0,
					autoHideScrollbar:true,
					scrollAmount:2,
					advanced:{
        				updateOnContentResize: true
    				}
				});
				
				
			});
		})(jQuery);
	</script><?php */?>

    
	<title><?php echo $post[0]->Author_Name; ?>'s Profile | Nomad Magazine</title>





    <meta name="description" content="<?php //echo $post[0]->Post_Byline; ?>" />
    <meta name="keywords" content="" />
    <meta name="title" content="<?php //echo $post[0]->Post_Headline; ?> | Nomad Magazine" />
    
    <meta property="og:description" content="<?php //echo $post[0]->Post_Byline; ?>" />
    <meta property="og:type" content="gallery" />
    <meta property="og:url" content="<?php //echo base_url();?>gallery/view/<?php //echo $post[0]->Post_Slug; ?>" />
    <meta property="og:image" content="<?php echo base_url();?><?php //echo $this->config->item("thumbnails_upload_dir");?><?php //echo $post[0]->Post_Thumbnail; ?>" />
    <meta property="fb:app_id" content="574798425933678" />
	<meta property="og:site_name" content="Nomad Magazine" />
	<meta property="og:title" content="<?php //echo $post[0]->Post_Headline; ?> | Nomad Magazine" />
		
    
    
    
    <style>
	
	
	#fplayer{ }
	.post_info{
		margin: 0;
		margin-bottom:20px;
		border-bottom:1px dotted #999;
	}
	span.author_info {
		font-family: "museo-slab",serif;
		font-weight: 100;
		font-size: 14px;
		line-height: 22px;
		letter-spacing: .08em;
		color: #DE3300;
	}
	
	span.date_added{ float:right;}
	
	

	
	.panel_bottom_data .photographer_info {
			/*border-top: 1px dotted #999;*/
	}
	
	.panel_bottom_data .photographer_info h10 {
		font-family: "museo-slab",serif;
		font-weight: 100;
		font-size: 12px;
		line-height: 22px;
		letter-spacing: 0.08em;
		color: #8F8F8F;
	}
	

	
	
	
	#video_post{
		padding: 0 25px;
		color:#000;
		padding-bottom:10px;
		
	}
	
	h3.photographer_info {
		font-family: "museo-slab",serif;
		font-weight: 100;
		font-size: 14px;
		line-height: 22px;
		letter-spacing: .08em;
		color: #FFF;
		margin: 0;
	}
	
	h1.post_title {
		font-family:"adobe-garamond-pro",serif;
		margin-bottom: 20px;
		color:#000;
		margin-top:30px;
		font-size:34px;
		line-height:34px;
	}
	
	.post_detail_text{
		width:66%;
	}

















.author .heading {
font-family: "BrownStd",sans-serif;
overflow: visible;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 52px 12px 16px 20px;
margin-bottom: 0px;
position: relative;
width: 100%;
background-image: url("<?php echo base_url();?>assets/images/ruler.png");
background-repeat: no-repeat;
background-position: bottom left;
text-transform: uppercase;
font-size: 2em;
}

.author .intro {
clear: left;
padding-top: 30px;
}
.author .intro img {
margin-left: 20px;
margin-right: 20px;
margin-bottom: 50px;
border-radius: 50%;
float: left;
}


.author .intro .author-details {
margin-top: 30px;
}
.author .intro .author-details h1 {
margin-bottom: 0;
text-transform: uppercase;
}

.author .intro .author-details h2, .author .intro .author-details p {
font-family: "BrownStd",sans-serif;
font-size: 0.7em;
text-transform: uppercase;
margin-bottom: 1.6em;
}

.author .intro .author-details .left {
float: left;
}

.author .intro .author-details p {
margin-bottom: 0.875em;
}

.author .intro .author-details h2 span, .author .intro .author-details p span {
text-transform: none;
font-family: "Georgia",sans-serif;
font-size: 1.3em;
line-height: 1.4em;
}

.author .intro .author-details .right {
float: left;
margin: 0 20px;
}




.author .intro .bio {
clear: left;
font-size: 14px;
line-height: 1.5em;
padding: 0 20px;
}

.author .heading {
font-family: "BrownStd",sans-serif;
overflow: visible;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 52px 12px 16px 20px;
margin-bottom: 0px;
position: relative;
width: 100%;
background-image: url("<?php echo base_url();?>assets/images/ruler.png");
background-repeat: no-repeat;
background-position: bottom left;
text-transform: uppercase;
font-size: 2em;
}


.author .recent {
background-image: none;
}
.author .grid-preview {
clear: left;
}

.author .grid {
background-image: url("<?php echo base_url();?>assets/images/ruler.png");
background-repeat: no-repeat;
background-position: top left;
background-size: 680px 1px;
width: 100%;
overflow: hidden;
}

.author .grid ul {
margin: 0;
padding: 0;
line-height: normal;
list-style-type: none;
}

.author .grid ul li {
padding: 20px 20px 0px 20px;
float: left;
height: 350px;
text-align: center;
list-style-type: none;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
position: relative;
}
.author .grid ul a {
font-size: 12px;
font-family: "BrownStd",sans-serif;
color: #f75352;
line-height: 6px;
text-transform: uppercase;
}

.one-of-four {
width: 25%;
}





div.content.block>div article {
padding: 15px 0 13px 20px;
position: relative;
display: inline-block;
}

	
	</style>
    



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
googletag.defineSlot('/12183845/300x600', [300, 600], 'div-gpt-ad-1394571855793-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>


    
</head>

<body class="authorProfileTemplate">



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



<?php /*?><div id="social_icons_box">
<a href="#" id="share_button"><img src="<?php echo base_url();?>assets/images/facebook.png" width="30" /></a>
<a href="http://twitter.com/share?text=<?php echo $post[0]->Post_Headline; ?>" class="twitter popup" data-count="none"><img src="<?php echo base_url();?>assets/images/twitter.png" width="30" height="30" /></a>
<a href="#" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo base_url();?>gallery/view/<?php echo $post[0]->Post_Slug; ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="<?php echo base_url();?>assets/images/gplus.png" width="30" /></a>
</div><?php */?>


						
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
		</ul>
	</nav>
		
</section>
        
        
        
        
        

		<div id="wrap" class="container" data-uid="09390a56-bfe4-4610-a4ab-b82cde3d0106">
			


<div id="photoDetailContainer" style="overflow-y:scroll;">
    <div class="photoCarousel">
    <div class="photoItems">
        <div class="container" id="video_player_container">








<div id="video_post">










<div class="author two-of-three">
      
        <h2 class="heading">Author</h2>

        <div class="intro">
        
                      <img src="<?php echo $auth_thumbnail; ?>" width="100">
          

          <div class="author-details">

            <h1 class="img"><?php echo $post[0]->Author_Name; ?></h1>
            <h2></h2>

            <div class="left">
                              <p>Contributing since <br><span><?php echo date("M Y", $post[0]->Date_Added);?></span></p>
              

              
              <p>Stories Written: <br><span><?php echo $posts_count; ?></span></p>
            </div>

            <div class="right">
              
                              <p class="email"><a href="mailto:<?php echo $post[0]->Author_Email; ?>" target="_blank"><span><i class="icon-mail"></i></span> <?php echo $post[0]->Author_Email; ?></a></p>
              
              
                              <?php /*?><p class="google-profile"><a href="https://plus.google.com/u/0/106619970306983806314" rel="me" target="_blank"><span><i class="icon-googleplus"></i></span> Ellen Hoffman</a></p><?php */?>
            
            </div>

          </div>
            
            <div class="bio">
            
            <?php echo $post[0]->Author_Bio; ?>
            
          </div>

        </div>


        
        <div class="clearfix"></div>
        


<h2 class="heading recent">Recent Articles</h2>


    <div class="grid-preview">
            <div class="grid">
            
            
            
            <ul>
            
            
            <?php foreach( $author_posts as $author_post ) : ?>
            
                <?php
                if($author_post['Post_Type'] == "gallery"){
					$controller_select = "gallery/view/";
				}else{
					$controller_select = "article/view/";	
				}
				?>
                
            
               <li id="entry-64084" class="preview one-of-four">
        
                              <a href="<?php echo base_url();?><?php echo $controller_select;?><?php echo $author_post['Post_Slug']; ?>"><img src="<?php echo base_url();?>thumbnail-generator/phpThumb.php?src=../<?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $author_post['Post_Thumbnail'];?>&hash=47db60e11d23dda928e0a154d488512a" width="140" height="168"  /></a>
 
                <h2><a href="<?php echo base_url();?><?php echo $controller_select;?><?php echo $author_post['Post_Slug']; ?>"><?php echo $author_post["Post_Headline"];?></a></h2>
                
                
              </li>
            
            <?php endforeach; ?>
            
            
            
            
            
<?php /*?>                      <li id="entry-64084" class="preview one-of-four">
                
                
                              <a href="/snake-jewelry"><img src="http://s1.r29static.com/bin/entry/f57/140x,80/1181580/bittersweets-ny-ouroboros-ring-main.jpg" alt="What&#039;s An Ouroboros, &amp; Why Are We Wearing It?" title="What&#039;s An Ouroboros, &amp;amp; Why Are We Wearing It?" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/snake-jewelry">What's An Ouroboros, &amp; Why Are We Wearing It?</a></h2>
                <a href="/snake-jewelry" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
                  <li id="entry-64065" class="preview one-of-four">
                
                
                              <a href="/2014/03/64065/amber-valletta-master-and-muse"><img src="http://s1.r29static.com/bin/entry/c0f/140x,80/1181616/jpeg-3-main.jpg" alt="This Is How The Fashion-Forward Set Does Eco" title="This Is How The Fashion-Forward Set Does Eco" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/2014/03/64065/amber-valletta-master-and-muse">This Is How The Fashion-Forward Set Does Eco</a></h2>
                <a href="/2014/03/64065/amber-valletta-master-and-muse" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
                  <li id="entry-63920" class="preview one-of-four">
                
                
                              <a href="/63920"><img src="http://s1.r29static.com/bin/entry/b88/140x,80/1181250/emmawatson-opener.jpg" alt="How To Steal Emma Watson&#039;s Badass Airport Style" title="How To Steal Emma Watson&#039;s Badass Airport Style" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/63920">How To Steal Emma Watson's Badass Airport Style</a></h2>
                <a href="/63920" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
                  <li id="entry-63916" class="preview one-of-four">
                
                
                              <a href="/vintage-bathing-suits"><img src="http://s1.r29static.com/bin/entry/1d4/140x,80/1180598/opener2-copy.jpg" alt="Retro Swimwear For Old Souls" title="Retro Swimwear For Old Souls" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/vintage-bathing-suits">Retro Swimwear For <em>Old Souls</em></a></h2>
                <a href="/vintage-bathing-suits" class="read-more-related icon-read-more"></a>
                
              </li><?php */?>
                      
                      
                      
              </ul>
              
              </div>
              <?php /*?><div class="grid">
              <ul>
            
            
                  <li id="entry-63898" class="preview one-of-four">
                
                
                              <a href="/63898"><img src="http://s1.r29static.com/bin/entry/708/140x,80/1180117/nike-nordstrom-main.jpg" alt="Editor Obsessions: Hint, Lots Of Shoes" title="Editor Obsessions: Hint, Lots Of Shoes" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/63898">Editor Obsessions: Hint, Lots Of Shoes</a></h2>
                <a href="/63898" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
                  <li id="entry-63930" class="preview one-of-four">
                
                
                              <a href="/womens-watches"><img src="http://s2.r29static.com/bin/entry/b1e/140x,80/1180868/hermes.jpg" alt="Spring Ahead! 12 Time Tellers To Keep You On Track" title="Spring Ahead! 12 Time Tellers To Keep You On Track" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/womens-watches">Spring Ahead! 12 Time Tellers To Keep You On Track</a></h2>
                <a href="/womens-watches" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
                  <li id="entry-63371" class="preview one-of-four">
                
                
                              <a href="/63371"><img src="http://s1.r29static.com/bin/entry/abe/140x,80/1179137/annakendrick-opener.jpg" alt="How To Accessorize Your Black-&amp;-White Look, Courtesy of Anna Kendrick" title="How To Accessorize Your Black-&amp;amp;-White Look, Courtesy of Anna Kendrick" width="140" height="168"  /></a>
                
    
               
                
                <h2><a href="/63371">How To Accessorize Your Black-&amp;-White Look,...</a></h2>
                <a href="/63371" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
                  <li id="entry-63847" class="preview one-of-four">
                
                
                              <a href="/australian-fashion-brands"><img src="http://s1.r29static.com/bin/entry/493/140x,80/1179840/546974-515773588498611-177870157-n-main.jpg" alt="Found! A Stateside Shop That&#039;s Stocking All Things Aussie " title="Found! A Stateside Shop That&#039;s Stocking All Things Aussie" width="140" height="168"  /></a>
                
    
                
                
                <h2><a href="/australian-fashion-brands">Found! A Stateside Shop That's Stocking All Things...</a></h2>
                <a href="/australian-fashion-brands" class="read-more-related icon-read-more"></a>
                
              </li>
            
            
            
            </ul>
            </div><?php */?>
          </div>      
		<div class="clearfix"></div>


</div>







</div><!---- end video post-->











   
    
        </div>
    </div>


 
 
 
 
 
 
 
 
 
 

    
    
    
       

    

    
</div>
    





<aside class="photoRailContainer">
	
    
<!-- 300x600 -->
<div id='div-gpt-ad-1394571855793-0' style='width:300px; height:auto; margin-top:15px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1394571855793-0'); });
</script>
</div>




	
</aside>

</div>
			
		</div>




    </div>
    
    
    
    
    
    
    
    <footer id="footer" class="paused noStations queue signedOut allowSkips">

	











<div id="global" class="bottom_nav_space"></div>
    

	

<nav id="links">
	
    

	
Copyright &copy; 2013 Icarus Enterprises, Inc.  <a href="#">About Us</a> | <a href="#">People</a> | <a href="#">Advertise</a> | <a href="#">Contact</a>

    
</nav>

</footer>
    
		


	


      
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/twitter-popup-script.js"></script>





   
</body>
</html>