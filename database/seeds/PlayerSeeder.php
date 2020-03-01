<?php

use Illuminate\Database\Seeder;
use App\Player;

class PlayerSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $players_array = [
            [
                'team_id' => 1,
                'first_name' => 'Gurkeerat',
                'last_name' => 'Singh',
                'image' => 'Gurkeerat_singh.png',
                'jersey_number' => 1,
                'type' => 1,
                'player_role' => 2,
                'country' => 'India',
                'status' => 1,
            ], [
                'team_id' => 1,
                'first_name' => 'Anmolpreet',
                'last_name' => 'Singh',
                'image' => 'Anmolpreet_singh.png',
                'jersey_number' => 1,
                'type' => 1,
                'player_role' => 3,
                'country' => 'India',
                'status' => 1,
            ], [
                'team_id' => 1,
                'first_name' => 'Mandeep',
                'last_name' => 'Singh',
                'image' => 'Mandeep_singh.png',
                'jersey_number' => 1,
                'type' => 3,
                'player_role' => 4,
                'country' => 'India',
                'status' => 1,
            ], [
                'team_id' => 1,
                'first_name' => 'Sharad',
                'last_name' => 'Lumba',
                'image' => 'sharad_lumba.png',
                'jersey_number' => 1,
                'type' => 1,
                'player_role' => 1,
                'country' => 'India',
                'status' => 1,
            ], [
                'team_id' => 1,
                'first_name' => 'Shubman',
                'last_name' => 'Gill',
                'image' => 'shubman_gill.png',
                'jersey_number' => 1,
                'type' => 2,
                'player_role' => 1,
                'country' => 'India',
                'status' => 1,
            ], [
                'team_id' => 1,
                'first_name' => 'Ramandeep',
                'last_name' => 'Singh',
                'image' => 'ramandeep_singh.png',
                'jersey_number' => 1,
                'type' => 2,
                'player_role' => 1,
                'country' => 'India',
                'status' => 1,
            ]
        ];
        foreach ($players_array as $player_arr) {
            Team::create($player_arr);
        }
    }

}
