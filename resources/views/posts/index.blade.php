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
<a href="/blog/{{$post->slug}}">
          <div class="card" data-equalizer-watch>
            <div class="card-image-container">
              <img src="/storage/{{$post->image}}" alt="">
            </div>

           <div class="card-content">
             <h4 style="color:black;" class="title">{{str_limit($post->title,90)}}</h4>
              <p style="color:rgba(0,0,0,.6)!important;"class="content">{{str_limit($post->excerpt, 140)}}</p>
              Read more ...
              <div class="footer">
                <img style="display:none;" src="/storage/{{$post->author->avatar}}" class="profile-img" alt="{{$post->author->name}}">
                <a style="display:none;" href="">{{$post->author->name}}</a>
                <p class="info">Posted {{$post->created_at->diffForHumans()}} &nbsp;&nbsp; ⏳{{$post->estimated_read}} read </p>
              </div>
            </div></a>
          </div>

        </div>
      @endforeach
    </div>

  @endforeach
  <div class="l-medium-h-padded row columns">
    {{$posts->links()}}
  </div>
@endsection
