@extends('layouts.master')

@section('nav')

<div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <h2 class="title-bar-title">Growth Party</h2>
  <button class="button float-right">Start Earning</button>
</div>

<div class="top-bar" id="top-menu">
  <div class="top-bar-left">
    <ul class="vertical medium-horizontal menu" data-dropdown-menu>
      <li class="menu-text show-for-medium">Growth Party</li>
      <li><a href="#login">Login</a></li>
      <li><a href="#partner">I want to grow my business</a></li>
    </ul>
  </div>
</div>

@endsection

@section('content')
<div class="row lighter-primary-bg">
    <div class="small-10 medium-12 columns">
        <h2 class="medium-text-center">Fund your <span class="pale-red-text">passion</span> by growing business.</h2>
        <p class="medium-text-center"><strong class="dark-text">Help business owners.Risk-Free. Reap rewards.</strong></p>
    </div>
</div>
 
<div class="row">
  <div class="small-12 columns">
    <h1 class="teal-gray-text">Why you'll love joining this party</h1>
  </div>
</div>

<!-- why join us -->
<div class="row medium-text-center">

  <div class="small-12 medium-4 columns">
    <h3 class="pale-red-text">Extra income</h3>
    <p>
        With more companies on Growth Party, the  opportunities to earn are endless so is funding  your passion.
    </p>
  </div>

  <div class="small-12 medium-4 columns">
    <h3 class="pale-red-text">Step-by-step</h3>
    <p>We are your partner. Tools and steps are  prescribed to bring you to success.</p>
  </div>

  <div class="small-12 medium-4 columns">
    <h3 class="pale-red-text">
      Flexibility
    </h3>
    <p>It’s your lifestyle, set your days  and decide when to earn and how often.</p>
  </div>
</div>
<!-- ends why join us -->

<!-- how it works -->
<!-- end how it works -->

@endsection