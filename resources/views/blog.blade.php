@extends('layouts.app')

@section('title', $title ?? 'Character Blog - Darth Vader')

@section('content')

    <!-- Header Halaman Blog Karakter -->
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <span class="text-xs font-mono uppercase tracking-widest text-red-500 font-semibold">Galactic Archives &bull; Sith Dossier</span>
        <h1 class="font-display text-3xl sm:text-5xl font-extrabold text-white mt-2">
            Profil Karakter: {{ $blog['name'] ?? $character['name'] }}
        </h1>
        <p class="text-sm text-zinc-400 mt-2">
            Arsip lengkap data biodata, spesifikasi kekuatan Force, dan rekaman sejarah tokoh fiksi legendaris Star Wars.
        </p>
    </div>

    <!-- AREA UTAMA: PROFILE CARD KARAKTER FIKSI (DARTH VADER) -->
    <div class="mb-14">
        <x-profile-card 
            :name="$blog['name'] ?? $character['name']"
            :title="$blog['title'] ?? $character['title']"
            :birthName="$blog['birth_name'] ?? $character['birth_name']"
            :affiliation="$blog['affiliation'] ?? $character['affiliation']"
            :homeworld="$blog['homeworld'] ?? $character['homeworld']"
            :weapon="$blog['weapon'] ?? $character['weapon']"
            :image="$blog['image'] ?? $character['image']"
            :quote="$blog['quote'] ?? $character['quote']"
        >
            <p>
                Darth Vader adalah Lord of the Sith yang memimpin armada militer Kekaisaran Galaktik. Dilengkapi dengan armor penopang hidup dan lightsaber merah legendaris, kehadirannya menebarkan ketakutan di seluruh sistem bintang.
            </p>
        </x-profile-card>
    </div>

    <!-- Detail Tambahan / Konten Blog Terkait Karakter -->
    <div id="biography" class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-14">
        
        <!-- Kolom Kiri: Biografi, Linimasa, & Spesifikasi Armor -->
        <div class="lg:col-span-8 space-y-8">
            
            <!-- Biografi Singkat -->
            <div class="bg-zinc-900/60 border border-zinc-800 rounded-2xl p-6 sm:p-8">
                <h3 class="font-display text-xl font-bold text-white mb-4 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    Biografi Karakter
                </h3>
                <p class="text-sm sm:text-base text-zinc-300 leading-relaxed">
                    {{ $blog['description'] ?? $character['description'] }}
                </p>
            </div>

            <!-- Timeline Perjalanan Karakter -->
            <div class="bg-zinc-900/60 border border-zinc-800 rounded-2xl p-6 sm:p-8">
                <h3 class="font-display text-xl font-bold text-white mb-6 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    Linimasa Tokoh (Timeline)
                </h3>
                <div class="space-y-6 border-l-2 border-zinc-800 ml-3 pl-6">
                    @php $timeline = $blog['timeline'] ?? $character['timeline'] ?? []; @endphp
                    @if(!empty($timeline))
                        @foreach($timeline as $item)
                        <div class="relative group">
                            <div class="absolute -left-[31px] top-1.5 w-3 h-3 rounded-full bg-zinc-700 border-2 border-zinc-900 group-hover:bg-red-500 transition"></div>
                            <span class="text-xs font-mono uppercase tracking-wider text-red-400 font-bold block mb-1">
                                {{ $item['period'] }}
                            </span>
                            <p class="text-sm text-zinc-300">
                                {{ $item['event'] }}
                            </p>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Spesifikasi Baju Zirah & Armor Penopang Hidup -->
            <div class="bg-zinc-900/60 border border-zinc-800 rounded-2xl p-6 sm:p-8">
                <h3 class="font-display text-xl font-bold text-white mb-4 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    Spesifikasi Cybernetic Life Support Suit
                </h3>
                <p class="text-xs sm:text-sm text-zinc-400 mb-6 leading-relaxed">
                    Armor hitam Darth Vader bukan sekadar pakaian perang pelindung, melainkan sistem penopang kehidupan biologis portabel terintegrasi setelah duel di Mustafar.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-zinc-800/40 border border-zinc-800/80 p-4 rounded-xl">
                        <span class="text-red-400 font-mono text-xs font-bold block">01 &bull; Helm & Respirator</span>
                        <h4 class="text-white text-sm font-bold mt-1">Siklus Oksigen Tekan</h4>
                        <p class="text-xs text-zinc-400 mt-1">Menghasilkan suara nafas ikonik yang mengatur filtrasi gas beracun mekanik.</p>
                    </div>
                    <div class="bg-zinc-800/40 border border-zinc-800/80 p-4 rounded-xl">
                        <span class="text-red-400 font-mono text-xs font-bold block">02 &bull; Pelindung Dada</span>
                        <h4 class="text-white text-sm font-bold mt-1">Computerized Chest Panel</h4>
                        <p class="text-xs text-zinc-400 mt-1">Panel tombol pengontrol sirkulasi darah dan monitoring fungsi syaraf sintetis.</p>
                    </div>
                    <div class="bg-zinc-800/40 border border-zinc-800/80 p-4 rounded-xl">
                        <span class="text-red-400 font-mono text-xs font-bold block">03 &bull; Tangan Robotik</span>
                        <h4 class="text-white text-sm font-bold mt-1">Titanium Prosthetics</h4>
                        <p class="text-xs text-zinc-400 mt-1">Memberikan kekuatan cengkeraman mekanik berkekuatan kinetik tinggi.</p>
                    </div>
                    <div class="bg-zinc-800/40 border border-zinc-800/80 p-4 rounded-xl">
                        <span class="text-red-400 font-mono text-xs font-bold block">04 &bull; Material Zirah</span>
                        <h4 class="text-white text-sm font-bold mt-1">Obsidian Durasteel</h4>
                        <p class="text-xs text-zinc-400 mt-1">Kebal terhadap tembakan blaster langsung dan serpihan ledakan medan perang.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Kolom Kanan: Kemampuan & Quote Banner -->
        <div class="lg:col-span-4 space-y-6">
            
            <!-- Kemampuan & Force Powers -->
            <div class="bg-zinc-900/60 border border-zinc-800 rounded-2xl p-6">
                <h3 class="font-display text-lg font-bold text-white mb-4 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                    Kemampuan & Force Powers
                </h3>
                <ul class="space-y-3">
                    @php $powers = $blog['powers'] ?? $character['powers'] ?? []; @endphp
                    @if(!empty($powers))
                        @foreach($powers as $power)
                        <li class="flex items-start gap-3 text-xs sm:text-sm text-zinc-300">
                            <svg class="w-4 h-4 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ $power }}</span>
                        </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <!-- Quote Banner Ikonik -->
            <div class="bg-gradient-to-br from-red-950/40 via-zinc-900 to-zinc-900 border border-red-900/50 rounded-2xl p-6 shadow-lg">
                <span class="text-[11px] font-mono text-red-400 uppercase tracking-widest block mb-2">&bull; Imperial Philosophy</span>
                <p class="text-sm italic text-zinc-200 leading-relaxed font-serif">
                    "I find your lack of faith disturbing."
                </p>
                <span class="text-xs font-mono text-zinc-500 mt-3 block text-right">&mdash; Star Wars: A New Hope</span>
            </div>

            <!-- Tombol Navigasi Cepat -->
            <div class="bg-zinc-900/60 border border-zinc-800 rounded-2xl p-5 text-center">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center gap-2 w-full py-2.5 px-4 rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold text-zinc-200 transition">
                    &larr; Kembali ke Beranda
                </a>
            </div>

        </div>

    </div>

    <!-- SECTION RELASI ONE TO MANY: ARSIP LOG / POSTS BERDASARKAN AUTHOR -->
    <div class="border-t border-zinc-800 pt-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="text-xs font-mono uppercase tracking-widest text-red-500 font-semibold">Eloquent Relationship &bull; One to Many</span>
                <h2 class="font-display text-2xl sm:text-3xl font-extrabold text-white mt-1">
                    Imperial Transmissions & Logs
                </h2>
                <p class="text-xs sm:text-sm text-zinc-400 mt-1">
                    Catatan arsip kekaisaran yang ditulis oleh berbagai tokoh (User hasMany Posts &bull; Post belongsTo Author).
                </p>
            </div>
            <span class="hidden sm:inline-block px-3 py-1 bg-zinc-900 border border-zinc-800 rounded-full text-xs font-mono text-zinc-400">
                Total: {{ count($posts) }} Catatan
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($posts as $post)
            <article class="bg-zinc-900/70 border border-zinc-800 hover:border-red-900/50 rounded-2xl p-6 flex flex-col justify-between transition group shadow-md hover:shadow-sith-sm">
                <div>
                    <!-- Meta Relasi: Author (User) -->
                    <div class="flex items-center justify-between text-xs text-zinc-400 mb-3">
                        <span class="inline-flex items-center gap-1.5 font-medium text-red-400 font-mono">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            {{ $post->author->name }}
                        </span>
                        <span class="text-zinc-500 font-mono text-[11px]">
                            {{ $post->created_at ? $post->created_at->diffForHumans() : 'Recent' }}
                        </span>
                    </div>

                    <h3 class="font-display font-bold text-lg text-white group-hover:text-red-400 transition mb-2 line-clamp-2">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            {{ $post->title }}
                        </a>
                    </h3>

                    <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed line-clamp-3">
                        {{ $post->body }}
                    </p>
                </div>

                <div class="mt-4 pt-4 border-t border-zinc-800/80 flex items-center justify-between">
                    <a href="{{ route('posts.show', $post->slug) }}" class="text-xs font-semibold text-red-400 hover:text-red-300 inline-flex items-center gap-1 transition">
                        Baca Selengkapnya &rarr;
                    </a>
                    <span class="text-[11px] font-mono text-zinc-500">
                        Author ID: #{{ $post->author_id }}
                    </span>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-12 bg-zinc-900/40 border border-zinc-800 rounded-2xl">
                <p class="text-sm text-zinc-400">Belum ada catatan transmisi kekaisaran yang di-seed.</p>
            </div>
            @endforelse
        </div>
    </div>

@endsection
