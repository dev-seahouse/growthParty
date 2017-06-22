@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
  Help business grow - growth party
@endsection

@section('content')
  <div class="row fix-nav-cover-content" data-equalizer>
    {{--for each post in Posts, output post--}}
    @foreach($posts->chunk(2) as $chunk)
        @foreach($chunk as $post)
            @include('posts.list_entry')
        @endforeach
    @endforeach
  </div>
  <div class="l-medium-h-padded row columns">
    {{$posts->links()}}
  </div>
@endsection

@push('page_scripts')
<script>
  progressively.init();
</script>
@endpush
