<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman About (Tentang).
     * Berisi penjelasan tujuan website, isi, dan 2 orang tim pembuatnya.
     * Alur: Route -> Controller -> Model (About) -> View (about)
     */
    public function index()
    {
        $title = "About - Tentang Website & Tim";

        // Mengambil data tujuan website dan tim pengembang dari Model About (Database SQLite)
        try {
            $purposeRecord = About::where('category', 'purpose')->first();
            $purpose = $purposeRecord ? $purposeRecord->bio : null;

            $teamRecords = About::where('category', 'team')->get();
            $teamMembers = $teamRecords->isNotEmpty() ? $teamRecords->toArray() : [];
        } catch (\Throwable $e) {
            $purpose = null;
            $teamMembers = [];
        }

        // Fallback jika belum di-seed
        if (empty($purpose)) {
            $purpose = 'Website ini dibangun sebagai media interaktif untuk mendokumentasikan profil karakter fiksi Star Wars (Darth Vader) serta memenuhi tugas praktikum pemrograman web dengan arsitektur Laravel, Tailwind CSS, dan database SQLite.';
        }

        if (empty($teamMembers)) {
            $teamMembers = [
                ['name' => 'Nama Anggota 1', 'role' => 'Front-end & Blade Component', 'nim' => 'NIM 1', 'bio' => 'Bertanggung jawab dalam perancangan layout Blade, integrasi Tailwind CSS, styling komponen Profile Card, dan responsivitas halaman.'],
                ['name' => 'Nama Anggota 2', 'role' => 'Back-end & Database Eloquent', 'nim' => 'NIM 2', 'bio' => 'Bertanggung jawab dalam konfigurasi routing, pembuatan Controller logic, database migration, seeding SQLite, dan integrasi Model Eloquent.'],
            ];
        }

        $techStack = ['Laravel 10', 'Blade Templating', 'Tailwind CSS', 'PHP 8.1', 'SQLite Database', 'Eloquent ORM'];

        $aboutInfo = [
            'purpose' => $purpose,
            'tech_stack' => $techStack,
            'team' => $teamMembers
        ];

        return view('about', compact('title', 'aboutInfo'));
    }
}
