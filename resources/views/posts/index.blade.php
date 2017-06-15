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

<!-- Google analytics Tracking Code for growthparty.co -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32995284-5', 'auto');
  ga('send', 'pageview');

</script>
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
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 'your-app-id',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
