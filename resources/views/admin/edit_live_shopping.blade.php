@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Live Shopping</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'live_shopping') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    {{-- Judul --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input type="text" name="title" value="{{ content('live_shopping', 'title') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Deskripsi --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Deskripsi</label>
      <textarea name="description" rows="4"
                class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">{{ content('live_shopping', 'description') }}</textarea>
    </div>

    {{-- Gambar Blob --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Gambar Blob</label>
      <input type="file" name="image" class="w-full border border-gray-300 px-4 py-2 rounded">
      @if(content('live_shopping', 'image'))
        <img src="{{ asset(content('live_shopping', 'image')) }}" alt="Gambar Live Shopping" class="mt-2 max-w-xs rounded shadow">
      @endif
    </div>

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection