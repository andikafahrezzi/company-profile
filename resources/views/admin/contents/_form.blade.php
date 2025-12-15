<div class="space-y-4">

    {{-- PAGE --}}
    <div>
        <label>Page</label>
        <select name="page_id" required class="w-full">
            @foreach($pages as $page)
                <option value="{{ $page->id }}"
                    @selected(old('page_id', $content->page_id ?? '') == $page->id)>
                    {{ ucfirst($page->name) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- SECTION --}}
    <div>
        <label>Section</label>
        <select name="section_id" required class="w-full">
            @foreach($sections as $section)
                <option value="{{ $section->id }}"
                    @selected(old('section_id', $content->section_id ?? '') == $section->id)>
                    {{ $section->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- TITLE --}}
    <div>
        <label>Title</label>
        <input type="text" name="title"
               value="{{ old('title', $content->title ?? '') }}"
               class="w-full">
    </div>

    {{-- BODY --}}
    <div>
        <label>Body</label>
        <textarea name="body" rows="5" class="w-full">{{ old('body', $content->body ?? '') }}</textarea>
    </div>

    {{-- IMAGE --}}
    <div>
        <label>Image</label>
        <input type="file" name="image">

        @isset($content?->image)
            <img src="{{ asset('storage/'.$content->image) }}"
                 class="h-24 mt-2 rounded">
        @endisset
    </div>

    {{-- POSITION --}}
    <div>
        <label>Urutan</label>
        <input type="number" name="position"
               value="{{ old('position', $content->position ?? 0) }}">
    </div>

    <button class="btn btn-primary">Simpan</button>

</div>
