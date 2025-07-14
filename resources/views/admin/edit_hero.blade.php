@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Hero</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'hero') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    {{-- Headline --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Headline</label>
      <input type="text" name="headline" value="{{ content('hero', 'headline') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Subheadline --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Subheadline</label>
      <textarea name="subheadline" rows="3"
                class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">{{ content('hero', 'subheadline') }}</textarea>
    </div>

    {{-- CTA Text --}}
    <div>
      <label class="block text-sm font-semibold mb-1">CTA Text</label>
      <input type="text" name="cta_text" value="{{ content('hero', 'cta_text') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- CTA Link --}}
    <div>
      <label class="block text-sm font-semibold mb-1">CTA Link</label>
      <input type="text" name="cta_link" value="{{ content('hero', 'cta_link') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    {{-- Blob Image --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Gambar Blob (opsional)</label>
      <input type="file" name="blob_image" class="w-full border border-gray-300 px-4 py-2 rounded">
      @if(content('hero', 'blob_image'))
        <img src="{{ asset(content('hero', 'blob_image')) }}" alt="Blob Image" class="mt-2 max-w-xs rounded shadow">
      @endif
    </div>

    {{-- Video Source --}}
    <div>
      <label class="block text-sm font-semibold mb-1">Video Hero (opsional)</label>
      <input type="file" name="video_src" class="w-full border border-gray-300 px-4 py-2 rounded">
      @if(content('hero', 'video_src'))
        <video src="{{ asset(content('hero', 'video_src')) }}" controls class="mt-2 max-w-xs rounded shadow"></video>
      @endif
    </div>

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection