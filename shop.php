<?php 
/*$website_base_url = "http://localhost/nomadmag/";*/
$website_base_url = "http://nomadmag.co/";



if(!isset($_REQUEST['parent_cat'])){
	$PARENT_CATEGORY = "1";
		
}else{
	$PARENT_CATEGORY = $_REQUEST['parent_cat'];
}


	
	switch($PARENT_CATEGORY){
	
		case '1':
			
			$feat_sub_menu_style ="display:block;";
			break;	
			
		case '2':
			
			$man_sub_menu_style ="display:block;";
			break;	
			
		case '3':
		
			$woman_sub_menu_style ="display:block;";
			break;	
					
	}


?>





?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html id='V2014-HOMBRE-CAZADORAS' class='no-js lt-ie9 lt-ie8 lt-ie7 categoryPage two newDesign-2013-1' data-store='us'> <![endif]-->
<!--[if IE 7]>         <html id='V2014-HOMBRE-CAZADORAS' class='no-js lt-ie9 lt-ie8 categoryPage two newDesign-2013-1' data-store='us'> <![endif]-->
<!--[if IE 8]>         <html id='V2014-HOMBRE-CAZADORAS' class='no-js lt-ie9 categoryPage two newDesign-2013-1' data-store='us'> <![endif]-->
<!--[if gt IE 8]><!--> <html id='V2014-HOMBRE-CAZADORAS' class='no-js categoryPage two newDesign-2013-1' lang="en" data-store='us'> <!--<![endif]-->
	<head>
	
		

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset=utf-8 />




<?php /*?><script type="text/javascript">

!function(){function e(e){var o,t,n=e+"=",r=document.cookie.split(";")
	for(o=0;o<r.length;o++){for(t=r[o];" "===t.charAt(0);)t=t.substring(1,t.length)
	if(0===t.indexOf(n))return decodeURIComponent(t.substring(n.length,t.length))}return null}function o(e){var o,t=new Date
	o=e+"; domain="+g,o+="; path=/",t.setTime(t.getTime()+24*p*60*60*1e3),o+="; expires="+t.toGMTString(),document.cookie=w+"="+o}function t(e,o){var t=new XMLHttpRequest
	return t.open(e,o,!0),t}var n,r,c,a,i,l,u,w="WC_ZaraStoreId",d="WC_DevMode",p=30,s=window.location.href,g=window.location.host,h="http://www.zara.com/webapp/wcs/stores/servlet/ContentTargettingJSON",f=!1,m=!1
	if(l=s.match(/\w\/(\w{2})\/(\w{2})?\/?/),l&&l.length>2&&(r=l[1],c=l[2],null==typeof r||void 0===r||r.match(/xa|xk/)||(f=!0),null!=typeof c&&void 0!==c&&(m=!0)),i=e(w),i&&(i=i.split(","),i[0]&&i[1]&&(a=i[0].toLowerCase(),"gb"===a&&(a="uk"))),u=e(d),!u&&f&&(!a||a!==r)){h.match(/^http/)||(h=window.location.protocol+h)
	var v,T=t("get",h)
	T&&(T.onload=function(e){if(e.currentTarget.responseText&&(v=JSON.parse(e.currentTarget.responseText),v&&v.country_code))if(n=v.country_code.toLowerCase(),"gb"===n&&(n="uk"),r===n)m&&(i=r.replace("uk","gb")+","+c,o(i))
	else{o("")
	var t,a="",l="",u=""
	t=s.match(/utm_\w+=\w+/g),s=s.replace(/[?|&|#]utm_\w+=\w+/g,"").replace(/\?/g,"&").replace(/&/,"?"),t&&t.length>0&&(u="?"+t.join("&")),window.location.href.match(/\/(\w{2})\/(\w{2})?$/)||(a=(""!==u?"&":"?")+"go="+escape(s.replace(".cn",".com").replace(/\/\w{2}\/(\w{2})?(\/)?/,"/share/"))),""!==document.referrer&&(l="#utm_referrer="+encodeURIComponent(document.referrer)),window.location.href="http://"+window.location.host+u+a+l}},T.send())}}()

</script><?php */?>


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


		<title>Nomad Magazine</title>
	
		<meta name="description" content="Jackets" />
	
<meta name="author" content="">
<meta http-equiv="last-modified" content="2014-02-22@10:10:34 +0000" >


<meta name="viewport" content="width=1024">



<script type="text/javascript">	
	var zara = zara || {}; 
	zara.globals = {}; 
	zara.extensions = []; 
	zara.experiments = []; 
	zara.dataset = {}; 
	zara.dataset.tracker = {}; 
	var cFns = [];
</script>


<?php /*?>
		<script>
			if(zara.dataset.tracker) {
				zara.dataset.tracker.gatracker = {
					tracker: {
						ua 						: 'UA-18083935-1',
						domainName 				: '.zara.com',
						campaingCookieTimeOut 	: 604800000,
						siteSpeedSampleRate 	: 1
					},
					view: {
						uriBasePrefix 			: '/stc/',
						storeLanguage			: 'en',
						storeDirectory			: 'ZARA_US'
					}
				};
			}
		</script>
		<script type="text/javascript">
cFns.push(function() {
			zara.core.startModule('googleAnalytics', zara.dataset.tracker.gatracker);
		});</script><script type="text/javascript">
cFns.push(function() {
		zara.core.startModule('userTrackingModule');
	});</script><?php */?>
    
    

<link rel="stylesheet" type="text/css" media="all" href="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/css/application-comp-1392924153978.css" />
		
<link rel="stylesheet" type="text/css" media="all" href="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/css/category-comp-1392924153978.css" />   
    
    
<?php /*?><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website_base_url?>assets/shop/css/application-comp-1392924153978.css" />
		
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website_base_url?>assets/shop/css/category-comp-1392924153978.css" /><?php */?>


<script type="text/javascript">
cFns.push(function() {
  var categories = [
      429501 //
       ,563001 // wear to wear- M
       ,572541  // Soft wear
       ,572542 
       ,572535 
       ,572543
       ,574014
       ,574011
       ,367001 //Lookbook
       ,578517 //Dear Seattle
  ];
  var selector = categories.map(function(i) { return '#menuItemData_' + i + ' > a' }).join(',');
  $$(selector).each(function(li){
      var label=new Element('span.menu-label', {text:"NEW"});
      li.grab(label, 'after');
  });


  if (zara.core.context.globals.countryCode === 'dk') {
     var label=new Element('span.menu-label', {text:"NEW"});
     $$('#menuItemData_295501 > a').grab(label, 'after');
  }



});
</script>
<?php /*?><script>
zara.extensions.unshift(function(ctx){
   ctx.globals.staticContent =  'http://static.zara.net/static/'.split(':')[1];
   ctx.globals.videoContent = 'http://static.zara.net/video/'.split(':')[1];
   ctx.globals.catalogId = 24056;
   $(document.html).data('store', ctx.globals.countryCode);
   if (!Modernizr.touch && Browser.ie) { $(document.html).addClass('ie'); }
});
</script>
<script src="//cdn.optimizely.com/js/151300895.js"></script><?php */?>



<?php /*?><script>
(function() {
  var staticContentPath = 'http://static.zara.net/static/'.split(':')[1];
  document.write("<link rel='stylesheet' type='text/css' media='all' href='" + staticContentPath + "/common/css/standard-v.3.12.min.css' />");
  document.write("<script src='" + staticContentPath + "/common/js/zaralib-p-v.0.5.min.js' type='text/javascript' charset='utf-8'></scr" + "ipt>");
  document.write("<script src='" + staticContentPath + "/common/js/extensions-v.0.10.min.js' type='text/javascript' charset='utf-8'></scr" + "ipt>");
}());
</script><?php */?>





<script>
(function() {
  var staticContentPath = '<?php echo $website_base_url?>assets/shop/'.split(':')[1];
  document.write("<link rel='stylesheet' type='text/css' media='all' href='" + staticContentPath + "/common/css/standard-v.3.12.min.css' />");
  document.write("<script src='" + staticContentPath + "/common/js/zaralib-p-v.0.5.min.js' type='text/javascript' charset='utf-8'></scr" + "ipt>");
  document.write("<script src='" + staticContentPath + "/common/js/extensions-v.0.10.min.js' type='text/javascript' charset='utf-8'></scr" + "ipt>");
}());
</script>



<?php /* It removes the top area...*/ ?>
<?php /*?><script>
(function() {
  var staticContentPath = 'http://static.zara.net/static/'.split(':')[1];

  if (zara.core) {
    zara.core.context.salesService();
    return;
  }

  document.write("<script type='text/javascript' src='" + staticContentPath + "/2013/I/sale/messages/sales-service-v.0.0.26.min.js'></scr" + "ipt>");
}());
</script><?php */?>









<script src="<?php echo $website_base_url;?>assets/shop/js/lib/modernizr/modernizr-comp-1392924153978.js"></script>
<!--[if lt IE 9]>
	
<script src="<?php echo $website_base_url?>assets/shop/js/lib/html5shiv/html5-comp-1392924153978.js"></script>	
	
<![endif]-->







<?php /*?><link rel="shortcut icon" type="image/x-icon" href="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/images/favicon.ico" />

		<link rel="canonical" href="http://www.zara.com/us/en/man/jackets-c564607.html" />
<?php */?>




<style>

.submenu_list{

	
	display:none;
}

</style>


	</head>
	<body class="staticMenu" itemscope itemtype="http://schema.org/WebPage">

		
		<div itemscope itemtype="http://schema.org/Organization">
	

<?php /*?>	<a style="background:#000;" id="logo" class="fixed gaTrack gaViewEvent" href='<?php echo $website_base_url?>' title="Go to the Zara homepage" itemprop="url" data-ga-props="{category:'Barra_Superior', action:'Ir_a_la_Home', opt_label:'ZARA'}">
	 	<img src="<?php echo $website_base_url?>assets/images/nomad-logo.png" alt="ZARA United States" itemprop="logo"/>
	</a><?php */?>


		</div>
	
		
		<div id='page-container' class="gaView gaReplaceLogicGuionBar gaCategoryPage gaPaginate" data-ga-props="{logic:'NA:V2014-HOMBRE-CAZADORAS', eventDefaults:{category: 'Categoria_productos'}}">
			<header id='header' class="content-main fixed">
				<!-- User menu section -->
		<nav class="_menuUser">
		</nav>
		
		
<?php /*?><script id="user.userMenuTpl" type="text/template">
	
	<ul id="header-actions">
	
		
			<li class="_userLang">
				<a href="#">Languages</a>
				
				<ul class="list-languages">
				
							<li class="current">
								<a href="#">English</a>
						
					</li>
				
							<li>
								<a id="lang-5"
									class="changeLangLink gaTrack gaViewEvent" data-langId="-5" 
									data-langCode="es"
									data-ga-props="{category:'Menu_Usuario', action:'Cambiar_Idioma', opt_label:'es'}"
									href=http://www.zara.com/us/es/man/jackets-c564607.html>
										Español
								</a>
						
					</li>
				
				</ul>
			</li>
		
		
		{{#isLogged}}
			<li>
				<a id="myAccountLink" href="https://www.zara.com/webapp/wcs/stores/servlet/UserAccountView?catalogId=24056&fts=0&myAcctMain=1&categoryId=564607&langId=-1&storeId=11719" class="myAccountLink gaTrack gaViewEvent" data-ga-props="{category:'Barra_Superior', action:'Mi_Cuenta'}">
					{{username}}
				</a>
			</li>
			<li>
				<a id="logoutLink" href="https://www.zara.com/webapp/wcs/stores/servlet/Logoff?catalogId=24056&myAcctMain=1&langId=-1&storeId=11719&URL=HomePage" class="logoutLink gaTrack gaViewEvent" data-ga-props="{category:'Barra_Superior', action:'Desconectar'}">
					Log Out
				</a>
			</li>
			
		{{/isLogged}}
		{{^isLogged}}
			{{^noLogin}}
			<li>
				<a id="logonLink" class="logonLink" href="http://www.zara.com/webapp/wcs/stores/servlet/logonform/us/en/zara-nam-S2013?myAcctMain=1" data-staticLogon="http://www.zara.com/webapp/wcs/stores/servlet/StaticLogonView?catalogId=24056&langId=-1&storeId=11719">
					Log In
				</a>  
			</li>
			{{/noLogin}}
		{{/isLogged}}
		
		<li id="miniShopCart" class="miniShopCart">
			{{#hasOrderItems}}
				<a href="https://www.zara.com/webapp/wcs/stores/servlet/ShopCartPage?catalogId=24056&orderId=.&langId=-1&storeId=11719" tabindex="0" id="shoppingCartBar" class="shoppingCartBar smallShopBagHead">			 
					Shopping bag - <span id="miniShopCartItems">{{productsCount}}</span> -
				</a>
			{{/hasOrderItems}}	
			{{^hasOrderItems}}	
				<span class="shoppingCartBar smallShopBagHead">
					Shopping bag - <span id="miniShopCartItems">{{productsCount}}</span> -
				</span>
			{{/hasOrderItems}}
			<div id="smallShopBagWrapId" class="smallShopBagWrap">
				<div class="smallShopBag" id="smallShopBagId">
					<div class="lt ieSh"> </div>
					<div class="lb ieSh"> </div>
					<div class="rb ieSh"> </div>
					<div class="rt ieSh"></div>
					<div class="smallShopBagCont">
						<ul>
							{{#orderItems}}
								<li data-orderItem="{{id}}">
									<span class="imageProd">
										<img alt="{{description}}" src="{{imgUrl}}">
									</span>																	
									<span class="descProd">
										<a class="gaProductDetailsLink _shopCartProductLnk" data-pRef="{{partnumber}}" data-pColor="{{pColor}}" data-ga-props="{productRef:'{{partnumber}}', catentryId:'{{productId}}', sourceType:'Barra_Superior'}" href="{{productUrl}}">
											{{description}}
										</a>
										<span class="price">
											{{#multi}}
												{{quantity}} X
											{{/multi}}			
											{{price}}
										</span>
									</span>																																																														
								</li>
							{{/orderItems}}
												
							{{#hiddenItems}}
								<li data-ga-props="{category:'Barra_Superior', action:'Ver_Cesta'}" class="moreItems gaTrack gaViewEvent">
									<a title="See all products in the shopping bag" href="https://www.zara.com/webapp/wcs/stores/servlet/ShopCartPage?catalogId=24056&orderId=.&langId=-1&storeId=11719">
										{{{hiddenItemsMsg}}}
									</a>
								</li>								
							{{/hiddenItems}}
							
						</ul>
						<div class="linkShopBag">
							<div class="actions">
								<a data-ga-props="{category:'Barra_Superior', action:'Ver_Cesta'}" href="https://www.zara.com/webapp/wcs/stores/servlet/ShopCartPage?catalogId=24056&orderId=.&langId=-1&storeId=11719" class="viewShopCartBt button butSmallBlack gaTrack gaViewEvent">						
									<span>
										See shopping bag
									</span>
								</a>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</li>

		<li class="_userHelp">
			<a href='http://www.zara.com/us/en/-c11113.html'>Contact</a>
		</li>

			{{#hasConnect}}
			<li class="divider">&nbsp;</li>
			<li class="chats">
				<a href="#" data-ga-props="{category:'Barra_Superior', action:'Share', opt_label:'Friends'}"
				{{^isConnectDisabled}}
					class="sbopenclose gaTrack gaViewEvent"
				{{/isConnectDisabled}}
				{{#isConnectDisabled}}		
					class="disabled"	
				{{/isConnectDisabled}}
			>FRIENDS!</a>
			</li>	
			{{/hasConnect}}
	</ul>
	
</script><?php */?>







<?php /* This will add top to bottom scroll........*/ ?>
<script type="text/javascript">
cFns.push(function() {					
			zara.core.startModule('ItxUserMenuModule', {
				userInfoUrl: '<?php /*?>http://www.zara.com/webapp/wcs/stores/servlet/UserMenuDataJSON?catalogId=24056&langId=-1&storeId=11719<?php */?>',
				containerSelector: 'nav._menuUser',
				userMenuTemplateName: 'user.userMenuTpl',
				catEntryDisplayBaseUrl: '<?php /*?>http://www.zara.com/us/en<?php */?>',
				noLogin: false
			});
		});</script>
			</header>
			<section id='main' class="content-main">
				<!-- Please - Do not remove this comment.  --><script>
  zara.extensions.push(function(ctx){
    var references = {
      '1323546711':  3,
      '8574509406':  2,
      '6751601800':  4,
      '8574664732':  3,
      '6987505400':  5
    };

    var hasGifs = Object.keys(references).some(function(reference) {
      return !!ctx.dom.findEl("[data-src*=" + reference + "]");
    });
    if (!hasGifs) return;

    Asset.javascript(ctx.globals.staticContent + "/2014/V/web/category/product/gif-v.0.2.min.js", {
      onLoad: function(){
        for (var reference in references) {
          try {
            var frames, gif;
            frames = references[reference];
            gif = new Gif(reference, frames);
            addDroppables(gif.droppables);
          } catch (e) {}
        }
      }
    });
  });
</script><!-- Please - Do not remove this comment.  -->

<?php /* This will add top to bottom scroll........*/ ?>









				<section id='products' class="category-content">
			
					<ul id="product-list">
						
									<li class="product grid-element " id="productId_1668480" data-keyword="man/jackets/jacket-with-zips-on-shoulders" data-catType="P" data-imgRatio="081">
								
									<a target="_blank" href='http://staging.nomadmag.nmrkt.com/go/0/4658/0/0/http%253A%252F%252Fwww.onassisclothing.com%252Fnew-arrivals%252Fknit-blazer-cardigan.html%253Fcolor_swatch%253D542' data-item='1668480'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706417-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'35', page:'Todos'}" >
										<img 
											data-src="//cdn.nmrkt.com/images/uploaded/attch00faea2d56cc7f09d7bed53ba26cc97a_22.jpg"
											alt="Knit Blazer Cardigan | Mens Knitwear | Onassis Clothing" class="sbdraggable"
											id="product_img_1668480" data-ref="00706417-V2014" data-color="800"
											sb-id="00706417800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' target="_blank" href="http://staging.nomadmag.nmrkt.com/go/0/4658/0/0/http%253A%252F%252Fwww.onassisclothing.com%252Fnew-arrivals%252Fknit-blazer-cardigan.html%253Fcolor_swatch%253D542"  data-ga-props="{productRef:'00706417-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'35', page:'Todos'}">Knit Blazer Cardigan | Mens Knitwear | Onassis Clothing</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1749017" data-keyword="man/jackets/suede-jacket" data-catType="P" data-imgRatio="081">									
								
									<a href='#' data-item='1749017'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01608403-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'1', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1608/403/490/2/w/400/1608403490_2_1_1.jpg?timestamp=1392835186710"
											alt="SUEDE JACKET" class="sbdraggable"
											id="product_img_1749017" data-ref="01608403-V2014" data-color="490"
											sb-id="01608403490" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-new">New</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01608403-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'1', page:'Todos'}">SUEDE JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667457" data-keyword="man/jackets/jacket-with-contrasting-ribbing" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667457'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475466-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'2', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/466/401/2/w/400/5475466401_1_1_1.jpg?timestamp=1392835510398"
											alt="JACKET WITH CONTRASTING RIBBING" class="sbdraggable"
											id="product_img_1667457" data-ref="05475466-V2014" data-color="401"
											sb-id="05475466401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-new">New</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475466-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'2', page:'Todos'}">JACKET WITH CONTRASTING RIBBING</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668802" data-keyword="man/jackets/combination-jacket-with-faux-leather-sleeves" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668802'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706411-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'3', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/411/922/2/w/400/0706411922_2_1_1.jpg?timestamp=1392834623347"
											alt="COMBINATION JACKET WITH FAUX LEATHER SLEEVES" class="sbdraggable"
											id="product_img_1668802" data-ref="00706411-V2014" data-color="922"
											sb-id="00706411922" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-new">New</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706411-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'3', page:'Todos'}">COMBINATION JACKET WITH FAUX LEATHER SLEEVES</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692225" data-keyword="man/jackets/jacket-with-patch-and-epaulettes" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692225'  class='item gaProductDetailsLink' data-ga-props="{productRef:'07248400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'4', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/7248/400/401/2/w/400/7248400401_2_2_1.jpg?timestamp=1389986970040"
											alt="JACKET WITH PATCH AND EPAULETTES" class="sbdraggable"
											id="product_img_1692225" data-ref="07248400-V2014" data-color="401"
											sb-id="07248400401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'07248400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'4', page:'Todos'}">JACKET WITH PATCH AND EPAULETTES</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668755" data-keyword="man/jackets/faux-leather-jacket-with-marl-hood" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668755'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706423-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'5', page:'Todos'}" >
										<img 
											data-src="http://www.vpwallpapers.com/wp-content/uploads/2014/01/Kristen-Stewart-8.jpg"
											alt="FAUX LEATHER JACKET WITH MARL HOOD" class="sbdraggable"
											id="product_img_1668755" data-ref="00706423-V2014" data-color="811"
											sb-id="00706423811" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706423-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'5', page:'Todos'}">FAUX LEATHER JACKET WITH MARL HOOD</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667888" data-keyword="man/jackets/animal-print-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667888'  class='item gaProductDetailsLink' data-ga-props="{productRef:'07248402-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'6', page:'Todos'}" >
										<img 
											data-src="http://nomadmag.co//uploads/gallery/image-gallery/1391012414.jpg"
											alt="ANIMAL PRINT JACKET" class="sbdraggable"
											id="product_img_1667888" data-ref="07248402-V2014" data-color="505"
											sb-id="07248402505" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'07248402-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'6', page:'Todos'}">ANIMAL PRINT JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692226" data-keyword="man/jackets/jacket-with-patch-and-epaulettes" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692226'  class='item gaProductDetailsLink' data-ga-props="{productRef:'07248400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'7', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/7248/400/707/2/w/400/7248400707_2_1_1.jpg?timestamp=1389987003744"
											alt="JACKET WITH PATCH AND EPAULETTES" class="sbdraggable"
											id="product_img_1692226" data-ref="07248400-V2014" data-color="707"

											sb-id="07248400707" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'07248400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'7', page:'Todos'}">JACKET WITH PATCH AND EPAULETTES</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667892" data-keyword="man/jackets/bomber-jacket-with-printed-lining" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667892'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'8', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/452/505/2/w/400/5475452505_1_1_1.jpg?timestamp=1391191726939"
											alt="BOMBER JACKET WITH PRINTED LINING" class="sbdraggable"
											id="product_img_1667892" data-ref="05475452-V2014" data-color="505"
											sb-id="05475452505" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-lookbook">Lookbook</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'8', page:'Todos'}">BOMBER JACKET WITH PRINTED LINING</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668106" data-keyword="man/jackets/cotton-jacket-with-elbow-patches-and-top-stitching-on-the-shoulder" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668106'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475465-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'9', page:'Todos'}" >
										<img 
											data-src="http://nomadmag.co//uploads/gallery/image-gallery/1391012414.jpg"
											alt="COTTON JACKET WITH ELBOW PATCHES AND TOP STITCHING ON THE SHOULDER" class="sbdraggable"
											id="product_img_1668106" data-ref="05475465-V2014" data-color="707"
											sb-id="05475465707" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475465-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'9', page:'Todos'}">COTTON JACKET WITH ELBOW PATCHES AND TOP STITCHING ON THE SHOULDER</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668103" data-keyword="man/jackets/short-crossover-trench-coat" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668103'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01922401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'10', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1922/401/707/2/w/400/1922401707_2_6_1.jpg?timestamp=1389367394045"
											alt="SHORT CROSSOVER TRENCH COAT" class="sbdraggable"
											id="product_img_1668103" data-ref="01922401-V2014" data-color="707"
											sb-id="01922401707" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01922401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'10', page:'Todos'}">SHORT CROSSOVER TRENCH COAT</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="169.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668479" data-keyword="man/jackets/faux-leather-biker-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668479'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706408-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'11', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/408/250/2/w/400/0706408250_2_1_1.jpg?timestamp=1392834574025"
											alt="FAUX LEATHER BIKER JACKET" class="sbdraggable"
											id="product_img_1668479" data-ref="00706408-V2014" data-color="250"
											sb-id="00706408250" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-lookbook">Lookbook</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706408-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'11', page:'Todos'}">FAUX LEATHER BIKER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="169.00  USD"></span>
												
									</span>
									
										<div class="moreColors">
											+ Colours
										</div>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668577" data-keyword="man/jackets/faux-leather-biker-waistcoat" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668577'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706419-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'12', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/419/800/2/w/400/0706419800_2_3_1.jpg?timestamp=1391197266842"
											alt="FAUX LEATHER BIKER WAISTCOAT" class="sbdraggable"
											id="product_img_1668577" data-ref="00706419-V2014" data-color="800"
											sb-id="00706419800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706419-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'12', page:'Todos'}">FAUX LEATHER BIKER WAISTCOAT</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1666552" data-keyword="man/jackets/piqu%C3%A9-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1666552'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01792401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'13', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1792/401/812/2/w/400/1792401812_2_3_1.jpg?timestamp=1389985840016"
											alt="PIQUÉ JACKET" class="sbdraggable"
											id="product_img_1666552" data-ref="01792401-V2014" data-color="812"
											sb-id="01792401812" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01792401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'13', page:'Todos'}">PIQUÉ JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1666553" data-keyword="man/jackets/knit-technical-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1666553'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01792404-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'14', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1792/404/803/2/w/400/1792404803_1_1_1.jpg?timestamp=1389367363920"
											alt="KNIT TECHNICAL JACKET" class="sbdraggable"
											id="product_img_1666553" data-ref="01792404-V2014" data-color="803"
											sb-id="01792404803" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01792404-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'14', page:'Todos'}">KNIT TECHNICAL JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="59.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667733" data-keyword="man/jackets/denim-jacket-with-detachable-sleeves" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667733'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06096432-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'15', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6096/432/407/2/w/400/6096432407_2_3_1.jpg?timestamp=1388147815602"
											alt="DENIM JACKET WITH DETACHABLE SLEEVES" class="sbdraggable"
											id="product_img_1667733" data-ref="06096432-V2014" data-color="407"
											sb-id="06096432407" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06096432-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'15', page:'Todos'}">DENIM JACKET WITH DETACHABLE SLEEVES</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667815" data-keyword="man/jackets/denim-jacket-with-faux-leather-sleeves-and-hood" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667815'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06096431-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'16', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6096/431/427/2/w/400/6096431427_2_2_1.jpg?timestamp=1390419446742"
											alt="DENIM JACKET WITH FAUX LEATHER SLEEVES AND HOOD" class="sbdraggable"
											id="product_img_1667815" data-ref="06096431-V2014" data-color="427"
											sb-id="06096431427" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06096431-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'16', page:'Todos'}">DENIM JACKET WITH FAUX LEATHER SLEEVES AND HOOD</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667439" data-keyword="man/jackets/sailor-style-trench-coat" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667439'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06719452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'17', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6719/452/401/2/w/400/6719452401_2_1_1.jpg?timestamp=1388767306961"
											alt="SAILOR STYLE TRENCH COAT" class="sbdraggable"
											id="product_img_1667439" data-ref="06719452-V2014" data-color="401"
											sb-id="06719452401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-lookbook">Lookbook</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06719452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'17', page:'Todos'}">SAILOR STYLE TRENCH COAT</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="189.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667446" data-keyword="man/jackets/combination-cotton-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667446'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706416-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'18', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/416/401/2/w/400/0706416401_2_4_1.jpg?timestamp=1391023107006"
											alt="COMBINATION COTTON JACKET" class="sbdraggable"
											id="product_img_1667446" data-ref="00706416-V2014" data-color="401"
											sb-id="00706416401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706416-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'18', page:'Todos'}">COMBINATION COTTON JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element double" id="productId_1667447" data-keyword="man/jackets/combined-jacket-with-zip-on-collar" data-catType="P" data-imgRatio="161">
								
									<a href='#' data-item='1667447'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475463-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'19', page:'Todos'}" >
										
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/463/401/2/w/400/5475463401_9_1_1.jpg?timestamp=1391023871570"
											data-src-simple="//static.zara.net/photos//2014/V/0/2/p/5475/463/401/2/w/400/5475463401_2_1_1.jpg?timestamp=1391023837464"
											data-src-double="//static.zara.net/photos//2014/V/0/2/p/5475/463/401/2/w/400/5475463401_9_1_1.jpg?timestamp=1391023871570"
											alt="COMBINED JACKET WITH ZIP ON COLLAR" class="sbdraggable"
											id="product_img_1667447" data-ref="05475463-V2014" data-color="401"
											sb-id="05475463401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475463-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'19', page:'Todos'}">COMBINED JACKET WITH ZIP ON COLLAR</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667886" data-keyword="man/jackets/jacket-with-a-high-collar-and-faux-leather-appliqu%C3%A9s" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667886'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06518450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'20', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6518/450/710/2/w/400/6518450710_2_1_1.jpg?timestamp=1390589086207"
											alt="JACKET WITH A HIGH COLLAR AND FAUX LEATHER APPLIQUÉS" class="sbdraggable"
											id="product_img_1667886" data-ref="06518450-V2014" data-color="710"
											sb-id="06518450710" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06518450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'20', page:'Todos'}">JACKET WITH A HIGH COLLAR AND FAUX LEATHER APPLIQUÉS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668481" data-keyword="man/jackets/tropical-print-jacket" data-catType="P" data-imgRatio="161">
								
									<a href='#' data-item='1668481'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06641400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'21', page:'Todos'}" >
										
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6641/400/800/2/w/400/6641400800_1_1_1.jpg?timestamp=1391688041538"
											data-src-simple="//static.zara.net/photos//2014/V/0/2/p/6641/400/800/2/w/400/6641400800_1_1_1.jpg?timestamp=1391688041538"
											data-src-double="//static.zara.net/photos//2014/V/0/2/p/6641/400/800/2/w/400/6641400800_9_1_1.jpg?timestamp=1391688037526"
											alt="TROPICAL PRINT JACKET" class="sbdraggable"
											id="product_img_1668481" data-ref="06641400-V2014" data-color="800"
											sb-id="06641400800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06641400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'21', page:'Todos'}">TROPICAL PRINT JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667836" data-keyword="man/jackets/jacket-with-yellow-mesh-lining" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667836'  class='item gaProductDetailsLink' data-ga-props="{productRef:'07248401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'22', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/7248/401/500/2/w/400/7248401500_2_1_1.jpg?timestamp=1390587577248"
											alt="JACKET WITH YELLOW MESH LINING" class="sbdraggable"
											id="product_img_1667836" data-ref="07248401-V2014" data-color="500"
											sb-id="07248401500" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'07248401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'22', page:'Todos'}">JACKET WITH YELLOW MESH LINING</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668105" data-keyword="man/jackets/jacket-with-pockets-and-contrasting-sleeves" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668105'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475461-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'23', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/461/707/2/w/400/5475461707_1_1_1.jpg?timestamp=1391632941256"
											alt="JACKET WITH POCKETS AND CONTRASTING SLEEVES" class="sbdraggable"
											id="product_img_1668105" data-ref="05475461-V2014" data-color="707"
											sb-id="05475461707" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475461-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'23', page:'Todos'}">JACKET WITH POCKETS AND CONTRASTING SLEEVES</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667455" data-keyword="man/jackets/navy-jacket-with-yellow-collar" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667455'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475462-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'24', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/462/401/2/w/400/5475462401_1_1_1.jpg?timestamp=1390587395001"
											alt="NAVY JACKET WITH YELLOW COLLAR" class="sbdraggable"
											id="product_img_1667455" data-ref="05475462-V2014" data-color="401"
											sb-id="05475462401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475462-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'24', page:'Todos'}">NAVY JACKET WITH YELLOW COLLAR</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1666554" data-keyword="man/jackets/jacket-with-yoke" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1666554'  class='item gaProductDetailsLink' data-ga-props="{productRef:'03457400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'25', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/3457/400/401/2/w/400/3457400401_2_4_1.jpg?timestamp=1389367555114"
											alt="JACKET WITH YOKE" class="sbdraggable"
											id="product_img_1666554" data-ref="03457400-V2014" data-color="401"
											sb-id="03457400401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'03457400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'25', page:'Todos'}">JACKET WITH YOKE</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="69.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667946" data-keyword="man/jackets/red-bomber-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667946'  class='item gaProductDetailsLink' data-ga-props="{productRef:'04803400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'26', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/4803/400/600/2/w/400/4803400600_2_2_1.jpg?timestamp=1390587324828"
											alt="RED BOMBER JACKET" class="sbdraggable"
											id="product_img_1667946" data-ref="04803400-V2014" data-color="600"
											sb-id="04803400600" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'04803400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'26', page:'Todos'}">RED BOMBER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667885" data-keyword="man/jackets/combined-cotton-and-linen-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667885'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06719454-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'27', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_1_1_1.jpg?timestamp=1391191781649"
											alt="COMBINED COTTON AND LINEN JACKET" class="sbdraggable"
											id="product_img_1667885" data-ref="06719454-V2014" data-color="505"
											sb-id="06719454505" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06719454-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'27', page:'Todos'}">COMBINED COTTON AND LINEN JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="169.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667884" data-keyword="man/jackets/leather-jacket-with-knit-collar" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1667884'  class='item gaProductDetailsLink' data-ga-props="{productRef:'02969450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'28', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/2969/450/505/2/w/400/2969450505_2_4_1.jpg?timestamp=1389367522648"
											alt="LEATHER JACKET WITH KNIT COLLAR" class="sbdraggable"
											id="product_img_1667884" data-ref="02969450-V2014" data-color="505"
											sb-id="02969450505" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'02969450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'28', page:'Todos'}">LEATHER JACKET WITH KNIT COLLAR</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="189.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668486" data-keyword="man/jackets/combined-faux-leather-and-nylon-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668486'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706405-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'29', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/405/800/2/w/400/0706405800_2_1_1.jpg?timestamp=1386937185292"
											alt="COMBINED FAUX LEATHER AND NYLON JACKET" class="sbdraggable"
											id="product_img_1668486" data-ref="00706405-V2014" data-color="800"
											sb-id="00706405800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706405-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'29', page:'Todos'}">COMBINED FAUX LEATHER AND NYLON JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668056" data-keyword="man/jackets/synthetic-leather-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668056'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706413-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'30', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/413/700/2/w/400/0706413700_6_1_1.jpg?timestamp=1389782477280"
											alt="SYNTHETIC LEATHER JACKET" class="sbdraggable"
											id="product_img_1668056" data-ref="00706413-V2014" data-color="700"
											sb-id="00706413700" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706413-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'30', page:'Todos'}">SYNTHETIC LEATHER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	

									</li><li class="product grid-element " id="productId_1668242" data-keyword="man/jackets/leather-overshirt" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668242'  class='item gaProductDetailsLink' data-ga-props="{productRef:'07226400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'31', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/7226/400/778/2/w/400/7226400778_1_1_1.jpg?timestamp=1389368199627"
											alt="LEATHER OVERSHIRT" class="sbdraggable"
											id="product_img_1668242" data-ref="07226400-V2014" data-color="778"
											sb-id="07226400778" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'07226400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'31', page:'Todos'}">LEATHER OVERSHIRT</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="189.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668456" data-keyword="man/jackets/technical-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668456'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01792403-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'32', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1792/403/800/2/w/400/1792403800_1_1_1.jpg?timestamp=1389367331366"
											alt="TECHNICAL JACKET" class="sbdraggable"
											id="product_img_1668456" data-ref="01792403-V2014" data-color="800"
											sb-id="01792403800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01792403-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'32', page:'Todos'}">TECHNICAL JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="59.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668460" data-keyword="man/jackets/wool-bomber-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668460'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706470-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'33', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/470/800/2/w/400/0706470800_1_1_1.jpg?timestamp=1391197387735"
											alt="WOOL BOMBER JACKET" class="sbdraggable"
											id="product_img_1668460" data-ref="00706470-V2014" data-color="800"
											sb-id="00706470800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-lookbook">Lookbook</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706470-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'33', page:'Todos'}">WOOL BOMBER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="169.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668461" data-keyword="man/jackets/parka-with-4-pockets-and-hood" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668461'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06518456-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'34', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6518/456/800/2/w/400/6518456800_2_2_1.jpg?timestamp=1387388970475"
											alt="PARKA WITH 4 POCKETS AND HOOD" class="sbdraggable"
											id="product_img_1668461" data-ref="06518456-V2014" data-color="800"
											sb-id="06518456800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06518456-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'34', page:'Todos'}">PARKA WITH 4 POCKETS AND HOOD</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="169.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668480" data-keyword="man/jackets/jacket-with-zips-on-shoulders" data-catType="P" data-imgRatio="081">
								
									<a target="_blank" href='http://staging.nomadmag.nmrkt.com/go/0/4658/0/0/http%253A%252F%252Fwww.onassisclothing.com%252Fnew-arrivals%252Fknit-blazer-cardigan.html%253Fcolor_swatch%253D542' data-item='1668480'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706417-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'35', page:'Todos'}" >
										<img 
											data-src="//cdn.nmrkt.com/images/uploaded/attch00faea2d56cc7f09d7bed53ba26cc97a_22.jpg"
											alt="Knit Blazer Cardigan | Mens Knitwear | Onassis Clothing" class="sbdraggable"
											id="product_img_1668480" data-ref="00706417-V2014" data-color="800"
											sb-id="00706417800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' target="_blank" href="http://staging.nomadmag.nmrkt.com/go/0/4658/0/0/http%253A%252F%252Fwww.onassisclothing.com%252Fnew-arrivals%252Fknit-blazer-cardigan.html%253Fcolor_swatch%253D542"  data-ga-props="{productRef:'00706417-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'35', page:'Todos'}">Knit Blazer Cardigan | Mens Knitwear | Onassis Clothing</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692223" data-keyword="man/jackets/nylon-jacket-with-patch-pockets" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692223'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706407-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'36', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/407/401/2/w/400/0706407401_1_1_1.jpg?timestamp=1390222867199"
											alt="NYLON JACKET WITH PATCH POCKETS" class="sbdraggable"
											id="product_img_1692223" data-ref="00706407-V2014" data-color="401"
											sb-id="00706407401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706407-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'36', page:'Todos'}">NYLON JACKET WITH PATCH POCKETS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668483" data-keyword="man/jackets/jacket-with-zip-collar" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668483'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05071400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'37', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5071/400/800/2/w/400/5071400800_1_1_1.jpg?timestamp=1389367981040"
											alt="JACKET WITH ZIP COLLAR" class="sbdraggable"
											id="product_img_1668483" data-ref="05071400-V2014" data-color="800"
											sb-id="05071400800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05071400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'37', page:'Todos'}">JACKET WITH ZIP COLLAR</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668485" data-keyword="man/jackets/faux-leather-jacket-with-knitted-side-panels" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668485'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706406-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'38', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/406/800/2/w/400/0706406800_2_1_1.jpg?timestamp=1386261657437"
											alt="FAUX LEATHER JACKET WITH KNITTED SIDE PANELS" class="sbdraggable"
											id="product_img_1668485" data-ref="00706406-V2014" data-color="800"
											sb-id="00706406800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706406-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'38', page:'Todos'}">FAUX LEATHER JACKET WITH KNITTED SIDE PANELS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668482" data-keyword="man/jackets/contrasting-zip-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668482'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475464-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'39', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/464/800/2/w/400/5475464800_2_1_1.jpg?timestamp=1389367988115"
											alt="CONTRASTING ZIP JACKET" class="sbdraggable"
											id="product_img_1668482" data-ref="05475464-V2014" data-color="800"
											sb-id="05475464800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475464-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'39', page:'Todos'}">CONTRASTING ZIP JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668487" data-keyword="man/jackets/jacket-with-zips-and-hood" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668487'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706402-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'40', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/402/800/2/w/400/0706402800_2_1_1.jpg?timestamp=1390480307861"
											alt="JACKET WITH ZIPS AND HOOD" class="sbdraggable"
											id="product_img_1668487" data-ref="00706402-V2014" data-color="800"
											sb-id="00706402800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706402-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'40', page:'Todos'}">JACKET WITH ZIPS AND HOOD</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668488" data-keyword="man/jackets/jacket-with-contrasting-back" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668488'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'41', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/401/800/2/w/400/0706401800_2_1_1.jpg?timestamp=1389367044107"
											alt="JACKET WITH CONTRASTING BACK" class="sbdraggable"
											id="product_img_1668488" data-ref="00706401-V2014" data-color="800"
											sb-id="00706401800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
										<div class="labelProd">
											
												<span class="label-lookbook">Lookbook</span>
												
										</div>										
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706401-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'41', page:'Todos'}">JACKET WITH CONTRASTING BACK</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="59.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668598" data-keyword="man/jackets/combination-bomber-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668598'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06096454-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'42', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6096/454/800/2/w/400/6096454800_1_1_1.jpg?timestamp=1388147910805"
											alt="COMBINATION BOMBER JACKET" class="sbdraggable"
											id="product_img_1668598" data-ref="06096454-V2014" data-color="800"
											sb-id="06096454800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06096454-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'42', page:'Todos'}">COMBINATION BOMBER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668489" data-keyword="man/jackets/faux-leather-bomber-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668489'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'43', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/400/800/2/w/400/0706400800_1_1_1.jpg?timestamp=1390910637797"
											alt="FAUX LEATHER BOMBER JACKET" class="sbdraggable"
											id="product_img_1668489" data-ref="00706400-V2014" data-color="800"
											sb-id="00706400800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'43', page:'Todos'}">FAUX LEATHER BOMBER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668613" data-keyword="man/jackets/leather-biker-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668613'  class='item gaProductDetailsLink' data-ga-props="{productRef:'02710400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'44', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/2710/400/800/2/w/400/2710400800_1_1_1.jpg?timestamp=1391785634165"
											alt="LEATHER BIKER JACKET" class="sbdraggable"
											id="product_img_1668613" data-ref="02710400-V2014" data-color="800"
											sb-id="02710400800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'02710400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'44', page:'Todos'}">LEATHER BIKER JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="259.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1668686" data-keyword="man/jackets/camouflage-jacket-with-4-pockets" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1668686'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06719450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'45', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6719/450/802/2/w/400/6719450802_1_1_1.jpg?timestamp=1390844154291"
											alt="CAMOUFLAGE JACKET WITH 4 POCKETS" class="sbdraggable"
											id="product_img_1668686" data-ref="06719450-V2014" data-color="802"
											sb-id="06719450802" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06719450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'45', page:'Todos'}">CAMOUFLAGE JACKET WITH 4 POCKETS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1691571" data-keyword="man/jackets/faux-suede-denim-style-jacket-with-pocket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1691571'  class='item gaProductDetailsLink' data-ga-props="{productRef:'04341450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'46', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/4341/450/305/2/w/400/4341450305_2_2_1.jpg?timestamp=1389876839269"
											alt="FAUX SUEDE DENIM STYLE JACKET WITH POCKET" class="sbdraggable"
											id="product_img_1691571" data-ref="04341450-V2014" data-color="305"
											sb-id="04341450305" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'04341450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'46', page:'Todos'}">FAUX SUEDE DENIM STYLE JACKET WITH POCKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1691572" data-keyword="man/jackets/faux-suede-denim-style-jacket-with-pocket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1691572'  class='item gaProductDetailsLink' data-ga-props="{productRef:'04341450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'47', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/4341/450/505/2/w/400/4341450505_2_1_1.jpg?timestamp=1389813543639"
											alt="FAUX SUEDE DENIM STYLE JACKET WITH POCKET" class="sbdraggable"
											id="product_img_1691572" data-ref="04341450-V2014" data-color="505"
											sb-id="04341450505" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'04341450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'47', page:'Todos'}">FAUX SUEDE DENIM STYLE JACKET WITH POCKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692216" data-keyword="man/jackets/raffia-knit-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692216'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00693408-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'48', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0693/408/401/2/w/400/0693408401_6_1_1.jpg?timestamp=1389782392092"
											alt="RAFFIA KNIT JACKET" class="sbdraggable"
											id="product_img_1692216" data-ref="00693408-V2014" data-color="401"
											sb-id="00693408401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00693408-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'48', page:'Todos'}">RAFFIA KNIT JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692243" data-keyword="man/jackets/jacket-with-zips" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692243'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'49', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/450/401/2/w/400/5475450401_1_1_1.jpg?timestamp=1391086171721"
											alt="JACKET WITH ZIPS" class="sbdraggable"
											id="product_img_1692243" data-ref="05475450-V2014" data-color="401"
											sb-id="05475450401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'05475450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'49', page:'Todos'}">JACKET WITH ZIPS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692224" data-keyword="man/jackets/nylon-jacket-with-patch-pockets" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692224'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706407-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'50', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/407/420/2/w/400/0706407420_2_1_1.jpg?timestamp=1389813060399"
											alt="NYLON JACKET WITH PATCH POCKETS" class="sbdraggable"
											id="product_img_1692224" data-ref="00706407-V2014" data-color="420"
											sb-id="00706407420" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'00706407-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'50', page:'Todos'}">NYLON JACKET WITH PATCH POCKETS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692228" data-keyword="man/jackets/4-pocket-parka" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692228'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01792450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'51', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1792/450/710/2/w/400/1792450710_2_2_1.jpg?timestamp=1388147612889"
											alt="4 POCKET PARKA" class="sbdraggable"
											id="product_img_1692228" data-ref="01792450-V2014" data-color="710"
											sb-id="01792450710" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01792450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'51', page:'Todos'}">4 POCKET PARKA</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692229" data-keyword="man/jackets/4-pocket-parka" data-catType="P" data-imgRatio="081">
								
									<a href='#'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01792450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'52', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1792/450/800/2/w/400/1792450800_1_1_1.jpg?timestamp=1388147683383"
											alt="4 POCKET PARKA" class="sbdraggable"
											id="product_img_1692229" data-ref="01792450-V2014" data-color="800"
											sb-id="01792450800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'01792450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'52', page:'Todos'}">4 POCKET PARKA</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692231" data-keyword="man/jackets/quilted-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#' data-item='1692231'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06398450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'53', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6398/450/505/2/w/400/6398450505_1_1_1.jpg?timestamp=1386948568226"
											alt="QUILTED JACKET" class="sbdraggable"
											id="product_img_1692231" data-ref="06398450-V2014" data-color="505"
											sb-id="06398450505" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#"  data-ga-props="{productRef:'06398450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'53', page:'Todos'}">QUILTED JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692233" data-keyword="man/jackets/quilted-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/quilted-jacket-c564607p1692233.html' data-item='1692233'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06398450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'54', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6398/450/710/2/w/400/6398450710_1_1_1.jpg?timestamp=1386948596597"
											alt="QUILTED JACKET" class="sbdraggable"
											id="product_img_1692233" data-ref="06398450-V2014" data-color="710"
											sb-id="06398450710" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/quilted-jacket-c564607p1692233.html"  data-ga-props="{productRef:'06398450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'54', page:'Todos'}">QUILTED JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692240" data-keyword="man/jackets/pique-jacket-with-contrasting-piping" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/pique-jacket-with-contrasting-piping-c564607p1692240.html' data-item='1692240'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06861455-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'55', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6861/455/401/2/w/400/6861455401_6_1_1.jpg?timestamp=1386003089546"
											alt="PIQUE JACKET WITH CONTRASTING PIPING" class="sbdraggable"
											id="product_img_1692240" data-ref="06861455-V2014" data-color="401"
											sb-id="06861455401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/pique-jacket-with-contrasting-piping-c564607p1692240.html"  data-ga-props="{productRef:'06861455-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'55', page:'Todos'}">PIQUE JACKET WITH CONTRASTING PIPING</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692241" data-keyword="man/jackets/pique-jacket-with-contrasting-piping" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/pique-jacket-with-contrasting-piping-c564607p1692241.html' data-item='1692241'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06861455-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'56', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6861/455/600/2/w/400/6861455600_1_1_1.jpg?timestamp=1385749512106"
											alt="PIQUE JACKET WITH CONTRASTING PIPING" class="sbdraggable"
											id="product_img_1692241" data-ref="06861455-V2014" data-color="600"
											sb-id="06861455600" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/pique-jacket-with-contrasting-piping-c564607p1692241.html"  data-ga-props="{productRef:'06861455-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'56', page:'Todos'}">PIQUE JACKET WITH CONTRASTING PIPING</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692244" data-keyword="man/jackets/jacket-with-zips" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/jacket-with-zips-c564607p1692244.html' data-item='1692244'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05475450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'57', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5475/450/802/2/w/400/5475450802_1_1_1.jpg?timestamp=1390306715535"
											alt="JACKET WITH ZIPS" class="sbdraggable"
											id="product_img_1692244" data-ref="05475450-V2014" data-color="802"
											sb-id="05475450802" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/jacket-with-zips-c564607p1692244.html"  data-ga-props="{productRef:'05475450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'57', page:'Todos'}">JACKET WITH ZIPS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1693357" data-keyword="man/jackets/faux-leather-jacket-with-padded-shoulders" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/faux-leather-jacket-with-padded-shoulders-c564607p1693357.html' data-item='1693357'  class='item gaProductDetailsLink' data-ga-props="{productRef:'04341452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'58', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/4341/452/806/2/w/400/4341452806_2_2_1.jpg?timestamp=1389986306684"
											alt="FAUX LEATHER JACKET WITH PADDED SHOULDERS" class="sbdraggable"
											id="product_img_1693357" data-ref="04341452-V2014" data-color="806"
											sb-id="04341452806" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/faux-leather-jacket-with-padded-shoulders-c564607p1693357.html"  data-ga-props="{productRef:'04341452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'58', page:'Todos'}">FAUX LEATHER JACKET WITH PADDED SHOULDERS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1747045" data-keyword="man/jackets/short-coat-with-hood" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/short-coat-with-hood-c564607p1747045.html' data-item='1747045'  class='item gaProductDetailsLink' data-ga-props="{productRef:'03251400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'59', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/3251/400/800/2/w/400/3251400800_2_1_1.jpg?timestamp=1390418661428"
											alt="SHORT COAT WITH HOOD" class="sbdraggable"
											id="product_img_1747045" data-ref="03251400-V2014" data-color="800"
											sb-id="03251400800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/short-coat-with-hood-c564607p1747045.html"  data-ga-props="{productRef:'03251400-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'59', page:'Todos'}">SHORT COAT WITH HOOD</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="139.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1754533" data-keyword="man/jackets/denim-waistcoat" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/denim-waistcoat-c564607p1754533.html' data-item='1754533'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05575412-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'60', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5575/412/800/2/w/400/5575412800_1_1_1.jpg?timestamp=1390587434154"
											alt="DENIM WAISTCOAT" class="sbdraggable"
											id="product_img_1754533" data-ref="05575412-V2014" data-color="800"
											sb-id="05575412800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/denim-waistcoat-c564607p1754533.html"  data-ga-props="{productRef:'05575412-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'60', page:'Todos'}">DENIM WAISTCOAT</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="69.90  USD"></span>
												
									</span>
									
										<div class="moreColors">
											+ Colours
										</div>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1756598" data-keyword="man/jackets/basic-denim-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/basic-denim-jacket-c564607p1756598.html' data-item='1756598'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05575411-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'61', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5575/411/406/2/w/400/5575411406_2_2_1.jpg?timestamp=1389986359136"
											alt="BASIC DENIM JACKET" class="sbdraggable"
											id="product_img_1756598" data-ref="05575411-V2014" data-color="406"
											sb-id="05575411406" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/basic-denim-jacket-c564607p1756598.html"  data-ga-props="{productRef:'05575411-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'61', page:'Todos'}">BASIC DENIM JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1756599" data-keyword="man/jackets/basic-denim-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/basic-denim-jacket-c564607p1756599.html' data-item='1756599'  class='item gaProductDetailsLink' data-ga-props="{productRef:'05575411-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'62', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/5575/411/407/2/w/400/5575411407_1_1_1.jpg?timestamp=1389368035559"
											alt="BASIC DENIM JACKET" class="sbdraggable"
											id="product_img_1756599" data-ref="05575411-V2014" data-color="407"
											sb-id="05575411407" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/basic-denim-jacket-c564607p1756599.html"  data-ga-props="{productRef:'05575411-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'62', page:'Todos'}">BASIC DENIM JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1772631" data-keyword="man/jackets/overshirt-with-epaulettes" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/overshirt-with-epaulettes-c564607p1772631.html' data-item='1772631'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06002313-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'63', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6002/313/401/2/w/400/6002313401_2_1_1.jpg?timestamp=1391085708440"
											alt="OVERSHIRT WITH EPAULETTES" class="sbdraggable"
											id="product_img_1772631" data-ref="06002313-V2014" data-color="401"
											sb-id="06002313401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/overshirt-with-epaulettes-c564607p1772631.html"  data-ga-props="{productRef:'06002313-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'63', page:'Todos'}">OVERSHIRT WITH EPAULETTES</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="189.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1693356" data-keyword="man/jackets/faux-leather-jacket-with-padded-shoulders" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/faux-leather-jacket-with-padded-shoulders-c564607p1693356.html' data-item='1693356'  class='item gaProductDetailsLink' data-ga-props="{productRef:'04341452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'64', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/4341/452/778/2/w/400/4341452778_2_2_1.jpg?timestamp=1389986274767"
											alt="FAUX LEATHER JACKET WITH PADDED SHOULDERS" class="sbdraggable"
											id="product_img_1693356" data-ref="04341452-V2014" data-color="778"
											sb-id="04341452778" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/faux-leather-jacket-with-padded-shoulders-c564607p1693356.html"  data-ga-props="{productRef:'04341452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'64', page:'Todos'}">FAUX LEATHER JACKET WITH PADDED SHOULDERS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667453" data-keyword="man/jackets/parka-with-contrasting-faux-leather-details" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/parka-with-contrasting-faux-leather-details-c564607p1667453.html' data-item='1667453'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06518452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'65', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6518/452/401/2/w/400/6518452401_1_1_1.jpg?timestamp=1388767299353"
											alt="PARKA WITH CONTRASTING FAUX LEATHER DETAILS" class="sbdraggable"
											id="product_img_1667453" data-ref="06518452-V2014" data-color="401"
											sb-id="06518452401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/parka-with-contrasting-faux-leather-details-c564607p1667453.html"  data-ga-props="{productRef:'06518452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'65', page:'Todos'}">PARKA WITH CONTRASTING FAUX LEATHER DETAILS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="179.00  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667452" data-keyword="man/jackets/quilted-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/quilted-jacket-c564607p1667452.html' data-item='1667452'  class='item gaProductDetailsLink' data-ga-props="{productRef:'01792406-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'66', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/1792/406/401/2/w/400/1792406401_1_1_1.jpg?timestamp=1388766801749"
											alt="QUILTED JACKET" class="sbdraggable"
											id="product_img_1667452" data-ref="01792406-V2014" data-color="401"
											sb-id="01792406401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/quilted-jacket-c564607p1667452.html"  data-ga-props="{productRef:'01792406-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'66', page:'Todos'}">QUILTED JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="89.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667464" data-keyword="man/jackets/quilted-waistcoat-with-contrasts" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/quilted-waistcoat-with-contrasts-c564607p1667464.html' data-item='1667464'  class='item gaProductDetailsLink' data-ga-props="{productRef:'06398452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'67', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/6398/452/401/2/w/400/6398452401_1_1_1.jpg?timestamp=1385633483721"
											alt="QUILTED WAISTCOAT WITH CONTRASTS" class="sbdraggable"
											id="product_img_1667464" data-ref="06398452-V2014" data-color="401"
											sb-id="06398452401" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/quilted-waistcoat-with-contrasts-c564607p1667464.html"  data-ga-props="{productRef:'06398452-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'67', page:'Todos'}">QUILTED WAISTCOAT WITH CONTRASTS</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1692217" data-keyword="man/jackets/raffia-knit-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/raffia-knit-jacket-c564607p1692217.html' data-item='1692217'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00693408-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'68', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0693/408/712/2/w/400/0693408712_1_1_1.jpg?timestamp=1392224130419"
											alt="RAFFIA KNIT JACKET" class="sbdraggable"
											id="product_img_1692217" data-ref="00693408-V2014" data-color="712"
											sb-id="00693408712" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/raffia-knit-jacket-c564607p1692217.html"  data-ga-props="{productRef:'00693408-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'68', page:'Todos'}">RAFFIA KNIT JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1667883" data-keyword="man/jackets/combined-faux-leather-and-knit-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/combined-faux-leather-and-knit-jacket-c564607p1667883.html' data-item='1667883'  class='item gaProductDetailsLink' data-ga-props="{productRef:'00706410-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'69', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/0706/410/800/2/w/400/0706410800_6_1_1.jpg?timestamp=1389782471017"
											alt="COMBINED FAUX LEATHER AND KNIT JACKET" class="sbdraggable"
											id="product_img_1667883" data-ref="00706410-V2014" data-color="800"
											sb-id="00706410800" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/combined-faux-leather-and-knit-jacket-c564607p1667883.html"  data-ga-props="{productRef:'00706410-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'69', page:'Todos'}">COMBINED FAUX LEATHER AND KNIT JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="99.90  USD"></span>
												
									</span>
										
								</div>
						 	
						 	
									</li><li class="product grid-element " id="productId_1885501" data-keyword="man/jackets/faux-leather-hooded-jacket" data-catType="P" data-imgRatio="081">
								
									<a href='#jackets/faux-leather-hooded-jacket-c564607p1885501.html' data-item='1885501'  class='item gaProductDetailsLink' data-ga-props="{productRef:'03557450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'70', page:'Todos'}" >
										<img 
											data-src="//static.zara.net/photos//2014/V/0/2/p/3557/450/710/2/w/400/3557450710_1_1_1.jpg?timestamp=1392635233926"
											alt="FAUX LEATHER HOODED JACKET" class="sbdraggable"
											id="product_img_1885501" data-ref="03557450-V2014" data-color="710"
											sb-id="03557450710" src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore//images/transparent-bg.png"/>
										
									</a>
								
								
								<div class='product-info'>
									
									<a class='name item' href="#jackets/faux-leather-hooded-jacket-c564607p1885501.html"  data-ga-props="{productRef:'03557450-V2014', categoryId:'NA:V2014-HOMBRE-CAZADORAS', sourceType:'Categoria', position:'70', page:'Todos'}">FAUX LEATHER HOODED JACKET</a>
									
																		
									<span class='price'>										
										
													<span data-ecirp="79.90  USD"></span>
												
									</span>
									
										<div class="moreColors">
											+ Colours
										</div>
										
								</div>
						 	
						 	
						 		</li>
						 						
					</ul>
				</section>
				
				
				<section id="sidebar">
					<div id="sidebar-content">
						<div class="options">
							
							<ul class="view-options">
								<li><a class='two selected gaTrack gaViewEvent' href='#' 
								data-ga-props="{action:'Cambio_vista', opt_label:'Mostrar_2'}">2</a></li>
								<li><a class='six gaTrack gaViewEvent' href='#'
								data-ga-props="{action:'Cambio_vista', opt_label:'Mostrar_6'}">6</a></li>
							</ul>
						</div>
				
						<?php /*?><div id="filter-btn" class="gaTrack gaViewEvent" data-ga-props="{action:'Abrir_filtros'}">
							<p class="products-total">
								<span class="js-count">70</span><span>&nbsp;products</span>
							</p>
							<button class="filter no-filter-on">FILTER</button>
						</div><?php */?>
					</div>
				</section>
								
				
<?php /*?>				<script id="filters.productsFilters" type="text/template">
						<div id="filters">						
							<form id="filters-form"> 
							</form>
						</div>

				</script>

				<script id="filters.filterItem" type="text/template">
					{{#filters}} 
						<fieldset id="{{type}}" class="filter"> 
							<h4>{{title}}</h4>  
							{{#values}}
								<label class=" 
								{{#selectedValue}}selected checked{{/selectedValue}}" >
								<input type="checkbox" name="{{type}}" value="{{id}}"/>
								{{name}}
								</label> 
							{{/values}} 
						</fieldset> 
					{{/filters}} 
				</script>


				<script id="filtersFooter.productsFilters" type="text/template">
					<div class="footer-content">
						<div class="footer-form">
							<input type="button" class="submitFilters gaViewEvent" data-ga-props="{action:'Aplicar_Filtros'}" value="{{submitText}}">
							<input type="button" class="_clearFilters gaTrack gaViewEvent" data-ga-props="{action:'Limpiar_Filtros'}" value="{{clearText}}" /> 
							<div class="filters-info">{{multiSelectText}}</div>
						</div>
					</div>
				</script><?php */?>

			</section>

			
			<div class="categoryInfo content-main">
				<h1 class="catMainHead">
					Jackets
				</h1>
				<div class="catDesc truncated">
					
				</div>
				<div class="readMore">Read more</div>
				<div class="clearer"></div>
			</div>
			
			
			<?php /*?><footer id="footer" class="content-main">
				
<nav id='utilities' class='line-up'>
	<!-- Please - Do not remove this comment.  --><ul class="listH">
  <li>
    <p>Buying guide</p>
    <ul class="submenuUtilities">
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=1&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Como_Comprar'}" >How to buy</a></li>
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=2&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Informacion_General'}" >General information</a></li>
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=3&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Pago'}" >Payment</a></li>
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=4&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Envio'}" >Shipping</a></li>
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=5&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Devoluciones'}" >Returns</a></li>
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=6&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Cambios'}" >Exchanges</a></li>
      <li><a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=8&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Pie_Pagina', action:'Guia_Compra_Tarjeta_Regalo'}" >Gift Card</a></li>
    </ul>
  </li>
  <li>
    <p>Follow us</p>
    <ul class="submenuUtilities">
      <li><a href="http://www.zara.com/us/en/newsletter-c11110.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'NewsLetter'}">Newsletter</a></li>
      <li><a href="http://www.facebook.com/Zara" target="blank" class="gaTag gaVirtualPage gaOutBound gaModal" gaProps="{events:'click',  data:'Facebook'}">Facebook</a></li>
<li><a href="http://instagram.com/zara_worldwide" target="blank"  class="gaTag gaVirtualPage gaOutBound gaModal" gaProps="{events:'click',  data:'Instagram'}">Instagram</a></li>
      <li><a href="http://twitter.com/ZARA" target="blank" class="gaTag gaVirtualPage gaOutBound gaModal" gaProps="{events:'click',  data:'Twitter'}">Twitter</a></li>
      <li><a href="http://pinterest.com/zaraofficial/" target="blank" class="gaTag gaVirtualPage gaOutBound gaModal" gaProps="{events:'click',  data:'Pinterest'}">Pinterest</a></li>
      <li><a href="http://www.youtube.com/zara" target="blank" class="gaTag gaVirtualPage gaOutBound gaModal" gaProps="{events:'click',  data:'Youtube'}">Youtube</a></li>
      <li><a href="http://www.flickr.com/photos/zara_global/collections/" target="blank" class="gaTag gaVirtualPage gaOutBound gaModal" gaProps="{events:'click',  data:'Flickr'}">Flickr</a></li>
      <li><a href="http://www.zara.com/us/en/apps-c362004.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Apps'}">APPS</a></li>
      <li><a class=" gaTag gaEvent linkToLogonLink staticLogonLink" href="http://www.zara.com/webapp/wcs/stores/servlet/staticlogonform/us/en/zara-nam-S2013" gaProps="{events:'click', section:'Pie_Pagina', action:'Mi_cuenta'}">My account</a></li>
    </ul>
  </li>

  <li>
    <p>Policies</p>
    <ul class="submenuUtilities">
      <li><a href="http://www.zara.com/us/en/company/our-mission-statement-c18001.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Politica_Medioambiental'}">Environmental policy </a></li>
      <li><a href="http://www.zara.com/us/en/company/our-mission-statement-c18001.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Trato_animales'}">Animal welfare</a></li>
      <li><a href="http://static.zara.net/static//pdfs/US/privacy-policy/privacy-policy-en_US-20131125.pdf"  class=" gaTag gaEvent showLinkInPopUpWindow"  gaProps="{events:'click', section:'Pie_Pagina', action:'Politica_Privacidad'}" >Privacy policy</a></li>
      <li><a href="http://static.zara.net/static//pdfs/US/terms-and-conditions/terms-and-conditions-en_US-20131125.pdf"  class=" gaTag gaEvent showLinkInPopUpWindow"  gaProps="{events:'click', section:'Pie_Pagina', action:'Condiciones_Compra'}" >Purchase conditions</a></li>
      <li id="footerGiftCardConditions"><a href="http://static.zara.net/static//pdfs/US/giftcard-conditions/giftcard-conditions-en_US-20131122.pdf"  class=" gaTag gaEvent showLinkInPopUpWindow"  gaProps="{events:'click', section:'Pie_Pagina', action:'Condiciones_Tarjeta_regalo'}" >Gift Card Conditions</a></li>
    </ul>
  </li>

<li>
    <p>Company</p>
    <ul class="submenuUtilities">
      <li><a href="http://www.zara.com/us/en/company-c11112.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Quienes_somos'}">About us </a></li>
      <li><a href="http://www.zara.com/us/en/company/offices-c18002.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Oficinas'}">Offices</a></li>
      <li><a href="http://www.zara.com/us/en/stores-c11108.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Tiendas'}">Stores</a></li>
      <li><a href="http://www.zara.com/us/en/company/work-with-us-c18003.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Trabaja_con_nosotros'}">Work with us</a></li>
      <li><a href="http://www.zara.com/us/en/contact-us-c11113.html" class=" gaTag gaEvent"  gaProps="{events:'click', section:'Pie_Pagina', action:'Contacto'}">Contact</a></li> 
    </ul>
  </li>
</ul>

</nav>


<div class='line-up'>
	<nav id='countries'>
		<ul>
			<li>
				
						<span>
							United States
						</span>	
					
			</li>
			
			
			
		</ul>
	</nav>

</div>
<script type="text/javascript">
cFns.push(function() {
	zara.core.startModule('ItxFooterModule');
});</script><!--/foot--><!-- END - FOOTER --><nav id='languages'>
	<ul>
		
			<li>
				
						<span>English</span>
					
			</li>
		
			<li>
				
						<a id="lang-5"
							class="changeLangLink gaTrack gaViewEvent" data-langId="-5" 
							data-langCode="es"
							data-ga-props="{category:'Barra_Inferior', action:'Cambiar_Idioma', opt_label:'es'}"									   	
							title="Español"
							href=http://www.zara.com/us/es/man/jackets-c564607.html>
							Español
						</a>
					
			</li>
		
	</ul>
</nav>
<div id='copyright' class="quiet">
	<p>
		<!-- Please - Do not remove this comment.  -->&copy; 2010 ZARA, all rights reserved
	</p>
</div>

	<div class="breadcrumbs" itemprop="breadcrumb">
		<ul>
			
			<li>
				<a href="http://www.zara.com/us/">
					<span>
						ZARA
					</span>
				</a>
				<span class="breadCrumptSeparator"> > </span>
			</li>
			
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="http://www.zara.com/us/en/man-c358523.html" itemprop="url">
						<span itemprop="title">MAN</span>
					</a>
					
						<span class="breadCrumptSeparator"> > </span>
						
				</li>
			
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="#top" itemprop="url">
						<span itemprop="title">Jackets</span>
					</a>
						
				</li>
			
		</ul>
	</div>

			</footer><?php */?>
			
		</div>
		
		<div id="container-nav" class="fixed">
			<div id="toggleMenu" class="fixed">
				<a id="toggleMenuLnk" href="#" class="toggleMenu icon icon-open-menu"></a>
			</div>
			<nav id="menu">
				<!--menu vertical desplegable-->

	<ul id="searchMenu">
		<li class="mainMenuEntry">MAIN MENU</li>
	</ul>

	<ul id="mainNavigationMenu">
		
              			
                        
                        
                        
                        
                       
		
           <li><i class="icon icon-line-menu-divider"></i>
              			
	        </li>		
            
            
            			
                        
<?php /*?>                        <?php
                        
						foreach($parent_menu as $menu_item){
						?>	
                       <li>
              				<a href="#" >
			              		<?php echo $menu_item; ?>
			              	</a>
              		
	        				</li>
						<?php	
						}
						
						?><?php */?>
                        
                        
                        
                        
                        
                        
                        <li id="menuItemData_358502">
              				<a href="<?php echo $website_base_url;?>shop_landing.php?landing=1" >
			              		Featured
			              	</a>
                            
                            <ul class="submenu_list" style=" <?php echo $feat_sub_menu_style;?>">
	            		
			
	            		
		
							
	            			<li id="menuItemData_567511"
								>
	            				<a href="<?php echo $website_base_url;?>shop.php">
				              		Bags
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_358070"
								>
	            				<a href="#">
				              		Accessories
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_385001"
								>
	            				<a href="#">
				              		Swimwear
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_572535"
								>
	            				<a href="#">
				              		Soft Wear
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_583028"
								>
	            				<a href="#">
				              		Special Price
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_383005"
								>
	            				<a href="#">
				              		Lookbook
				              	</a>
	            				 
	            			</li>
	            		
	            	</ul> 
                    
                    
              		
	        </li>
		
        
        
        
                      			<li id="menuItemData_358523" rootId="" rootDesc="">
              				<a href="<?php echo $website_base_url;?>shop_landing.php?landing=2" >
			              		MAN
			              	</a>
              		
	            	<ul class="submenu_list" style=" <?php echo $man_sub_menu_style;?>">
	            		
					
							
	            			<li id="menuItemData_564607"
								
				              		
				              	>
	            				<a href="<?php echo $website_base_url;?>shop.php">
				              		Jackets
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564611"
								>
	            				<a href="#">
				              		Blazers
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564615"
								>
	            				<a href="#">
				              		Suits
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564619"
								>
	            				<a href="#">
				              		Wear to Wear
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564623"
								>
	            				<a href="#">
				              		Trousers
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564629"
								>
	            				<a href="#">
				              		Jeans
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_582003"
								>
	            				<a href="#">
				              		Bermudas
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564638"
								>
	            				<a href="#">
				              		Shirts
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564639"
								>
	            				<a href="#">
				              		T-shirts
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564642"
								>
	            				<a href="#">
				              		Sweatshirts &amp; Hoodies
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564645"
								>
	            				<a href="#">
				              		Knitwear
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_567512"
								>
	            				<a href="#">
				              		Shoes
				              	</a>
	            				 
	            			</li>

            		
	            	</ul> 
	            
	        </li>
            
            
            
            
        				
        
        
              			<li id="menuItemData_358501">
              				<a href="<?php echo $website_base_url;?>shop_landing.php?landing=3" >
			              		WOMAN
			              	</a>
              		
                    
                    
                    
                                        <ul class="submenu_list" style=" <?php echo $woman_sub_menu_style;?>">
                                    
                                
                                        
                                        <li id="menuItemData_565262">
                                            <a href="<?php echo $website_base_url;?>shop.php">
                                                Coats
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565218">
                                            <a href="#">
                                                Outerwear
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565224">
                                            <a href="#">
                                                Dresses
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565229">
                                            <a href="#">
                                                Shirts
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565234">
                                            <a href="#">
                                                Trousers
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565243">
                                            <a href="#">
                                                Jeans
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565249">
                                            <a href="#">
                                                Skirts
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565254">
                                            <a href="#">
                                                Knitwear
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_565258">
                                            <a href="#">
                                                T-shirts
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_358009">
                                            <a href="#">
                                                Shoes
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_358019">
                                            <a href="#">
                                                Handbags
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_375503">
                                            <a href="#">
                                                Accessories
                                            </a>
                                             
                                        </li>
                                    
                                
                                        
                                        <li id="menuItemData_583039">
                                            <a href="#">
                                                Lookbook
                                            </a>
                                             
                                        </li>
                                    
                                </ul>
	        </li>
		
              			
		

		

		

		

		
              			<li><i class="icon-empty-divider">&nbsp;</i>
              		
	        </li>
		

		

		
	</ul>






	<script type="text/javascript">
cFns.unshift(function() { 	
	zara.core.startModule('ItxSideMenuModuleV2', {
		moreInfoCategoryId: 'menuItemData_194501',
		buyingGuideCategoryId: 'menuItemData_196001',
		buyingGuideViewBaseUrl: 'http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&langId=-1&storeId=11719'
	});
});</script> 
			</nav>
		</div>
		
		
		
		<script type="text/javascript">
cFns.push(function() {
			zara.core.startModule('ItxCategoriesDisplayModule', {
				$mainEl: '#main',
				categoryData: {"priceFilterMax":400,"currencyDecimals":-2,"products":[<?php /*?>{"colors":["490"],"price":8990,"id":"1749017"},{"colors":["401"],"price":9990,"id":"1667457"},{"colors":["922"],"price":9990,"id":"1668802"},{"colors":["401"],"price":7990,"id":"1692225"},{"colors":["811"],"price":13900,"id":"1668755"},{"colors":["505"],"price":9990,"id":"1667888"},{"colors":["707"],"price":7990,"id":"1692226"},{"colors":["505"],"price":9990,"id":"1667892"},{"colors":["707"],"price":9990,"id":"1668106"},{"colors":["707"],"price":16900,"id":"1668103"},{"colors":["250","800"],"price":16900,"id":"1668479"},{"colors":["800"],"price":9990,"id":"1668577"},{"colors":["812"],"price":7990,"id":"1666552"},{"colors":["803"],"price":5990,"id":"1666553"},{"colors":["407"],"price":9990,"id":"1667733"},{"colors":["427"],"price":9990,"id":"1667815"},{"colors":["401"],"price":18900,"id":"1667439"},{"colors":["401"],"price":8990,"id":"1667446"},{"colors":["401"],"price":13900,"id":"1667447"},{"colors":["710"],"price":13900,"id":"1667886"},{"colors":["800"],"price":13900,"id":"1668481"},{"colors":["500"],"price":13900,"id":"1667836"},{"colors":["707"],"price":9990,"id":"1668105"},{"colors":["401"],"price":9990,"id":"1667455"},{"colors":["401"],"price":6990,"id":"1666554"},{"colors":["600"],"price":8990,"id":"1667946"},{"colors":["505"],"price":16900,"id":"1667885"},{"colors":["505"],"price":18900,"id":"1667884"},{"colors":["800"],"price":8990,"id":"1668486"},{"colors":["700"],"price":9990,"id":"1668056"},{"colors":["778"],"price":18900,"id":"1668242"},{"colors":["800"],"price":5990,"id":"1668456"},{"colors":["800"],"price":16900,"id":"1668460"},{"colors":["800"],"price":16900,"id":"1668461"},{"colors":["800"],"price":13900,"id":"1668480"},{"colors":["401"],"price":7990,"id":"1692223"},{"colors":["800"],"price":7990,"id":"1668483"},{"colors":["800"],"price":9990,"id":"1668485"},{"colors":["800"],"price":9990,"id":"1668482"},{"colors":["800"],"price":7990,"id":"1668487"},{"colors":["800"],"price":5990,"id":"1668488"},{"colors":["800"],"price":8990,"id":"1668598"},{"colors":["800"],"price":7990,"id":"1668489"},{"colors":["800"],"price":25900,"id":"1668613"},{"colors":["802"],"price":8990,"id":"1668686"},{"colors":["305"],"price":7990,"id":"1691571"},{"colors":["505"],"price":7990,"id":"1691572"},{"colors":["401"],"price":7990,"id":"1692216"},{"colors":["401"],"price":9990,"id":"1692243"},{"colors":["420"],"price":7990,"id":"1692224"},{"colors":["710"],"price":9990,"id":"1692228"},{"colors":["800"],"price":9990,"id":"1692229"},{"colors":["505"],"price":7990,"id":"1692231"},{"colors":["710"],"price":7990,"id":"1692233"},{"colors":["401"],"price":8990,"id":"1692240"},{"colors":["600"],"price":8990,"id":"1692241"},{"colors":["802"],"price":9990,"id":"1692244"},{"colors":["806"],"price":9990,"id":"1693357"},{"colors":["800"],"price":13900,"id":"1747045"},{"colors":["800","407"],"price":6990,"id":"1754533"},{"colors":["406"],"price":8990,"id":"1756598"},{"colors":["407"],"price":8990,"id":"1756599"},{"colors":["401"],"price":18900,"id":"1772631"},{"colors":["778"],"price":9990,"id":"1693356"},{"colors":["401"],"price":17900,"id":"1667453"},{"colors":["401"],"price":8990,"id":"1667452"},{"colors":["401"],"price":7990,"id":"1667464"},{"colors":["712"],"price":7990,"id":"1692217"},{"colors":["800"],"price":9990,"id":"1667883"},{"colors":["710","800"],"price":7990,"id":"1885501"}<?php */?>],"priceFilterLabelSuffix":"USD","filterUrlStatic":"http://www.zara.com/webapp/wcs/stores/servlet/CategoryFilterJSON?categoryId=564607&langId=-1&storeId=11719&filterCode=STATIC","filterUrlDynamic":"http://www.zara.com/webapp/wcs/stores/servlet/CategoryFilterJSON?categoryId=564607&langId=-1&storeId=11719&filterCode=DYNAMIC","categoryId":"564607","priceFilterStep":40},
				productsContainer: 'product-list',
   				categoryKeyword: 'man/jackets',
				emptyFilterMsg: 'No matches'
			});
		});</script>
<script type="text/javascript">
cFns.push(function() {			
	zara.core.startModule('ItxCookiesAdvice',{excludedCountries: ['us' ,'cn' ] });
});</script><script type="text/javascript">
cFns.push(function() {			
	zara.core.startModule('ItxIosMetaModule', {deviceList: 'iPod,iPhone'});
});</script>


<script type="text/javascript">

	// Establecemos la variable global que almacena la URL de la pagina que hace de proxy para las llamadas AJAX cross-domain
	ajaxToolViewUrl = '<?php /*?>https://www.zara.com/webapp/wcs/stores/servlet/AjaxIFrameToolView<?php */?>';
	var ajaxToolViewSwfUrl = '<?php /*?>/wcsstore/ZaraStorefrontAssetStore/swf/easyxdm.swf<?php */?>';
	
	
			// variable que contiene el js de google maps
			jsHeadGeoMaps = '<?php /*?>http://www.google.com/jsapi?key=ABQIAAAAuLM0t2_kkFjBTv19NCnv4xQ1eARysJDSA6Rsmys1__vV4q3ogRSAPpMJQEtE6PZS8bUt68TqwWpmdA<?php */?>';
			var secure=false;
			var user= null;
			var gmaps_channel = null;
		
	// Variable que contiene el directorio desde el raiz para buscar recursos (ej: imagenes, estilos, js,...)	
	var baseFolder = '<?php /*?>http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/<?php */?>';
			
	t1 = new Date();
</script>

<script type="text/javascript" src="<?php echo $website_base_url;?>assets/shop/js/zaralib-comp-1392924153978.js"></script>





<script id="generic.popUp" type="text/template">
	<div id="{{popupId}}" class="popup">
		<div class="popup-header">
			<h1 class="popup-title">{{{title}}}</h1>
			{{#hasClose}}
				<div class="close"><i class="icon icon-close"></i></div>
			{{/hasClose}}
		</div>
		<div class="popup-navigation">
			{{{navigationHtml}}}
		</div>
		<div class="popup-content">
			<div class="content">
				{{{contentHtml}}}
			</div>
		</div>
		<div class="popup-footer">
			{{{footerHtml}}}
		</div>
		
	</div>
</script>

<script id="generic.popUpNavigation" type="text/template">
	<div class="componentNav hidden">
		<input type="hidden" value="{{patternProductPopUpUrl}}" name="patternProductPopUpUrl">
		<div class="prevItem"></div>
		<div class="nextItem"></div>
	</div>
</script>

<script id="popupContentElstockOut.popuUp" type="text/template">
	<div>
		<p>{{{msg}}}</p>
		<form action="#" class="gaTrack gaForm gaSubmit" data-ga-props="{logic:'Suscripcion_Agotados', formName:'Suscripcion_Agotados'}">
			<input type="text" name="email" class="inputText gaFormField" value="" data-ga-props="{fieldName:'Email'}">
			<input type="hidden" name="catentryId" value="{{catentryId}}">
			<input type="hidden" name="categoryId" value="{{categoryId}}">
			<input type="hidden" name="subscriptionType" value="{{type}}">
			<input type="hidden" name="channel" value="web">
			<input type="hidden" name="storeId" value="{{storeId}}">
			<input type="hidden" name="languageId" value="{{langId}}">
			<button type="submit">
				{{acceptBtLabel}}
			</button>
		</form>
	</div>
</script>
<script id="popupFooterElstockOut.popuUp" type="text/template">
	<div class="stockOutFooter">
		<label>
			<input type="hidden" value="http://www.zara.com/webapp/wcs/stores/servlet/privacypolicy/us/en/zara-nam-S2013" id="privacyPolicyViewURL">
			<a href="#" class="linkLabel privacyPolicy showPrivacyPolicyPopup">{{msg}}</a>
		</label>
	</div>
</script>
<script id="backToTopTemplate" type="text/template">
	<section id="backToTop" >
		<a class="backToTopLink gaTrack gaViewEvent" data-ga-props="{action:'Category-Navegacion', opt_label:'Top'}">
			<img src="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/images/top_button.png" alt="TOP" 
				class="img-top-button gaTrack gaViewEvent" data-ga-props="{category:'Back_to_top', action:'Ir_al_Top', opt_label:'TOP'}"/>
		</a>
	</section>
</script>

<script id="externalContentPopupTemplate" type="text/template">
	<div id="{{popupId}}" class="popup externalContentPopup">
		{{#hasClose}}
			<div class="close"><i class="icon icon-close"></i></div>
		{{/hasClose}}
		<iframe src="{{iframeSrc}}" width="{{iframeWidth}}" height="{{iframeHeight}}" frameBorder="0">
		</iframe>	
	</div>
</script>

<script id="common.searchAutocomplete" type="text/template">
	<div class="resultsWrapper">
		<div id="sb-ac-results">
			<ul>
				{{#topTerms}}
					<li class="searchResult topSearch">
						<a href="#" rel="{{title_raw}}">
							<span class="sb-text">{{{title}}}</span>&nbsp;<span class="sb-numFound">({{numFound}})</span>
						</a>
					</li>
				{{/topTerms}}
			</ul>
		</div>
		<div class="sb-separator">
			__
		</div>
		<div id="sb-ac-facets">
			<ul>
				{{#facets}}
					<li class="searchResult facet {{#isZero}}zero_searchResults{{/isZero}}">
						<a href="#" class="sb-term-facet">
							{{value}}
						</a>
						<span class="sb-numFound"> ({{count}}) </span>
					</li>
				{{/facets}}
			</ul>
		</div>
	</div>
</script>



<script type="text/javascript"
    src="<?php echo $website_base_url;?>assets/shop/js/message/validation-en_US-1392924153978.js"></script>
<script type="text/javascript"
    src="<?php echo $website_base_url;?>assets/shop/js/message/messages-en_US-1392924153978.js"></script>

<script type="text/javascript">
try {
	Log.disableLog();
} catch (e) {}



try {

	
	zara.globals.userInfoUrl = '<?php /*?>http://www.zara.com/webapp/wcs/stores/servlet/UserMenuDataJSON?catalogId=24056&langId=-1&storeId=11719<?php */?>';
	zara.globals.userDataSessionTtl = 25; 
		

	var versionNumber = '1392924153978';
	var debugLevel = 0; // 0 -> Desactivado; 1 -> Errores; 2 -> Advertencias; 3 -> Mensajes; 4 -> Logs
	zara.core.init(versionNumber, debugLevel, {
		globals: {
			storeId: '11719',
			countryCode: 'us',
			langId: '-1',
			langCode: 'en',
			catalogId: '24056',
			mainStoreLangCode: 'en',
			locale: 'en_US',
			currencyFormat: "#,##0.00 ¤¤",
			currencySymbol: "USD",
			currencyCode: "USD",
			baseImagesUrl: '<?php /*?>//static.zara.net/photos/<?php */?>',
			productsBaseUrl: '<?php /*?>http://www.zara.com/us/en<?php */?>',
			sharingMethods: ["pinterest",
		
			"facebook",
		
			"twitter",
		
			"mail"],
			storeOpenForSale: true,
			appAssetsBasePath: '<?php /*?>http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/<?php */?>',
			staticContent: '<?php /*?>http://static.zara.net/static/<?php */?>',
			videoContent: '<?php /*?>http://static.zara.net/video/<?php */?>',
			userInfoUrl: '<?php /*?>http://www.zara.com/webapp/wcs/stores/servlet/UserMenuDataJSON?catalogId=24056&langId=-1&storeId=11719<?php */?>',
			userDataSessionTtl: 25, 
			connectKey: 'LPaa7xyx1J',
			isConnectEnabled: 'false',
			isConnectAvailable: 'false',
			pageSize: parseInt('5'),
			imageResolutionPoints: [640, 1600],
			searchBrokerEnabled: true,
			searchBrokerUrl: '<?php /*?>//sbzara.colbenson.com/sb-zara<?php */?>',
			experimentsEnabled: false, 
			searchMinLen : '3',
			maxTopSearchsResults: '4',
			xmediaFormats: {"formats":[{"set":"2","width":"1920","type":"image","name":"MEGAZOOM","id":"1","description":"Megazoom","extension":"jpg"},{"set":"2","width":"560","type":"image","name":"ZOOM","id":"2","description":"Zoom","extension":"jpg"},{"set":"2","width":"400","type":"image","name":"DETAIL","id":"3","description":"Detail","extension":"jpg"},{"set":"2","width":"200","type":"image","name":"STANDARD","id":"4","description":"Standard","extension":"jpg"},{"set":"2","width":"135","type":"image","name":"THUMB","id":"5","description":"Thumb","extension":"jpg"},{"set":"2","width":"1024","type":"image","name":"MOBILE","id":"6","description":"Mobile","extension":"jpg"},{"set":"2","width":"640","type":"video","name":"MPEG4_STANDARD","id":"7","description":"Video MPEG4 Standard","extension":"mp4"},{"set":"2","width":"700","type":"video","name":"MPEG4_HIGH","id":"8","description":"Video MPEG4 High","extension":"high.mp4"},{"set":"2","width":"352","type":"video","name":"MPEG4_LOW","id":"9","description":"Video MPEG4 Low","extension":"low.mp4"},{"set":"2","width":"700","type":"video","name":"WEBM_HIGH","id":"10","description":"Video WEBM High","extension":"high.webm"},{"set":"2","width":"352","type":"video","name":"WEBM_LOW","id":"11","description":"Video WEBM Low","extension":"low.webm"}]},
			eulaUrl: '<?php /*?>http://static.zara.net/static//pdfs/US/terms-and-conditions/terms-and-conditions-en_US-20131125.pdf<?php */?>',
			techsheetDataBaseUrl: '/measures/',
			guestPurchaseAllowed: true
		}
	});
} catch (e) {
	if (window.console) {
		console.log("Error al inicializar el core JS de la aplicacion: " + e);
	}
	if (e) {
		if (window.jslogger) {
			jslogger.log({
				'core_initialization_error': {error: e.message}
			});
		}
		if (window._errs) {
			_errs.push([e.message, window.location.href, -1]);
		}
	}
}

try {		
	
	var t2 = new Date();
	var i = 0;

	for (i = 0; i < cFns.length; i++) {
		try {
			cFns[i].run();
		} catch(e) {
			Log.log("ItxCommonJS# Ha sucedido un error con un codigo de la pagina (ms): " + e.message);
			Log.log(e);
			if (e) {
				if (window.jslogger) {
					jslogger.log({
						'functions_array_error': {error: e.message}
					});
				}
				if (window._errs) {
					_errs.push([e.message, window.location.href, -1]);
				}
			}
		}
	}
	Log.log("ItxCommonJS# Tiempo en recorrer los cFns: " + (new Date().getTime() - t2.getTime()));
	
} finally { 
	var locker = moo('locker');
	if (locker) {
		locker.destroy();
	}
}

Log.log("ItxCommonJS# Tiempo de toda la carga y procesamiento inicial de JS (ms): " + (new Date().getTime() - t1.getTime()));
</script>

	</body>
</html>