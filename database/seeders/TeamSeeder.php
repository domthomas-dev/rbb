<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::factory(8)->sequence(
            ['name' => 'Division 1'],
            ['name' => 'Division 2'],
            ['name' => 'National 1'],
            ['name' => 'Regional'],
            ['name' => 'U15'],
            ['name' => 'U12'],
            ['name' => 'U9'],
            ['name' => 'Softball'],
        )
            ->create();
    }
}
