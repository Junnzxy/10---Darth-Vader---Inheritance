<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\About;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Data untuk Model Home (View: Home - Highlight Navigasi)
        Home::firstOrCreate(
            ['section_code' => 'Section 01'],
            [
                'badge' => 'Informasi Proyek',
                'title' => 'Tentang Website & Pengembang',
                'description' => 'Ketahui tujuan pembuatan portal ini, arsitektur MVC (Route → Controller → Model → View), serta profil 2 mahasiswa pengembang.',
                'link_route' => 'about',
                'link_text' => 'Buka Halaman About →'
            ]
        );

        Home::firstOrCreate(
            ['section_code' => 'Section 02'],
            [
                'badge' => 'Tokoh Utama',
                'title' => 'Profil Lengkap Karakter',
                'description' => 'Eksplorasi Profile Card Darth Vader lengkap dengan biodata, kemampuan Force, sejarah Anakin Skywalker, dan visualisasi interaktif.',
                'link_route' => 'blog',
                'link_text' => 'Buka Halaman Blog →'
            ]
        );

        // 2. Data untuk Model About (View: About - Informasi & 2 Anggota Tim)
        About::firstOrCreate(
            ['name' => 'Tujuan Website', 'category' => 'purpose'],
            [
                'role' => 'Project Purpose',
                'nim' => null,
                'bio' => 'Website ini dibangun sebagai media interaktif untuk mendokumentasikan profil karakter fiksi Star Wars (Darth Vader) serta memenuhi tugas praktikum pemrograman web dengan arsitektur Laravel, Tailwind CSS, dan database SQLite.'
            ]
        );

        // Tim Pengembang: Hanya 2 Orang Saja
        About::firstOrCreate(
            ['name' => 'Nama Anggota 1', 'category' => 'team'],
            [
                'role' => 'Front-end & Blade Component',
                'nim' => 'NIM 1',
                'bio' => 'Bertanggung jawab dalam perancangan layout Blade, integrasi Tailwind CSS, styling komponen Profile Card, dan responsivitas halaman.'
            ]
        );

        About::firstOrCreate(
            ['name' => 'Nama Anggota 2', 'category' => 'team'],
            [
                'role' => 'Back-end & Database Eloquent',
                'nim' => 'NIM 2',
                'bio' => 'Bertanggung jawab dalam konfigurasi routing, pembuatan Controller logic, database migration, seeding SQLite, dan integrasi Model Eloquent.'
            ]
        );

        // 3. Data untuk Model Blog (View: Blog - Karakter Darth Vader)
        Blog::firstOrCreate(
            ['name' => 'Darth Vader'],
            [
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
            ]
        );
    }
}
