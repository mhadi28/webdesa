<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Edukasi Kesehatan Desa Sukamulya</title>
    <link rel="Shortcut Icon" href="{{ asset('assets/images/logodesa.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/brands.min.css" integrity="sha512-ym1f+T15aiJGZ1y6zs1XEpr8qheyBcOPqjFYNf2UfRmfIt5Pdsp7SD5O74fmsFB+rxxO6ejRqiooutodoNSjRQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- carousel -->
    {{-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> --}}
    <!--chart js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.min.js"></script>
</head>
<body class="bg-slate-100 z-0">
    <!-- Header -->
    <header class="bg-[#018577] px-9 py-4 relative z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Logo and Village Name -->
            <div class="flex items-center">
                <img src="{{ asset('assets/images/logodesa.png') }}" alt="Logo Desa Sukamulya" class="h-10 w-10 mr-2">
                <div>
                    <h1 class="text-white text-xl font-bold">Desa Sukamulya</h1>
                    <h2 class="text-white text-sm font-bold">Kabupaten Tangerang</h2>
                </div>
            </div>
            <nav class="hidden md:flex items-center space-x-4">
                <a href="/" class="text-white text-lg font-medium hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1">Beranda</a>

                <!-- Dropdown Profil Desa -->
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="text-white text-lg font-medium hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 flex items-center" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Info Desa <i class="fa-solid fa-caret-down ml-1"></i>
                        </button>
                    </div>

                    <!-- Dropdown menu -->
                    <div class="absolute left-0 mt-2 w-24 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden z-50" id="dropdown-menu" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="/profil" class="text-gray-700 block px-4 py-2 font-medium text-sm" role="menuitem" tabindex="-1">Profil Desa</a>
                            <a href="/infografis" class="text-gray-700 block px-4 py-2 font-medium text-sm" role="menuitem" tabindex="-1">infografis</a>
                            <a href="/kegiatan" class="text-gray-700 block px-4 py-2 font-medium text-sm" role="menuitem" tabindex="-1">Info Kegiatan</a>
                        </div>
                    </div>
                </div>

                <a href="/artikel" class="text-white text-lg font-medium hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1">Artikel</a>
                <a href="/kontak" class="text-white text-lg font-medium hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1">Kontak</a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#018577] px-4 py-2 z-50">
            <a href="/" class="block text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 py-1">Beranda</a>
            <div class="relative">
                <button class="text-left text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 py-1 flex items-center justify-between" id="mobile-menu-button-profil">
                    Info Desa <i class="fa-solid fa-caret-down ml-1"></i>
                </button>
                <!-- Mobile Dropdown menu -->
                <div class="origin-top-right absolute left-0 mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden z-50" id="mobile-dropdown-menu" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button-profil" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="/profil" class="text-gray-700 block px-4 py-2 font-medium text-sm" role="menuitem" tabindex="-1">Profil Desa</a>
                        <a href="/infografis" class="text-gray-700 block px-4 py-2 font-medium text-sm" role="menuitem" tabindex="-1">Info Grafis</a>
                        <a href="/kegiatan" class="text-gray-700 block px-4 py-2 font-medium text-sm" role="menuitem" tabindex="-1">Info Kegiatan</a>
                    </div>
                </div>
            </div>
            <a href="/artikel" class="block text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 py-1">Artikel</a>
            <a href="/kontak" class="block text-white hover:underline transition duration-300 ease-in-out transform hover:-translate-y-1 py-1">Kontak</a>
        </div>

        @yield('content')


        <!-- Footer -->
        <footer class="bg-[#018577] text-white py-8">
            <div class="container mx-auto text-center">
                <div class="flex justify-center mb-4">
                    <a href="https://www.facebook.com/kecamatansukamulya/" target="_blank" class="mx-2">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/kec_sukamulya" target="_blank" class="mx-2">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/kec_sukamulya/" target="_blank" class="mx-2">
                        <i class="fab fa-instagram-square fa-2x"></i>
                    </a>
                </div>
                <div class="flex justify-center space-x-4 mb-4">
                    <a href="/about-us" class="hover:underline">About Us</a>
                    <a href="/contact" class="hover:underline">Contact</a>
                    <a href="/privacy-policy" class="hover:underline">Privacy Policy</a>
                    <a href="/stunting-info" class="hover:underline">Info Stunting</a>
                </div>
                <p class="text-sm">&copy; 2024 Desa Sukamulya. All rights reserved.</p>
            </div>
        </footer>



    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')
    <script>
        // Dropdown Menu Desktop
        document.getElementById('menu-button').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.classList.toggle('hidden');
        });

        // Mobile Menu
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Mobile Dropdown Menu
        document.getElementById('mobile-menu-button-profil').addEventListener('click', function() {
            var mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
            mobileDropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
