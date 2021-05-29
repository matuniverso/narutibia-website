<?php

namespace Database\Factories;

use App\Models\Guild;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuildFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guild::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realTextBetween(5, 16),
            'ownerid' => Player::factory()
        ];
    }
}
