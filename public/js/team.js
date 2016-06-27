function addUserToTeam($user_id,$team_id){
	
	$.ajax({
		  method: "GET",
		  url: "team/addUserToTeam",
		  data:{'user_id':$user_id,'team_id':$team_id}
			 
	})
	.done(function( msg ) {
		loadTeamUser($team_id);
	});
	
}	
function removeUserFromTeam($user_id,$team_id){
	
	$.ajax({
		  method: "GET",
		  url: "team/removeUserFormTeam",
		  data:{'user_id':$user_id,'team_id':$team_id}
			 
	})
	.done(function( msg ) {
		loadTeamUser($team_id);
	});
	
}
function loadTeamUser($team_id){
	
	$.ajax({
		  method: "GET",
		  url: "team/"+$team_id+"/getUsers"
	})
	.done(function( msg ) {
		$(".modal-body").html(msg);
	});
	
}