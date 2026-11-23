<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'name' => 'Darth Vader',
            'birth_name' => 'Anakin Skywalker',
            'title' => 'Dark Lord of the Sith',
            'affiliation' => 'Galactic Empire / Sith Order',
            'quote' => 'You don\'t know the power of the dark side!',
            'image' => 'https://images.unsplash.com/photo-1579566346927-c68383817a25?auto=format&fit=crop&w=800&q=80',
            'homeworld' => 'Tatooine',
            'weapon' => 'Red-bladed Lightsaber',
            'description' => fake()->paragraph(3),
            'powers' => [
                'Master of Form V (Djem So) Lightsaber Combat',
                'Telekinesis & Force Choke',
                'Force Telepathy & Sense',
            ],
            'timeline' => [
                ['period' => 'Age of Republic', 'event' => 'Ditemukan di Tatooine oleh Qui-Gon Jinn.'],
                ['period' => 'Reign of the Empire', 'event' => 'Menjadi tangan kanan Emperor Palpatine.'],
            ],
        ];
    }
}
