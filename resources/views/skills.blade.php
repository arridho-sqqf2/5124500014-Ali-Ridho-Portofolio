<!DOCTYPE html>
<html lang="id" class="bg-black text-white">
<head>
    <meta charset="UTF-8">
    <title>Portofolio Ali Ridho</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome (letakkan di sini agar bisa digunakan oleh ikon di navbar dan section lainnya) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        <a href="{{ url('/skills') }}" class="text-white hover:text-white">Skills</a> 
        <a href="{{ url('/portfolio') }}" class="hover:text-white">Portfolio</a>
        <a href="{{ url('/experience') }}" class="hover:text-white">Experience</a>
        <a href="{{ url('/contact') }}" class="hover:text-white">Contact</a>
    </div>

    <!-- Icons -->
    <div class="flex gap-4 items-center">
        <span>☀</span> <!-- Ikon tema -->
        <span class="text-xl">☰</span> <!-- Ikon menu mobile -->
    </div>
</nav>

<section class="w-full mb-8">
    <div class="bg-gray-900 p-10 rounded-3xl flex items-center justify-between w-full">
        <div class="flex-1">
            <span class="text-blue-400 font-bold tracking-widest">MY SKILLS</span>
            <h1 class="text-6xl font-bold mt-2">Skills & Expertise</h1>
            <p class="text-gray-400 mt-4 max-w-2xl text-lg">
                Keterampilan yang saya kuasai dalam bidang teknologi, desain, dan soft skills untuk mendukung setiap projek yang saya kerjakan.
            </p>
        </div>

        <div class="w-full max-w-md aspect-video rounded-3xl overflow-hidden ml-8 flex-shrink-0">
            <video autoplay loop muted playsinline class="w-full h-full object-cover">
                <source src="{{ asset('videos/animationskills-3d.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</section>

<section class="grid grid-cols-3 gap-6">
    <div class="bg-gray-900 p-6 rounded-3xl">
        <h2 class="font-bold mb-6 flex items-center gap-2"><i class="fas fa-chart-pie"></i> Skills Overview</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-black p-4 rounded-2xl">
                <div class="text-2xl font-bold text-blue-400">3+</div>
                <div class="text-xs text-gray-500">Programming Languages</div>
            </div>
        </div>
    </div>

    <div class="col-span-2 bg-gray-900 p-6 rounded-3xl">
    <h2 class="font-bold mb-6 flex items-center gap-2"><i class="fas fa-code"></i> Technical Skills</h2>
    
    @php
        $skills = [
            'Ms Word' => '98%', 'Ms Excel' => '95%', 'Blender' => '95%', 
            'Unreal Engine' => '90%', 'Unity' => '85%', 'Adobe Illustrator' => '85%', 
            'Laravel' => '80%', 'Adobe Premiere Pro' => '80%', 'Adobe Photoshop' => '75%', 'PHP' => '70%'
        ];
        // Membagi array menjadi dua untuk dua kolom
        $chunks = array_chunk($skills, 5, true); 
    @endphp

    <div class="grid grid-cols-2 gap-8">
        @foreach($chunks as $chunk)
            <div class="space-y-4">
                @foreach($chunk as $skill => $percent)
                    <div class="flex items-center gap-3">
                        <i class="devicon-{{ strtolower(str_replace(' ', '', $skill)) }}-plain text-xl text-blue-400 w-6"></i>
                        
                        <div class="w-full">
                            <div class="flex justify-between text-xs mb-1">
                                <span>{{ $skill }}</span>
                                <span>{{ $percent }}</span>
                            </div>
                            <div class="w-full bg-black h-2 rounded-full">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: {{ $percent }}"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
</section>

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