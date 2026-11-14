@extends('layouts.app')

@section('title', $title ?? 'Home - Imperial Character Portal')

@section('content')

    <!-- Hero Section / Pengenalan Awal -->
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-b from-zinc-900 via-empire-900 to-black border border-zinc-800 p-8 sm:p-14 mb-10 shadow-2xl">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-600/10 border border-red-500/30 text-red-400 text-xs font-mono uppercase tracking-wider mb-6">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                Star Wars Character Archive
            </div>
            <h1 class="font-display text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight">
                GALACTIC <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">ARCHIVES</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-zinc-300 leading-relaxed">
                {{ $description }}
            </p>

            <!-- Navigasi Utama ke Halaman Lain (About & Blog) -->
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="{{ route('blog') }}" 
                   class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-red-600 hover:bg-red-500 text-white font-semibold text-sm shadow-sith-sm hover:shadow-sith-glow transition duration-300">
                    <span>Eksplorasi Karakter Darth Vader</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="{{ route('about') }}" 
                   class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-zinc-800/80 hover:bg-zinc-700/80 text-zinc-200 border border-zinc-700 font-semibold text-sm transition duration-300">
                    <span>Tentang Website & Pengembang</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Stat Highlights -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        <div class="bg-zinc-900/60 border border-zinc-800/80 p-4 rounded-xl text-center">
            <span class="text-[11px] font-mono uppercase text-zinc-500 block">Karakter Utama</span>
            <span class="font-display font-bold text-lg text-white mt-0.5 block">Darth Vader</span>
        </div>
        <div class="bg-zinc-900/60 border border-zinc-800/80 p-4 rounded-xl text-center">
            <span class="text-[11px] font-mono uppercase text-zinc-500 block">Afiliasi</span>
            <span class="font-display font-bold text-lg text-red-400 mt-0.5 block">Galactic Empire</span>
        </div>
        <div class="bg-zinc-900/60 border border-zinc-800/80 p-4 rounded-xl text-center">
            <span class="text-[11px] font-mono uppercase text-zinc-500 block">Gaya Bertarung</span>
            <span class="font-display font-bold text-lg text-white mt-0.5 block">Form V (Djem So)</span>
        </div>
        <div class="bg-zinc-900/60 border border-zinc-800/80 p-4 rounded-xl text-center">
            <span class="text-[11px] font-mono uppercase text-zinc-500 block">Komando Pasukan</span>
            <span class="font-display font-bold text-lg text-red-400 mt-0.5 block">501st Legion</span>
        </div>
    </div>

    <!-- Section Preview / Highlight (Diambil dari Model Home) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($highlights as $item)
        <div class="bg-zinc-900/60 border border-zinc-800/80 rounded-2xl p-6 sm:p-8 flex flex-col justify-between hover:border-red-900/40 transition">
            <div>
                <span class="text-xs font-mono text-red-400 uppercase tracking-widest">
                    {{ $item['section_code'] }} @if(!empty($item['badge'])) &bull; {{ $item['badge'] }} @endif
                </span>
                <h2 class="font-display text-2xl font-bold text-white mt-2 mb-3">{{ $item['title'] }}</h2>
                <p class="text-sm text-zinc-400 leading-relaxed">
                    {{ $item['description'] }}
                </p>
            </div>
            <div class="mt-6">
                <a href="{{ route($item['link_route']) }}" class="text-sm font-semibold text-red-400 hover:text-red-300 inline-flex items-center gap-1.5 transition">
                    {{ $item['link_text'] }}
                </a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
