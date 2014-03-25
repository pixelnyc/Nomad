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

   <!-- include flowplayer -->
   <script type="text/javascript" src="<?php echo base_url();?>assets/flowplayer/flowplayer.min.js"></script>
      <!-- player skin -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/flowplayer/skin/minimalist.css">
  
 

<?php include("includes/typekit.php");?> 

	



<script>

$(document).ready(function(){

		resize_height();
		resize_width();

    $("#fplayer video").bind("loadedmetadata", function () {
		
		//$("#fplayer video").hide();
        var pl_width = this.videoWidth;
        var pl_height = this.videoHeight;
		
		$("#fplayer").css("display", "block");
		$("#fplayer").css("max-width", pl_width);
		$("#video_post").css("display", "block");		
		
	  $("#fplayer").flowplayer({
		ratio: pl_height/pl_width,
		embed: false,
		fullscreen: true,
		
		
		playlist: [
		  [
			{ mp4:   "<?php echo base_url();?>uploads/gallery/video-gallery/<?php echo $gallerydata[0]["Slide_Src_File"]; ?>" },
			{ webm:  "<?php echo base_url();?>uploads/gallery/video-gallery/<?php echo $gallerydata[0]["Slide_Src_File2"]; ?>" }
		  ]
		]
	  });
		
		
		

		

    });


$(window).resize(function(){

	resize_height();	
	resize_width();
	

});


function resize_width(){

	var photodetailcontainer_width = $("#photoDetailContainer").css("width");
	photodetailcontainer_width = parseInt(photodetailcontainer_width.slice(0, -2));
	var photoRailContainer_width = 330; // width of sidebar detail
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


function player_centered(){
	//var height_evaluate  = $('#video_player_container').height()-$('.flowplayer').height();
	//$('.flowplayer').css("top",height_evaluate/2);		
	
	var height_evaluate  = $('#video_player_container').height()-$('.player_wrapper').height();
	$('.player_wrapper').css("top",height_evaluate/2);			
}



});

</script>


	<link href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<?php /*?>	<script>
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

    
	<title><?php echo $post[0]->Post_Headline; ?> | Nomad Magazine</title>





    <meta name="description" content="<?php //echo $post[0]->Post_Byline; ?>" />
    <meta name="keywords" content="" />
    <meta name="title" content="<?php echo $post[0]->Post_Headline; ?> | Nomad Magazine" />
    
    <meta property="og:description" content="<?php //echo $post[0]->Post_Byline; ?>" />
    <meta property="og:type" content="gallery" />
    <meta property="og:url" content="<?php echo base_url();?>gallery/view/<?php echo $post[0]->Post_Slug; ?>" />
    <meta property="og:image" content="<?php echo base_url();?><?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post[0]->Post_Thumbnail; ?>" />
    <meta property="fb:app_id" content="574798425933678" />
	<meta property="og:site_name" content="Nomad Magazine" />
	<meta property="og:title" content="<?php echo $post[0]->Post_Headline; ?> | Nomad Magazine" />
		
    
    
    
    <style>
	
	
	#fplayer{ display:none;}
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
		display:none;
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

	
	</style>
    


<?php /*?><script type='text/javascript'>
(function() {
var useSSL = 'https:' == document.location.protocol;
var src = (useSSL ? 'https:' : 'http:') +
'//www.googletagservices.com/tag/js/gpt.js';
document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
})();
</script>

<script type='text/javascript'>
googletag.defineSlot('/12183845/Video_3x6', [300, 600], 'div-gpt-ad-1392416521492-0').addService(googletag.pubads());
googletag.pubads().enableSyncRendering();
googletag.pubads().enableSingleRequest();
googletag.enableServices();
</script>






<script type='text/javascript'>
(function() {
var useSSL = 'https:' == document.location.protocol;
var src = (useSSL ? 'https:' : 'http:') +
'//www.googletagservices.com/tag/js/gpt.js';
document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
})();
</script>

<script type='text/javascript'>
googletag.defineSlot('/12183845/Video_3x6', [300, 600], 'div-gpt-ad-1392420860568-0').addService(googletag.pubads());
googletag.pubads().enableSyncRendering();
googletag.pubads().enableSingleRequest();
googletag.enableServices();
</script><?php */?>








<?php /*?><script type='text/javascript'>
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
googletag.defineSlot('/12183845/300x600', [300, 600], 'div-gpt-ad-1392588179596-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script><?php */?>





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







<?php /*?> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48087661-1', 'nomadmag.co');
  ga('send', 'pageview');

</script><?php */?>


    
</head>

<body class="videoGalleryTemplate">



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
<a href="https://www.facebook.com/NomadMag" target="_blank"><img src="<?php echo base_url();?>assets/images/facebook.png" width="30" /></a>
<a href="http://twitter.com/share?text=<?php echo $post[0]->Post_Headline; ?>" class="twitter popup" data-count="none"><img src="<?php echo base_url();?>assets/images/twitter.png" width="30" height="30" /></a>
<a href="#" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo base_url();?>gallery/view/<?php echo $post[0]->Post_Slug; ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="<?php echo base_url();?>assets/images/gplus.png" width="30" /></a>
</div><?php */?>


<div id="social_icons_box">
<a href="#" id="share_button"><img src="<?php echo base_url();?>assets/images/facebook.png" width="30" /></a>
<a href="http://twitter.com/share?text=<?php echo $post[0]->Post_Headline; ?>" class="twitter popup" data-count="none"><img src="<?php echo base_url();?>assets/images/twitter.png" width="30" height="30" /></a>
<a href="#" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo base_url();?>gallery/view/<?php echo $post[0]->Post_Slug; ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="<?php echo base_url();?>assets/images/gplus.png" width="30" /></a>
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
		</ul>
	</nav>
		
</section>
        
        
        
        
        

		<div id="wrap" class="container" data-uid="09390a56-bfe4-4610-a4ab-b82cde3d0106">
			


<div id="photoDetailContainer" style="overflow-y:scroll;">
    <div class="photoCarousel">
    <div class="photoItems">
        <div class="container" id="video_player_container">



<div class="player_wrapper">
   <!-- the player -->
   <div id="fplayer">
      <video>         
         <source type="video/mp4" src="<?php echo base_url();?>uploads/gallery/video-gallery/<?php echo $gallerydata[0]["Slide_Src_File"]; ?>">
         <source type="video/webm" src="<?php echo base_url();?>uploads/gallery/video-gallery/<?php echo $gallerydata[0]["Slide_Src_File2"]; ?>">
      </video>
   </div>
   <!--//---------->
</div>




<div id="video_post">
<div class="post_info">
<?php /*?>
            <h10>Videography:
            	<h3><?php echo $post[0]->Photographer_Name; ?></h3>
            <?php echo $post[0]->Photographer_Gps; ?></h10><?php */?>
            
<p><span class="author_info"><?php echo $post[0]->Post_Author; ?>:</span><span class="date_added"><?php echo date("D d-M-Y", $post[0]->Date_Added);?></span></p>
</div>
<h1 class="post_title"><?php echo $post[0]->Post_Headline; ?></h1>
<div class="post_detail_text">
<p><?php echo $post[0]->Post_Byline; ?></p>
</div>
</div>











   
    
        </div>
    </div>


 
 
 
 
 
 
 
 
 
 

    
    
    
       

    

    
</div>
    





<aside class="photoRailContainer">
	
    
<!-- 300x600 -->
<div id='div-gpt-ad-1394571855793-0' style='width:300px; height:600px; margin-top:15px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1394571855793-0'); });
</script>
</div>
    
<?php /*?>    
<!-- 300x600 -->
<div id='div-gpt-ad-1392588179596-0' style='width:300px; height:600px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392588179596-0'); });
</script>
</div><?php */?>




<?php /*?>	<section class="header">
		<div class="genInfo ">
            

		</div>

		
	</section>
	
	<section class="header description">

        
        
        
        <div class="panel_bottom_data">
            <div class="photographer_info">
           </div>
    	</div>
    
    
        	
	</section><?php */?>

	
</aside>

</div>
			
		</div>













		<?php /*?><div id="rightRail">
	<div class="railHeader">
		<!-- Load your own content -->
	</div>
	<div class="rail">
		<nav>
			<a class="info" data-original-title="Info" data-position="left" rel="tooltip"><i class="info_18">Info</i></a>
			<a class="connections" data-original-title="Connections" data-position="left" rel="tooltip"><i class="connections_18">Connections</i></a>
			<a class="comments" data-original-title="Comments" data-position="left" rel="tooltip"><i class="comments_18">Comments</i></a>
			<a class="shares" data-original-title="Shares" data-position="left" rel="tooltip" ><i class="shares_18">Shares</i></a>
		</nav>

        <div>
            <!-- Section content -->
            <section class="info"></section>
            <section class="connections"></section>
            <section class="comments"></section>
            <section class="shares"></section>
        </div>
	</div>
</div><?php */?>
		
		
		
		
		
		<?php /*?><div id="popups">
	<ul id="toasts" class="popup"></ul>
</div><?php */?>
		
		
		
		
		
		<?php /*?><div id="searchDialog" class="lightbox">
	<h3>Search Myspace</h3>
	<span class="shortcutTip">Start typing...</span>
	<form>
		<input type="text" name="q" id="q" autocomplete="off"  data-tour-id="searchinput"/>
	</form>
	<p class="correctionHint hide">
		<span class="">DID YOU MEAN</span>
		<span class="correctionString"></span>
	</p>
	<p id="noResults">Your search did not return any results. Please try again.</p>
	<div id="searchResults" class="horizontalContent"></div>
</div><?php */?>
        
		
		
		
		
		
		<?php /*?>
		<div id="photoCarouselLightbox" class="lightbox media">
    <div class="photoCarousel">
    <div class="photoItems">
        <div class="container">
            <div class="tbl">
                <div class="cell">
                    
                </div>
            </div>
        </div>
    </div>

     <i class="arrow_left_40 prevItem" data-action="prevItem"></i>
     <i class="arrow_right_40 nextItem" data-action="nextItem"></i>

    <div class="details">
        <div class="left">
			
        </div>
        <div class="right">
            <div class="info">
                <span class="photoFrom">Photo from <a href="#"></a></span>
                <span class="position"></span>
            </div>
            <div class="arrows">
                <i class="arrow_left_16_dark prevItem" data-action="prevItem"></i><i class="arrow_right_16_dark nextItem" data-action="nextItem"></i>
            </div>
        </div>
    </div>

    <div class="slideShowLegend">
        <h2>You're now in slide show mode.</h2>
        <p>
            Hitting < pauses the slideshow and goes back. <br/>
            Hitting > pauses the slideshow and goes forward. </br>
            SPACEBAR resumes the slideshow. <br/>
            Press ESC to exit. <br/>
        </p>
    </div>

    
    <div class="exit">
        <div class="tip left in info">
            <div class="tip-arrow"></div>
            <div class="tip-inner">Press ESC to close.</div>
        </div>
        <i class="close lbox close_14">Close</i>
    </div>
    
</div>
    

<aside class="photoRailContainer">
	
	<section class="header">
		<div class="genInfo ">
			<div class="connectButton tooltips" data-id="80102858" data-playlist-id="352456" data-entity-key="image_profile_82156885_80102858" data-is-connected="false" data-is-owner="false" data-mix-entity-key="playlist_profile_82156885_352456" data-image-url="https://a4-images.myspacecdn.com/images04/6/eaee9c08c6e34c5894caa47eb7432ff3/300x300.jpg" data-title="" data-owner="Myspace" data-owner-entity-key="profile_82156885" data-is-liked="false" data-type="photo">
	<span></span>
	<span></span>
</div>
			<button class="likeBtn like_36 photo" data-entity-key="image_profile_82156885_80102858" data-type="photo" data-is-owner="false"></button>
		    <h2>Photo from <a href="/myspace/mixes/graphic-content-the-eight-days-of-kanye-352456">Graphic Content: The Eight Days Of Kanye</a></h2>
		    <p class="owner"><a href="/myspace">Myspace</a></p>
		    <p class="stats">
			   <i class="social_share">Shares</i>
			   <span class="stats" style="display: inline;">0</span>
			</p>
		</div>

		
	</section>
	

<div class="rr" data-likes-entity-key="image_profile_82156885_80102858" data-connects-entity-key="image_profile_82156885_80102858" data-comments-entity-key="image_profile_82156885_80102858">
	<header class="stats">
		<a data-view="likes" class="nLikes hide" data-entity-key="image_profile_82156885_80102858"><i class="social_like"></i><span>0</span></a>

		
		<a data-view="connects" class=""><i class="social_connect"></i><span>1</span></a>
		

		<a data-view="comments" class="active"><i class="social_comment"></i><span>0</span></a>
	</header>
	
	
	<section class="connects ">
		<div>
			<ol>
				
			</ol>
		</div>
	</section>
	
	<section class="comments active">
		<div>
			
			
<div class="commentsControl" data-live-comments="false">	
	
	<div class="comments" data-direct-object="image_profile_82156885_80102858">
	<ol data-next-start="0" data-total="0" data-first-start="0">
		
	</ol>
</div>
	

	<form class="addComment media inline size_40" action="/ajax/comments/post/image_profile_82156885_80102858" data-can-comment="false" data-type="undefined" >
		
			<a href="#"><img src="https://x.myspacecdn.com/new/common/images/user.png" alt=""/></a>
		
        <div class="text">
		
			<p><a class="signIn" href="/signin">Sign in</a> to add a comment...</p>
		
		</div>
    </form>

</div>
			
		</div>
	</section>
</div>
	
</aside>

</div><?php */?>
	
    
    
    
    
    
    
    
    
    	
			<?php /*?><article id="loginDialog" class="lightbox">
	
<header>
	<h1>Sign in to Myspace</h1>
	<p>Use Facebook, Twitter or your email to sign in.</p>
	<p class="signup">Don't have a Myspace account yet? No worries, <a href="/signup">joining</a> is easy.</p>
</header>
<section>
	<form class="signInForm" id="signInForm" method="POST" action="/ajax/account/signin" name="signInForm">
		<div>
			<aside class="thirdParty">
				
				<button class="facebook massive" data-provider="facebook" type="button"><i class="facebook_170"></i><p>Facebook</p></button>
				
				
				<button class="twitter massive" data-provider="twitter" type="button"><i class="twitter_170"></i><p>Twitter</p></button>
				
			</aside>
			<fieldset class="errorContainer">
				<div class="control-group">
					<div class="control email">
						<label for="login.email">Email or Username</label>
						<input type="text" id="login.email" name="email" required
							   data-err-req-message="Please enter your username or email."/>
						<span class="tipHolder"></span>
					</div>
				</div>
				<div class="control-group">
					<div class="control password">
						<label for="login.password">Password</label>
						<input type="password" id="login.password" name="password" required
							   data-err-req-message="Please enter a password."/>
						<span class="tipHolder"></span>
					</div>
				</div>
				<div class="control-group">
					<a class="help" href="#">Forgot password?</a>
					<label class="rememberMe"><input class="msCheckbox white left" id="staySignedIn" type="checkbox" name="rememberMe" checked="checked" /><span></span> Keep me signed in</label>
				</div>

				<input type="hidden" name="pageId" value=""/>
				<p class="genericError tipHolder"></p>
			</fieldset>
		</div>
		<footer class="formFooter">
			<button type="submit" form="signInForm" class="primary">Sign In</button>
		</footer>
	</form>
</section>

</article><?php */?>









<?php /*?><article id="loginHelpDialog" class="loginHelp lightbox">
    <header>
        <h1>Forgot something?</h1>
    </header>
    <section>
		<form id="loginhelp_form" action="/ajax/account/forgotpassword" method="POST">
			<div>
				<aside>
					<i class="emaillogin forgot_login_70 massive"></i>
				</aside>
				<aside class="instructions">
					<p>
						Don’t sweat it. Just enter any details you do remember. We'll email instructions on how to reset your password and remind you of your username.
					</p>
					<p>
						<strong>Need help?</strong> Learn more about how to <a href="http://www.askmyspace.com/t5/Guides/LogIn-Issues/ba-p/38809" target="_blank" >retrieve an existing account.</a>
					</p>
				</aside>
				<fieldset class="errorContainer">
					<div class="control-group email">
						<div class="msRadio white">
							<input id="loginhelp_email" type="radio" name="remindoption" value="em" checked />
							<label for="loginhelp_email"><span>Your email</span>
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		The email you used to create your account.
		<span></span>
	</span>
</span>

</span>

							</label>
						</div>
						<div class="control">
							<input type="email" name="email" required data-err-req-message="Please enter your email." data-err-type-message="Please enter a valid email."/>
							<p class="tipHolder"></p>
						</div>
					</div>
					<div class="control-group username">
						<div class="msRadio white">
							<input id="loginhelp_username" type="radio" name="remindoption" value="un" />
							<label for="loginhelp_username"><span>Username</span>
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		The last part of your Myspace URL. Ex: myspace.com/<strong>username</strong>
		<span></span>
	</span>
</span>

</span>

							</label>
						</div>
						<div class="control">
							<input type="text" name="username" required data-err-req-message="Please enter your username."/>
							<p class="tipHolder"></p>
						</div>
					</div>

					<p class="genericError tipHolder"></p>
				</fieldset>
			</div>
			<footer class="formFooter">
				<button class="back" type="button">Back</button>
				<button class="primary" type="submit" form="loginhelp_form">Submit</button>
			</footer>
		</form>
    </section>
</article><?php */?>







<?php /*?><article id="loginHelpSuccessDialog" class="loginHelp lightbox">
    <header>
        <h1>New password request sent</h1>
    </header>
    <section>
		<form>
			<div>
				<aside>
					<i class="emaillogin forgot_login_70 massive"></i>
				</aside>
				<aside class="instructions">
					<p>Check your inbox. We've emailed you instructions on how to reset your password.   If you don’t see it, take peek inside your spam folder, just in case.</p>
				</aside>
			</div>
			<footer class="formFooter">
				<button class="primary" form="loginhelp_form">Go to Sign In</button>
			</footer>
		</form>
    </section>
</article><?php */?>











<?php /*?><article id="loginPrompt" class="dialog" data-default-message="You must sign in to do that.">
	<i class="close x_14">Close</i>
	<header>
     	<h2 class="promptText"></h2>
 	</header>
	<section>
		<div>
			<div class="thirdParty">
				<button class="facebook" data-provider="facebook"><i class="facebook_40"></i><span>Facebook</span></button>
				<button class="twitter" data-provider="twitter"><i class="twitter_40"></i><span>Twitter</span></button>
				<button class="emaillogin"><i class="email_40"></i><span>Email</span></button>
			</div>
			<div class="emailSignin">
				<form method="POST" action="/ajax/account/signin">
					<div class="tipHolder"></div>
					<p class="email">
						<span class="tipHolder"></span>
						<label for="loginPrompt.email">Email or Username</label>
						<input type="text" id="loginPrompt.email" name="email" required
							   data-err-req-message="Please enter your username or email."/>
					</p>
					<p class="password">
						<span class="tipHolder"></span>
						<label for="loginPrompt.password">Password <a class="help">Forgot login?</a></label>
						<input type="password" id="loginPrompt.password" name="password" required
							   data-err-req-message="Please enter a password."/>
					</p>

					<input type="submit" class="hidden" value="" />
				</form>
			</div>
		</div>
	</section>
	<footer>Don’t have an account? <a class="signUp" href="/signup">Joining is quick and easy</a>.</footer>
</article><?php */?>








<?php /*?><article id="signupTypesDialog" class="signupTypes lightbox">
	
	<header>
		<h1>Join Myspace</h1>
		<p>Getting in is easy. Use one of your social networks or start fresh with an email address.</p>
		<p class="signIn">Already have a Myspace account? <a href="/signin">Sign in</a>.</p>
	</header>
    <section>
		
		<button class="facebook massive" data-provider="facebook"><i class="facebook_170"></i><p>Facebook</p></button>
		
		
		<button class="twitter massive" data-provider="twitter"><i class="twitter_170"></i><p>Twitter</p></button>
		
		<button class="emaillogin massive"><i class="email_170"></i><p>Email</p></button>
    </section>
	
</article><?php */?>












<?php /*?><article id="signupEmailDialog" class="lightbox signupDialog">
	<header>
		<h1>Join with your email address</h1>
	</header>
	<section>
		<form class="signupForm" id="signupEmailForm" method="POST" action="/ajax/account/signup">
			<div>
				<aside>
					<i class="emaillogin email_170 massive">Email</i>
				</aside>
				<fieldset class="errorContainer">
					<div class="control-group inline">
						<div class="control fullName">
							<label for="signupEmailFullName">Full Name
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This is how you’ll be known on Myspace. Most people use their real name.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="text" id="signupEmailFullName" name="fullName" required value="" data-err-req-message="Don't forget to enter your full name." maxlength="50" />
							<p class="tipHolder"></p>
						</div>

						<div class="control gender">
							<label for="signupEmailGender">Select Gender
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This helps us keep people, musicians and brands searchable on Myspace.
		<span></span>
	</span>
</span>

</span>

							</label>
							<select id="signupEmailGender" name="gender" required="required" data-err-req-message="Please select your gender.">
								<option value="" selected="selected" disabled="disabled">Please select</option>
								<option value="Female">Female</option>
								<option value="Male">Male</option>
								<option value="NotApplicable">Unspecified</option>
							</select>
							<p class="tipHolder"></p>
						</div>
					</div>
					<div class="control-group inline">
						<div class="control username">
							<label for="signupEmailUsername">Username
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This is your profile URL. Pick one that's 25 characters or less and includes a letter. You can throw in numbers, dots and dashes, too.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="text" id="signupEmailUsername" name="username" required maxlength="25" value="" data-err-req-message="Don't forget to pick a username."/>
							<p class="tipHolder"></p>
						</div>
						<div class="control password">
							<label for="signupEmailPassword">Password
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Pick one that's hard-to-crack, only known by you, and at least 6 characters long.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="password" id="signupEmailPassword" name="password" required data-err-req-message="Don't forget to pick a secure password."/>
							<p class="tipHolder"></p>
						</div>
					</div>
					<div class="control-group inline">
						<div class="control email">
							<label for="signupEmailEmail">Email
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Use this to log in to your account, receive notifications and get handy updates from us.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="text" id="signupEmailEmail" name="email" required value="" data-err-req-message="Don't forget to enter an email address." />
							<p class="tipHolder"></p>
						</div>
						<div class="dob control control-group inline">
							<label for="signupEmailDobMonth">Date of Birth
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Please enter the account owner's birth date here.
		<span></span>
	</span>
</span>

</span>

							</label>
							<p class="tipHolder"></p>
							<div class="control">
								<input type="text" maxlength="2" name="birthMonth" placeholder="MM" id="signupEmailDobMonth" required pattern="^((0?[1-9])|(1[0-2]))$" value="" data-err-req-message="Please enter a month" data-err-patn-message="Please enter valid month"/>
								<p class="tipHolder"></p>
							</div>
							<div class="control">
								<input type="text" maxlength="2" name="birthDay" placeholder="DD" id="signupEmailDobDay" required pattern="^((0?[1-9])|([1-2][0-9])|(3[0-1]))$" value="" data-err-req-message="Please enter a day" data-err-patn-message="Please enter valid day"/>
								<p class="tipHolder"></p>
							</div>
							<div class="control">
								<input type="text" maxlength="4" name="birthYear" placeholder="YYYY" id="signupEmailDobYear" required pattern="^((19[0-9][0-9])|(20[0-9][0-9]))$" value="" data-err-req-message="Please enter a year" data-err-patn-message="Please enter valid year"/>
								<p class="tipHolder"></p>
							</div>
						</div>
					</div>
					<p class="genericError tipHolder"></p>
					<input type="hidden" name="provider" value="MySpace" />
				</fieldset>
			</div>
			<footer class="formFooter">
				<div class="tos">
	<input type="checkbox" name="agreeTOS" required />
	<p>I acknowledge that I have read and accept the <a href="/pages/terms" target="_blank">Terms of Use
		Agreement</a> and consent to the <a href="/pages/privacy" target="_blank">Privacy Policy</a> and <a href="/pages/videoprivacy" target="_blank">Video Privacy Policy</a>.</p>
</div>

				<button type="submit" form="signupEmailForm" class="primary" disabled>Create Account</button>
			</footer>
		</form>
	</section>
</article><?php */?>









<?php /*?><article id="signupFacebookDialog" class="lightbox signupDialog">
	<header>
		<h1>You're almost ready...</h1>
		<p>We loaded your account with your Facebook details. Help us with just a few more questions.</p>
		<p>You can always edit this or any other info in settings after joining.</p>
	</header>
	<section>
		<form class="signupForm" id="signupFacebookForm" method="POST" action="/ajax/account/signup">
			<div>
				<aside>
					<i class="facebook facebook_170">Facebook</i>
				</aside>
				<fieldset class="errorContainer">
					<div class="control-group inline">
						<div class="control username">
							<label for="signupFacebookUsername">Username
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This is your profile URL. We based it off your Facebook details. But you can pick one that's 25 characters or less and includes a letter. Numbers, dots and dashes are ok, too.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input id="signupFacebookUsername" name="username" type="text" maxlength="25" value="" required data-err-req-message="Don't forget to pick a username." />
							<p class="tipHolder"></p>
						</div>
						<div class="control gender">
							<label for="signupFacebookGender">Gender
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This helps us keep people, musicians and brands searchable on Myspace.
		<span></span>
	</span>
</span>

</span>

							</label>
							<select id="signupFacebookGender" name="gender"  required="required" data-err-req-message="Please select your gender.">
								<option value="" selected="selected" disabled="disabled">Select one</option>
								<option value="Female">Female</option>
								<option value="Male">Male</option>
								<option value="NotApplicable">Unspecified</option>
							</select>
							<p class="tipHolder"></p>
						</div>
					</div>
					<div class="control-group inline">
						<div class="control email">
							<label for="signupFacebookEmail">Email
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Use this to log in to your account, receive notifications and get handy updates from us.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="text" id="signupFacebookEmail" name="email" required value="" data-err-req-message="Don't forget to enter an email address." />
							<p class="tipHolder"></p>
						</div>
						<div class="control password">
							<label for="signupFacebookPassword">Password
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Pick one that's hard-to-crack, only known by you, and at least 6 characters long.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="password" id="signupFacebookPassword" name="password" required data-err-req-message="Don't forget to pick a secure password."/>
							<p class="tipHolder"></p>
						</div>

					</div>
					<div class="control-group inline checkboxes">
						<div class="control">
							<label><input class="msCheckbox white left" type="checkbox" name="autoConnect" checked="checked"/><span></span> Connect me to Facebook friends and artists on Myspace
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		You may already know people on Myspace. If we find matches from your Facebook friends, we'll connect you to them right away.
		<span></span>
	</span>
</span>

</span>

							</label>
						</div>
						<div class="control">
							<label><input class="msCheckbox white left" type="checkbox" name="tellMyFriends" checked="checked"/><span></span> Tell my friends about Myspace
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Let your Facebook friends know you’re on Myspace with an update.
		<span></span>
	</span>
</span>

</span>

							</label>
						</div>
					</div>
					<p class="tipHolder"></p>
					<input type="hidden" name="token" value="" />
					<input type="hidden" name="externalId" value="" />
					<input type="hidden" name="image" value="">
					<input type="hidden" name="birthMonth" value="" />
					<input type="hidden" name="birthDay" value="" />
					<input type="hidden" name="birthYear" value="" />
					<input type="hidden" name="fullName" value="" />
					<input type="hidden" name="provider" value="Facebook" />
					
					<p class="genericError tipHolder"></p>
				</fieldset>
			</div>
			<footer class="formFooter">
				<div class="tos">
	<input type="checkbox" name="agreeTOS" required />
	<p>I acknowledge that I have read and accept the <a href="/pages/terms" target="_blank">Terms of Use
		Agreement</a> and consent to the <a href="/pages/privacy" target="_blank">Privacy Policy</a> and <a href="/pages/videoprivacy" target="_blank">Video Privacy Policy</a>.</p>
</div>

				<button type="submit" form="signupFacebookForm" class="primary" disabled>Create Account</button>
			</footer>
		</form>
	</section>
</article><?php */?>



<?php /*?><article id="signupTwitterDialog" class="lightbox signupDialog">
	<header>
		<h1>You're almost ready...</h1>
		<p>We loaded your account with your Twitter details. Help us with just a few more questions.</p>
		<p>You can always edit this or any other info in settings after joining.</p>
	</header>
	<section>
		<form class="signupForm" id="signupTwitterForm" method="POST" action="/ajax/account/signup">
			<div>
				<aside>
					<i class="twitter twitter_170">Twitter</i>
				</aside>
				<fieldset class="errorHolder">
					<div class="control-group inline">
						<div class="control username">
							<label for="signupTwitterUsername">Username
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This is your profile URL. We based it off your Twitter details. But you can pick one that's 25 characters or less and includes a letter. Numbers, dots and dashes are ok, too.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input id="signupTwitterUsername" name="username" type="text" value="" maxlength="25" required data-err-req-message="Don't forget to pick a username." />
							<p class="tipHolder"></p>
						</div>
						<div class="dob control control-group inline">
							<label for="signupTwitterDobMonth">Date of Birth
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Please enter the account owner's birth date here.
		<span></span>
	</span>
</span>

</span>

							</label>
							<p class="tipHolder"></p>
							<div class="control">
								<input type="text" maxlength="2" name="birthMonth" placeholder="MM" id="signupTwitterDobMonth" required pattern="^((0?[1-9])|(1[0-2]))$" value="" data-err-req-message="Please enter a month" data-err-patn-message="Please enter a valid month"/>
								<p class="tipHolder"></p>
							</div>
							<div class="control">
								<input type="text" maxlength="2" name="birthDay" placeholder="DD" id="signupTwitterDobDay" required pattern="^((0?[1-9])|([1-2][0-9])|(3[0-1]))$" value="" data-err-req-message="Please enter a day" data-err-patn-message="Please enter a valid day"/>
								<p class="tipHolder"></p>
							</div>
							<div class="control">
								<input type="text" maxlength="4" name="birthYear" placeholder="YYYY" id="signupTwitterDobYear" required pattern="^((19[0-9][0-9])|(20[0-9][0-9]))$" value="" data-err-req-message="Please enter a year" data-err-patn-message="Please enter a valid year"/>
								<p class="tipHolder"></p>
							</div>
						</div>
						<div class="control gender">
							<label for="signupTwitterGender">Gender
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		This helps us keep people, musicians and brands searchable on Myspace.
		<span></span>
	</span>
</span>

</span>

							</label>
							<select id="signupTwitterGender" name="gender"  required="required" data-err-req-message="Please select your gender.">
								<option value="" selected="selected" disabled="disabled">Select one</option>
								<option value="Female">Female</option>
								<option value="Male">Male</option>
								<option value="NotApplicable">Unspecified</option>
							</select>
							<p class="tipHolder"></p>
						</div>
					</div>
					<div class="control-group inline">
						<div class="control email">
							<label for="signupTwitterEmail">Email
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Use this to log in to your account, receive notifications and get handy updates from us.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="text" id="signupTwitterEmail" name="email" required value="" data-err-req-message="Don't forget to enter an email address." />
							<p class="tipHolder"></p>
						</div>
						<div class="control password">
							<label for="signupTwitterPassword">Password
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Pick one that's hard-to-crack, only known by you, and at least 6 characters long.
		<span></span>
	</span>
</span>

</span>

							</label>
							<input type="password" id="signupTwitterPassword" name="password" required data-err-req-message="Don't forget to pick a secure password."/>
							<p class="tipHolder"></p>
						</div>
					</div>
					<div class="control-group inline checkboxes">
						<div class="control">
							<label><input class="msCheckbox white left" type="checkbox" name="autoConnect" checked="checked"/><span></span> Connect me to people I follow on Twitter
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		You may already know people on Myspace. If we find matches from the people you follow on Twitter, we'll connect you to them right away.
		<span></span>
	</span>
</span>

</span>

							</label>
						</div>
						<div class="control">
							<label><input class="msCheckbox white left" type="checkbox" name="tellMyFriends" checked="checked"/><span></span> Tell my followers about Myspace
								<span class="helptip csstip">
	<b>?</b>
	
<span class="top   ">
	
	<span>
		Let your followers know you're on Myspace with a Tweet.
		<span></span>
	</span>
</span>

</span>

							</label>
						</div>
					</div>
					<p class="tipHolder"></p>
					<input type="hidden" name="token" value="" />
					<input type="hidden" name="externalId" value="" />
					<input type="hidden" name="image" value="">
					<input type="hidden" name="fullName" value="" />
					<input type="hidden" name="provider" value="Twitter" />
					
					<p class="genericError tipHolder"></p>
				</fieldset>
			</div>
			<footer class="formFooter">
				<div class="tos">
	<input type="checkbox" name="agreeTOS" required />
	<p>I acknowledge that I have read and accept the <a href="/pages/terms" target="_blank">Terms of Use
		Agreement</a> and consent to the <a href="/pages/privacy" target="_blank">Privacy Policy</a> and <a href="/pages/videoprivacy" target="_blank">Video Privacy Policy</a>.</p>
</div>

				<button type="submit" form="signupTwitterForm" class="primary" disabled>Create Account</button>
			</footer>
		</form>
	</section>
</article><?php */?>

		

        <?php /*?><div id="videoPlayer" class="tooltip">
    <div>
        <button class="close x_18_border noStyle" data-action="close"></button>
        <button class="expand expandBtn" data-action="expand-overlay"></button>
        <button class="showCCBtn" data-action="show-closedCaptions" rel="tooltip" data-original-title="Closed Captioning is off" data-tip-class="closedCaptioningTip" data-placement="bottom" data-tip-name="ccDescription"></button>
	    <button class="expand expandOverlayBtn" data-action="expand"></button>
        <button class="ad-play-btn play_25 playBtn" data-action="pauseAd"></button>
        <button class="ad-skip-btn noStyle" data-action="skipAd"><span>Skip ad<em></em></span><i class="next_24"></i></button>
        <div class="loading"></div>
	    <div class="liveLabel"></div>
	    <div class="dynamicUI"></div>
        <div class="cover" data-action="click"></div>
	    <div class="liveStreamInfo"><div class="date"><div class="day"></div><div class="month"></div></div><div class="title"></div></div>
    </div>
    <span class="close-lightbox">
        <div class="tip left in info">
            <div class="tip-arrow"></div>
            <div class="tip-inner">Press esc to close.</div>
        </div>
        <i class="lbox close_18">Close</i>
    </span>
    

<aside class="videoRailContainer">
	
</aside>
</div><?php */?>
    </div>
    
    
    
    
    
    
    
    <footer id="footer" class="paused noStations queue signedOut allowSkips">
	<?php /*?><div id="messageBar">
    <div id="messagePopout" class="popout">
	<header>
        <span>Send a message</span>
        <div class="actionBar"><i class="close close_12_green"></i></div>
    </header>
	<section>
        <form>
            <div>
                <div class="search">
                    <input type="text" name="search" placeholder="Type friend's name" name="user">
                    <i class="search_12"></i>
                </div>
                <div class="message">
                    <textarea name="message" placeholder="Send a message (optional)"></textarea>
                    <div class="messageMedia dotted top"></div>
                </div>
            </div>
            <footer>
                <button type="submit" class="primary">SEND</button>
            </footer>
            <input type="hidden" name="recipient" value="" />
            <input type="hidden" name="media" value="" />
        </form>
	</section>
</div>
</div><?php */?>
	











<div id="global" class="bottom_nav_space"></div>
    
    
    
    	
<?php /*?><div id="drawer" class="" data-tour-id="dragdropmode" data-panel="queue">
	<header>
		<button id="pin" class="myspaceTip" data-name="pin" data-action="pin" data-tip-vertical-placement="top"><i class="pin_16"></i></button>
        <div class="toggles">
	        
        </div>
		<ul id="switcher" data-tour-id="queueandmixarea">
			<li><a href="#" data-action="queue"><i class="queue_10"></i>Queue</a></li><li><a href="#" data-action="mixes"><i class="mixes_10"></i>Mixes</a></li><li><a href="#" data-action="radio"><i class="radio_11"></i>Radio</a></li>
		</ul>
		<span class="dropNote">Drop music and videos into the areas below</span>
	</header>
	<div>
		<section id="message"><span></span></section>
		<section id="queue">
	<div class="options">
		
		<button id="clear_queue" rel="tooltip" data-original-title="Clear Queue" data-tip-class="footertip" data-tip-name="clear_queue" data-position="right"><i class="clear_13"></i></button>
	</div>

	<div class="horizontal">
		<div id="station">
			<img src="https://x.myspacecdn.com/new/common/images/album.png">
			<h6><a href="#">Radio</a></h6>
			<span>Radio</span>
		</div>

		<ul class="queue list">
			<li class="video selected" draggable="true">
	
		<img src="https://a3-images.myspacecdn.com/images04/3/6b4323d5314f4a379fe6dd7e9cb59187/300w.jpg">
	
	<div class="info">
		
			<h6><a href="/myspace/video/the-tontons-lonely-live-/109480352" title="The Tontons - Lonely [LIVE]">The Tontons - Lonely [LIVE]</a></h6>
			<a href="/myspace/music" title="Myspace">Myspace</a>
		
	</div>
	
		<div class="controls">
			
				<button class="playBtn play_25 video" data-type="video" data-media-type="video" data-media-id="109480352" data-media-release-id="112148442" data-entity-key="video_109480352" data-title="The Tontons - Lonely [LIVE]" data-description="The Houston indie band—and our latest ONETWOWATCH artist—ventures under the bridge and along the shores of Galveston, Texas, to perform this lush track from their upcoming debut LP, ‘Make Out King and Other Stories of Love.’" data-duration="184" data-formatted-duration="3:04" data-stream-url="rtmpe://fms-videos.myspacecdn.com/;mp4:videos01/6/e7b39c7aa17345a58ae55c0325ec86d7/vid.mp4" data-is-explicit="false" data-artist-id="49696301" data-artist-name="Myspace" data-image-url="https://a3-images.myspacecdn.com/images04/3/6b4323d5314f4a379fe6dd7e9cb59187/300w.jpg" data-uid="679b7e69-6e9e-473e-b731-b49bafe402a2" data-sequence-id="1" data-detail-url="/myspace/video/the-tontons-lonely-live-/109480352" data-artist-url="/myspace/music" data-source-entity-key="" data-private="false" data-embed-url="/play/video/the-tontons-lonely-live-109480352-112148442" data-is-premium="false" data-embed-type="InlinePlayable" data-hls-stream-url="https://myspaceidev-f.akamaihd.net/i/videos01/6/e7b39c7aa17345a58ae55c0325ec86d7/,cell,3g,wifi,.mp4.csmil/master.m3u8?hdnea=st=1387312837~exp=1387326837~acl=/*~hmac=5dc043737c012fce3876f9836b8e03f24af17ed652a30a2b8cc69330c1d33a2c" data-ads-prohibited="false" data-artist-username="myspace" data-is-full-length="true"></button>
			

	        
	            <button class="expand expandOverlayBtn" data-action="expand"></button>
	        

	        
	        	<div class="connectButton tooltips" data-is-connected="false" data-id="109480352" data-entity-key="video_109480352" data-uid="679b7e69-6e9e-473e-b731-b49bafe402a2" data-radio-station-entity-key="" data-title="The Tontons - Lonely [LIVE]" data-artist-id="49696301" data-area="video" data-type="video" data-media-release-id="112148442" data-image-url="https://a3-images.myspacecdn.com/images04/3/6b4323d5314f4a379fe6dd7e9cb59187/300w.jpg" data-owner="Myspace" data-release-entity-key="videorelease_112148442" data-is-live-stream="false" data-user-entity-key="profile_49696301"> <span></span><span></span></div>
	        

			<button class="noStyle remove x_18_border" data-action="remove"></button>
		</div>
	
	
</li>
		</ul>
		<ul class="radio list">
			
		</ul>
		<ul class="preview list"></ul>
		<ul class="liveStream list">
			
		</ul>
	</div>

	
		<div class="signedOutMessage">
			<span>This is your queue. Just start typing to find music. <a href="/signin" data-action="signin" data-prompt-action="signInQueueDrawer">Sign in</a> to play.</span>
		</div>
	
</section>
		<section id="mixes">
	<div class="horizontal">
		<ul class="list">
			<li class="util" data-dest="playNext">
				<i class="playNext_47"></i>
				<div>
					<h6>Play Next</h6>
				</div>
			</li>
			<li class="util" data-dest="playLast">
				<i class="playLast_47"></i>
				<div>
					<h6>Play Last</h6>
				</div>
			</li>
			<li class="util radio" data-dest="radio">
				<i class="radio_34"></i>
				<div>
					<h6>Start Radio</h6>
				</div>
			</li>
			
			
			<li class="util newMix" data-dest="createMix">
				<i class="newMix_50"></i>
				<div>
					<h6>New Mix</h6>
				</div>
			</li>
			
		</ul>
	</div>

	
		<div class="signedOutMessage">
			<span>Create a mix. <a href="/signin" data-action="signin" data-prompt-action="signInMixesDrawer">Sign in</a> to start building your own.</span>
		</div>
	
</section>
        
		<section id="radio">
	
		<div class="signedOutMessage">
			<span><a href="/signin" data-action="signin" data-prompt-action="signInRadioDrawer">Sign in</a> to listen to Myspace radio.</span>
		</div>
	
</section>
        
		
		<button class="noStyle flipper leftFlipper"><i class="arrow_left_25"></i></button>
		<button class="noStyle flipper rightFlipper"><i class="arrow_right_25"></i></button>
	</div>
</div><?php */?>
	

<nav id="links">
	
    
<?php /*?>     <a href="/pressroom">Press Room</a>
    &middot; <a href="/pages/privacy" target="_blank">Privacy</a>
	&middot; <a href="/pages/terms" target="_blank">Terms</a><?php */?>
	
Copyright &copy; 2013 Icarus Enterprises, Inc.  <a href="#">About Us</a> | <a href="#">People</a> | <a href="#">Advertise</a> | <a href="#">Contact</a>
    
<?php /*?>         <a class="moreLink"><span>|</span> More </a>
          <a  class="closeLink hidden"> Close </a>  <?php */?>
    
</nav>

</footer>
    
		
<?php /*?>
<div id="moreFooterOverlay"></div>
<div id="moreFooter">
	<div class="moreFooterCol">
		<h4>Discover </h4>
		
			<p><a href="/discover/songs"> Listen to New Songs on Myspace</a></p>
		
			<p><a href="/discover/videos"> Watch New Music Videos on Myspace</a></p>
		
			<p><a href="/discover/mixes"> Listen to New Playlists on Myspace</a></p>
		
			<p><a href="/discover/albums"> Listen to New Albums on Myspace</a></p>
		
			<p><a href="/discover/radio"> Listen to Popular Online Radio Stations</a></p>
		
			<p><a href="/discover/artists"> Find New Artists &amp; DJs on Myspace</a></p>
		
	</div>
	<div class="moreFooterCol">
		<h4>Discover features </h4>
		
			<p><a href="/discover/trending/2013/12/16/new-music-tuesday-albums-mac-millers-live-from-space/">New Music Tuesday: Mac Miller, Ariana Grande, Lorde, Anchorman 2</a></p>
		
			<p><a href="/discover/trending/2013/11/27/everybody-loves-a-list-the-50-best-cassette-tapes-of-2013/">50 Best Albums of 2013 on Cassette</a></p>
		
			<p><a href="/crwn/video/crwn-x-r.-kelly-ep.-1-black-panties-mcdonald-s-and-lady-gaga/109479861/">CRWN ft. R. Kelly</a></p>
		
			<p><a href="/discover/trending/2013/12/03/25-best-selfies-of-2013-list/">The Best Selfies of 2013: Beyonce, Kim K., Bieber, MObama</a></p>
		
			<p><a href="/discover/trending/2013/12/12/myspace-x-2013-the-year-in-review/">The Best of 2013: Music, Pop Culture, Kanye, Selfies Lorde &amp; Beyonce </a></p>
		
			<p><a href="/discover/trending/2013/12/04/throwback-thursday-britney-spears-album-deep-cuts/">Britney Spears 10 Best Tracks That Were Never On the Radio</a></p>
		
	</div>
	<div class="moreFooterCol">
		<h4>&nbsp;</h4>
		
			<p><a href="/myspace/video/in-the-woods-the-making-of-run-the-jewels/109478120/">The Drug-Fueled Making of Run the Jewels</a></p>
		
			<p><a href="/discover/trending/2013/12/13/beyonce-20-creatives-you-dont-know-who-worked-on-her-new-album/">Beyonce's Album: The 20 Creatives Who Will Blow Your Mind</a></p>
		
			<p><a href="/discover/trending/2013/12/13/beyonces-new-album-saturdays-with-speak/">Beyonce’s New Album Is a Perfect Christmas Miracle</a></p>
		
			<p><a href="/discover/trending/2013/12/06/jenni-rivera-remembered-the-chiquis-rivera-interview/">Jenni Rivera Exclusive Interview with daughter, Chiquis</a></p>
		
			<p><a href="/discover/trending/2013/12/06/100-best-deep-cuts-of-2013-list/">100 of 2013's Best Buried Tracks</a></p>
		
			<p><a href="/discover/trending/2013/11/26/canon-ballin-the-pharrell-collection-1989-1994">Read About Every Track Pharrell Has Ever Touched Right Here</a></p>
		
	</div>

</div><?php */?>

	
<?php /*?>	<div id="lightboxCover" class="hide">
<div class="close">
	<div class="tip left in info">
		<div class="tip-arrow"></div>
		<div class="tip-inner">Press esc to close.</div>
	</div>
	<i class="lbox close_18">Close</i>
</div>
</div>
<div id="dialogCover" class="hide"></div><?php */?>

	

<?php /*?><div class="superpost lightbox   " id='superpostDialog'  >
	<form action="/ajax/stream/superpost" method="POST" name="superpost_form" >
		<div>
		
		<div class="postControl">
	
		<div placeholder="What's the latest?"    contenteditable="true" class="textarea"></div>
	
</div>

		<aside class="dotted top">
			<div class="superpost_selectedLink"></div>
			<ul class="attachments">
				<li class="song dotted right">
                    <i class="post_song"></i>
					<p>
						<input type="text" autocomplete="off" name="superpost_song" class="superpost_song" placeholder="Add a song">
						<i class='x_14'>remove</i>
					</p>
					<div class="superpost_shareContainer slat medium"></div>
				</li>
				<li class="photo dotted right">
                    <i class="post_photo"></i>
					<p>
						<button type="button">Upload Photo</button>
					</p>
					<div class="superpostPhotoUploader" >
						<input name="superpostPhotoFile" id="superpostPhotoFile" type="file" title="Select a photo to upload" size="1" />
						
						<div class="photoUploadDropdown">
							<button type="button" data-action="webcam">Camera <span class="new">new</span></button>
							<span>
								File Upload
								<input name="superpostPhotoFile" type="file" title="Select a photo to upload" size="1" />
							</span>
						</div>
						
					</div>
				</li>
                
                <li class="video dotted right">
                    <i class="post_video"></i>
					<p>
						<button type="button">Upload Video</button>
					</p>
					<div class="superpostVideoUploader" >
						<input name="superpostVideoFile" id="superpostVideoFile" type="file" title="Select a video to upload" size="1" />
					</div>
				</li>
                
				<li class="location">
					<i class="post_location"></i>
					<p>
						<input type="text" autocomplete="off" class="superpost_location" name="superpost_location" placeholder="Add Location">
						<i class='x_14'>remove</i>
					</p>
				</li>
			</ul>
		</aside>
		</div>
		<p class="error"></p>
	</form>
	<footer>
		<button type="button" class="primary">Post</button>

		
			<ul class="thirdParties">
				
					<li class="superpostFacebook" data-provider="facebook" rel="tooltip" data-position="top" data-original-title="Share to Facebook"/>
				
				
					<li class="superpostTwitter" data-provider="twitter" rel="tooltip" data-position="top" data-original-title="Share to Twitter"/>
				

			</ul>
		
		<span class="postingIcon loading white"></span>
	</footer>
</div><?php */?>




	
	  <?php /*?><div class="dialog" id="webcamLoading">
	<section>
		<h3>Connecting to your webcam.</h3>
		<p>
			You may be prompted by your browser for permission.
		</p>
		<span class="loading white"></span>
	</section>
</div>

<div id="webcam">
	<section>
		<video></video>
		<canvas class="main"></canvas>
		<img class="preview" src='' />
		<ul id="filterTray">
			<li data-filter='0'>
				<canvas></canvas>
				No Filter
			</li>
			<li data-filter='1'>
				<canvas></canvas>
				Grayscale
			</li>
			<li data-filter='2'>
				<canvas></canvas>
				Sepia
			</li>
			<li data-filter='3'>
				<canvas></canvas>
				Nostalgia
			</li>
			<li data-filter='4'>
				<canvas></canvas>
				Hazy Days
			</li>
			<li data-filter='5'>
				<canvas></canvas>
				Orange
			</li>
			<li data-filter='6'>
				<canvas></canvas>
				Love
			</li>
			<li data-filter='7'>
				<canvas></canvas>
				Lomo
			</li>
		</ul>
		<footer>
			<button class="back noStyle"></button>
			<button class="shutterRelease snap noStyle"></button>
			<button class="filters noStyle">Filters</button>
		</footer>
	</section>
	<footer>
		<button class="close noStyle">Cancel</button>
		<button class="large primary button" disabled>Next</button>
	</footer>
</div>
<?php */?>	

	

<?php /*?>	<div id='popover' class='popover'></div>

	<aside id='myspaceTip' class='popover generic'>
		<header>Myspace Tip <i class="close close_12_light">close</i></header>
		<section>
			<h6></h6>
			<p></p>
		</section>
	</aside><?php */?>

	

<?php /*?>	<script>templates = {"common/views/footer/_queueItem":"<%\n\tvar id = queueItem.id ? ' id=\"' + queueItem.id + '\"' : '';\n\n\tvar classes = '';\n\n\tif (queueItem.mediaType == 'video') \n\t\tclasses += 'video ';\n\n\tif (queueItem.error)\n\t\tclasses += 'error ';\n\n\tif (queueItem.selected) {\n\t\tclasses += 'selected ';\n\t\tdelete queueItem.selected;\n\t}\n\n\tif (queueItem.classes)\n\t\tclasses += (queueItem.classes.trim() + ' ');\n\t\t\n\tclasses = classes.length ? ' class=\"' + classes.trim() + '\"' : '';\n\n\tvar draggable = queueItem.mediaType && queueItem.isLiveStream != true && queueItem.private != true ? ' draggable=\"true\"' : '';\n%><% if (queueItem.isAvailable != false || queueItem.isFreeTheTrackSong) { %><li<%- id %><%- classes %><%- draggable %>>\n\t<% if (queueItem.iconClass) { %>\n\t\t<i class=\"<%- queueItem.iconClass %>\"></i>\n\t<% } else { %>\n\t\t<img src=\"<%- queueItem.imageUrl %>\">\n\t<% } %>\n\t<div class=\"info\">\n\t\t<% if (queueItem.disableLinks) { %>\n\t\t\t<h6><span title=\"<%= queueItem.title %>\"><%= queueItem.title %></span></h6>\n\t\t\t<span title=\"<%= queueItem.type == 'radio' ? 'Radio' : (queueItem.artistName || queueItem.name) %>\"><%= queueItem.type == 'radio' ? 'Radio' : (queueItem.artistName || queueItem.name) %></span>\n\t\t<% } else { %>\n\t\t\t<h6><a href=\"<%- queueItem.url || queueItem.detailUrl %>\" title=\"<%= queueItem.title %>\"><%= queueItem.title %></a></h6>\n\t\t\t<a href=\"<%- queueItem.artistUrl %>\" title=\"<%= queueItem.artistName || queueItem.name %>\"><%= queueItem.artistName || queueItem.name %></a>\n\t\t<% } %>\n\t</div>\n\t<% if (!queueItem.disableControls) { %>\n\t\t<div class=\"controls\">\n\t\t\t<% if (queueItem.isLiveStream) { %>\n\t\t\t\t<button class=\"playBtn play_25 video\" data-type=\"video\" <%- formatter.attributify(queueItem) %>></button>\n\t\t\t<% } else { %>\n\t\t\t\t<%- play(queueItem.type == 'radio' ? 'radio' : queueItem.mediaType == 'video' ? 'video' : 'song', queueItem) %>\n\t\t\t<% } %>\n\n\t        <% if (queueItem.mediaType === 'video') { %>\n\t            <button class=\"expand expandOverlayBtn\" data-action=\"expand\"></button>\n\t        <% } %>\n\n\t        <% if (queueItem.mediaType && !queueItem.private) { %>\n\t        \t<div class=\"connectButton tooltips<%- queueItem.isConnected ? ' connected' : '' %>\" data-is-connected=\"<%- !!queueItem.isConnected %>\" data-id=\"<%- queueItem.mediaId %>\" data-entity-key=\"<%- queueItem.entityKey %>\" data-uid=\"<%- queueItem.uid %>\" data-radio-station-entity-key=\"<%- queueItem.radioStationEntityKey %>\" data-title=\"<%= queueItem.title %>\" data-artist-id=\"<%- queueItem.artistId %>\" data-area=\"<%- queueItem.mediaType == 'video' ? 'video' : 'music' %>\" data-type=\"<%- queueItem.mediaType == 'video' ? 'video' : 'song' %>\" data-media-release-id=\"<%- queueItem.mediaReleaseId %>\" data-image-url=\"<%- queueItem.imageUrl %>\" data-owner=\"<%= queueItem.artistName %>\" data-release-entity-key=\"<%= (queueItem.mediaType == 'video' ? 'videorelease_' : 'songrelease_')  + queueItem.mediaReleaseId %>\" data-is-live-stream=\"<%= (queueItem.mediaType == 'video' && queueItem.isLiveStream) ? 'true' : 'false' %>\" data-user-entity-key=\"<%- 'profile_' + queueItem.artistId %>\"> <span></span><span></span></div>\n\t        <% } %>\n\n\t\t\t<button class=\"noStyle remove x_18_border\" data-action=\"remove\"></button>\n\t\t</div>\n\t<% } %>\n\t<% if (queueItem.error) { %>\n\t\t<div class=\"error\">\n\t\t\t<i class=\"error_24\"></i>\n\t\t\t<span>Error Playing</span>\n\t\t</div>\n\t<% } %>\n</li><% } %>","areas/mixes/views/dialogs/addItemsToMix":"<form id=\"addItemsToMix\" class=\"lightbox\">\n\t<h1>Save your queue</h1>\n\n\t<div class=\"createNew\">\n\t\t<p>Create a new mix</p>\n\t\t<input type=\"text\" />\n\t\t<button type=\"submit\" class=\"primary\">Create</button>\n\t</div>\n\n\t<div class=\"or\">\n\t\t<hr><span>OR</span><hr>\n\t</div>\n\n\t<div class=\"addToExisting\">\n\t\t<p>Add to an existing mix</p>\n\t\t<ul></ul>\n\t</div>\n</form>\n","areas/mixes/views/dialogs/mixForms":"<% var mode;\nif (command === 'mix.create') {\nmode = 'create';\n} else {\nmode = 'add';\n} %>\n\n<form id=\"mixForm\" class=\"mixDialog lightbox\" >\n\t<input type=\"hidden\" name=\"objectVersion\" id=\"objectVersion\" value=\"<%= mixtape.objectVersion || '' %>\" />\n\t<input type=\"hidden\" name=\"playlistId\" id=\"playlistId\" value=\"<%= mixtape.playlistId || '' %>\"  />\n\t<input type=\"hidden\" name=\"mediaId\" id=\"mediaId\" value=\"<%= mixtape.mediaId || '' %>\" />\n\t<input type=\"hidden\" name=\"mediaType\" id=\"mediaType\" value=\"<%= mixtape.mediaType || '' %>\" />\n\t<input type=\"hidden\" name=\"releaseId\" id=\"releaseId\" value=\"<%= mixtape.releaseId || '' %>\" />\n\t<section id=\"createForm\" class=\"<%- mode == 'add' ? ' hide' : ''  %>\">\n\t\t<header>\n\t\t\t<h1 class=\"create\">Create Mix</h1>\n\t\t</header>\n\t\t<div>\n\t\t\t<div class=\"mixImage\">\n\t\t\t\t<div id=\"mixtapeImageContainer\" data-tip-text=\"The image was attached\">\n\t\t\t\t\t<div class=\"tipHolder\"></div>\n\t\t\t\t\t<img class=\"mixtapeImage\" alt=\"\" src=\"<%- mixtape.image ? mixtape.image : mixtape.emptyPlaylistImage %>\" />\n\t\t\t\t</div>\n\t\t\t\t<div id=\"mixHTMLUploader\">\n\t\t\t\t\t<input name=\"mixCoverFile\" id=\"mixCoverFile\" type=\"file\" size=\"8\" accept=\"image/*\"/>\n\t\t\t\t\t<button>Choose Image</button>\n\t\t\t\t</div>\n\t\t\t\t<p>20MB max, 1024x768 min</p>\n\t\t\t</div>\n\t\t\t<div class=\"mixInfo\">\n\t\t\t\t<div class=\"title\">\n\t\t\t\t\t<label for=\"mixTitle\">name your mix</label>\n\t\t\t\t\t<div class=\"tipHolder\"></div>\n\t\t\t\t\t<input type=\"text\" id=\"mixTitle\" name=\"title\" placeholder=\"Give your mix a name\" maxlength=\"60\" size=40 value=\"<%= mixtape.title || '' %>\" />\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"description\">\n\t\t\t\t\t<label for=\"mixDescription\">description</label>\n\t\t\t\t\t<span class=\"charCount\" data-len=\"-1\">0/600</span>\n\t\t\t\t\t<% if(context.features.isMixTagginEnable) {%>\n\t\t\t\t\t\t<div placeholder=\"Tell us about your mix\" id=\"mixDescription\" name=\"description\" contenteditable=\"true\" class=\"textarea\"><%= mixtape.description || '' %></div>\n\t\t\t\t\t<%}else{%>\n\t\t\t\t\t\t<textarea id=\"mixDescription\" name=\"description\" placeholder=\"Tell us about your mix\" size=\"40\"><%= mixtape.description || '' %></textarea>\n\t\t\t\t\t<%}%>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"privacySetting\">\n\t\t\t\t\t<input type=\"checkbox\" id=\"privacyCheck\" name=\"privacy\" value=\"1\" <% if (mixtape.visibility === 'Private'){ %>checked=\"checked\"<% } %> />\n\t\t\t\t\t<label for=\"privacyCheck\">Hide this mix from my public profile</label>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\n\t\t<footer>\n\t\t\t<% if (mode == 'add') { %>\n\t\t\t<button class=\"myMixes\">My Mixes</button>\n\t\t\t<% } %>\n\t\t\t<a class=\"cancel\">Cancel</a>\n\t\t\t<button class=\"create primary\">Create Mix</button>\n\t\t</footer>\n\t</section>\n\t<% if (mode === 'add') { %>\n\t\t<section id=\"addToSection\">\n\t\t\t<header>\n\t\t\t\t<h1>Add To Mix</h1>\n\t\t\t</header>\n\n\t\t\t<div>\n\t\t\t\t<div class=\"mixImage\">\n\t\t\t\t\t<div id=\"selectedMixImage\">\n\t\t\t\t\t\t<img class=\"hide\" alt=\"\" src=\"<%= mixtape.image ? mixtape.image : mixtape.emptyPlaylistImage %>\" />\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"mixtapeCollections\">\n\t\t\t\t\t<label for=\"myMixtapes\">Select a mix:</label>\n\t\t\t\t\t<select id=\"myMixtapes\" name=\"myMixtapes\"></select>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<footer>\n\t\t\t\t<button class=\"createMixAndAdd\">Create New Mix</button>\n\t\t\t\t<a class=\"cancel\">Cancel</a>\n\t\t\t\t<button class=\"save primary\">Add</button>\n\t\t\t</footer>\n\t\t</section>\n\t<% } %>\n</form>\n\n","areas/music/views/radioDialog":"<form id=\"radioDialog\" class=\"lightbox\">\n\t<header>\n\t\t<h1>Search radio</h1>\n\t\t<div>\n\t\t\t<span>Not sure what to play?</span>\n\t\t\t<a href=\"/discover/radio\">Why not browse our radio stations »</a>\n\t\t</div>\n\t</header>\n\n\t<div class=\"search\">\n\t\t<h3>Search for a genre</h3>\n\t\t<input type=\"text\" />\n\t\t<div>\n\t\t\t<ul class=\"genres\"></ul>\n\t\t\t<ul class=\"results\"></ul>\n\t\t</div>\n\t</div>\n</form>\n","areas/music/views/media/_songSquare":"<%\n\tvar songLink = '#',\n\t\ttoolTipAttribute = \"\";\n\n    if(songSquare.songUrl){\n\t\tsongLink = songSquare.songUrl;\n\t} else {\n\t\tsongLink = songSquare.song.url;\n\t}\n\n    if(songSquare.size == 'small' || songSquare.size == 'medium'){\n\t\ttoolTipAttribute = \"rel='tooltip'\" ;\n\t}\n\n\tvar classes = \"song mediaSquare\";\n\tif(songSquare.size) {\n\t\tclasses += \" \" + songSquare.size;\n\t}\n\tif(songSquare.inline){\n\t\tclasses += \" inline\";\n\t}\n\n%>\n\n<div class=\"<%- classes %>\" data-mediaid=\"<%- songSquare.song.songId %>\" data-mediatype=\"Audio\" draggable=\"true\">\n    <a href=\"<%- songLink %>\" data-original-title=\"<%= songSquare.song.title %> - <%= songSquare.song.artistName %>\"  <%= toolTipAttribute %> >\n        <%- play('song', songSquare.song) %>\n        <% if (songSquare.size != 'medium' && songSquare.size != 'small' && typeof(connect) != 'undefined') { %>\n        <%- connect('song', songSquare.song, songSquare.connections || locals.connections) %>\n        <% } %>\n        <img src=\"<%- songSquare.song.imageUrl %>\" />\n        <% if (songSquare.song.isExplicit && songSquare.size !== 'small') { %>\n        <span class=\"explicit\">EXPLICIT</span>\n        <% } %>\n    </a>\n\n    <% if(!songSquare.hideMetaInfo){%>\n        <div class=\"<%- songSquare.metaInfoClass %>\">\n            <h6>\n                <a href=\"<%- songLink %>\"><%= songSquare.song.title %></a>\n                <% if(songSquare.song.isExplicit && songSquare.size === 'small') { %><i class=\"explicit_10\">Explicit</i> <% } %>\n            </h6>\n            <%- songSquare.song.artistDisplayText %>\n        </div>\n    <%}%>\n</div>","areas/music/views/media/_albumSquare":"<%\n\tvar albumLink = '#', artistLink = '#', toolTipAttribute = \"\", albumImageUrl = albumSquare.album.imageUrl;\n\n    if(albumSquare.albumUrl){\n        albumLink = albumSquare.albumUrl;\n    } else {\n\t\talbumLink = albumSquare.album.albumUrl;\n\t}\n\n    if(albumSquare.artistLink){\n        artistLink =albumSquare.artistLink\n    }else if(albumSquare.album.artistId && typeof(links) != 'undefined') {\n\t\tartistLink = albumSquare.album.artistUrl;\n\t}\n\n\tif(albumSquare.size == 'small' || albumSquare.size == 'medium'){\n\t    toolTipAttribute = \"rel='tooltip'\";\n        if(!albumSquare.showMetaInfo) albumSquare.showMetaInfo = \"none\";\n\t}\n\n\tvar classes = \"album mediaSquare\";\n\tif(albumSquare.size) {\n\t\tclasses += \" \" + albumSquare.size;\n\t}\n\tif(albumSquare.inline){\n\t\tclasses += \" inline\";\n\t}\n\n    if(!albumSquare.notUseCommonHelper && (albumSquare.size == 'small' || albumSquare.size == 'medium'))\n    {\n        albumImageUrl  = common.helpers.albumImage(albumSquare.album, '70x70');\n    }\n%>\n<div class=\"<%- classes %>\" data-mediaid=\"<%- albumSquare.album.albumId %>\"  data-entitykey=\"<%- albumSquare.album.entityKey%>\" data-radiostationentitykey=\"<%- albumSquare.album.radioStationEntityKey%>\"  data-mediatype=\"Album\" itemscope itemtype=\"http://schema.org/MusicAlbum\" draggable=\"true\">\n\t<meta itemprop=\"url\" content =\"<%= albumLink %>\">\n\t<a href=\"<%= albumLink %>\"  data-original-title=\"<%= albumSquare.album.title %> - <%= albumSquare.album.artistName %>\" <%= toolTipAttribute %>>\n\t\t<%- play('album', albumSquare.album) %>\n\t\t<% if (albumSquare.size != 'medium' && albumSquare.size != 'small' && typeof(connect) != 'undefined') { %>\n\t\t\t<%- connect('album', albumSquare.album, albumSquare.connections || locals.connections) %>\n\t\t<% } %>\n\n\n\t\t<img itemprop=\"image\" src=\"<%-  albumImageUrl || 'http://cms.myspacecdn.com/cms/Music%20Vertical/Common/Images/default_large.jpg' %>\" />\n\t\t<% if (albumSquare.album.isExplicit && albumSquare.size !== 'small') { %>\n\t\t\t<span class=\"explicit\">EXPLICIT</span>\n\t\t<% } %>\n\t</a>\n\n\t<!-- Album Meta Info - Regular -->\n\t<% if(!(albumSquare.showMetaInfo && (albumSquare.showMetaInfo == \"none\" || albumSquare.showMetaInfo == \"extended\"))) { %>\n\t\t<div class=\"<%- albumSquare.metaInfoClass %>\">\n\t\t\t<h6>\n                <a href=\"<%= albumLink %>\" itemprop=\"name\"><%= albumSquare.album.title %></a>\n                <% if (albumSquare.album.isExplicit && albumSquare.size === 'small') { %><i class=\"explicit_10\">Explicit</i> <% } %>\n            </h6>\n\t\t\t<% if (albumSquare.album.artistId) { %>\n\t\t\t\t<a href=\"<%= artistLink %>\" itemprop=\"byArtist\"><%= albumSquare.album.artistName %></a>\n\t\t\t<% } else { %>\n\t\t\t\t<%- albumSquare.album.artistId %>\n\t\t\t<% } %>\n\t\t</div>\n\t<% } %>\n\n</div>\n\n<!-- Album Meta Info - Extended Info -->\n<% if(albumSquare.showMetaInfo && albumSquare.showMetaInfo == \"extended\") { %>\n\t<div class=\"extended\">\n\t\t<dl>\n\t\t\t<dt>Released</dt>\n\t\t\t<dd><%- formatter.date(albumSquare.album.releaseDate, \"mmm dd, yyyy\") %></dd>\n\n\t\t\t<dt>Recorded</dt>\n\t\t\t<dd><%- formatter.date(albumSquare.album.releaseDate, \"yyyy\") %></dd>\n\n\t\t\t<% if(albumSquare.album.genreName && albumSquare.album.genreName.length > 0) { %>\n\t\t\t\t<dt>Genre</dt>\n\t\t\t\t<dd><%= albumSquare.album.genreName %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.displayLabel && albumSquare.album.displayLabel.length > 0) { %>\n\t\t\t\t<dt>Label</dt>\n\t\t\t\t<dd><%= albumSquare.album.displayLabel %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.tones && albumSquare.album.tones.length > 0) { %>\n\t\t\t\t<dt>Moods</dt>\n\t\t\t\t<dd><%- albumSquare.album.tones.join(\", \") %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.styles && albumSquare.album.styles.length > 0) { %>\n\t\t\t\t<dt>Styles</dt>\n\t\t\t\t<dd><%- albumSquare.album.styles.join(\", \") %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.themes && albumSquare.album.themes.length > 0) { %>\n\t\t\t\t<dt>Themes</dt>\n\t\t\t\t<dd><%- albumSquare.album.themes.join(\", \") %></dd>\n\t\t\t<% } %>\n\t\t</dl>\n\t</div>\n<% } %>","common/views/generic/postcontrol":"<div class=\"postControl\">\n\t<%if((context.features.isMentionProfileEnabled || locals.enableMentions) && !locals.disableMentions) { %>\n\t\t<div placeholder=\"<%= locals.placeholder || \"\" %>\" <%- locals.id ? \"id='\" + locals.id + \"'\" : '' %> <%= locals.name ? \"name='\" + locals.name + \"'\" : '' %> <%- locals.readonly ? \"readonly='readonly'\" : \"\" %> contenteditable=\"true\" class=\"textarea\"><%= locals.text || \"\"%></div>\n\t<% } else { %>\n\t\t<textarea placeholder=\"<%= locals.placeholder || \"\" %>\" <%- locals.id ? \"id='\" + locals.id + \"'\" : '' %> <%= locals.name ? \"name='\" + locals.name + \"'\" : '' %> <%- locals.readonly ? \"readonly='readonly'\" : \"\" %> ><%= locals.text || \"\"%></textarea>\n\t<% } %>\n</div>\n","common/views/generic/superpost/_song":"<% locals.forEach(function(song) { %>\n<li data-id='<%= song.songId %>' data-entity-key='<%= song.entityKey %>'>\n    <%if(song.imageUrl) { %>\n\t\t<img src='<%= song.imageUrl %>' /> \n\t<% } %>\n\t<div <%= song.nowPlaying ? \"class='currentSong'\" : \"\" %>>\n\t\t<%if(song.nowPlaying){%><strong>Current Song</strong><%}%> \n\t\t<h6><%= song.title %></h6><p><%= song.artistName %></p>\n\t</div>\n</li>\n<%})%>\n","common/views/generic/superpost/_location":"<% locals.forEach(function(item) { %>\n<li data-entity-key='<%= item.entityKey %>' data-id='<%= item.locationId %>'>\n    <%= item.locationNameWithHierarchy %>\n    </li>\n<% }) %>\n","common/views/generic/superpost/_share":"<% if(locals.type === 'profilestatus'){ %>\n\t<div class=\"imageFrame profilestatus\">\n\t\t<p><%- locals.title %></p>\n\t\t<%if (locals.owner) { %>\n\t\t\t<h6><%= locals.owner %></h6>\n\t\t<% } %>\n\t</div>\n\t<div>\n\t\t<i class='x_14'>remove</i>\n\t</div>\n<%}else{%>\n\t<% if (locals.imageUrl) { %>\n\t\t<%if (locals.inline) { %>\n\t\t<div class=\"imageFrame<%- locals.imageUrl.indexOf(',') > -1 ? ' collage' : '' %>\">\n\t\t\t<% locals.imageUrl.split(',').forEach(function(image){ %>\n\t\t\t<img src='<%= image %>' />\n\t\t\t<% }); %>\n\t\t</div>\n\t\t<% } else {%>\n\t\t<img src='<%= locals.imageUrl %>' />\n\t\t<% } %>\n\t<% } %>\n\t<div>\n\t\t<%if (locals.inline) { %>\n\t\t<p>\n\t\t\t<strong><%= locals.title %></strong><%if (locals.owner) { %> - <%= locals.owner %> <% } %>\n\t\t\t<i class=\"x_14\"></i>\n\t\t</p>\n\t\t<% } else { %>\n\t\t<h6><%= locals.title %></h6>\n\t\t<%if (locals.owner) { %>\n\t\t\t<p><%= locals.owner %></p>\n\t\t<% } %>\n\t\t<% } %>\n\t\t<i class='x_14'>remove</i>\n\t</div>\n<%}%>\n","common/views/generic/superpost/_linkpreview":"<% var hasImage = locals.images && locals.images.length > 0 || 0;%>\n<div class=\"linkPreviewer processing\">\n\t<% if(hasImage) { %>\n\t<div class=\"loading white linkImage\">\n\t</div>\n\t<%}%>\n\t<div class=\"linkDetails\">\n\t\t<p contenteditable=\"true\" class=\"linkTitle\"><%= locals.title || \"\" %></p>\n\t\t<p title=\"<%= locals.url %>\" class=\"linkUrl\"><%= locals.hostName || \"\" %></p>\n\t\t<% if(hasImage) { %>\n\t\t<p class=\"linkThumbnailOption\">\n\t\t\t<i class=\"arrow_left_16_dark disabled\"></i>\n\t\t\t<i class=\"arrow_right_16_dark\"></i>\n\t\t\t<span class=\"preview_count\"></span>\n\t\t\t<span>Choose a Thumbnail</span>\n\t\t</p>\n\t\t<p class=\"linkNoThumbnail\">\n\t\t\t<label>\n\t\t\t\t<input type=\"checkbox\" /> <span></span>No Thumbnail\n\t\t\t</label>\n\t\t</p>\n\t\t<% } %>\n\t</div>\n</div>\n","common/views/generic/superpost/_mention":"<% var isPublicProfileList = false; %>\n<% locals.forEach(function(mention, index) { %>\n<% if(!mention.connected && !isPublicProfileList) {\n\t\tisPublicProfileList = true; %>\n\t<% if (index !== 0) { %>\n\t<li class=\"publicProfile ignore\">Also on Myspace </li>\n\t<% } %>\n<%}%>\t\t\n\t\t\n<li data-id=\"<%= mention.profileId %>\" <%-formatter.attributify(mention)%> <%- index == 0 ? 'class=\"selected\"' : '' %>>\n    <%if(mention.profileImage) { %>\n\t\t<img src=\"<%= mention.profileImage %>\" /> \n\t<% } %>\n\t<div>\n\t\t<p><strong><%= mention.fullName %></strong></p> \n\t\t<p class=\"username\"><%= mention.username %></p>\n\t</div>\n</li>\n<%})%>\n","common/views/_linkEmbedDialog":"<% var coverImages = options.imageUrl.split(','); %>\n<div>\n\t<div class=\"main\">\n\t\t<a class=\"cover<%- coverImages.length > 1 ? ' collage' : '' %>\" href=\"<%- options.url %>\">\n\t\t\t<% coverImages.forEach(function (imageUrl) { %>\n\t\t\t\t<img src=\"<%- imageUrl %>\">\n\t\t\t<% }); %>\n\t\t</a>\n\t\t<div class=\"info\">\n\t\t\t<h6><a href=\"<%- options.url %>\"><%= options.title %></a></h6>\n\t\t\t<a href=\"<%- options.artistUrl %>\"><%= options.artistName %></a>\n\t\t</div>\n\t</div>\n\t<div class=\"fields\">\n\t\t<div class=\"link\">\n\t\t\t<div class=\"field\">\n\t\t\t\t<i class=\"link_40_light\"></i>\n\t\t\t\t<i class=\"link_40_dark copied\"></i>\n\t\t\t\t<input type=\"text\" value=\"<%- options.link %>\" readonly=\"true\">\n\t\t\t</div>\n\t\t</div>\n\t\t<% if (options.iframe) { %>\n\t\t\t<div class=\"embed<%- options.resizable ? ' resizable' : ''%>\">\n\t\t\t\t<div class=\"field\">\n\t\t\t\t\t<i class=\"embed_40_light\"></i>\n\t\t\t\t\t<i class=\"embed_40_dark copied\"></i>\n\t\t\t\t\t<input type=\"text\" value=\"<%= options.iframe %>\" readonly=\"true\">\n\t\t\t\t</div>\n\t\t\t\t<% if (options.resizable) { %>\n\t\t\t\t\t<div class=\"resizer\">\n\t\t\t\t\t\t<div class=\"width\">W:<input type=\"number\" pattern=\"[0-9]*\" min=\"160\" max=\"960\" maxlength=\"3\" value=\"<%- options.size.split('x')[0] %>\"></div>\n\t\t\t\t\t\t<div class=\"height\">H:<input type=\"number\" pattern=\"[0-9]*\" min=\"90\" max=\"540\" maxlength=\"3\" value=\"<%- options.size.split('x')[1] %>\"></div>\n\t\t\t\t\t</div>\n\t\t\t\t<% } %>\n\t\t\t</div>\n\t\t<% } %>\n\t\t<% if (options.miniplayer) { %>\n\t\t\t<div class=\"miniplayer\">\n\t\t\t\t<div class=\"field\">\n\t\t\t\t\t<i class=\"embed_40_light\"></i>\n\t\t\t\t\t<i class=\"embed_40_dark copied\"></i>\n\t\t\t\t\t<input type=\"text\" value=\"<%= options.miniplayer %>\" readonly=\"true\">\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t<% } %>\n\t</div>\n\t<% if (options.iframe && options.sizeOptions) { %>\n\t\t<form class=\"size\">\n\t\t\t<ul>\n\t\t\t\t<% if (options.sizeOptions['300x90']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x90\" name=\"size\" type=\"radio\" value=\"300x90\" checked><label for=\"layout_300x90\"><div><span>300 x 90</span><i class=\"layout-300x90\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['300x423']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x423\" name=\"size\" type=\"radio\" value=\"300x423\"><label for=\"layout_300x423\"><div><span>300 x 423</span><i class=\"layout-300x423\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['300x600']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x600\" name=\"size\" type=\"radio\" value=\"300x600\"><label for=\"layout_300x600\"><div><span>300 x 600</span><i class=\"layout-300x600\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['600x300']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_600x300\" name=\"size\" type=\"radio\" value=\"600x300\"><label for=\"layout_600x300\"><div><span>600 x 300</span><i class=\"layout-600x300\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } %>\n\t\t\t</ul>\n\t\t</form>\n\t<% } %>\n</div>","areas/videos/views/shared/_videoHead":"<div>\n    <h2><%= video.title %></h2>\n    <p><a href=\"<%= video.artistUrl %>\"><%= video.artistName %></a></p>\n    <p><i class=\"plays_12\">Plays</i> <span class=\"stats\"><%= (video.stats && video.stats.AllTime) ? video.stats.AllTime : 1 %></span> plays</p>\n</div>\n<div class=\"description\">\n\t<% if (video.decoratedDescription) { %>\n    \t<%- video.decoratedDescription %>\n    <% } else { %>\n    \t<%- video.description %>\n    <% } %>\n</div>","areas/mixes/views/shared/_mixHead":"<% var imageUrl = mix.imageUrl || ''; %>\n<div class=\"mixtape mediaSquare medium<%- imageUrl.split(',').length > 1 ? ' collage' : '' %><%- mix.mediaCount > 0 ? '' : ' noMedia' %>\">\n\t<a href=\"<%= mix.url || '#' %>\">\n\t\t<%- play('mixtape', mix) %>\n\t\t<%  imageUrl && imageUrl.split(',').forEach(function(image) { %>\n\t\t\t<img src=\"<%- image %>\" />\n\t\t<% }) %>\n\t</a>\n\t<div>\n\t\t<h6> <a href=\"<%= mix.url %>\"><%= mix.title %></a></h6>\n\t\t<a href=\"<%= ('/' + mix.username) %>\"><%= mix.owner %></a>\n\t</div>\n</div>\n","areas/discover/views/shared/_articleHead":"<div>\n\t<h2><a href=\"<%- article.blogDetailUrl %>\"><%- article.title %></a></h2>\n\t<p><a href=\"<%- article.blogDetailUrl %>\"><%- article.summary %></a></p>\n</div>\n","areas/misc/views/shared/_linksRightRailHead":"<div>\n\t<h2><a href=\"<%= link.shortUrl %>\"><%= link.title %></a></h2>\n\t<p><a href=\"<%= link.shortUrl %>\"><%= link.hostName || link.linkUrl %></a></p>\n</div>\n","areas/misc/views/shared/sharePrompt":"<article id=\"sharePrompt\" class=\"dialog\">\n\t<i class=\"close x_14\">Close</i>\n\t<header>\n     \t<h2 class=\"promptText\">Share this song</h2>\n \t</header>\n\t<section>\n\t\t<p>\n\t\t\t<a href='#' class=\"msSignIn\">Sign in</a> to share on Myspace. <br />\n\t\t\tYou can also share on Facebook and Twitter.\n\t\t</p>\n\n\t\t<div>\n\t\t\t<div class=\"thirdParty\">\n\t\t\t\t<button class=\"facebook\" data-provider=\"facebook\"><i class=\"facebook_40\"></i><span>Facebook</span></button>\n\t\t\t\t<button class=\"twitter\" data-provider=\"twitter\"><i class=\"twitter_40\"></i><span>Twitter</span></button>\n\t\t\t</div>\n\t\t</div>\n\t</section>\n</article>","common/views/generic/photos/_photoCropper":"<div id=\"photoCropper\" class=\"dialog\">\n    <div class=\"header dotted\">\n        <h2>Crop Your Photo</h2>\n        <i class=\"x_18_border\"></i>\n    </div>\n\n    <div class=\"content\">\n        <p>To crop your photo, drag, resize, and adjust the position of the box.</p>\n        <div class=\"cropContainer\"></div>\n    </div>\n\n    <div class=\"footer\">\n        <button class=\"cancel\">Cancel</button>\n        <button class=\"primary save\">Save</button>\n    </div>\n</div>","common/views/footer/messages/_message":"<div class=\"messageGroup <%- locals.isSelf ? 'self' : '' %>\" data-influencer=\"<%- locals.profileId %>\">\n\t<a <% if(locals.username) { %>href=\"/<%- locals.username %>\"<%}%> class=\"sender\" data-show-presence=\"true\" data-profile-id=\"<%- locals.profileId %>\">\n\t\t<img src=\"<%- locals.imgUrl %>\" />\n\t</a>\n\t<div class=\"message\">\n\t\t<div>\n\t\t\t<% if(locals.bodyText) { %><span><%= locals.bodyText %></span><% }%>\n\t\t\t<% if(locals.mediaHtml) { %><div class=\"messageMedia\"><%- locals.mediaHtml %></div><% } %>\n\t\t\t<time data-datetime=\"<%- locals.timestamp %>\"></time>\n\t\t</div>\n\t</div>\n</div>","common/views/footer/messages/_typing":"<div class=\"messageGroup typingIndicator\">\n\t<div class=\"sender presence online\">\n\t\t<img src=\"<%- locals.imgUrl %>\" />\n\t</div>\n\t<div class=\"message typing\">\n\t\t<div>\n\t\t\t<div class=\"typing loading white\"></div>\n\t\t</div>\n\t</div>\n</div>","common/views/footer/messages/_thread":"<li class=\"<%- thread.selected ? 'selected ' : '' %><%- thread.unseenCount > 0 ? 'unread' : '' %>\" data-conversation-id=\"<%- thread.conversationId %>\" data-url=\"<%= thread.url || ('/messages/' + thread.conversationId) %>\" data-last-item-id=\"<%- thread.lastItemId %>\" data-profile-id=\"<%- thread.otherParticipantProfileId || (thread.participants.length && thread.participants[0].profileId) || 0 %>\">\n\t<div class=\"media size_60 inline presence\" data-show-presence=\"true\" data-profile-id=\"<%- thread.otherParticipantProfileId || (thread.participants.length && thread.participants[0].profileId) || 0 %>\">\n\t\t<a class=\"profileLink\" href=\"/<%-(thread.username || thread.participants.length && (thread.participants[0].username || thread.otherParticipantProfileId || (thread.participants[0].profileId != 0 ? thread.participants[0].profileId : ''))) %>\">\n\t\t\t<img src=\"<%- thread.images[0] %>\" alt=\"\" />\n\t\t</a> \n\t\t<div class=\"nameplate\">\n\t\t\t<h6><%= thread.headline || (thread.participants.length && thread.participants[0].fullName) %></h6>\n\t\t\t<p><%= thread.lastMessage %></p>\n\t\t\t<time data-datetime=\"<%- thread.lastUpdated %>\"></time>\n\t\t</div>\n\t</div>\n\t<i class=\"more_22 threeDots\"></i>\n\t<i class=\"popout_11 openInConversation\"></i>\n</li>\t"};<?php */?>
	
	
	
	
<?php /*?>	
context = {"text":{},"uuid":"09390a56-bfe4-4610-a4ab-b82cde3d0106","profileId":-1,"loginId":-1,"realtime":{"serverUrl":"/realtime","enableWebSockets":true,"subscriptions":{}},"searchOverlay":{"delay":150,"minimumQueryLength":2,"enterKeySubmits":false},"termsOfService":{"showTOSBOX":false},"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246274,"assignedExperiments":null,"hashMashter":"YjE1Y2ZiNjQ5YTAyMDc1MMOVw6M5w5YLw7TCrMO+w6HDosOZZXjDssOBwoM4w6QiIE8gw7UEwq3DtcKCwrAvw53DhMKGw53Cl8OgwoXDqsKFdMKDwqXDmsKLw5HCqMKBwpXDomEOcCV3UMOaMRPDvh7CosKrw7fDvlBeMAgWw4xadjDDqMKERsKRwpkHJcOKF8Oow5V+wqLCqsK4w50kwrp2NcK5wo15NXvCq8Osw7U9FDzDqMKBVcO/w7LCisK/wrs3","features":{"isMessagingEnabled":true,"isMessagingToStrangerEnabled":true,"isOfflineMessagingEnabled":true,"isRadioEnabled":true,"isRealtimeEnabled":true,"isSearchEnabled":true,"isMentionProfileEnabled":true,"isPostTaggingEnabled":false,"isLinkScrapeEnabled":true,"isVideosPostEnabled":true,"isVideosExternalPostEnabled":true,"isRenderPresenceEnabled":true,"isPlayerQueueSortable":true,"isPostInEnable":true,"isShareIsEnable":true,"isOffSiteEmbedsEnabled":true,"isMixTagginEnable":true,"isLikeEnable":true,"isVideoDescriptionTaggingEnabled":false,"isPageviewBeaconV3Enabled":true,"isPlayerBeaconV3Enabled":true,"isPhotoViewBeaconV3Enabled":true,"isWebcamEnabled":true,"isSignUpEnabled":true,"isSignInEnabled":true,"isAdPerformanceBeaconEnabled":true,"isPlayerErrorBeaconEnabled":true,"isComScoreEnabled":false,"isComScoreVideoPlayEnabled":true},"showVerifyEmailBox":false,"displayProfileId":82156885,"adsProhibited":false,"artistId":49696301,"pfc":"PhotoDetail","photos":[













<?php $counter = 0;?>
<?php $total_count = count($gallerydata);?>
<?php foreach( $gallerydata as $galleryslide ) : ?>



{"entityKey":"image_profile_82156885_80102862","imageId":80102862,"relatedEntityKey":"playlist_profile_82156885_352456","playlistId":352456,"albumId":10314151,"albumIdIndex":<?php echo $counter; ?>,"albumIdTotalCount":<?php echo $total_count;?>,"urls":[{"name":"full","url":"<?php echo base_url();?>/uploads/image-gallery/<?php echo $galleryslide["Slide_Src_File"]; ?>","height":575,"width":533}],"mixTitle":"<?php echo $galleryslide["Slide_Title"]; ?>","width":533,"height":575,"type":"photo","animated":true,"private":false},

<?php $counter++; ?>
<?php endforeach; ?>


],"currentPhotoIndex":0,"playlistId":352456,"profileImageId":658807,"coverImageId":-1,"messaging":{},"playInitialAd":false,"playInitialAdLocationId":162804,"ads":{"msd":"2:2:aXB2RLjZzsECInsCKuCqX4mlfTtfg_doYhWTrNmZX1A_Ms5ixZUzUo50cCsvEroPlvhLSi6IU5-4E-FM-e_UZw"},"beaconData":{"dsid":2,"dsv":1,"pggd":"09390a56-bfe4-4610-a4ab-b82cde3d0106","pageId":"09390a56-bfe4-4610-a4ab-b82cde3d0106","vgd":"7e6d09df-6ec6-4304-94db-c8f5006f29fc","visitId":"7e6d09df-6ec6-4304-94db-c8f5006f29fc","isnv":0,"lid":-1,"currentUserLoginId":null,"llid":-1,"lastLoginId":null,"lltime":"1970-01-01T00:00:00.000Z","lastLoginUtcDateTime":"1970-01-01T00:00:00.000Z","prid":-1,"currentUserProfileId":null,"lprid":-1,"lastProfileId":null,"tprid":82156885,"targetProfileId":82156885,"pid":"69d516e9-0cef-43c2-9bcf-dc46755d3fbc","persistentId":"69d516e9-0cef-43c2-9bcf-dc46755d3fbc","abt":0,"abtb":0,"sn":"las1-app013","webServerName":"las1-app013","webServerIPAddressId":"10.144.18.23","pc":"en-US","currentCultureCode":"en-US","pf":"PhotoDetail","pageFunctionalContextText":"PhotoDetail","rpf":"","referrerPageFunctionalContextText":"","ll":"34.076212|-118.393564","i":null,"cek":"","currentContentEntityKeyText":null,"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246274},"beaconDataV3":{"actionText":"view","directObjectEntityKeyText":"page_photodetail","lastLoginDateTimeOffset":"","lastLoginId":"","lastProfileId":"","pageId":"09390a56-bfe4-4610-a4ab-b82cde3d0106","persistentId":"69d516e9-0cef-43c2-9bcf-dc46755d3fbc","previousReferrerPageFunctionalContextText":"","referrerPageFunctionalContextText":"","requestFunctionalContextText":"PhotoDetail","requestTrackingId":"09390a56-bfe4-4610-a4ab-b82cde3d0106","requestUrl":"http://myspace.com/myspace/mixes/graphic-content-the-eight-days-of-kanye-352456/photo/80102858","targetProfileId":82156885,"visitId":"7e6d09df-6ec6-4304-94db-c8f5006f29fc"},"audioAds":{"enabled":false,"skippingEnabled":false,"unskippableDuration":5,"firstAdAfter":300,"subsequentAdsAfter":1200},"adPlayer":{"initialVisitAdPlay":{"enabled":true,"locationIds":"162618","loggedOutDefaultLocationIds":"none","loggedOutOtherLocationIds":"162798","loggedInDefaultLocationIds":"162799","loggedInOtherLocationIds":"162799","unregisteredDefaultLocationIds":"none","unregisteredOtherLocationIds":"162804","pfcBlackList":"404,unsupportedBrowser,signup,setuproles,signupprofilesetup","adInterval":86400000},"audioAds":{"enabled":false,"skippingEnabled":false,"unskippableDuration":5},"videoAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAdsRatio":{"audio_audio":1,"audio_video":1,"video_video":1,"video_audio":1},"firstAdAfter":300,"subsequentAdsAfter":1200},"player":{"flashPlayerMonitor":{"enabled":true,"monitorLoopDurationInMs":15000,"failedPingCountMax":1}},"signedOutPlays":10000,"playVideosLinkedToSongs":false,"messageMaxLength":4000,"emptyProfileImage":"/common/images/user.png","camanjsPath":"https://x.myspacecdn.com/new/stream/js/caman.b46d87ffa3c91c9293ec5aa666d31fd0.js"};<?php */?>



<?php /*?>config = {"urls":{"cdn":"https://x.myspacecdn.com/new","playerSwf":"https://x.myspacecdn.com/new/common/swf/APIPlayer.2.17.383.e489a6672a9146f81590bcb8c5a69a3d.swf?enableBeacons=false","upload":"/upload/","beacon":"/beacon","emptyPlaylistImage":"https://x.myspacecdn.com/new/common/images/mix.png","emptySongImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyAlbumImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyVideoImage":"https://x.myspacecdn.com/new/common/images/video.png","videoSwf":"https://x.myspacecdn.com/new/common/swf/videoPlayer.74bbdd4cf8f3974ed0986ec1ed8fadc0.swf","videoConfig":"videoPlayerConfig.5434f1cdef1e738d03cc05fe25823aba.xml","clipboardSwf":"https://x.myspacecdn.com/new/common/swf/ZeroClipboard.9f4401cdc4405d0730362256b4c04cc0.swf","swfupload":"https://x.myspacecdn.com/new/common/swf/swfupload.3a1c6cc728dddc258091a601f28a9c12.swf","scomm":"https://x.myspacecdn.com/new/common/html/scomm.782b85c048f5996874a47f427bb592ac.html","noRail":"norail="},"thirdParty":{"facebookAppId":"373499472709067"}};<?php */?>
</script>
<?php /*?><script src="<?php echo base_url();?>assets/new/common/js/global.822028CAFE71D4E48FB9F2B3591386BD.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/authentication.636709254139B96F854D7CF88DE8935F.min.js"></script><?php */?>
<?php /*?><script src="<?php echo base_url();?>assets/new/common/js/player.5D103B34BEB12DCE5E9ECB8C21BA9F95.min.js"></script>
<script src="<?php echo base_url();?>assets/new/photos/js/photoDetail.8D224C5A2288E73A2EDD119AFC753788.min.js"></script><?php */?>


<?php /*?>	<script type="text/javascript">
	$(document).ready(function(){

	$('#share_button').on('click', function(e){
		e.preventDefault();
		FB.ui(
		{
		method: "feed",
		name: "<?php echo $post[0]->Post_Headline; ?> | Nomad Magazine",
		link: " <?php echo base_url();?>gallery/view/<?php echo $post[0]->Post_Slug; ?>",
		picture: "<?php echo base_url();?><?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post[0]->Post_Thumbnail; ?>",
		caption: "Nomad Magazine",
		description: "<?php //echo $post[0]->Post_Byline; ?>"
		});
	});
	
		});
	</script> <?php */?>
      
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/twitter-popup-script.js"></script>
 
<?php /*?> 	<script type="text/javascript">
	$(document).ready(function(){
		
		
	$('#share_button').on('click', function(e){
		
		e.preventDefault();
		FB.ui(
		{
		method: "feed",
		name: "<?php echo $post[0]->Post_Headline; ?> | Nomad Magazine",
		link: " <?php echo base_url();?>gallery/view/<?php echo $post[0]->Post_Slug; ?>",
		picture: "<?php echo base_url();?><?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post[0]->Post_Thumbnail; ?>",
		caption: "Nomad Magazine",
		description: "<?php echo $post[0]->Post_Byline; ?>"
		});
	});
	
	
	});
	
	</script><?php */?>




   
</body>
</html>