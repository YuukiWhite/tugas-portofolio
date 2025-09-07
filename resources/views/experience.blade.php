@extends('layouts.app')

@section('content')
<section id="experience-educations" class="max-w-5xl mx-auto mt-16 px-4">
    <!-- Title -->
    <h2 class="text-3xl font-bold text-center mb-12">
        My <span class="text-cyan-400">Experience</span> & <span class="text-purple-400">Education</span>
        <div class="w-[20rem] h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto mt-2 rounded"></div>
    </h2>

    <!-- Filter Tabs (Optional) -->
    <div class="flex justify-center mb-8">
        <div class="bg-gray-800 rounded-full p-1 flex">
            <button onclick="showAll()" id="all-btn" class="px-6 py-2 rounded-full text-sm font-medium transition-all duration-300 bg-cyan-600 text-white">
                All
            </button>
            <button onclick="showExperience()" id="experience-btn" class="px-6 py-2 rounded-full text-sm font-medium transition-all duration-300 text-gray-300 hover:text-white">
                Experience
            </button>
            <button onclick="showEducation()" id="education-btn" class="px-6 py-2 rounded-full text-sm font-medium transition-all duration-300 text-gray-300 hover:text-white">
                Education
            </button>
        </div>
    </div>

    <!-- Timeline -->
    <div class="relative">
        <!-- Vertical line -->
        <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-r-2 border-cyan-500"></div>

        <!-- High School - Kiri Paling Atas -->
        <div class="mb-12 flex justify-start w-full timeline-item education-item">
            <div class="w-1/2 pr-8">
                <div class="bg-gray-900 p-5 rounded-lg shadow-lg border-l-4 border-purple-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded-full mr-2">Education</span>
                        <p class="text-sm text-purple-400 font-semibold">2020 - 2023</p>
                    </div>
                    <h3 class="text-lg font-bold text-purple-400">
                        High School Student 
                    </h3>
                    <p class="text-gray-400 text-sm font-medium mb-2">SMA Citra Islami</p>
                    <p class="text-gray-300 text-sm mt-2">
                        Focused on science subjects, including mathematics, physics, and chemistry, while actively participating in extracurricular activities.
                    </p>
                </div>
            </div>
            <!-- Titik di tengah -->
            <div class="relative">
                <div class="absolute left-[-0.55rem] top-6 w-5 h-5 bg-gray-900 border-2 border-purple-500 rounded-full flex items-center justify-center">
                    <div class="w-2.5 h-2.5 bg-purple-400 rounded-full"></div>
                </div>
            </div>
            <div class="w-1/2"></div>
        </div>

        <!-- College - Kanan di Bawah High School -->
        <div class="mb-12 flex justify-end w-full timeline-item education-item">
            <div class="w-1/2"></div>
            <!-- Titik di tengah -->
            <div class="relative">
                <div class="absolute left-[-0.55rem] top-6 w-5 h-5 bg-gray-900 border-2 border-purple-500 rounded-full flex items-center justify-center">
                    <div class="w-2.5 h-2.5 bg-purple-400 rounded-full"></div>
                </div>
            </div>
            <div class="w-1/2 pl-8">
                <div class="bg-gray-900 p-5 rounded-lg shadow-lg border-l-4 border-purple-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded-full mr-2">Education</span>
                        <p class="text-sm text-purple-400 font-semibold">2023 - Present</p>
                    </div>
                    <h3 class="text-lg font-bold text-purple-400">
                        Internet Engineering Technology Student
                    </h3>
                    <p class="text-gray-400 text-sm font-medium mb-2">Politeknik Elektronika Negeri Surabaya</p>
                    <p class="text-gray-300 text-sm mt-2">
                        Studying Internet Engineering Technology with focus on networking, IoT systems, Cloud Computing, Web & App Development, and Cyber Security.
                    </p>
                </div>
            </div>
        </div>

        <!-- Experience Item - 2023 (Kiri) -->
        <div class="mb-12 flex justify-start w-full timeline-item experience-item">
            <div class="w-1/2 pr-8">
                <div class="bg-gray-900 p-5 rounded-lg shadow-lg border-l-4 border-cyan-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-cyan-600 text-white text-xs px-2 py-1 rounded-full mr-2">Experience</span>
                        <p class="text-sm text-cyan-400 font-semibold">2023</p>
                    </div>
                    <h3 class="text-lg font-bold text-cyan-400">
                        Sponsorship Division - Cakrawala Skala Generation 2 2023
                    </h3>
                    <p class="text-gray-400 text-sm font-medium mb-2">International UAV Research Team</p>
                    <p class="text-gray-300 text-sm mt-2">
                        Empowering partnerships to drive innovation and success. As part of the Sponsorship Division, we connect visionary brands with impactful events, fostering collaboration and creating lasting value for all stakeholders. Focused on UAV research and competing internationally, we aim to push boundaries in technology and collaboration.
                    </p>
                </div>
            </div>
            <!-- Titik di tengah -->
            <div class="relative">
                <div class="absolute left-[-0.55rem] top-6 w-5 h-5 bg-gray-900 border-2 border-cyan-500 rounded-full flex items-center justify-center">
                    <div class="w-2.5 h-2.5 bg-cyan-400 rounded-full"></div>
                </div>
            </div>
            <div class="w-1/2"></div>
        </div>

        <!-- Experience Item - 2024 IONIC (Kanan) -->
        <div class="mb-12 flex justify-end w-full timeline-item experience-item">
            <div class="w-1/2"></div>
            <!-- Titik di tengah -->
            <div class="relative">
                <div class="absolute left-[-0.55rem] top-6 w-5 h-5 bg-gray-900 border-2 border-cyan-500 rounded-full flex items-center justify-center">
                    <div class="w-2.5 h-2.5 bg-cyan-400 rounded-full"></div>
                </div>
            </div>
            <div class="w-1/2 pl-8">
                <div class="bg-gray-900 p-5 rounded-lg shadow-lg border-l-4 border-cyan-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-cyan-600 text-white text-xs px-2 py-1 rounded-full mr-2">Experience</span>
                        <p class="text-sm text-cyan-400 font-semibold">2024</p>
                    </div>
                    <h3 class="text-lg font-bold text-cyan-400">
                        Sponsorship Division - IONIC 2024
                    </h3>
                    <p class="text-gray-400 text-sm font-medium mb-2">Internet Engineering Technology Competition</p>
                    <p class="text-gray-300 text-sm mt-2">
                        Collaborating with media partner to support IONIC 2024, a premier competition by Internet Engineering Technology, driving innovation and showcasing participant excellence.
                    </p>
                </div>
            </div>
        </div>

        <!-- Experience Item - 2024 Cakrawala (Kiri) -->
        <div class="mb-12 flex justify-start w-full timeline-item experience-item">
            <div class="w-1/2 pr-8">
                <div class="bg-gray-900 p-5 rounded-lg shadow-lg border-l-4 border-cyan-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-cyan-600 text-white text-xs px-2 py-1 rounded-full mr-2">Experience</span>
                        <p class="text-sm text-cyan-400 font-semibold">2024</p>
                    </div>
                    <h3 class="text-lg font-bold text-cyan-400">
                        Electrical Division - Cakrawala Skala Generation 3 2024
                    </h3>
                    <p class="text-gray-400 text-sm font-medium mb-2">International UAV Research Team</p>
                    <p class="text-gray-300 text-sm mt-2">
                        Enhancing drone stability and adaptability as part of the Electrical Division for Cakrawala Skala Generation 3 2024. Focused on developing precise control systems to ensure reliable performance and mission-specific adjustments during international UAV competitions.
                    </p>
                </div>
            </div>
            <!-- Titik -->
            <div class="relative">
                <div class="absolute left-[-0.55rem] top-6 w-5 h-5 bg-gray-900 border-2 border-cyan-500 rounded-full flex items-center justify-center">
                    <div class="w-2.5 h-2.5 bg-cyan-400 rounded-full"></div>
                </div>
            </div>
            <div class="w-1/2"></div>
        </div>


    </div>
</section>

<!-- JavaScript for filtering -->
<script>
function showAll() {
    document.querySelectorAll('.timeline-item').forEach(item => {
        item.style.display = 'flex';
    });
    updateActiveButton('all-btn');
}

function showExperience() {
    document.querySelectorAll('.timeline-item').forEach(item => {
        if (item.classList.contains('experience-item')) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });
    updateActiveButton('experience-btn');
}

function showEducation() {
    document.querySelectorAll('.timeline-item').forEach(item => {
        if (item.classList.contains('education-item')) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });
    updateActiveButton('education-btn');
}

function updateActiveButton(activeId) {
    // Remove active class from all buttons
    document.querySelectorAll('button').forEach(btn => {
        btn.classList.remove('bg-cyan-600', 'text-white');
        btn.classList.add('text-gray-300');
    });
    
    // Add active class to clicked button
    const activeBtn = document.getElementById(activeId);
    activeBtn.classList.add('bg-cyan-600', 'text-white');
    activeBtn.classList.remove('text-gray-300');
}
</script>
@endsection