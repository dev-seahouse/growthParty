@extends('layouts.master')
@section('title')
  Welcome to growth party! Your exciting journet starts now
@endsection

@push("page_styles")
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css">
@endpush @section('nav')

<navigation></navigation>

@endsection @section('content')
<div class="row expanded align-middle l-full-screen-bg">
  <div class="expanded columns">
    <h1 class="medium-text-center">Fund your <span class="pale-red-text typed"> passion </span> by growing business.</h1>
    <p class="medium-text-center "><strong class="dark-text">Help business owners.Risk-Free. Reap rewards.</strong></p>
  </div>
</div>

<!-- why join us -->
<div class="row">
  <div class="small-12 columns">
    <h3>Why you'll love joining this party.</h3>
  </div>
</div>

<div class="row">

  <div class="small-12 medium-4 columns">
    <img src="/images/icons/piggy-bank.svg" alt="piggy bank icon">
    <h3 class="pale-red-text">Extra income</h3>
    <p>With more companies on Growth Party, the opportunities to earn are endless so is funding your heart's content.</p>
  </div>

  <div class="small-12 medium-4 columns">
    <img src="/images/icons/book.svg" alt="book icon">
    <h3 class="pale-red-text">Step-by-step</h3>
    <p>We are your partner. Tools and steps are prescribed to bring you to success.</p>
  </div>

  <div class="small-12 medium-4 columns">
    <img src="/images/icons/timer.svg" alt="timer icon">
    <h3 class="pale-red-text">Flexibility</h3>
    <p>It’s your lifestyle, set your days and decide when to earn and how often.</p>
  </div>

</div>

<!-- end why join us -->

<!-- How it works -->
<!-- This demo uses flex grid but you can use float grid too -->

<div class="row">
  <div class="columns">
    <h2>How it works</h2>
  </div>
</div>

<div class="row">
  <div class="columns gradient-bg">
    <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
      <ul class="orbit-container">

        <li class="is-active orbit-slide">
          <div class="docs-example-orbit-slide">
            <h4 class="pale-red-text">Step 1</h4>
            <h2 class="pale-red-text thin-header">Choose</h2>
            <p>Become a growth affiliate, choose the businesses you want to help and get paid for your efforts.</p>
          </div>
        </li>

        <li class="orbit-slide">
          <div class="docs-example-orbit-slide">
            <h4 class="pale-red-text">Step 2</h4>
            <h2 class="pale-red-text thin-header">Earn</h2>
            <p>Use the Growth Party platform to promote and communicate from your desktop or on the go.</p>
            <p>This can be creative!</p>
          </div>
        </li>

        <li class="orbit-slide">
          <div class="docs-example-orbit-slide">
            <h4 class="pale-red-text">Step 3</h4>
            <h2 class="pale-red-text thin-header">Get Paid</h2>
            <p>Invoicing and payments happen on the platform.</p>
            <p>Earn confidently with Growth Party Payment Protection.</p>
          </div>
        </li>

      </ul>
      <nav class="rectangular orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
      </nav>
    </div>
  </div>
</div>
<div class="row">
  <div class="columns">
  </div>
</div>


<!-- End how it works -->

<!-- Why they love the party -->
<div class="row">

</div>
<!-- end why they love the party -->

@endsection
@push('page_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
    Typed.new(".typed", {
      strings: ["PASSION", "DREAM", "GOAL"],
      typeSpeed: 50,
      backDelay:2800,
      backSpeed:0,
      shuffle:true,
      loop:true,
      showCursor:false
    });
  });
</script>

@endpush
