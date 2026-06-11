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
        <a href="{{ url('/portfolio') }}" class="hover:text-white">Portfolio</a>
        <a href="{{ url('/experience') }}" class="hover:text-white">Experience</a>
        <a href="{{ url('/contact') }}" class="text-white hover:text-white">Contact</a>
    </div>

    <!-- Icons -->
    <div class="flex gap-4 items-center">
        <span>☀</span> <!-- Ikon tema -->
        <span class="text-xl">☰</span> <!-- Ikon menu mobile -->
    </div>
</nav>

<section class="w-full bg-gray-900 p-10 rounded-3xl mb-10 flex items-center justify-between border border-gray-800">
    <div class="flex-1 pr-10">
        <span class="text-blue-400 font-bold tracking-widest flex items-center gap-2">
            <i class="fas fa-paper-plane"></i> LET'S CONNECT
        </span>
        <h1 class="text-5xl font-bold mt-2 text-white">Let's Work Together!</h1>
        <p class="text-gray-400 mt-4 max-w-xl leading-relaxed">
            Punya proyek menarik, peluang kolaborasi, atau sekadar ingin menyapa? Jangan ragu untuk menghubungi saya.
        </p>
        <blockquote class="mt-6 italic text-blue-400 font-semibold border-l-4 border-blue-600 pl-4">
            "Great ideas start a conversation."
        </blockquote>
    </div>

    <div class="w-1/3">
        <img src="{{ asset('images/contact-illustration.png') }}" class="w-full h-auto" alt="Contact Illustration">
    </div>
</section>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    
    <div class="bg-gray-900 p-8 rounded-3xl border border-gray-800">
        <h3 class="font-bold text-xl mb-6 flex items-center gap-2 text-white">
            <i class="fas fa-envelope text-blue-500"></i> Send Me a Message
        </h3>
        <form action="#" method="POST" class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <input type="text" placeholder="Your Name" class="bg-black border border-gray-800 p-3 rounded-xl w-full focus:border-blue-500 outline-none">
                <input type="email" placeholder="Your Email" class="bg-black border border-gray-800 p-3 rounded-xl w-full focus:border-blue-500 outline-none">
            </div>
            <input type="text" placeholder="Subject" class="bg-black border border-gray-800 p-3 rounded-xl w-full focus:border-blue-500 outline-none">
            <textarea placeholder="Your Message" rows="5" class="bg-black border border-gray-800 p-3 rounded-xl w-full focus:border-blue-500 outline-none"></textarea>
            <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 py-3 rounded-xl font-bold hover:opacity-90 transition">
                Send Message
            </button>
        </form>
    </div>

    <div class="space-y-8">
        <div class="bg-gray-900 p-8 rounded-3xl border border-gray-800">
            <h3 class="font-bold text-xl mb-6 flex items-center gap-2 text-white">
                <i class="fas fa-user-circle text-blue-500"></i> Get in Touch
            </h3>
            <div class="space-y-4">
                @foreach([['Email', 'ridho.ardiansyah@example.com', 'copy'], ['WhatsApp', '+62 812-3456-7890', 'chat'], ['Instagram', '@ridhoardiansyah_', 'follow']] as $item)
                    <div class="flex items-center justify-between bg-black p-4 rounded-xl border border-gray-800">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-{{ $item[0] === 'Email' ? 'envelope' : ($item[0] === 'WhatsApp' ? 'comment' : 'instagram') }} text-blue-500"></i>
                            <div>
                                <p class="text-[10px] text-gray-500 uppercase">{{ $item[0] }}</p>
                                <p class="text-sm font-bold text-white">{{ $item[1] }}</p>
                            </div>
                        </div>
                        <button class="text-xs bg-gray-800 px-3 py-1 rounded-lg hover:bg-gray-700">{{ ucfirst($item[2]) }}</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

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