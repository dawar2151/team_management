@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				Equipes
				<a href="{{ URL::route('team_create')}}" class="pull-right" style="font-size: 20px;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				</div>
				<div class="panel-body">
					@if(Session::has('message'))
					    <div class="alert alert-success fade in">
					     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					      {{Session::get('message')}}
					    </div>
					@endif
					<table class="table">
						<thead>
							 <tr>
				                <th>Equipe</th>
				                <th>Description</th>
				                <th>Nombre Utilisateurs</th>
				                <th>Operations</th>
				        	</tr>	
				        </thead> 
				        <tbody>
				        	@foreach ($teams as $team)
					    		<tr>
					    			<td>{{ $team->name }}</td>
					    			<td>{!! $team->description !!}</td>
					    			<td>{{ $team->users()->count() }}</td>
					    			<td>
					    				<a href="{{ URL::route('team_edit',array('team'=>$team->id)) }}"><span><i class="fa fa-edit"></i></span></a>
					    				<a href="{{ URL::route('team_show',array('team'=>$team->id)) }}"><span><i class="fa fa-eye"></i></span></a>
					    				<a href="{{ URL::route('team_destroy',array('team'=>$team->id)) }}" onclick="return confirm('Voulez vraiment supprimer L\'equipe{{ $team->name }}?');"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
					    				<a href="#" onclick="loadTeamUser({{$team->id}})" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-street-view" aria-hidden="true"></i></span></a>
					    			</td>
					    		</tr>
							@endforeach
				        </tbody>       
					</table>
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Gestion des utilisateurs d'equipes</h4>
					      </div>
					      <div class="modal-body">
					      	
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					
					  </div>
					</div>
		</div>
	</div>
</div>
</div></div>
@endsection
