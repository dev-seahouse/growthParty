@extends('layouts.master')

@section('title')
  Welcome to growth party!
@endsection

@push("page_styles")
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
@endpush

@section('nav')
  <navigation>
  </navigation>
@endsection

@section('content')
  <!-- fullscreen header -->
  <div class="row expanded align-middle full-screen-header">
    <div class="expanded columns">

      <h1 class="medium-text-center">Fund your <span class="pale-red-text typed"> passion </span> by growing business.</h1>

      <p class="medium-text-center ">
        <strong class="dark-text">Help business owners.Risk-Free. Reap rewards.</strong>
      </p>

    </div>
  </div>
  <!-- end fullscreen header -->

  <!-- why join us -->
  <div class="l-padded row">
    <div class="small-12 columns">
      <h3>Why you'll love joining this party.</h3>
    </div>
  </div>

  <div class="l-h-padded row">

    <div class="l-padded small-12 medium-4 columns" data-aos="fade-right">
      <img src="/images/icons/piggy-bank.svg" alt="piggy bank icon">
      <h3 class="pale-red-text">Extra income</h3>
      <p>With more companies on Growth Party,
      the opportunities to earn are endless so is funding your heart's content.
      </p>
    </div>

    <div class="l-padded small-12 medium-4 columns" data-aos="flip-up">
      <img src="/images/icons/book.svg" alt="book icon">
      <h3 class="pale-red-text">Step-by-step</h3>
      <p>We are your partner. Tools and steps are prescribed to bring you to success.</p>
    </div>

    <div class="l-padded small-12 medium-4 columns" data-aos="flip-right">
      <img src="/images/icons/timer.svg" alt="timer icon">
      <h3 class="pale-red-text">Flexibility</h3>
      <p>It’s your lifestyle, set your days and decide when to earn and how often.</p>
    </div>

  </div>

  <!-- end why join us -->

  <!-- How it works -->
  <div class="l-h-padded row">
    <div class="columns">
      <h2>How it works</h2>
    </div>
  </div>

  <div class="row l-padded l-medium-v-padded gradient-bg owl-carousel slider-container">


      <div class="slide-item columns"> <h4 class="pale-red-text">Step 1</h4>
        <h2 class="pale-red-text thin-header">Choose</h2>
        <p>
          Become a growth affiliate, choose the businesses you want to help and get paid for your efforts.
        </p>
      </div>

      <div class="slide-item columns">
          <h4 class="pale-red-text">Step 2</h4>
          <h2 class="pale-red-text thin-header">Earn</h2>
          <p>
            Use the Growth Party platform to promote and communicate from your desktop or on the go.
          </p>
          <p>This can be creative!</p>
      </div>

      <div class="slide-item columns">
          <h4 class="pale-red-text">Step 3</h4>
          <h2 class="pale-red-text thin-header">Get Paid</h2>
          <p>Invoicing and payments happen on the platform.</p>
          <p>Earn confidently with Growth Party Payment Protection.</p>
      </div>

  </div>

  <!-- end how it works -->

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
          <img class="l-img-restraint-width  round-img" src="http://i.pravatar.cc/300">
      </div>

      <div class="media-object-section">
        <p>“One of the best things about GP is that I can also provide value to my community groups.” </p>
        <span>Shari C. SMU Business Student, Year 3</span>
      </div>

    </div>
  </div>
  <!-- end why they love the party -->

  <!-- register -->
  <div class="l-padded row full-screen-header"  >
    <div class="small-12 columns">
      <h2 class="pale-red-text l-v-padded" data-magellan-target="registerForm">Register as a Growth Affiliate</h2>

      <form method="post" action= "{{ route('register') }}" id="registerForm">
        {{ csrf_field() }}
        <div class="row medium-center">

          <div class="small-12 large-6 columns">
            <label> Name
             <input type="text" name="name" placeholder="Enter your full name" required>
            </label>
          </div>

          <div class="small-12 large-6 columns">
            <label> Mobile
             <input type="text" name="mobile" placeholder="e.g. 9233xxxx" required>
            </label>
          </div>

        </div>

        <div class="row medium-center">

          <div class="small-12 large-6 columns">
            <label> Email address 
             <input type="text" name="email" placeholder="e.g. yourname@example.com" required>
            </label>
          </div>

          <div class="small-12 large-6 columns">
            <label> Password
             <input type="password" name="password" placeholder="Please choose a secure password">
            </label>
          </div>

        </div>

        <div class="row l-medium-v-padded align-left">
          <div class="small-12 large-4 columns">
          <button type="submit" class="button expanded">Submit</button>
          </div>
        </div>

      </form>

    </div>
  </div>
  <!-- end Register -->


  <!-- login -->
<div class="small reveal" id="loginModal" data-reveal>
  <h2 class="text-center">Growth Party</h2>
  <h3 class="lead">Login</h3>
  <form action="{{ route('login') }}" method="post" accept-charset="utf-8">
    <input type="text" name="id" placeholder="Enter email or phone number" required>
    <input type="password" name="password" placeholder="Enter password" required>
    <button class="button secondary expanded">Login in</button>

  </form>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <!-- end login -->
@endsection

@push('page_scripts')

  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <script>
    $(function(){
      // init typed js
      $(".typed").typed({
       strings: ["PASSION", "DREAM", "GOAL"],
          typeSpeed: 50,
          backDelay:2800,
          backSpeed:0,
          shuffle:true,
          loop:true,
          showCursor:false
       });

      // init AOS
      AOS.init({
        offset:0,
        duration:600
      });

      // init counter
      $('.stat-animated').counterUp({
        delay: 10,
        time: 1000
      });

      // init owl carousel
      $(".owl-carousel").owlCarousel({
        margin:100,
        loop:true,
        autoWidth:true,
        autoPlay:true,
        autoplayHoverPause:true,
        autoPlaySpeed: 100
      });

    })
  </script>

@endpush
