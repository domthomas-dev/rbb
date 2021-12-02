<?php

namespace Database\Seeders;

use App\Enums\ClubLevel;
use App\Models\Club;
use App\Models\Region;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::factory()->create(
            [
                'short_name' => 'Les huskies de Rouen',
                'name' => 'Rouen Baseball 76',
                'website' => 'http://www.rouenbaseball76.com/',
                'facebook' => 'RouenBaseball76',
                'twitter' => 'rouenbaseball76',
                'instagram' => 'rouen_huskies',
                'youtube' => 'channel/UC-NIa1r6gTtOF4XxNqxBoFQ',
                'level' => ClubLevel::ELITE,
                'region_id' => Region::where('name','Normandie')->first()->id,
            ]
        );
    }
}
