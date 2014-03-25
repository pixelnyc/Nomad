WELCOME
=======

Thank you for downloading Final Tiles Gallery, by GreenTree Labs. This document will guide you through the installation and the customization process of this awesome plugin.




PLEASE, RATE IT!
================

Take just few seconds to rate this plugin on CodeCanyon, it will encourage us to further improve Final Tiles Gallery and release new updates.
To rate this plugin go to http://codecanyon.net on your profile page, look under 'Download' tab. Thank you!!




INSTALL
=======

Put jquery.finalTilesGallery.js in the js/ folder of your website. Include this file in the head of your page, be sure to include also an updated version of jQuery:

<html>
	<head>
	....
	<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="/js/jquery.finalTilesGallery.js"  type="text/javascript"></script>
	...
	</head>
	<body>
	....
	</body>
</html>




CSS
===

Final Tiles Gallery can be skinned as you like, but you can start with a minimal setup like the following:
		
		/* main container, probably you don't need this */
		#final-tg  { width: 80%; margin: 10px auto; display: block; }

		/* filters: skip the following lines if you don't use them */
        #final-tg ul { margin: 0; padding: 0; height: 50px; }
        #final-tg li { list-style-type: none; }
        #final-tg li a { color: #333; float: left; margin: 0 20px 0 0; padding: 5px 10px; text-decoration: none;  }
        #final-tg li a:hover, #final-tg li a.selected { background: #333; color: #fff; }
        /* filters: end */


        /* captions: skip the following lines if you don't use them */
        #final-tg .tile .caption {
	        position: absolute;
	        bottom: 0;
	        left: 0;
	        width: 100%;
	        background: url(images/opaque.png);
	        font-family: cursive;
	        opacity:0;
	        transition: all .3s;
        }
        #final-tg .tile a:hover .caption {
        	opacity:1;
        }
        #final-tg .tile .caption p {
	        margin:10px;
	        color: #fff;
	        font-size: 14px;	    
        }
        /* captions: end */
    
add these rules to the CSS of your site, otherwise insert it inside the STYLE tag and insert it in the HEAD of the page. Refer to the provided demos in case of doubt.




HTML SETUP
==========

1) First of all you need a container, like a SECTION, we'll give it an ID "final-tg". Inside it you have to insert the tiles container, it MUST have the "ftg-items" class:

	<section id="final-tg">
	    <div class="ftg-items"></div>
	</section>

2) Now add the tiles, they'll be inside an ARTICLE:
	
	<section id="final-tg">
	    <div class="ftg-items">
	    	<article class="tile ftg-set-1">
                <a href="photos/1.jpg">
                    <img class="item" src="photos/t_1.jpg" />
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>

            <article id="video" class="tile ftg-set-2" data-type="video">
                <iframe class="item" width="540" height="300" src="http://www.youtube.com/embed/M4yCwlDxPtY" frameborder="0" allowfullscreen></iframe>
            </article>
	    </div>
	</section>

as you can see, to insert a video you have to use the attribute "data-type" with the "video" value. 

3) If you want to use filters then you have to insert them in an element with the "ftg-filters" class, like this:

				<ul class="ftg-filters">
                    <li><a class="selected" href="#">All</a></li>
                    <li><a href="#set-1">Filter 1</a></li>
                    <li><a href="#set-2">Filter 2</a></li>
                    <li><a href="#set-3">Filter 3</a></li>
                </ul>

put it inside the main container. But how do filters work? It's very simple, clicking the filter <a href="#set-1">Filter 1</a> will hide any ARTICLE (a tile) that doesn't have the "set-1" class. An ARTICLE (a tile) can have multiple classes, so it can be viewed in more then one filter.

Our final HTML code will be like that:
	
	<!-- main container -->
	<section id="final-tg">

		<!-- filters -->
        <ul class="ftg-filters">
            <li><a class="selected" href="#">All</a></li>
            <li><a href="#set-1">Filter 1</a></li>
            <li><a href="#set-2">Filter 2</a></li>
            <li><a href="#set-3">Filter 3</a></li>
        </ul>

        <!-- tiles container -->
        <div class="ftg-items">

        	<!-- tile -->
            <article class="tile ftg-set-1">
                <a href="photos/1.jpg">
                    <img class="item" src="photos/t_1.jpg" />
                    
                    <!-- caption -->
                    <div class="caption">
                        <p>Photo title</p>
                    </div>
                </a>
            </article>
            
            <!-- a video inside a tile -->
            <article id="video" class="tile ftg-set-2" data-type="video">
                <iframe class="item" width="540" height="300" src="http://www.youtube.com/embed/M4yCwlDxPtY" frameborder="0" allowfullscreen></iframe>
            </article>
    </section>

4) To activate Final Tiles Gallery you have to call it like this:

	<script>
	$(".sprouts").finalTilesGallery({
		minTileWidth:180,
        margin: 15
	});
	</script>

all parameters are optional.


OPTIONS
=======

°	margin
		(int) margin between tiles;
°	minTileWidth
		(int) minimum width of a tile;
°   autoLoadURL
        (string) URL for ajax requests, it automatically activates infinite scrolling;
°   autoLoadOffset
        (int) pixels from bottom: when scrollbar reach this value the plugin do the ajax call;
°   gridCellSize
        (int) snap tiles to a grid of size 'gridCellSize' use a high value, for example 50 to increment probability of having the tiles aligned (but it could crop some pixels) otherwise use a lower value like 2 o 5 to reduce the crop, but also reduces the probability of having aligned tiles;
°	onComplete
		(function) this function will be called after the plugin activation;
°	onUpdate
		(function) this function will be called when the grid changes;


METHODS
=======

°	addElements(html)
		call this method on an instance of Final Tiles Gallery, for example:
		
		var instance = $("#final-tg").data("finalTilesGallery");
		instance.addElements(html);
		
		this method accept a string containing the HTML of the additional elements, for example:
		
		....
		<article class="tile ftg-set-1">
            <a href="photos/5.jpg">
                <img class="item" src="photos/t_5.jpg" />
                <div class="caption">
                    <p>Photo title</p>
                </div>
            </a>
        </article>
        <article class="tile ftg-set-1">
            <a href="photos/6.jpg">
                <img class="item" src="photos/t_6.jpg" />
                <div class="caption">
                    <p>Photo title</p>
                </div>
            </a>
        </article>
        ....
        
        However, if you have doubts, refer to the example (index.html) or contact us from our profile page http://codecanyon.net/user/GreenTreeLabs


CHANGELOG
=========
	
    v1.4 New features: infinite scrolling, snap tiles to grid
	v1.3 New feature: elements extension
	v1.2 New feature: read image size from attributes
	v1.1 Minor bug fix
	v1.0 First release 

