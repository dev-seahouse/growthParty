<!doctype html>

<html class="no-js" lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png"/>
  <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196"/>
  <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96"/>
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32"/>
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16"/>
  <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128"/>
  <link rel="icon" href="/favicon.ico">
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF"/>
  <meta name="msapplication-TileImage" content="mstile-144x144.png"/>
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png"/>
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png"/>
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png"/>
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png"/>

  <!-- CSRF Token -->
  <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  
  <title>
    @section('title') {{ config('app.name', 'Help business grow - growth party') }} @show
  </title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- csrf script -->
  <script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
  </script>
  <script>
    /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
    (function(w){
      "use strict";
      /* exported loadCSS */
      var loadCSS = function( href, before, media ){
        // Arguments explained:
        // `href` [REQUIRED] is the URL for your CSS file.
        // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
        // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
        // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
        var doc = w.document;
        var ss = doc.createElement( "link" );
        var ref;
        if( before ){
          ref = before;
        }
        else {
          var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
          ref = refs[ refs.length - 1];
        }
      
        var sheets = doc.styleSheets;
        ss.rel = "stylesheet";
        ss.href = href;
        // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
        ss.media = "only x";
      
        // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
        function ready( cb ){
          if( doc.body ){
            return cb();
          }
          setTimeout(function(){
            ready( cb );
          });
        }
        // Inject link
        // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
        // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
        ready( function(){
          ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
        });
        // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
        var onloadcssdefined = function( cb ){
          var resolvedHref = ss.href;
          var i = sheets.length;
          while( i-- ){
            if( sheets[ i ].href === resolvedHref ){
              return cb();
            }
          }
          setTimeout(function() {
            onloadcssdefined( cb );
          });
        };
      
        function loadCB(){
          if( ss.addEventListener ){
            ss.removeEventListener( "load", loadCB );
          }
          ss.media = media || "all";
        }
      
        // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
        if( ss.addEventListener ){
          ss.addEventListener( "load", loadCB);
        }
        ss.onloadcssdefined = onloadcssdefined;
        onloadcssdefined( loadCB );
        return ss;
      };
      // commonjs
      if( typeof exports !== "undefined" ){
        exports.loadCSS = loadCSS;
      }
      else {
        w.loadCSS = loadCSS;
      }
    }( typeof global !== "undefined" ? global : this ));
    /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
    (function( w ){
      // rel=preload support test
      if( !w.loadCSS ){
        return;
      }
      var rp = loadCSS.relpreload = {};
      rp.support = function(){
        try {
          return w.document.createElement( "link" ).relList.supports( "preload" );
        } catch (e) {
          return false;
        }
      };
  
      // loop preload links and fetch using loadCSS
      rp.poly = function(){
        var links = w.document.getElementsByTagName( "link" );
        for( var i = 0; i < links.length; i++ ){
          var link = links[ i ];
          if( link.rel === "preload" && link.getAttribute( "as" ) === "style" ){
            w.loadCSS( link.href, link, link.getAttribute( "media" ) );
            link.rel = null;
          }
        }
      };
  
      // if link[rel=preload] is not supported, we must fetch the CSS manually using loadCSS
      if( !rp.support() ){
        rp.poly();
        var run = w.setInterval( rp.poly, 300 );
        if( w.addEventListener ){
          w.addEventListener( "load", function(){
            rp.poly();
            w.clearInterval( run );
          } );
        }
        if( w.attachEvent ){
          w.attachEvent( "onload", function(){
            w.clearInterval( run );
          } )
        }
      }
    }( this ));

  </script>

</head>

<body>
<!-- we insert these comment for the purpose of aid debugging -->
<div id="app">
  <!----------    Navigation  ---------->
  @yield('nav')
  <!----------     Header     ---------->
  @yield('header')
  <!----------  Main Content  ---------->
  @yield('content')
  <!----------     footer  ------------>
  @include('layouts.footer')
</div>

<link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stack('page_styles')

<script>
  var _token = '{!! Session::token() !!}'
  var _url = '{!! url("/") !!}'
</script>

<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js')}}"></script>
<script src="{{ mix('/js/app.js') }}"></script>
@stack('page_scripts')

<!-- Analytics -->
<script src="{{mix('js/analytics.js')}}" async defer></script>
<!-- Hotjar script loader for growthparty.co need to be placed inline-->
<script async defer>
  (function (h, o, t, j, a, r) {
    h.hj = h.hj || function () {(h.hj.q = h.hj.q || []).push(arguments)}
    h._hjSettings = {hjid: 533964, hjsv: 5}
    a = o.getElementsByTagName('head')[0]
    r = o.createElement('script')
    r.async = 1
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv
    a.appendChild(r)
  })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=')
</script>
</body>
</html>
