var switchTabs = function(tab) {
    if (!tab.hasClass('disabled')) {
        $j('.tab').hide();
        $j('#' + tab.attr('rel')).show();
        $j('#tabs .current').removeClass('current');
        tab.parent().prev().find('.step').addClass('enabled');
        tab.parent().addClass("current");
    }
}

var initTabs = function() {
    var tabs = $j('#tabs a');
    if (tabs.length) {
        tabs.click(function(){
            switchTabs($j(this));
            return false;
        });
        switchTabs($j('#tabs a.default-tab'));
    }
}

var overlayz = function (remove, appendToElt, backgroundColor, spinnerColor, squareOnly, activity) {
    if (!remove) {
        $j('#overlayz').activity(false);
        var overlayz = $j('.overlayz');
        if (overlayz.length) {
            overlayz.fadeOut('slow', function(){
                $j(this).remove();
            });
        }
        return false;
    }

    // Vars
    var height, width;
    var additionnalStyle = '';

    // Append to?
    if ((appendToElt === undefined) || (appendToElt === null)) {
        appendToElt = 'body';
        width = $j(document).width();
        height = $j(document).height();
        additionnalStyle = 'position:fixed;';
    }
    else {
        getSizeFromElt = appendToElt;
        width = $j(getSizeFromElt).outerWidth();
        height = $j(getSizeFromElt).outerHeight();
    }

    if ((squareOnly === undefined) || (squareOnly === null)) {
        squareOnly = false;
    }

    // Background
    if ((backgroundColor == undefined) || (backgroundColor === null)) {
        backgroundColor = '';
    }

    if (backgroundColor.length > 0) {
        backgroundColor = 'background-color:' + backgroundColor + ';';
    }

    // Spinner color
    if ((spinnerColor == undefined) || (spinnerColor === null)) {
        if (typeof OVERLAYZ_SPINNER_DEFAULT_COLOR != undefined) {
            spinnerColor = OVERLAYZ_SPINNER_DEFAULT_COLOR;
        }
        else {
            spinnerColor = '#000';
        }
    }

    var overlayzHtml = '<div id="overlayz" class="overlayz" style="'+ additionnalStyle +'width:'+ width +';height:'+ height +';display:none;'+ (squareOnly ? 'background-color:transparent' : backgroundColor) +'"></div>';
    if (squareOnly) {
        overlayzHtml += '<div id="overlayz" class="overlayz square" style="display:none;'+ backgroundColor +'"></div>';
    }

    $j('.overlayz').remove();
    $j(appendToElt).css('position', 'relative').append(overlayzHtml);
    $j('.overlayz').fadeIn('slow', function(){
        if (activity === true) {
            $j('#overlayz').activity({
                segments: 10,
                steps: 3,
                width:5,
                space: 3,
                length:5,
                color: spinnerColor
            });
        }
    });
    return $j('.overlayz');
};

var smoothScrollTo = function(elementId) {
    $j('html,body').animate({
        scrollTop: $j("#" + elementId).offset().top
    },'slow');
    return false;
};

var selectFrenchRegionByPostCode = function(addressType, countrySelector, regionSelector, postCodeInput) {
    var postCodeValue = postCodeInput.val();
    if (postCodeValue.length >= 2 && countrySelector.val() === 'FR') {
        var subPostCode = postCodeValue.substr(0, 2);
        if (subPostCode === '20') {
            if (postCodeValue.substr(0, 3) === '202') {
                subPostCode = '02B';
            }
            else {
                subPostCode = '02A';
            }
        }

        var regionsOptions = regionSelector.find('option');
        regionsOptions.each(function(){
            if ($j(this).attr('id') === addressType + '_' + subPostCode) {
                $j('#' + $j(this).attr('id')).attr('selected', 'selected');
                if (typeof $j.uniform !== 'undefined') {
                    $j.uniform.update('select.uniform_me');
                }

                return;
            }
        });
    }
};

var setDOB = function(day, month, year, hidden) {
    var dayValue = day.val();
    var monthValue = month.val();
    var yearValue = year.val();
    hidden.val(dayValue + '-' + monthValue + '-' + yearValue);
    try{
        $j.uniform.update("select");
    }
    catch(e){
        console.log(e);
    }
};

var urldecode = function (url) {
    return decodeURIComponent((url + '').replace(/\+/g, '%20'));
}

var stripslashes = function (str) {
    return (str + '').replace(/\\(.?)/g, function (s, n1) {
        switch (n1) {
        case '\\':
            return '\\';
        case '0':
            return '\u0000';
        case '':
            return '';
        default:
            return n1;
        }
    });
}

function str_replace (search, replace, subject, count) {
    var i = 0,
    j = 0,
    temp = '',
    repl = '',
    sl = 0,        fl = 0,
    f = [].concat(search),
    r = [].concat(replace),
    s = subject,
    ra = Object.prototype.toString.call(r) === '[object Array]',        sa = Object.prototype.toString.call(s) === '[object Array]';
    s = [].concat(s);
    if (count) {
        this.window[count] = 0;
    }
    for (i = 0, sl = s.length; i < sl; i++) {
        if (s[i] === '') {
            continue;
        }
        for (j = 0, fl = f.length; j < fl; j++) {
            temp = s[i] + '';
            repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
            s[i] = (temp).split(f[j]).join(repl);
            if (count && s[i] !== temp) {
                this.window[count] += (temp.length - s[i].length) / f[j].length;
            }
        }
    }
    return sa ? s : s[0];
}

function nl2br (str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}

var addThousandSeparator = function (nStr) {
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ' ' + '$2');
    }
    return x1 + x2;
}

String.prototype.normalizeChars = function() {
    var specialCharactersMap = {
    	'â':'a', 'ä':'a', 'à':'a', 'Â':'A', 'Ä':'A', 'À':'A',
    	'é':'e', 'è':'e', 'ê':'e', 'ë':'e', 'É':'E', 'È':'E', 'Ë':'E', 'Ê':'E',
    	'î':'i', 'ï':'i', 'ì':'i', 'Î':'I', 'Ï':'I', 'Ì':'I',
    	'ô':'o', 'ö':'o', 'ò':'o', 'Ô':'O', 'Ö':'O', 'Ò':'O',
    	'ù':'u', 'ü':'u', 'û':'u', 'Ù':'U', 'Û':'U', 'Ü':'U',
    	'ñ':'n', 'Ñ':'N',
    	'ç':'c', 'Ç':'C'
    };

    var str = "";
    for ( var i = 0; i < this.length; i++ ) {
		str += specialCharactersMap[ this.charAt(i) ] || this.charAt(i);
	}
	return str;
}

String.prototype.uberClean = function() {
    var str = this.trim().normalizeChars().toLowerCase();
    str = str.replace(/[^a-z0-9]/gi, '');
    return str;
}

function addSpecialCharsToRegex(rgx) {
    var specialCharactersMap = {
    	'a':'[aâäà]', 'A':'[AÂÄÀ]',
    	'e':'[eéèêë]', 'E': '[EÉÈËÊ]',
    	'i':'[iîïì]', 'I': '[IÎÏÌ]',
    	'o':'[oôöò]', 'O':'[OÔÖÒ]',
    	'u':'[uùüû]', 'U':'[UÙÛÜ]',
    	'n':'[nñ]', 'N':'[NÑ]',
    	'c':'[cç]', 'C':'[CÇ]'
    };

    var str = "";
    for ( var i = 0; i < rgx.length; i++ ) {
		str += specialCharactersMap[ rgx.charAt(i) ] || rgx.charAt(i);
	}
	return str;
}


 /* Background aleatoire
       ----------------------- */
function aleaBg() {

    var classBg = 'alea-bg-';
    maxBgNb = colette_vars.bgImages.length - 1,
    oldBgNb = 0,
    currentBgNb = Math.floor((Math.random()*maxBgNb)+1); //parseInt(jquerySelHTML.data('nb-bgimg'),10);


    if(isNaN(currentBgNb)){
        currentBgNb = 0;
    }
    else {
        oldBgNb = currentBgNb;
        currentBgNb++;
        if(currentBgNb > maxBgNb){
            currentBgNb = 0;
        }
    }

    jQuery('<img src="'+colette_vars.bgImages[currentBgNb]+'" alt="" />').load(function(){
        jquerySelHTML
        .data('nb-bgimg',currentBgNb)
        .addClass(classBg + currentBgNb)
        .removeClass(classBg + oldBgNb);
    });


}

var initProduct = function() {};

// Checkout sticky cart
function clrzStickyCart(){
    var cart = jQuery('#js-checkout-cart-v2');
    if(!cart.length) return;

    var breakpoint = 0,
        cartIsFixed = false;

    window.scrollBase.on('scroll', function(e) {

        var cartOffset = cart.offset(),
            scrollTop = window.scrollBase.scrollTop();

        // Fix cart
        if(!cartIsFixed && cartOffset.top <= 30) {
            if(breakpoint === 0)
                breakpoint = scrollTop;
            cart.css({
                'position': 'fixed',
                'top': 30,
                'left': cartOffset.left,
                'margin-left': 0
            });
            cartIsFixed = true;
        }

        // Unfix cart
        if(cartIsFixed && scrollTop < breakpoint) {
            cart.css({
                'position': 'relative',
                'top': 'auto',
                'left': 'auto',
                'margin-left': 20
            });
            cartIsFixed = false;
        }

    });
}