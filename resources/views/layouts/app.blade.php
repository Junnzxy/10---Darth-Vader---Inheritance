<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Darth Vader - Imperial Archives')</title>

    <!-- Google Fonts: Inter & Orbitron -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@600;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (Play CDN untuk styling instan tanpa perlu build tools) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Orbitron', 'sans-serif'],
                    },
                    colors: {
                        empire: {
                            950: '#060709',
                            900: '#0b0c10',
                            800: '#15171e',
                            700: '#1f242e',
                            600: '#2c3342',
                            red: '#ef233c',
                            glow: '#d90429',
                        }
                    },
                    boxShadow: {
                        'sith-glow': '0 0 25px rgba(239, 35, 60, 0.45)',
                        'sith-sm': '0 0 10px rgba(239, 35, 60, 0.35)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #08090d;
            background-image: 
                radial-gradient(at 0% 0%, rgba(239, 35, 60, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(22, 27, 34, 0.9) 0px, transparent 50%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="text-zinc-200 antialiased flex flex-col min-h-screen selection:bg-red-600 selection:text-white">

    <!-- Header & Navigasi -->
    @include('partials.navbar')

    <!-- Konten Utama (Blade Section) -->
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
