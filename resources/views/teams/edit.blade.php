@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					Modifier Une Equipe
				</div>
				<div class="panel-body">
					<ul>
				    @foreach($errors->all() as $error)
				        <li>{{ $error }}</li>
				    @endforeach
				</ul>
				
				{!! Form::open(array('route' => array('team_update','team'=>$team->id), 'class' => 'form')) !!}
				
				<div class="form-group">
				    {!! Form::label('Equipe') !!}
				    {!! Form::text('name', $team->name, array('required', 'class'=>'form-control', 'placeholder'=>'Equipe')) !!}
				</div>
				<div class="form-group">
				    {!! Form::label('Description') !!}
				    {!! Form::textarea('description', $team->description, array('required','class'=>'form-control', 'placeholder'=>'Activités')) !!}
				</div>
				
				<div class="form-group">
				    {!! Form::submit('Modifier', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
