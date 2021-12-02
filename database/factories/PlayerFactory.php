<?php

namespace Database\Factories;

use App\Enums\BatingPosition;
use App\Enums\Gender;
use App\Enums\ThrowingHand;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gender' => Gender::MALE,
            'name' => $this->faker->lastName,
            'firstname' => $this->faker->firstName,
            'throwing_hand' => ThrowingHand::RIGHT,
            'bating_position' => BatingPosition::RIGHT,
            'size' => null,
            'weight' => null,
            'born_at' => null,
            'place_of_born' => null,
            'arriving_year' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
