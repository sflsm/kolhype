@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Portfolio</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'portfolio') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    {{-- Judul --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input type="text" name="title" value="{{ content('portfolio', 'title') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Video 1 --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Video 1</label>
      <input type="file" name="video_1" class="w-full border border-gray-300 px-4 py-2 rounded">
      @if(content('portfolio', 'video_1'))
        <video controls class="mt-2 max-w-xs">
          <source src="{{ asset(content('portfolio', 'video_1')) }}" type="video/mp4">
        </video>
      @endif
    </div>

    {{-- Video 2 --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Video 2</label>
      <input type="file" name="video_2" class="w-full border border-gray-300 px-4 py-2 rounded">
      @if(content('portfolio', 'video_2'))
        <video controls class="mt-2 max-w-xs">
          <source src="{{ asset(content('portfolio', 'video_2')) }}" type="video/mp4">
        </video>
      @endif
    </div>

    {{-- Video 3 --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Video 3</label>
      <input type="file" name="video_3" class="w-full border border-gray-300 px-4 py-2 rounded">
      @if(content('portfolio', 'video_3'))
        <video controls class="mt-2 max-w-xs">
          <source src="{{ asset(content('portfolio', 'video_3')) }}" type="video/mp4">
        </video>
      @endif
    </div>

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection
