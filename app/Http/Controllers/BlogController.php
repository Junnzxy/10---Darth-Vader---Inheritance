<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Menampilkan halaman Blog (Konten Karakter).
     * Berisi konten tentang tokoh karakter yang dipilih tim: Darth Vader.
     * Alur: Route -> Controller -> Model (Blog) -> View (blog)
     */
    public function index()
    {
        $title = "Character Blog - Darth Vader";

        // Mengambil data dari Model Blog (Database SQLite)
        try {
            $blogModel = Blog::first();
            $character = $blogModel ? $blogModel->toArray() : null;
        } catch (\Throwable $e) {
            $character = null;
        }

        // Fallback jika belum di-seed
        if (empty($character)) {
            $character = [
                'name' => 'Darth Vader',
                'birth_name' => 'Anakin Skywalker',
                'title' => 'Dark Lord of the Sith',
                'affiliation' => 'Galactic Empire / Sith Order',
                'quote' => 'You don\'t know the power of the dark side!',
                'image' => 'https://images.unsplash.com/photo-1579566346927-c68383817a25?auto=format&fit=crop&w=800&q=80',
                'homeworld' => 'Tatooine',
                'weapon' => 'Red-bladed Lightsaber',
                'description' => 'Darth Vader adalah salah satu tokoh paling ikonik dalam sejarah perfilman fiksi ilmiah. Lahir sebagai Anakin Skywalker, seorang Jedi berbakat yang diramalkan membawa keseimbangan bagi the Force, ia akhirnya jatuh ke sisi gelap (Dark Side) karena manipulasi Kaisar Palpatine dan rasa takut kehilangan orang yang dicintainya.',
                'powers' => [
                    'Master of Form V (Djem So) Lightsaber Combat',
                    'Telekinesis & Force Choke',
                    'Force Telepathy & Sense',
                    'Exceptional Starfighter Pilot & Mechanical Genius'
                ],
                'timeline' => [
                    ['period' => 'Age of Republic', 'event' => 'Ditemukan di Tatooine oleh Qui-Gon Jinn dan dilatih menjadi Jedi Knight oleh Obi-Wan Kenobi.'],
                    ['period' => 'Clone Wars', 'event' => 'Menjadi jenderal pahlawan perang Republik Galaktik, namun mulai terpengaruh bisikan Darth Sidious.'],
                    ['period' => 'Reign of the Empire', 'event' => 'Menjadi tangan kanan Emperor Palpatine dan memburu sisa-sisa kaum Jedi di seluruh galaksi.'],
                    ['period' => 'Battle of Endor', 'event' => 'Menebus dosanya dengan menyelamatkan putranya, Luke Skywalker, serta menghancurkan Emperor.']
                ]
            ];
        }

        return view('blog', compact('title', 'character'));
    }
}
