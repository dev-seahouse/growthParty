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
      
      {!! Form::open(['route' => "logout",'method'=>'post', 'id'=>'logout-form']) !!}
      {{ csrf_field() }}
      {!! Form::close() !!}
      
      <h2 class="leading">First Impression count</h2>
      <p class="sub-title">Time to use your charm. Smile!</p>
      {!! Form::open(['action'=>['SetupController@uploadProfilePic'],  'files'=>false, 'class' => 'dropzone', 'id'=>'profileUploadForm']) !!}
      {{ csrf_field() }}
      <div class="dz-message text-center">
        <h4>Drop profile in this area </h4>
      </div>
      <div class="fallback">
        <input name="file" type="file"/>
      </div>
      <div class="dropzone-previews" id="dropzonePreview"></div>
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
  Dropzone.options.profileUploadForm = {
    maxFiles:1,
    uploadMultiple:false,
    resizeMethod:'crop',
    clickable: true,
    previewContainer: "#dropzonePreview",
    dictRemoveFile:"Remove",
    dictFileTooBig: 'Image is bigger than 8mb',
    acceptedFiles:"image/*",
    init: function(){
      this.on('maxfilesexceeded',function(file){
        this.removeAllFiles();
        this.addFile(file)
      })
    }
  }


</script>
@endpush('page_scripts')

