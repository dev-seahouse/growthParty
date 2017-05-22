@extends('layouts.master')

@push("page_styles")
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.css">
@endpush

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
        <h3>Why you'll love joining this party.</h3>  
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
<!-- This demo uses flex grid but you can use float grid too -->

<div class="row">
  <div class="columns">
    <h2>Orbit</h2>
    <p>Orbit doesn't automatically generate any HTML for you, giving you the flexibility to move around the various pieces of the plugin. Here's a complete example—we'll break down the individual pieces farther down.</p>
  </div>
</div>

<div class="row">
  <div class="columns">
    <h2>Orbit - Text Slider</h2>
    <p>A carousel slide can contain images or HTML—you can even mix between slides in one carousel!</p>
  </div>
</div>

<div class="row">
  <div class="columns">
    <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="is-active orbit-slide">
          <div class="docs-example-orbit-slide">
            <p><strong>This is dodgerblue.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </li>
        <li class="orbit-slide">
          <div class="docs-example-orbit-slide">
            <p><strong>This is rebeccapurple.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </li>
        <li class="orbit-slide">
          <div class="docs-example-orbit-slide">
            <p><strong>This is darkgoldenrod.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </li>
        <li class="orbit-slide">
          <div class="docs-example-orbit-slide">
            <p><strong>This is lightseagreen.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </li>
      </ul>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
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

