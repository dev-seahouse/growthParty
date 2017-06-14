@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
  Help business grow - growth party
@endsection
@section('content')
  <div class="l-large-padded row align-center">
    <div class="small-8-columns blogwidth" >
      <h1>{!! $post->title !!}</h1>
      <img src="/storage/{{$post->image}}" alt="">
      {!! $post->body !!}
    </div>
  </div>
@endsection
<!-- Google analytics Tracking Code for growthparty.co -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32995284-5', 'auto');
  ga('send', 'pageview');

</script>
