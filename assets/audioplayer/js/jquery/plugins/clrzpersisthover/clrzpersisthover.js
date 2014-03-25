/**
 * Adds a CSS class after a delay when hovering element
 * If specified, this class is removed after a delay too.
 */
if(!jQuery.fn.persistHover) {
    (function($) {
        var persistHover = {
            defaultParams: {
                'mainclass': 'is-persist-hover',
                'nomainclass': 'no-persist-hover',
                'delay': 300,
                'leave': false,
                'delayleave': 300
            },
            params: {},
            init: function(els, params) {
                this.params = $.extend({}, this.defaultParams, params);
                els.data('persistparams', $.extend({}, this.params));
                this.setEvents(els);
            },
            setEvents: function(els) {
                var mthis = this;
                els.each(function() {
                    $(this).data('mouseenter-timer', false);
                    $(this).on('mouseenter', function() {
                        var $t = $(this),
                            pparams = $(this).data('persistparams');
                        clearTimeout($(this).data('mouseenter-timer'));
                        clearTimeout($(this).data('mouseleave-timer'));
                        $(this).data('mouseenter-timer', setTimeout(function() {
                            if(!$t.hasClass(pparams.mainclass)) {
                                $t.removeClass(pparams.nomainclass);
                                $t.addClass(pparams.mainclass);
                            }
                        }, pparams.delay));
                    });
                    $(this).data('mouseleave-timer', false);
                    $(this).on('mouseleave', function() {
                        var $t = $(this),
                            pparams = $(this).data('persistparams');
                        clearTimeout($(this).data('mouseenter-timer'));
                        clearTimeout($(this).data('mouseleave-timer'));
                        if(pparams.leave === false) {
                            $t.removeClass(pparams.mainclass);
                            $t.addClass(pparams.nomainclass);
                        }
                        else {
                            $(this).data('mouseleave-timer', setTimeout(function() {
                                $t.removeClass(pparams.mainclass);
                                $t.addClass(pparams.nomainclass);
                            }, pparams.delayleave));
                        }
                    });
                });
            }
        };
        $.fn.persistHover = function(params) {
            $(this).each(function() {
                $.extend({}, persistHover).init($(this), params);
            });
            return this;
        };
    })(jQuery);
}

