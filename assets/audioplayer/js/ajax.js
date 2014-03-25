 // prev/next navigator

//clrz_site_url= null;

clrz_page_title= null;
clrz_xhr= null;
content_scripts = [];
inner_scripts ='';
new_url = null;
clrz_currency = null;
isbrowserajax = false;

window.onpopstate = function(e) {
    //        var newurl = e.state.path;
    if(!jquerySelHTML.hasClass('lt_ie9') && (!jquerySelHTML.hasClass('is_webkit') || jquerySelHTML.hasClass('initwebkit'))){

        var newurl = getCleanHref();

        if(newurl.indexOf(clrz_site_url)==-1){
            document.location.href(newurl);
        }else{
            isbrowserajax = true;
            goToUrl(newurl,true,'',true);
        }
    }else{
        jquerySelHTML.addClass('initwebkit');
    }
};


function initajax(){




    checkHashChange();


    if(!jquerySelHTML.hasClass('lt_ie9')){


       jquerySelHTML.addClass('isajax');

        jquerySelBODY.on("click","a", function(e){
            var _this = jQuery(this);

            if (e.metaKey || e.shiftKey || e.ctrlKey || e.altKey) {
                return;
            }

            var parser = document.createElement('a');
            parser.href = _this.attr('href');
            
             if(parser.href.substr(0,5) == 'https'){
                 return;
             }
             
             if(document.location.href.substr(0,5) == 'https'){
                if(parser.href.substr(0,5) == 'http:'){
                    return;
                }
            }

            // Lien vers une image
            var ppath = parser.pathname;
            if(ppath.substr(-4,4) == '.jpg' ||
                ppath.substr(-4,4) == '.mp3' ||
                ppath.substr(-4,4) == '.gif' ||
                ppath.substr(-4,4) == '.bmp' ||
                ppath.substr(-4,4) == '.png' ||               
                ppath.substr(-5,5) == '.jpeg'){
                return;
            }

            // Lien avec classes bloquantes
            if(_this.hasClass('clrzsound_link') || _this.hasClass('noasync') || _this.attr('href') === '' || !_this.attr('href')){
                return;
            }

            // Target blank
            if(_this.attr('target') == '_blank'){
                return;
            }

            if(_this.attr('href').substr(0,1)!='/'){
                if(parser.hostname != window.location.hostname || _this.attr('href').substr(0,1) === '#'){
                   return;
                }

                // If link protocol is different from window
                if(parser.protocol != window.location.protocol){
                    return;
                }
            }

            el = this;

            is_current_site = true;
            if(el.hostname &&
                el.hostname != window.location.hostname &&
                "."+el.hostname != Mage.Cookies.domain){
                is_current_site = false;
            }

            if(is_current_site){
                //if(e) e.stop();
                // // console.log(jQuery(el).attr('href'));
                goToUrl(jQuery(el).attr('href'));
            }

            return false;
        });
    }
}


function goToUrl(_url, uncheckprev, callback,forcecache){

    close_all_lightboxes();

    if(jquerySelHTML.hasClass('lt_ie9')){
        document.location.href = _url;
        return 0;
    }


    if(uncheckprev==true){
        cache = false;
    }else{
	 cache = true;
    }
    
    cache = (forcecache) ? forcecache : cache;
    
    if(_url.toLowerCase().indexOf("/checkout/") >= 0){
	    cache = false;
    }

    var currenturi = new URI(getCleanHref());
    var currenturl = getCleanHref().replace('#'+currenturi.fragment(), '');

    var newuri = new URI(_url);
    _url = _url.replace('#'+newuri.fragment(), '');

    if (
        _url.toLowerCase().indexOf("/checkout/cart/add") >= 0 ||
        _url.toLowerCase().indexOf("/checkout/cart/delete") >= 0
        )
        {

        jquerySelHTML.addClass('loading');
        jQuery.get(_url).success(function(data){
            updateCart();
        });

        return false;
    }

    if (clrz_xhr && (previous_url!=_url)){
        clrz_xhr.abort();
        jQuery(window).trigger('ajaxready');

    }

    new_url = _url;
    if(!uncheckprev && _url==currenturl && newuri.fragment()!=='' && jQuery('#'+newuri.fragment()).length>0){
        window.scrollBase.animate({
            scrollTop:jQuery('#'+newuri.fragment()).offset().top
        }, 'fast');
        return false;
    }

    if (!uncheckprev) {
        uncheckprev = false;
    }

    if (jquerySelHTML.hasClass('loading') || _url === '' || (_url == getCleanHref() && uncheckprev === false)) {
        return false;
    }

    jquerySelHTML.addClass('loading');
    jQuery(window).trigger('beforegourl');
    previous_url = _url;
    clrz_xhr = jQuery.ajax({
        'method':'get',
        'url':_url,
        'data':'ajax=true',
        'dataType': 'text',
        'cache':cache,
        'complete':function(jqXHR, textStatus){
            var canLoadContent = true;
            dom = jQuery(jqXHR.responseText);
            dom.find('#error-no-ajaxload').each(function(){
                canLoadContent = false;
                manageAjaxMessage(jQuery(this).val());
            });

            if (!canLoadContent){
                jquerySelHTML.removeClass('loading');
                return;
            }

            if (textStatus != 'success'){
                manageAjaxMessage(dom.find('h1').text());
                jquerySelHTML.removeClass('loading');
                return;
            }

            _url = clrz_clean_ajax_from_url(_url);
            var inc = 0;
            dom.each(function(i,el){
                if (jQuery(el).get(0).tagName == 'SCRIPT') {
                    if (jQuery(el).attr('src')) {
                        content_scripts[inc] = jQuery(el).attr('src');
                        inc = inc + 1;
                    }
                    else{
                        inner_scripts += '<script>' + jQuery(el).text() + '</script>';
                    }
                }
            });

            jQuery.getScript(content_scripts,function(data, textStatus, jqxhr) {
                loadcontent(jqXHR.responseText);
            });

            if (typeof callback === 'function') {
                callback();
            }
        }
    });
}

function loadcontent(content) {

//    console.log('loadcontent');
    layout = dom.find("#clrz_content").attr('data-layout');
    new_layout = jQuery(".main-content").attr('data-layout');

    if(jquerySelBODY.attr('data-clrz-transition')){

        layout = jquerySelBODY.attr('data-clrz-transition');
    }
//    console.log(new_layout);
//    console.log(layout);

    layout = layout.replace(/-/g,"_");
    var fn = null;

    if(typeof eval('window.partial_'+layout) == 'function') {

        fn = eval('window.partial_'+layout);
        fn(content);

         //console.log(layout);
    }else if((new_layout==layout) && typeof eval('window.transition_'+layout) == 'function') {
//         console.log('test fn');
          //callback internal transition
        fn = eval('window.transition_'+layout);
        fn(content);

        //console.log(layout);

    }else{

        //console.log('std');
        jQuery('.main-content').animate({
            'opacity': 0
        }, {
            duration: 400,
            complete: function() {
                var jquerySelMain = jQuery('#main');
                jQuery('.main-content').remove();
                dom.find(".main-content").css({
                    'opacity': 0
                });
                jquerySelMain.append(dom.html());
                dom.remove();

                jQuery(window).trigger('ajaxready');

                setTimeout(function(){
                    jQuery('.main-content').animate({
                    'opacity': 1
                }, 400);
                },200);

                jquerySelMain.animate({
                    scrollTop: jquerySelMain.offset().top
                }, 600);

                clrz_xhr = null;

                var newurltab = getCleanHref().split('#');
                if (newurltab.length > 1 && jQuery('#' + newurltab[1]).length > 0) {
                    jquerySelMain.animate({
                        scrollTop: jQuery('#' + newurltab[1]).offset().top
                    }, 'fast');
                }
            }
        });


    }




//     console.log('endload');



}

function partial_filterz(content) {
    var jquerySelMain = jQuery('#main');

    jQuery('.products-grid').animate({
        'opacity': 0
    }, {
        'duration': 300,
        'complete': function() {
            jQuery('.main-content').remove();
            dom.find('.products-grid').css({'opacity':0});
            jquerySelMain.append(dom.html());
            dom.remove();


            jQuery(window).trigger('ajaxready');
            jQuery('.products-grid').animate({
                'opacity': 1
            }, 300);

        }
    });


}


function partial_customer_account_login(content) {
	//alert('vous devez etre loggé');
	jQuery('.tm-account').find('a').trigger('click');
}

/**
 * transition_category_view
 */
//function transition_catalog_category_view(content) {
//    jQuery('.main-content').animate({
//                    'opacity': 0
//                },{'duration':300,'complete':function(){
//                        jQuery('.main-content').remove();
//
//                    jQuery('#main').append(dom.find(".main-content").css({'opacity':0}).parent().html());
//                    dom.remove();
//                    jQuery(window).trigger('ajaxready');
//
//
//                    jQuery('.main-content').animate({'opacity': 1},300);
//                }
//                });
//
//}

function partial_customer_account_forgotpassword(content){
	var blankDiv = jQuery('#tc-blank');
	blankDiv.html(content);
	jQuery('.tb-toggle-blank').trigger('click');
    jquerySelHTML.removeClass('loading');
}

/**
 * transition_result_index
 */

/**
 * updateCart
 */
function updateCart() {
    jQuery.ajax({
        url: '/ajax/services/cart?___store='+CURRENT_LANGUAGE,
        success: function(data) {
            // Reload main cart
            if (window.location.pathname == '/checkout/cart/') {
                updateMainCart();
            }
            else {
                jquerySelHTML.removeClass('loading');
            }

            jQuery('#shoppingcart').html(data);
            jQuery('.toolbar_menu .tm-cart a').click();
            setToolbarCartItems();
            window.timeoutTriggerUpdateCart = setTimeout(function() {
                jQuery('.btn-close-toolbar').trigger('click');
            }, 3000);

            jQuery('#shoppingcart').on('mouseenter', function() {
                clearTimeout(window.timeoutTriggerUpdateCart);
            });
        },
        cache: false
    });
}

function updateWishlist(){
	jQuery.get('/colette_wishlist/ajax/render?___store='+CURRENT_LANGUAGE).success(function(data){
		jQuery('.toolbar-content #tc-wishlist').html(data);
     });
}

function updateCart2(){
	jQuery.get('/ajax/services/cart?___store='+CURRENT_LANGUAGE).success(function(data){
        jQuery('#shoppingcart').html(data);
        setToolbarCartItems();
     });
}

function updateMainCart() {
    $j('#main').load('/checkout/cart/?ajax=true', function(){
        jquerySelHTML.removeClass('loading');
    });
}

function setNewProductsSidebar() {
    jQuery.get('/colette_webservices/index/index/block/newproducts/').success(function(data) {
        jQuery('#side-products').html(data);
    });
}

function set_related_products_sidebar() {
    var jqsideproducts = jQuery('#side-products');

    // Part content OR product & empty products
    if (jquerySelHTML.hasClass('is-in-content') || jquerySelBODY.hasClass('catalog-product-view')) {
        if (jqsideproducts.html() === '' || jqsideproducts.find('.block-related-products-side').length > 0) {
            setNewProductsSidebar();
        }
    }
}

 function updateOpenGraphMetaData() {
     // Product Open Graph Meta
     if (typeof ogData !== 'undefined') {
         for (var og in ogData) {
             if (ogData.hasOwnProperty(og)) {
                 var meta = $j('meta[property="og:' + og + '"]');
                 if (meta.length > 0) {
                     meta.prop('content', ogData[og]);
                 }
                 else {
                     $j('head').append('<meta property="og:' + og + '" content="' + ogData[og] + '" />');
                 }
             }
         }




         $j('.product-share-buttons .fb-like').mouseenter(function(){

             if($j(this).hasClass('parsed')){
                 return;
             }

             $j(this).addClass('parsed');
             FB.XFBML.parse();


         });


     }
 }

jQuery(window).on('ajaxready',function(){
    clrz_xhr = null;
    jquerySelBODY.attr('class',clrz_body_class);
    jQuery('#clrz_content').append(inner_scripts);
    jQuery('title').html(clrz_page_title);
    jquerySelBODY.attr('class',clrz_body_class);
    jquerySelHTML.removeClass('loading');
    updateOpenGraphMetaData();

    if(clrz_currency){
        jQuery('#sidebar a:not(.clrzsound_link)').attr('uri:search',{'currency':clrz_currency});
    }else{
        jQuery('#sidebar a:not(.clrzsound_link)').attr('uri:search',{'currency':undefined});
    }

    if(new_url && isbrowserajax===false){
        clrzpushState(new_url);
        if(_gaq){
            _gaq.push(['_trackPageview', new_url.replace(clrz_site_url,'/')]);
        }
    }
    isbrowserajax = false;

    content_scripts = [];
    inner_scripts ='';
    launch_page_ready();

});

jQuery(document).on('ready', function() {
    initajax();
});



function clrzpushState(url) {
    if(window.history.pushState){

        window.history.pushState({
            path:url
        },'',url);
    }else{


        /* iE */
        var newhash = url.replace(clrz_site_url,'');
        if(newhash.substr(0,1)=='/'){
            newhash = newhash.substr(1);
        }
        document.location.hash = '#!/'+newhash;
//        var ieurl = url.replace(clrz_site_url,'#!/');
//        document.location.hash=ieurl;

    }



}


function checkHashChange(){


    // au init, on check la presence de #! dans l'url
    if(document.location.href.indexOf("#!") >= 0){
        goToUrl(document.location.href.replace('#!/',''), true);
    }

    if(jquerySelHTML.hasClass('lt_ie9')){
        return;
    }
    // hashchange quand pushstate pas géré
    if(!window.history.pushState){



        if(document.location.href!=clrz_site_url && document.location.href.indexOf("#!") == -1 && document.location.href.toLowerCase().indexOf("/clrz_mp3/player") == -1){
            document.location.href = clrz_site_url+'#!/'+document.location.href.replace(clrz_site_url, '');
        }

        jQuery(window).hashchange(function(hash){
            goToUrl(document.location.href.replace('#!/',''));
        });
    }


}