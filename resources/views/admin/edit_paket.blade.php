@extends('admin.layout')

@section('content')
  <h2 class="text-2xl font-bold mb-6">Edit Paket Kami</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.content.save', 'paket') }}" method="POST" class="space-y-8">
    @csrf

    <!-- Judul Section -->
    <div>
      <label class="block text-sm font-semibold mb-1">Judul Section</label>
      <input type="text" name="title" value="{{ content('paket', 'title') }}"
             class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-[#0F0C29]">
    </div>

    @for ($i = 1; $i <= 3; $i++)
      <div class="border-t pt-6">
        <h3 class="text-lg font-semibold mb-4">Paket {{ $i }}</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm font-semibold mb-1">Nama Paket</label>
            <input type="text" name="name_{{ $i }}" value="{{ content('paket', 'name_' . $i) }}"
                   class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1">Jam (misal: 20/jam)</label>
            <input type="text" name="jam_{{ $i }}" value="{{ content('paket', 'jam_' . $i) }}"
                   class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1">Waktu</label>
            <input type="text" name="waktu_{{ $i }}" value="{{ content('paket', 'waktu_' . $i) }}"
                   class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">
          </div>

          <div>
            <label class="block text-sm font-semibold mb-1">Harga</label>
            <input type="text" name="harga_{{ $i }}" value="{{ content('paket', 'harga_' . $i) }}"
                   class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold mb-1">Fitur (pisahkan dengan titik koma `;`)</label>
            <textarea name="fitur_{{ $i }}" rows="3"
                      class="w-full border border-gray-300 px-4 py-2 rounded shadow-sm">{{ content('paket', 'fitur_' . $i) }}</textarea>
          </div>
        </div>
      </div>
    @endfor

    <button type="submit" class="bg-[#0F0C29] text-white px-6 py-2 rounded hover:bg-[#1a1a3b]">
      Simpan Perubahan
    </button>
  </form>
@endsection
