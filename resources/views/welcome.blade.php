@extends('layouts.master')

@section('title')
  Help business grow - growth party
@endsection
<meta property="og:title" content="Growth Party - Sales of the Future">
<meta property="og:description" content="Help business owners. Risk-Free. Reap rewards">

@push("page_styles")
  <link  href="https://cdn.jsdelivr.net/npm/aos@2.1.1/dist/aos.min.css" rel="stylesheet" type="text/css">
  <link rel="preload" href="https://cdn.jsdelivr.net/combine/gh/OwlCarousel2/OwlCarousel2@2.2.1/dist/assets/owl.carousel.min.css,gh/OwlCarousel2/OwlCarousel2@2.2.1/dist/assets/owl.theme.green.min.css" as="style" onload="this.rel='stylesheet'" >
@endpush

@section('nav')
  <navigation>
  </navigation>
@endsection

@section('content')
  <!-- fullscreen header -->
  <div class="full-screen-header m-t-30">
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

  <div class="l-h-padded l-featured row">

    <div class="l-padded small-12 medium-4 columns" data-aos="fade-right">
      <img src="/images/icons/piggy-bank.svg" class="l-featured-icon" alt="piggy bank icon">
      <h3 class="pale-red-text">Extra income</h3>
      <p>With more companies on Growth Party,
      the opportunities to earn are endless so is funding your heart's content.
      </p>
    </div>

    <div class="l-padded small-12 medium-4 columns" data-aos="slide-up">
      <img src="/images/icons/book.svg" class="l-featured-icon" alt="book icon">
      <h3 class="pale-red-text">Step-by-step</h3>
      <p>We are your partner. Tools and steps are prescribed to bring you to success.</p>
    </div>

    <div class="l-padded small-12 medium-4 columns" data-aos="fade-right">
      <img src="/images/icons/timer.svg" class="l-featured-icon" alt="timer icon">
      <h3 class="pale-red-text">Flexibility</h3>
      <p>It’s your lifestyle, set your days and decide when to earn and how often.</p>
    </div>

  </div>
  <!-- end why join us -->

  <!-- Stats -->
  <div class="l-medium-v-padded row expanded medium-unstack bitmap-bg secondary-text">
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
  <div class="l-padded row align-center">
    <div class="l-padded media-object stack">

      <div class="media-object-section text-center">
          <img class="l-img-restraint-width round-img l-small-v-padded" src="{{ asset('images/testimonial.png') }}">
      </div>

      <div class="media-object-section text-center">
        <p>“By collaborating with vetted service providers on GP platform, I am able to upsell to my existing clients new solution.” </p>
        <span>Ian Tay, Xiao Xiao Media</span>
      </div>

    </div>
  </div>
  <!-- end why they love the party -->

@endsection

@push('page_scripts')
  <script src="https://cdn.jsdelivr.net/g/jquery.typed.js@1.1.7,waypoints@4.0.1(jquery.waypoints.min.js)" async></script>
  <script src="https://cdn.jsdelivr.net/combine/npm/aos@2.1.1/dist/aos.min.js,gh/OwlCarousel2/OwlCarousel2@2.2.1/dist/owl.carousel.min.js"></script>

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
