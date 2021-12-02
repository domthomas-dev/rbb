<?php

namespace Database\Seeders;

use App\Enums\BatingPosition;
use App\Enums\ThrowingHand;
use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::factory()->create([
            'name' => 'Thomas',
            'firstname' => 'Nathan',
            'throwing_hand' => ThrowingHand::LEFT,
            'bating_position' => BatingPosition::LEFT,
            'size' => 168,
            'weight' => 60,
            'born_at' => '2007-05-06',
            'place_of_born' => 'Mont St Aignan',
            'arriving_year' => '2020',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
