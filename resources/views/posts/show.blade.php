@extends('layouts.master')

@push('page_styles')
<link rel="stylesheet" href="https://unpkg.com/progressively/dist/progressively.min.css">
@endpush

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
<meta property="og:image" itemprop="image" content="https://www.growthparty.co/storage/{{$post->image}}">
<meta property="fb:app_id" content="756709494453863"/>
<meta property="description" content="{{str_limit($post->excerpt)}}">

@section('content')
  <div class="l-padded row align-center fix-nav-cover-content">
    <div class="small-12 medium-10 large-7 columns">
      <h1>{!! $post->title !!}</h1>
      <!-- post header -->
      <div>
        <p class="info">Posted
          <img style="display:none;" src="/storage/{{$post->author->avatar}}" width="30px" height="auto"
               class="profile-img" alt="{{$post->author->name}}">
          <span class="info"> {{$post->created_at->diffForHumans()}}</span> &nbsp;&nbsp;<i class="fa fa-hourglass-half m-r-10"></i>{{$post->estimated_read}} read
        </p>
      </div>
      <!-- end post header -->
      <!-- post image -->
      <figure class="progressive">
        <img class="progressive__img progressive--not-loaded" data-progressive="/storage/{{$post->image}}"
             src="/images/low.jpg" alt="{!! $post->title !!}">
      </figure>
      <!-- end post image -->
      <br/>
      <!-- post body -->
      <div class="text-container">
        {!! $post->body !!}
      </div>
      <!-- end post body -->
    </div>
  </div>

@endsection
@push('page_scripts')
<script src="https://unpkg.com/progressively/dist/progressively.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Flowtype.js/1.1.0/flowtype.min.js"></script>
<script>
  progressively.init()
  $('.text-container').flowtype({
    minimum : 600,
    maximum : 1200,
    minFont   : 12,
    maxFont   : 35,
    fontRatio : 30
  });
</script>
@endpush
