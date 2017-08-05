@extends('layouts.master')
@section('content')
    <h1>Hello This is a pogram</h1>
    <h4>Program Name: {{ $program->programName() }}</h4>
    <group-chat :program_id="{{$program->id}}" :curr_user="{{ Auth::user() }}"></group-chat>
@endsection
@push('page_styles')
    <style>
        footer {
          display:none;
        }
    </style>
@endpush
