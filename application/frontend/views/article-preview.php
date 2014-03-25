<!DOCTYPE html>
<html class="windows">
<head>
    <meta charset="utf-8" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/sprite.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/global.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/authentication.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/stream/css/streamCss.FF3E55EE247AE69D262F74BD99D6ED82.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/profiles/css/landing.D8CB9B07F2040FEB480CB9C04A7404A9.min.css" />    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/discover/css/trendingDetail.F03B410D3778A2E2EAE3428E77C6DF5B.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/new/common/css/inlineRightRail.B3DCCEE7713834271A57C7B5634A01D4.min.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome-4.0.1/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/additional-styles.css" />
    
<!--[if lt IE 9]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--<![endif]-->
 

<?php /*?><!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!--<![endif]--><?php */?>




<?php include("includes/typekit.php");?> 



		<link rel="stylesheet" href="<?php echo base_url();?>assets/colorbox-master/example1/colorbox.css" />
		<script src="<?php echo base_url();?>assets/colorbox-master/jquery.colorbox.js"></script>
        
        
        
	
	<title><?php echo $post[0]->Post_Headline; ?> | Nomad Magazine</title>
	
 
 
<style> 

 #advanceEditorArticle {/*font-family:"proxima-nova"; font-size:16px;*/
	font-family: "museo-sans",sans-serif;
	font-weight: 300;
	font-size: 16px;
	line-height: 24px;
	letter-spacing: .08em;
	color: #000;
}
 #advanceEditorArticle p{margin-bottom:10px; font-size:16px;}
 #advanceEditorArticle p.introduction:first-letter{ 
 	font-family: "acta-display",sans-serif;
	font-weight: 100;
	line-height: 200px;
	font-size: 200px;
	letter-spacing: 50px;
	color: #C8B784;
    float: left;
	}
 .first-letter-sytle{ /*font-size: 4em; color:red; line-height:45px;*/}
 
	p.quoteline {
		float: left;
		width: 250px !important;
		padding: 30px;
		margin: 0px !important;
		background: #fff;
		padding-left:0;
		font-family: "museo-slab",serif;
		font-weight: 100;
		line-height: 45px !important;
		font-size: 45px !important;
		color: #C8B784;
	}







 #foreground>#profileWidget{
	background: rgba(3,3,3,.7); 
	height:90%;
 }

 #profileWidget h3 {
	font-family: "museo-slab",serif;
	font-weight: 100;
	font-size: 14px;
	line-height: 22px;
	letter-spacing: .08em;
	color: #DE3300;
	margin:0;
}


#profileWidget h1{
padding-top: 10%;
font-family: "acta-display",sans-serif;
font-weight: 100;
line-height: 42px;
font-size: 40px;
/*color: #C8B784;*/
color: #FFF;
margin:0;
}

#profileWidget h2{
font-family: "museo-slab",serif;
font-weight: 100;
font-size: 15px;
line-height: 19px;
letter-spacing: .08em;
color: #FFF;
}


#profileWidget h10 {
font-family: "museo-slab",serif;
font-weight: 100;
font-size: 12px;
line-height: 22px;
letter-spacing: 0.08em;
color: #8F8F8F;
/*color:#000;*/
}

.byline_text{ border-bottom:1px dotted #999;}
.panel_bottom_data { /*position: absolute; bottom: 100px; width:	250px;*/ border-top:1px dotted #999;} 
.panel_bottom_data .photographer_info {}
.panel_bottom_data .photographer_info h3{ color:#FFF;}
 
 
 
 
 
 #sound_buttons{ /*position:absolute; bottom:20px;*/float: left; padding: 0 !important;}
 #mute_button{ background:url(<?php echo base_url();?>assets/images/mute.png);display:none;}
 #unmute_button{background:url(<?php echo base_url();?>assets/images/unmute.png); }
 #mute_button, #unmute_button{ background-repeat:no-repeat; background-position:50% center; opacity:0.6;}
 #photographer_info{ position:absolute; bottom:65px;}
 
 
 
 .sound_icon{position:absolute; bottom:20px; right:30px;}
 .mute_button_icon{ background:url(<?php echo base_url();?>assets/images/mute.png);}
 .unmute_button_icon{background:url(<?php echo base_url();?>assets/images/unmute.png);}
 .mute_button_icon, .unmute_button_icon{ background-repeat:no-repeat; background-position:50% center; opacity:0.6;}
 
 

<?php /*?> #foreground{ background-image:url(<?php echo base_url();?>assets/images/article-bg-watermark.gif);}<?php */?>
 
 
 
 
 
 
#articleContent .rr {
	width: 607px;
	z-index: 0;
	height: 100%;
}
.rr {
position: relative;
/*background-color: #333;*/
width: 305px;
padding: 20px;
overflow: auto;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
}

 
.toggle-panel-btns{ /*position: absolute;bottom: 25px;right: 30px;*/ float:right;} 




button.expand {
background: url(<?php echo base_url();?>assets/images/plus.png) no-repeat;
background-color: #FFF;
background-position: center center;
background-size: 0.5rem 0.5rem;
border: none;
color: transparent;
cursor: pointer;
display: block;
height: 25px;
opacity: .4;
padding: 0;
transition: opacity 0.25s ease-in-out;
-webkit-transition: opacity 0.25s ease-in-out;
width: 25px;
z-index: 30;
position: absolute;bottom: 25px;right: 30px;
} 


button.contract {
background: url(<?php echo base_url();?>assets/images/minus.png) no-repeat;
background-color: #FFF;
background-position: center center;
background-size: 0.9rem 0.2rem;
border: none;
color: transparent;
cursor: pointer;
display: block;
height: 25px;
opacity: .4;
padding: 0;
transition: opacity 0.25s ease-in-out;
-webkit-transition: opacity 0.25s ease-in-out;
width: 25px;
z-index: 30;
}




.share_counter_block{ font-size:9px;}
.share_counter_block span.blocks{ margin-right:8px;}
.share_counter_block span.blocks span.counts{position: relative;bottom: 14px;left: 2px;}
</style>
 




		<script>
			$(document).ready(function(){

				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});


			
			});
		</script>
        
        
        

   
</head>

<body class="profile">

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
<a href="#" id="share_button"><img src="<?php echo base_url();?>assets/images/facebook.png" width="30" /></a>
<a href="http://twitter.com/share?text=<?php echo $post[0]->Post_Headline; ?>" class="twitter popup" data-count="none"><img src="<?php echo base_url();?>assets/images/twitter.png" width="30" height="30" /></a>
<a href="#" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo base_url();?>article/view/<?php echo $post[0]->Post_Slug; ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="<?php echo base_url();?>assets/images/gplus.png" width="30" /></a>
</div>		
				
	</div>
	


</div>





















	<div id="container">
		
			<section id="sidebar">
	
	
	<nav>
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
		
		

		<div id="wrap" class="container" data-uid="d5a83f28-09e7-4968-a8cf-3d472825f56b">
			








<div class="horizontalContent">
	<div id="parallax" class="">
    
    <?php
    if($post[0]->Post_Cover_Type == "image"){
		 //background-image: url(https://a3-videos.myspacecdn.com/videos02/222/47f6e10d5c184a5285653bd84c3ad2ea/astro-videocover.jpg);
	?>
    		<div id="background" style="background-image: url(<?php echo $this->config->item("article_cover_image_path");?><?php echo $post[0]->Post_Cover_File;?>)"></div>	
	<?php	
	}else if($post[0]->Post_Cover_Type == "video"){
	?>
    		<div id="background" class="videoCover" style=" -webkit-transform: translate3d(0px, 0, 0); display: block;">
				<video controls autoplay loop muted style="visibility: visible;" class="stretchHeight">
					<source src="<?php echo $this->config->item("article_cover_video_path");?><?php echo $post[0]->Post_Cover_File;?>" type="video/mp4">
                    <source src="<?php echo $this->config->item("article_cover_video_path");?><?php echo $post[0]->Post_Cover_File2;?>" type="video/webm">
				</video>

			</div>
    <?php	
	}
	?>
		<div id="foreground" class="">
			

			
            


<div id="profileWidget" data-influencer="29102813">

	<div class="panel_data"> 
    
		
        
    

    <div id="profileDetails" >
        
            <div id="aboutMe" class=""<?php /*?> style="border-bottom:1px solid #999;"<?php */?>>
                <div class="" data-maxsize="130" data-place-holder="Write something about yourself." data-blurred-placeholder="Click here to write something about yourself." data-event="profile.edit.aboutMe">

                <h3 style="border-bottom:1px dotted #999;">
				<?php echo $post[0]->Post_Author; ?>:
                </h3>
                    <h1 <?php /*?>style=" font-size:23px;font-family:'Times New Roman', Times, serif;"<?php */?>>
                    <?php echo $post[0]->Post_Headline; ?>
                    </h1>
                </div>
            </div>
        
		<div class="byline_text">
        <h2> <?php echo $post[0]->Post_Byline; ?> </h2>
        </div>
        

		<div class="share_counter_block">
        <?php $socialObj=new shareCount(base_url()."article/view/".$post[0]->Post_Slug);?>
		<span class="blocks"><img src="<?php echo base_url();?>assets/images/twitter-24.png" width="18" height="18" /><span class="counts"><?php echo $socialObj->get_tweets(); ?></span></span>
		<span class="blocks"><img src="<?php echo base_url();?>assets/images/facebook-24.png" width="18" height="18" /><span class="counts"><?php echo $socialObj->get_fb(); ?></span></span>
        <span class="blocks"><img src="<?php echo base_url();?>assets/images/google-plus-24.png" width="18" height="18" /><span class="counts"><?php echo $socialObj->get_plusones(); ?></span></span>
        </div>
        <div class="panel_bottom_data">
            <div class="photographer_info">
                <h10>Photography:
                	<h3><?php echo $post[0]->Photographer_Name; ?></h3>
                <?php echo $post[0]->Photographer_Gps; ?></h10>
            </div>
    	</div>
        <?php if($post[0]->Post_Cover_Type == "video"){?>    
        <div id="sound_buttons">    
                <button id="mute_button"></button>
                <button id="unmute_button"></button>
        </div>
		<?php } ?>
        <button id="contract_panel" class="toggle-panel-btns contract">collapse</button>
		

<?php /*?><a class='iframe' href="<?php echo $post[0]->Post_Gallery_Attachment_Link; ?>">view gallery</a><?php */?>
    </div>

    
 





	</div>
    
<button id="expand_panel" class="toggle-panel-btns expand" style="display:none">expand</button>    
       
    
    
    
</div>







			<?php $counter = 1;?>
            <?php foreach( $postsdata as $postdata ) : ?>
 
             <?php  if($postdata["Data_Type"] == "article"){ ?>
			  <div id="articleContent" class="<?php echo 'frame'.$counter?> item-box">

			  <div id="advanceEditorArticle">



			<p><?php echo stripslashes($postdata["Data"]); ?></p>


 
<span id="art1_markk" style="background-color:red; display:inline;"></span>
   
</div>
            
</div>			
				



			 <?php
			 }else if($postdata["Data_Type"] == "image"){
			 ?>




 
<div id="articleContent" style="padding:0;" class="<?php echo 'frame'.$counter?> item-box">

<div>

<a href="<?php echo $postdata["Data_Link"]; ?>" target="_blank">
<div style="width:auto; height:100%;" id="cover_image_container">
<img id="cover_pic" style="height:100%; width:auto;" src="<?php echo $this->config->item("article_content_images_path");?><?php echo $postdata["Data"]; ?>" />
</div>
</a>
   
</div>
            
</div>









			<?php
			 }else if($postdata["Data_Type"] == "video"){
			 ?>

 
<div id="articleContent" style="padding:0;" class="<?php echo 'frame'.$counter?> item-box">

<div>
<a href="<?php echo $postdata["Data_Link"]; ?>" target="_blank">
				<video id="<?php echo 'article_video'.$counter?>" class="" loop muted  style="visibility: visible; width:auto; height:100%; max-height:100%; min-height:100%;">
					<source src="<?php echo $this->config->item("article_content_images_path");?><?php echo $postdata["Data"]; ?>" type="video/mp4">
				</video>
</a>   
          <div class="sound_icon">    
    				<button class="<?php echo 'art_advert_mute_button'.$counter?> mute_button_icon"   style="display:none"></button>
       				<button class="<?php echo 'art_advert_unmute_button'.$counter?> unmute_button_icon"></button>
					<script>
					<?php /*?>
					$('video#<?php echo 'article_video'.$counter?>').on('loadeddata', function() {
                       //$(this).prop('muted', false);
                    });<?php */?>	
                    $('.<?php echo 'art_advert_mute_button'.$counter?>').on('click', function() {
                       $("video#<?php echo 'article_video'.$counter?>").prop('muted', true);
                       $(this).css("display", "none");
                       $(".<?php echo 'art_advert_unmute_button'.$counter?>").css("display", "block");
                    });
                    $('.<?php echo 'art_advert_unmute_button'.$counter?>').on('click', function() {
                       $("video#<?php echo 'article_video'.$counter?>").prop('muted', false);
                       $(this).css("display", "none");
                       $(".<?php echo 'art_advert_mute_button'.$counter?>").css("display", "block");
                    });
                    </script>
		</div>

</div>
            
</div>


			<?php
			 }
			?>


            
            
            <?php $counter++; ?>
            <?php endforeach; ?>













<div id="articleContent" class="<?php echo 'frame'.$counter?>">

<div>
<?php /*--------------------------------------------------------------------------------*/ ?>


<div class="rr"> 
    
    
 <?php /*?><div class="fb-comments" data-href="<?php echo base_url();?>article/view/<?php echo $post[0]->Post_Slug; ?>" data-numposts="5" data-colorscheme="dark"></div><?php */?>   
    
    
 <!-- START: Livefyre Embed -->
<div id="livefyre-comments"></div>
<script type="text/javascript" src="http://zor.livefyre.com/wjs/v3.0/javascripts/livefyre.js"></script>
<script type="text/javascript">
(function () {
    var articleId = fyre.conv.load.makeArticleId(null);
    fyre.conv.load({}, [{
        el: 'livefyre-comments',
        network: "livefyre.com",
        siteId: "353851",
        articleId: articleId,
        signed: false,
        collectionMeta: {
            articleId: articleId,
            url: fyre.conv.load.makeCollectionUrl(),
        }
    }], function() {});
}());
</script>
<!-- END: Livefyre Embed -->   
    
    
</div>

<?php /*--------------------------------------------------------------------------------*/ ?>
</div>
</div>




















    
    
    
    
    
    
    
    
    



<?php /*?><ul id="stream"></ul> ----------------was here-------------------------------------<?php */?>
            
		</div>
	</div>
</div>
			
		</div>
        
        
<?php /*?><other code removed here><?php */?>



    </div>
    
    
<footer id="footer" class="empty paused noStations queue signedOut allowSkips">
<nav id="links">
	
Copyright &copy; 2013 Icarus Enterprises, Inc.  <a href="#">About Us</a> | <a href="#">People</a> | <a href="#">Advertise</a> | <a href="#">Contact</a>
    
</nav>

</footer>


	


	<script>templates = {"areas/stream/views/helpers/noStreamItem":"<li class=\"streamItem hover empty\">\n<article>\n    <img class=\"noStreamItem\">\n    <% if(!context.displayProfileId || context.displayProfileId == context.profileId) {%>\n        <div>\n            <p>Your stream is empty.</p> But filling it is easy. Just Connect with people and artists you love to receive their updates.\n\t\t</div>\n    <%}else{%>\n        <div class=\"noUserStream\">\n            <p >There are no posts.</p>\n        </div>\n    <%}%>\n</article>\n</li>","common/views/footer/_queueItem":"<%\n\tvar id = queueItem.id ? ' id=\"' + queueItem.id + '\"' : '';\n\n\tvar classes = '';\n\n\tif (queueItem.mediaType == 'video') \n\t\tclasses += 'video ';\n\n\tif (queueItem.error)\n\t\tclasses += 'error ';\n\n\tif (queueItem.selected) {\n\t\tclasses += 'selected ';\n\t\tdelete queueItem.selected;\n\t}\n\n\tif (queueItem.classes)\n\t\tclasses += (queueItem.classes.trim() + ' ');\n\t\t\n\tclasses = classes.length ? ' class=\"' + classes.trim() + '\"' : '';\n\n\tvar draggable = queueItem.mediaType && queueItem.isLiveStream != true && queueItem.private != true ? ' draggable=\"true\"' : '';\n%><% if (queueItem.isAvailable != false || queueItem.isFreeTheTrackSong) { %><li<%- id %><%- classes %><%- draggable %>>\n\t<% if (queueItem.iconClass) { %>\n\t\t<i class=\"<%- queueItem.iconClass %>\"></i>\n\t<% } else { %>\n\t\t<img src=\"<%- queueItem.imageUrl %>\">\n\t<% } %>\n\t<div class=\"info\">\n\t\t<% if (queueItem.disableLinks) { %>\n\t\t\t<h6><span title=\"<%= queueItem.title %>\"><%= queueItem.title %></span></h6>\n\t\t\t<span title=\"<%= queueItem.type == 'radio' ? 'Radio' : (queueItem.artistName || queueItem.name) %>\"><%= queueItem.type == 'radio' ? 'Radio' : (queueItem.artistName || queueItem.name) %></span>\n\t\t<% } else { %>\n\t\t\t<h6><a href=\"<%- queueItem.url || queueItem.detailUrl %>\" title=\"<%= queueItem.title %>\"><%= queueItem.title %></a></h6>\n\t\t\t<a href=\"<%- queueItem.artistUrl %>\" title=\"<%= queueItem.artistName || queueItem.name %>\"><%= queueItem.artistName || queueItem.name %></a>\n\t\t<% } %>\n\t</div>\n\t<% if (!queueItem.disableControls) { %>\n\t\t<div class=\"controls\">\n\t\t\t<% if (queueItem.isLiveStream) { %>\n\t\t\t\t<button class=\"playBtn play_25 video\" data-type=\"video\" <%- formatter.attributify(queueItem) %>></button>\n\t\t\t<% } else { %>\n\t\t\t\t<%- play(queueItem.type == 'radio' ? 'radio' : queueItem.mediaType == 'video' ? 'video' : 'song', queueItem) %>\n\t\t\t<% } %>\n\n\t        <% if (queueItem.mediaType === 'video') { %>\n\t            <button class=\"expand expandOverlayBtn\" data-action=\"expand\"></button>\n\t        <% } %>\n\n\t        <% if (queueItem.mediaType && !queueItem.private) { %>\n\t        \t<div class=\"connectButton tooltips<%- queueItem.isConnected ? ' connected' : '' %>\" data-is-connected=\"<%- !!queueItem.isConnected %>\" data-id=\"<%- queueItem.mediaId %>\" data-entity-key=\"<%- queueItem.entityKey %>\" data-uid=\"<%- queueItem.uid %>\" data-radio-station-entity-key=\"<%- queueItem.radioStationEntityKey %>\" data-title=\"<%= queueItem.title %>\" data-artist-id=\"<%- queueItem.artistId %>\" data-area=\"<%- queueItem.mediaType == 'video' ? 'video' : 'music' %>\" data-type=\"<%- queueItem.mediaType == 'video' ? 'video' : 'song' %>\" data-media-release-id=\"<%- queueItem.mediaReleaseId %>\" data-image-url=\"<%- queueItem.imageUrl %>\" data-owner=\"<%= queueItem.artistName %>\" data-release-entity-key=\"<%= (queueItem.mediaType == 'video' ? 'videorelease_' : 'songrelease_')  + queueItem.mediaReleaseId %>\" data-is-live-stream=\"<%= (queueItem.mediaType == 'video' && queueItem.isLiveStream) ? 'true' : 'false' %>\" data-user-entity-key=\"<%- 'profile_' + queueItem.artistId %>\"> <span></span><span></span></div>\n\t        <% } %>\n\n\t\t\t<button class=\"noStyle remove x_18_border\" data-action=\"remove\"></button>\n\t\t</div>\n\t<% } %>\n\t<% if (queueItem.error) { %>\n\t\t<div class=\"error\">\n\t\t\t<i class=\"error_24\"></i>\n\t\t\t<span>Error Playing</span>\n\t\t</div>\n\t<% } %>\n</li><% } %>","areas/mixes/views/dialogs/addItemsToMix":"<form id=\"addItemsToMix\" class=\"lightbox\">\n\t<h1>Save your queue</h1>\n\n\t<div class=\"createNew\">\n\t\t<p>Create a new mix</p>\n\t\t<input type=\"text\" />\n\t\t<button type=\"submit\" class=\"primary\">Create</button>\n\t</div>\n\n\t<div class=\"or\">\n\t\t<hr><span>OR</span><hr>\n\t</div>\n\n\t<div class=\"addToExisting\">\n\t\t<p>Add to an existing mix</p>\n\t\t<ul></ul>\n\t</div>\n</form>\n","areas/mixes/views/dialogs/mixForms":"<% var mode;\nif (command === 'mix.create') {\nmode = 'create';\n} else {\nmode = 'add';\n} %>\n\n<form id=\"mixForm\" class=\"mixDialog lightbox\" >\n\t<input type=\"hidden\" name=\"objectVersion\" id=\"objectVersion\" value=\"<%= mixtape.objectVersion || '' %>\" />\n\t<input type=\"hidden\" name=\"playlistId\" id=\"playlistId\" value=\"<%= mixtape.playlistId || '' %>\"  />\n\t<input type=\"hidden\" name=\"mediaId\" id=\"mediaId\" value=\"<%= mixtape.mediaId || '' %>\" />\n\t<input type=\"hidden\" name=\"mediaType\" id=\"mediaType\" value=\"<%= mixtape.mediaType || '' %>\" />\n\t<input type=\"hidden\" name=\"releaseId\" id=\"releaseId\" value=\"<%= mixtape.releaseId || '' %>\" />\n\t<section id=\"createForm\" class=\"<%- mode == 'add' ? ' hide' : ''  %>\">\n\t\t<header>\n\t\t\t<h1 class=\"create\">Create Mix</h1>\n\t\t</header>\n\t\t<div>\n\t\t\t<div class=\"mixImage\">\n\t\t\t\t<div id=\"mixtapeImageContainer\" data-tip-text=\"The image was attached\">\n\t\t\t\t\t<div class=\"tipHolder\"></div>\n\t\t\t\t\t<img class=\"mixtapeImage\" alt=\"\" src=\"<%- mixtape.image ? mixtape.image : mixtape.emptyPlaylistImage %>\" />\n\t\t\t\t</div>\n\t\t\t\t<div id=\"mixHTMLUploader\">\n\t\t\t\t\t<input name=\"mixCoverFile\" id=\"mixCoverFile\" type=\"file\" size=\"8\" accept=\"image/*\"/>\n\t\t\t\t\t<button>Choose Image</button>\n\t\t\t\t</div>\n\t\t\t\t<p>20MB max, 1024x768 min</p>\n\t\t\t</div>\n\t\t\t<div class=\"mixInfo\">\n\t\t\t\t<div class=\"title\">\n\t\t\t\t\t<label for=\"mixTitle\">name your mix</label>\n\t\t\t\t\t<div class=\"tipHolder\"></div>\n\t\t\t\t\t<input type=\"text\" id=\"mixTitle\" name=\"title\" placeholder=\"Give your mix a name\" maxlength=\"60\" size=40 value=\"<%= mixtape.title || '' %>\" />\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"description\">\n\t\t\t\t\t<label for=\"mixDescription\">description</label>\n\t\t\t\t\t<span class=\"charCount\" data-len=\"-1\">0/600</span>\n\t\t\t\t\t<% if(context.features.isMixTagginEnable) {%>\n\t\t\t\t\t\t<div placeholder=\"Tell us about your mix\" id=\"mixDescription\" name=\"description\" contenteditable=\"true\" class=\"textarea\"><%= mixtape.description || '' %></div>\n\t\t\t\t\t<%}else{%>\n\t\t\t\t\t\t<textarea id=\"mixDescription\" name=\"description\" placeholder=\"Tell us about your mix\" size=\"40\"><%= mixtape.description || '' %></textarea>\n\t\t\t\t\t<%}%>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"privacySetting\">\n\t\t\t\t\t<input type=\"checkbox\" id=\"privacyCheck\" name=\"privacy\" value=\"1\" <% if (mixtape.visibility === 'Private'){ %>checked=\"checked\"<% } %> />\n\t\t\t\t\t<label for=\"privacyCheck\">Hide this mix from my public profile</label>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\n\t\t<footer>\n\t\t\t<% if (mode == 'add') { %>\n\t\t\t<button class=\"myMixes\">My Mixes</button>\n\t\t\t<% } %>\n\t\t\t<a class=\"cancel\">Cancel</a>\n\t\t\t<button class=\"create primary\">Create Mix</button>\n\t\t</footer>\n\t</section>\n\t<% if (mode === 'add') { %>\n\t\t<section id=\"addToSection\">\n\t\t\t<header>\n\t\t\t\t<h1>Add To Mix</h1>\n\t\t\t</header>\n\n\t\t\t<div>\n\t\t\t\t<div class=\"mixImage\">\n\t\t\t\t\t<div id=\"selectedMixImage\">\n\t\t\t\t\t\t<img class=\"hide\" alt=\"\" src=\"<%= mixtape.image ? mixtape.image : mixtape.emptyPlaylistImage %>\" />\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"mixtapeCollections\">\n\t\t\t\t\t<label for=\"myMixtapes\">Select a mix:</label>\n\t\t\t\t\t<select id=\"myMixtapes\" name=\"myMixtapes\"></select>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<footer>\n\t\t\t\t<button class=\"createMixAndAdd\">Create New Mix</button>\n\t\t\t\t<a class=\"cancel\">Cancel</a>\n\t\t\t\t<button class=\"save primary\">Add</button>\n\t\t\t</footer>\n\t\t</section>\n\t<% } %>\n</form>\n\n","areas/music/views/radioDialog":"<form id=\"radioDialog\" class=\"lightbox\">\n\t<header>\n\t\t<h1>Search radio</h1>\n\t\t<div>\n\t\t\t<span>Not sure what to play?</span>\n\t\t\t<a href=\"/discover/radio\">Why not browse our radio stations »</a>\n\t\t</div>\n\t</header>\n\n\t<div class=\"search\">\n\t\t<h3>Search for a genre</h3>\n\t\t<input type=\"text\" />\n\t\t<div>\n\t\t\t<ul class=\"genres\"></ul>\n\t\t\t<ul class=\"results\"></ul>\n\t\t</div>\n\t</div>\n</form>\n","areas/music/views/media/_songSquare":"<%\n\tvar songLink = '#',\n\t\ttoolTipAttribute = \"\";\n\n    if(songSquare.songUrl){\n\t\tsongLink = songSquare.songUrl;\n\t} else {\n\t\tsongLink = songSquare.song.url;\n\t}\n\n    if(songSquare.size == 'small' || songSquare.size == 'medium'){\n\t\ttoolTipAttribute = \"rel='tooltip'\" ;\n\t}\n\n\tvar classes = \"song mediaSquare\";\n\tif(songSquare.size) {\n\t\tclasses += \" \" + songSquare.size;\n\t}\n\tif(songSquare.inline){\n\t\tclasses += \" inline\";\n\t}\n\n%>\n\n<div class=\"<%- classes %>\" data-mediaid=\"<%- songSquare.song.songId %>\" data-mediatype=\"Audio\" draggable=\"true\">\n    <a href=\"<%- songLink %>\" data-original-title=\"<%= songSquare.song.title %> - <%= songSquare.song.artistName %>\"  <%= toolTipAttribute %> >\n        <%- play('song', songSquare.song) %>\n        <% if (songSquare.size != 'medium' && songSquare.size != 'small' && typeof(connect) != 'undefined') { %>\n        <%- connect('song', songSquare.song, songSquare.connections || locals.connections) %>\n        <% } %>\n        <img src=\"<%- songSquare.song.imageUrl %>\" />\n        <% if (songSquare.song.isExplicit && songSquare.size !== 'small') { %>\n        <span class=\"explicit\">EXPLICIT</span>\n        <% } %>\n    </a>\n\n    <% if(!songSquare.hideMetaInfo){%>\n        <div class=\"<%- songSquare.metaInfoClass %>\">\n            <h6>\n                <a href=\"<%- songLink %>\"><%= songSquare.song.title %></a>\n                <% if(songSquare.song.isExplicit && songSquare.size === 'small') { %><i class=\"explicit_10\">Explicit</i> <% } %>\n            </h6>\n            <%- songSquare.song.artistDisplayText %>\n        </div>\n    <%}%>\n</div>","areas/music/views/media/_albumSquare":"<%\n\tvar albumLink = '#', artistLink = '#', toolTipAttribute = \"\", albumImageUrl = albumSquare.album.imageUrl;\n\n    if(albumSquare.albumUrl){\n        albumLink = albumSquare.albumUrl;\n    } else {\n\t\talbumLink = albumSquare.album.albumUrl;\n\t}\n\n    if(albumSquare.artistLink){\n        artistLink =albumSquare.artistLink\n    }else if(albumSquare.album.artistId && typeof(links) != 'undefined') {\n\t\tartistLink = albumSquare.album.artistUrl;\n\t}\n\n\tif(albumSquare.size == 'small' || albumSquare.size == 'medium'){\n\t    toolTipAttribute = \"rel='tooltip'\";\n        if(!albumSquare.showMetaInfo) albumSquare.showMetaInfo = \"none\";\n\t}\n\n\tvar classes = \"album mediaSquare\";\n\tif(albumSquare.size) {\n\t\tclasses += \" \" + albumSquare.size;\n\t}\n\tif(albumSquare.inline){\n\t\tclasses += \" inline\";\n\t}\n\n    if(!albumSquare.notUseCommonHelper && (albumSquare.size == 'small' || albumSquare.size == 'medium'))\n    {\n        albumImageUrl  = common.helpers.albumImage(albumSquare.album, '70x70');\n    }\n%>\n<div class=\"<%- classes %>\" data-mediaid=\"<%- albumSquare.album.albumId %>\"  data-entitykey=\"<%- albumSquare.album.entityKey%>\" data-radiostationentitykey=\"<%- albumSquare.album.radioStationEntityKey%>\"  data-mediatype=\"Album\" itemscope itemtype=\"http://schema.org/MusicAlbum\" draggable=\"true\">\n\t<meta itemprop=\"url\" content =\"<%= albumLink %>\">\n\t<a href=\"<%= albumLink %>\"  data-original-title=\"<%= albumSquare.album.title %> - <%= albumSquare.album.artistName %>\" <%= toolTipAttribute %>>\n\t\t<%- play('album', albumSquare.album) %>\n\t\t<% if (albumSquare.size != 'medium' && albumSquare.size != 'small' && typeof(connect) != 'undefined') { %>\n\t\t\t<%- connect('album', albumSquare.album, albumSquare.connections || locals.connections) %>\n\t\t<% } %>\n\n\n\t\t<img itemprop=\"image\" src=\"<%-  albumImageUrl || '<?php echo base_url();?>assets/cms/Music%20Vertical/Common/Images/default_large.jpg' %>\" />\n\t\t<% if (albumSquare.album.isExplicit && albumSquare.size !== 'small') { %>\n\t\t\t<span class=\"explicit\">EXPLICIT</span>\n\t\t<% } %>\n\t</a>\n\n\t<!-- Album Meta Info - Regular -->\n\t<% if(!(albumSquare.showMetaInfo && (albumSquare.showMetaInfo == \"none\" || albumSquare.showMetaInfo == \"extended\"))) { %>\n\t\t<div class=\"<%- albumSquare.metaInfoClass %>\">\n\t\t\t<h6>\n                <a href=\"<%= albumLink %>\" itemprop=\"name\"><%= albumSquare.album.title %></a>\n                <% if (albumSquare.album.isExplicit && albumSquare.size === 'small') { %><i class=\"explicit_10\">Explicit</i> <% } %>\n            </h6>\n\t\t\t<% if (albumSquare.album.artistId) { %>\n\t\t\t\t<a href=\"<%= artistLink %>\" itemprop=\"byArtist\"><%= albumSquare.album.artistName %></a>\n\t\t\t<% } else { %>\n\t\t\t\t<%- albumSquare.album.artistId %>\n\t\t\t<% } %>\n\t\t</div>\n\t<% } %>\n\n</div>\n\n<!-- Album Meta Info - Extended Info -->\n<% if(albumSquare.showMetaInfo && albumSquare.showMetaInfo == \"extended\") { %>\n\t<div class=\"extended\">\n\t\t<dl>\n\t\t\t<dt>Released</dt>\n\t\t\t<dd><%- formatter.date(albumSquare.album.releaseDate, \"mmm dd, yyyy\") %></dd>\n\n\t\t\t<dt>Recorded</dt>\n\t\t\t<dd><%- formatter.date(albumSquare.album.releaseDate, \"yyyy\") %></dd>\n\n\t\t\t<% if(albumSquare.album.genreName && albumSquare.album.genreName.length > 0) { %>\n\t\t\t\t<dt>Genre</dt>\n\t\t\t\t<dd><%= albumSquare.album.genreName %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.displayLabel && albumSquare.album.displayLabel.length > 0) { %>\n\t\t\t\t<dt>Label</dt>\n\t\t\t\t<dd><%= albumSquare.album.displayLabel %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.tones && albumSquare.album.tones.length > 0) { %>\n\t\t\t\t<dt>Moods</dt>\n\t\t\t\t<dd><%- albumSquare.album.tones.join(\", \") %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.styles && albumSquare.album.styles.length > 0) { %>\n\t\t\t\t<dt>Styles</dt>\n\t\t\t\t<dd><%- albumSquare.album.styles.join(\", \") %></dd>\n\t\t\t<% } %>\n\n\t\t\t<% if(albumSquare.album.themes && albumSquare.album.themes.length > 0) { %>\n\t\t\t\t<dt>Themes</dt>\n\t\t\t\t<dd><%- albumSquare.album.themes.join(\", \") %></dd>\n\t\t\t<% } %>\n\t\t</dl>\n\t</div>\n<% } %>","common/views/generic/postcontrol":"<div class=\"postControl\">\n\t<%if((context.features.isMentionProfileEnabled || locals.enableMentions) && !locals.disableMentions) { %>\n\t\t<div placeholder=\"<%= locals.placeholder || \"\" %>\" <%- locals.id ? \"id='\" + locals.id + \"'\" : '' %> <%= locals.name ? \"name='\" + locals.name + \"'\" : '' %> <%- locals.readonly ? \"readonly='readonly'\" : \"\" %> contenteditable=\"true\" class=\"textarea\"><%= locals.text || \"\"%></div>\n\t<% } else { %>\n\t\t<textarea placeholder=\"<%= locals.placeholder || \"\" %>\" <%- locals.id ? \"id='\" + locals.id + \"'\" : '' %> <%= locals.name ? \"name='\" + locals.name + \"'\" : '' %> <%- locals.readonly ? \"readonly='readonly'\" : \"\" %> ><%= locals.text || \"\"%></textarea>\n\t<% } %>\n</div>\n","common/views/generic/superpost/_song":"<% locals.forEach(function(song) { %>\n<li data-id='<%= song.songId %>' data-entity-key='<%= song.entityKey %>'>\n    <%if(song.imageUrl) { %>\n\t\t<img src='<%= song.imageUrl %>' /> \n\t<% } %>\n\t<div <%= song.nowPlaying ? \"class='currentSong'\" : \"\" %>>\n\t\t<%if(song.nowPlaying){%><strong>Current Song</strong><%}%> \n\t\t<h6><%= song.title %></h6><p><%= song.artistName %></p>\n\t</div>\n</li>\n<%})%>\n","common/views/generic/superpost/_location":"<% locals.forEach(function(item) { %>\n<li data-entity-key='<%= item.entityKey %>' data-id='<%= item.locationId %>'>\n    <%= item.locationNameWithHierarchy %>\n    </li>\n<% }) %>\n","common/views/generic/superpost/_share":"<% if (locals.imageUrl) { %>\n\t<%if (locals.inline) { %>\n\t<div class=\"imageFrame<%- locals.imageUrl.indexOf(',') > -1 ? ' collage' : '' %>\">\n\t\t<% locals.imageUrl.split(',').forEach(function(image){ %>\n\t\t<img src='<%= image %>' />\n\t\t<% }); %>\n\t</div>\n\t<% } else {%>\n\t<img src='<%= locals.imageUrl %>' />\n\t<% } %>\n<% } %>\n<div>\n\t<%if (locals.inline) { %>\n\t<p>\n\t\t<strong><%= locals.title %></strong><%if (locals.owner) { %> - <%= locals.owner %> <% } %>\n\t\t<i class=\"x_14\"></i>\n\t</p>\n\t<% } else { %>\n\t<h6><%= locals.title %></h6>\n\t<%if (locals.owner) { %>\n\t\t<p><%= locals.owner %></p>\n\t<% } %>\n\t<% } %>\n\t<i class='x_14'>remove</i>\n</div>\n","common/views/generic/superpost/_linkpreview":"<% var hasImage = locals.images && locals.images.length > 0 || 0;%>\n<div class=\"linkPreviewer processing\">\n\t<% if(hasImage) { %>\n\t<div class=\"loading white linkImage\">\n\t</div>\n\t<%}%>\n\t<div class=\"linkDetails\">\n\t\t<p contenteditable=\"true\" class=\"linkTitle\"><%= locals.title || \"\" %></p>\n\t\t<p title=\"<%= locals.url %>\" class=\"linkUrl\"><%= locals.hostName || \"\" %></p>\n\t\t<% if(hasImage) { %>\n\t\t<p class=\"linkThumbnailOption\">\n\t\t\t<i class=\"arrow_left_16_dark disabled\"></i>\n\t\t\t<i class=\"arrow_right_16_dark\"></i>\n\t\t\t<span class=\"preview_count\"></span>\n\t\t\t<span>Choose a Thumbnail</span>\n\t\t</p>\n\t\t<p class=\"linkNoThumbnail\">\n\t\t\t<label>\n\t\t\t\t<input type=\"checkbox\" /> <span></span>No Thumbnail\n\t\t\t</label>\n\t\t</p>\n\t\t<% } %>\n\t</div>\n</div>\n","common/views/generic/superpost/_mention":"<% var isPublicProfileList = false; %>\n<% locals.forEach(function(mention, index) { %>\n<% if(!mention.connected && !isPublicProfileList) {\n\t\tisPublicProfileList = true; %>\n\t<% if (index !== 0) { %>\n\t<li class=\"publicProfile ignore\">Also on Myspace </li>\n\t<% } %>\n<%}%>\t\t\n\t\t\n<li data-id=\"<%= mention.profileId %>\" <%-formatter.attributify(mention)%> <%- index == 0 ? 'class=\"selected\"' : '' %>>\n    <%if(mention.profileImage) { %>\n\t\t<img src=\"<%= mention.profileImage %>\" /> \n\t<% } %>\n\t<div>\n\t\t<p><strong><%= mention.fullName %></strong></p> \n\t\t<p class=\"username\"><%= mention.username %></p>\n\t</div>\n</li>\n<%})%>\n","common/views/_linkEmbedDialog":"<% var coverImages = options.imageUrl.split(','); %>\n<div>\n\t<div class=\"main\">\n\t\t<a class=\"cover<%- coverImages.length > 1 ? ' collage' : '' %>\" href=\"<%- options.url %>\">\n\t\t\t<% coverImages.forEach(function (imageUrl) { %>\n\t\t\t\t<img src=\"<%- imageUrl %>\">\n\t\t\t<% }); %>\n\t\t</a>\n\t\t<div class=\"info\">\n\t\t\t<h6><a href=\"<%- options.url %>\"><%= options.title %></a></h6>\n\t\t\t<a href=\"<%- options.artistUrl %>\"><%= options.artistName %></a>\n\t\t</div>\n\t</div>\n\t<div class=\"fields\">\n\t\t<div class=\"link\">\n\t\t\t<div class=\"field\">\n\t\t\t\t<i class=\"link_40_light\"></i>\n\t\t\t\t<i class=\"link_40_dark copied\"></i>\n\t\t\t\t<input type=\"text\" value=\"<%- options.link %>\" readonly=\"true\">\n\t\t\t</div>\n\t\t</div>\n\t\t<% if (options.iframe) { %>\n\t\t\t<div class=\"embed<%- options.resizable ? ' resizable' : ''%>\">\n\t\t\t\t<div class=\"field\">\n\t\t\t\t\t<i class=\"embed_40_light\"></i>\n\t\t\t\t\t<i class=\"embed_40_dark copied\"></i>\n\t\t\t\t\t<input type=\"text\" value=\"<%= options.iframe %>\" readonly=\"true\">\n\t\t\t\t</div>\n\t\t\t\t<% if (options.resizable) { %>\n\t\t\t\t\t<div class=\"resizer\">\n\t\t\t\t\t\t<div class=\"width\">W:<input type=\"number\" pattern=\"[0-9]*\" min=\"160\" max=\"960\" maxlength=\"3\" value=\"<%- options.size.split('x')[0] %>\"></div>\n\t\t\t\t\t\t<div class=\"height\">H:<input type=\"number\" pattern=\"[0-9]*\" min=\"90\" max=\"540\" maxlength=\"3\" value=\"<%- options.size.split('x')[1] %>\"></div>\n\t\t\t\t\t</div>\n\t\t\t\t<% } %>\n\t\t\t</div>\n\t\t<% } %>\n\t\t<% if (options.miniplayer) { %>\n\t\t\t<div class=\"miniplayer\">\n\t\t\t\t<div class=\"field\">\n\t\t\t\t\t<i class=\"embed_40_light\"></i>\n\t\t\t\t\t<i class=\"embed_40_dark copied\"></i>\n\t\t\t\t\t<input type=\"text\" value=\"<%= options.miniplayer %>\" readonly=\"true\">\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t<% } %>\n\t</div>\n\t<% if (options.iframe && options.sizeOptions) { %>\n\t\t<form class=\"size\">\n\t\t\t<ul>\n\t\t\t\t<% if (options.sizeOptions['300x90']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x90\" name=\"size\" type=\"radio\" value=\"300x90\" checked><label for=\"layout_300x90\"><div><span>300 x 90</span><i class=\"layout-300x90\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['300x423']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x423\" name=\"size\" type=\"radio\" value=\"300x423\"><label for=\"layout_300x423\"><div><span>300 x 423</span><i class=\"layout-300x423\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['300x600']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_300x600\" name=\"size\" type=\"radio\" value=\"300x600\"><label for=\"layout_300x600\"><div><span>300 x 600</span><i class=\"layout-300x600\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } if (options.sizeOptions['600x300']) { %>\n\t\t\t\t<li>\n\t\t\t\t\t<div class=\"msRadio\">\n\t\t\t\t\t\t<input id=\"layout_600x300\" name=\"size\" type=\"radio\" value=\"600x300\"><label for=\"layout_600x300\"><div><span>600 x 300</span><i class=\"layout-600x300\"></i></div></label>\n\t\t\t\t\t</div>\n\t\t\t\t</li>\n\t\t\t\t<% } %>\n\t\t\t</ul>\n\t\t</form>\n\t<% } %>\n</div>","areas/videos/views/shared/_videoHead":"<div>\n    <h2><%= video.title %></h2>\n    <p><a href=\"<%= video.artistUrl %>\"><%= video.artistName %></a></p>\n    <p><i class=\"plays_12\">Plays</i> <span class=\"stats\"><%= (video.stats && video.stats.AllTime) ? video.stats.AllTime : 1 %></span> plays</p>\n</div>\n<div>\n    <%- video.description %>\n</div>","areas/mixes/views/shared/_mixHead":"<% var imageUrl = mix.imageUrl || ''; %>\n<div class=\"mixtape mediaSquare medium<%- imageUrl.split(',').length > 1 ? ' collage' : '' %><%- mix.mediaCount > 0 ? '' : ' noMedia' %>\">\n\t<a href=\"<%= mix.url || '#' %>\">\n\t\t<%- play('mixtape', mix) %>\n\t\t<%  imageUrl && imageUrl.split(',').forEach(function(image) { %>\n\t\t\t<img src=\"<%- image %>\" />\n\t\t<% }) %>\n\t</a>\n\t<div>\n\t\t<h6> <a href=\"<%= mix.url %>\"><%= mix.title %></a></h6>\n\t\t<a href=\"<%= ('/' + mix.username) %>\"><%= mix.owner %></a>\n\t</div>\n</div>\n","areas/photos/views/_photoRightRailHead":"<div>\n    <h2>Photo from <a href=\"<%= photo.mixDetailUrl %>\"><%- photo.mixTitle %></a></h2>\n    <p>by <a href=\"/<%= photo.ownerUserName %>\"><%- photo.ownerFullName %></a></p>\n</div>\n\n<div class=\"postText\">\n\t<%if(photo.captionWithLinks) { %>\n\t\t<%- photo.captionWithLinks %>\n\t<% } else { %>\n\t\t<%= photo.caption || '' %>\n\t<% } %>\n</div>\n<div><a>Show more</a></div>\n","areas/discover/views/shared/_articleHead":"<div>\n\t<h2><a href=\"<%- article.blogDetailUrl %>\"><%- article.title %></a></h2>\n\t<p><a href=\"<%- article.blogDetailUrl %>\"><%- article.summary %></a></p>\n</div>\n","areas/misc/views/shared/_linksRightRailHead":"<div>\n\t<h2><a href=\"<%= link.shortUrl %>\"><%= link.title %></a></h2>\n\t<p><a href=\"<%= link.shortUrl %>\"><%= link.hostName || link.linkUrl %></a></p>\n</div>\n","areas/misc/views/shared/sharePrompt":"<article id=\"sharePrompt\" class=\"dialog\">\n\t<i class=\"close x_14\">Close</i>\n\t<header>\n     \t<h2 class=\"promptText\">Share this song</h2>\n \t</header>\n\t<section>\n\t\t<p>\n\t\t\t<a href='#' class=\"msSignIn\">Sign in</a> to share on Myspace. <br />\n\t\t\tYou can also share on Facebook and Twitter.\n\t\t</p>\n\n\t\t<div>\n\t\t\t<div class=\"thirdParty\">\n\t\t\t\t<button class=\"facebook\" data-provider=\"facebook\"><i class=\"facebook_40\"></i><span>Facebook</span></button>\n\t\t\t\t<button class=\"twitter\" data-provider=\"twitter\"><i class=\"twitter_40\"></i><span>Twitter</span></button>\n\t\t\t</div>\n\t\t</div>\n\t</section>\n</article>","common/views/generic/photos/_photoCropper":"<div id=\"photoCropper\" class=\"dialog\">\n    <div class=\"header dotted\">\n        <h2>Crop Your Photo</h2>\n        <i class=\"x_18_border\"></i>\n    </div>\n\n    <div class=\"content\">\n        <p>To crop your photo, drag, resize, and adjust the position of the box.</p>\n        <div class=\"cropContainer\"></div>\n    </div>\n\n    <div class=\"footer\">\n        <button class=\"cancel\">Cancel</button>\n        <button class=\"primary save\">Save</button>\n    </div>\n</div>","common/views/footer/messages/_message":"<div class=\"messageGroup <%- locals.isSelf ? 'self' : '' %>\" data-influencer=\"<%- locals.profileId %>\">\n\t<a <% if(locals.username) { %>href=\"/<%- locals.username %>\"<%}%> class=\"sender\" data-show-presence=\"true\" data-profile-id=\"<%- locals.profileId %>\">\n\t\t<img src=\"<%- locals.imgUrl %>\" />\n\t</a>\n\t<div class=\"message\">\n\t\t<div>\n\t\t\t<% if(locals.bodyText) { %><span><%= locals.bodyText %></span><% }%>\n\t\t\t<% if(locals.mediaHtml) { %><div class=\"messageMedia\"><%- locals.mediaHtml %></div><% } %>\n\t\t\t<time data-datetime=\"<%- locals.timestamp %>\"></time>\n\t\t</div>\n\t</div>\n</div>","common/views/footer/messages/_typing":"<div class=\"messageGroup typingIndicator\">\n\t<div class=\"sender presence online\">\n\t\t<img src=\"<%- locals.imgUrl %>\" />\n\t</div>\n\t<div class=\"message typing\">\n\t\t<div>\n\t\t\t<div class=\"typing loading white\"></div>\n\t\t</div>\n\t</div>\n</div>","common/views/footer/messages/_thread":"<li class=\"<%- thread.selected ? 'selected ' : '' %><%- thread.unseenCount > 0 ? 'unread' : '' %>\" data-conversation-id=\"<%- thread.conversationId %>\" data-url=\"<%= thread.url || ('/messages/' + thread.conversationId) %>\" data-last-item-id=\"<%- thread.lastItemId %>\" data-profile-id=\"<%- thread.otherParticipantProfileId || (thread.participants.length && thread.participants[0].profileId) || 0 %>\">\n\t<div class=\"media size_60 inline presence\" data-show-presence=\"true\" data-profile-id=\"<%- thread.otherParticipantProfileId || (thread.participants.length && thread.participants[0].profileId) || 0 %>\">\n\t\t<a class=\"profileLink\" href=\"/<%-(thread.username || thread.participants.length && (thread.participants[0].username || thread.otherParticipantProfileId || (thread.participants[0].profileId != 0 ? thread.participants[0].profileId : ''))) %>\">\n\t\t\t<img src=\"<%- thread.images[0] %>\" alt=\"\" />\n\t\t</a> \n\t\t<div class=\"nameplate\">\n\t\t\t<h6><%= thread.headline || (thread.participants.length && thread.participants[0].fullName) %></h6>\n\t\t\t<p><%= thread.lastMessage %></p>\n\t\t\t<time data-datetime=\"<%- thread.lastUpdated %>\"></time>\n\t\t</div>\n\t</div>\n\t<i class=\"more_22 threeDots\"></i>\n\t<i class=\"popout_11 openInConversation\"></i>\n</li>\t"};
context = {"text":{},"uuid":"d5a83f28-09e7-4968-a8cf-3d472825f56b","profileId":-1,"loginId":-1,"realtime":{"serverUrl":"/realtime","enableWebSockets":true,"subscriptions":{}},"searchOverlay":{"delay":150,"minimumQueryLength":2,"enterKeySubmits":false},"termsOfService":{"showTOSBOX":false},"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752,"assignedExperiments":null,"hashMashter":"ODE3MTc3Y2UyYzZmYzUxM8K+fhlIJsOrw5bDuMOiXADDrcOeB1TCs8OvJFHCsCnCvMKUFcOPwqTCt8OCL8Kiw43Dp8Kbw4BCGMKcw4vDnMOzw40WA8K2wpYSwr/Do3Ncw4bDriEfwrIBMHdnKVLDgMKlwp0XHMKqw43CscOLZMK/wqXDv8OgJyhZIMOgHcO7Em3DgFXCucKSBU3CgxoCw4cGXh9kw7VBw4ZIw4RnSMKhw4x5woHDrMK3Rg%3D%3D","features":{"isMessagingEnabled":true,"isMessagingToStrangerEnabled":true,"isOfflineMessagingEnabled":true,"isRadioEnabled":true,"isRealtimeEnabled":true,"isSearchEnabled":true,"isMentionProfileEnabled":true,"isPostTaggingEnabled":false,"isLinkScrapeEnabled":true,"isVideosPostEnabled":true,"isVideosExternalPostEnabled":true,"isRenderPresenceEnabled":true,"isPlayerQueueSortable":true,"isPostInEnable":true,"isShareIsEnable":true,"isOffSiteEmbedsEnabled":true,"isMixTagginEnable":true,"isPageviewBeaconV3Enabled":false,"isPlayerBeaconV3Enabled":true,"isWebcamEnabled":true,"isSignUpEnabled":true,"isSignInEnabled":true},"displayProfileId":29102813,"adsProhibited":false,"artistId":20070968,"pfc":"Profile","streamUrl":"/ajax/katiecoleofficial/latest/all","includeInboundStream":false,"artistLiveStream":false,"profileImageId":560022,"coverImageId":6,"profilePhotoId":560022,"profilePlaylistId":390,"hasProfileDetails":true,"filterStreamUrl":"/ajax/katiecoleofficial/latest/","messaging":{},"playInitialAd":true,"playInitialAdLocationId":162804,"ads":{"msd":"2:2:Z-3A8ZjTuNP1J_P6-qyxWGcU5ovIoZy_K5TbpwG5_ypHyg_jpThrIGDwamtjVt5n"},"beaconData":{"dsid":2,"dsv":1,"pggd":"d5a83f28-09e7-4968-a8cf-3d472825f56b","pageId":"d5a83f28-09e7-4968-a8cf-3d472825f56b","vgd":"787c5c12-2467-4add-9d4b-2fb9417d4398","visitId":"787c5c12-2467-4add-9d4b-2fb9417d4398","isnv":0,"lid":-1,"currentUserLoginId":null,"llid":-1,"lastLoginId":null,"lltime":"1970-01-01T00:00:00.000Z","lastLoginUtcDateTime":"1970-01-01T00:00:00.000Z","prid":-1,"currentUserProfileId":null,"lprid":-1,"lastProfileId":null,"tprid":29102813,"targetProfileId":29102813,"pid":"f20eab64-6582-44ca-8879-978437855e38","persistentId":"f20eab64-6582-44ca-8879-978437855e38","abt":0,"abtb":0,"sn":"las1-app012","webServerName":"las1-app012","webServerIPAddressId":"10.144.18.22","pc":"en-US","currentCultureCode":"en-US","pgref":"https://www.google.com.pk/","referrerUrl":"https://www.google.com.pk/","pf":"Profile","pageFunctionalContextText":"Profile","rpf":"","referrerPageFunctionalContextText":"","ll":"34.076212|-118.393564","i":null,"cek":"","currentContentEntityKeyText":null,"ipDerivedIsoCountryCode":"PK","ipDerivedLocationId":1246752},"beaconDataV3":{"actionText":"view","directObjectEntityKeyText":"page_profile","lastLoginDateTimeOffset":"","lastLoginId":"","lastProfileId":"","pageId":"d5a83f28-09e7-4968-a8cf-3d472825f56b","persistentId":"f20eab64-6582-44ca-8879-978437855e38","previousReferrerPageFunctionalContextText":"","referrerPageFunctionalContextText":"","referrerUrl":"https://www.google.com.pk/","requestFunctionalContextText":"Profile","requestTrackingId":"d5a83f28-09e7-4968-a8cf-3d472825f56b","requestUrl":"http://myspace.com/katiecoleofficial","targetProfileId":29102813,"visitId":"787c5c12-2467-4add-9d4b-2fb9417d4398"},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5,"firstAdAfter":900,"subsequentAdsAfter":900},"adPlayer":{"initialVisitAdPlay":{"enabled":true,"locationIds":"162618","loggedOutDefaultLocationIds":"none","loggedOutOtherLocationIds":"none","loggedInDefaultLocationIds":"162799","loggedInOtherLocationIds":"162799","unregisteredDefaultLocationIds":"none","unregisteredOtherLocationIds":"162804","pfcBlackList":"404,unsupportedBrowser","adInterval":86400000},"audioAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAds":{"enabled":true,"skippingEnabled":false,"unskippableDuration":5},"videoAdsRatio":{"audio_audio":0.9,"audio_video":0.9,"video_video":1,"video_audio":0.9},"firstAdAfter":900,"subsequentAdsAfter":900},"signedOutPlays":10000,"playVideosLinkedToSongs":false,"messageMaxLength":4000,"emptyProfileImage":"/common/images/user.png","camanjsPath":"https://x.myspacecdn.com/new/stream/js/caman.b46d87ffa3c91c9293ec5aa666d31fd0.js"};
config = {"urls":{"cdn":"https://x.myspacecdn.com/new","playerSwf":"https://x.myspacecdn.com/new/common/swf/APIPlayer.2.12.323.a534095c60e5332b913d0d76971a00ff.swf?enableBeacons=false","upload":"/upload/","beacon":"/beacon","emptyPlaylistImage":"https://x.myspacecdn.com/new/common/images/mix.png","emptySongImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyAlbumImage":"https://x.myspacecdn.com/new/common/images/album.png","emptyVideoImage":"https://x.myspacecdn.com/new/common/images/video.png","videoSwf":"https://x.myspacecdn.com/new/common/swf/videoPlayer.74bbdd4cf8f3974ed0986ec1ed8fadc0.swf","videoConfig":"videoPlayerConfig.5434f1cdef1e738d03cc05fe25823aba.xml","clipboardSwf":"https://x.myspacecdn.com/new/common/swf/ZeroClipboard.9f4401cdc4405d0730362256b4c04cc0.swf","swfupload":"https://x.myspacecdn.com/new/common/swf/swfupload.3a1c6cc728dddc258091a601f28a9c12.swf","scomm":"https://x.myspacecdn.com/new/common/html/scomm.782b85c048f5996874a47f427bb592ac.html","noRail":"norail="},"thirdParty":{"facebookAppId":"574798425933678"}};</script>
<script src="<?php echo base_url();?>assets/new/common/js/global.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/authentication.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/common/js/player.default.min.js"></script>
<script src="<?php echo base_url();?>assets/new/stream/js/profileStreamJS.D2E99A967AAF86EA51E806C9C05BCE4A.min.js"></script>
<script src="<?php echo base_url();?>assets/new/profiles/js/landing.4D0E2A4C1C8D867C25FC2C6BB6A79D7E.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/twitter-popup-script.js"></script>

	
<?php /*?>	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId  : '574798425933678',
		  status : true, // check login status
		  cookie : true, // enable cookies to allow the server to access the session
		  xfbml  : true  // parse XFBML
		});
	  };
	
	  (function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	  }());
	</script><?php */?>
 
  
	<script type="text/javascript">
	$(document).ready(function(){
		
		
	$('#share_button').on('click', function(e){
		e.preventDefault();
		FB.ui(
		{
		method: "feed",
		name: "<?php echo $post[0]->Post_Headline; ?> | Nomad Magazine",
		link: " <?php echo base_url();?>article/view/<?php echo $post[0]->Post_Slug; ?>",
		picture: "<?php echo base_url();?><?php echo $this->config->item("thumbnails_upload_dir");?><?php echo $post[0]->Post_Thumbnail; ?>",
		caption: "Nomad Magazine",
		description: "<?php echo $post[0]->Post_Byline; ?>"
		});
	});
	
	
	
	
	
	$('#contract_panel').on('click', function(){	
		$("#profileWidget .panel_data, #profileWidget .panel_bottom_data").fadeOut("fast", function(){

									$( "#profileWidget" ).animate({
    										width: "0px",
    										marginLeft: "0px",
											padding: "0px"
  									}, 500, function(){
											$("#contract_panel").css("display","none");
											$("#expand_panel").css("display","inline-block");										
									});
									

		}); 
	});
	
	
	$('#expand_panel').on('click', function(){
									$("#expand_panel").css("display","none");
									$( "#profileWidget" ).animate({
    										width: "310px",
    										marginLeft: "-310px",
											padding: "30px"
  									}, 500, function(){
										$("#profileWidget .panel_data, #profileWidget .panel_bottom_data").fadeIn("fast");
										
										$("#contract_panel").css("display","inline-block");
									});
									

		
	});	
	

    $('#background video').on('loadeddata', function() {
       //$(this).prop('muted', false);
    });	
	$('#mute_button').on('click', function() {
       $("#background video").prop('muted', true);
	   $(this).css("display", "none");
	   $("#unmute_button").css("display", "block");
    });
	$('#unmute_button').on('click', function() {
       $("#background video").prop('muted', false);
	   $(this).css("display", "none");
	   $("#mute_button").css("display", "block");
    });












	
		

			<?php $counter = 1;?>
            <?php foreach( $postsdata as $postdata ) : ?>
			
			<?php $data_type_array["val".$counter] = $postdata["Data_Type"]; ?>				

            <?php $counter++; ?>
            <?php endforeach; ?>




var load_art_video = function(video){					
			//var video = document.getElementById(v);
            video.load(); // In desktop browser this will cause loadedmetadata event to fire
            // Hide the video initially
            //video.style.visibility = 'hidden';

            video.addEventListener('loadedmetadata', function() {
                
                // console log is much less intrusive than window.alert
                // you can see the log statements in Safari developer tools if you plug in a device
                //window.alert(this.videoWidth);
                //window.alert(this.videoHeight);
				//alert(foreground_container_width);
                // Now we can set container size, reveal and play
                video.width = this.videoWidth;
                //video.height = this.videoHeight;
//alert($(video).width());
                //video.play();
                //video.style.visibility = 'visible';
				foreground_container_width += $(video).width(); 
				$("#parallax #foreground").css("width", foreground_container_width);
            });
			
			
}






//---------------------------------------------------------------------------------	
	var postdatatype_json = <?php echo json_encode($data_type_array); ?>;
	var postdatatype_length = <?php echo count($data_type_array); ?>;
//---------------------------------------------------------------------------------
	
	 //foreground_container_width = 0;
	
function reset_layout(){
	
   var foreground_container_width = 707;
	
	var i=1;
	
	$.each(postdatatype_json, function(postdata_key, postdata_value) {
			
		var curr_class = ".frame"+i;
		var curr_mark_id = "#art1_markk";
			
		if(postdata_value == "article"){
							
				var curr_art_offset = $(curr_class+" "+curr_mark_id).position().left;
				var curr_art_column_w = $(curr_class+" #advanceEditorArticle").css("width");
				curr_art_column_w = curr_art_column_w.slice(0, -2)
				var art_w = parseInt(curr_art_offset)+parseInt(curr_art_column_w);
				$(curr_class).css("width", art_w);
				
				foreground_container_width += art_w;
				$("#parallax #foreground").css("width", foreground_container_width);
				
		}else if(postdata_value == "image"){
			
			var curr_art_column_w = $(curr_class+" #cover_image_container img").css("width");
			curr_art_column_w = curr_art_column_w.slice(0, -2);	
			var art_w = parseInt(curr_art_column_w);
			
			foreground_container_width += art_w;
			$("#parallax #foreground").css("width", foreground_container_width);
			
		}else if(postdata_value == "video"){
			var curr_vid = "article_video"+i;
			var video = document.getElementById(curr_vid);
			video.load();
			video.addEventListener('loadedmetadata', function() {    
            video.width = this.videoWidth;
			foreground_container_width += $(video).width(); 
			$("#parallax #foreground").css("width", foreground_container_width);
            });
		}

		
	i++;		
	});


}
reset_layout();

$(window).resize(function(){
	reset_layout();
});










<?php /*****************************************************************
- Optimize viewporrt on window resize
- fix ambiguity b/w window width and video width in front of viewport
************************************************************************
*/ ?>
//--------------------------------video on viewport detection-------------------
$.fn.is_on_screen = function(){
/*  var win = $(".horizontalContent>div");
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };*/
/*    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
 
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();*/

 	var win_width = $( window ).width();
	var win_five_percent = Math.round((win_width/100)*5);
	
 	var cal_distance = 0;
 	$(this).prevAll(".item-box").each(function(){
	 cal_distance += $(this).outerWidth();		 
 	});
 
	
	cal_distance -= win_five_percent; // forground already positioned from left by 95% of screen
	var current_cal = $(".horizontalContent>div").scrollLeft()-(cal_distance);

   
	return ((current_cal>$(this).outerWidth()/2) &&  (current_cal<(win_width+win_width/2)));
};




	var j=1;
	$.each(postdatatype_json, function(postdata_key, postdata_value) {
			
		 var curr_class = ".frame"+j;			
				 
		 if(postdata_value == "video"){
			  
			var curr_vid = "article_video"+j;
			
			$(".horizontalContent>div").scroll(function(){ 
					if( $(curr_class).is_on_screen() ) {
							document.getElementById(curr_vid).play();
					} else {	
							document.getElementById(curr_vid).pause();
					}
			});	
		}

		
	j++;		
	});
//---------------------------------------------------------------------------

	
	
	
	
	
	
	
	
	
	
	
	});
	</script>  








    
</body>
</html>

