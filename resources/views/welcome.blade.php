@extends('layouts.master')

@section('nav')

<div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <h2 class="float-left">Growth Party</h2>
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