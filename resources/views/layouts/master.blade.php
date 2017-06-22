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

<script src="{{mix('/js/loadCSS.js')}}"></script>
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">
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
