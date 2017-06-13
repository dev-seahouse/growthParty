@extends('layouts.master')
@push('page_styles')

<style>
  /*
HTML 5 Template Name:
File: 404 - 22 CSS
Author: OS Templates
Author URI: http://www.os-templates.com/
Licence: <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>
*/
  #fof {
    display: block;
    width: 100%;
    margin: 100px 0;
    line-height: 1.6em;
    text-align: center;
  }

  #fof .hgroup {
    text-transform: uppercase;
  }

  #fof .hgroup h1 {
    margin-bottom: 25px;
    font-size: 80px;
  }

  #fof .hgroup h1 span {
    display: inline-block;
    margin-left: 5px;
    padding: 2px;
    border: 1px solid #CCCCCC;
    overflow: hidden;
  }

  #fof .hgroup h1 span strong {
    display: inline-block;
    padding: 0 20px 20px;
    border: 1px solid #CCCCCC;
    font-weight: normal;
  }

  #fof .hgroup h2 {
    font-size: 60px;
  }

  #fof .hgroup h2 span {
    display: block;
    font-size: 30px;
  }

  #fof p {
    margin: 25px 0 0 0;
    padding: 0;
    font-size: 16px;
  }

  #fof p:first-child {
    margin-top: 0;
  }
</style>
@endpush('page_styles)
@section('content')
  <div class="wrapper row2">
    <div id="container" class="clear">
      <section id="fof" class="clear">
        <div class="hgroup">
          <h1><span><strong>5</strong></span><span><strong>0</strong></span><span><strong>0</strong></span></h1>
          <h2>We are sorry ! <span> We encountered a problem and our technicians are working on it</span></h2>
        </div>
        <p>Please press F5 to refresh the browser or try revisiting us later.</p>
        <p><a href="javascript:history.go(-1)">&laquo; Go Back</a> / <a href="#">Go Home &raquo;</a></p>
      </section>
    </div>
  </div>
@endsection