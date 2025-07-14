<?php

use App\Models\SectionContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function edit($section)
    {
        $contents = SectionContent::where('section', $section)->get();
        return view('admin.edit', compact('contents', 'section'));
    }

    public function update(Request $request, $section)
    {
        foreach ($request->except('_token') as $key => $value) {
            SectionContent::updateOrCreate(
                ['section' => $section, 'key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Konten berhasil diperbarui.');
    }
}

