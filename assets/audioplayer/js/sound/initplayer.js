inlineplayerinited = false;
playerpopup = false;

if(!getCookie('clrz_player_paused')){
    
   inlineplayerinited = true; 
}

function InlinePlayer() {
    var self = this;
    var pl = this;
    var sm = soundManager; // soundManager instance
    var isIE = (navigator.userAgent.match(/msie/i));
    this.playableClass = 'inline-playable'; // CSS class for forcing a link to be playable (eg. doesn't have .MP3 in it)
    this.excludeClass = 'inline-exclude'; // CSS class for ignoring MP3 links
    this.links = [];
    this.sounds = [];
    this.soundsByURL = [];
    this.indexByURL = [];
    this.lastSound = null;
    this.soundCount = 0;
    
    this.config = {
        playNext: true, // stop after one sound, or play through list until end
        autoPlay: false  // start playing the first sound right away
    }
    
    this.css = {
        // CSS class names appended to link during various states
        sDefault: 'clrzsound_link', // default state
        sLoading: 'clrzsound_loading',
        sPlaying: 'clrzsound_playing',
        sPaused: 'clrzsound_paused',
        sPlayer: '.side-audio-player',
        sTimeline:'.status .actual',
        sTimelinecontainer:'.status'
    }
    
    this.addEventHandler = (typeof window.addEventListener !== 'undefined' ? function(o, evtName, evtHandler) {
        return o.addEventListener(evtName,evtHandler,false);
    } : function(o, evtName, evtHandler) {
        o.attachEvent('on'+evtName,evtHandler);
    });
    
    this.removeEventHandler = (typeof window.removeEventListener !== 'undefined' ? function(o, evtName, evtHandler) {
        return o.removeEventListener(evtName,evtHandler,false);
    } : function(o, evtName, evtHandler) {
        return o.detachEvent('on'+evtName,evtHandler);
    });
    
    this.classContains = function(o,cStr) {
        return (typeof(o.className)!='undefined'?o.className.match(new RegExp('(\\s|^)'+cStr+'(\\s|$)')):false);
    }
    
    this.addClass = function(o,cStr) {
        if (!o || !cStr || self.classContains(o,cStr)) return false;
        o.className = (o.className?o.className+' ':'')+cStr;
    }
    
    this.removeClass = function(o,cStr) {
        if (!o || !cStr || !self.classContains(o,cStr)) return false;
        o.className = o.className.replace(new RegExp('( '+cStr+')|('+cStr+')','g'),'');
    }
    
    this.getSoundByURL = function(sURL) {
        return (typeof self.soundsByURL[sURL] != 'undefined'?self.soundsByURL[sURL]:null);
    }
    
    this.isChildOfNode = function(o,sNodeName) {
        if (!o || !o.parentNode) {
            return false;
        }
        sNodeName = sNodeName.toLowerCase();
        do {
            o = o.parentNode;
        } while (o && o.parentNode && o.nodeName.toLowerCase() != sNodeName);
        return (o.nodeName.toLowerCase() == sNodeName?o:null);
    }
    
    this.displayInit = function(el){
        
        var elt = jQuery(el);
                 
        var track_artist  = (elt.attr('data-track-artist')) ? elt.attr('data-track-artist') : '-';
        var track_title  = (elt.attr('data-track-title')) ? elt.attr('data-track-title') : elt.html();
        var track_image  = (elt.attr('data-track-image')) ? elt.attr('data-track-image') : '';
        var track_url  = (elt.attr('data-track-url')) ? elt.attr('data-track-url') : '#';
            
        jQuery(pl.css.sPlayer+' .title-info .artist').html(track_artist);
        jQuery(pl.css.sPlayer+' .title-info .songname').html(track_title);
        jQuery(pl.css.sPlayer+' .pochette img').attr('src',track_image);
        jQuery(pl.css.sPlayer+' a.player-info').attr('href',track_url);
       
    }
    
    this.updateTitle = function(){

        var jPlayer = jQuery(pl.css.sPlayer),
            track_artist = jPlayer.find('.title-info .artist').text(),
            track_title = jPlayer.find('.title-info .songname').text();

        if(jquerySelBODY.hasClass('clrz-mp3-player-index')){
            var new_title = '';
            if(jPlayer.hasClass('buffering') || jPlayer.hasClass('playing')){
                new_title = '▶';
            }
            new_title += ' ' + track_artist + ' - ' + track_title;
            document.title = new_title;
        }
        
        jQuery('.le_btn.play').attr('title','▶ '+ track_artist + ' - ' + track_title);
        
    };

    this.events = {
        
        // handlers for sound events as they're started/stopped/played
        
        play: function() {
            
            if (playerpopup && !playerpopup.closed){
                
                playerpopup.soundControls.pause();
                
            }
            jQuery(pl.css.sPlayer).addClass('buffering');          
            
            pl.displayInit(this._data.oLink);
            
            pl.removeClass(this._data.oLink,this._data.className);
            this._data.className = pl.css.sPlaying;
            pl.addClass(this._data.oLink,this._data.className);
            pl.updateTitle();
            jQuery(this._data.oLink).parent('.inner-pp li').attr('class',this._data.className.replace('clrzsound_',''));
        },
        
        stop: function() {
            pl.removeClass(this._data.oLink,this._data.className);
            this._data.className = '';
            jQuery(this._data.oLink).parent('.inner-pp li').attr('class',this._data.className.replace('clrzsound_',''));
        },
        
        pause: function() {
            
            if (playerpopup && !playerpopup.closed){
                
                playerpopup.soundControls.play();
                
            }
            
            pl.removeClass(this._data.oLink,this._data.className);
            this._data.className = pl.css.sPaused;
            pl.addClass(this._data.oLink,this._data.className);
            
            jQuery(pl.css.sPlayer).removeClass('playing').addClass('pausing');
            
            setCookie('clrz_player_paused', 'pausing');
            pl.updateTitle();
           jQuery(this._data.oLink).parent('.inner-pp li').attr('class',this._data.className.replace('clrzsound_',''));
        },
        
        resume: function() {
            pl.removeClass(this._data.oLink,this._data.className);
            this._data.className = pl.css.sPlaying;
            
            pl.addClass(this._data.oLink,this._data.className);   
            pl.updateTitle();
            jQuery(this._data.oLink).parent('.inner-pp li').attr('class',this._data.className.replace('clrzsound_',''));
        },
        
        finish: function() {
	      
            pl.removeClass(this._data.oLink,this._data.className);
            this._data.className = '';
            if (pl.config.playNext) {
                var nextLink = (pl.indexByURL[this._data.oLink.href]+1);
                if (nextLink<pl.links.length) {
	                
	                
                    jQuery(this._data.oLink).parent('.inner-pp li').attr('class',this._data.className.replace('clrzsound_',''));
                    jQuery(this._data.oLink).parent('.inner-pp li').removeClass('playing');
           			
                    pl.handleClick({
                        'target':pl.links[nextLink]
                        });
                }
            }
           
           
            jQuery(pl.css.sPlayer).removeClass('playing').addClass('pausing');
            jQuery(this._data.oLink).parent('.inner-pp li').attr('class',this._data.className.replace('clrzsound_',''));
            jQuery(this._data.oLink).parent('.inner-pp li').removeClass('playing');
            pl.updateTitle();
        },
        
        whileloading:function(){
          
        },
        load: function(success) {
           
         
            
            if(!success){
                
                
                
                jQuery(pl.css.sPlayer).addClass('buffering').removeClass('loaded');
                return;
            }
            
            jQuery(window).trigger('soundloaded');
            jQuery(pl.css.sPlayer).addClass('loaded').removeClass('buffering');
            pl.updateTitle();
        
        
        },
        
    
        
        whileplaying: function (){
            
            
            
            if(this.paused){
                setCookie('clrz_player_paused', 'pausing');
                jQuery(pl.css.sPlayer).removeClass('playing').addClass('pausing');
            }else{
                setCookie('clrz_player_paused', '');
                jQuery(pl.css.sPlayer).removeClass('pausing').addClass('playing');
            }
            
            pl.updateTitle();

            var pos = this.position;
            var dur = this.duration;
            
            var percent = ((pos/dur)*100);
            
            jQuery(pl.css.sTimeline).css({
                'width':percent+'%'
            });
        }
    
    }
    
    this.mstomin = function(duration){
        var retour = '';
        var nb_sec = Math.floor(duration/1000);
        var nb_min_brut = Math.floor(nb_sec/60);
        var nb_sec_brut = nb_sec - (nb_min_brut*60);
        if(nb_sec_brut < 10){
            nb_sec_brut = '0'+nb_sec_brut;
        }
        retour = nb_min_brut+'.'+nb_sec_brut;
        return retour;
    }  
    
    this.stopEvent = function(e) {
        if (typeof e != 'undefined' && typeof e.preventDefault != 'undefined') {
            e.preventDefault();
        } 
//        else if (typeof event != 'undefined' && typeof event.returnValue != 'undefined') {
//            event.returnValue = false;
//        }
        return false;
    }
    
    this.getTheDamnLink = (isIE)?function(e) {
        // I really didn't want to have to do this.
        return (e && e.target?e.target:window.event.srcElement);
    }:function(e) {
        return e.target;
    }
    
    this.handleClick = function(e) {
        // a sound link was clicked
        if (typeof e.button != 'undefined' && e.button>1) {
            // ignore right-click
            return true;
        }
        var o = self.getTheDamnLink(e);
        if (o.nodeName.toLowerCase() != 'a') {
            o = self.isChildOfNode(o,'a');
            if (!o) return true;
        }
        var sURL = o.getAttribute('href');
        if (!o.href || (!sm.canPlayLink(o) && !self.classContains(o,self.playableClass)) || self.classContains(o,self.excludeClass)) {
            return true; // pass-thru for non-MP3/non-links
        }
        var soundURL = (o.href);
        var thisSound = self.getSoundByURL(soundURL);
        if (thisSound) {
            // already exists
            if (thisSound == self.lastSound) {
                // and was playing (or paused)
                thisSound.togglePause();
            } else {
                // different sound
                sm._writeDebug('sound different than last sound: '+self.lastSound.id);
                if (self.lastSound) {
                    self.stopSound(self.lastSound);
                }
                thisSound.togglePause(); // start playing current
            }
        } else {
            // stop last sound
            if (self.lastSound) {
                self.stopSound(self.lastSound);
            }
            // create sound
            thisSound = sm.createSound({
                id:'inlineMP3Sound'+(self.soundCount++),
                url:soundURL,
                onplay:self.events.play,
                onstop:self.events.stop,
                onpause:self.events.pause,
                onresume:self.events.resume,
                onfinish:self.events.finish,
                onload:self.events.load,
                whileplaying:self.events.whileplaying,
                whileloading:self.events.whileloading,
                type:(o.type||null)
            });
            // tack on some custom data
            thisSound._data = {
                oLink: o, // DOM node for reference within SM2 object event handlers
                className: self.css.sPlaying
            };
            self.soundsByURL[soundURL] = thisSound;
            self.sounds.push(thisSound);
            if(inlineplayerinited){
                thisSound.play();
            } 
 
        }
        
        self.lastSound = thisSound; // reference for next call
        if (typeof e != 'undefined' && typeof e.preventDefault != 'undefined') {
            e.preventDefault();
            
        } 
//        else if (typeof event != 'undefined' && typeof event.returnValue != 'undefined') {
//            event.returnValue = false;
//        }
        return false;
    }
    
    this.stopSound = function(oSound) {
        soundManager.stop(oSound.id);
        soundManager.unload(oSound.id);
    }
    
    this.init = function() {
        sm._writeDebug('inlinePlayer.init()');
        var oLinks = jQuery(this.css.sPlayer+' a');
       
        // grab all links, look for .mp3
        var foundItems = 0;
        for (var i=0, j=oLinks.length; i<j; i++) {
            if ((sm.canPlayLink(oLinks[i]) || self.classContains(oLinks[i],self.playableClass)) && !self.classContains(oLinks[i],self.excludeClass)) {
                self.addClass(oLinks[i],self.css.sDefault); // add default CSS decoration
                self.links[foundItems] = (oLinks[i]);
                self.indexByURL[oLinks[i].href] = foundItems; // hack for indexing
                foundItems++;
            }
        }
        if (foundItems>0) {
            self.addEventHandler(document,'click',self.handleClick);
            if (self.config.autoPlay) {
                self.handleClick({
                    target:self.links[0],
                    preventDefault:function(){}
                });
        }
    }
    sm._writeDebug('inlinePlayer.init(): Found '+foundItems+' relevant items.');
}




this.init();

}

var inlinePlayer = null;

soundManager.setup({
  // disable or enable debug output
  debugMode: false,
  // use HTML5 audio for MP3/MP4, if available
  preferFlash: false,
  useFlashBlock: true,
  // path to directory containing SM2 SWF
  url: '/skin/frontend/colorz/default/js/sound/swf/',
  // optional: enable MPEG-4/AAC support (requires flash 9)
  flashVersion: 9
});

/**
 * soundControls
 */
function soundControls() {
    
    
    this.launch = function(el){
        
        inlinePlayer.handleClick({
            target:el,
            preventDefault:function(){}
        });
    }
    
    this.play = function(){
        
        if (playerpopup && !playerpopup.closed){
            var player = jQuery(jQuery(playerpopup.document).find('.side-audio-player').first());
            playerpopup.focus();
            if(!player.hasClass('playing')){
                player.find('.player-core .le_btn.play').trigger('click');
            }
            return;
        }
        
        if(inlinePlayer.lastSound.paused || inlinePlayer.lastSound.bytesTotal==null){
                    inlinePlayer.lastSound.play();

        }else{
            inlinePlayer.lastSound.pause();
            
        }
    }
    
    this.pause = function(){
        if (playerpopup && !playerpopup.closed){
            jQuery(playerpopup.document).find('.player-core .le_btn.play').trigger('click');
            return;
        }
        
        inlinePlayer.lastSound.pause();
    }
    
    
    this.next = function(){
        
        if (playerpopup && !playerpopup.closed){
            var player = jQuery(jQuery(playerpopup.document).find('.side-audio-player').first());
            playerpopup.focus();
            player.find('.player-core .le_btn.next').trigger('click');
            return;
        }
        
        jQuery(inlinePlayer.css.sTimeline).css({
            'width':'0%'
        });
        if(!this.getCurrentTrack()) 
            this.play();
               
        var ind =  jQuery('.'+inlinePlayer.css.sDefault).index(this.getCurrentTrack());
       
        var nextLink = ind + 1;
        
        if (nextLink<inlinePlayer.links.length) {
            this.launch(jQuery('.'+inlinePlayer.css.sDefault)[nextLink]);
        }else{
             this.launch(jQuery('.'+inlinePlayer.css.sDefault)[0]);
        }
    
    }
    
    this.prev = function(){
        
        if (playerpopup && !playerpopup.closed){
            var player = jQuery(jQuery(playerpopup.document).find('.side-audio-player').first());
            playerpopup.focus();
            player.find('.player-core .le_btn.prev').trigger('click');
            return;
        }
        
         jQuery(inlinePlayer.css.sTimeline).css({
            'width':'0%'
        });
        if(!this.getCurrentTrack()) 
            this.play();
        
        var ind =  jQuery('.'+inlinePlayer.css.sDefault).index(this.getCurrentTrack());
        var nextLink = ind - 1;
        if (nextLink<0) {
            this.launch(jQuery('.'+inlinePlayer.css.sDefault)[inlinePlayer.links.length-1]);
        }else{
            
            this.launch(jQuery('.'+inlinePlayer.css.sDefault).get(nextLink));
        }
    
    }
    
    this.setPosition = function(){
    
    
    }
    
    
    this.getCurrentTrack = function(){
        
        return jQuery('.'+inlinePlayer.css.sPlaying+',.'+inlinePlayer.css.sPaused+',.'+inlinePlayer.css.sLoading)[0];
    }

} 
 
 
 /**
 * ini_mainContentLinks
 */
function init_mainContentLinks() {


     jQuery('#main a[href$=mp3]').click(function(e){
       e.stopPropagation();
       e.preventDefault();
       inlinePlayer.handleClick(e);


   });

}

var soundControls = new soundControls();

jQuery(window).bind('ajaxready',function(){


   init_mainContentLinks();


});


soundManager.onready(function() {

    inlinePlayer = new InlinePlayer();

    init_mainContentLinks();
    
    
     /* init player display ready to play (launch play and pause) */
    var playlistitems = jQuery('.'+inlinePlayer.css.sDefault);
    var randomItem = playlistitems[Math.floor(Math.random()*playlistitems.length)];
    
    /* click play() not inited */ 
    inlinePlayer.handleClick({
        target:randomItem,
        preventDefault:function(){}
    });

    inlinePlayer.displayInit(randomItem);
    /* player inited */
    inlineplayerinited = true;
    
    jQuery('.player-core .le_btn').click(function() {
        var jQthis = jQuery(this);

     if(jQuery(inlinePlayer.css.sPlayer).hasClass('buffering') && jQuery(inlinePlayer.css.sPlayer).hasClass('playing')){
         soundControls.pause();
         return;
     }   

     if(jQthis.hasClass('play')) {
         soundControls.play();

     }

     if(jQthis.hasClass('pause')) {
         soundControls.play();
     }

     if(jQthis.hasClass('prev')) {

         soundControls.prev();
     }

     if(jQthis.hasClass('next')) {
         soundControls.next();

     }

     if(jQthis.hasClass('export')) {
         if(jQuery('.player-core').hasClass('playing')) {
             soundControls.play();
         }
         jquerySelHTML.removeClass('playlist-open');
         soundControls.pause();
         if (playerpopup && !playerpopup.closed){
             playerpopup.focus();
         }else{
            playerpopup = window.open(jQthis.data('href')+'?position='+inlinePlayer.lastSound.position+'&track='+inlinePlayer.lastSound.url, 'player', 'directories=0,height=400,width=300,resizable=0,status=0,toolbar=0,scrollbars=yes');
         }
     }

 });
 
 
 
    
        
    jQuery('.player-core').click(function() {
        if(jquerySelHTML.hasClass('lt_ie9') && !jquerySelBODY.hasClass('clrz-mp3-player-index')){
            if (!playerpopup || playerpopup.closed){
                jQuery('.player-core .le_btn.export').trigger('click');
                return false;
            }
        }
    });
 


    jQuery(inlinePlayer.css.sTimelinecontainer).click(function(e){


        var parentOffset = jQuery(this).offset();
        var pos = e.pageX - parentOffset.left;

        var dur = jQuery(this).width();
        var percent = ((pos/dur)*100);
        var duration = inlinePlayer.lastSound.duration;
        soundManager.setPosition(inlinePlayer.lastSound.id,(duration*percent)/100);

    });
    jQuery(window).trigger('soundready');
});

