	<div class="row">
      			<div class="col-md-6">
      				<h4>Utlisateurs</h4>
				        @foreach($users as $user)
							<button class="btn btn-primary btn-user" type="button">
							  {{$user->name}} <a href="#" onclick="addUserToTeam({{$user->id}},{{$team->id}})"><span class="badge">+</span></a>
							</button>
				        @endforeach
		        </div>
		        <div class="col-md-6">
		        	<h4>Membre d'équipe {{ $team->name }}</h4>
		        		 @foreach($team->users as $user)
							<button class="btn btn-primary btn-user" type="button">
							  {{$user->name}} <a href="#" onclick="removeUserFromTeam({{$user->id}},{{$team->id}})"><span class="badge">-</span></a>
							</button>
				        @endforeach
		        </div>
        </div>