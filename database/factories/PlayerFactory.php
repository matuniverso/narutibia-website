<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_id' => Account::factory(),
            'name' => $this->faker->firstName(),
            'vocation' => $this->faker->randomDigit(),
            'looktype' => $this->faker->randomDigit()
        ];
    }
}
