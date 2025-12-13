<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'section_id' => 'required|exists:sections,id',
            'title' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'position' => 'required|integer',
        ]);

        Content::create($request->all());

        return redirect()->route('admin.contents.index')
            ->with('success', 'Content berhasil ditambahkan');
    }

    public function edit(Content $content)
    {
        $pages = Page::all();
        $sections = Section::all();

        return view('admin.contents.edit', compact('content', 'pages', 'sections'));
    }

    public function update(Request $request, Content $content)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'section_id' => 'required|exists:sections,id',
            'title' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'position' => 'required|integer',
        ]);

        $content->update($request->all());

        return redirect()->route('admin.contents.index')
            ->with('success', 'Content berhasil diupdate');
    }

    public function destroy(Content $content)
    {
        $content->delete();

        return back()->with('success', 'Content berhasil dihapus');
    }
}
