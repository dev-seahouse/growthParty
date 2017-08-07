@extends('layouts.master')

@section('nav')
  <div class="menu-bar l-restrained">
    <section class="info">
      <img src="/{{ $program->serviceProvider->getCompanyLogoPath() }}" alt="Company Image"
           class="logo round-corner">
      <div class="detail">
        <h2 class="title">{{$program->programName()}} Program</h2>
        <h3 class="subtitle">by {{ $program->serviceProvider->name }}</h3>
      </div>
    </section>

    <section class="menu controls">
      <a href="#" class="memu-item" data-toggle="offCanvas"><i class="fa fa-folder-open-o fa-2x" aria-hidden="true"></i></a>
      <a href="#" class="memu-item"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i></a>
    </section>

  </div>
@endsection

@section('content')
  <group-chat :program_id="{{$program->id}}" :curr_user="{{ Auth::user() }}"></group-chat>
  <doc-loader :documents="{{$program->materials}}"></doc-loader>
@endsection
@push('page_styles')
  <style>
    footer {
      display: none;
    }
  </style>
@endpush
