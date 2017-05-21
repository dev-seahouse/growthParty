@extends('layouts.master')

@section('nav')

<div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <h2 class="title-bar-title">Growth Party</h2>
  <button class="button">Start Earning</button>
</div>

<div class="top-bar" id="top-menu">
  <div class="top-bar-left">
    <ul class="vertical medium-horizontal menu" data-dropdown-menu>
      <li class="menu-text show-for-medium">Growth Party</li>
      <li><a href="#login">Login</a></li>
      <div class="divider"></div>
      <li><a href="#partner">I want to grow my business</a></li>
    </ul>
  </div>
</div>

@endsection

@section('content')
<div class="row">
    <div class="small-12 columns lighter-primary-bg">
        <h1 class="medium-text-center">Fund your <span class="pale-red-text">passion</span> by growing business.</h1>
        <p class="medium-text-center"><strong class="dark-text">Help business owners.Risk-Free. Reap rewards.</strong></p>
    </div>
</div>

<!-- why join us -->
<div class="row">
    <div class="small-12 columns">
        <h3 class="dark-text">Why you'll love joining this party.</h3>  
    </div>
</div>

<div class="row medium-text-center">

    <div class="small-12 medium-4 columns">
        <h3 class="pale-red-text">Extra income</h3>
        <p>With more companies on Growth Party, the  opportunities to earn are endless so is funding  your passion.</p>
    </div>

    <div class="small-12 medium-4 columns">
        <h3 class="pale-red-text">Step-by-step</h3>
        <p>We are your partner. Tools and steps are  prescribed to bring you to success.</p> 
    </div>

    <div class="small-12 medium-4 columns">
       <h3 class="pale-red-text">Flexibility</h3>
       <p>It’s your lifestyle, set your days  and decide when to earn and how often.</p>
    </div>

</div>

<!-- end why join us -->

<!-- How it works -->
<div class="row">
    <div class="small-12 medium-8 columns">
        <li class="orbit-slide">
          <div>
            <h3 class="text-center">2: You can also throw some text in here!</h3>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
            <h3 class="text-center">This Orbit slider does not use animations.</h3>
          </div>
        </li>
    </div>

</div>

<!-- End how it works -->

<!-- Why they love the party -->
<div class="row">
    
</div>
<!-- end why they love the party -->

@endsection

