<footer class="bg-empire-900 border-t border-zinc-800/80 mt-auto py-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
            <div>
                <p class="font-display text-sm tracking-wider font-bold text-zinc-300">
                    GALACTIC EMPIRE ARCHIVES &copy; {{ date('Y') }}
                </p>
                <p class="text-xs text-zinc-500 mt-1">
                    Portal Dokumentasi & Arsip Karakter Fiksi Star Wars: Lord Darth Vader.
                </p>
            </div>
            <div class="flex items-center gap-6 text-xs text-zinc-400">
                <a href="{{ route('home') }}" class="hover:text-red-400 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-red-400 transition">About</a>
                <a href="{{ route('blog') }}" class="hover:text-red-400 transition">Character Blog</a>
            </div>
        </div>
    </div>
</footer>
