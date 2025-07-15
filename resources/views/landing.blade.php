<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kolhype</title>
  <script src="https://cdn.tailwindcss.com"></script>
   @vite(['resources/css/style.css', 'resources/js/landing.js', 'resources/js/form.js'])
</head>
<body class="text-white bg-[#0F0C29]">

  <!-- Header Navigation -->
  <header class="bg-[#0F0C29] text-white">
    <div class="max-w-7xl mx-auto px-6 md:px-16 py-4 flex items-center justify-between">
      
      <!-- Logo -->
      <div class="text-3xl font-bold">
  {!! content('header', 'logo_text', '<span class="text-white">Kol</span><span class="text-white">hype</span><span class="text-white">.</span>') !!}
</div>

      <!-- RIGHT SIDE: Nav + WhatsApp -->
      <div class="flex items-center space-x-8">
        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-6 text-sm font-semibold text-white/70">
  <a href="{{ content('nav', 'produk_link', '#') }}" class="hover:text-white transition">
    {{ content('nav', 'produk_label', 'PRODUK') }}
  </a>
  <a href="{{ content('nav', 'promo_link', '#') }}" class="hover:text-white transition">
    {{ content('nav', 'promo_label', 'PROMO') }}
  </a>
  <div class="relative group">
    <button class="hover:text-white transition flex items-center">
      {{ content('nav', 'lainnya_label', 'LAINNYA') }}
      <svg class="ml-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
        <path d="M5.23 7.21a.75.75 0 011.06.02L10 11.185l3.71-3.955a.75.75 0 111.08 1.04l-4.24 4.525a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"/>
      </svg>
    </button>
    <!-- Tambahkan dropdown jika perlu -->
  </div>
</nav>

        <!-- WhatsApp Contact -->
<div class="flex items-center space-x-3 bg-white text-[#1b1b1b] rounded-full px-4 py-2 shadow">
  <span class="font-bold text-sm md:text-base text-[#0f172a]">
    {{ content('header', 'whatsapp_number', '0822 9944 9494') }}
  </span>
  <a href="https://wa.me/{{ content('header', 'whatsapp_link', '6282299449494') }}" target="_blank" class="bg-[#c9eef5] rounded-full p-2 hover:scale-105 transition">
    <img src="/images/logo-wa.png" alt="WhatsApp" class="w-5 h-5">
  </a>
</div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative overflow-hidden pb-40 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset(content('hero', 'background_image', 'images/giphy.gif')) }}'); height: 520px;">
  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-16 flex flex-col-reverse md:flex-row items-center pt-10 md:pt-19">
    
    <!-- Left Content -->
    <div class="w-full md:w-1/2">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
        {{ content('hero', 'headline', 'Jualan di Live Streaming Biar Makin Winning !') }}
      </h1>
      <p class="mb-6 text-base md:text-lg">
        {{ content('hero', 'subheadline', 'Gratis visitasi atau claim diskon hingga 50% untuk foto dan video produk dengan talent bagi 17 orang beruntung selama bulan Agustus!') }}
      </p>
      <a href="{{ content('hero', 'cta_link', '#') }}" class="group inline-flex items-center bg-white text-[#0F0C29] font-semibold px-6 py-3 rounded-full shadow hover:shadow-lg hover:bg-[#fefefe] transition duration-300 relative overflow-hidden">
        <span class="z-10 relative transition-transform group-hover:translate-x-1">
          {{ content('hero', 'cta_text', 'Daftar Sekarang') }}
        </span>
        <span class="ml-3 inline-block bg-[#0F0C29] text-[#aeacbe] rounded-full p-2 relative z-10 transition-all group-hover:scale-110 group-hover:rotate-12">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </span>
        <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition duration-500 rounded-full"></span>
      </a>
    </div>

    <!-- Right Content (Blob Play Button) -->
    <div class="w-full md:w-1/2 flex justify-center mb-12 md:mb-0">
      <div class="relative w-[300px] h-[300px] md:w-[400px] md:h-[400px] flex items-center justify-center overflow-hidden rounded-full">
        
        <!-- Ganti SVG dengan Gambar Blob -->
        <img src="{{ asset(content('hero', 'blob_image', 'images/PORTOFOLIO-16-15.png')) }}" alt="Blob Background" class="absolute w-[140%] h-[140%] z-0 object-contain" />

        <!-- Video (hidden initially) -->
        <video id="promoVideo" class="absolute w-full h-full object-cover hidden z-10 rounded-full" autoplay controls>
          <source src="{{ asset(content('hero', 'video_src', 'images/port.mp4')) }}" type="video/mp4">
          Browser Anda tidak mendukung pemutaran video.
        </video>

        <!-- Pulse Ring Animation -->
        <div class="absolute w-24 h-24 pulse-ring" id="pulseRing"></div>

        <!-- Play Button -->
        <button id="playBtn" class="z-20 relative bg-white/20 w-20 h-20 rounded-full flex items-center justify-center shadow-md play-button">
          <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8 5v14l11-7L8 5z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Blob Shape at Bottom -->
  <div class="absolute bottom-0 left-0 w-full z-0">
    <svg viewBox="0 0 1440 320" class="w-full drop-shadow-[0_-6px_16px_rgba(0,0,0,0.1)]">
      <path fill="#0F0C29" fill-opacity="1"
        d="M0,192L60,197.3C120,203,240,213,360,192C480,171,600,117,720,96C840,75,960,85,1080,122.7C1200,160,1320,224,1380,256L1440,288V320H0Z">
      </path>
    </svg>
  </div>
</section>

 <!-- Live Shopping Section -->
<section class="relative bg-[#0F0C29] text-black overflow-hidden py-20">
  <div class="max-w-7xl mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center relative z-10">

    <!-- Judul Tengah Full Width -->
    <div class="col-span-1 md:col-span-2 text-center mb-5">
      <h2 class="text-5xl md:text-6xl font-bold leading-tight text-white">
        {!! content('live_shopping', 'title', 'Tambah Channel Jualanmu<br/>dengan Live Shopping') !!}
      </h2>
    </div>

    <!-- Kiri: Gambar -->
    <div id="animate-left"
         class="relative flex justify-center md:justify-start opacity-0 translate-x-[-50px] transition-all duration-700 ease-in-out">
      <div class="relative flex justify-center items-center h-[360px] md:h-[420px]">
        <!-- Kotak latar belakang -->
        <div class="absolute bg-white rounded-3xl shadow-xl w-[260px] h-[260px] md:w-[320px] md:h-[320px] z-10"></div>

        <!-- Gambar -->
        <img src="{{ content('live_shopping', 'image', 'images/assetsweb.png') }}"
             alt="Talent"
             class="relative z-20 w-[400px] md:w-[520px] -mt-16 scale-125 rounded-3xl">
      </div>
    </div>

    <!-- Kanan: Deskripsi -->
    <div id="animate-right"
         class="text-left md:pl-10 opacity-0 translate-x-[50px] transition-all duration-700 ease-in-out">
      <p class="text-base md:text-lg leading-relaxed text-white">
        {{ content('live_shopping', 'description', 'Saatnya jualan di Live Streaming, tren marketing nomor satu di media sosial! Bangun interaksi real-time dengan calon pembeli, tingkatkan penjualan, dan bikin brand kamu semakin dikenal.') }}
      </p>
    </div>
  </div>
</section>


<!-- Shoppertainment Section -->
<section class="bg-[#0F0C29] text-white py-20">
  <div class="max-w-7xl mx-auto px-6 md:px-16">

    <!-- Judul -->
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
      {!! content('shoppertainment', 'title', 'Dengan pendekatan <span class="text-[#F4C542]">Shoppertainment</span> kami, kamu akan mendapatkan:') !!}
    </h2>

    <!-- Grid Box -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- Solusi E-Commerce -->
      <div id="animate-left-1" class="bg-white/10 p-6 rounded-2xl shadow-md transform transition duration-700 opacity-0 -translate-x-12">
        <div class="flex items-start space-x-4">
          <div class="text-3xl">{!! content('shoppertainment', 'icon_1', '📦') !!}</div>
          <div>
            <h3 class="text-xl font-semibold mb-1">
              {{ content('shoppertainment', 'heading_1', 'Solusi E-Commerce') }}
            </h3>
            <p class="text-white/80 text-sm leading-relaxed">
              {{ content('shoppertainment', 'desc_1', 'Tingkatkan penjualan online dengan menggabungkan kekuatan media sosial dan marketplace.') }}
            </p>
          </div>
        </div>
      </div>

      <!-- Iklan Media Sosial -->
      <div id="animate-right-1" class="bg-white/10 p-6 rounded-2xl shadow-md transform transition duration-700 opacity-0 translate-x-12">
        <div class="flex items-start space-x-4">
          <div class="text-3xl">{!! content('shoppertainment', 'icon_2', '📢') !!}</div>
          <div>
            <h3 class="text-xl font-semibold mb-1">
              {{ content('shoppertainment', 'heading_2', 'Iklan Media Sosial') }}
            </h3>
            <p class="text-white/80 text-sm leading-relaxed">
              {{ content('shoppertainment', 'desc_2', 'Jangkau audiens yang tepat dan tingkatkan penjualan dengan iklan media sosial.') }}
            </p>
          </div>
        </div>
      </div>

      <!-- Live Streaming yang Memikat -->
      <div id="animate-left-2" class="bg-white/10 p-6 rounded-2xl shadow-md transform transition duration-700 opacity-0 -translate-x-12">
        <div class="flex items-start space-x-4">
          <div class="text-3xl">{!! content('shoppertainment', 'icon_3', '💘') !!}</div>
          <div>
            <h3 class="text-xl font-semibold mb-1">
              {{ content('shoppertainment', 'heading_3', 'Live Streaming yang Memikat') }}
            </h3>
            <p class="text-white/80 text-sm leading-relaxed">
              {{ content('shoppertainment', 'desc_3', 'Hasilkan live stream seru yang laris manis sesuai dengan tren dan gaya brand.') }}
            </p>
          </div>
        </div>
      </div>

      <!-- Host -->
      <div id="animate-right-2" class="bg-white/10 p-6 rounded-2xl shadow-md transform transition duration-700 opacity-0 translate-x-12">
        <div class="flex items-start space-x-4">
          <div class="text-3xl">{!! content('shoppertainment', 'icon_4', '⭐') !!}</div>
          <div>
            <h3 class="text-xl font-semibold mb-1">
              {{ content('shoppertainment', 'heading_4', 'Host') }}
            </h3>
            <p class="text-white/80 text-sm leading-relaxed">
              {{ content('shoppertainment', 'desc_4', 'Curi perhatian penonton dan tingkatkan penjualan dengan kreativitas para host kami.') }}
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Kenapa Pilih Kami Section -->
<section class="bg-[#0F0C29] text-white py-16">
  <div class="max-w-6xl mx-auto px-4 md:px-8">
    
    <!-- Judul -->
    <h2 class="text-2xl md:text-3xl font-bold text-center mb-10">
      {{ content('kenapapilihkami', 'title', 'Kenapa Pilih Kami') }}
    </h2>
    
    <!-- Grid Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

      @for ($i = 1; $i <= 3; $i++)
        <div id="fade-up-{{ $i }}" class="bg-white text-black rounded-2xl shadow-md overflow-hidden opacity-0 translate-y-12 transform transition duration-700 delay-{{ ($i - 1) * 150 }}">
          <img src="{{ asset(content('kenapapilihkami', 'image_'.$i, 'images/default.jpg')) }}" alt="Card Image {{ $i }}" class="w-full h-48 object-cover">
          <div class="p-4 md:p-5">
            <h3 class="text-base md:text-lg font-semibold mb-1">
              {{ content('kenapapilihkami', 'card_title_'.$i, 'Judul Kartu '.$i) }}
            </h3>
            <p class="text-sm text-gray-700">
              {{ content('kenapapilihkami', 'card_desc_'.$i, 'Deskripsi untuk kartu '.$i) }}
            </p>
          </div>
        </div>
      @endfor

    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section class="bg-[#0F0C29] text-white py-20">
  <div class="max-w-7xl mx-auto px-6 md:px-16">

    <!-- Judul -->
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
      {{ content('portfolio', 'title', 'Portfolio') }}
    </h2>

    <!-- Video Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-center items-start">

      {{-- Video 1 --}}
      <div id="fade-up-portfolio-1" class="rounded-lg overflow-hidden shadow-lg opacity-0 translate-y-12 transition duration-700">
        <div class="aspect-[9/16] bg-black">
          <video class="w-full h-full" controls autoplay muted loop playsinline>
            <source src="{{ content('portfolio', 'video_1', 'images/porto1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

      {{-- Video 2 --}}
      <div id="fade-up-portfolio-2" class="rounded-lg overflow-hidden shadow-lg opacity-0 translate-y-12 transition duration-700 delay-150">
        <div class="aspect-[9/16] bg-black">
          <video class="w-full h-full" controls autoplay muted loop playsinline>
            <source src="{{ content('portfolio', 'video_2', 'images/porto2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

      {{-- Video 3 - YouTube Embed --}}
      <div id="fade-up-portfolio-3" class="rounded-lg overflow-hidden shadow-lg opacity-0 translate-y-12 transition duration-700 delay-300">
        <div class="aspect-[9/16] bg-black">
          <video class="w-full h-full" controls autoplay muted loop playsinline>
            <source src="{{ content('portfolio', 'video_3', 'images/porto3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Paket Kami Section -->
<section class="bg-[#0F0C29] text-white py-20">
  <div class="max-w-7xl mx-auto px-6 md:px-16 text-center">

    <!-- Judul -->
    <h2 class="text-3xl md:text-4xl font-bold mb-12">
      {{ content('paket', 'title', 'Paket Kami') }}
    </h2>

    <!-- Grid Paket -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      @php
        $pakets = [
          [
            'id' => '1',
            'name' => content('paket', 'name_1', 'Paket Mantap'),
            'bg' => '#cc4ec3',
            'jam' => content('paket', 'jam_1', '20/jam'),
            'waktu' => content('paket', 'waktu_1', '06.00 - 15.00'),
            'harga' => content('paket', 'harga_1', 'Rp 15.000.000'),
            'fitur' => content('paket', 'fitur_1', 'Studi Live Streaming;Lightning Standar;Kamera HP Standar;Background Standar;Properti;Host Streamer'),
          ],
          [
            'id' => '2',
            'name' => content('paket', 'name_2', 'Paket Jos'),
            'bg' => '#57a3e8',
            'jam' => content('paket', 'jam_2', '35/jam'),
            'waktu' => content('paket', 'waktu_2', '15.00 - 00.00'),
            'harga' => content('paket', 'harga_2', 'Rp 30.000.000'),
            'fitur' => content('paket', 'fitur_2', 'Studi Live Streaming;Lightning Standar;Kamera HP Standar;Background Standar;Properti;Host Streamer'),
            'border' => true,
          ],
          [
            'id' => '3',
            'name' => content('paket', 'name_3', 'Paket Oke'),
            'bg' => '#9deaf3',
            'jam' => content('paket', 'jam_3', '50/jam'),
            'waktu' => content('paket', 'waktu_3', 'Bebas Pilih Jam'),
            'harga' => content('paket', 'harga_3', 'Rp 60.000.000'),
            'fitur' => content('paket', 'fitur_3', 'OBS (free desain background);Studi Live Streaming;Lightning Standar;Kamera HP Standar;Background Standar;Properti;Host Streamer'),
          ],
        ];
      @endphp

      @foreach ($pakets as $paket)
        <div id="fade-up-paket-{{ $paket['id'] }}"
          class="bg-white text-black rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 opacity-0 translate-y-12 {{ $paket['border'] ?? false ? 'border-4 border-[#57a3e8] delay-150' : '' }}">
          
          <div class="py-4 text-xl font-bold text-white" style="background-color: {{ $paket['bg'] }}">
            {{ $paket['name'] }}
          </div>
          
          <div class="p-6">
            <p class="font-semibold mb-2">{{ $paket['jam'] }}</p>
            <p class="text-sm mb-2">{{ $paket['waktu'] }}</p>
            
            <ul class="text-sm leading-relaxed my-4 space-y-1">
              @foreach (explode(';', $paket['fitur']) as $fitur)
                <li>{{ $fitur }}</li>
              @endforeach
            </ul>
            
            <p class="text-lg font-bold mt-4 mb-6">{{ $paket['harga'] }}</p>
            <a href="#form-pesan" class="inline-block bg-[#1c174b] text-white px-5 py-2 rounded-md hover:bg-[#2d2574] transition">Pesan Paket Ini</a>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>

<!-- Form Pesan Sekarang -->
<section id="form-pesan" class="bg-[#0F0C29] py-16">
  <div id="form-container" class="max-w-5xl mx-auto px-6 py-10 rounded-2xl shadow-lg bg-gray-200 opacity-0 translate-y-12 transition duration-700">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-black">
      {{ content('form', 'title', 'Pesan Sekarang!') }}
    </h2>

    <form id="whatsappForm" class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Nama -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1 text-black">Nama</label>
        <input type="text" id="nama" name="nama" class="p-3 rounded-md border border-gray-300 text-black" placeholder="Nama Anda" required>
      </div>

      <!-- Email -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1 text-black">Email Perusahaan</label>
        <input type="email" id="email" name="email" class="p-3 rounded-md border border-gray-300 text-black" placeholder="email@company.com" required>
      </div>

      <!-- Brand -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1 text-black">Perusahaan / Brand</label>
        <input type="text" id="brand" name="brand" class="p-3 rounded-md border border-gray-300 text-black" placeholder="Nama Brand" required>
      </div>

      <!-- Telepon -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1 text-black">Nomor Telepon</label>
        <input type="tel" id="telepon" name="telepon" class="p-3 rounded-md border border-gray-300 text-black" placeholder="08xxxxxxxxxx" required>
      </div>

      <!-- Produk -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1 text-black">Jenis Produk</label>
        <input type="text" id="produk" name="produk" class="p-3 rounded-md border border-gray-300 text-black" placeholder="Contoh: Kosmetik, Makanan, dll" required>
      </div>

      <!-- Link -->
      <div class="flex flex-col">
        <label class="text-sm font-medium mb-1 text-black">Link Website / Media Sosial</label>
        <input type="url" id="link" name="link" class="p-3 rounded-md border border-gray-300 text-black" placeholder="https://instagram.com/brand">
      </div>

      <!-- Paket -->
      <div class="flex flex-col md:col-span-2">
        <label class="text-sm font-medium mb-1 text-black">Pilih Paket</label>
        <select id="paket" name="paket" class="p-3 rounded-md border border-gray-300 text-black" required>
          <option value="">-- Pilih Paket --</option>
          <option value="Mantap">Paket Mantap - Rp 15,000,000</option>
          <option value="Jos">Paket Jos - Rp 30,000,000</option>
          <option value="Oke">Paket Oke - Rp 60,000,000</option>
          <option value="Custom">Custom - Lebih dari Rp 60,000,000</option>
        </select>
      </div>

      <!-- Tombol Kirim -->
      <div class="md:col-span-2">
        <button type="submit" class="bg-[#1c174b] hover:bg-[#2d2574] text-white font-semibold py-3 px-8 rounded-md mt-4 transition duration-300">
          Kirim
        </button>
      </div>
    </form>
  </div>
</section>


</body>
</html>