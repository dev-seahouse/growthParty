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
    <div class="l-padded row" data-equalizer data-equalize-on="medium">
      @foreach($chunk as $post)
        <div class="small-12 medium-6 columns">
          <div class="card" data-equalizer-watch>
            
            <div class="card-image-container">
              <img src="/storage/{{$post->image}}" alt="">
            </div>
            
            <div class="card-content">
              <h4 class="title">{{$post->title}}</h4>
              <p class="content">{{str_limit($post->excerpt, 100)}}</p>
              <a href="/blog/{{$post->slug}}">Read more ...</a>
              <div class="footer">
                <img src="/storage/{{$post->author->avatar}}" class="profile-img" alt="">
                <a href="">{{$post->author->name}}</a>
                <p class="info">{{$post->updated_at->diffForHumans()}} {{$post->estimated_read}} read </p>
              </div>
            </div>
          </div>
        
        </div>
      @endforeach
    </div>
  
  @endforeach
@endsection
