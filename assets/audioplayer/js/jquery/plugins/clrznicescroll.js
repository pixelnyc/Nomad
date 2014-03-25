if (!jQuery.fn.CLRZNiceScroll) {
    (function($) {
        var CLRZNiceScroll = {
            defaultParams: {},
            params: {},
            isScrollbarVisible: false,
            init: function(el, params) {
                var mthis = this;
                if (
                    ($.browser.msie && parseInt($.browser.version, 10) <= 8) ||
                    (jquerySelHTML.hasClass('is_ipad'))
                    ) {
                    el.addClass('no_custom_scroll');
                    return false;
                }
                el.addClass('has_nicescroll');
                this.el = el;
                this.el0 = this.el.get(0);
                this.getParams(params);
                this.setWrappers();
                this.setScrollBar();
                this.setEvents();
                this.setSizes();
            },
            setWrappers: function() {
                this.elementwidth = this.el.width();

                // Base styles
                this.el.css('overflow', 'hidden');
                if (this.el.css('position') != 'absolute' && this.el.css('position') != 'fixed') {
                    this.el.css('position', 'relative');
                }

                // Inner element
                this.scroller_inner = $('<div class="scroller_inner"></div>');
                this.scroller_inner.css('width', '150%');
                this.scroller_inner.css({
                    'height': '100%',
                    'overflow-y': 'auto'
                });

                // Fix for content width
                this.scroller_fix = $('<div class="scroller_fix"></div>');
                this.scroller_fix.css('width', this.elementwidth);

                // Insert elements
                this.el.wrapInner(this.scroller_fix);
                this.el.wrapInner(this.scroller_inner);

                this.el_scroller_inner = this.el.children('.scroller_inner');
                this.el_scroller_inner0 = this.el_scroller_inner.get(0);
                this.el_scroller_fix = this.el_scroller_inner.children('.scroller_fix');
                this.el_scroller_fix0 = this.el_scroller_fix.get(0);

                this.eloffsettop = this.el.offset().top;

            },
            setScrollBar: function() {
                var mthis = this;
                this.scroller_bar = $('<div class="scroller_bar"><div class="scroller_bar_inner"></div></div>');
                this.scroller_bar.css({
                    'z-index': 1000,
                    'position': 'absolute',
                    'cursor': 'pointer',
                    'top': 0,
                    'right': 6,
                    'height': '22%',
                    'min-width': 8
                });
                this.el.prepend(this.scroller_bar);
                this.scroller_bar = this.el.find('.scroller_bar');
                this.scroller_bar0 = this.scroller_bar.get(0);

            },
            setSizes: function() {

                this.getDimensions();
                this.setMaxScroll();

                // Set Scrollbar position to scroll position
                this.setPercentScrollBar();

                // Fix internal element width
                this.el_scroller_fix.css('width', this.elementwidth);

                // Hide scrollbar if not useful
                if (this.maxScroll < 0) {
                    if (this.isScrollbarVisible !== 0) {
                        this.scroller_bar.css('display', 'none');
                        this.el_scroller_fix.removeClass('have-fake-scrollbar');
                        this.isScrollbarVisible = 0;
                    }
                }
                else {
                    if (this.isScrollbarVisible !== 1) {
                        this.el_scroller_fix.addClass('have-fake-scrollbar');
                        this.scroller_bar.css('display', 'block');
                        this.isScrollbarVisible = 1;
                    }
                }

            },
            setEvents: function() {
                var mthis = this;

                // Remove automatic scroll left when highlighting text
                this.el.on('scroll', function() {
                    this.scrollLeft = 0;
                });

                // Natural scroll
                this.el_scroller_inner.on('scroll', function() {
                    // If this is a "natural scroll"
                    if (mthis.virtualScrolling !== 1) {
                        mthis.setPercentScrollBar();
                    }
                });

                this.getDimensions();
                this.setMaxScroll();

                // Scrollbar drag
                this.scroller_bar.draggable({
                    containment: "parent",
                    scroll: false,
                    axis: "y",
                    drag: function() {
                        mthis.virtualScrolling = 1;
                        var percentScrollbar = $(this).position().top / mthis.maxScrollBar;
                        var newPercentScrollContent = percentScrollbar * mthis.maxScroll;

                        // Scroll content
                        mthis.el_scroller_inner.scrollTop(newPercentScrollContent);
                    },
                    stop: function() {
                        mthis.virtualScrolling = 0;
                        mthis.setSizes();
                    }
                });

                // Resize
                $(window).on('resize', function(e) {
                    mthis.setSizes();
                });

                mthis.setTimeoutSizes();
            },
            setTimeoutSizes: function() {
                var mthis = this;
                window.setTimeout(function() {
                    mthis.setTimeoutSizes();
                }, 500);
                mthis.setSizes();
            },
            setPercentScrollBar: function() {
                var percentScroll = (this.el.offset().top - this.el_scroller_fix.offset().top) / this.maxScroll;
                var newPercentScrollBar = percentScroll * this.maxScrollBar;
                var percentBarHeight = parseInt((this.elscrollerheight / this.elscrollerfixheight) * 100, 10);
                percentBarHeight = Math.max(20, percentBarHeight) + '%';

                // Change scrollbar position
                this.scroller_bar.css({
                    'top': newPercentScrollBar,
                    'height': percentBarHeight
                });
            },
            getDimensions: function(){
                this.elscrollerheight = this.el_scroller_inner0.clientHeight;
                this.elscrollerfixheight = this.el_scroller_fix0.clientHeight;
                this.elementwidth = this.el.width();
            },
            setMaxScroll: function() {

                this.elheight = this.el0.clientHeight;

                // Max element scroll
                this.maxScroll = this.elscrollerfixheight - this.elheight;

                // Max top scrollbar
                this.maxScrollBar = this.elheight - this.scroller_bar0.clientHeight;

            },
            getParams: function(params) {
                this.params = $.extend({}, this.defaultParams, params);
            }
        };
        $.fn.CLRZNiceScroll = function(params) {
            this.each(function() {
                if (!$(this).hasClass('no_custom_scroll') && !$(this).hasClass('has_nicescroll')) {
                    $.extend(true, {}, CLRZNiceScroll).init($(this), params);
                }
            });
            return this;
        };
    })(jQuery);
}