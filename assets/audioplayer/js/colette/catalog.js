
/* ----------------------------------------------------------
   Bouton "more products"
   ------------------------------------------------------- */

function colette_catalog_more_products(){

    if(jQuery('#archive-grid').length>0)
        return;

    var btn_more = jQuery('.button-more-products');
    if(btn_more.length > 1 || btn_more.hasClass('infinite-scroll-load')){
        return false;
    }

    if (!getNextPagePager()) {
        btn_more.remove();
    }else{
        btn_more.addClass('infinite-scroll-load').off('click').on('click',function(event) {

            if(jQuery(this).hasClass('noasync')){

                if(jQuery('.scroller_bar').hasClass('ui-draggable-dragging')){
                    var page = jQuery('.pages li.current');
                    var brother = page.next();
    //                var href = brother.find('a').attr('href');
                    jQuery('.more-products-link').addClass('dragging');
    //                jQuery('.more-products-link .button-more-products').removeClass('noasync').attr('href', href);
                    return false;
                }else{
                    jQuery('.more-products-link').removeClass('dragging');
                    jQuery('.more-products-link .button-more-products').addClass('noasync');
                }



                event.preventDefault();
                var lebutton = jQuery(this);
                var page = jQuery('.pages li.current');
                var brother = page.next();
                var href = new URI(brother.find('a').attr('href'));
                href.removeSearch('ajax');
                var currenturl = new URI(page.find('a').attr('href'));
                currenturl.removeSearch('ajax');

                if(href && href != currenturl) {

                    lebutton.addClass('active').attr("disabled", "disabled");
                    page.removeClass('current');
                    brother.addClass('current');
                    jQuery.ajax({
                        type: "get",
                        url: href,
                        data: 'ajax=true&infinitepage=true',
                        success: function(data) {

                            // Hiding the button
                            lebutton.removeClass('active').removeAttr("disabled").removeClass('le-button');

                            // Au moment ou le bouton devient un loader
                            if(!lebutton.hasClass('btn-loader')){

                                // scroll
        //                        window.scrollBase.animate({
        //                            scrollTop:jQuery('.products-grid').height()
        //                        },500);

                                lebutton.addClass('btn-loader');
                            }

                            // Image aleatoire pour le loader
                            var loaders_folder = SKIN_URL + 'images/loaders/mini/',
                                images = [
                                    loaders_folder + 'ball-2.gif',
                                    loaders_folder + 'bounce.gif',
                                    loaders_folder + 'mouth.gif',
                                    loaders_folder + 'worm.gif'
                                ];

                            // shuffle image
                            images = shuffleArray(images);

                            // On evite de reprendre la même
                            var newimg = 'url('+images[0]+')';
                            if(lebutton.css('background-image') == newimg){
                                newimg = 'url('+images[1]+')';
                            }

                            lebutton.css('background-image',newimg);

                            var dataresponse = jQuery(data);
                            dataresponse.find('.products-grid li').first().addClass('pagi-loop page-'+getURLParameter(href, 'p')).attr('data-urlpagi', href);


                            var productgrid = dataresponse.find('.products-grid').html();
                            productgrid = jQuery.trim(productgrid);
            //                if(jQuery(productgrid.find('li')[0])){
            //                    jQuery(productgrid.find('li')[0]).addClass('page-'+page);
            //                }
                            jQuery('.products-grid').first().append(productgrid);
                            clrz_col_grid_modes();
                            lebutton.removeClass('infinite-scroll-load');
                            calculationsForScroll();
                            marqueeRollover();

                            // Check if next page exists
                            if(!getNextPagePager()){
                                lebutton.hide().addClass('infinite-scroll-load');
                                hideElementsIncompleteLine('show');
                            }
                        }
                    });
                }
            }
        });

        btn_more.trigger('click');
    }
}

/* ----------------------------------------------------------
   Filtres products
   ------------------------------------------------------- */

function colette_catalog_filterz(){

    if(!jquerySelBODY.hasClass('catalog-category-view') && !jquerySelBODY.hasClass('catalogsearch-result-index')){
        return false;
    }

    jQuery('.filter-submenu-options').CLRZNiceScroll();
    jQuery('.li-filter-products').persistHover({
        'delay': 300,
        'leave': true,
        'delayleave': 300
    });

    if(jquerySelHTML.hasClass('is_touchscreen')){
        jQuery('.li-filter-products > a').on('click',function(e){
            var _this = jQuery(this),
                _parent = _this.parent();
            if(_parent.hasClass('is-persist-hover')){
                _parent.trigger('mouseleave').removeClass('is-persist-hover').addClass('is-persist-hover');
            }
        });
    }

    jQuery('#narrow-by-list .filterz').on('click','a, input',function(e){
        e.preventDefault();
        jQuery('.li-filter-products').removeClass('is-persist-hover');
        jquerySelBODY.attr('data-clrz-transition','filterz');
        var _this = jQuery(this),
            _tagName = _this.get(0).tagName.toLowerCase();
        if(_tagName == 'a'){
            var _thisprev = _this.prev();
            if(_thisprev.is(':checked')){
                _this.parent().removeClass('checked');
                _thisprev.attr('checked', false);
            }
            else {
                _this.parent().addClass('checked');
                _thisprev.attr('checked', true);
            }
        }
    });
    jquerySelBODY.attr('data-clrz-transition','');
    // On masque le filtre "tailles", sauf pour les catégories "femme", "homme" et street

    if(isCat('femme') || isCat('women')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();

    }

    if(isCat('bijoux') || isCat('jewelry') || isSubcatOf('bijoux') || isSubcatOf('jewelry')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();

    }

    if(isCat('street')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();

    }
    
    if(isCat('blue-friday-women') || isCat('blue-friday-men') || isCat('blue-friday-street')){
    	jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();
    	
    }

    if(isCat('music') || isCat('musique') || isSubcatOf('music') || isSubcatOf('musique')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();
        jQuery('.li-filter-products-marques,.li-filter-products-brand').remove();

    }

    if(isCat('time') || isSubcatOf('time')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();

    }

    if(isCat('water-bar')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();
        jQuery('.li-filter-products-marques,.li-filter-products-brand').remove();
    }

    if(isSubcatOf('water-bar')){
        jQuery('.li-filter-products-couleurs,.li-filter-products-colors').remove();
    }

    if(isCat('culture') || isSubcatOf('culture')){
        
        if(!jQuery('body').hasClass('isinsubcat-12966')){
            jQuery('.li-filter-products-marques,.li-filter-products-brand').remove();
        }
        
        jQuery('.li-filter-products-couleur,.li-filter-products-couleurs,.li-filter-products-colors,.li-filter-products-color').remove();

    }

//    var filterzClassList = jQuery('body').attr('class').split(/\s+/);
//    var isCategoryOkForAttributeSize = false;
//    jQuery.each( filterzClassList, function(index, item){
//        if (
//            item.match(/categorypath-femme/g) ||
//            item.match(/categorypath-homme/g) ||
//            item.match(/categorypath-women/g) ||
//            item.match(/categorypath-men/g) ||
//            item.match(/categorypath-street/g)
//            ) {
//           isCategoryOkForAttributeSize = true;
//        }
//    });
//    if(!isCategoryOkForAttributeSize){
//        jQuery('.li-filter-products-tailles').remove();
//    }



}



function isCat(category) {

    var bclass = jQuery(document.body).attr('class');
   if(jQuery(document.body).hasClass('categorypath-'+category+'-html')){

        return true;
    }
    return false;

}

function isSubcatOf(category) {

    var bclass = jQuery(document.body).attr('class');
   if(bclass.indexOf("categorypath-"+category)>0 && !jQuery(document.body).hasClass('categorypath-'+category+'-html')){

        return true;
    }

    return false;
}

/* ----------------------------------------------------------
   Gestion des grilles du catalogue
   ------------------------------------------------------- */

function clrz_col_grid_modes() {
    var grid_modes = ['small', 'medium', 'wide'],
        value_grid = grid_modes[0],
        cookie_grid = getCookie('clrz_col_grid_modes');

    // Si cookie ok, on utilise la valeur
    if (in_array(cookie_grid, grid_modes)) {
        value_grid = cookie_grid;
    }
    // Si pas de cookie
    else {
        // Si grande fenetre, default medium
        if ($j(window).width() > 2000) {
            value_grid = grid_modes[1];
        }
    }

    // On set la grid à la valeur adéquate
    clrz_col_set_grid(value_grid, grid_modes);
    // Au click sur un des boutons du selecteur de grid
    $j('[data-grid-mode]').unbind('click').click(function(e) {
        e.preventDefault();
        clrz_col_set_grid($j(this).data('grid-mode'), grid_modes);
    });
}

function clrz_col_set_grid(value_grid, grid_modes) {
    // - Ajout de la classe à la grid
    $j('.products-grid').each(function() {
        products_grid = $j(this);
        if (!products_grid.hasClass('force-grid') && products_grid.attr('id') != 'archive-grid') {
            // On enleve les classes eventuelles
            grid_modes.each(function(i, n) {
                products_grid.removeClass(i + '-product-grid');
            });
            products_grid.addClass(value_grid + '-product-grid');
        }
    });

    // - On met l'active sur le bon bouton dans le selecteur de grid
    $j('[data-grid-mode]').each(function() {
        button_grid = $j(this);
        if (button_grid.data('grid-mode') != value_grid) {
            button_grid.removeClass('current');
        }
        else {
            button_grid.addClass('current');
        }
    });

    // - Mise en cookie de la valeur
    setCookie('clrz_col_grid_modes', value_grid);

    hideElementsIncompleteLine();
    calculationsForScroll();
    setTimeout(function() {
        calculationsForScroll();
    }, 100);
}

/* Correction de la hauteur figée pour le menu scroll */
function fix_height_scroll_menu() {
    var lemaincatmenu = jQuery('.main-category-menu');
    if (lemaincatmenu.length > 0) {
        // Check hauteur menu main cat
        var i = 0,
            length = scrollsteps.length,
            hasClassScroll = false;
        for (; i < length; i++) {
            if (jquerySelBODY.hasClass('scroll-over-' + scrollsteps[i])) {
                hasClassScroll = true;
            }
        }
        if (!hasClassScroll) {
            lemaincatmenu.css('height', 'auto');
            setTimeout(function() {
                lemaincatmenu.css('height', lemaincatmenu.height());
            }, 10);
        }
    }
}

/* ----------------------------------------------------------
   Guide des tailles
   ------------------------------------------------------- */

function guide_tailles_lightbox() {
    var lightbox = jQuery('#product-guide-tailles');
    if (lightbox.length < 1) {
        jQuery('.btn-help-info').remove();
        return;
    }
    jQuery('.btn-help-info').off('click').on('click', function(e) {
        e.preventDefault();
        var lightbox = jQuery('#product-guide-tailles');
        if (!lightbox.hasClass('is-visible')) {
            lightbox.addClass('is-visible');
        }
    });
    lightbox.on('click', '.filter-guide-tailles', function() {
        jQuery('#product-guide-tailles').removeClass('is-visible');
    });
}

/* ----------------------------------------------------------
   Viewed products ajax
   ------------------------------------------------------- */


function product_viewed_products() {
    viewedp = jQuery('#viewed-products');
    if(!viewedp){
        return;
    }

    viewedp.load('/ajax/services/viewedproducts/',{'product_id': viewedp.attr('data-product-id')});


}
