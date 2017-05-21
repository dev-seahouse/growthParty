<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title') 
            {{ config('app.name', 'Growth Party') }}
        @show
    </title>

    <link rel="icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet"> 
    @stack('page_styles') <!-- page specific styles -->
    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- csrf script -->
    <script>
        window.Laravel = {!!json_encode(['csrfToken' => csrf_token()])!!};
    </script>

</head>

<body>
        
        <!-- navigation bar -->
        @yield('nav')
        <!-- end navigation bar --> 

        <!-- header content, e.g jumpbotron , slider -->
        @yield('header')
        <!-- end header -->

        <!-- main content -->
        @yield('content')
        <!-- end main content -->

    
    <script src="/js/manifest.js"></script><!-- webpack runtime -->
    <script src="/js/vendor.js"></script><!-- vendor library -->
    <script src="/js/app.js"></script><!-- application wide script -->
    <script>
        var _token = '{!! Session::token() !!}';
        var _url = '{!! url("/") !!}';
    </script>
    @stack('page_scripts')<!-- page js libs/scripts -->   


</body>

</html>
