<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsSeeder extends Seeder {
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $teams_array = [
            [
                'name' => 'Punjab',
                'logo' => 'punjablogo.png',
                'club' => 'Punjablions',
                'state' => 'Punjab',
                'status' => 1,
            ], [
                'name' => 'Haryana',
                'logo' => 'harayanalogo.png',
                'club' => 'Haryanalions',
                'state' => 'Haryana',
                'status' => 1,
            ], [
                'name' => 'Delhi',
                'logo' => 'delhilogo.png',
                'club' => 'Delhilions',
                'state' => 'Delhi',
                'status' => 1,
            ], [
                'name' => 'UttarParsesh',
                'logo' => 'uttarparseshlogo.png',
                'club' => 'uttarparseshlions',
                'state' => 'UttarParsesh',
                'status' => 1,
            ]
        ];
        foreach($teams_array as $teams_arr){
            Team::create($teams_arr);
        
        }
    }

}
