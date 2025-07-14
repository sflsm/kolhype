@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Shoppertainment</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'shoppertainment') }}" method="POST" class="space-y-6">
    @csrf

    {{-- Judul --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Judul (boleh HTML)</label>
      <textarea name="title" rows="3"
        class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">{{ content('shoppertainment', 'title') }}</textarea>
    </div>

    {{-- Loop Konten Box (4 bagian) --}}
    @for($i = 1; $i <= 4; $i++)
      <div class="border-t pt-4">
        <h3 class="font-bold text-lg mb-2">Box {{ $i }}</h3>

        {{-- Icon --}}
        <div>
          <label class="block text-sm font-semibold mb-1">Icon (emoji atau HTML)</label>
          <input type="text" name="icon_{{ $i }}" value="{{ content('shoppertainment', 'icon_'.$i) }}"
            class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">
        </div>

        {{-- Heading --}}
        <div>
          <label class="block text-sm font-semibold mb-1">Judul Box</label>
          <input type="text" name="heading_{{ $i }}" value="{{ content('shoppertainment', 'heading_'.$i) }}"
            class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">
        </div>

        {{-- Deskripsi --}}
        <div>
          <label class="block text-sm font-semibold mb-1">Deskripsi</label>
          <textarea name="desc_{{ $i }}" rows="3"
            class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">{{ content('shoppertainment', 'desc_'.$i) }}</textarea>
        </div>
      </div>
    @endfor

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection