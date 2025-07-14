@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Header</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'header') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    {{-- Logo Teks (Header) --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Teks Logo</label>
      <input type="text" name="header__logo_text" value="{{ content('header', 'logo_text') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Teks PRODUK (Nav) --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Teks NAV 1</label>
      <input type="text" name="nav__produk_label" value="{{ content('nav', 'produk_label') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Teks PROMO (Nav) --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Teks NAV 2</label>
      <input type="text" name="nav__promo_label" value="{{ content('nav', 'promo_label') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Teks LAINNYA (Nav) --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Teks NAV 3</label>
      <input type="text" name="nav__lainnya_label" value="{{ content('nav', 'lainnya_label') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Nomor WhatsApp (Header) --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Nomor WhatsApp</label>
      <input type="text" name="header__whatsapp_number" value="{{ content('header', 'whatsapp_number') }}"
             placeholder="Contoh: 6281234567890"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Link WhatsApp (Header) --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Link WhatsApp</label>
      <input type="text" name="header__whatsapp_link" value="{{ content('header', 'whatsapp_link') }}"
             placeholder="https://wa.me/6281234567890"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection