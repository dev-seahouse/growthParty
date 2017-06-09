@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
  Help business grow - growth party
@endsection

@section('content')
  {{--for each post in Posts, output post--}}
  @foreach($posts->chunk(2) as $chunk)
    <div class="l-padded row">
      @foreach($chunk as $post)
        <div class="small-12 medium-6 columns">
          <div class="row">
            <div class="medium-12 large-6 columns">
              <img src="/storage/{{$post->image}}" alt="">
            </div>
            <div class="small-12 large-6 columns">
              <h4>{{$post->title}}</h4>
              <p>{{$post->excerpt}}</p>
            </div>
          </div>

        </div>
      @endforeach
    </div>

  @endforeach
@endsection
