<!-- <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Kolhype</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#0F0C29] text-white flex-shrink-0 flex flex-col">
      <div class="bg-[#0F0C29] p-6 border-b border-white/10">
        <!-- Logo -->
        <div class="text-2xl font-bold mb-4">
          <span class="text-white">Kol</span><span class="text-white">hype</span><span class="text-white">.</span>
        </div>

        <!-- Nav Menu -->
        <nav class="space-y-2 text-sm font-semibold text-white/90">
          <a href="{{ route('admin.content.edit', 'header') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Header</a>
          <a href="{{ route('admin.content.edit', 'hero') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Hero Section</a>
          <a href="{{ route('admin.content.edit', 'liveshopping') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Live Shopping</a>
          <a href="{{ route('admin.content.edit', 'shoppertainment') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Shoppertainment</a>
          <a href="{{ route('admin.content.edit', 'portfolio') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Portfolio</a>
          <a href="{{ route('admin.content.edit', 'paket') }}" class="block py-2 px-3 rounded hover:bg-[#1a1a3b]">Paket</a>
        </nav>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-50 overflow-y-auto">
      <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
        <h1 class="text-xl font-semibold">Dashboard Admin</h1>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="text-sm text-gray-600 hover:text-red-600 transition">
            Logout
          </button>
        </form>
      </header>

      <section class="p-6">
        @yield('content')
      </section>
    </main>
  </div>

</body>
</html> -->
