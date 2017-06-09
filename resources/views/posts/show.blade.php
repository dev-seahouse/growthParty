@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
  Help business grow - growth party
@endsection
@section('content')
  <div class="l-large-padded row align-center">
    <div class="small-8-columns" >
      <h4>{!! $post->title !!}</h4>
      <img src="/storage/{{$post->image}}" alt="">
      {!! $post->body !!}
    </div>
  </div>
@endsection