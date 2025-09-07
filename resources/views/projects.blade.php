@extends('layouts.app')

@section('content')
<section id="projects" class="min-h-screen bg-[#0D0F13] text-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Title -->
        <h2 class="text-3xl font-bold text-center mb-12">
            My <span class="text-cyan-400">Projects</span>
            <div class="w-32 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto mt-2 rounded"></div>
        </h2>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project Card 1: Caksa -->
            <div class="group relative bg-[#1A1F2E] rounded-xl overflow-hidden border border-gray-700 hover:border-cyan-400 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-cyan-400/20">
                <!-- Project Image -->
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="{{ asset('images/Drone.png') }}" 
                        alt="Drone Preview" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-br "></div>
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                    </div>
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <!-- Card Content -->
                <div class="p-6">
                    <div class="items-center gap-2 mb-3">
                        <span class="px-2 py-1 bg-blue-600/20 text-blue-300 text-xs rounded-full">Cakrawala Skala</span>
                        <span class="px-2 py-1 bg-cyan-600/20 text-cyan-300 text-xs rounded-full">Electrical</span>
                        <span class="px-2 py-1 bg-cyan-600/20 text-teal-300 text-xs rounded-full">UAV</span>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">
                        Cakrawala Skala Drone
                    </h4>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Developing and optimizing drone control systems to ensure stable flight performance and mission-specific adaptability. Focused on electrical system integration and flight controller tuning for international UAV competitions.
                    </p>
                    
                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Betaflight</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Flight controller</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2: Portfolio Website -->
            <div class="group relative bg-[#1A1F2E] rounded-xl overflow-hidden border border-gray-700 hover:border-purple-400 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-purple-400/20">
                <!-- Project Image -->
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="{{ asset('images/portofolio.png') }}" 
                        alt="Portfolio Preview" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-br "></div>
                    <div class="absolute inset-0 bg-black/20"></div>
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                <!-- Card Content -->
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-1 bg-purple-600/20 text-purple-300 text-xs rounded-full">Laravel</span>
                        <span class="px-2 py-1 bg-pink-600/20 text-pink-300 text-xs rounded-full">Portfolio</span>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">
                        Personal Portfolio Site
                    </h4>
                    <p class="text-gray-400 text-sm mb-4">
                        Modern and responsive portfolio website built with Laravel and Tailwind CSS to showcase my work and skills.
                    </p>
                    
                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Laravel</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Tailwind</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">PHP</span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-3">
                        <a href="#" class="flex-1 bg-purple-600 hover:bg-purple-700 text-white text-sm py-2 px-4 rounded-lg transition-colors text-center">
                            View Demo
                        </a>
                        <a href="https://github.com/YuukiWhite/tugas-portofolio" class="flex-1 border border-gray-600 hover:border-purple-400 text-gray-300 hover:text-purple-400 text-sm py-2 px-4 rounded-lg transition-colors text-center">
                            Source Code
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 4: Concert In -->
            <div class="group relative bg-[#1A1F2E] rounded-xl overflow-hidden border border-gray-700 hover:border-purple-400 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-purple-400/20">
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="{{ asset('images/ConcertIn.png') }}" 
                        alt="Concert In Preview" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0"></div>
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-center z-10 p-4 relative">
                        <h3 class="text-white text-lg font-bold">Concert In</h3>
                        <p class="text-white/80 text-sm">Web Application</p>
                    </div>
                </div>
                
                <!-- Card Content -->
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-1 bg-yellow-600/20 text-purple-300 text-xs rounded-full">Online Ticket Platform</span>
                        <span class="px-2 py-1 bg-orange-600/20 text-purple-300 text-xs rounded-full">Backend-Developer</span>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors">
                        Concert In
                    </h4>
                    <p class="text-gray-400 text-sm mb-4">
                        Full-featured online ticket platform with payment integration, inventory management.
                    </p>
                    
                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Express</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Node.js</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">MongoDB</span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-3">
                        <a href="https://github.com/YuukiWhite/backend_ticket.git" 
                        target="_blank"
                        class="flex-1 bg-purple-600 hover:bg-purple-700 text-white text-sm py-2 px-4 rounded-lg transition-colors text-center">
                            Source Code
                        </a>
                    </div>
                </div>
            </div>

            <div class="group relative bg-[#1A1F2E] rounded-xl overflow-hidden border border-gray-700 hover:border-red-400 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-red-400/20">
                <!-- Project Image -->
                <div class="relative h-48 bg-gradient-to-br from-red-600 to-pink-500 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="text-center z-10 p-4">
                        <div class="w-16 h-16 bg-white/20 rounded-lg mx-auto mb-3 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M17.778 8.222c-4.296-4.296-11.26-4.296-15.556 0A1 1 0 01.808 6.808c5.076-5.077 13.308-5.077 18.384 0a1 1 0 01-1.414 1.414zM14.95 11.05a7 7 0 00-9.9 0 1 1 0 01-1.414-1.414 9 9 0 0112.728 0 1 1 0 01-1.414 1.414zM12.12 13.88a3 3 0 00-4.242 0 1 1 0 01-1.415-1.415 5 5 0 017.072 0 1 1 0 01-1.415 1.415zM9 16a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"/>
                            </svg>
                        </div>
                        <h3 class="text-white text-lg font-bold">Highschool Network Topology Design</h3>
                        <p class="text-white/80 text-sm">Cisco Project</p>
                    </div>
                </div>
                
                <!-- Card Content -->
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-2 py-1 bg-red-600/20 text-red-300 text-xs rounded-full">Networking</span>
                        <span class="px-2 py-1 bg-pink-600/20 text-pink-300 text-xs rounded-full">Simulation</span>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2 group-hover:text-red-400 transition-colors">
                        Highschool Network Topology Design
                    </h4>
                    <p class="text-gray-400 text-sm mb-4">
                        Complex network topology simulation using Cisco Packet Tracer for Highschool .
                    </p>
                    
                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Cisco</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">VLAN</span>
                        <span class="text-xs bg-gray-800 text-gray-300 px-2 py-1 rounded">Routing</span>
                    </div>

                </div>
            </div>

        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-cyan-600 to-purple-600 hover:from-cyan-700 hover:to-purple-700 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105">
                View All Projects
            </button>
        </div>
    </div>
</section>
@endsection