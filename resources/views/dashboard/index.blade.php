@extends('layouts.master')
@section('content')

  @isset($programsOfUser)
    @foreach($programsOfUser as $programofuser)

      @foreach($programofuser->programMaterial as $programofusermat)
        <p>{{ $programofusermat->directory }}</p>
      @endforeach

    @endforeach
    <div class="l-padded p-b-0 row align-center">
    @foreach ($programsOfUser as $program)
        <div class="small-12 columns">
          <div class="media-object">
            <div class="media-object-section">
              <div class="thumbnail">
                <img src="{{ $program->serviceProvider->getCompanyLogoPath() }}" alt="Program Image">
              </div>
            </div>
            <div class="media-object-section main-section">
              <h4>{{ $program->name }}</h4>
              <p class="gray-text">{{$program->serviceProvider->name}}</p>
              <span class="reward">Earn up to $100 rewards</span>
            </div>
          </div>
        </div>
    @endforeach
    </div>
  @endisset

  @if(!isset($programsOfUser) || count($programsOfUser) <= 0)
    <p>Due to wild populartity, there is nothing left for now, please check back later</p>
  @endif

@endsection
