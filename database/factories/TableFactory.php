<?php

namespace Database\Factories;

use App\Models\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

class TableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Table::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->country,
            'description' => $this->faker->text(200),
            'priority' => $this->faker->numberBetween(0,5),
            'seats' => $this->faker->numberBetween(2,16),
            'room_id' => 1,
            'profile_id' => 1,
        ];
    }
}
