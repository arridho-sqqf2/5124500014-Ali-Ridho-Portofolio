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