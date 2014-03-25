var $j = jQuery.noConflict();

var colette_vars = {
    cart_viewed: false
};

$j(document).ready(function() {

    setTouchMove(jQuery(window));
    clrz_body_class();

    init_loader();

    // Background aleatoire
    var patterns_folder = SKIN_URL + 'images/patterns/';
    colette_vars.bgImages = [
        // patterns_folder + 'pattern-0.png',
        // patterns_folder + 'pattern-1.png',
        patterns_folder + 'pattern-2.png',
        // patterns_folder + 'pattern-3.png',
        patterns_folder + 'pattern-4.png'
    ];
    colette_vars.bgImages = shuffleArray(colette_vars.bgImages);

    launch_page_ready();

    /* Banner
    -------------------------- */

    jQuery('#block_banner').on('click', function(e) {
        e.preventDefault();
        jQuery(this).animate({
            'opacity': 0,
        }, 300);
        setTimeout(function() {
            jQuery('#block_banner').remove();
        }, 500);
    });


    /* Sidebar
       ----------------------- */

    // AJAX for Sidebar news
    if(!jQuery('body').hasClass('checkout-onepage-index') && jQuery('#side-list-news').length > 0){
        jQuery.ajax({
            'method': 'get',
            'url': jQuery('#colette_blog_webservice_url').val(),
            'data': 'mode=sidebarnews',
            'complete': function(jqXHR, textStatus) {
                if (jqXHR.status == 200) {
                    jQuery('#side-list-news').html(jqXHR.responseText);
                }
            }
        });
    }

    if(!jquerySelHTML.hasClass('is_touchscreen')){
        jQuery('.smm-link-eshop a').on('click', function() {
            jQuery('.smm-link-eshop').trigger('mouseout').removeClass('is-persist-hover');
        });
        jQuery('.smm-link-eshop').persistHover({
            'delay': 20,
            'leave': true,
            'delayleave': 750
        });
        jQuery('.smm-link-eshop li.level0').persistHover({
            'delay': 100,
            'leave': true,
            'delayleave': 100
        });
    }
    else {
        jQuery('.smm-link-eshop > a').attr('href','#').on('click',function(e){
            var lienEshopParent = jQuery('.smm-link-eshop');
            e.preventDefault();
            if(lienEshopParent.hasClass('is-persist-hover')){
                lienEshopParent.trigger('mouseout').removeClass('is-persist-hover');
            }
            else {
                lienEshopParent.addClass('is-persist-hover');
            }
        });
        jQuery('.smm-submenu  a').on('click', function() {
            jQuery('.smm-link-eshop').trigger('mouseout').removeClass('is-persist-hover');
        });
    }

    // Player
    jQuery('.side-audio-player').on('click', function() {
        if(jquerySelHTML.hasClass('fluid-sidebar')){
            clrzForceFluidSidebarAnim('open');
        }
    });
    if(!jquerySelBODY.hasClass('clrz-mp3-player-index')){
        jQuery('.inner-pp').CLRZNiceScroll();
    }
    $j('#open-playlist-button').on('click', function() {
        jquerySelHTML.toggleClass('playlist-open');
    });
    jquerySelBODY.delegate(".vjs-mute-control", "mouseenter", function() {
        jQuery(jQuery(this).parent().parent()).addClass('volumecontrolon');
    });
    jquerySelBODY.delegate(".vjs-volume-control", "mouseleave", function() {
        jQuery(jQuery(this).parent().parent()).removeClass('volumecontrolon');
    });

    /* Toolbar
       ----------------------- */

    init_toolbar();

    set_search_forms();
    animateCartIcon();

    jQuery('.toolbar_content_search').each(function(e) {
        jQuery(this).CLRZNiceScroll();
    });


    // Chargement des infos asynchrones
    if (1) {
        // Update logged
        jQuery.ajax({
            url: "/colette_webservices/index/index/block/sidebar_account/?___store=" + CURRENT_LANGUAGE,
            success: function(data) {
                jQuery('.tc-account').html(data);
            }
        });

        // Update cart
        updateCart2();

        // Update Wishlist
        updateWishlist();
    }

    $j('#btn-back-top').on('click', function(e) {
        e.preventDefault();
        window.scrollBase.animate({
            scrollTop: 0
        }, 'fast');
        return false;
    });

    /* Divers
       ----------------------- */

    actionsOnEchap();

    /* Preload images */
    jQuery('[data-preload-img]').each(function() {
        var img = jQuery(this).data('preload-img');
        jQuery('<img src="' + img + '" alt="" />');
    });
});

function mainCategoryImageBehaviour(){
	jQuery('.main-category-picture').find('img').on('click',function(){
    	var links = jQuery('.main-products-grid').find('.loop-grid-cont').find('.li-link')
    	var nb = links.length;
    	if(nb){
    		nb--;

        	var rand = Math.floor(Math.random()*(nb));

        	var url = links.eq(rand).attr('href');
        	goToUrl(url);
    	}else{
    		var links = jQuery('.brl-list').find('.loop-grid-cont').find('.li-link');

    		var nb = links.length;

    		if(nb){
        		nb--;

            	var rand = Math.floor(Math.random()*(nb));

            	var url = links.eq(rand).attr('href');
            	goToUrl(url);
        	}
    	}

    });
}

function launch_page_ready() {

    if (jquerySelBODY.hasClass('checkout-cart-index')) {
        colette_vars.cart_viewed = true;
    }

    if (jquerySelBODY.hasClass('checkout-onepage-index')) {
        colette_vars.cart_viewed = true;
    }

    clrzSetFluidSidebar();

    classname_if_in_content();

    // On ferme la lightbox
    close_all_lightboxes();

    jQuery('#main > .main-content').each(function() {
        jQuery(this).CLRZNiceScroll();
    });

    window.scrollBase = $j('.main-content .scroller_inner').eq(0);
    window.scrollMover = $j('.main-content .scroller_fix').eq(0);
    if (window.scrollBase.length < 1) {
        window.scrollBase = $j('#main').eq(0);
        window.scrollMover = $j('#main .main-content').eq(0);
    }

    window.thisCLRZMozaik = 1;
    (function() {
        jQuery('.responsive-post-list').CLRZMozaik({
            timeoutResize: 10,
            colWidth: 230,
            hookNbColumns: function(mthis) {
                mthis.nbcolumns = Math.floor(mthis.el.width() / 230);
                mthis.params.colWidth = (100 / mthis.nbcolumns) + '%';
            }
        });
    })();


    // Actions au scroll
    scrollactions();

    menuletterscroll();

    content_infinite_scroll();

    content_infinite_scroll_archive();

    marqueeRollover();

    calculationsForScroll();

    clrzStickyCart();

    /* Home page
       ----------------------- */

    if (jquerySelBODY.hasClass('cms-index-index')) {
        homepage_functions();
    }

    /* Catalog
       ----------------------- */

    clrz_col_grid_modes();
    colette_catalog_more_products();
    colette_catalog_filterz();
    guide_tailles_lightbox();
    fix_height_scroll_menu();
    set_related_products_sidebar();
    mainCategoryImageBehaviour();
    if (jquerySelHTML.hasClass('is_ipad') && jquerySelBODY.hasClass('catalog-category-view')) {
        var jquerySelWindow = jQuery(window);
        var mainCategoryMenuFixed = jQuery('.main-category-menu-fixed');
        jquerySelWindow.off('swifttop').on('swifttop', function() {
            // remove class show
            jQuery('.main-category-menu-fixed').removeClass('is-visible-ipad');
        });
        jquerySelWindow.off('swiftbottom').on('swiftbottom', function() {
            // ajout class show
            if (jquerySelBODY.hasClass('scroll-over-280')) {
                if(!menuFixed.hasClass('is-visible-ipad')){
                    menuFixed.addClass('is-visible-ipad');
                }
            }
        });
    }

    /* Product
       ----------------------- */
    cpmGalleryLink();
    zovermousetrap();
    product_medias_more_views();
    product_medias_more_paged();
    product_medias_navigate();
    product_options_text_in_description();

    if (jquerySelBODY.hasClass('catalog-product-view')) {
        var producttracksbuymp3 = jQuery('.product-mp3-tracks-buy');
        if (producttracksbuymp3) {
            jQuery('.box-info-details-product').clone().addClass('clone').appendTo(producttracksbuymp3);
        }
        jQuery('.colette-single-tracklist.need-toolbar').CLRZNiceScroll();
        var mp3BuyBoxes = jQuery('.has-two-methods .pmb-buy');
        mp3BuyBoxes.on('click', function(e) {
            if (!jQuery(this).hasClass('current-pmb')) {
                mp3BuyBoxes.removeClass('current-pmb');
                jQuery(this).addClass('current-pmb');
            }
        });
    }

    product_viewed_products();
    // Fix refresh uniform for multiple selects
    jQuery('.colette-product-options select').on('change', function() {
        if (jQuery(this).hasClass('validation-failed')) {
            jQuery(this).siblings('.validation-advice').remove();
        }
        setTimeout(function() {
            $j(".colette-product-options select").uniform();
        }, 200);
    });

    /* Masque le selecteur couleur si 1 seule couleur dispo */
    var selectcouleurattr = jQuery('.colette-option-attribute-couleurs');
    if (selectcouleurattr.length == 1) {
        selectcouleurattr.hide();
    }

    /* Single Content
       ----------------------- */
    if (jQuery('.video-js').length > 0) {
        _V_.autoSetup();
    }

    if (jQuery('.clrz-gallery-images img').length > 0) {

        var contentslider = function() {
            jQuery('.clrz-gallery-images > *').coletteContentSlider({
                'pager': jQuery('.clrz-gallery-pagination > *')
            });
        };
        var currentimg = 0;
        var preloadimg = function() {

            var imgbloc = jQuery(jQuery('.clrz-gallery-images img')[currentimg]);
            var imgsrc = imgbloc.attr('src');

            if (imgbloc.parent().attr('data-thumb-big') !== undefined) {
                imgsrc = imgbloc.parent().attr('data-thumb-big');
            }
            //            console.log(imgsrc);
            var imgload = jQuery("<img src='" + imgsrc + "'>");
            imgload.load(function() {
                currentimg++;
                if (currentimg >= jQuery('.clrz-gallery-images img').length) {
                    contentslider();
                }
                else {
                    preloadimg();
                }
            });
        };
        preloadimg();
    }


    /* Checkout
       ----------------------- */

    $j('.colette_giftwrap_checkbox').on('change',function(e){
        $j('#'+$j(this).data('toggletarget')).toggleClass('opened');
        $j(this).parent().toggleClass('checked');
    });
    $j('[name="billing[country_id]"], [name="shipping[country_id]"]').on('change', function() {
        $j('.uniform_me').uniform();
    });

    /* Account
       ----------------------- */

    jQuery('.box-dashb-profile, .box-dashb-address').sameSizes();

    /* Sidebar
       ----------------------- */

    setToolbarCartItems();
    clrzFluidSidebar();

    /* All
       ----------------------- */

    /* Uniform */

    $j(".colette-product-options select, .uniform-me").uniform();

    /* Share */
    if(
        jquerySelBODY.hasClass('catalog-product-view') ||
        jquerySelBODY.hasClass('single-club') ||
        jquerySelBODY.hasClass('post-type-archive-club') ||
        jquerySelBODY.hasClass('single-post') ||
        jquerySelBODY.hasClass('category-waterbar')
        ){
        setTimeout(function() {
            if (typeof twttr !== 'undefined' && twttr.widgets) twttr.widgets.load();
            if (typeof gapi !== 'undefined' && gapi.plusone) gapi.plusone.go();
            if (typeof FB !== 'undefined' && FB.XFBML) FB.XFBML.parse();
            $j('.main-content').find('.pin-it-button').on('click', function(e) {
                e.preventDefault();
                window.open($j(this).attr('href'), "pinterest-button", "menubar=no, status=no, scrollbars=no, menubar=no, width=600, height=400");
            });
        }, 100);
    }

    // Trad links in .form-language
    if (typeof lang_url_trad != 'undefined') {
        for (var i in lang_url_trad) {
            jQuery('#form-language-' + i).attr('href', lang_url_trad[i]);
        }
    }




    /* prev pagi */
    var prevPagination = jQuery('#prev-top-pagination');
    if(prevPagination.length > 0 && !prevPagination.hasClass('infinite-scroll-load')) {
        prevPagination.trigger('click');
    }

    /* FAQ */

    jQuery('.faq-block').addClass('faq-is-hidden');
    jQuery('.faq-title').off('click').on('click', function() {
        var contentFor = jQuery(this).data('content-for'),
            elContentFor = jQuery('#' + contentFor);
        if (elContentFor) {
            elContentFor.toggleClass('faq-is-hidden');
            elContentFor.toggleClass('faq-isnot-hidden');
        }
    });

    // Forgotten password
    (function() {
        var formId = 'form-password-validate';
        var forgotPasswordForm = $j('#' + formId);
        if (forgotPasswordForm.length) {
            var varienForm = new VarienForm(formId, true);
            forgotPasswordForm.off('submit').on('submit', function(e){
                e.preventDefault();
                if (varienForm.validator.validate()) {
                    showHideMainLoader(true);
                    $j.ajax({
                        type: 'post',
                        url: forgotPasswordForm.attr('action'),
                        data: forgotPasswordForm.serialize(),
                        dataType: "json",
                        success: function(data) {
                            $j('.tm-account-toggle').trigger('click');
                            manageAjaxMessage(data.message[0]);
                            showHideMainLoader(false);
                        },
                        failure: function() {
                            showHideMainLoader(false);
                        }
                    });
                }
            });
        }
    })();

    /* Gift amount */
    var giftCardAmount = jQuery('.gift-card-amount');
    // When amount is changing
    giftCardAmount.on('change', '[name=amount]', function(e) {
        // Disable all
        giftCardAmount.find('.amount').removeClass('is-checked');
        // Active just this one
        jQuery(this).parent().addClass('is-checked');
    });

}

$j(window).on('resize', function() {
    hideElementsIncompleteLine();
    setFullLightboxImage();
    calculationsForScroll();
});

jQuery(document).ready(function(){
    monitorResizeEnd();
    aleaBg();
});

jQuery(window).on('resizeend', function() {
    fix_height_scroll_menu();
});

/* ----------------------------------------------------------
  Auto complete
---------------------------------------------------------- */

jQuery(document).ready(function() {
    (function() {
        var autocomplete_params = {
            minLength: 2,
            scrollHeight: 220,
            source: function(req, add) {
                jQuery.ajax({
                    url: colette_ajax_autocomplete_url,
                    type: "get",
                    dataType: 'json',
                    data: 'q=' + req.term,
                    async: true,
                    success: function(data) {
                        var suggestions = [];
                        jQuery.each(data, function(i, val) {
                            suggestions.push({
                                "nb": val.nb,
                                "value": val.value,
                                "label": val.label + " (" + val.nb + ")"
                            });
                        });
                        add(suggestions);
                    }
                });
            },
            select: function(event, ui) {
                jQuery(this).val(ui.item.value);
                jQuery(this).parent().trigger('submit');
                return;
            }
        };
        jQuery("#search").autocomplete(autocomplete_params);
        jQuery("#search2").autocomplete(autocomplete_params);
    }());
});
