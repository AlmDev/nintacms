/*
* jQuery Cookie Law Script - Cookie Info
* Copyright 2013 Daniel Paul
* www.danielpaul.me
* http://danielpaul.me/projects/cookieinfo/
*
* Cookie Info : http://codecanyon.net/user/DanielPaul?ref=DanielPaul
*
* Version 1.1   -   Last Updated: June 19, 2013
*
* Licence: http://codecanyon.net/wiki/support/legal-terms/licensing-terms/
*
*/


// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

    // Create the defaults once
    var pluginName = "cookieInfo",
        defaults = {
            defaultText:  "Nós usamos cookies para melhorar a sua experiência no nosso site. Ao navegar neste site, você concorda com a nossa utilização de cookies.",
            okButton:     "Fechar",         // Accept button text

            displayMore:  true,         // display more information?
            moreButton:   "Ler mais",  // More button text
            moreInfo:     "Cookies são pequenos arquivos de texto realizada em seu computador. Alguns cookies são necessários para garantir que as funções do site corretamente, por essa razão, pode já ter definido alguns cookies. Eles também nos permitem dar-lhe a melhor experiência de navegação possível e ajudar-nos a entender como você usa o nosso site.",
            moreURL:      "",           // link user to a URL on clicking more info

            location:     "bottom",     // top or bottom?
            makeSpace:    false,        // push content so cookie info bar does not appear over anything?
            spaceMargin:  "34px",       // By how much to push content
            speedIn:      500,          // slide in speed
            speedOut:     400,          // slide out speed
            delay:        1000,         // time to appear after page load
            float:        true,         // keep it sticky?

            style:        "dark",       // light or dark colour

            cookieExpiry: 1,           // won't appear again for 90 days
            cookieName:   "CookieInfo", // cookie's name to detect if user has accepted

            ok: function(){}            // function to activate when user clicks on ok

        };

    // The actual plugin constructor
    function Plugin( options ) {
        this.options = $.extend( {}, defaults, options );

        // Stop the script execution early if it is not going to be showed
        if(!document.cookie.indexOf(this.options.cookieName)){
          return false;
        }

        this._defaults = defaults;
        this._name = pluginName;

        this.create(); // create the HTML output
    }

    Plugin.prototype.create = function() {

      if(this.options.displayMore && this.options.moreURL == ""){
        var cookieInfoMore = '<div id="cookie-law-more-info"><div id="cookie-law-info-container"><a id="cookie-law-more-text-close" href="#">X</a><div id="cookie-law-more-text">' + this.options.moreInfo +'</div><div style="clear:both;"></div></div></div>';
        var moreButton = '<a class="cookie-law-button" id="cookie-law-button-more" href="#cookie-law-more-info">' + this.options.moreButton + '</a>';
      } else if(this.options.moreURL) {
        var cookieInfoMore = '';
        var moreButton = '<a class="cookie-law-button" id="cookie-law-button-more" href="'+ this.options.moreURL +'">' + this.options.moreButton + '</a>';
      } else {
        var cookieInfoMore = '';
        var moreButton = '';
      }

      var cookieInfoMain = '<div id="cookie-law-container-box"><div id="cookie-law-container"><div id="cookie-law-message">' + this.options.defaultText + '</div><div id="cookie-law-action" style="float:right;"><a class="cookie-law-button" id="cookie-law-button-ok" href="#">' + this.options.okButton + '</a>' + moreButton + '</div><div style="clear:both;"></div></div></div>';

      /* ----- Absolute or Fixed? ----- */
      if(!this.options.float && this.options.location == "top"){
        var position = "absolute";
      } else {
        var position = "fixed";
      }

      /* ----- Top or Bottom? ----- */
      if(this.options.makeSpace && this.options.location == "top"){
        $("body").css("margin-top",this.options.spaceMargin);
      } else if(this.options.makeSpace) {
        $("body").css("margin-bottom",this.options.spaceMargin);
      }

      // Append the HTML to the webpage
      $("body").append('<div id="jquery-cookie-law-script" class="' + this.options.style +' ' + this.options.location + ' ' + position + '">'+ cookieInfoMore + cookieInfoMain + '</div>');

      this.action(); // Interaction functions

    };

    Plugin.prototype.action = function() {

      var options = this.options;

      $("#cookie-law-button-ok").click(function(e) {
        e.preventDefault();

        // set cookie to hide CookieInfo so the user does not see it again for a set period of time
        document.cookie = options.cookieName + "=accepted;path=/;max-age=" + 60 * 60 * 24 * options.cookieExpiry; // multiply to get days

        $("#jquery-cookie-law-script").slideUp(options.speedOut);

        options.ok.call(options); // run custom function when use accepts the notification
      });

      if(!options.moreURL){
        $("#cookie-law-button-more").click(function(e) {
          e.preventDefault();
          $("#jquery-cookie-law-script #cookie-law-more-info").slideToggle(options.speedIn);
        });
      }

      $("#cookie-law-more-text-close").click(function(e) {
        e.preventDefault();
        $("#jquery-cookie-law-script #cookie-law-more-info").slideUp(options.speedOut);
      });

      // read cookie value
      function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
      }

      // Only run if user has not accepted the notice before
      if(getCookie(options.cookieName) != "accepted"){ // double check
        $("#jquery-cookie-law-script").delay(options.delay).slideDown(options.speedIn);
      }

    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function ( options ) {
      new Plugin( options );
    };

})( jQuery, window, document );

/*
* CookieInfo
* Copyright 2013 Daniel Paul
* www.danielpaul.me
* http://danielpaul.me/projects/cookieinfo/
* http://codecanyon.net/user/DanielPaul
*/