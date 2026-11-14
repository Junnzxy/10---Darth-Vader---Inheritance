<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman Home (Beranda).
     * Berisi pengenalan awal website dan navigasi ke About & Blog.
     * Alur: Route -> Controller -> Model (Home) -> View (home)
     */
    public function index()
    {
        $title = "Home - Imperial Character Portal";
        $description = "Portal arsip data karakter fiksi galaksi Star Wars. Jelajahi informasi mengenai tokoh legendaris Lord Darth Vader.";

        // Mengambil data highlight beranda dari Model Home (Database SQLite)
        try {
            $highlights = Home::all()->toArray();
        } catch (\Throwable $e) {
            $highlights = [];
        }

        // Fallback jika database belum di-seed
        if (empty($highlights)) {
            $highlights = [
                [
                    'section_code' => 'Section 01',
                    'badge' => 'Informasi Proyek',
                    'title' => 'Tentang Website & Pengembang',
                    'description' => 'Ketahui tujuan pembuatan portal ini, arsitektur MVC (Route → Controller → Model → View), serta profil 2 mahasiswa pengembang.',
                    'link_route' => 'about',
                    'link_text' => 'Buka Halaman About →'
                ],
                [
                    'section_code' => 'Section 02',
                    'badge' => 'Tokoh Utama',
                    'title' => 'Profil Lengkap Karakter',
                    'description' => 'Eksplorasi Profile Card Darth Vader lengkap dengan biodata, kemampuan Force, sejarah Anakin Skywalker, dan visualisasi interaktif.',
                    'link_route' => 'blog',
                    'link_text' => 'Buka Halaman Blog →'
                ]
            ];
        }

        return view('home', compact('title', 'description', 'highlights'));
    }
}
