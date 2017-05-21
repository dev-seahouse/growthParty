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
<div class="row">
    <div class="small-10 medium-12 columns">
        <h1 class="medium-text-center">Fund your <span class="pale-red-text">passion</span> by growing business.</h1>
        <p class="medium-text-center"><strong class="dark-text">Help business owners.Risk-Free. Reap rewards.</strong></p>
    </div>
</div>
@endsection