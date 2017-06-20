<div class="small-12 medium-6 columns">
  <!-- card component  start -->
  <div class="card" data-equalizer-watch>
      <a class="card-image-container" >
      <img src="/storage/{{$post->image}}" alt="{{$post->title}}">
    </a>
    <!-- card content -->
    <div class="card-content">

      <a href="/blog/{{$post->slug}}">
         <h4 class="title">{{str_limit($post->title,90)}}</h4>
      </a>
      <p style="color:rgba(0,0,0,.6)!important;" class="content">{{str_limit($post->excerpt, 140)}}</p>
      <a href="/blog/{{$post->slug}}">
        Read more ...
      </a>
      <!-- card footer -->
      <div class="footer">
          <img style="display:none;" src="/storage/{{$post->author->avatar}}" class="profile-img"
               alt="{{$post->author->name}}">
          <a style="display:none;" href="">{{$post->author->name}}</a>
        <p class="info">Posted {{$post->created_at->diffForHumans()}} &nbsp;&nbsp;
          <i class="fa fa-hourglass-half secondary-text"></i> {{$post->estimated_read}}
          read
        </p>

      </div>
      <!-- end card footer -->
    </div>
    <!-- end card content -->
  </div>
  <!-- card component ends -->
</div>
<!-- end of column -->