<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rakha Farid - Portofolio')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme:{
                extend:{
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
        {{-- Icon set --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .thin-divider { height: 1px; background: rgb(255, 255, 255); }

        .nav-blur { backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); }
    </style>

</head>
<body class="bg-neutral-900 text-white font-poppins">

    {{-- Navbar --}}
    <header class="fixed top-0 inset-x-0 z-50">
        <!-- Navbar -->
        <nav class="fixed top-0 left-0 right-0 z-50">
            <!-- Navbar wrapper full width -->
            <div class="h-16 flex items-center justify-between 
                        bg-[#14171C]/90 rounded-b-[15px] backdrop-blur-md shadow-md">

                <!-- Menu navigasi di kiri -->
                <ul class="hidden md:flex items-center gap-8 text-sm pl-6">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-300 hover:text-cyan-500' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white' : 'text-gray-300 hover:text-cyan-500' }}">About</a></li>
                    <li><a href="{{ route('experience-educations') }}" class="{{ request()->routeIs('experience-educations') ? 'text-white' : 'text-gray-300 hover:text-cyan-500' }}">Experience & Educations</a></li>
                    <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white' : 'text-gray-300 hover:text-cyan-500' }}">Projects</a></li>
                </ul>

                <!-- Logo F di pojok kanan -->
                <div class="flex items-center pr-6">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-f.png') }}" 
                            alt="Logo F" 
                            class="h-[63px] w-[63px] object-contain">
                    </a>
                </div>
            </div>
        </nav>



    </header>
    <main class="pt-16">
        @yield('content')
    </main>

    <footer class="py-8 text-center text-sm text-gray-400">
        © {{ date('Y') }} Rakha Farid. All rights reserved.
    </footer>

    <script>
        const btn = document.getElementById('menuBtn');
        const menu = document.getElementById('mobileMenu');
        if (btn) btn.addEventListener('click', () => menu.classList.toggle('hidden'));
    </script>

</body>
</html>