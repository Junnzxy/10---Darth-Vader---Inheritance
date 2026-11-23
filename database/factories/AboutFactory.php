<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<About>
 */
class AboutFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category' => $this->faker->word(),
            'name' => $this->faker->name(),
            'role' => $this->faker->jobTitle(),
            'nim' => $this->faker->unique()->numerify('##########'),
            'bio' => $this->faker->sentence(),
        ];
    }
}