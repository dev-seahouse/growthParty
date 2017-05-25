@extends('layouts.master')
@section('title')
Welcome to growth party! Your exciting journet starts now
@endsection

@push("page_styles")
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
@endpush @section('nav')

<navigation></navigation>

@endsection @section('content')
<div class="row expanded align-middle full-screen-header">
  <div class="expanded columns">
    <h1 class="medium-text-center">Fund your <span class="pale-red-text typed"> passion </span> by growing business.</h1>
    <p class="medium-text-center "><strong class="dark-text">Help business owners.Risk-Free. Reap rewards.</strong></p>
  </div>
</div>

<!-- why join us -->
<div class="l-padded row">
  <div class="small-12 columns">
    <h3>Why you'll love joining this party.</h3>
  </div>
</div>

<div class="l-padded row">

  <div class="l-padded small-12 medium-4 columns" data-aos="fade-right">
    <img src="/images/icons/piggy-bank.svg" alt="piggy bank icon">
    <h3 class="pale-red-text">Extra income</h3>
    <p>With more companies on Growth Party, the opportunities to earn are endless so is funding your heart's content.</p>
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
<div class="l-padded row">
  <div class="columns">
    <h2>How it works</h2>
  </div>
</div>

<div class="l-padded row gradient-bg">

  <div class="columns">
    <div class="orbit" role="region" aria-label="How it works" data-orbit>
      <ul class="orbit-container">
        <li class="orbit-slide">
            <h4 class="pale-red-text">Step 1</h4>
            <h2 class="pale-red-text thin-header">Choose</h2>
            <p>Become a growth affiliate, choose the businesses you want to help and get paid for your efforts.</p>
        </li>

        <li class="orbit-slide">
            <h4 class="pale-red-text">Step 2</h4>
            <h2 class="pale-red-text thin-header">Earn</h2>
            <p>Use the Growth Party platform to promote and communicate from your desktop or on the go.</p>
            <p>This can be creative!</p>
        </li>

        <li class="orbit-slide">
            <h4 class="pale-red-text">Step 3</h4>
            <h2 class="pale-red-text thin-header">Get Paid</h2>
            <p>Invoicing and payments happen on the platform.</p>
            <p>Earn confidently with Growth Party Payment Protection.</p>
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

<!-- Stats -->
<div class="l-padded row medium-unstack bitmap-bg primary-text">
  <div class="l-padded columns text-center">
    <div class="stat">3422</div>
    <p class="white-text">Flourishing companies</p>
  </div>

  <div class="l-padded columns text-center">
    <div class="stat">20%</div>
    <p class="white-text">Average growth</p>
  </div>

  <div class="l-padded columns text-center">
    <div class="stat">$2,101,193</div>
    <p class="white-text">attributed earnings</p>
  </div>
</div>
<!-- Stats -->


<!-- End how it works -->

<!-- Why they love the party -->
<div class="row">
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

@endsection
@push('page_scripts')
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
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
AOS.init({
offset:200,
duration:600
});
</script>

@endpush
