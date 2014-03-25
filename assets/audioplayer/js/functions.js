function clrz_body_class() {
    var element_cible = jquerySelHTML.get(0);

    bod = element_cible.className.split(' ');
    var nav = navigator.userAgent.toLowerCase();

    // Detect FFx
    if(nav.match(/firefox/gi) && !jquerySelHTML.hasClass('is_firefox')) bod.push('is_firefox');

    // Detect Webkit
    if(nav.match(/AppleWebKit/gi) && !jquerySelHTML.hasClass('is_webkit')) bod.push('is_webkit');

    // Detect Chrome
    if(nav.match(/Chrome/gi) && !jquerySelHTML.hasClass('is_chrome')) bod.push('is_chrome');

    // Detect Opera
    if(nav.match(/opera/gi) && !jquerySelHTML.hasClass('is_opera')) bod.push('is_opera');

    // Detect iOS
    if((nav.match(/ipod/gi) || nav.match(/iphone/gi) || nav.match(/ipad/gi)) && !jquerySelHTML.hasClass('is_ios')){
        bod.push('is_touchscreen');
        bod.push('is_ios');
    }
    if(nav.match(/ipod/gi) && !jquerySelHTML.hasClass('is_ipod')) bod.push('is_ipod');
    if(nav.match(/iphone/gi) && !jquerySelHTML.hasClass('is_iphone')) bod.push('is_iphone');
    if(nav.match(/ipad/gi) && !jquerySelHTML.hasClass('is_ipad')) bod.push('is_ipad');

    element_cible.className = bod.join(' ');
}

/* ----------------------------------------------------------
   Loader
   ------------------------------------------------------- */

function init_loader() {

    if(jquerySelBODY.hasClass('clrz-mp3-player-index')){
        return 0;
    }

    var loaders_folder = SKIN_URL + 'images/loaders/',
        images = [
            loaders_folder + 'ball-2.gif',
            loaders_folder + 'bounce.gif',
            loaders_folder + 'mouth.gif',
            loaders_folder + 'worm-2.gif'
        ],
        mainLoader = jQuery('#main-loader');

    // shuffle image
    images = shuffleArray(images);


    /* Creating element */
    if (mainLoader.length === 0) {
        mainLoader = jQuery('<div id="main-loader" class="main-loader"><div class="main-loader-filter"></div></div>');
        mainLoader
            .data('nb-illu', 0)
            .data('illus-list', images);

        var preload = new Image();
        preload.src = images[0];

        mainLoader.find('.main-loader-filter').css({
            'background-image': 'url(' + images[0] + ')'
        });
        jquerySelBODY.append(mainLoader);

    }

    /* Changing image on ajaxready */
    jQuery(window).on('ajaxready', function() {
        setTimeout(function() {
            var mainLoader = jQuery('#main-loader');
            if(mainLoader.length > 0){
                var nbillu = parseInt(mainLoader.data('nb-illu'), 10),
                    images = mainLoader.data('illus-list');

                nbillu++;
                if (nbillu >= images.length) {
                    nbillu = 0;
                }
                mainLoader.data('nb-illu', nbillu);

                var preload = new Image();
                preload.src = images[nbillu];

                mainLoader.find('.main-loader-filter').css({
                    'background-image': 'url(' + images[nbillu] + ')'
                });
            }
        }, 600);

    });
}


/* ----------------------------------------------------------
   Gestion des cookies
   ------------------------------------------------------- */

function setCookie(name, value, days, domaincookie) {
    var expires = "",
        domain = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    if (domaincookie) {
        domain = '; domain=' + domaincookie;
    }
    document.cookie = name + "=" + value + expires + domain + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function deleteCookie(name) {
    setCookie(name, "", -1);
}

/* ----------------------------------------------------------
   More views product images
   ------------------------------------------------------- */

function product_medias_more_views() {

    // Au clic sur une mini image
    jQuery('.cpm-more li a').off('click').on('click', function(e) {
        e.preventDefault();
        var _this = jQuery(this),
            indeximg = _this.data('count'),
            listesLi = jQuery('.product-media-slider > li, .colette-mp3-medias .product-image li');

        // On ajoute une classe current.
        jQuery('.cpm-more li a').removeClass('current');
        _this.addClass('current');

        listesLi.removeClass('current');
        listesLi.eq(indeximg).addClass('current');
    });

}

// Prev next products

function product_medias_navigate() {
    var el = jQuery('.colette-product-medias'),
        verif_class = 'has-product-medias-navigate';
    if (el.hasClass(verif_class)) {
        return false;
    }
    el.addClass(verif_class);

    el.on('click', '.navigate-pics', function(e) {
        e.preventDefault();
        var rel = jQuery(this).attr('rel'),
            pics = jQuery('.cpm-more li a'),
            nb_max_pics = pics.length - 1,
            nb_current_pic = 0,
            nb_following_pic = 0;
        if (!rel || nb_max_pics < 1) {
            return;
        }

        // Get current pic number
        pics.each(function(i) {
            if (jQuery(this).hasClass('current')) {
                nb_current_pic = i;
            }
        });

        // Set following pic number
        if (rel == 'next') {
            nb_following_pic = nb_current_pic + 1;
        }
        if (rel == 'previous') {
            nb_following_pic = nb_current_pic - 1;
        }

        // Check following pic number
        if (nb_following_pic < 0) {
            nb_following_pic = nb_max_pics;
        }

        if (nb_following_pic > nb_max_pics) {
            nb_following_pic = 0;
        }

        // Trigger click on following pic
        pics.eq(nb_following_pic).trigger('click');

    });
}

function product_medias_more_paged() {
    var pmcontainer = jQuery('#cpm-more-views'),
        pmContElem = pmcontainer.find('.pmcontmax'),
        pmElementsOrig = pmcontainer.find('li'),
        nbElements = pmElementsOrig.length;

    if(nbElements < 2) return false;

    var columnsShown = 2,
        currentPage = 1,
        pmpagi = pmcontainer.find('.pagination'),
        imgSize = pmElementsOrig.eq(1).height(),
        areaSize = pmcontainer.height() - 20,
        pmelements = pmElementsOrig.clone(),
        perColumn = Math.floor(areaSize / imgSize);

    perColumn = 5;

    if(nbElements < perColumn) {
        // Relaunch click events
        product_medias_more_views();
        return false;
    }

    if(pmcontainer.data('pmcontainer-height') == areaSize) {
        // Relaunch click events
        product_medias_more_views();
        return false;
    }
    pmcontainer.data('pmcontainer-height', areaSize);

    // Create columns
    pmcontainer.find('ul').remove();
    pmContElem.find('*').remove();
    var pagerLine = jQuery('<ul class="pmcolumn"></ul>');
    var iii = 0;
    pmelements.each(function() {
        if(iii !== 0 && iii % perColumn === 0) {
            pmContElem.append(pagerLine);
            pagerLine = jQuery('<ul class="pmcolumn"></ul>');
        }
        pagerLine.append(jQuery(this));
        iii++;
    });
    pmContElem.append(pagerLine);

    var nbCols = pmContElem.find('ul').length,
        nbPages = Math.ceil(nbCols / 2);

    if(nbCols <= columnsShown) {
        // Relaunch click events
        product_medias_more_views();
        return false;
    }

    jQuery('#cpm-more-views').data('currentpage', 1);
    jQuery('#cpm-more-views').data('maxpage', nbPages);
    pmContElem.find('ul').css('left', 0);

    // Fill pagination
    var txtPagination = '<span class="num">1</span>' + ' / ' + nbPages;
    pmpagi.find('.nb').html(txtPagination);
    pmpagi.css('top', pmContElem.find('ul').eq(1).height() + 10);
    pmpagi.show();

    // Set events
    pmpagi.on('click', 'a', function(e) {
        e.preventDefault();
        var _this = jQuery(this),
            currentpage = jQuery('#cpm-more-views').data('currentpage'),
            newpage = currentpage,
            wiview = jQuery('#cpm-more-views').width(),
            maxpage = jQuery('#cpm-more-views').data('maxpage'),
            _uls = jQuery('#cpm-more-views .pmcontmax ul');
        if(_this.hasClass('prev')) {
            if(currentpage > 1) {
                newpage--;
            }
            else {
                newpage = maxpage;
            }
        }
        else {
            if(currentpage < maxpage) {
                newpage++;
            }
            else {
                newpage = 1;
            }
        }

        newleft = ((1 - newpage) * wiview);
        _uls.animate({
            'left': newleft
        }, 200);
        jQuery('#cpm-more-views').find('.pagination .nb .num').html(newpage);
        jQuery('#cpm-more-views').data('currentpage', newpage);

    });

    // Relaunch click events
    product_medias_more_views();

}

/* ----------------------------------------------------------
  Product Options
---------------------------------------------------------- */

var product_options_text_in_description = function() {
    jQuery('#product-options-wrapper')
        .find('.product-option-type-text')
        .each(function() {

            var el = jQuery(this),
                elId = false,
                elLabel = false,
                elTextarea = false,
                elLabelContent = false,
                newEl = false,
                newElID = false,
                newElHTML = false,
                newElLabel = false,
                newElTextarea = false;

            // Duplicate launch
            if (el.hasClass('has-potidfunction')) {
                return;
            }
            el.addClass('has-potidfunction');

            // Extract sub-elements from original element
            elTextarea = el.find('textarea').eq(0),
            elLabel = el.find('label').eq(0);

            // Incomplete block
            if (!elTextarea || !elLabel) {
                return;
            }

            // Extract informations from original element
            elId = elTextarea.attr('id');
            newElID = 'new-' + elId;
            elLabelContent = elLabel.text();

            // Hide original element
            el.css({
                'position': 'absolute',
                'left': '-9999px',
                'top': '-9999px'
            });

            // Create new elements
            newElHTML = '<div class="element-option-text cssn_form">' +
                '<label for="'+newElID+'">' + elLabelContent + '</label>' +
                '<textarea class="inp-res" id="'+newElID+'" name="'+newElID+'">'+'</textarea>' +
                '</div>';
            newEl = jQuery(newElHTML);
            newElLabel = newEl.find('label');
            newElTextarea = newEl.find('textarea');

            // Inject new element
            jQuery('.bidp-content').eq(1).append(newEl);

            // Get initial content
            newElTextarea.val(elTextarea.val());

            // Create new element behavior
            newElTextarea.on('keyup keydown', function() {
                elTextarea.val(jQuery(this).val());
            });

        });
};

/* ----------------------------------------------------------
   Manage Ajax Message
   ------------------------------------------------------- */

var CLRZColettemanageAjaxMessage = false;

function manageAjaxMessage(message) {
    // Verification de l'existence de la lightbox de messages
    var ajaxLightboxMessage = jQuery('#ajax-lightbox-messages');
    if(ajaxLightboxMessage.length < 1) {
        // Creer la lightbox et le filtre (masqués par défaut)
        ajaxLightboxMessage = jQuery('<div id="ajax-lightbox-messages" class="ajax-lightbox-messages is-hidden"><div class="alm-filter"></div><div class="alm-content"><div class="content"></div><a href="#" class="le-button noasync">OK</a></div></div>');

        // Ajout de l'action de fermeture sur le filtre et l'éventuel bouton ok
        jquerySelBODY.append(ajaxLightboxMessage);
        ajaxLightboxMessage.on('click', function() {
            jQuery('#ajax-lightbox-messages').addClass('is-hidden');
        });
        ajaxLightboxMessage.find('a').on('click', function(e) {
            e.preventDefault();
        });
    }

    // Chargement du message
    ajaxLightboxMessage.find('.alm-content .content').html(message);

    // Ouverture de la box.
    ajaxLightboxMessage.removeClass('is-hidden');

    // Fermeture automatique de la box
    clearTimeout(CLRZColettemanageAjaxMessage);
    CLRZColettemanageAjaxMessage = setTimeout(function() {
        var lb = jQuery('#ajax-lightbox-messages');
        if(!lb.hasClass('is-hidden')) {
            lb.addClass('is-hidden');
        }
    }, 7500);
}


function manageConfirmLink(link, message, btn1, btn2){

    message = (!message ? 'Confirm this ?' : message);
    btn1 = (!btn1 ? 'Continue' : btn1);
    btn2 = (!btn2 ? 'Cancel' : btn2);

    // Verification de l'existence de la lightbox de messages
    var ajaxLightboxMessage = jQuery('#ajax-lightbox-confirm');
    if(ajaxLightboxMessage.length < 1) {
        // Creer la lightbox et le filtre (masqués par défaut)
        ajaxLightboxMessage = jQuery('<div id="ajax-lightbox-confirm" class="ajax-lightbox-messages is-hidden"><div class="alm-filter"></div><div class="alm-content"><div class="content"></div><a href="' + link + '" class="btn-yes le-button">' + btn1 + '</a>&nbsp;&nbsp;<a href="#" class="le-button btn-no noasync">' + btn2 + '</a></div></div>');

        // Ajout de l'action de fermeture sur le filtre et les boutons
        jquerySelBODY.append(ajaxLightboxMessage);
        ajaxLightboxMessage.on('click', function() {
            jQuery('#ajax-lightbox-confirm').addClass('is-hidden');
        });
        ajaxLightboxMessage.find('a').on('click', function(e) {
            var lb = jQuery('#ajax-lightbox-confirm');
            if(!lb.hasClass('is-hidden')) {
                lb.addClass('is-hidden');
            }
            if(jQuery(this).hasClass('noasync')){
                e.preventDefault();
            }
        });
    }
    else {
        ajaxLightboxMessage.find('.btn-yes').attr('href',link).html(btn1);
        ajaxLightboxMessage.find('.btn-no').html(btn2);
    }

    // Chargement du message
    ajaxLightboxMessage.find('.alm-content .content').html(message);

    // Ouverture de la box.
    ajaxLightboxMessage.removeClass('is-hidden');

    return false;
}


/* ----------------------------------------------------------
   In array // http://phpjs.org/functions/in_array:432
   ------------------------------------------------------- */

function in_array(needle, haystack, argStrict) {
    var key = '',
        strict = !! argStrict;
    if(strict) {
        for(key in haystack) {
            if(haystack[key] === needle) {
                return true;
            }
        }
    }
    else {
        for(key in haystack) {
            if(haystack[key] == needle) {
                return true;
            }
        }
    }
    return false;
}

cachedScript = function(url, options) {
    // allow user to set any option except for dataType, cache, and url
    options = jQuery.extend(options || {}, {
        dataType: "script",
        cache: true,
        url: url
    });
    // Use $.ajax() since it is more flexible than $.getScript
    // Return the jqXHR object so we can chain callbacks
    return jQuery.ajax(options);
};

(function($) {
    'use strict';

    /**
     * Multiple parallel getScript
     *
     * @access public
     * @param Array|String url (one or more URLs)
     * @param callback fn (oncomplete, optional)
     * @returns void
     */
    var getScript = $.getScript;
    $.getScript = function(url, fn) {
        if(!$.isArray(url)) { //juggle type
            url = [url];
        }

        $.when.apply(null, $.map(url, cachedScript)).then(function() {
            fn && fn();
        }, function() {
            fn && fn();
        });
    };

}(jQuery));

// Actions au scroll
var ismarques = false,
    scrollsteps = [140, 280, 420],
    scrlength = scrollsteps.length;

function scrollactions() {

    ismarques = (jquerySelBODY.hasClass('category-marques') || jquerySelBODY.hasClass('cms-categories') || $j('#layout-mentions').length > 0 );


    var ajaxpagiprev = function(pagilink, container, elements, elementsclass){
        
        var newurl = new URI(pagilink.attr('href'));
        newurl.removeSearch('ajax');
        var htmlbtn = '<a id="prev-top-pagination" class="noasync le-button btn-link-waterbar" href="'+newurl+'">Voir articles précédents</a>';

        if(jQuery('#prev-pagination-content').length>0){
            container.prepend(htmlbtn);
        }else if(jQuery('.products-grid').length>0){
            container.before(htmlbtn);
        }

        jQuery('#prev-top-pagination').addClass('noasync').unbind('click').on('click', function() {
            var thisarelprev = jQuery(this);
            if(!thisarelprev.hasClass('infinite-scroll-load')){
                thisarelprev.addClass('infinite-scroll-load');
                jQuery.ajax({
                    data: 'ajax=true&infinitepage=true',
                    url: jQuery('#prev-top-pagination').attr('href'),
                    complete: function(jqXHR, textStatus) {
                        var domresp = jQuery(jqXHR.responseText);
                        old_url = clrz_clean_ajax_from_url(thisarelprev.attr('href'));
                        new_url = '';
                        if(domresp.find('a[rel=prev]').length>0){
                            new_url = domresp.find('a[rel=prev]').attr('href');
                        }else{
                            var prevpagi = getURLParameter(jQuery('#prev-top-pagination').attr('href'), 'p');
                            if(prevpagi>1){
                                new_url = jQuery('#prev-top-pagination').attr('href').replace('p='+prevpagi, 'p='+(prevpagi-1));
                            }
                        }

                        if(history.pushState && new_url != old_url) {
                            clrzpushState(old_url);
                        }
                        var initscrolltop = window.scrollBase.scrollTop();

                        var initheight = window.scrollMover.height();
                        if(jQuery('#prev-pagination-content').length>0){
                            var cloneinitarray = thisCLRZMozaik.elementz.clone();
                            var nbnewzone = domresp.find(elements).length;
                            thisCLRZMozaik.elementz = [];
                            domresp.find(elements).each(function() {
                                jQuery(this).addClass('loading').css({'opacity':0});
                                thisCLRZMozaik.elementz.push(jQuery(this).clone());
                            });
                            for(var i=0;i<=cloneinitarray.length-1;i++){
                                thisCLRZMozaik.elementz.push(cloneinitarray[i].clone());
                            }
                            thisCLRZMozaik.reloadColumns();
                            jQuery(elementsclass).each(function(){
                                jQuery(this).animate({'opacity': 1});
                                jQuery(this).removeClass('loading');
                            });
                        }else{
                            var insertelements = [];
                            var increment = 0;
                            domresp.find(elements).each(function() {
                                insertelements[increment] = jQuery(this).clone();
                                increment++;
                            });
                            insertelements.reverse();
                            for(var j=0;j<=insertelements.length-1;j++){
                                jQuery('.products-grid').prepend(insertelements[j]);
                            }
                            jQuery('.products-grid li').first().addClass('pagi-loop page-'+getURLParameter(old_url, 'p')).attr('data-urlpagi', old_url);
                            hideElementsIncompleteLine();
                        }
                        var newheight = window.scrollMover.height();
                        window.scrollBase.scrollTo(initscrolltop+(newheight-initheight));
                        if(new_url!==''){
                            thisarelprev.attr('href', new_url).removeClass('infinite-scroll-load');
                        }else{
                            thisarelprev.remove();
                        }

                    }
                });
            }
            return false;
        });

    };


    var prevPagination = jQuery('#prev-pagination-content');
    var prevPagiProduct = jQuery('.pages li.current').prev().find('a');
    if((prevPagination.length>0 || prevPagiProduct.length>0) && jQuery('#prev-top-pagination').length===0){
        if(prevPagiProduct.length>0)
            ajaxpagiprev(prevPagiProduct, jQuery('.products-grid'), '.products-grid > *', '.products-grid .loop-grid-cont');
        else
            ajaxpagiprev(prevPagination, jQuery('.responsive-post-container'), '.responsive-post-list > *', '.responsive-post-list .post.loading');

    }

    calculationsForScroll();

    monitorScrollEnd(window.scrollBase);

    if(!jquerySelHTML.hasClass('is-not-scrolling')){
        jquerySelHTML.addClass('is-not-scrolling');
    }


    if(!jquerySelHTML.hasClass('is_touchscreen')){
        window.scrollBase.on('scroll', function(e) {
            scrollbase_on_scroll(e);
        });
    }

    window.scrollBase.on('touchmove', function(e) {
        if(jquerySelHTML.hasClass('is-not-scrolling')){
            scrollbase_on_scroll(e);
        }
    });

    window.scrollBase.on('scrollend', function(e) {
        scrollbase_on_scroll(e);
        pagination_products();
        if(!jquerySelHTML.hasClass('is-not-scrolling')){
            jquerySelHTML.addClass('is-not-scrolling');
        }
    });
}



var scrollBaseHeight = false,
    scrollMoverHeight = false,
    jquerySelRightSidebar = false;

function calculationsForScroll(){
    scrollBaseHeight = window.scrollBase.height();
    scrollMoverHeight = window.scrollMover.prop('scrollHeight');
    jquerySelRightSidebar = jQuery('#right-sidebar');
}

var scrollbaseTimeout = false;
var scrollbaseTimeoutSlow = false;

function scrollbase_on_scroll(e){

    jquerySelHTML.removeClass('is-not-scrolling');

    if(jquerySelBODY.hasClass('single'))
        return;

    var scrolltop = window.scrollBase.scrollTop();
    var scrollLevel = scrolltop + scrollBaseHeight;
    var mainContentHeight = scrollMoverHeight;

    // Infinite scroll products
    var nextPagePager = jQuery('.pages li.current').next().find('a');
    var buttonMoreProducts = jQuery('.button-more-products');
    if(nextPagePager.length > 0 && !buttonMoreProducts.hasClass('infinite-scroll-load')) {
        if(mainContentHeight - scrollLevel < 500) {
//            buttonMoreProducts.abuttonMoreProductsddClass('infinite-scroll-load').off('click')
            if($j('.pagi-loop').length>4){
                jQuery('.more-products-link').addClass('dragging');
                
                var page = jQuery('.pages li.current');
                var brother = page.next();
                var href = new URI(brother.find('a').attr('href'));
                href.removeSearch('ajax');
                buttonMoreProducts.attr('href', href);
                buttonMoreProducts.removeClass('noasync').addClass('infinite-scroll-load');
                
                
            }else{
                buttonMoreProducts.addClass('infinite-scroll-load').trigger('click');
                calculationsForScroll();
                setTimeout(function(){
                    calculationsForScroll();
                },1000);
            }
        }
    }

    // Infinite scroll blog
    var nextPagination = jQuery('#next-pagination-content');
    if(nextPagination.length > 0 && !nextPagination.hasClass('infinite-scroll-load')) {
        if(mainContentHeight - scrollLevel < 500) {
            nextPagination.addClass('infinite-scroll-load').trigger('click');
            calculationsForScroll();
            setTimeout(function(){
                calculationsForScroll();
            },1000);
        }
    }

    // Infinite scroll blog previous
    var prevPagination = jQuery('#prev-top-pagination');
    if(prevPagination.length > 0 && !prevPagination.hasClass('infinite-scroll-load')) {
        if(scrolltop<400) {
            prevPagination.trigger('click');
        }
    }

    if(jquerySelRightSidebar.length > 0 && !jquerySelHTML.hasClass('is_touchscreen')){
        var sidebar = jquerySelRightSidebar;
        var container = jquerySelRightSidebar.parent();
        var brother = jquerySelRightSidebar.next();
        if(window.scrollBase.offset().top+20>container.offset().top){
            sidebar.addClass('fixme');
            var leftside = brother.offset().left+brother.width();
            if(sidebar.hasClass('waterbar-sidebar')){
                leftside = leftside+10;
            }
            sidebar.css({'left': leftside});
            sidebar.css({'right': 'auto'});
        }else{
            sidebar.removeClass('fixme');
            sidebar.css({'left': 'auto'});
            sidebar.css({'right': 0});
        }
    }

    // Events limités à 25 actions/s
    if (scrollbaseTimeout === false) {
        scrollbaseTimeout = setTimeout(function() {

            var leScrollBase = window.scrollBase.scrollTop();

            body_classes_scroll(leScrollBase);

            // Set scroll menu marques
            if (ismarques) {
                menu_active_scroll(leScrollBase);
            }

            scrollbaseTimeout = false;
        }, 40);
    }

}

function body_classes_scroll(leScrollBase){
    // Body classes
    var i = 0,
        iclass = 'scroll-over-';
    for (; i < scrlength; i++) {
        iclass = 'scroll-over-' + scrollsteps[i];
        if (leScrollBase > scrollsteps[i]) {
            if (!jquerySelBODY.hasClass(iclass)) {
                jquerySelBODY.addClass(iclass);
            }
        }
        else {
            jquerySelBODY.removeClass(iclass);
        }
    }
}

function menu_active_scroll(scrolltop) {
    jQuery('.lm-listelettres .inner-item').removeClass('is-current');
    var found = 0,
        previouscible = 0,
        lmheaderheight = jQuery('.lm-header').height(),
        nblistelettres = jQuery('#main-lm-listelettres a').size() - 1,
        mainsize = jQuery('#main').height() / 2;
    jQuery('#main-lm-listelettres a').each(function(i, el) {
        if(found === 0) {
            if(previouscible === 0){
                previouscible = jQuery(this).attr('href');
            }
            var cible = jQuery(this).attr('href'),
                ispositionok = jQuery(cible).position().top > (scrolltop - lmheaderheight),
                isoffsetok = jQuery(cible).offset().top < mainsize;

            if(nblistelettres == i || (ispositionok && isoffsetok)) {
                found = cible.replace('#', '.');
            }
            if(ispositionok && !isoffsetok){
                found = previouscible.replace('#', '.');
            }
            previouscible = cible;
        }
    });
    jQuery(found).addClass('is-current');
}

function menuletterscroll(){
    jQuery('.lm-listelettres a').each(function(){
        var _this = jQuery(this);
        _this.click(function(e){
            e.preventDefault();
            var objhref = jQuery(_this.attr('href'));
            if(objhref){
                window.scrollBase.animate({
                    scrollTop:(objhref.position().top + jQuery('.lm-header').height() - 20)
                });
            }
        });
    });

}

function zovermousetrap() {
    jQuery('.main-product-cliquable').each(function() {
        jQuery('#' + jQuery(this).attr('data-forid')).hide();
        jQuery(this).click(function() {
            triggerMousetrap(jQuery(this));
        });
    });
    // Masquer le mousetrap
    jQuery('.parentovermousetrap').click(function() {
        triggerMousetrap(jQuery(this));
    });
}

function triggerMousetrap(mthis) {
    mthis.hide();
    forid = jQuery('#' + mthis.attr('data-forid'));
    forid.show();
    if(mthis.hasClass('main-product-cliquable')) {
        mthis.parent().addClass('active-mousetrap');
    }
    else {
        forid.parent().removeClass('active-mousetrap');
    }
}

/**
 * init_toolbar
 */

function init_toolbar() {
    var items = jQuery('.tb-item');
    var togglers = jQuery('.tb-toggle');
    var tool_menu_width = jQuery('.toolbar_menu').width();

    // Le bouton close toolbar permet de masquer la toolbar
    jQuery('.btn-close-toolbar').click(function(e) {
        e.preventDefault();
        jQuery('#toolbar').css({
            'width': tool_menu_width
        });
        jQuery('.toolbar-content').css({
            'width': 0
        });
        items.css({
            'z-index': 0,
            'opacity': 0,
            'left': 'auto'
        }).removeClass('current');
        jquerySelHTML
            .removeClass('toolbar-open')
            .attr('data-current-sidebar', '');
    });

    // Quick and dirty : enable click on cart
    jQuery('#tm-cart').on('mousedown touchstart', function(e) {
        e.preventDefault();

        var $this = jQuery(this);

        var parser_url = document.createElement('a');

        parser_url.href = jQuery(this).attr('href');

        // If different protocol than in window
        if(window.location.protocol != parser_url.protocol) {
            window.location = parser_url.href;
            return 0;
        }

        // Go to cart
        goToUrl(parser_url.href);
        // Close toolbar
        jQuery('.btn-close-toolbar').trigger('click');
    });

    togglers.addClass('noasync');
    togglers.each(function(i, el) {

        jQuery(el).click(function(e) {

            var _jthis = $j(this);

            // Do not open the cart sidebar if we are on the cart page or checkout
            var location = window.location.pathname;
            if (_jthis.hasClass('tm-cart-toggle') && (location == '/checkout/cart/' || location == '/checkout/onepage/')) {
                if (location == '/checkout/onepage/') {
                    _jthis.removeClass('noasync');
                    return true;
                }

                return false;
            }

            e.preventDefault();
            var _wdth = jQuery(items[i]).width() + tool_menu_width;

            /* Particular actions
               ----------------------- */

            // Search
            if (_jthis.hasClass('tm-search-toggle')) {
                _jthis.parent().removeClass('is-persist-hover');
                jQuery('#search2').focus();
            }

            // User logged in :
            if (jquerySelHTML.hasClass('is-logged-in')) {
                // hide logged toolbar menu
                if(_jthis.hasClass('tm-account-toggle')) {
                    if(jquerySelHTML.hasClass('toolbar-open')){
                        jQuery('.btn-close-toolbar').trigger('click');
                        jQuery('.tm-account').trigger('mouseleave');
                    }
                    goToUrl(_jthis.attr('href'));
                    return false;
                }
                // Hide Wishlist if empty
                if(jQuery.trim(jQuery('#tc-wishlist').html()) === '' && _jthis.hasClass('tm-favs-toggle')) {
                    return false;
                }
            }
            else {
                // Hide favs
                if(_jthis.hasClass('tm-favs-toggle')) {
                    jQuery('.tm-account-toggle').trigger('click');
                    return false;
                }
            }

            /* Common actions
               ----------------------- */

            if(!jquerySelHTML.hasClass('toolbar-open')) {

                items.css({
                    'opacity': 0,
                    'z-index': 0
                }).removeClass('current');

                jquerySelHTML.attr('data-current-sidebar', jQuery(items[i]).attr('id'));
                jQuery(items[i]).addClass('current').css({
                    'z-index': 1,
                    'duration': 600,
                    'left': (_wdth),
                    'opacity': 0
                });

                jQuery(items[i]).css({
                    'left': 0,
                    'z-index': 10000,
                    'opacity': 1
                });

                jQuery('#toolbar').css({
                    'duration': 600,
                    'width': (_wdth)
                });
                toolwidth = jQuery(items[i]).width();
                jQuery('.toolbar-content').css({
                    'duration': 600,
                    'width': toolwidth + 500
                });
                setTimeout(function() {
                    // Ugly bug fix
                    jQuery('.toolbar-content').css({
                        'width': toolwidth
                    });
                }, 650);
                jquerySelHTML.addClass('toolbar-open');
                return false;

            }

            if(jQuery(items[i]).hasClass('current')) return false;

            var backward = false;
            if(jQuery('.tb-item.current').index('.tb-item') > jQuery(items[i]).index('.tb-item')) {
                backward = true;
            }

            items.animate({
                'duration': 600,
                'z-index': 1,
                'opacity': 0
            }, {
                queue: false
            }).removeClass('current');

            jquerySelHTML.attr('data-current-sidebar', jQuery(items[i]).attr('id'));
            jQuery(items[i]).addClass('current');

            if(backward) {
                jQuery(items[i]).css({
                    'z-index': 1,
                    'duration': 600,
                    'left': -(_wdth),
                    'opacity': 0
                });
            }
            else {
                jQuery(items[i]).css({
                    'z-index': 1,
                    'duration': 600,
                    'left': (_wdth),
                    'opacity': 0
                });
            }

            jQuery(items[i]).animate({
                'duration': 600,
                'left': 0,
                'z-index': 10000,
                'opacity': 1
            });

            jQuery('#toolbar').css({
                'duration': 600,
                'width': (_wdth)
            });
            jQuery('.toolbar-content').css({
                'duration': 600,
                'width': jQuery(items[i]).width()
            });
            return false;
        });

    });

}

var setToolbarCartItems = function() {
        var nbItems = 0,
            tmcart = jQuery('#tm-cart'),
            tmcartbull = jQuery('#tm-cart .cart-bull');

        if(jQuery('#set-toolbar-cart-nb-items')){
            nbItems = parseInt(jQuery('#set-toolbar-cart-nb-items').val(),10);
        }
        if(isNaN(nbItems)){
            // IE <3
            nbItems = 0;
        }
        if(nbItems === 0) {
            // Hide bull
            tmcartbull.remove();
            tmcart.removeClass('with-bull');
        }
        else {
            // Create bull if necessary
            if(tmcartbull.size() === 0) {
                tmcart.addClass('with-bull');
                tmcartbull = jQuery('<span class="cart-bull">' + nbItems + '</span>');
                tmcart.append(tmcartbull);
            }
            // Update bull
            else {
                tmcartbull.html(nbItems);
            }
        }
    };

function set_search_forms() {

    jquerySelHTML.addClass('search-is-empty');

    jQuery('.tm-search').persistHover({
        'delay': 500,
        'leave': true,
        'delayleave': 500
    });

    jQuery('#search_mini_form2').on('submit', function(event) {
        jquerySelHTML.removeClass('search-is-empty');
    });

    // Set mini search
    jQuery('#search_mini_form').submit(function(event) {

        if(jQuery('#search').val()) {

            jquerySelHTML.removeClass('search-is-empty');

            // Open sidebar
            jQuery('.tm-search-toggle').trigger('click');

            // Set main search form
            jQuery('#search2').val(jQuery('#search').val());

            // Launch main search form
            jQuery('#search_mini_form2').trigger('submit');
        }

        return false;
    });

    jQuery('#search').focus(function() {
        jQuery('.tm-search').addClass('input-focused');
    }).blur(function() {
        jQuery('.tm-search').removeClass('input-focused');
    });

    // Set full search
    jQuery('#search_mini_form2').submit(function(event) {
        var q = jQuery('#search_mini_form2 #search2').val();
        if(q) {
            jQuery("#search").val(q);
            jQuery('#search2').trigger('blur');
            var form = jQuery(this);
            form.addClass('loading');
            event.preventDefault();
            var url = form.attr('action');

            jQuery('#ajax-search-blog-content').empty().hide();
            jQuery('#ajax-search-content').empty().hide();
            jQuery('.content-search-sidebar .empty-search').hide();

            jQuery.ajax({
                'type': "get",
                'url': jQuery('#colette_blog_webservice_url').val(),
                'data': {
                    'ajax':1,
                    'mode':'search',
                    'search':q
                },
                error: function() {
                    removeLoadingSearchForm();
                },
                success:function(data){
                    var content = jQuery(data).find('.ajax-search-result').html();
                    jQuery('#ajax-search-blog-content').html(content);
                    removeLoadingSearchForm(form);
                }
            });


            jQuery.ajax({
                'type': "get",
                'url': url,
                'data': {
                    'ajax_search':1,
                    'ajax':1,
                    'q':q
                },
                error: function() {
                    removeLoadingSearchForm();
                },
                success: function(data) {
                    var content = jQuery(data).find('#colette-search-result').html();
                    jQuery('#ajax-search-content').html(content);
                    removeLoadingSearchForm(form);
                }
            });
        }
        return false;
    });
}

function removeLoadingSearchForm(form){
    // On ne le déclenche qu'à son second appel
    var formsearchstatus = parseInt(jQuery('#ajax-search-status').val(), 10);
    if(formsearchstatus < 1){
        jQuery('#ajax-search-status').val(formsearchstatus+1);
    }
    else {
        jQuery('#ajax-search-content, #ajax-search-blog-content').show();
        form.removeClass('loading');
        jQuery('#ajax-search-status').val('0');

        // Si blog comprend un résultat mais pas shop
        var isblogempty = jQuery('#ajax-search-blog-content').html().length < 1;
        var isshopempty = jQuery('#ajax-search-content').find('.search_noresult').length > 0;

        // Alors on vide le search shop
        if(!isblogempty && isshopempty){
            jQuery('#ajax-search-content').empty();
        }

        jQuery('#tc-search .search-category').on('click','.see-all, .li-link, a.loop-minisearch',function() {
            setTimeout(function() {
                jQuery('.btn-close-toolbar').trigger('click');
            }, 500);
        });
    }
}

function hideElementsIncompleteLine(mode) {

    // If we're not on the right page
    if(!jquerySelBODY.hasClass('catalogsearch-result-index') && !jquerySelBODY.hasClass('catalog-category-view')) {
        return 0;
    }

    var elementsli = jQuery('.products-grid li');
    var nb_elementsli = elementsli.size();

    // Show everything
    elementsli.show();

    // If there isn't a next page
    if(!getNextPagePager()) {
        return 0;
    }

    // get sizes
    var gridwidth = jQuery('.products-grid').width();
    var elemwidth = parseInt(elementsli.css('width'), 10);

    // Get nb elements per line
    var nb_elements_per_line = Math.round(gridwidth / elemwidth);
    var nb_elem_trop = nb_elementsli % nb_elements_per_line;
    var elements_to_be_shown = nb_elementsli - nb_elem_trop;

    // If there is only one line
    if(nb_elements_per_line < 1) {
        return 0;
    }

    if(mode != 'show') {
        elementsli.each(function(i, el) {
            // Hide elements if over required number
            if(i >= elements_to_be_shown) {
                $(this).hide();
            }
        });
    }
    return true;
}

function getNextPagePager() {
    return jQuery('.pages li.current').next().find('a').attr('href');
}

/* ----------------------------------------------------------
   Plugin Same Size
   ------------------------------------------------------- */

if (!jQuery.fn.sameSizes) {
    (function($) {
        var sameSizes = {
            defaultParams: {},
            params: {},
            init: function(els, params) {
                var mthis = this;
                this.maxHeight = 0;
                els.each(function() {
                    mthis.maxHeight = Math.max(jQuery(this).height(), mthis.maxHeight);
                });
                if (mthis.maxHeight > 0) {
                    els.each(function() {
                        jQuery(this).css({
                            'height': mthis.maxHeight
                        });
                    });
                }
            }
        };
        $.fn.sameSizes = function(params) {
            $.extend({}, sameSizes).init(this, params);
            return this;
        };
    })(jQuery);
}

/* ----------------------------------------------------------
   Gallery link
   ------------------------------------------------------- */

function cpmGalleryLink() {
    if(jquerySelBODY.hasClass('clrz-mp3-player-index')){
        return 0;
    }

    if(jQuery('#fulllightbox-container').size() === 0) {
        var nwlightbox = jQuery('<div id="fulllightbox-container" class="fulllightbox-container"></div>');
        nwlightbox.appendTo('body');
    }

    jQuery('.cpm-gallery-link').on('click', function(e) {
        var fulllightbox = jQuery('#fulllightbox-container');
        e.preventDefault();

        jQuery('.product-media-slider [data-bigurl]').each(function(){
            var _this = jQuery(this),
                bigurl = _this.data('bigurl');
            _this.attr('src',bigurl);
        });

        if(jQuery('.product-essential-box').length>0){
            if(fulllightbox.data('opened') == 1) {
                jQuery('.product-essential-box').appendTo('#product-essential-box-container');
                jQuery('#fulllightbox-container').hide();
                jQuery('#fulllightbox-container').html('');
                fulllightbox.data('opened', 0);
                reSetFullLightboxImage();
            }
            else {
                jQuery('#fulllightbox-container').html('');
                jQuery('.product-essential-box').appendTo('#fulllightbox-container');
                jQuery('#fulllightbox-container').show();
                fulllightbox.data('opened', 1);
                setFullLightboxImage();
            }
        }else{
            if(fulllightbox.data('opened') == 1) {
                jQuery('.clrz-gallery').appendTo('.clrz-gallery-container');
                jQuery('#fulllightbox-container').hide();


                jQuery('.clrz-gallery-images>li').each(function(){
                    if(jQuery(this).attr('data-thumb')!='')
                        jQuery(jQuery(this).find('img')).attr('src', jQuery(this).attr('data-thumb'));
                });

                jQuery('.clrz-gallery-container .clrz-gallery-images > li').each(function(){
                    if(!jQuery(this).is(':first-child') && !jQuery(this).is(':last-child')) {
                        jQuery(this).data('dim-width', jQuery(this).width());
                        jQuery(this).data('dim-left', jQuery(this).position().left);
                    }
                });

                fulllightbox.data('opened', 0);
            }else {
                jQuery('.clrz-gallery').appendTo('#fulllightbox-container');
                jQuery('#fulllightbox-container').show();

                jQuery('.clrz-gallery-images>li').each(function(){
                    var _this = jQuery(this),
                        thumbbig = _this.attr('data-thumb-big');
                    if(thumbbig !== ''){
                        jQuery(_this.find('img')).attr('src', thumbbig);
                    }
                });


                var sizeabsolute = 0;
                jQuery('#fulllightbox-container .clrz-gallery-images > li').each(function(){
                    var _this = jQuery(this),
                        widthbloc = _this.width();
                    sizeabsolute = sizeabsolute+800;
                    if(!_this.is(':first-child') && !_this.is(':last-child')) {
                        _this.data('dim-width', widthbloc);
                        _this.data('dim-left', _this.position().left);
                    }
                    sizeabsolute = sizeabsolute+widthbloc;

                });
//                jQuery('#fulllightbox-container .clrz-gallery-images').width(sizeabsolute+100);

                fulllightbox.data('opened', 1);


            }
                setFullLightboxImage();
                jQuery(window).trigger('resize');

        }
    });
}

function setFullLightboxImage() {
    if(jQuery('#fulllightbox-container').data('opened') !== 1) return 0;
    var lbheight = jQuery('#fulllightbox-container').height() - jQuery('.colette-product-options').height() - 1;
    //    console.log(lbheight);
    jQuery('.main-product-cliquable, .colette-product-medias .product-image, .colette-product-medias, .parentovermousetrap .main-product-image').css('height', lbheight);
    jQuery('.main-product-cliquable').css('max-width', 10000);
    jQuery('.colette-product-medias .product-image').css('padding', 0);
    jQuery('.colette-product-medias .product-image').css('width', 'auto');

    jQuery('#fulllightbox-container').on('click', '.colette-product-options .over-btn-cart',function(){
        setTimeout(function(){
            jQuery('.cpm-gallery-link').trigger('click');
        },200);
        setTimeout(function(){
            jQuery('.main-content .colette-product-options .product-btn-cart').trigger('click');
        },600);
    });

}

function reSetFullLightboxImage() {
    jQuery('.main-product-cliquable, .colette-product-medias .product-image, .colette-product-medias, .parentovermousetrap .main-product-image').removeAttr('style');
}

/* ----------------------------------------------------------
   Partie Content
   ------------------------------------------------------- */

/* Infinite Scroll
   ----------------------- */

function content_infinite_scroll() {
    if(!jQuery('#next-pagination-content') || !jQuery('.responsive-post-list') || jQuery('#archive-grid').length>0) {
        return 0;
    }
    jQuery('.cssn_pagination').css({
        'position': 'absolute',
        'top': '-999px',
        'left': '-999px',
        'visibility': 'hidden'
    });

    jQuery('#next-pagination-content').addClass('noasync').unbind('click').on('click', function(e) {
        e.preventDefault();
        var thisarelnext = jQuery(this);
        jQuery.ajax({
            data: 'ajax=true',
            url: jQuery('a[rel=next]').attr('href'),
            complete: function(jqXHR, textStatus) {
                var domresp = jQuery(jqXHR.responseText);
                // Insert response text
                domresp.find('.loop-responsive').each(function() {
                    var $this = jQuery(this);
                    thisCLRZMozaik.elementz.push($this);
                    thisCLRZMozaik.insertElement($this);
                });
                // Set next URL & push
                old_url = clrz_clean_ajax_from_url(thisarelnext.attr('href'));
                new_url = domresp.find('a[rel=next]').attr('href');
                clrzpushState(old_url);
                if(new_url) {
                    thisarelnext.attr('href', new_url).removeClass('infinite-scroll-load');
                }
                else {
                    thisarelnext.remove();
                }
            }
        });
    });

}

function content_infinite_scroll_archive() {
    if(!jQuery('#next-pagination-content') || jQuery('#archive-grid').length==0) {
        return 0;
    }
    jQuery('.cssn_pagination').css({
        'position': 'absolute',
        'top': '-999px',
        'left': '-999px',
        'visibility': 'hidden'
    });

    jQuery('#next-pagination-content').addClass('noasync').unbind('click').on('click', function(e) {
        e.preventDefault();
        var thisarelnext = jQuery(this);
        jQuery.ajax({
            data: 'ajax=true',
            url: jQuery('a[rel=next]').attr('href'),
            complete: function(jqXHR, textStatus) {
                var domresp = jQuery(jqXHR.responseText);
                var archive_new_url = domresp.find('a[rel=next]').attr('href');


                domresp.find('.loop-archive-bloc').each(function() {
                    jQuery(this).appendTo(jQuery('#archive-grid'));
                });


                if(archive_new_url) {
                    thisarelnext.attr('href', archive_new_url).removeClass('infinite-scroll-load');
                }
                else {
                    thisarelnext.remove();
                }
            }
        });
    });
    if(jQuery('#next-pagination-content').length>0)
        jQuery('#next-pagination-content').trigger('click');

}

/* ----------------------------------------------------------
   Clean ajax
   ------------------------------------------------------- */

function clrz_clean_ajax_from_url(url){
    url = url.replace('&amp;ajax=true','');
    url = url.replace('&ajax=true','');
    url = url.replace('ajax=true&amp;','');
    url = url.replace('ajax=true&','');
    url = url.replace('?ajax=true','');
    url = url.replace('/ajax/true','');
    url = url.replace('&amp;infinitepage=true','');
    url = url.replace('&infinitepage=true','');
    url = url.replace('infinitepage=true&amp;','');
    url = url.replace('infinitepage=true&','');
    url = url.replace('?infinitepage=true','');
    return url;
}

/* Marquee au rollover des noms de produits trop long */
function marqueeRollover(){

    var tablemarquee = [['.loop-grid-cont', '.product-name'], ['#cart-sidebar tr', '.name']];
    for(var inc=0;inc<=tablemarquee.length-1;inc++){
        var increment = 0;
        jQuery(tablemarquee[inc][0]).each(function(){
            var loopelement = jQuery(this);
            var title = jQuery(jQuery(loopelement.find(tablemarquee[inc][1]))[0]);
            var inithtml = title.html();
            var time;
            var dureeanimwidth = 20;

            var resetmarquee = function(){
                title.removeClass('marquee');
                title.html(inithtml);
                title.css({'height':'auto'});
            };

            var marqueeelement = function(init){
                var itemspan = jQuery(jQuery(title.find('span'))[0]);
                var timeanimation = dureeanimwidth*(itemspan.width()+title.width());
                var timetimeout = (init==1) ? timeanimation-(title.width()*dureeanimwidth) : timeanimation;
                var timewaiting = 0;
                if(init==1){
                    timewaiting = 0;
                }else if(init==2){
                    timewaiting = timeanimation-(title.width()*dureeanimwidth)+30;
                }else{
                    timewaiting = timetimeout+30;
                }
                var leftinit = (init==1) ? 0 : title.width();
                time = setTimeout(function(){
                    itemspan.stop(true, true);
                    itemspan.css({'left':leftinit});
                    itemspan.animate({'left':-itemspan.width()}, timetimeout, 'linear');
                    var sendinit = (init==1) ? 2 : 3;
                    marqueeelement(sendinit);
                }, timewaiting);


            };

            loopelement.mouseenter(function(){
                var initelwidth = title.width();
                var initelheight = title.height();
                title.css({'height':title.height()});
                title.addClass('marquee');
                title.html('<span>'+inithtml+'</span>');
                title.find('span').css({'position':'absolute'});
                var itemspan = jQuery(jQuery(title.find('span'))[0]);
                var initspanwidth = itemspan.width();
                if(initelwidth<initspanwidth){
                    marqueeelement(1);
                }else{
                    resetmarquee();
                }

            });

            loopelement.mouseleave(function(){
                var itemspan = jQuery(jQuery(title.find('span'))[0]);
                itemspan.stop(true, true);
                clearTimeout(time);
                itemspan.css({'left':0});
                resetmarquee();
            });
        });
    }
}

function initCatalogBlockedProducts() {
    jQuery(document).on('click', '.link-blocked-product', function(event){
        event.preventDefault();
        event.stopPropagation();
        var href = $j(this).attr('href') + '?ajax=true';
        jQuery.get(href).success(function(data){
            var blankDiv = jQuery('#tc-blank');
            blankDiv.html(data);
            jQuery('.tb-toggle-blank').trigger('click');
        });
    });
}

/* ----------------------------------------------------------
   Actions on echap
   ------------------------------------------------------- */

function actionsOnEchap() {
    jQuery(window).on('keyup', function(e) {
        // If key is echap
        if (e.keyCode == 27) {

            // Kill if active form element
            if ("activeElement" in document) {
                var elementTag = document.activeElement.tagName.toLowerCase();
                if (jQuery.inArray(elementTag, ['input', 'textarea', 'select'])) {
                    return;
                }
            }

            // Hide messages
            var LightboxMessages = jQuery('#ajax-lightbox-messages');
            if (LightboxMessages.length > 0 && !LightboxMessages.hasClass('is-hidden')) {
                LightboxMessages.addClass('is-hidden');
                return 0;
            }

            // Close toolbar
            if (jquerySelHTML.hasClass('toolbar-open') && !jquerySelHTML.hasClass('is-focused')) {
                jQuery('.btn-close-toolbar').trigger('click');
            }

            // Close lightbox
            jQuery('#fulllightbox-container .cpm-gallery-link ').trigger('click');

            // Close guide tailles
            jQuery('#product-guide-tailles').removeClass('is-visible');
        }
    });
}

function getURLParameter(href, name) {
    return decodeURI(
        (RegExp(name + '=' + '(.+?)(&|$)').exec(href)||[,null])[1]
    );
}


function pagination_products(){

    if(jQuery('#archive-grid').length>0)
        return;

    var productsPagiLoop = jQuery('.products-grid .pagi-loop');

    if(productsPagiLoop.length>1){

        var topscroll = window.scrollMover.offset().top*-1;
        var newpagi = productsPagiLoop.first().attr('data-urlpagi');
        var bodyheight = jQuery('#main').height();


        var scrolltop = window.scrollBase.scrollTop();
        var scrollLevel = scrolltop + window.scrollBase.height();

        productsPagiLoop.each(function(){
            var topoffset = jQuery(this).position().top;
            if(topoffset<scrollLevel){
                newpagi = jQuery(this).attr('data-urlpagi');
            }
        });
        if(window.location.href!=newpagi){
            newpagi = clrz_clean_ajax_from_url(newpagi);
            clrzpushState(newpagi);
        }
    }


}

/**
 * Randomize array element order in-place.
 * Using Fisher-Yates shuffle algorithm.
 * http://stackoverflow.com/a/12646864
 */

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}


/* ----------------------------------------------------------
   Maps
   ------------------------------------------------------- */

function exec_google_maps(){
    setTimeout(function() {
        launchContactMap();
    }, 2000);
}

function launchContactMap() {
    contactmappointerLatLng = new google.maps.LatLng(contactmapPlat, contactmapPlng);
    contactmapLatLng = new google.maps.LatLng(contactmaplat, contactmaplng);
    contactmap = new google.maps.Map(document.getElementById("map_canvas"), {
        zoom: 15,
        center: contactmapLatLng,
        disableDefaultUI: true,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    });

    // Map stylisée
    var styledMap = new google.maps.StyledMapType(stylesMaps, {});
    contactmap.mapTypes.set('map_style', styledMap);
    contactmap.setMapTypeId('map_style');

    // Marker
    contactmapmarker = new google.maps.Marker({
        position: contactmappointerLatLng,
        map: contactmap,
        icon: {
            url: contactmapiconURL,
            anchor: new google.maps.Point(15, 25),
            origin: new google.maps.Point(0, 0),
            size: new google.maps.Size(42, 42)
        }
    });

    // Infobulle
    contactmapinfoBulle = new google.maps.InfoWindow({
        content: jQuery('#colette-content-infobulle').html() + '<br />'
    });
    google.maps.event.addListener(contactmapmarker, 'click', function() {
        contactmap.setCenter(contactmappointerLatLng);
        contactmapinfoBulle.open(contactmap, contactmapmarker);
    });

    // Effet au mouseleave
    jQuery('#map_canvas').on('mouseleave', function() {
        contactmapinfoBulle.close();
        contactmap.setCenter(contactmapLatLng);
        contactmap.setZoom(15);
    });
}


function getCleanHref(){
    return document.location.href.replace('/#!/', '/');
}

var monitorScrollEnd = function(el){
    var timerScrollEnd,
        refreshScrollEnd = function(){
            el.trigger('scrollend');
        };
    el.on('scroll', function(){
        clearTimeout(timerScrollEnd);
        timerScrollEnd = setTimeout( refreshScrollEnd , 800 );
    });
};

var monitorResizeEnd = function(){
    var timerResizeEnd,
        refreshResizeEnd = function(){
            jQuery(window).trigger('resizeend');
        };
    jQuery(window).on('resize', function(){
        clearTimeout(timerResizeEnd);
        timerResizeEnd = setTimeout( refreshResizeEnd , 150 );
    });
};

window.formatCurrency = clrzformatCurrency;
function clrzformatCurrency(price, format, showPlus){
	//price = price.replace(/(\.|,)0{2}(\D+)/g, "$2");
    var precision = isNaN(format.precision = Math.abs(format.precision)) ? 2 : format.precision;
    var requiredPrecision = isNaN(format.requiredPrecision = Math.abs(format.requiredPrecision)) ? 2 : format.requiredPrecision;

    //precision = (precision > requiredPrecision) ? precision : requiredPrecision;
    //for now we don't need this difference so precision is requiredPrecision
    precision = requiredPrecision;

    var integerRequired = isNaN(format.integerRequired = Math.abs(format.integerRequired)) ? 1 : format.integerRequired;

    var decimalSymbol = format.decimalSymbol == undefined ? "," : format.decimalSymbol;
    var groupSymbol = format.groupSymbol == undefined ? "." : format.groupSymbol;
    var groupLength = format.groupLength == undefined ? 3 : format.groupLength;

    var s = '';

    if (showPlus == undefined || showPlus == true) {
        s = price < 0 ? "-" : ( showPlus ? "+" : "");
    } else if (showPlus == false) {
        s = '';
    }

    var i = parseInt(price = Math.abs(+price || 0).toFixed(precision)) + "";
    var pad = (i.length < integerRequired) ? (integerRequired - i.length) : 0;
    while (pad) {
        i = '0' + i;
        pad--;
    }
    j = (j = i.length) > groupLength ? j % groupLength : 0;
    re = new RegExp("(\\d{" + groupLength + "})(?=\\d)", "g");

    /**
     * replace(/-/, 0) is only for fixing Safari bug which appears
     * when Math.abs(0).toFixed() executed on "0" number.
     * Result is "0.-0" :(
     */
    var r = (j ? i.substr(0, j) + groupSymbol : "") + i.substr(j).replace(re, "$1" + groupSymbol) + (precision ? decimalSymbol + Math.abs(price - i).toFixed(precision).replace(/-/, 0).slice(2) : "")
    var pattern = '';
    if (format.pattern.indexOf('{sign}') == -1) {
        pattern = s + format.pattern;
    } else {
        pattern = format.pattern.replace('{sign}', s);
    }

	// Clean price
	r = r.replace(/(\.|,)0{2}$/g, '');
    return pattern.replace('%s', r).replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

var showHideMainLoader = function(showLoader) {
    if (showLoader) {
        $j('html').addClass('loading');
    }
    else {
        $j('html').removeClass('loading');
    }
}

/* ----------------------------------------------------------
   If in content, adds a CSS class to HTML
   ------------------------------------------------------- */

function classname_if_in_content() {
    var parser = document.createElement('a');
    parser.href = window.location.href;
    var pathname = parser.pathname,
        blogname = '/content/',
        starturl = pathname.substr(0, blogname.length),
        blogclass = 'is-in-content';
    if (starturl == blogname) {
        if (!jquerySelHTML.hasClass(blogclass)) {
            jquerySelHTML.addClass(blogclass);
        }
    }
    else {
        jquerySelHTML.removeClass(blogclass);
    }
}

/* ----------------------------------------------------------
   Press
   ------------------------------------------------------- */

function form_press_submit() {
    var form = jQuery('#form-press');
    if (form.hasClass('submitting')) {
        return;
    }
    form.addClass('submitting');
    jQuery.ajax({
        type: "post",
        dataType: "json",
        url: form.attr('action') + '?ajax=true',
        data: form.serialize(),
        complete: function(data) {
            var resp = jQuery(data.responseText).find("#home-content-press").html();
            jQuery('#home-content-press').html(resp);
            form.removeClass('submitting');
        }
    });
}

/* ----------------------------------------------------------
   Close lightboxes
   ------------------------------------------------------- */

var close_all_lightboxes = function() {
    jQuery('#fulllightbox-container').find('.cpm-gallery-link').trigger('click');
};


/* ----------------------------------------------------------
   Touchmove
   ------------------------------------------------------- */

function setTouchMove(el) {
    // Kill if not a tactile device
    if(!('ontouchstart' in window)){
        return;
    }

    if (el.hasClass('has-settouchmove')) {
        return;
    }
    el.addClass('has-settouchmove');
    el.on('touchstart', function(e) {
        var etouches = e.originalEvent.touches || e.originalEvent.changedTouches,
            touch = etouches[0];

        if (etouches.length > 1)
            return;

        jQuery(this).data({
            'touchx': touch.pageX,
            'touchy': touch.pageY,
            'eventLaunchable': 1
        });
    });
    el.on('touchend', function(e) {
        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        jQuery(this).data({
            'touchx': touch.pageX,
            'touchy': touch.pageY,
            'eventLaunchable': 1
        });
    });
    el.on('touchmove', function(e) {
        var _this = jQuery(this),
            pas = 100,
            origX = _this.data('touchx'),
            origY = _this.data('touchy'),
            eventLaunchable = _this.data('eventLaunchable'),
            touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];

        // Annuler si event non launchable
        if (eventLaunchable !== 1) {
            return;
        }

        var isSwiftTop = (origY - pas > touch.pageY),
            isSwiftRight = (origX + pas < touch.pageX),
            isSwiftBottom = (origY + pas < touch.pageY),
            isSwiftLeft = (origX - pas > touch.pageX);

        // Top
        if (isSwiftTop && !isSwiftLeft && !isSwiftRight) {
            _this.data('eventLaunchable', 0);
            _this.trigger('swifttop');
        }

        // Right
        if (isSwiftRight && !isSwiftTop && !isSwiftBottom) {
            _this.data('eventLaunchable', 0);
            _this.trigger('swiftright');
        }

        // Bottom
        if (isSwiftBottom && !isSwiftLeft && !isSwiftRight) {
            _this.data('eventLaunchable', 0);
            _this.trigger('swiftbottom');
        }

        // Left
        if (isSwiftLeft && !isSwiftTop && !isSwiftBottom) {
            _this.data('eventLaunchable', 0);
            _this.trigger('swiftleft');
        }

    });
}

/* ----------------------------------------------------------
  Animation Cart Icon
---------------------------------------------------------- */

var animateCartIcon = function() {
    // Stop this function if the user has viewed the cart
    if (colette_vars.cart_viewed) {
        return;
    }
    var cartButton = jQuery('#tm-cart.with-bull');
    if (cartButton) {
        cartButton.addClass('animate');
        setTimeout(function() {
            cartButton.removeClass('animate');
        }, 1500);
        setTimeout(function() {
            animateCartIcon();
        }, 30000);
    }
};