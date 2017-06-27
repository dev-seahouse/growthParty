@extends('layouts.master')
@section('content')
<!-- If user try to access this page without authenticated, redirect to /home  -->
<!-- If user is authenticated but have not setup, redirect to setup  -->


	@if(is_null($programsOfUser))
        // whatever you need to do here
        <p>Nothing</p>
    @else 
        @foreach($programsOfUser as $programofuser)

        @foreach($programofuser->programMaterial as $programofusermat)
        <p>{{ $programofusermat->directory }}</p>
        @endforeach

        @endforeach
    @endif



<div class="l-padded p-b-0 row">
	<div class="columns">
		<table style="width:100%">
			@foreach ($programsOfUser as $program)
			<tr>
				<th rowspan="3"><img src="/storage/{{ Auth::user()->avatar }}" alt="Program Image"></th>
				<td>{{ $program->name }}</td>
			</tr>
			<tr>
				<td>by {{ $program->serviceProvider->name }} 
					
				</td>

			</tr>
			<tr>
				<td>Earn up to $XXX rewards</td>
			</tr>
			@endforeach

		</table>
	</div>
</div>
@endsection
