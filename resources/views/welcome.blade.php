@extends('layouts.master')

@section('title')
  Help business grow - growth party
@endsection

@push("page_styles")
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.green.min.css">
@endpush

@section('nav')
  <navigation>
  </navigation>
@endsection

@section('content')
  <!-- fullscreen header -->
  <div class="full-screen-header">
    <img src="{{ asset('images/partybg.png') }}" class="header-bg" alt="color background of header">
    <div class="row column l-padded">

      <div class="l-h-padded columns">


        <h1 class="jumbotron-text">Fund your <span class="pale-red-text typed"> passion </span> <br>by growing business.</h1>

        <h5 class="l-v-padded">
          <strong class="dark-text">Help business owners. Risk-Free. Reap rewards.</strong>
        </h5>

      </div>
    </div>
  </div>

  <!-- end fullscreen header -->

  <!-- How it works -->
  <div class="l-padded p-b-0 m-t-30 row">
    <div class="columns">
      <h2 class="thin-header title">How it works</h2>
    </div>
  </div>

  <div class="row l-padded l-small-v-padded">

    <div class="small-12 column">

      <div class="owl-carousel owl-theme">
        <div class="slide-item">
          <div class="row">
              <div class="small-6 columns">
                <h5 class="pale-red-text thin-header">Step 1</h5>
                <h2 class="pale-red-text">Sign up</h2>
                <p>
                Join as growth affiliate and help matched businesses share their services to your network.
                </p>
              </div>
              <div class="small-6 columns p-l-0">
                <img src="/images/step1.png" alt="image of step 2">
              </div>
          </div>
        </div>

        <div class="slide-item">
          <div class="row">
              <div class="small-6 columns">
                <h5 class="pale-red-text thin-header">Step 2</h5>
                <h2 class="pale-red-text">Earn</h2>
                <p>
                You earn from every sales meeting you schedule between matched businesses and interested parties from your network
                </p>
              </div>
              <div class="small-6 columns p-l-0">
                <img src="/images/step2.png" alt="image of step 3">
              </div>
          </div>

        </div>

        <div class="slide-item">
          <div class="row">
              <div class="small-6 columns">
                <h5 class="pale-red-text thin-header">Step 3</h5>
                <h2 class="pale-red-text">Cash out!</h2>
                <p>Invoicing and payments happen on our secure payment platform. Cash out confidently with Growth Party Payment Protection.</p>
              </div>
              <div class="small-6 columns p-l-0">
                <img src="/images/step3.png" alt="image of step 3">
              </div>
          </div>


        </div>
      </div>

    </div>

  </div>

  <!-- end how it works -->

  <!-- why join us -->
  <div class="l-padded p-b-0 row" id="aos-container">
    <div class="columns">
      <h2 class="thin-header title">Why you'll love joining this party.</h2>
    </div>
  </div>

  <div class="l-h-padded row">

    <div class="l-padded small-12 medium-4 columns" data-aos="fade-down">
      <img src="/images/icons/piggy-bank.svg" class="l-featured-icon" alt="piggy bank icon">
      <h3 class="pale-red-text">Extra income</h3>
      <p>With more companies on Growth Party,
      the opportunities to earn are endless so is funding your heart's content.
      </p>
    </div>

    <div class="l-padded small-12 medium-4 columns" data-aos="fade-up">
      <img src="/images/icons/book.svg" class="l-featured-icon" alt="book icon">
      <h3 class="pale-red-text">Step-by-step</h3>
      <p>We are your partner. Tools and steps are prescribed to bring you to success.</p>
    </div>

    <div class="l-padded small-12 medium-4 columns" data-aos="fade-down">
      <img src="/images/icons/timer.svg" class="l-featured-icon" alt="timer icon">
      <h3 class="pale-red-text">Flexibility</h3>
      <p>It’s your lifestyle, set your days and decide when to earn and how often.</p>
    </div>

  </div>
  <!-- end why join us -->

  <!-- Stats -->
  <div class="l-medium-v-padded row medium-unstack bitmap-bg primary-text">
    <div class="l-padded columns text-center">
      <div class="stat"><span class="stat-animated">3,422</span></div>
      <p class="white-text">Flourishing companies</p>
    </div>

    <div class="l-padded columns text-center">
      <div class="stat"><span class="stat-animated">20</span>%</div>
      <p class="white-text">Average growth</p>
    </div>

    <div class="l-padded columns text-center">
      <div class="stat">$<span class="stat-animated">2,101,193</span></div>
      <p class="white-text">attributed earnings</p>
    </div>
  </div>
  <!-- End Stats -->

  <!-- Why they love the party -->
  <div class="l-padded row">
    <div class="l-padded media-object stack-for-small">

      <div class="media-object-section text-center">
          <img class="l-img-restraint-width round-img" src="{{ asset('images/testimonial.png') }}">
      </div>

      <div class="media-object-section text-center">
        <p>“One of the best things about GP is that I can also provide value to my community groups.” </p>
        <span>Shari C. SMU Business Student, Year 3</span>
      </div>

    </div>
  </div>
  <!-- end why they love the party -->

@endsection

@push('page_scripts')

  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <!— Start of HubSpot Embed Code —>
  <script>
    // HubSpot Script Loader. Please do not block this resource. See more: http://hubs.ly/H0702_H0
    function loadForm(){
        (function (id, src, attrs) {
        if (document.getElementById(id)) { return; }
        var js = document.createElement('script');
        js.src = src;
        js.type = 'text/javascript';
        js.id = id;
        for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
        var e = document.getElementsByTagName('script')[0];
        e.parentNode.insertBefore(js, e);
      })('CollectedForms-3327713', 'https://js.hscollectedforms.net/collectedforms.js', {"crossorigin":"anonymous","data-leadin-portal-id":3327713,"data-leadin-env":"prod","data-loader":"hs-scriptloader"});

      (function (id, src, attrs) {
        if (document.getElementById(id)) { return; }
        var js = document.createElement('script');
        js.src = src;
        js.type = 'text/javascript';
        js.id = id;
        for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
        var e = document.getElementsByTagName('script')[0];
        e.parentNode.insertBefore(js, e);
      })('messages-3327713', 'https://api.usemessages.com/messages/v2/embed/3327713.js', {"data-loader":"hs-scriptloader"});

      (function (id, src, attrs) {
        if (document.getElementById(id)) { return; }
        var js = document.createElement('script');
        js.src = src;
        js.type = 'text/javascript';
        js.id = id;
        for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
        var e = document.getElementsByTagName('script')[0];
        e.parentNode.insertBefore(js, e);
      })('LeadFlows-3327713', 'https://js.hsleadflows.net/leadflows.js', {"crossorigin":"anonymous","data-leadin-portal-id":3327713,"data-leadin-env":"prod","data-loader":"hs-scriptloader"});

      (function (id, src, attrs) {
        if (document.getElementById(id)) { return; }
        var js = document.createElement('script');
        js.src = src;
        js.type = 'text/javascript';
        js.id = id;
        for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
        var e = document.getElementsByTagName('script')[0];
        e.parentNode.insertBefore(js, e);
      })('hs-analytics', '//js.hs-analytics.net/analytics/1496247900000/3327713.js', {"data-loader":"hs-scriptloader"});
    }

    loadForm();

    function delete_cookie( name ) {
      document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    window.onbeforeunload = function () {
      delete_cookie('__hstc');
      delete_cookie('__hssc');
      delete_cookie('hubspotutk');
      delete_cookie('__hssrc');
      localStorage.clear();
    };

  </script>
  <!— End of HubSpot Embed Code —>
  <script>
    $(function(){
      // init typed js
      $(".typed").typed({
       strings: ["passion", "dream", "goal"],
          typeSpeed: 80,
          backDelay:2200,
          backSpeed:1,
          shuffle:true,
          loop:true,
          showCursor:false
       });

      // init AOS
      AOS.init({
        offset:200,
        duration:1200,
        anchor: "#aos-container",
        'anchor-placement': 'top-center',
        ease: "ease-in-quad"
      });

      // init counter
      $('.stat-animated').counterUp({
        delay: 10,
        time: 1500
      });

      // init owl carousel
      $(".owl-carousel").owlCarousel({
        margin:40,
        loop:true,
        autoWidth:false,
        autoPlay:true,
        nav:false,
        dots:true,
        autoplayHoverPause:true,
        autoPlaySpeed: 100,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false,
                dots:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
      });

    })
  </script>

@endpush
