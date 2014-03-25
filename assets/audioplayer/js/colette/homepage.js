/* ----------------------------------------------------------
  Functions home
---------------------------------------------------------- */

var homepage_functions = function() {

    // Reinit vars
    homepage_load_next_page_vars = {
        pages: jQuery('.pager').children('.pages'),
        isLoading: false,
        nbPages: 0
    };

    // Set slider
    jQuery('.dk-jsu-slider').dkJSUSlider();
    // Set infinite scroll
    if (homepage_load_next_page_vars.pages.find('li').length > 1) {
        window.scrollBase.on('scroll', function(e) {
            homepage_check_infinite_load();
        });
        homepage_check_infinite_load();
    }
    try_load_images_background();

    // Random product
    homepage_random_category_product();
};

/* ----------------------------------------------------------
  Load size
---------------------------------------------------------- */

var try_load_images_background = function() {
    // Images Vertical
    jQuery('.home__grid').find('.half').find('.home__block-push').each(function() {
        load_image_background(jQuery(this), 1);
    });

    // Images triple
    jQuery('.quarter').find('.home__block-push').each(function() {
        load_image_background(jQuery(this), 2);
    });

    // Images triple
    jQuery('.home__grid--3col').find('.home__block-push').each(function() {
        load_image_background(jQuery(this), 3);
    });
};

var load_image_background = function($el, imgNb) {
    var imageUrl = '';
    if (!$el.attr('data-image' + imgNb)) {
        return;
    }
    // Load image url
    imageUrl = $el.attr('data-image' + imgNb);

    // Create new image for load
    var img = new Image();
    img.onload = function() {
        $el.css({
            'background-image': 'url(' + imageUrl + ')'
        });
    };
    img.src = imageUrl;

    // Remove attributes
    for (var i = 1; i <= 3; i++) {
        $el.removeAttr('data-image' + i);
    }
};

/* ----------------------------------------------------------
  Load next page
---------------------------------------------------------- */

var homepage_load_next_page_vars = {
    pages: [],
    isLoading: false,
    nbPages: 0
};
var homepage_check_infinite_load = function() {
    var contentHeight = window.scrollMover.get(0).offsetHeight,
        bottomScroll = window.scrollBase.get(0).offsetHeight + window.scrollBase.scrollTop();
    distanceBottom = contentHeight - bottomScroll;
    if (distanceBottom < 400) {
        homepage_load_next_page();
    }
};
var homepage_load_next_page = function() {
    // Kill if already loading
    if (homepage_load_next_page_vars.isLoading || homepage_load_next_page_vars.nbPages > 5) {
        return;
    }
    homepage_load_next_page_vars.isLoading = true;
    homepage_load_next_page_vars.nbPages++;

    // Get next page url
    var currentPage = homepage_load_next_page_vars.pages.find('.current');
    if (currentPage.length < 1) {
        return;
    }

    var nextPage = currentPage.next('li');
    if (nextPage.length < 1) {
        return;
    }

    currentPage.remove();

    var nextPageLink = nextPage.find('a');
    if (!nextPageLink) {
        return;
    }
    nextPage.addClass('current');

    // Load next page
    jQuery.ajax({
        type: "GET",
        url: nextPageLink.attr('href'),
        data: {
            ajax: 1
        }
    }).done(function(msg) {
        // Inject in page
        var newContentBlocks = jQuery(msg).find('#clrz_content').children('.home__container');

        newContentBlocks.each(function() {
            window.scrollMover.append(jQuery(this));
        });

        // Allow new loading
        setTimeout(function() {
            homepage_load_next_page_vars.isLoading = false;
            try_load_images_background();
            homepage_random_category_product();
        }, 100);
    });

};

/* ----------------------------------------------------------
  Display a random product in category blocks
---------------------------------------------------------- */

var homepage_random_category_product = function() {
    jQuery('.home__block-category').each(function() {
        var products = jQuery(this).find('.link-product'),
            maxProduct = products.length,
            randProduct = Math.floor(Math.random() * maxProduct);
        if (maxProduct >= 1) {
            products.hide();
            products.eq(randProduct).show();
        }
    });
};