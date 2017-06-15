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


@section('content')
  <div class="l-large-padded row align-center">
    <div class="small-12 medium-7 columns"  >
      <h1>{!! $post->title !!}</h1>
     <div class="footer">
         <p class="info">Posted by:
        <img style="display:none;" src="/storage/{{$post->author->avatar}}" width="30px" height="auto" class="profile-img" alt="{{$post->author->name}}">
        <a href="">{{$post->author->name}}</a>&nbsp; <span class="info"> {{$post->created_at->diffForHumans()}}</span> &nbsp;&nbsp; ⏳{{$post->estimated_read}} read </p>
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
<!-- Hotjar Tracking Code for growthparty.co -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:533964,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
