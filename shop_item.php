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
				<section id="product" class="product-card psection_2 ptype_0 pcatentry_1667885 pversion_v1">    			
					
						<?php /*?><nav id="products-nav" class="fixed">
							
								<a href="#" class="back gaTrack gaViewEvent" data-ga-props="{action:'Navegacion', opt_label:'Volver'}">
									BACK
								</a>
								 
								
								<input type="hidden" id="patternProductUrl" name="patternProductUrl" value="http://www.zara.com/us/en/-c564607" />
								<a class="prev gaTrack gaViewEvent" data-ga-props="{action:'Navegacion', opt_label:'Anterior'}" href="javascript:void(0)">
									<i class='icon icon-arrow-left-disabled'></i>
								</a>
								<a class="next gaTrack gaViewEvent" data-ga-props="{action:'Navegacion', opt_label:'Siguiente'}" href="javascript:void(0)">
									<i class='icon icon-arrow-right-disabled'></i>
								</a>
							
						</nav><?php */?>	
					
					
					<div class="left">
										
						
						
						

<div class="bigImageContainer">

	
				<div class="media-wrap image-wrap full  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_1_1_1.jpg?timestamp=1391191781649" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_1_1_1.jpg?timestamp=1391191781649"
							alt="Image 1 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="0"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_1_1_1.jpg?timestamp=1391191781649"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_1_1_1.jpg?timestamp=1391191781649" 
							
								id="bigImage"
							
						/>
					</a>
					
						<div id="related-lnks" class="_relProducts _relatedProductsExcerpt">
							<span>LOOK+</span>
							 
								<a href="http://www.zara.com/us/en/man/shoes/sneakers/running-sneaker-c564607p1669117.html" data-popup-href="http://www.zara.com/webapp/wcs/stores/servlet/CatentryPopUpView?catalogId=24056&categoryId=564607&langId=-1&productId=1669117&storeId=11719" 
									class="_linkPopUpProduct gaTrack gaViewEvent" data-relIndex="0"
									data-pRef="06719454-V2014" data-pColor="505"  
								   	data-ga-props="{action:'Relacionados_enlace_texto', sourceType:'Productos_Relacionados', sourceReference:'06719454-V2014', productRef:'12278302-V2014'}">
									RUNNING SNEAKER
								</a>
								
								
						</div>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap other  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_1_1.jpg?timestamp=1391191750057" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_1_1.jpg?timestamp=1391191750057"
							alt="Image 2 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="1"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_1_1.jpg?timestamp=1391191750057"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_2_1_1.jpg?timestamp=1391191750057" 
							
						/>
					</a>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap other  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_2_1.jpg?timestamp=1391191753893" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_2_1.jpg?timestamp=1391191753893"
							alt="Image 3 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="2"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_2_1.jpg?timestamp=1391191753893"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_2_2_1.jpg?timestamp=1391191753893" 
							
						/>
					</a>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap other  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_3_1.jpg?timestamp=1391191757684" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_3_1.jpg?timestamp=1391191757684"
							alt="Image 4 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="3"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_3_1.jpg?timestamp=1391191757684"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_2_3_1.jpg?timestamp=1391191757684" 
							
						/>
					</a>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap other  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_4_1.jpg?timestamp=1391191761632" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_4_1.jpg?timestamp=1391191761632"
							alt="Image 5 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="4"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_4_1.jpg?timestamp=1391191761632"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_2_4_1.jpg?timestamp=1391191761632" 
							
						/>
					</a>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap other  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_5_1.jpg?timestamp=1391191765929" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_5_1.jpg?timestamp=1391191765929"
							alt="Image 6 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="5"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_5_1.jpg?timestamp=1391191765929"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_2_5_1.jpg?timestamp=1391191765929" 
							
						/>
					</a>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap other  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_6_1.jpg?timestamp=1391191770026" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_6_1.jpg?timestamp=1391191770026"
							alt="Image 7 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="6"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_6_1.jpg?timestamp=1391191770026"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_2_6_1.jpg?timestamp=1391191770026" 
							
						/>
					</a>
					
					
					
				</div>		
			
				<div class="media-wrap image-wrap plain  imageZoom" data-imgRatio="081" >
					
					
					<a href="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_6_1_1.jpg?timestamp=1391191773835" class="disabled-anchor">
						<img class="image-big gaViewEvent sbdraggable draggableMain" data-ga-props="{action:'Super_Zoom', opt_label:'Ampliar'}" 
							data-src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_6_1_1.jpg?timestamp=1391191773835"
							alt="Image 8 of COMBINED COTTON AND LINEN JACKET from Zara "
							data-id="1667885" data-ref="06719454-V2014" data-color="505" data-category="564607" 
							data-zoom-index="7"
							data-zoom-url="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_6_1_1.jpg?timestamp=1391191773835"
							data-name="COMBINED COTTON AND LINEN JACKET"
							sb-id="06719454505"
							src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/400/6719454505_6_1_1.jpg?timestamp=1391191773835" 
							
						/>
					</a>
					
					
					
				</div>		
			

	


	
</div>









<?php /*?><script id="common.share" type="text/template">
	
		<div class="share-actions"> 
			<span>SHARE</span>
			<ul class="socialLinks">
				{{#services}}
					<li class="icon icon-{{name}} {{#isFriends}}sbopenclose{{/isFriends}}"> 
						<a href="#" title="{{name}}" class="" data-type="{{name}}"> 
							<span class="offleft">{{name}}</span> 
						</a> 
					</li>
				{{/services}}
			</ul> 
		</div> 

</script><?php */?>

<?php /*?><script id="common.techsheet" type="text/template">
	<div class="techsheet-content">
		<div class="left">
			<div class="bigImageContainer">
				<div class="image-wrap">
					<img id="bigImage" class="image-big" src="{{imgSrc}}" alt="{{imgAlt}}">
				</div>
			</div>
		</div>
		<div class="right">
			<div class="metrics">Measurements in centimetres</div>
			{{> techsheetTable}}
		</div>
	</div>
</script>

<script id="techsheetTable" type="text/template">
<table class="techsheet-table">
	<tbody>
		{{#metrics}}
			<tr>
				<th colspan="2">{{tag}}</th>
					{{#values}}
						<td>{{.}}</td>
					{{/values}}
				<td></td>
			</tr>
		{{/metrics}}
	</tbody>
	<thead>
		<tr>
			<th class="tag"></th>
			<th class="nav-btn"><i class="prev icon {{prevBtnClass}}"></i></th>
			{{#sizeList}}
				<th>{{.}}</th>
			{{/sizeList}}
			<th class="nav-btn"><i class="next icon {{nextBtnClass}}"></i></th>
		</tr>
	</thead>
</table>
</script><script type="text/javascript">
cFns.push(function() {
	zara.core.startModule('ItxCatentryDetailImageModule', {
		mainEl: '#bigImageContainer',
		productRef: '06719454-V2014',
		flowplayerKey: "#$b34773055ffd7a4fb0b",
		socialMsg: 'MAN - COMBINED COTTON AND LINEN JACKET',
		detailDescription: 'HEIGHT OF MODEL 185 CM.SIZE L',
		mailUrl: 'http://www.zara.com/webapp/wcs/stores/servlet/ProductDetailSendToFriendAjaxView?catalogId=24056&catentryId=1667885&categoryId=564607&langId=-1&storeId=11719',
		relatedProducts: {"relProducts":[{"productId":"1669117"}]},
		xmedias: {"505":{"xmedias": [{"datatype": "xmedia","set":"2","type":"image","kind":"full","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_1_1_1.jpg?timestamp=1391191781649"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_1_1.jpg?timestamp=1391191750057"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_2_1.jpg?timestamp=1391191753893"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_3_1.jpg?timestamp=1391191757684"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_4_1.jpg?timestamp=1391191761632"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_5_1.jpg?timestamp=1391191765929"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_6_1.jpg?timestamp=1391191770026"},{"datatype": "xmedia","set":"2","type":"image","kind":"plain","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_6_1_1.jpg?timestamp=1391191773835"}]}}
		
	});
});</script><?php */?>






						
					</div>
					

<div class='right' id="productRightMenu-1667885">

	<header>
		<h1>
			COMBINED COTTON AND LINEN JACKET	
		</h1>
	</header>						
	
	
	<p class="reference">
		Ref. 6719/454
	</p>	
	
								
	<p class="description">HEIGHT OF MODEL 185 CM.SIZE L</p>
						
	
	<p class="price">
		
					<span class="price" data-price="169.00  USD">
						&nbsp;
					</span>
				
		
	</p>
	
	
	<div id='product-info-1667885' class="product-info">
	
		
		
			<div id='composition-1667885' class="_popup gaTrack gaViewEvent composition" data-ga-props="{action:'Composicion_Y_Cuidados', opt_label:'Mostrar'}">
				<h2>Composition</h2>
				<div class="hidden-content">
					<h2>
						Composition
					</h2>
						
					
					<ul>
						
						
										<div class="section"><p class="titleSection">
											OUTER SHELL
										</p></div>
										
										<div class="section zonasPrenda">
													
												<p class="zonasPrenda">
												80%&nbsp;LINEN, 20%&nbsp;COTTON
												</p>											
											
										</div>	
									
										<div class="section"><p class="titleSection">
											LINING
										</p></div>
										
										<div class="section zonasPrenda">
													
												<p class="zonasPrenda">
												100%&nbsp;POLYESTER
												</p>											
											
										</div>	
									
									<div class="section"><p class="titleSection">
										
											* EXCLUSIVE OF DECORATION<br>
										
									</p></div>
								
					</ul>
					
						<h2>
							<p class="mod title">Care</p>
						</h2>
						<ul class="list-cares">
							
								<li class="clickToolTip">
									<i class="icon icon-cares-7"></i>
									<span class="note">MACHINE WASH MAX 30ºC SHORT SPIN</span>	
								</li>
							
								<li class="clickToolTip">
									<i class="icon icon-cares-14"></i>
									<span class="note">DO NOT BLEACH</span>	
								</li>
							
								<li class="clickToolTip">
									<i class="icon icon-cares-18"></i>
									<span class="note">IRON AT 110ºC MAX.</span>	
								</li>
							
								<li class="clickToolTip">
									<i class="icon icon-cares-26"></i>
									<span class="note">DRY CLEAN WITH PERCHLOROETHYLENE</span>	
								</li>
							
								<li class="clickToolTip">
									<i class="icon icon-cares-35"></i>
									<span class="note">DO NOT TUMBLE DRY</span>	
								</li>
							
						</ul>
					
				</div>											
			</div> 
			<div id='delivery-1667885' class="_popup  gaTrack gaViewEvent delivery" data-ga-props="{action:'Envio', opt_label:'Mostrar'}">
				<h2>Shipping</h2>
				<div class="hidden-content">					
					<!-- Start - JSP File Name:  ItxProductMarketingSpot.jsp --><!-- Please - Do not remove this comment.  --><p class="mod title">Shipping</p>
<div class="section">
	<p class="titleSection">Pick-up in store <span class="priceSending">free</span></p>
	<p>In the store of your choice in 3-5 working days</p>
</div>	
<div class="section">
	<p class="titleSection">Standard <span class="priceSending">free</span></p>
	<p>In 2-4 working days * </p>

</div>
<div class="section">
	<p class="titleSection">Express <span class="priceSending">9.95 USD</span></p>
	<p>In 24-48 hours (working days) *</p>

</div>
<div class="section">
<p class="footNote">* Except remote areas</p>
</div><!-- End - JSP File Name:  ItxProductMarketingSpot.jsp -->
				</div>											
			</div>
			
			
			<div id='returns-1667885' class="_popup  gaTrack gaViewEvent returns" data-ga-props="{action:'Devolucion', opt_label:'Mostrar'}">
				<h2>
					Return
				</h2>
				<div class="hidden-content">
					<!-- Start - JSP File Name:  ItxProductMarketingSpot.jsp --><!-- Please - Do not remove this comment.  --><p class="mod title">Return</p>	
<div class="section"><p>You have one month from the shipping confirmation email.</p></div>
<div class="section">
	<p class="titleSection">RETURNS IN STORE <span class="priceSending">FREE</span></p>
	<p>You can return items to any Zara store in the country where the purchase was made.</p>
</div>
<div class="section">
	<p class="titleSection">DROP OFF RETURN <span class="priceSending">FREE</span></p>
	<p>You can leave your package at our courier’s nearest drop off location.</p>
</div>
<div class="section">
	<p class="titleSection">HOME RETURN  <span class="priceSending">FREE</span></p>
	<p>You may request a pick-up from your home. </p>
</div>																																						
<div class="section">											
	<p>More information on <a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=6&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Producto', action:'Guia_Compra_Cambios'}" >exchanges</a> and <a href="http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&amp;fts=5&amp;langId=-1&amp;storeId=11719"  class=" gaTag gaEvent myShopGuideLinkClass"  gaProps="{events:'click', section:'Producto', action:'Guia_Compra_Devoluciones'}" >refunds</a> policy.</p>									
</div>																
<!-- End - JSP File Name:  ItxProductMarketingSpot.jsp -->	
				</div>					
			</div>			
		
	</div> 
	<form method="post" 
		  class="itemAddId ignoreValidation" 
		  id="itemAddId-1667885" 
		  name="itemAdd" 
		  action="http://www.zara.com/webapp/wcs/stores/servlet/AjaxOrderChangeServiceItemAdd?catalogId=24056&amp;categoryId=salesCategoryId&amp;langId=-1&amp;storeId=11719">
		  
	
		
				<input type="hidden" id="f_itemId" class="f_itemId" name="catEntryId" value="1677019" />	
			
		
		<input type="hidden" name="quantity" value="1" />										
		<input type="hidden" name="orderId" value="." />
		<input type="hidden" name="outOrderName" value="orderId" />
		<input type="hidden" name="calculateOrder" value="1" />
		<input type="hidden" name="currentCategoryId" value="564607" />
		<input type="hidden" name="sizeMessage" id="sizeMessage" value="SELECT SIZE" />
	
		
		<input type="hidden" name="langId" value="-1"/>
		<input type="hidden" name="storeId" value="11719"/>
		
		<h2  class="seoInfo">1. Choose a colour</h2>
	
		
			<div id='colors-1667885' class="colors">
				
					<label 
					    class="colorEl auxImageLi selected" 
					    data-colorCode="505">
						<a href="#content"  title="Khaki">
							<img src="//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/135/6719454505_3_1_1.jpg?timestamp=1391191785264" 
							class="checked"/>
								
							
							<span>Khaki</span>
							
							
						</a>
					</label>	
				
			</div>
		
		
		<h2 class="seoInfo">2. Choose a size</h2>
		
				<div class="size-btn" id="size-btn">
					<span class="selected-size">SELECT SIZE </span>
					<div class="size-select">
						<table>
							
							            <tr class="product-size gaTrack gaViewEvent" id="selecsize_2" 
							            	data-catentryid="1677019" data-ga-props="{action:'Escoger_Talla'}" data-sizeCode="2">
							        
									<td class="size-name">																			   	   				   		
				   	   				   		S
									</td>																								
									<td class="suscribe">
										
									</td>
								</tr>
							
							            <tr class="product-size gaTrack gaViewEvent" id="selecsize_3" 
							            	data-catentryid="1677065" data-ga-props="{action:'Escoger_Talla'}" data-sizeCode="3">
							        
									<td class="size-name">																			   	   				   		
				   	   				   		M
									</td>																								
									<td class="suscribe">
										
									</td>
								</tr>
							
							            <tr class="product-size gaTrack gaViewEvent" id="selecsize_4" 
							            	data-catentryid="1677109" data-ga-props="{action:'Escoger_Talla'}" data-sizeCode="4">
							        
									<td class="size-name">																			   	   				   		
				   	   				   		L
									</td>																								
									<td class="suscribe">
										
									</td>
								</tr>
							
							            <tr class="product-size gaTrack gaViewEvent" id="selecsize_5" 
							            	data-catentryid="1677158" data-ga-props="{action:'Escoger_Talla'}" data-sizeCode="5">
							        
									<td class="size-name">																			   	   				   		
				   	   				   		XL
									</td>																								
									<td class="suscribe">
										
									</td>
								</tr>
							
						</table>
						 
						<button class="size-guide gaViewEvent gaTrack" 
								data-href="http://www.zara.com/webapp/wcs/stores/servlet/ProductGuideSizeAjaxView?catalogId=24056&amp;categoryId=564607&amp;langId=-1&amp;productId=1667885&amp;storeId=11719"
								data-ga-props="{action:'Guia_de_tallas'}">Size guide</button>
					</div>
					
				</div>
			
	
			<h2 class="seoInfo"><label for='size'>3. Put it in your basket</label></h2>
			<div id="cart-actions-1667885" class="cart-actions">
				
					<button id="addItemToBasketBt-1667885" type="button" value="Add to cart" class="button butBlack butAddCart gaViewEvent" data-ga-props="{action:'Anadir_a_la_Cesta'}"><span>Add to basket</span></button>
					<a id="buyButton-1667885" href="https://www.zara.com/webapp/wcs/stores/servlet/ShopCartPage?catalogId=24056&amp;orderId=.&amp;langId=-1&amp;storeId=11719" class="button process-order-btn gaTrack gaViewEvent buyButton" data-ga-props="{action:'Tramitar_Pedido'}"><span>Process order</span></a>								
				
			</div>
		
	</form>

			<div id="message" class="line boxPromoWrap" >
				<!-- Start - JSP File Name:  ItxProductMarketingSpot.jsp --><!-- Please - Do not remove this comment.  --><div id="banner" class="category-content"> 	 
	<h3>FREE SHIPPING AND FREE RETURNS</h3> 
	<p>On all standard orders</p>  
</div><!-- End - JSP File Name:  ItxProductMarketingSpot.jsp -->
			</div>	
			
			<div id="clickToCall">
				
			</div>
		
	
</div>
<?php /*?>	<script id="product.sizeSelectTplV2" type="text/template">
		<tr class="product-size {{availClass}} {{subscribeClass}} gaTrack gaViewEvent" data-catentryid="{{catentryId}}" data-ga-props="{action:'Escoger_Talla'}">
			<td class="size-name">
		   		{{sizeDesc}}
			</td>																								
			<td class="suscribe">
				{{#showBackSoonIcon}}
					<span class="icon icon-back-soon" data-stockStatus="{{availClass}}"></span>
				{{/showBackSoonIcon}}
			</td>
		</tr>
	</script>
	
	<script id="product.leyendBackSoonTpl" type="text/template">
		<div class="leyend-back-soon">
			<span class="icon icon-back-soon"></span><span class="back-soon-msg">{{subscribeLabel}}</span>
		</div>
	</script><?php */?>
    
    
    
    
    
    
    
    
    
    
<?php /*?>	<script type="text/javascript">
cFns.push(function() {	
		zara.core.startModule('ItxProductDetailSelectionModule', {
			mainEl: '#productRightMenu-1667885',
			execMode: "regular",
			productId: "1667885",
			currentCategoryId: '564607',	
			productName: "COMBINED COTTON AND LINEN JACKET",
			productRef: "06719454-V2014",
			productType: "0",
			stockoutSubscriptionServiceUrl: "https://integration.zara.com/CISWS/resources/stockOutSubscription",
			productData: {"colors":[{"sizes":[{"currentPrice":"169.0","oldPrice":"0.0","catentryId":"1677019","availability":"InStock","id":"2","description":"S"},{"currentPrice":"169.0","oldPrice":"0.0","catentryId":"1677065","availability":"InStock","id":"3","description":"M"},{"currentPrice":"169.0","oldPrice":"0.0","catentryId":"1677109","availability":"InStock","id":"4","description":"L"},{"currentPrice":"169.0","oldPrice":"0.0","catentryId":"1677158","availability":"InStock","id":"5","description":"XL"}],"pColorImgNames":["6719454505_1_1","6719454505_2_1","6719454505_2_2","6719454505_2_3","6719454505_2_4","6719454505_2_5","6719454505_2_6","6719454505_6_1"],"code":"505","pColorImgBaseUrl":"/2014/V/0/2/p/6719/454/505/2/2/{imageName}_{sizeCode}.jpg?timestamp=1391191781649","colorImgUrl":"http://static.zara.net/photos//2014/V/0/2/p/6719/454/505/2//w/135/6719454505_3_1.jpg?timestamp=1391191785264"}],"productOldPrice":"0.0","tags":"[]","productId":"1667885","productCurrentPrice":"169.0"},
			sizeSelectTplId: "product.sizeSelectTplV2",
			leyendBackSoonTplId: "product.leyendBackSoonTpl",
			xmedias: {"505":{"xmedias": [{"datatype": "xmedia","set":"2","type":"image","kind":"full","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_1_1_1.jpg?timestamp=1391191781649"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_1_1.jpg?timestamp=1391191750057"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_2_1.jpg?timestamp=1391191753893"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2382","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_3_1.jpg?timestamp=1391191757684"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_4_1.jpg?timestamp=1391191761632"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_5_1.jpg?timestamp=1391191765929"},{"datatype": "xmedia","set":"2","type":"image","kind":"other","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_2_6_1.jpg?timestamp=1391191770026"},{"datatype": "xmedia","set":"2","type":"image","kind":"plain","width":"1920","height":"2379","url":"//static.zara.net/photos//2014/V/0/2/p/6719/454/505/2/w/1920/6719454505_6_1_1.jpg?timestamp=1391191773835"}]}},
			
			messages: {
				sizeLabel: "SELECT SIZE",
				soldOut: "Out of stock",
				addingProductsMsg: "Adding product",
				noSelectedColorTitle: "Notice",
				noSelectedColorMsg: "You must select a size.",
				outOfStockTitle: "Notice",
				outOfStockMsg: "We are sorry, but one of the articles selected in your order is out of stock.",
				backSoonLabel: "Email me when available"
			}
		});	
	});</script><?php */?>	
					
				</section>	
			</section>
            
            
            
            
            
            
            
            
            

			
			
			
			
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