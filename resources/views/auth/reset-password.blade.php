<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-[#1e2a3a] min-h-screen flex items-center justify-center">

  <div class="bg-gradient-to-b from-[#0d1a2b] to-[#1b3149] rounded-2xl p-8 w-full max-w-md shadow-lg text-white text-center">
    
    <h2 class="text-2xl font-bold">RESET PASSWORD</h2>
    <p class="text-sm text-gray-300 mb-6">Silakan masukkan password baru Anda</p>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-4 text-left">
      @csrf

      <!-- Token hidden input -->
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email -->
      <div class="relative">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
          <i class="fas fa-envelope"></i>
        </span>
        <input type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="Email"
          class="pl-10 w-full py-2 rounded-full bg-[#1c2e47] text-white placeholder-gray-400 outline-none focus:ring-2 focus:ring-yellow-400" required />
      </div>

      <!-- Password Baru -->
      <div class="relative">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
          <i class="fas fa-lock"></i>
        </span>
        <input type="password" name="password" placeholder="Password Baru"
          class="pl-10 w-full py-2 rounded-full bg-[#1c2e47] text-white placeholder-gray-400 outline-none focus:ring-2 focus:ring-yellow-400" required />
      </div>

      <!-- Konfirmasi Password -->
      <div class="relative">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
          <i class="fas fa-lock"></i>
        </span>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
          class="pl-10 w-full py-2 rounded-full bg-[#1c2e47] text-white placeholder-gray-400 outline-none focus:ring-2 focus:ring-yellow-400" required />
      </div>

      <button type="submit"
        class="w-full bg-yellow-400 text-black font-semibold py-2 rounded-full hover:bg-yellow-500 transition">
        Update Password
      </button>
    </form>
  </div>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
