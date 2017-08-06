@extends('layouts.master')
@section('content')

  @isset($programsOfUser)

    <div class="l-full-height">
      @foreach ($programsOfUser as $program)
      
      {!! Form::open(['action' => ['DashboardController@show', $program], 'method'=>"get"]) !!}

        <div class="l-padded p-b-0 row align-center">
          <div class="media-object">
            <div class="media-object-section">
              <div class="thumbnail company-logo">
                <img src="/{{ $program->serviceProvider->getCompanyLogoPath() }}" alt="Company Image"
                     class="round-corner">
              </div>
            </div>
            <div class="media-object-section main-section">
              <h4>{{$program->programName()}}</h4>
              <p class="medium-gray-text">by {{$program->serviceProvider->name}}</p>
              <button class="reward button">Earn up to $100 rewards</button>
            </div>
          </div>
        </div>
        
        {!! Form::close() !!}
        
      @endforeach
    </div>

  @endisset

  @if(!isset($programsOfUser) || count($programsOfUser) <= 0)
    <p>Due to wild populartity, there is nothing left for now, please check back later</p>
  @endif

@endsection
