@extends('layouts.master')
@push('page_styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.css">
@endpush('page_styles')
@section('content')
  <div class="row align-center">
    <div class="small-8 columns">
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout button for test purpose pleaes remove
      </a>
  
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
      <h2 class="leading">First Impression count</h2>
      <p class="sub-title">Time to use your charm. Smile!</p>
        {!! Form::open(['url' => 'upload', 'class' => 'dropzone', 'files'=>false, 'id'=>'real-dropzone']) !!}
        <div class="dz-message text-center">
          <h4>Drop profile in this area </h4>
        </div>
        <div class="fallback">
          <input name="file" type="file" />
        </div>
        <div class="dropzone-previews" id="dropzonePreview"></div>
      {!! Form::hidden('csrf-token', csrf_token(), ['id' => 'csrf-token']) !!}
      {!! Form::close() !!}

    </div>
  </div>
@endsection('content')
@push('page_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
    <script>
      // 1.upload image to local storage https://stackoverflow.com/questions/19183180/how-to-save-an-image-to-localstorage-and-display-it-on-the-next-page
      // 2.on upload success display image in canvas
      // 3.use croppie to crop
      // 4.on form submit update image
      let dropzone = new Dropzone("#formUploadProfile", {
      });


    </script>
@endpush('page_scripts')

