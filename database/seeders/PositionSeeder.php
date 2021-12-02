<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::factory(8)->sequence(
            ['name' => 'Lanceur'],
            ['name' => '1ère Base'],
            ['name' => '2ème Base'],
            ['name' => '3ème Base'],
            ['name' => 'Outfield'],
            ['name' => 'Infield'],
            ['name' => 'Catcher'],
            ['name' => 'Arrêt court'],
        )->create();
    }
}
