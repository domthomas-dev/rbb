<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'short_name' =>  $this->faker->word,
            'twitter' => $this->faker->word,
            'facebook' => $this->faker->word,
            'website' => $this->faker->url,
            'youtube' => $this->faker->word,
            'instagram' => $this->faker->word,
            'level' => null,
            'region_id' => Region::factory(),
        ];
    }
}
