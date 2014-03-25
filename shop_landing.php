<?php 
/*$website_base_url = "http://localhost/nomadmag/";*/
$website_base_url = "http://nomadmag.co/";
$store_url = "http://shopstore.nomadmag.co/";

if(!isset($_REQUEST['landing'])){
	$LANDING_PAGE = "2";
		
}else{
	$LANDING_PAGE = $_REQUEST['landing'];
}


	
	switch($LANDING_PAGE){
	
		case '1':
			
			$landing_full_bg_src = "feat_landing.jpg";
			$feat_sub_menu_style ="display:block;";
			break;	
			
		case '2':
			
			$landing_full_bg_src = "man_landing.jpg";
			$man_sub_menu_style ="display:block;";
			break;	
			
		case '3':
		
			
			$landing_full_bg_src = "woman_landing.jpg";
			$woman_sub_menu_style ="display:block;";
			break;	
					
	}



?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html id='V2014-HOMBRE-CAZADORAS' class='no-js lt-ie9 lt-ie8 lt-ie7 categoryPage two newDesign-2013-1' data-store='us'> <![endif]-->
<!--[if IE 7]>         <html id='V2014-HOMBRE-CAZADORAS' class='no-js lt-ie9 lt-ie8 categoryPage two newDesign-2013-1' data-store='us'> <![endif]-->
<!--[if IE 8]>         <html id='V2014-HOMBRE-CAZADORAS' class='no-js lt-ie9 categoryPage two newDesign-2013-1' data-store='us'> <![endif]-->
<!--[if gt IE 8]><!--> <html id='V2014-HOMBRE-CAZADORAS' class='no-js categoryPage two newDesign-2013-1' lang="en" data-store='us'> <!--<![endif]-->
	<head>
	
		

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset=utf-8 />







<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


		<title>Nomad Magazine</title>
	
		<meta name="description" content="Jackets" />
	
<meta name="author" content="Zara.com">
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

    
    

<?php /*?><link rel="stylesheet" type="text/css" media="all" href="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/css/application-comp-1392924153978.css" />
		
<link rel="stylesheet" type="text/css" media="all" href="http://static.zara.net/wcsstore/ZaraStorefrontAssetStore/css/category-comp-1392924153978.css" />   
    <?php */?>
 
    
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website_base_url?>assets/shop/css/application-comp-1392924153978.css" />
		
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website_base_url?>assets/shop/css/category-comp-1392924153978.css" />     
    
    

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






<script>
(function() {
  var staticContentPath = '<?php echo $website_base_url?>assets/shop'.split(':')[1];
  document.write("<link rel='stylesheet' type='text/css' media='all' href='" + staticContentPath + "/common/css/standard-v.3.12.min.css' />");
  document.write("<script src='" + staticContentPath + "/common/js/zaralib-p-v.0.5.min.js' type='text/javascript' charset='utf-8'></scr" + "ipt>");
  document.write("<script src='" + staticContentPath + "/common/js/extensions-v.0.10.min.js' type='text/javascript' charset='utf-8'></scr" + "ipt>");
}());
</script>













<script src="<?php echo $website_base_url;?>assets/shop/js/lib/modernizr/modernizr-comp-1392924153978.js"></script>
<!--[if lt IE 9]>
	
<script src="<?php echo $website_base_url?>assets/shop/js/lib/html5shiv/html5-comp-1392924153978.js"></script>	
	
<![endif]-->



<style>


.submenu_list{

	
	display:none;
}


</style>



	</head>
	<body class="staticMenu" itemscope itemtype="http://schema.org/WebPage">


	
		
		
		
		<div id="container-nav" class="fixed">
			<div id="toggleMenu" class="fixed">
				<a id="toggleMenuLnk" href="#" class="toggleMenu icon icon-open-menu"></a>
			</div>
			<nav id="menu">
				<!--menu vertical desplegable-->


	<ul id="mainNavigationMenu">
		
              			
                        
                        
                        
                        
                      
		
              			<li><i class="icon icon-line-menu-divider"></i></li>		
            
  
                        
                        
                        <li id="menuItemData_358502">
              				<a href="<?php echo $website_base_url;?>shop_landing.php?landing=1" >
			              		Featured
			              	</a>
<?php /*?>                            
                            <ul class="submenu_list" style=" <?php echo $feat_sub_menu_style;?>">
	            		
			
	            		
		
							
	            			<li id="menuItemData_567511"
								>
	            				<a href="#">
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
	            		
	            	</ul> <?php */?>
                    
                    
              		
	        </li>
		
        
        
        
                      			<li id="menuItemData_358523" rootId="" rootDesc="">
              				<a href="<?php echo $website_base_url;?>shop_landing.php?landing=2" >
			              		MAN
			              	</a>
              		
	            	<ul class="submenu_list" style=" <?php echo $man_sub_menu_style;?>">
	            		
					
                    			 <li id="menuItemData_564607">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=3">
				              		Shoes
				              	</a>
	            				 
	            			</li>
                            
							
	            			<li id="menuItemData_564607">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=4">
				              		Accessories
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564611">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=6">
				              		Tops
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564615">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=7">
				              		Bottoms
				              	</a>
	            				 
	            			</li>
	            		
					
							
	            			<li id="menuItemData_564619">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=10">
				              		Outerwear
				              	</a>
	            				 
	            			</li>

	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=11">
				              		Pants
				              	</a>
	            				 
	            			</li>
                            
                            
                            
                            	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=13">
				              		Shorts
				              	</a>
	            				 
	            			</li>
                            
                            
                            
                            	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=14">
				              		Tees
				              	</a>
	            				 
	            			</li>
                            
                            
                            
                            	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=15">
				              		Tanks
				              	</a>
	            				 
	            			</li>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                                        	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=17">
				              		Basics
				              	</a>
	            				 
	            			</li>
                            
                            
                            
                                                        	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=20">
				              		Swim
				              	</a>
	            				 
	            			</li>
                            
                            
                                                        	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=24">
				              		Grooming
				              	</a>
	            				 
	            			</li>
                            
                            
                                                        	            			<li id="menuItemData_567512">
	            				<a href="<?php echo $store_url;?>?categories[]=1&categories[]=25">
				              		Sweaters
				              	</a>
	            				 
	            			</li>

            		
	            	</ul> 
	            
	        </li>
            
            
            
            
        				
        
        
              			<li id="menuItemData_358501">
              				<a href="<?php echo $website_base_url;?>shop_landing.php?landing=3" >
			              		WOMAN
			              	</a>
              		
                    
                    
                    
<?php /*?>                                         <ul class="submenu_list" style=" <?php echo $woman_sub_menu_style;?>">
                                    
                                
                                        
                                       <li id="menuItemData_565262">
                                            <a href="#">
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
                                    
                                </ul><?php */?>
	        </li>
		
              			
		

		

		

		

		
              			<li><i class="icon-empty-divider">&nbsp;</i>
              		
	        </li>
		

		

		
	</ul>


	







	<script type="text/javascript">
cFns.unshift(function() { 	
	zara.core.startModule('ItxSideMenuModuleV2', {
		moreInfoCategoryId: 'menuItemData_194501',
		buyingGuideCategoryId: 'menuItemData_196001',
		buyingGuideViewBaseUrl: '<?php /*?>http://www.zara.com/webapp/wcs/stores/servlet/ShopGuideView?catalogId=24056&langId=-1&storeId=11719<?php */?>'
	});
});</script> 
			</nav>
		</div>
		
		
		
		<script type="text/javascript">
cFns.push(function() {
			zara.core.startModule('ItxCategoriesDisplayModule', {
				$mainEl: '#main',
				categoryData: {"priceFilterMax":400,"currencyDecimals":-2,"products":[<?php /*?>{"colors":["490"],"price":8990,"id":"1749017"},{"colors":["401"],"price":9990,"id":"1667457"},{"colors":["922"],"price":9990,"id":"1668802"},{"colors":["401"],"price":7990,"id":"1692225"},{"colors":["811"],"price":13900,"id":"1668755"},{"colors":["505"],"price":9990,"id":"1667888"},{"colors":["707"],"price":7990,"id":"1692226"},{"colors":["505"],"price":9990,"id":"1667892"},{"colors":["707"],"price":9990,"id":"1668106"},{"colors":["707"],"price":16900,"id":"1668103"},{"colors":["250","800"],"price":16900,"id":"1668479"},{"colors":["800"],"price":9990,"id":"1668577"},{"colors":["812"],"price":7990,"id":"1666552"},{"colors":["803"],"price":5990,"id":"1666553"},{"colors":["407"],"price":9990,"id":"1667733"},{"colors":["427"],"price":9990,"id":"1667815"},{"colors":["401"],"price":18900,"id":"1667439"},{"colors":["401"],"price":8990,"id":"1667446"},{"colors":["401"],"price":13900,"id":"1667447"},{"colors":["710"],"price":13900,"id":"1667886"},{"colors":["800"],"price":13900,"id":"1668481"},{"colors":["500"],"price":13900,"id":"1667836"},{"colors":["707"],"price":9990,"id":"1668105"},{"colors":["401"],"price":9990,"id":"1667455"},{"colors":["401"],"price":6990,"id":"1666554"},{"colors":["600"],"price":8990,"id":"1667946"},{"colors":["505"],"price":16900,"id":"1667885"},{"colors":["505"],"price":18900,"id":"1667884"},{"colors":["800"],"price":8990,"id":"1668486"},{"colors":["700"],"price":9990,"id":"1668056"},{"colors":["778"],"price":18900,"id":"1668242"},{"colors":["800"],"price":5990,"id":"1668456"},{"colors":["800"],"price":16900,"id":"1668460"},{"colors":["800"],"price":16900,"id":"1668461"},{"colors":["800"],"price":13900,"id":"1668480"},{"colors":["401"],"price":7990,"id":"1692223"},{"colors":["800"],"price":7990,"id":"1668483"},{"colors":["800"],"price":9990,"id":"1668485"},{"colors":["800"],"price":9990,"id":"1668482"},{"colors":["800"],"price":7990,"id":"1668487"},{"colors":["800"],"price":5990,"id":"1668488"},{"colors":["800"],"price":8990,"id":"1668598"},{"colors":["800"],"price":7990,"id":"1668489"},{"colors":["800"],"price":25900,"id":"1668613"},{"colors":["802"],"price":8990,"id":"1668686"},{"colors":["305"],"price":7990,"id":"1691571"},{"colors":["505"],"price":7990,"id":"1691572"},{"colors":["401"],"price":7990,"id":"1692216"},{"colors":["401"],"price":9990,"id":"1692243"},{"colors":["420"],"price":7990,"id":"1692224"},{"colors":["710"],"price":9990,"id":"1692228"},{"colors":["800"],"price":9990,"id":"1692229"},{"colors":["505"],"price":7990,"id":"1692231"},{"colors":["710"],"price":7990,"id":"1692233"},{"colors":["401"],"price":8990,"id":"1692240"},{"colors":["600"],"price":8990,"id":"1692241"},{"colors":["802"],"price":9990,"id":"1692244"},{"colors":["806"],"price":9990,"id":"1693357"},{"colors":["800"],"price":13900,"id":"1747045"},{"colors":["800","407"],"price":6990,"id":"1754533"},{"colors":["406"],"price":8990,"id":"1756598"},{"colors":["407"],"price":8990,"id":"1756599"},{"colors":["401"],"price":18900,"id":"1772631"},{"colors":["778"],"price":9990,"id":"1693356"},{"colors":["401"],"price":17900,"id":"1667453"},{"colors":["401"],"price":8990,"id":"1667452"},{"colors":["401"],"price":7990,"id":"1667464"},{"colors":["712"],"price":7990,"id":"1692217"},{"colors":["800"],"price":9990,"id":"1667883"},{"colors":["710","800"],"price":7990,"id":"1885501"}<?php */?>],"priceFilterLabelSuffix":"USD","filterUrlStatic":"<?php /*?>http://www.zara.com/webapp/wcs/stores/servlet/CategoryFilterJSON?categoryId=564607&langId=-1&storeId=11719&filterCode=STATIC<?php */?>","filterUrlDynamic":"<?php /*?>http://www.zara.com/webapp/wcs/stores/servlet/CategoryFilterJSON?categoryId=564607&langId=-1&storeId=11719&filterCode=DYNAMIC<?php */?>","categoryId":"564607","priceFilterStep":40},
				productsContainer: 'product-list',
   				categoryKeyword: 'man/jackets',
				emptyFilterMsg: 'No matches'
			});
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





<?php /*?><a href="#" data-ga-props="{action:'Click_en_home_subhome'}" class="full-screen gaTrack gaViewEvent" style="height: 100%; width: 100%;"><?php */?><img data-resized="1" class="full-image" data-images="" id="full_bg_image" data-src="<?php echo $website_base_url;?>assets/shop/images/<?php echo $landing_full_bg_src; ?>" src="<?php echo $website_base_url;?>assets/shop/images/<?php echo $landing_full_bg_src; ?>" style="height: auto; width: auto; min-width:100%; min-height:100%; left: 0px; top: 0px; background-size:cover"><?php /*?></a><?php */?>


	</body>
</html>