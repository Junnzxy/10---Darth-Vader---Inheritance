@props([
    'name' => 'Nama Karakter',
    'title' => 'Gelar / Title',
    'birthName' => null,
    'affiliation' => 'Afiliasi',
    'homeworld' => 'Planet Asal',
    'weapon' => 'Senjata Utama',
    'image' => 'https://images.unsplash.com/photo-1579566346927-c68383817a25?auto=format&fit=crop&w=800&q=80',
    'quote' => null
])

<!-- Blade Component: Profile Card Karakter Fiksi (Darth Vader) -->
<div class="relative bg-zinc-900/90 border border-zinc-800 hover:border-red-600/50 rounded-2xl overflow-hidden shadow-2xl transition-all duration-300 hover:shadow-sith-glow group">
    
    <!-- Accent Top Bar (Lightsaber Red Glow) -->
    <div class="h-1.5 w-full bg-gradient-to-r from-red-600 via-red-500 to-zinc-900"></div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 p-6 sm:p-8">
        
        <!-- Kolom Foto Karakter -->
        <div class="md:col-span-5 flex flex-col items-center justify-center">
            <div class="relative w-full max-w-xs aspect-[4/5] rounded-xl overflow-hidden border-2 border-zinc-700/60 group-hover:border-red-500/80 transition duration-300 shadow-lg">
                <img src="{{ $image }}" 
                     alt="{{ $name }}" 
                     class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-3 left-3 right-3 text-center">
                    <span class="inline-block px-3 py-1 bg-red-600/80 backdrop-blur-sm text-white text-xs font-mono font-semibold uppercase tracking-wider rounded-full shadow">
                        {{ $affiliation }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Kolom Informasi & Biodata -->
        <div class="md:col-span-7 flex flex-col justify-between space-y-4">
            <div>
                <!-- Header Card -->
                <div class="flex items-center justify-between border-b border-zinc-800 pb-3">
                    <div>
                        <h2 class="font-display text-2xl sm:text-3xl font-extrabold text-white tracking-wide group-hover:text-red-400 transition">
                            {{ $name }}
                        </h2>
                        <p class="text-sm font-medium text-red-500 tracking-wide mt-0.5">
                            {{ $title }}
                        </p>
                    </div>
                    <span class="text-xs font-mono text-zinc-500 border border-zinc-800 px-2.5 py-1 rounded">
                        SITH-01
                    </span>
                </div>

                <!-- Kutipan Ikonik -->
                @if($quote)
                <div class="mt-4 p-3.5 bg-zinc-950/60 border-l-4 border-red-600 rounded-r-lg">
                    <p class="text-xs sm:text-sm italic text-zinc-300">
                        "{{ $quote }}"
                    </p>
                </div>
                @endif

                <!-- Tabel Atribut / Spesifikasi Karakter -->
                <div class="grid grid-cols-2 gap-3 mt-4 text-xs sm:text-sm">
                    @if($birthName)
                    <div class="bg-zinc-800/40 p-2.5 rounded-lg border border-zinc-800/60">
                        <span class="text-zinc-500 block text-[11px] font-mono uppercase">Nama Asli</span>
                        <span class="font-semibold text-zinc-200">{{ $birthName }}</span>
                    </div>
                    @endif

                    <div class="bg-zinc-800/40 p-2.5 rounded-lg border border-zinc-800/60">
                        <span class="text-zinc-500 block text-[11px] font-mono uppercase">Planet Asal</span>
                        <span class="font-semibold text-zinc-200">{{ $homeworld }}</span>
                    </div>

                    <div class="bg-zinc-800/40 p-2.5 rounded-lg border border-zinc-800/60">
                        <span class="text-zinc-500 block text-[11px] font-mono uppercase">Senjata</span>
                        <span class="font-semibold text-red-400">{{ $weapon }}</span>
                    </div>

                    <div class="bg-zinc-800/40 p-2.5 rounded-lg border border-zinc-800/60">
                        <span class="text-zinc-500 block text-[11px] font-mono uppercase">Status Force</span>
                        <span class="font-semibold text-zinc-200">Dark Side Master</span>
                    </div>
                </div>

                <!-- Slot untuk Deskripsi atau Tambahan Lainnya -->
                @if(isset($slot) && $slot->isNotEmpty())
                <div class="mt-4 text-xs sm:text-sm text-zinc-400 leading-relaxed">
                    {{ $slot }}
                </div>
                @endif
            </div>

            <!-- Bagian Bawah / Aksi -->
            <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between">
                <span class="text-xs text-zinc-500 font-mono">Status: Imperial High Command</span>
                <a href="#biography" class="inline-flex items-center gap-1.5 text-xs font-semibold text-red-400 hover:text-red-300 transition">
                    Baca Biografi Lengkap 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
            </div>
        </div>

    </div>
</div>

