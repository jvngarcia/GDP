<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->name,
            'code' => $this->faker->uuid(),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement([true, false]),
            'user_id' => $this->faker->randomElement([1]),
        ];
    }
}
