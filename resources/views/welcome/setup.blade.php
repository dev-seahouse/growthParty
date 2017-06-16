@extends('layouts.master')
@section('title')
  Account Setup - Growth Party
@endsection
@section('content')
  <div class="row align-center dark-slate-grey-text">
    <div class="small-8 columns step active">
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault()document.getElementById('logout-form').submit()">
        Logout
      </a>

      <!-- upload profile image -->
      {!! Form::open(['route' => "logout",'method'=>'post', 'id'=>'logout-form']) !!}
      {{ csrf_field() }}
      {!! Form::close() !!}
      <h3 class="leading thin-header">First Impression count</h3>
      <p class="sub-title">Time to use your charm. Smile!</p>
      {!! Form::open(['action'=>['SetupController@uploadProfilePic'],  'class' => 'dropzone', 'id'=>'profileUploadForm']) !!}
      {{ csrf_field() }}

      <div class="dz-message text-center">
        <h4>Tap or click to upload </h4>
      </div>

      <div class="fallback">
        <input type="file" name="avatar"/>
      </div>

    {!! Form::close() !!}
    <!-- end upload profile image -->

      <button class="next button">Next</button>
    </div>

    <div class="small-8 columns step">

      <h3 class="leading thin-header">Last Step, almost done!</h3>
      {{ Form::open(['action'=>['SetupController@updateinfo']]) }}

        <label for="Name">What is your name?
          <input type="text" name="name" placeholder="James Ang" required>
        </label>

        <label for="Occupation">What is your occupation?
          <input type="text" name="occupation" placeholder="Sales" required>
        </label>
      <button class="button submit" type="submit">Get Started!</button>
      {!! Form::close() !!}
    </div>


  </div>


  {{--  <div class="l-padded p-b-0 row">
      <div class="columns">
        <form enctype="multipart/form-data" method="post" action="/updateinfo">
          {{ csrf_field() }}
          <fieldset>
            <div class="form-group">
              <img src="/storage/{{ Auth::user()->avatar }}" style="width:150px; height:150px; border-radius:10%;"
                   alt="avatar">
            </div>

            <div class="form-group">
              <input type="file" name="avatar">
            </div>

          </fieldset>

          <fieldset>
            <h2>Last step, almost there!</h2>

            <div class="form-group">
              <label for="Name">What is your name?</label>
              <input type="text" name="name" placeholder="James Ang">
            </div>

            <div class="form-group">
              <label for="Occupation">What is your occupation?</label>
              <input type="text" name="occupation" placeholder="Sales">
            </div>


          </fieldset>

          <input type="submit" name="submit" class="submit btn btn-success" value="Submit"/>

        </form>


      </div>
    </div>--}}

@endsection('content')
@push('page_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script>
  // 1.upload image to local storage https://stackoverflow.com/questions/19183180/how-to-save-an-image-to-localstorage-and-display-it-on-the-next-page
  // 2.on upload success display image in canvas
  // 3.use croppie to crop
  // 4.on form submit update image
  Dropzone.options.profileUploadForm = {
    maxFiles: 1,
    paramName: 'avatar',
    uploadMultiple: false,
    resizeMethod: 'crop',
    clickable: true,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove',
    dictFileTooBig: 'Image is bigger than 8mb',
    thumbnailWidth: 300,
    thumbnailHeight: 300,
    acceptedFiles: 'image/*',
    init: function () {
      var dropzone = this
      this.on('maxfilesexceeded', function (file) {
        this.removeAllFiles()
        this.addFile(file)
      })

      this.on('addedfile', function (file) {
        console.log('file added')
        dropzone.processQueue()
      })

      this.on('removedfile', function (file) {
        axios.post('/setup/removeProfilePic').then(function (response) {
          console.log('pictures removed from server')
        })
      })
    }
  }

  $('.step .next').click(function () {
    $currStep = $(this).parent('.step');
    $nextStep = $currStep.next();
    $currStep.toggleClass('active');
    $nextStep.toggleClass('active');
    // check if element exist
    // add a previous button

    if ($(".previous.button").length === 0){
      $(".button.submit").before("<button class='previous button'>Previous</button>")
    }

    $(".previous.button").one('click',function(e){
      e.preventDefault();
      $currStep.toggleClass('active');
      $nextStep.toggleClass('active');
      console.log("hi");
      $temp = $currStep;
      $nextStep = $currStep;
      $currStep = $temp;
    })
  })

</script>
@endpush('page_scripts')











