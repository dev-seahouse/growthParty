@extends('layouts.master')


@section('title')
  Account Setup - Growth Party
@endsection

@section('content')
  <!-- How it works -->
  <div class="l-padded p-b-0 row">
    <div class="columns">
    <h2>First Impression count</h2>
    <p>Time to use your charm. Smile!</p>

    <form enctype="multipart/form-data" method="post" action="/updateinfo">
    {{ csrf_field() }}

    	<fieldset>
		    <div class="form-group">
		    <img src="/storage/{{ Auth::user()->avatar }}" style="width:150px; height:150px; border-radius:10%;" alt="avatar">
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

		<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />

    </form>


    </div>
  </div>


@endsection






