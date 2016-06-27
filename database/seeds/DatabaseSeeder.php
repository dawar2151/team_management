<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		
		
		DB::table('teams')->insert([
            'name' => "Equipe A",
            'description' => "Proneur de rendez-vous",
        ]);
		DB::table('teams')->insert([
            'name' => "Equipe B",
            'description' => "Prise en charge des clients",
        ]);
        DB::table('teams')->insert([
            'name' => "Equipe C",
            'description' => "Rendez-vous sur terain",
        ]);
        DB::table('teams')->insert([
           'name' => "Equipe Terain",
            'description' =>"Validation de rendez-vous",
        ]);
        
		
	}

}
