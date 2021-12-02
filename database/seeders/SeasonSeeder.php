<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=2015;$i<=2021;$i++){
            Season::factory()->create(['name' => 'Saison '.$i,'year' => $i]);
        }
    }
}
