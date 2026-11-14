@extends('layouts.app')

@section('title', $title ?? 'About - Tentang Website & Tim')

@section('content')

    <!-- Header Section Halaman About -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <span class="text-xs font-mono uppercase tracking-widest text-red-500 font-semibold">Dokumentasi Proyek</span>
        <h1 class="font-display text-3xl sm:text-4xl font-extrabold text-white mt-2">
            Tentang Website & Pengembang
        </h1>
        <p class="text-sm text-zinc-400 mt-3">
            Informasi komprehensif mengenai tujuan, isi platform, serta daftar mahasiswa yang mengembangkan website ini.
        </p>
    </div>

    <div class="space-y-10">
        
        <!-- Bagian 1: Tujuan & Isi Website -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-zinc-900/70 border border-zinc-800 rounded-2xl p-6 sm:p-8">
                <div class="w-10 h-10 rounded-lg bg-red-600/10 border border-red-500/20 flex items-center justify-center text-red-400 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="font-display text-xl font-bold text-white mb-2">Tujuan Website</h2>
                <p class="text-sm text-zinc-300 leading-relaxed">
                    {{ $aboutInfo['purpose'] }}
                </p>
            </div>

            <div class="bg-zinc-900/70 border border-zinc-800 rounded-2xl p-6 sm:p-8">
                <div class="w-10 h-10 rounded-lg bg-red-600/10 border border-red-500/20 flex items-center justify-center text-red-400 mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h2 class="font-display text-xl font-bold text-white mb-2">Teknologi yang Digunakan</h2>
                <p class="text-xs text-zinc-400 mb-3">Dibangun dengan arsitektur Laravel modern dan utility styling:</p>
                <div class="flex flex-wrap gap-2">
                    @foreach($aboutInfo['tech_stack'] as $tech)
                        <span class="px-3 py-1 bg-zinc-800 text-zinc-200 text-xs font-mono rounded-lg border border-zinc-700/60">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- Bagian 2: Daftar Pembuat / Anggota Tim (Hanya 2 Orang Saja) -->
        <div>
            <div class="border-b border-zinc-800 pb-3 mb-6">
                <h2 class="font-display text-2xl font-bold text-white">Tim Pengembang (2 Orang)</h2>
                <p class="text-xs text-zinc-400 mt-1">Daftar mahasiswa pengembang website portal karakter fiksi Darth Vader</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                @foreach($aboutInfo['team'] as $member)
                <div class="bg-zinc-900/80 border border-zinc-800 hover:border-red-500/40 rounded-2xl p-6 sm:p-8 flex flex-col items-center text-center transition group shadow-lg">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-zinc-800 to-zinc-700 border-2 border-red-500/40 flex items-center justify-center text-white font-display font-bold text-xl mb-4 group-hover:scale-105 transition">
                        {{ substr($member['name'], 0, 1) }}
                    </div>
                    <h3 class="font-bold text-base text-white group-hover:text-red-400 transition">{{ $member['name'] }}</h3>
                    <span class="text-xs font-mono text-red-400 mt-0.5">{{ $member['role'] }}</span>
                    @if(!empty($member['nim']))
                    <span class="text-xs text-zinc-500 mt-2 font-mono bg-zinc-800/80 px-2.5 py-1 rounded">{{ $member['nim'] }}</span>
                    @endif
                    @if(!empty($member['bio']))
                    <p class="text-xs text-zinc-400 mt-3 leading-relaxed border-t border-zinc-800/60 pt-3">
                        {{ $member['bio'] }}
                    </p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection
