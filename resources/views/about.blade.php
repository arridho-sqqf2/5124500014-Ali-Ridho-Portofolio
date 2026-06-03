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
        <a href="{{ url('/about') }}" class="text-white hover:text-white">About</a>
        <a href="{{ url('/skills') }}" class="hover:text-white">Skills</a>
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

    <!-- Header Section -->
    <section class="grid grid-cols-12 gap-6">
        <!-- Foto Profil -->
        <div class="col-span-4 bg-gray-900 rounded-4xl p-6 relative">
            <img src="{{ asset('images/profile-3d.png') }}" class="rounded-3xl w-full" alt="Profile">
            
            <!-- Birthday: Ubah text-lg ke text-sm, tambah class hover dan transisi -->
            <div class="absolute top-10 left-10 bg-black/60 p-3 px-5 rounded-full border border-gray-700 text-sm font-semibold transition-all duration-300 hover:scale-105 hover:bg-blue-600 hover:border-blue-400 cursor-default">
                Birthday: 29 May 2005
            </div>

            <!-- Location: Ubah text-lg ke text-sm, tambah class hover dan transisi -->
            <div class="absolute bottom-10 left-10 bg-black/60 p-3 px-5 rounded-full border border-gray-700 text-sm font-semibold transition-all duration-300 hover:scale-105 hover:bg-blue-600 hover:border-blue-400 cursor-default">
                Location: Surabaya
            </div>
        </div>

        <!-- Deskripsi Utama -->
        <div class="col-span-5 p-6">
            <span class="text-blue-400 font-bold tracking-widest">ABOUT ME</span>
            <h1 class="text-5xl font-bold mt-2">Get to know me better</h1>
            <p class="text-gray-400 mt-4 leading-relaxed">Hi! I'm Ali Ridho. I am a Multimedia and Broadcasting Technology student with a strong passion for technology, design, and creative content creation.</p>
            
            <!-- Stats -->
            <div class="grid grid-cols-4 gap-4 mt-8">
                <div class="bg-gray-900 p-4 rounded-2xl text-center">
                    <div class="text-2xl font-bold">15+</div>
                    <div class="text-xs text-gray-500">Projects</div>
                </div>
                <!-- Tambahkan item lain dengan pola serupa -->
            </div>
        </div>

        <!-- Info Sidebar -->
        <div class="col-span-3 bg-gray-900 p-6 rounded-3xl space-y-8">
            
            <div class="flex items-center gap-4">
                <i class="fas fa-user text-blue-400 text-xl"></i>
                <div>
                    <div class="text-sm text-gray-500">Name</div>
                    <div class="text-xl font-medium">Ali Ridho</div> </div>
            </div>

            <div class="flex items-center gap-4">
                <i class="fas fa-calendar-alt text-blue-400 text-xl"></i>
                <div>
                    <div class="text-sm text-gray-500">Age</div>
                    <div class="text-xl font-medium">21 Years Old</div> </div>
            </div>

            <div class="flex items-center gap-4">
                <i class="fas fa-graduation-cap text-blue-400 text-xl"></i>
                <div>
                    <div class="text-sm text-gray-500">Education</div>
                    <div class="text-xl font-medium leading-tight">Electronic Engineering Polytechnic Institute of Surabaya (PENS).</div> </div>
            </div>

            <div class="flex items-center gap-4">
                <i class="fas fa-book text-blue-400 text-xl"></i>
                <div>
                    <div class="text-sm text-gray-500">Major</div>
                    <div class="text-xl font-medium leading-tight">Multimedia and Broadcasting Technology</div> </div>
            </div>

            <div class="flex items-center gap-4">
                <i class="fas fa-envelope text-blue-400 text-xl"></i>
                <div>
                    <div class="text-sm text-gray-500">Email</div>
                    <div class="text-xl font-medium leading-tight">4l1r1dh0sqqf@gmail.com</div> </div>
            </div>

            <div class="flex items-center gap-4">
                <i class="fas fa-briefcase text-blue-400 text-xl"></i>
                <div>
                    <div class="text-sm text-gray-500">Freelance</div>
                    <div class="text-xl font-semibold text-green-400">Available</div> </div>
            </div>
        </div>
            <!-- Tambahkan detail lain: Age, Education, Major, dll -->
        </div>
    </section>

    <!-- My Journey & What I Love -->
    <section class="grid grid-cols-2 gap-6 mt-8">
        <div class="bg-gray-900 p-8 rounded-3xl">
            <h2 class="text-2xl font-bold mb-6">My Journey</h2>
            <!-- Timeline item -->
            <div class="border-l-2 border-blue-500 pl-6 space-y-8">
                <div class="relative">
                    <div class="absolute -left-[33px] w-4 h-4 bg-blue-500 rounded-full"></div>
                    <div class="text-sm text-gray-500">2021</div>
                    <div class="font-bold">Memulai kuliah di PENS</div>
                </div>
            </div>
        </div>

        <div class="bg-gray-900 p-8 rounded-3xl">
            <h2 class="text-2xl font-bold mb-6">What I Love</h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-black p-4 rounded-xl text-center"><i class="fas fa-code text-2xl"></i><div class="mt-2">Coding</div></div>
                <!-- Tambahkan ikon lain -->
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

</body>
</html>