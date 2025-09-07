@extends('layouts.app')

@section('content')
<section class="relative min-h-screen bg-cover bg-center" 
        style="background-image: url('{{ asset('images/dark-desk.png') }}');">
    <!-- Overlay hitam tipis -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Konten -->
    <div class="relative z-10 flex flex-col items-start justify-center min-h-screen max-w-6xl mx-auto px-6">
        <div>
            <h2 class="text-4xl md:text-5xl font-regular">RAKHA</h2>
        </div>
        <div class="flex items-center pb-10">
            <h1 class="text-5xl md:text-6xl font-extrabold">FARID</h1>
            <h2 class="text-4xl md:text-5xl font-regular ml-2">Mansur</h2>
        </div>
        <p class="mt-3 text-gray-300 text-lg">2423600001</p>
        <p class="text-gray-300 text-lg">Internet Engineering Technology</p>

        <!-- Social icons -->
        <div class="flex gap-6 mt-8 text-2xl">
            <a href="https://www.linkedin.com/in/rakha-farid-mansur" target="_blank" class="hover:text-blue-400"><i class="fab fa-linkedin"></i></a>
            <a href="https://instagram.com" target="_blank" class="hover:text-pink-400"><i class="fab fa-instagram"></i></a>
            <a href="https://discord.com" target="_blank" class="hover:text-indigo-400"><i class="fab fa-discord"></i></a>
        </div>
    </div>
</section>
@endsection
