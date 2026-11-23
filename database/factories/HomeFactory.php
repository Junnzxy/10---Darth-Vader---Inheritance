<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    protected $model = Home::class;

    public function definition(): array
    {
        return [
            'section_code' => 'Section ' . fake()->numerify('##'),
            'badge' => fake()->word(),
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'link_route' => 'home',
            'link_text' => 'Lihat Selengkapnya →',
        ];
    }
}
