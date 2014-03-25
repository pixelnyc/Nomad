var $j = jQuery.noConflict();

function clrzSetFluidSidebar(){
    if(!jquerySelBODY.hasClass('cms-index-index') && !jquerySelBODY.hasClass('is_wordpress')  && !jquerySelBODY.hasClass('cms-categories')) {
        clrzFluidSidebarAnim(false);
    } else if(jquerySelHTML.hasClass('fluid-sidebar') || jquerySelHTML.hasClass('fluid-sidebar-hover')) {
        clrzFluidSidebarUnset();
    }
}

/* ----------------------------------------------------------
   Fluid sidebar trigger
   ------------------------------------------------------- */

var clrzFluidSidebar = function() {
    var sideTrigger = jQuery('#fluid-sidebar-trigger');
    if (sideTrigger && !sideTrigger.hasClass('has-sidetrigger-actions')) {
        // Prevent duplicate launch
        sideTrigger.addClass('has-sidetrigger-actions');

        // Actions hover
        sideTrigger.mouseover(clrzFluidSidebarAnim);

        // Touch
        sideTrigger.click(clrzFluidSidebarAnim);

        // Swift
        if(!!('ontouchstart' in window)){
            var jquerySelWindow = jQuery(window);
            jquerySelWindow.on('swiftleft', function() {
                clrzForceFluidSidebarAnim('close');
            }).on('swiftright', function() {
                clrzForceFluidSidebarAnim('open');
            });
        }
    }
};

// Forcing a special action
var clrzForceFluidSidebarAnim = function(action) {
    if (action === 'open' && !jquerySelHTML.hasClass('fluid-sidebar-hover')) {
        clrzFluidSidebarAnim();
    }
    if (action === 'close' && jquerySelHTML.hasClass('fluid-sidebar-hover')) {
        clrzFluidSidebarAnim();
    }
};

var clrzFluidSidebarAnim = function(open) {
    var animOpen = (typeof open != 'undefined') ? open : (!jquerySelHTML.hasClass('fluid-sidebar-hover'));

    // Force open for blog
    if (jquerySelBODY.hasClass('is_wordpress')) {
        animOpen = true;
    }

    // pas besoin
    if(!animOpen && jquerySelHTML.hasClass('fluid-sidebar')) return;
    if(jquerySelHTML.hasClass('sidebar-anim')) return;

    jquerySelHTML.addClass('sidebar-anim');

    var animProps = (animOpen) ? {width: 234, padding: '0 20px'} : {width: 20, padding: '0 10px'};

    jQuery('#sidebar').animate({
            // opacity: 1
        },
        300,
        'linear',
        function() {
            jQuery('#sidebar').animate(
                animProps,
                300,
                'easeInOutCubic',
                function() {

                    if(animOpen)
                        jquerySelHTML.removeClass('fluid-sidebar').addClass('fluid-sidebar-hover');
                    else
                        jquerySelHTML.addClass('fluid-sidebar').removeClass('fluid-sidebar-hover');


                    jquerySelHTML.removeClass('sidebar-anim');

                    jQuery('#sidebar').animate({
                        // opacity: 1
                    },
                    300,
                    'linear',
                    function() {

                        // mouse leave sidebar
                        jQuery('#sidebar').unbind('mouseleave');
                        jQuery('.fluid-sidebar-hover #sidebar').mouseleave(function(e){
                            if(!jQuery('#newsletter').is(":focus"))
                                clrzFluidSidebarAnim();
                        });
                });
            });
    });

};

jQuery(window).on('ajaxready',function(){
    var side = jQuery('#sidebar');
    side.unbind('mouseleave');
    // .stop();
});

// Ouvrir la fluid sidebar
var clrzFluidSidebarUnset = function() {
    jquerySelHTML.addClass('sidebar-anim');
    var sideContainer = jQuery('#sidebar .sidebar-container'),
        sidebar = jQuery('#sidebar');

    // Fade out sidebar
    sideContainer.fadeOut(300);

    // Apply fixes
    setTimeout(function() {
        jquerySelHTML.removeClass('fluid-sidebar').removeClass('fluid-sidebar-hover');
        sidebar.css('padding', '0 20px');
        sidebar.animate({
                width: 234
            },
            300,
            'easeInOutCubic');
    }, 305);

    // Fade in sidebar
    setTimeout(function() {
        jquerySelHTML.removeClass('sidebar-anim');
        sideContainer.fadeIn(300);
    }, 610);

    // Reset events
    jQuery('#sidebar').unbind('mouseleave');

};