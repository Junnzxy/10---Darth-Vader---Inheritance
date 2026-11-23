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

        // Mengambil data dari Model Home (Database SQLite)
        try {
            $homeModel = Home::first();
            $home = $homeModel ? $homeModel->toArray() : [
                'section_code' => 'Section 01',
                'badge' => 'Informasi Proyek',
                'title' => 'Tentang Website & Pengembang',
                'description' => 'Ketahui tujuan pembuatan portal ini, arsitektur MVC (Route → Controller → Model → View), serta profil 2 mahasiswa pengembang.',
                'link_route' => 'about',
                'link_text' => 'Buka Halaman About →'
            ];
            $highlights = Home::all()->toArray();
        } catch (\Throwable $e) {
            $home = [];
            $highlights = [];
        }

        if (empty($highlights)) {
            $highlights = [$home];
        }

        return view('home', compact('title', 'description', 'home', 'highlights'));
    }
}
