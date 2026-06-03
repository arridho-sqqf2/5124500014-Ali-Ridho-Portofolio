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
        <a href="{{ url('/') }}" class="text-white hover:text-white">Home</a>
        <a href="{{ url('/about') }}" class="hover:text-white">About</a>
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


    <!-- Hero Section dengan Video -->
<section class="grid grid-cols-3 gap-6 mb-8">
    <div class="col-span-2 bg-gray-900 p-16 rounded-3xl flex items-center h-96">
        <div class="w-1/2"> <!-- Mengatur lebar teks agar tidak terlalu panjang -->
            <span class="bg-yellow-500 text-black px-3 py-1 rounded-full text-sm">👋 Hello, I'm</span>
            <h1 class="text-6xl font-bold mt-4">Ali Ridho</h1>
            <p class="text-xl mt-2 text-gray-400 font-semibold">Creative Developer & Content Creator</p>
            
            <!-- Keterangan Tambahan -->
            <p class="mt-4 text-gray-300 leading-relaxed">
                I create digital experiences, build beautiful web applications, and share ideas that inspire.
            </p>

            <div class="mt-8 flex gap-4">
            <button class="bg-blue-600 px-6 py-2 rounded-xl">Explore My Work</button>
    
                <a href="{{ asset('document/cv-ats.pdf') }}" 
                    download="CV-Ali-Ridho.pdf"
                    class="border border-gray-600 px-6 py-2 rounded-xl transition-all duration-300 hover:bg-gray-700 hover:border-gray-500">
                    Download CV
                </a>
            </div>
        </div>

        <!-- Social Media Icons -->
<div class="mt-8 flex gap-6 text-2xl text-gray-400">
    <a href="https://www.instagram.com/arridho_sqqf" target="_blank" class="hover:text-white transition">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://linkedin.com/in/ali-ridho-a32062412" target="_blank" class="hover:text-white transition">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a href="https://www.youtube.com/@arridhosqqf" target="_blank" class="hover:text-white transition">
        <i class="fab fa-youtube"></i>
    </a>
    <a href="https://www.behance.net/aliridho6" target="_blank" class="hover:text-white transition">
        <i class="fab fa-behance"></i>
    </a>
</div>

        <!-- Video Animasi 3D Looping dengan Sudut Tumpul -->
        <div class="w-1/2 pl-6">
            <video autoplay loop muted playsinline class="w-full h-80 object-cover rounded-3xl">
                <source src="{{ asset('videos/3d_profile.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- AI Assistant Box -->
<div class="bg-gray-900 p-6 rounded-3xl flex flex-col h-[400px]">
    <h2 class="font-bold mb-4">AI Assistant</h2>
    
    <!-- Area Chat -->
    <div id="chat-messages" class="flex-1 overflow-y-auto space-y-4 mb-4">
        <div class="bg-black p-3 rounded-xl text-sm self-start">Halo! Ada yang ingin kamu tahu tentang saya?</div>
    </div>

    <!-- Pilihan Pertanyaan -->
    <div class="space-y-2">
        <button onclick="reply('siapa')" class="w-full text-left bg-gray-800 p-2 rounded-lg text-xs hover:bg-gray-700">Siapa Ali Ridho?</button>
        <button onclick="reply('skill')" class="w-full text-left bg-gray-800 p-2 rounded-lg text-xs hover:bg-gray-700">Apa keahlian Anda?</button>
    </div>
</div>
</section>

<script>
    function reply(type) {
        const chatBox = document.getElementById('chat-messages');
        
        // 1. Tampilkan pertanyaan user
        const userMsg = document.createElement('div');
        userMsg.className = 'bg-blue-600 p-3 rounded-xl text-sm self-end';
        userMsg.innerText = type === 'siapa' ? 'Siapa Ali Ridho?' : 'Apa keahlian Anda?';
        chatBox.appendChild(userMsg);

        // 2. Simulasi jawaban AI (tunggu 0.5 detik agar terasa nyata)
        setTimeout(() => {
            const botMsg = document.createElement('div');
            botMsg.className = 'bg-black p-3 rounded-xl text-sm self-start';
            
            if(type === 'siapa') {
                botMsg.innerText = 'Ali Ridho adalah mahasiswa Politeknik Elektronika Negeri Surabaya dengan Program Studi Teknologi Multimedia dan Broadcasting angkatan 2024';
            } else {
                botMsg.innerText = 'Saya ahli dalam Animasi 3D, UI/UX Design, dan sedang memperdalam Laravel, PHP, JavaScript serta Video Editing.';
            }
            
            chatBox.appendChild(botMsg);
            chatBox.scrollTop = chatBox.scrollHeight; // Auto-scroll ke bawah
        }, 500);
    }
</script>

    <!-- Tambahkan section lainnya (About, Skills, Portfolio) dengan pola grid yang sama -->

<!-- Kontainer Utama Grid untuk bagian bawah -->
<section class="grid grid-cols-3 gap-6 mt-8">
    
    <!-- 1. About Me -->
    <div class="bg-gray-900 p-6 rounded-3xl">
        <h2 class="flex items-center gap-2 font-bold mb-4"><i class="fas fa-user"></i> About Me</h2>
        <img src="{{ asset('images/profile-aboutme.jpeg') }}" class="w-full aspect-[3/4] object-cover rounded-2xl mb-4" alt="Ali Ridho">
        <p class="text-sm text-gray-400 mb-4">Hi! I'm Ali Ridho. Saya adalah mahasiswa yang passionate di bidang teknologi...</p>
        <a href="{{ url('/about') }}" class="inline-block bg-blue-600 text-xs px-4 py-2 rounded-lg text-white hover:bg-blue-700 transition">
        More About Me
        </a>
    </div>

    <!-- 2. Skills -->
    <div class="bg-gray-900 p-6 rounded-3xl">
    <h2 class="font-bold mb-6 flex items-center gap-2"><i class="fas fa-code"></i> Technical Skills</h2>
    
    <div class="space-y-6">
        @foreach(['Ms Word' => '98%', 'Ms Excel' => '95%', 'Blender' => '95%', 'Unreal Engine' => '90%', 'Unity' => '85%', 'Adobe Illustrator' => '85%', 'Laravel' => '80%', 'Adobe Premiere Pro' => '80%', 'Adobe Photoshop' => '75%', 'PHP' => '70%'] as $skill => $percent)
            <div class="skill-item w-full">
                <div class="flex justify-between text-xs mb-1">
                    <span class="skill-name font-medium text-gray-300 cursor-pointer hover:text-blue-400" 
                          data-percent="{{ $percent }}">
                        {{ $skill }}
                    </span>
                    <span class="percentage-text font-bold">0%</span>
                </div>
                <div class="w-full bg-black h-2 rounded-full overflow-hidden">
                    <div class="progress-bar bg-blue-500 h-2 rounded-full transition-all duration-700 ease-out" 
                         style="width: 0%"></div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Tombol In Full -->
    <a href="{{ url('/skills') }}" 
   class="block w-full bg-blue-600 text-center text-sm font-bold py-3 mt-8 rounded-xl hover:bg-blue-700 transition">
    In Full
    </a>
</div>

    <!-- 3. My Portfolio -->
    <div class="bg-gray-900 p-6 rounded-3xl">
        <h2 class="flex items-center gap-2 font-bold mb-4"><i class="fas fa-briefcase"></i> My Portfolio</h2>
        <div class="bg-black p-4 rounded-2xl mb-4">
            <div class="h-24 bg-gray-800 rounded-lg mb-2"></div>
            <p class="text-xs font-bold">Event Host & MC</p>
        </div>
        <div class="bg-black p-4 rounded-2xl mb-4">
            <div class="h-24 bg-gray-800 rounded-lg mb-2"></div>
            <p class="text-xs font-bold">Editing Video</p>
        </div>
        <div class="bg-black p-4 rounded-2xl mb-4">
            <div class="h-24 bg-gray-800 rounded-lg mb-2"></div>
            <p class="text-xs font-bold">Animation</p>
        </div>
        <a href="{{ url('/portfolio') }}" 
        class="block w-full bg-blue-600 text-sm font-bold text-center py-3 rounded-xl hover:bg-blue-700 transition">
        View All Projects
        </a>
    </div>

</section>

<!-- Baris Kedua: Experience, Gallery, & Contact Me -->
<section class="grid grid-cols-3 gap-6 mt-6">
    
    <!-- 1. Experience & Achievement -->
    <div class="bg-gray-900 p-6 rounded-3xl">
        <h2 class="font-bold mb-4"><i class="fas fa-briefcase mr-2"></i> Experience & Achievement</h2>
        <div class="space-y-4 text-sm text-gray-400">
            <div class="flex gap-4">
                <span class="font-bold text-blue-500">2024</span>
                <p>Web Developer Internship<br><span class="text-xs text-gray-600">PT. Digital Inovasi Indonesia</span></p>
            </div>
            <div class="flex gap-4">
                <span class="font-bold text-blue-500">2023</span>
                <p>Juara 2 UI/UX Design Competition<br><span class="text-xs text-gray-600">TechnoFest PENS</span></p>
            </div>
        </div>
    </div>

    <!-- 2. Gallery -->
    <div class="bg-gray-900 p-6 rounded-3xl">
    <h2 class="font-bold mb-4"><i class="fas fa-images mr-2"></i> Gallery</h2>
    <div class="grid grid-cols-3 gap-2">
        @for ($i = 1; $i <= 6; $i++)
            <div class="aspect-[3/4] rounded-xl overflow-hidden">
                <img src="{{ asset('images/gallery-'.$i.'.jpeg') }}" 
                     class="w-full h-full object-cover transition-all duration-500 hover:scale-110 hover:opacity-65 cursor-pointer" 
                     alt="Gallery {{ $i }}">
            </div>
        @endfor
    </div>
</div>

    <!-- 3. Contact Me -->
    <div class="bg-gray-900 p-6 rounded-3xl">
        <h2 class="font-bold mb-4"><i class="fas fa-envelope mr-2"></i> Contact Me</h2>
        <form id="contactForm" class="space-y-3">
            <input type="text" id="name" placeholder="Your Name" class="w-full bg-black p-2 rounded-lg text-sm border border-gray-700">
            <input type="email" id="email" placeholder="Your Email" class="w-full bg-black p-2 rounded-lg text-sm border border-gray-700">
            <textarea id="message" placeholder="Message" class="w-full bg-black p-2 rounded-lg text-sm border border-gray-700 h-20"></textarea>
            <button type="button" onclick="sendToWhatsApp()" class="w-full bg-blue-600 py-2 rounded-lg text-sm font-bold hover:bg-blue-700 transition">
                Send Message
            </button>
        </form>
    </div>

</section>

<script>
    document.querySelectorAll('.skill-item').forEach(item => {
        const name = item.querySelector('.skill-name');
        const bar = item.querySelector('.progress-bar');
        const text = item.querySelector('.percentage-text');
        const targetPercent = name.getAttribute('data-percent');

        item.addEventListener('mouseenter', () => {
            bar.style.width = targetPercent;
            text.innerText = targetPercent;
        });

        item.addEventListener('mouseleave', () => {
            bar.style.width = '0%';
            text.innerText = '0%';
        });
    });
</script>

<script>
    function sendToWhatsApp() {
        // 1. Ambil data dari input
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // 2. Validasi sederhana
        if (name === "" || message === "") {
            alert("Harap isi nama dan pesan Anda!");
            return;
        }

        // 3. Format pesan WhatsApp
        const phone = "6285177475115"; // GANTI DENGAN NOMOR WA ANDA
        const text = `Halo Ali Ridho, saya ${name}.%0A%0AEmail saya: ${email}.%0A%0APesan: ${message}`;

        // 4. Buka WhatsApp
        const url = `https://wa.me/${phone}?text=${text}`;
        window.open(url, '_blank');
    }
</script>

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