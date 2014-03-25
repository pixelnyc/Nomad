if(!jQuery.fn.CLRZMozaik) {
    (function($) {
        var CLRZMozaik = {
            defaultParams: {
                timeoutResize: 50,
                colWidth: 300,
                hookNbColumns: function(mthis) {}
            },
            rebuilding: 0,
            params: {},
            columns: [],
            init: function(el, params) {
                var mthis = this;
                if(window.thisCLRZMozaik){
                    window.thisCLRZMozaik = this;
                }
                this.el = el;
                this.getParams(params);
                this.initLoaded();
            },
            initLoaded: function() {
                var mthis = this;

                this.elementz = [];
                this.el.children().each(function() {
                    var $t = $(this),
                        elclone = $t.clone();
                    // Clone the element
                    mthis.elementz.push(elclone);
                    // Delete the original
                    $t.remove();
                });

                if(this.elementz.size() > 0) {
                    this.setColumns();
                    this.buildColumns();
                    this.fillColumns();
                    this.setEvents();
                }
            },
            reloadColumns:function(){
                this.destroyColumns();
                this.setColumns();
                this.buildColumns();
                this.fillColumns();
            },
            buildColumns: function() {
                var initel = this.el;
                initel.css({
                    'position': 'relative',
                    'overflow': 'hidden',
                    'margin-right': '-20px'
                });
                this.columns = [];
                for(var i = 0; i < this.nbcolumns; i++) {
                    this.columns[i] = $('<div></div>');
                    this.columns[i].css({
                        'width': this.params.colWidth,
                        'float': 'left'
                    });
                    initel.append(this.columns[i]);
                }
            },
            setColumns: function() {
                this.nbcolumns = Math.floor(this.el.width() / this.params.colWidth);
                this.params.hookNbColumns(this);
            },
            destroyColumns: function() {
                this.columns.each(function(el) {
                    el.remove();
                });
                this.columns = [];
            },
            fillColumns: function() {
                var mthis = this;
                // Each element is appended to the shortest column
                this.elementz.each(function(el) {
                    mthis.insertElement(el);
                });
            },
            insertElement: function(el) {
                var shorti = 0,
                    elclone = el.clone(),
                    shortiheight = false,
                    nbcolumns = this.columns.size();

                if (nbcolumns > 0) {
                    shortiheight = this.columns[0].height();
                }

                for (var i = 0; i < nbcolumns; i++) {
                    var thiscoleight = this.columns[i].height();
                    if (thiscoleight < shortiheight) {
                        shorti = i;
                        shortiheight = thiscoleight;
                    }
                }
                if (this.columns[shorti]) {
                    this.columns[shorti].append(elclone);
                }
            },
            insertElementBefore:function(el){
                var shorti = 0,
                    elclone = el.clone(),
                    nbcolumns = this.columns.size();
                for(var i = 0; i < nbcolumns; i++) {
                    if(this.columns[i].height() < this.columns[shorti].height()) {
                        shorti = i;
                    }
                }
                if(this.columns[shorti]){
                    this.columns[shorti].append(elclone);
                }
            },
            getParams: function(params) {
                this.params = $.extend({}, this.defaultParams, params);
                this.nbcolumns = 2;
            },
            setEvents: function() {
                var mthis = this;
                $(window).resize(function() {
                    clearTimeout(mthis.rebuildtimeout);
                    mthis.rebuildtimeout = setTimeout(function() {
                        // Resize :
                        var oldnb = mthis.nbcolumns;
                        mthis.setColumns();
                        // If column number is different
                        if(oldnb != mthis.nbcolumns) {
                            mthis.destroyColumns();
                            mthis.buildColumns();
                            mthis.fillColumns();
                        }
                    }, mthis.params.timeoutResize);
                });
            }
        };
        $.fn.CLRZMozaik = function(params) {
            $.extend({}, CLRZMozaik).init(this, params);
            return this;
        };
    })(jQuery);
}