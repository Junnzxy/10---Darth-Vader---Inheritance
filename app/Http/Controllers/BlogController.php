<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Menampilkan halaman Blog (Konten Karakter & Imperial Posts).
     * Mendemonstrasikan Model Blog serta Eloquent One to Many (User hasMany Post).
     * Alur: Route -> Controller -> Model (Blog & Post) -> View (blog)
     */
    public function index()
    {
        $title = "Character Blog - Darth Vader";

        // Mengambil data dari Model Blog (Database SQLite)
        try {
            $blogModel = Blog::first();
            $blog = $blogModel ? $blogModel->toArray() : null;
            $character = $blog;
            $posts = Post::with('author')->latest()->get();
        } catch (\Throwable $e) {
            $blog = null;
            $character = null;
            $posts = collect();
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
            $blog = $character;
        }

        return view('blog', compact('title', 'blog', 'character', 'posts'));
    }

    /**
     * Menampilkan detail single post (One to Many: Post milik User/Author)
     */
    public function show(Post $post)
    {
        $title = $post->title . " - Imperial Post";
        return view('post', compact('title', 'post'));
    }
}
