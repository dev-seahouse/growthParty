@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
{{str_limit($post->title)}}
@endsection

  <meta property="og:url" content="https://www.growthparty.co/blog/{{$post->slug}}">
  <meta property="og:type" content="article">
  <meta property="og:title" content="{{str_limit($post->title)}}">
  <meta property="og:description" content="{{str_limit($post->excerpt)}}">
  <meta property="og:image" content="https://www.growthparty.co/storage/{{$post->image}}">
  <meta property="fb:app_id" content="756709494453863" />
  <meta property="description" content="{{str_limit($post->excerpt)}}">

@section('content')
  <div class="l-large-padded row align-center">
    <div class="small-12 medium-7 columns"  >
      <h1>{!! $post->title !!}</h1>
     <div class="footer">
         <p class="info">Posted
        <img style="display:none;" src="/storage/{{$post->author->avatar}}" width="30px" height="auto" class="profile-img" alt="{{$post->author->name}}">
      <span class="info"> {{$post->created_at->diffForHumans()}}</span> &nbsp;&nbsp; ⏳{{$post->estimated_read}} read </p>
      </div>
      <img src="/storage/{{$post->image}}" alt="{!! $post->title !!}">
      <br/>
      {!! $post->body !!}
    </div>
  </div>

@endsection
