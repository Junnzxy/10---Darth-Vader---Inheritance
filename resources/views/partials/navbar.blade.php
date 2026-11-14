<nav class="sticky top-0 z-50 bg-empire-900/95 backdrop-blur-md border-b border-zinc-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            
            <!-- Brand / Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-lg bg-zinc-900 border border-red-600/40 flex items-center justify-center text-red-500 group-hover:border-red-500 group-hover:shadow-sith-sm transition duration-300">
                    <!-- SVG Helm Darth Vader / Lambang Galactic Empire -->
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2L9.5 5.5H14.5L12 2ZM6.5 6L4 10V18H7V22H17V18H20V10L17.5 6H6.5ZM12 8C13.66 8 15 9.34 15 11C15 12.66 13.66 14 12 14C10.34 14 9 12.66 9 11C9 9.34 10.34 8 12 8ZM8 16H16V18H8V16Z"/>
                    </svg>
                </div>
                <div>
                    <span class="font-display font-black tracking-wider text-lg text-white group-hover:text-red-500 transition duration-300">VADER</span>
                    <span class="text-xs tracking-widest text-zinc-400 block -mt-1 font-mono uppercase">Archives</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-lg text-sm font-medium transition duration-200 {{ request()->routeIs('home') ? 'bg-red-600/15 text-red-400 border border-red-500/30 font-semibold' : 'text-zinc-300 hover:text-white hover:bg-zinc-800/60' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" 
                   class="px-4 py-2 rounded-lg text-sm font-medium transition duration-200 {{ request()->routeIs('about') ? 'bg-red-600/15 text-red-400 border border-red-500/30 font-semibold' : 'text-zinc-300 hover:text-white hover:bg-zinc-800/60' }}">
                    About
                </a>
                <a href="{{ route('blog') }}" 
                   class="px-4 py-2 rounded-lg text-sm font-medium transition duration-200 {{ request()->routeIs('blog') ? 'bg-red-600/15 text-red-400 border border-red-500/30 font-semibold' : 'text-zinc-300 hover:text-white hover:bg-zinc-800/60' }}">
                    Character Blog
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden">
                <button type="button" 
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" 
                        class="p-2 rounded-md text-zinc-400 hover:text-white hover:bg-zinc-800 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-empire-900 border-b border-zinc-800 px-4 pt-2 pb-4 space-y-1">
        <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-red-400 bg-red-600/15 font-semibold' : 'text-zinc-300 hover:bg-zinc-800' }}">Home</a>
        <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-red-400 bg-red-600/15 font-semibold' : 'text-zinc-300 hover:bg-zinc-800' }}">About</a>
        <a href="{{ route('blog') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('blog') ? 'text-red-400 bg-red-600/15 font-semibold' : 'text-zinc-300 hover:bg-zinc-800' }}">Character Blog</a>
    </div>
</nav>
