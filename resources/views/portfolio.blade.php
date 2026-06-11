<!DOCTYPE html>
<html lang="id" class="bg-black text-white">
<head>
    <meta charset="UTF-8">
    <title>Portofolio Ali Ridho</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome (letakkan di sini agar bisa digunakan oleh ikon di navbar dan section lainnya) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
</head>
<body class="p-8">

<!-- Navbar -->
<nav class="flex items-center justify-between py-6 px-8 mb-8">
    <!-- Logo -->
    <div class="text-2xl font-bold bg-white text-black w-10 h-10 flex items-center justify-center rounded-full">
        R
    </div>

    <!-- Menu Links -->
    <div class="flex gap-8 text-gray-400">
        <a href="{{ url('/') }}" class="hover:text-white">Home</a>
        <a href="{{ url('/about') }}" class="hover:text-white">About</a>
        <a href="{{ url('/skills') }}" class="hover:text-white">Skills</a>
        <a href="{{ url('/portfolio') }}" class="text-white hover:text-white">Portfolio</a>
        <a href="{{ url('/experience') }}" class="hover:text-white">Experience</a>
        <a href="{{ url('/contact') }}" class="hover:text-white">Contact</a>
    </div>

    <!-- Icons -->
    <div class="flex gap-4 items-center">
        <span>☀</span> <!-- Ikon tema -->
        <span class="text-xl">☰</span> <!-- Ikon menu mobile -->
    </div>
</nav>

<section class="w-full bg-gray-900 p-10 rounded-3xl mb-10 flex items-center justify-between">
    <div class="flex-1 pr-10">
        <span class="text-blue-400 font-bold tracking-widest">MY PORTFOLIO</span>
        <h1 class="text-5xl font-bold mt-2">Projects & Works</h1>
        <p class="text-gray-400 mt-4 max-w-xl">
            Kumpulan hasil karya terbaik saya, mulai dari pengembangan web, desain grafis, hingga produksi video animasi.
        </p>
    </div>

    <div class="w-1/2 rounded-2xl overflow-hidden shadow-2xl">
        <div class="aspect-video"> <video autoplay loop muted playsinline class="w-full h-full object-cover">
                <source src="{{ asset('videos/animationproject-3d.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</section>

<section class="bg-gray-900 p-3 rounded-full mb-10 flex items-center gap-2 overflow-x-auto w-fit mx-auto border border-gray-800">
    @foreach(['All', 'Event Host & MC', 'Speaker', 'Animation', 'Video Editing', 'Writer'] as $filter)
        <button class="px-6 py-2 rounded-full text-sm font-bold transition-all whitespace-nowrap
            {{ $filter === 'All' ? 'bg-blue-600 text-white shadow-lg shadow-blue-900/20' : 'bg-black text-gray-400 hover:bg-gray-800' }}">
            {{ $filter }}
        </button>
    @endforeach
</section>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" 
         x-data="{ openModal: false, selectedProject: {} }">
    
    @php
        $projects = [
            ['title' => 'Orasi Ilmiah Dies Natalis PENS ke-38', 'role' => 'Master of Ceremony', 'desc' => 'Menjadi MC formal untuk kegiatan Dies Natalis PENS ke-38 sekaligus...', 'tags' => 'Public Speaking | Artikulasi | Intonasi', 'img' => 'project-1.jpeg'],
            ['title' => 'Wisuda PENS ke-26', 'role' => 'Camera Person', 'desc' => 'Mendokumentasikan keseluruhan prosesi acara untuk kebutuhan liputan', 'tags' => 'Pengoperasian Kamera | Lighting', 'img' => 'project-2.jpeg'],
            ['title' => 'DTMK EXPO', 'role' => 'Master of Ceremony', 'desc' => 'Acara tahunan yang diadakan oleh Departemen Teknologi Multimedia Kreatif...', 'tags' => 'Public Speaking | Artikulasi | Intonasi', 'img' => 'project-3.jpeg'],
            ['title' => 'Sistem Notulensi Otomatis', 'role' => 'Editor Video', 'desc' => 'Skema Penelitian Program Hilirisasi Riset', 'tags' => 'Adobe Premiere Pro | Adobe After Effect', 'img' => 'project-4.jpeg'],
            ['title' => 'Video Pembelajaran AI', 'role' => 'Editor Video', 'desc' => 'Mendokumentasikan keseluruhan prosesi acara untuk kebutuhan liputan', 'tags' => 'Pengoperasian Kamera | Lighting', 'img' => 'project-5.jpg'],
            ['title' => 'ANTARAGA', 'role' => 'Animation', 'desc' => 'Mendokumentasikan keseluruhan prosesi acara untuk kebutuhan liputan', 'tags' => 'Pengoperasian Kamera | Lighting', 'img' => 'project-6.jpg'],
            ['title' => 'Autonomous Robot AGV', 'role' => 'Editor Video', 'desc' => 'Skema Penelitian Program Hilirisasi Riset', 'tags' => 'Pengoperasian Kamera | Lighting', 'img' => 'project-7.jpg'],
            ['title' => 'Autonomous Electric Vehicle', 'role' => 'Editor Video', 'desc' => 'Skema Penelitian Program Hilirisasi Riset', 'tags' => 'Pengoperasian Kamera | Lighting', 'img' => 'project-8.jpg'],
            ['title' => '3D Cafe Aesthetic', 'role' => 'Animation', 'desc' => 'Skema Penelitian Program Hilirisasi Riset', 'tags' => 'Pengoperasian Kamera | Lighting', 'img' => 'project-9.jpg']
        ];
    @endphp

    @foreach($projects as $project)
        <div class="bg-gray-900 p-4 rounded-3xl cursor-pointer hover:bg-gray-800 transition border border-gray-800"
             @click="openModal = true; selectedProject = {{ json_encode($project) }}">
            <div class="aspect-video bg-black rounded-2xl mb-4 overflow-hidden">
                <img src="{{ asset('images/' . $project['img']) }}" class="w-full h-full object-cover">
            </div>
            <h3 class="font-bold text-lg text-white">{{ $project['title'] }}</h3>
            <p class="text-blue-400 font-semibold text-sm">{{ $project['role'] }}</p>
        </div>
    @endforeach

    <div x-show="openModal" 
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
         x-transition @click.away="openModal = false">
        
        <div class="bg-gray-900 p-8 rounded-3xl max-w-2xl w-full border border-gray-700 shadow-2xl" @click.stop>
            <button @click="openModal = false" class="float-right text-gray-400 hover:text-white text-xl">✕</button>
            <h2 class="text-3xl font-bold text-white" x-text="selectedProject.title"></h2>
            <p class="text-blue-400 font-semibold mt-1" x-text="selectedProject.role"></p>
            <div class="mt-6 text-gray-300">
                <p x-text="selectedProject.desc"></p>
                <div class="mt-6 p-4 bg-black rounded-xl text-xs text-gray-500 font-bold uppercase tracking-widest" 
                     x-text="selectedProject.tags"></div>
            </div>
        </div>
    </div>
</section>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<footer class="bg-gray-950 text-white py-16 px-8 border-t border-gray-800 mt-12">
    <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 mb-16 flex items-center justify-between">
        <div class="flex items-center gap-6">
            <div class="bg-blue-600/20 p-4 rounded-2xl text-blue-400 text-2xl">
                <i class="fas fa-paper-plane"></i>
            </div>
            <div>
                <h3 class="text-2xl font-bold">Let’s build something amazing together!</h3>
                <p class="text-gray-400">I'm open for collaboration, freelance projects, or just a friendly hello.</p>
            </div>
        </div>
        <a href="{{ url('/contact') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-3 rounded-xl font-bold hover:opacity-90 transition">
            Let's Connect <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>

    <div class="grid grid-cols-4 gap-12">
        <div class="space-y-4">
            <div class="w-12 h-12 bg-white text-black flex items-center justify-center text-xl font-bold rounded-full">R</div>
            <h4 class="font-bold text-lg">Ali Ridho</h4>
            <p class="text-sm text-gray-400">Creative Developer & Content Creator</p>
            <p class="text-sm text-gray-400 leading-relaxed">I create digital experiences, build beautiful web applications, and share ideas that inspire.</p>
            <div class="flex gap-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-github text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-youtube text-xl"></i></a>
            </div>
        </div>

        <div>
            <h4 class="font-bold mb-6 flex items-center gap-2"><span class="w-2 h-2 bg-purple-500 rounded-full"></span> Navigation</h4>
            <ul class="space-y-4 text-sm text-gray-400">
                <li><a href="{{ url('/') }}" class="hover:text-white transition flex justify-between">Home <i class="fas fa-chevron-right text-xs"></i></a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-white transition flex justify-between">About <i class="fas fa-chevron-right text-xs"></i></a></li>
                <li><a href="{{ url('/skills') }}" class="hover:text-white transition flex justify-between">Skills <i class="fas fa-chevron-right text-xs"></i></a></li>
                <li><a href="{{ url('/portfolio') }}" class="hover:text-white transition flex justify-between">Portfolio <i class="fas fa-chevron-right text-xs"></i></a></li>
                <li><a href="{{ url('/experience') }}" class="hover:text-white transition flex justify-between">Experience <i class="fas fa-chevron-right text-xs"></i></a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-white transition flex justify-between">Contact <i class="fas fa-chevron-right text-xs"></i></a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-6 flex items-center gap-2"><span class="w-2 h-2 bg-purple-500 rounded-full"></span> Quick Links</h4>
            <ul class="space-y-4 text-sm text-gray-400">
                <li><a href="#" class="hover:text-white transition flex justify-between">Download CV <i class="fas fa-file-download text-xs"></i></a></li>
                <li><a href="#" class="hover:text-white transition flex justify-between">My GitHub <i class="fab fa-github text-xs"></i></a></li>
                <li><a href="#" class="hover:text-white transition flex justify-between">Projects <i class="fas fa-folder text-xs"></i></a></li>
                <li><a href="#" class="hover:text-white transition flex justify-between">Blog <i class="fas fa-book text-xs"></i></a></li>
                <li><a href="#" class="hover:text-white transition flex justify-between">Certificates <i class="fas fa-certificate text-xs"></i></a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-6 flex items-center gap-2"><span class="w-2 h-2 bg-purple-500 rounded-full"></span> Newsletter</h4>
            <p class="text-sm text-gray-400 mb-4">Subscribe to my newsletter and get updates on new projects and articles.</p>
            <div class="relative">
                <input type="email" placeholder="Your email address" class="w-full bg-black border border-gray-800 p-3 rounded-xl text-sm focus:outline-none focus:border-blue-500">
                <button class="absolute right-2 top-2 bg-blue-600/20 text-blue-400 p-2 rounded-lg hover:bg-blue-600 hover:text-white transition">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            <div class="flex items-center gap-2 mt-4 text-xs text-gray-500">
                <i class="fas fa-check-circle text-purple-500"></i> No spam, only quality content.
            </div>
        </div>
    </div>

    <div class="border-t border-gray-800 mt-16 pt-8 flex justify-between items-center text-sm text-gray-500">
        <p>&copy; 2026 Ali Ridho. All Rights Reserved.</p>
        <p class="flex items-center gap-2">Made with passion & <i class="fas fa-coffee text-orange-400"></i></p>
        <a href="#" class="hover:text-white transition">Back to Top <i class="fas fa-arrow-up ml-2"></i></a>
    </div>
</footer>