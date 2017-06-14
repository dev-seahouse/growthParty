@extends('layouts.master')

@section('nav')
  <navigation></navigation>
@endsection

@section('title')
  Help business grow - growth party
@endsection
@section('content')
  <div class="l-large-padded row align-center">
    <div class="small-8-columns blogwidth" style="max-width:80%;" >
      <h1>{!! $post->title !!}</h1>
     <div class="footer">
         <p class="info">Posted by:
        <img src="/storage/{{$post->author->avatar}}" width="30px" height="auto" class="profile-img" alt="{{$post->author->name}}">
        <a href="">{{$post->author->name}}</a>
        <p class="info">{{$post->created_at->diffForHumans()}} &nbsp;&nbsp; {{$post->estimated_read}} read </p>
      </div>
      <img src="/storage/{{$post->image}}" alt="{!! $post->title !!}">
      <br/>
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
<!— Start of HubSpot Embed Code —>
<script>
  // HubSpot Script Loader. Please do not block this resource. See more: http://hubs.ly/H0702_H0
  function loadForm(){
      (function (id, src, attrs) {
      if (document.getElementById(id)) { return; }
      var js = document.createElement('script');
      js.src = src;
      js.type = 'text/javascript';
      js.id = id;
      for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
      var e = document.getElementsByTagName('script')[0];
      e.parentNode.insertBefore(js, e);
    })('CollectedForms-3327713', 'https://js.hscollectedforms.net/collectedforms.js', {"crossorigin":"anonymous","data-leadin-portal-id":3327713,"data-leadin-env":"prod","data-loader":"hs-scriptloader"});

    (function (id, src, attrs) {
      if (document.getElementById(id)) { return; }
      var js = document.createElement('script');
      js.src = src;
      js.type = 'text/javascript';
      js.id = id;
      for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
      var e = document.getElementsByTagName('script')[0];
      e.parentNode.insertBefore(js, e);
    })('messages-3327713', 'https://api.usemessages.com/messages/v2/embed/3327713.js', {"data-loader":"hs-scriptloader"});

    (function (id, src, attrs) {
      if (document.getElementById(id)) { return; }
      var js = document.createElement('script');
      js.src = src;
      js.type = 'text/javascript';
      js.id = id;
      for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
      var e = document.getElementsByTagName('script')[0];
      e.parentNode.insertBefore(js, e);
    })('LeadFlows-3327713', 'https://js.hsleadflows.net/leadflows.js', {"crossorigin":"anonymous","data-leadin-portal-id":3327713,"data-leadin-env":"prod","data-loader":"hs-scriptloader"});

    (function (id, src, attrs) {
      if (document.getElementById(id)) { return; }
      var js = document.createElement('script');
      js.src = src;
      js.type = 'text/javascript';
      js.id = id;
      for (var name in attrs) { if(attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]); } }
      var e = document.getElementsByTagName('script')[0];
      e.parentNode.insertBefore(js, e);
    })('hs-analytics', '//js.hs-analytics.net/analytics/1496247900000/3327713.js', {"data-loader":"hs-scriptloader"});
  }

  loadForm();

  function delete_cookie( name ) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  }

  window.onbeforeunload = function () {
    delete_cookie('__hstc');
    delete_cookie('__hssc');
    delete_cookie('hubspotutk');
    delete_cookie('__hssrc');
    localStorage.clear();
  };

</script>
<!— End of HubSpot Embed Code —>
