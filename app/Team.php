<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

 protected $table="teams";

public function users(){
	return $this->belongsToMany("App\User");
}

}
