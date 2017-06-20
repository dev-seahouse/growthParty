@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
  Help business grow - growth party
@endsection

@section('content')
  <div class="main-container fix-nav-cover-content">
    {{--for each post in Posts, output post--}}
    @foreach($posts->chunk(2) as $chunk)
      <div class="l-padded row" data-equalizer>
        @foreach($chunk as $post)
            @include('posts.list_entry')
        @endforeach
      </div>
      <!-- end or a row -->
  </div>
  <!-- end of main container -->

  @endforeach
  <div class="l-medium-h-padded row columns">
    {{$posts->links()}}
  </div>
@endsection

