<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Team;
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
               'name' => $this->faker->firstName(),
               'surname' => $this->faker->lastName(),
               'birth_date' => $this->faker->dateTimeBetween($startDate = '-35 years', $endDate = '-19 years'),
               'team_id' => Team::inRandomOrder()->first()->id,   
        ];
    }
}
