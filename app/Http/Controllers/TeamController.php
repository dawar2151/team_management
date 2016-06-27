<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeamFormRequest;
use App\Team;
use App\User;
use Illuminate\Http\Request;

class TeamController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teams=Team::get();
		$users=User::get();
		return view('home',compact('teams'),compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("teams.add");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TeamFormRequest $request)
	{
		$team=New Team();
		$team->name=$request->name;
		$team->description=$request->description;
		$team->save();
		return \Redirect::route('teams')->with('message', 'Équipe Enregistrée avec succès!');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$team=Team::find($id);
		return view('teams.show',compact('team'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$team=Team::find($id);
		return view('teams.edit',compact('team'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,TeamFormRequest $request)
	{
		$team=Team::find($id);
		$team->name=$request->name;
		$team->description=$request->description;
		$team->save();
		return \Redirect::route('teams')->with('message', 'Équipe modifié avec succès!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$team=Team::find($id);
		$team->delete();
		return \Redirect::route('teams')->with('message', 'Équipe '. $team->name .' a été supprimé avec succès!');
	}
	/**
	 * Get Team Users
	 */
	public function getTeamUsers($id){
		$team=Team::find($id);
		$users=User::get();
		return view('teams.team_users',compact('team','users'));
	}
	/**
	 * Add User to Team
	 */
	public function addUserToTeam(Request $request)
    {
        $team=Team::find($request->input('team_id'));
        $user=User::find($request->input('user_id'));
        $team->users()->save($user);
	}
	/**
	 * Remove User From Team
	 */
	public function removeUserFormTeam(Request $request)
    {
        $team=Team::find($request->input('team_id'));
        $user=User::find($request->input('user_id'));
        $team->users()->detach($user);
	}

}
