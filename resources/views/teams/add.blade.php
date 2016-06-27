@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				Ajouter Une Equipe
				</div>
				<div class="panel-body">
					<ul>
				    @foreach($errors->all() as $error)
				        <li>{{ $error }}</li>
				    @endforeach
				</ul>
				
				{!! Form::open(array('route' => 'team_store', 'class' => 'form')) !!}
				
				<div class="form-group">
				    {!! Form::label('Equipe') !!}
				    {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Equipe')) !!}
				</div>
				<div class="form-group">
				    {!! Form::label('Description') !!}
				    {!! Form::textarea('description', null, array('required','class'=>'form-control','rows'=>'10','cols'=>'80','id'=>'description', 'placeholder'=>'Activités')) !!}
				</div>
				
				<div class="form-group">
				    {!! Form::submit('Ajouter', array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
