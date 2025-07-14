@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Kenapa Pilih Kami</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'kenapapilihkami') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    {{-- Judul Utama --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Judul Utama</label>
      <input type="text" name="title" value="{{ content('kenapapilihkami', 'title', 'Kenapa Pilih Kami') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Loop 3 Kartu --}}
    @for ($i = 1; $i <= 3; $i++)
      <div class="border-t pt-6">
        <h3 class="text-lg font-semibold mb-2">Kartu {{ $i }}</h3>

        {{-- Gambar --}}
        <div>
          <label class="block text-sm font-semibold mb-1">Gambar</label>
          <input type="file" name="image_{{ $i }}" class="w-full border border-gray-300 px-4 py-2 rounded">
          @if(content('kenapapilihkami', 'image_'.$i))
            <img src="{{ asset(content('kenapapilihkami', 'image_'.$i)) }}" class="mt-2 w-40 rounded shadow" alt="Preview Gambar">
          @endif
        </div>

        {{-- Judul --}}
        <div>
          <label class="block text-sm font-semibold mb-1">Judul Kartu</label>
          <input type="text" name="card_title_{{ $i }}" value="{{ content('kenapapilihkami', 'card_title_'.$i) }}"
                 class="w-full border border-gray-300 px-4 py-2 rounded">
        </div>

        {{-- Deskripsi --}}
        <div>
          <label class="block text-sm font-semibold mb-1">Deskripsi Kartu</label>
          <textarea name="card_desc_{{ $i }}" rows="3"
                    class="w-full border border-gray-300 px-4 py-2 rounded">{{ content('kenapapilihkami', 'card_desc_'.$i) }}</textarea>
        </div>
      </div>
    @endfor

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection