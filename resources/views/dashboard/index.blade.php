@extends('layouts.master')
@section('content')

	@isset($programsOfUser)
		@foreach($programsOfUser as $programofuser)

			@foreach($programofuser->programMaterial as $programofusermat)
				<p>{{ $programofusermat->directory }}</p>
			@endforeach

		@endforeach

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
	@endisset

	@empty($programsOfUser)
		<p>Due to wild populartity, there is nothing left for now, please check back later</p>
	@endempty

@endsection
