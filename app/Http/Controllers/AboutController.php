<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman About (Tentang Website & Tim Pengembang).
     * Alur: Route -> Controller -> Model (About) -> View (about)
     */
    public function index()
    {
        $title = "About - Tentang Website & Tim";

        try {
            $purposeModel = About::where('category', 'purpose')->first();
            $teamModels = About::where('category', 'team')->get();

            $about = $purposeModel ? $purposeModel->toArray() : [
                'name' => 'Tujuan Website',
                'category' => 'purpose',
                'role' => 'Project Purpose',
                'nim' => null,
                'bio' => 'Website ini dibangun sebagai media interaktif untuk mendokumentasikan profil karakter fiksi Star Wars (Darth Vader).'
            ];

            $aboutInfo = [
                'purpose' => $purposeModel ? $purposeModel->bio : 'Website ini dibangun sebagai media interaktif untuk mendokumentasikan profil karakter fiksi Star Wars (Darth Vader) serta memenuhi tugas praktikum pemrograman web dengan arsitektur Laravel, Tailwind CSS, dan database SQLite.',
                'tech_stack' => ['Laravel 10', 'PHP 8.1', 'Tailwind CSS Play CDN', 'SQLite Database', 'Blade Layouts & Components', 'Eloquent Relationships (One to Many)'],
                'team' => $teamModels->isNotEmpty() ? $teamModels->toArray() : [
                    [
                        'name' => 'Nama Anggota 1',
                        'role' => 'Front-end & Blade Component',
                        'nim' => 'NIM 1',
                        'bio' => 'Bertanggung jawab dalam perancangan layout Blade, integrasi Tailwind CSS, styling komponen Profile Card, dan responsivitas halaman.'
                    ],
                    [
                        'name' => 'Nama Anggota 2',
                        'role' => 'Back-end & Database Eloquent',
                        'nim' => 'NIM 2',
                        'bio' => 'Bertanggung jawab dalam konfigurasi routing, pembuatan Controller logic, database migration, seeding SQLite, dan integrasi Model Eloquent.'
                    ]
                ]
            ];
        } catch (\Throwable $e) {
            $about = [];
            $aboutInfo = [
                'purpose' => 'Website ini dibangun sebagai media interaktif untuk mendokumentasikan profil karakter fiksi Star Wars (Darth Vader).',
                'tech_stack' => ['Laravel 10', 'Tailwind CSS', 'SQLite'],
                'team' => []
            ];
        }

        return view('about', compact('title', 'about', 'aboutInfo'));
    }
}
