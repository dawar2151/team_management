@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				 Equipe : {{ $team->name }}
				</div>
				<div class="panel-body">
					{!! $team->description !!}
				<h4>Membre d'équipe</h4>
				<ul class="list-inline">
					@foreach($team->users as $user)
					<li>
						<button class="btn btn-primary btn-user" type="button">
								  {{$user->name}} <a href="#"><span class="badge">{{$user->email}}</span></a>
						</button>
					</li>	
					@endforeach
				</ul>	
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection
