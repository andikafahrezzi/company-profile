<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;
use App\Models\Section;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::with(['page', 'section'])
            ->orderBy('page_id')
            ->orderBy('section_id')
            ->orderBy('position')
            ->get();

        return view('admin.contents.index', compact('contents'));
    }

    public function create()
    {
        $pages = Page::all();
        $sections = Section::all();

        return view('admin.contents.create', compact('pages', 'sections'));
    }

public function store(Request $request)
{
    $data = $request->validate([
        'page_id' => 'required|exists:pages,id',
        'section_id' => 'required|exists:sections,id',
        'title' => 'nullable|string',
        'body' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'position' => 'integer'
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('contents', 'public');
    }

    Content::create($data);

    return redirect()->route('admin.contents.index')
        ->with('success', 'Konten berhasil ditambahkan');
}



    public function edit(Content $content)
    {
        $pages = Page::all();
        $sections = Section::all();

        return view('admin.contents.edit', compact('content', 'pages', 'sections'));
    }

public function update(Request $request, Content $content)
{
    $data = $request->validate([
        'page_id' => 'required|exists:pages,id',
        'section_id' => 'required|exists:sections,id',
        'title' => 'nullable|string',
        'body' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'position' => 'integer'
    ]);

    if ($request->hasFile('image')) {

        // hapus gambar lama
        if ($content->image) {
            Storage::disk('public')->delete($content->image);
        }

        $data['image'] = $request->file('image')->store('contents', 'public');
    }

    $content->update($data);

    return redirect()->route('admin.contents.index')
        ->with('success', 'Konten berhasil diperbarui');
}



    public function destroy(Content $content)
    {
        $content->delete();

        return back()->with('success', 'Content berhasil dihapus');
    }
}
