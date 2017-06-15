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
      <ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fgrowthparty.co&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="growthparty.co/storage/Socialicons/facebook.png"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fgrowthparty.co&text=:%20http%3A%2F%2Fgrowthparty.co" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="growthparty.co/storage/Socialicons/twitter.png"></a></li>
  <li><a href="https://plus.google.com/share?url=http%3A%2F%2Fgrowthparty.co" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="storage/Socialicons/googleplus.png"></a></li>
  <li><a href="http://www.tumblr.com/share?v=3&u=http%3A%2F%2Fgrowthparty.co&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Post to Tumblr" src="growthparty.co/storage/Socialicons/tumblr.png"></a></li>
  <li><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fgrowthparty.co&description=" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' +  encodeURIComponent(document.title)); return false;"><img alt="Pin it" src="growthparty.co/storage/Socialicons/pinterest.png"></a></li>
  <li><a href="https://getpocket.com/save?url=http%3A%2F%2Fgrowthparty.co&title=" target="_blank" title="Add to Pocket" onclick="window.open('https://getpocket.com/save?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Add to Pocket" src="growthparty.co/storage/Socialicons/pocket.png"></a></li>
  <li><a href="http://www.reddit.com/submit?url=http%3A%2F%2Fgrowthparty.co&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Submit to Reddit" src="growthparty.co/storage/Socialicons/reddit.png"></a></li>
  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fgrowthparty.co&title=&summary=&source=http%3A%2F%2Fgrowthparty.co" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Share on LinkedIn" src="growthparty.co/storage/Socialicons/Linkedin.png"></a></li>
  <li><a href="http://wordpress.com/press-this.php?u=http%3A%2F%2Fgrowthparty.co&t=&s=" target="_blank" title="Publish on WordPress" onclick="window.open('http://wordpress.com/press-this.php?u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Publish on WordPress" src="growthparty.co/storage/Socialicons/wordpress.png"></a></li>
  <li><a href="https://pinboard.in/popup_login/?url=http%3A%2F%2Fgrowthparty.co&title=&description=" target="_blank" title="Save to Pinboard" onclick="window.open('https://pinboard.in/popup_login/?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Save to Pinboard" src="growthparty.co/storage/Socialicons/pinboard.png"></a></li>
  <li><a href="mailto:?subject=&body=:%20http%3A%2F%2Fgrowthparty.co" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img alt="Send email" src="growthparty.co/storage/Socialicons/email.png"></a></li>
</ul>
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
