<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lupa Password</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-[#1e2a3a] min-h-screen flex items-center justify-center">

  <div class="bg-gradient-to-b from-[#0d1a2b] to-[#1b3149] rounded-2xl p-8 w-full max-w-md shadow-lg text-white text-center">

    <h2 class="text-2xl font-bold">LUPA PASSWORD</h2>
    <p class="text-sm text-gray-300 mb-6">
      Masukkan email untuk reset password
    </p>

    @if (session('status'))
      <div class="text-green-400 text-sm mb-4">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4 text-left">
      @csrf

      <div class="relative">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
          <i class="fas fa-envelope"></i>
        </span>
        <input type="email" name="email" placeholder="Email"
          class="pl-10 w-full py-2 rounded-full bg-[#1c2e47] text-white placeholder-gray-400 outline-none focus:ring-2 focus:ring-yellow-400"
          value="{{ old('email') }}" required autofocus />
        
        @error('email')
          <p class="text-red-400 text-sm mt-1 ml-2">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="w-full bg-yellow-400 text-black font-semibold py-2 rounded-full hover:bg-yellow-500 transition">
        Kirim Link Reset Password
      </button>
    </form>

    <div class="mt-4 text-sm">
      <a href="{{ route('login') }}" class="text-yellow-400 hover:underline">← Kembali ke Login</a>
    </div>
  </div>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
