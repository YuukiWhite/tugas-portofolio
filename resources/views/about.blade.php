@extends('layouts.app')

@section('content')
<section id="about" class="min-h-screen bg-[#0D0F13] text-white py-20">
    <div class="max-w-6xl mx-auto px-6">
        
        <!-- Grid utama: About info + Photo -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <!-- Kiri: Teks About -->
            <div>
                <h2 class="text-3xl font-bold text-start mb-6">
                    About <span class="text-cyan-400">Me</span>
                    <div class="w-32 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mt-2 rounded"></div>
                </h2>
                <p class="text-gray-400 mb-6">rakhafarid28@gmail.com</p>

                <p class="text-gray-300 leading-relaxed text-xl">
                    I am an Internet Engineering Technology student with a strong passion for the intersection of 
                    IoT, Networking and UAVs. My experience with the Cakrawala Skala international research team has provided me 
                    with invaluable hands-on skills in drone electrical and control systems. I am driven by a desire 
                    to innovate and apply my technical knowledge to create impactful solutions in these exciting fields.
                </p>
            </div>

            <!-- Kanan: Foto -->
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('images/about-photo.png') }}" 
                    alt="Rakha Farid Mansur" 
                    class="w-72 h-auto shadow-xl rounded-md">
            </div>
        </div>

        <!-- Grid kedua: Skills dengan Progress Bars + Info lainnya -->
        <div class="grid lg:grid-cols-2 gap-12">
            
            <!-- Kiri: Skills Section -->
            <div class="space-y-8">
                <!-- Header Skills -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-2">My Skills</h3>
                    <div class="w-24 h-1 bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 rounded-full"></div>
                </div>


                <div class="bg-[#1A1F2E] rounded-lg p-6 border border-gray-700">
                    <h4 class="text-lg font-semibold text-cyan-400 mb-4">Design Skills</h4>
                    <div class="space-y-4">

                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white">PCB Design</span>
                                <span class="text-gray-300">80%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 80%"></div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white">Topologi Design</span>
                                <span class="text-gray-300">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-cyan-400 via-green-400 to-green-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 90%"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Development Skills Card -->
                <div class="bg-[#1A1F2E] rounded-lg p-6 border border-gray-700">
                    <h4 class="text-lg font-semibold text-cyan-400 mb-4">Development Skills</h4>
                    <div class="space-y-4">

                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white">Python</span>
                                <span class="text-gray-300">65%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 65%"></div>
                            </div>
                        </div>
                        

                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white">Arduino</span>
                                <span class="text-gray-300">85%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-cyan-400 via-green-400 to-green-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 85%"></div>
                            </div>
                        </div>
            
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white">Dart</span>
                                <span class="text-gray-300">65%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 65%"></div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-white">UAV Control System</span>
                                <span class="text-gray-300">90%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-2">
                                <div class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">

                <div class="grid md:grid-cols-1 gap-6">

                    <div class="bg-[#1A1F2E] rounded-lg p-6 border border-gray-700">
                        <h4 class="text-lg font-semibold text-cyan-400 mb-4">Expertise</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-start">
                                <span class="text-cyan-400 mr-2">•</span>
                                Drone Electrical & Control Systems
                            </li>
                            <li class="flex items-start">
                                <span class="text-cyan-400 mr-2">•</span>
                                PCB Design
                            </li>
                            <li class="flex items-start">
                                <span class="text-cyan-400 mr-2">•</span>
                                Computer Networking Simulation
                            </li>
                            <li class="flex items-start">
                                <span class="text-cyan-400 mr-2">•</span>
                                IoT System Development
                            </li>
                        </ul>
                    </div>

                    <!-- Achievements -->
                    <div class="bg-[#1A1F2E] rounded-lg p-6 border border-gray-700">
                        <h4 class="text-lg font-semibold text-cyan-400 mb-4">Achievements</h4>
                        <div class="text-gray-300">
                            <p class="flex items-start">
                                <span class="text-cyan-400 mr-2">•</span>
                                1st Runner Up Category D1 Man-Machine SAFMC
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tools -->
                <div class="bg-[#1A1F2E] rounded-lg p-6 border border-gray-700">
                    <h4 class="text-lg font-semibold text-cyan-400 mb-4">Tools</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach (['Betaflight','INAV','Mission-Planner','KiCad','Eagle','GNS3','Packet-Tracer'] as $tool)
                            <span class="px-3 py-1 bg-gray-700 rounded-full text-xs text-cyan-300 border border-cyan-500 
                            transition duration-300 hover:bg-cyan-600 hover:text-white hover:scale-105 cursor-pointer">
                                {{ $tool }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Programming -->
                <div class="bg-[#1A1F2E] rounded-lg p-6 border border-gray-700">
                    <h4 class="text-lg font-semibold text-cyan-400 mb-4">Programming</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach (['HTML/CSS','JavaScript','Dart','Python','Node.js','Arduino'] as $lang)
                            <span class="px-3 py-1 bg-gray-700 rounded-full text-xs text-cyan-300 border border-cyan-500 
                            transition duration-300 hover:bg-cyan-600 hover:text-white hover:scale-105 cursor-pointer">
                                {{ $lang }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional: JavaScript for animated progress bars on scroll -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const progressBars = document.querySelectorAll('.bg-gradient-to-r');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            }
        });
    });
    
    progressBars.forEach(bar => {
        if (bar.parentElement.classList.contains('bg-gray-700')) {
            observer.observe(bar);
        }
    });
});
</script>
@endsection