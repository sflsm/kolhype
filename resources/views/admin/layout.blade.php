<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Kolhype</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#0F0C29] text-white flex-shrink-0 flex flex-col">
      <div class="bg-[#0F0C29] p-6 border-b border-white/10">
        <div class="text-2xl font-bold mb-4">
          <span class="text-white">Kol</span><span class="text-white">hype</span><span class="text-white">.</span>
        </div>
        <nav class="space-y-2 text-sm font-semibold text-white/90">
          <a href="{{ route('admin.content.edit', 'header') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Header</a>
          <a href="{{ route('admin.content.edit', 'hero') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Hero Section</a>
          <a href="{{ route('admin.content.edit', 'live_shopping') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Live Shopping</a>
          <a href="{{ route('admin.content.edit', 'shoppertainment') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Shoppertainment</a>
          <a href="{{ route('admin.content.edit', 'kenapapilihkami') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Kenapa Pilih Kami</a>
          <a href="{{ route('admin.content.edit', 'portfolio') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Portfolio</a>
          <a href="{{ route('admin.content.edit', 'paket') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Paket</a>
        </nav>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-50 overflow-y-auto">
      <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-semibold">Dashboard Admin</h1>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="text-sm bg-red-600 hover:bg-red-700 text-white px-4 py-1 rounded">Logout</button>
        </form>
      </header>

      <!-- Isi Konten -->
      <section class="p-6 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          @yield('content')
        </div>

        {{-- Optional preview panel --}}
        @hasSection('preview')
          <div class="bg-white p-6 rounded shadow">
            @yield('preview')
          </div>
        @endif
      </section>
    </main>
  </div>

</body>
</html>
