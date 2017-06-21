<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <!-- fav icons -->
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
  <!-- end fav icons -->
  <!-- CSRF Token -->
  <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  
  <title>
    @section('title') {{ config('app.name', 'Help business grow - growth party') }} @show
  </title>
  
  <!-- page specific styles -->

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- csrf script -->
  <script async>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
  </script>

</head>

<body>
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stack('page_styles')
<div id="app">
  <!-- navigation bar -->
   @yield('nav')
  <!-- end navigation bar -->
  
  <!-- header content, e.g jumpbotron , slider -->
  @yield('header')
  <!-- end header -->
  
  <!-- main content -->
  @yield('content')
  <!-- end main content -->
  @include('layouts.footer')
</div>
<!-- webpack runtime -->
<script src="{{ mix('/js/manifest.js') }}"></script>
<!-- vendor libraries -->
<script src="{{ mix('/js/vendor.js')}}"></script>
<script src="{{ mix('/js/foundation.js') }}"></script>
<!-- application wide script -->
<script>
  var _token = '{!! Session::token() !!}'
  var _url = '{!! url("/") !!}'
</script>
<script src="{{ mix('/js/app.js') }}" defer></script>

<!-- page js libs/scripts -->
@stack('page_scripts')
<!-- Hotjar Tracking Code for growthparty.co -->
<script async>
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
<!-- Google analytics Tracking Code for growthparty.co -->
<script async>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date()
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]
    a.async = 1
    a.src = g
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga')
  
  ga('create', 'UA-32995284-5', 'auto')
  ga('send', 'pageview')

</script>

<!— Start of HubSpot Embed Code —>
<script async>
  // HubSpot Script Loader. Please do not block this resource. See more: http://hubs.ly/H0702_H0
  function loadForm () {
    (function (id, src, attrs) {
      if (document.getElementById(id)) { return }
      var js = document.createElement('script')
      js.src = src
      js.type = 'text/javascript'
      js.id = id
      for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
      var e = document.getElementsByTagName('script')[0]
      e.parentNode.insertBefore(js, e)
    })('CollectedForms-3327713', 'https://js.hscollectedforms.net/collectedforms.js', {
      'crossorigin': 'anonymous',
      'data-leadin-portal-id': 3327713,
      'data-leadin-env': 'prod',
      'data-loader': 'hs-scriptloader'
    });
    
    (function (id, src, attrs) {
      if (document.getElementById(id)) { return }
      var js = document.createElement('script')
      js.src = src
      js.type = 'text/javascript'
      js.id = id
      for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
      var e = document.getElementsByTagName('script')[0]
      e.parentNode.insertBefore(js, e)
    })('messages-3327713', 'https://api.usemessages.com/messages/v2/embed/3327713.js', {'data-loader': 'hs-scriptloader'});
    
    (function (id, src, attrs) {
      if (document.getElementById(id)) { return }
      var js = document.createElement('script')
      js.src = src
      js.type = 'text/javascript'
      js.id = id
      for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
      var e = document.getElementsByTagName('script')[0]
      e.parentNode.insertBefore(js, e)
    })('LeadFlows-3327713', 'https://js.hsleadflows.net/leadflows.js', {
      'crossorigin': 'anonymous',
      'data-leadin-portal-id': 3327713,
      'data-leadin-env': 'prod',
      'data-loader': 'hs-scriptloader'
    });
    
    (function (id, src, attrs) {
      if (document.getElementById(id)) { return }
      var js = document.createElement('script')
      js.src = src
      js.type = 'text/javascript'
      js.id = id
      for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
      var e = document.getElementsByTagName('script')[0]
      e.parentNode.insertBefore(js, e)
    })('hs-analytics', '//js.hs-analytics.net/analytics/1496247900000/3327713.js', {'data-loader': 'hs-scriptloader'})
  }
  
  loadForm()
  
  function delete_cookie (name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;'
  }
  
  window.onbeforeunload = function () {
    delete_cookie('__hstc')
    delete_cookie('__hssc')
    delete_cookie('hubspotutk')
    delete_cookie('__hssrc')
    localStorage.clear()
  }

</script>
<!— End of HubSpot Embed Code —>

<!--facebook analytics--->
<script async>
  window.fbAsyncInit = function () {
    FB.init({
      appId: '756709494453863',
      xfbml: true,
      version: 'v2.8'
    })
    FB.AppEvents.logPageView()
  };
  
  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0]
    if (d.getElementById(id)) {return}
    js = d.createElement(s)
    js.id = id
    js.src = '//connect.facebook.net/en_US/sdk.js'
    fjs.parentNode.insertBefore(js, fjs)
  }(document, 'script', 'facebook-jssdk'))
</script>
</body>
</html>
