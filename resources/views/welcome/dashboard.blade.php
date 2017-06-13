@extends('layouts.master')
@section('content')
  <h1>Welcome to main application</h1>
  <ul>
    <li>If user try to access this page without authenticated, redirect to /home </li>
    <li>If user is authenticated but have not setup, redirect to setup</li>
  </ul>
@endsection
