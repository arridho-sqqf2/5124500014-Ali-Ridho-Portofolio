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

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @php
        $projects = [
            [
                'title' => 'Wisuda PENS ke-26',
                'role' => 'Campers',
                'desc' => 'Mendokumentasikan keseluruhan prosesi acara untuk kebutuhan liputan',
                'tags' => 'Pengoperasian Kamera | Lighting',
                'img' => 'project-1.jpg'
            ],

            [
                'title' => 'DTMK EXPO',
                'role' => 'Master of Ceremony',
                'desc' => 'Acara tahunan yang diadakan oleh Departemen Teknologi Multimedia Kreatif...',
                'tags' => 'Public Speaking | Artikulasi | Intonasi',
                'img' => 'project-2.jpg'
            ],

            [
                'title' => 'Skema Penelitian Program Hilirisasi Riset',
                'role' => 'Editor Video',
                'desc' => 'Bertanggung jawab pada tahap pascaproduksi untuk merangkai, menyunting, dan menggabungkan berbagai elemen audio dan visual (rekaman mentah, dialog, efek suara, dan grafik) menjadi satu kesatuan video yang utuh, menarik, dan sesuai dengan tujuan',
                'tags' => 'Adobe Premiere Pro | Adobe After Effect',
                'img' => 'project-3.jpg'
            ],
        ];
    @endphp

    @foreach($projects as $project)
        <div class="bg-gray-900 p-4 rounded-3xl hover:bg-gray-800 transition border border-gray-800">
            <div class="aspect-video bg-black rounded-2xl mb-4 overflow-hidden">
                <img src="{{ asset('images/' . $project['img']) }}" class="w-full h-full object-cover" alt="{{ $project['title'] }}">
            </div>
            
            <h3 class="font-bold text-lg text-white">{{ $project['title'] }}</h3>
            <p class="text-blue-400 font-semibold text-sm">{{ $project['role'] }}</p>
            
            <p class="text-xs text-gray-400 mt-2 leading-relaxed">
                {{ $project['desc'] }}
            </p>
            
            <div class="mt-4 pt-4 border-t border-gray-800">
                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold">
                    {{ $project['tags'] }}
                </p>
            </div>
        </div>
    @endforeach
</section>