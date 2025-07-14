<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionContent;

class SectionContentController extends Controller
{
    public function edit($section)
{
    $contents = \App\Models\SectionContent::where('section', $section)->get();

    // Cek jika ada view spesifik per section (misal edit_header.blade.php)
    if (view()->exists("admin.edit_$section")) {
        return view("admin.edit_$section", compact('section', 'contents'));
    }

    // Default fallback ke view edit.blade.php
    return view('admin.edit', compact('section', 'contents'));
}

   public function save(Request $request, $section)
{
    // Tangani semua input kecuali token dan file
    foreach ($request->except('_token', 'blob_image', 'video_src') as $key => $value) {
        // Deteksi apakah menggunakan format section__key
        if (strpos($key, '__') !== false) {
            [$actualSection, $actualKey] = explode('__', $key, 2);
        } else {
            $actualSection = $section;
            $actualKey = $key;
        }

        SectionContent::updateOrCreate(
            ['section' => $actualSection, 'key' => $actualKey],
            ['value' => $value]
        );
    }

    // Tangani file gambar (blob)
    foreach (['blob_image', 'video_src', 'image'] as $fileField) {
    if ($request->hasFile($fileField)) {
        $file = $request->file($fileField);
        $path = $file->store('uploads', 'public');

        SectionContent::updateOrCreate(
            ['section' => $section, 'key' => $fileField],
            ['value' => 'storage/' . $path]
        );
    }
}

    // Tangani file video
    if ($request->hasFile('video_src')) {
        $file = $request->file('video_src');
        $path = $file->store('uploads', 'public');

        SectionContent::updateOrCreate(
            ['section' => $section, 'key' => 'video_src'],
            ['value' => 'storage/' . $path]
        );
    }

    return redirect()->back()->with('success', 'Konten berhasil diperbarui.');
}
}