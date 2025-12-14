<div class="space-y-4">

    {{-- PAGE --}}
    <div>
        <label class="block font-medium">Page</label>
        <select name="page_id" class="w-full border rounded px-3 py-2" required>
            @foreach ($pages as $page)
                <option value="{{ $page->id }}"
                    @selected(old('page_id', $content->page_id ?? '') == $page->id)>
                    {{ ucfirst($page->name) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- SECTION --}}
    <div>
        <label class="block font-medium">Section</label>
        <select name="section_id" class="w-full border rounded px-3 py-2" required>
            @foreach ($sections as $section)
                <option value="{{ $section->id }}"
                    @selected(old('section_id', $content->section_id ?? '') == $section->id)>
                    {{ $section->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- TITLE --}}
    <div>
        <label class="block font-medium">Title</label>
        <input type="text" name="title"
            value="{{ old('title', $content->title ?? '') }}"
            class="w-full border rounded px-3 py-2">
    </div>

    {{-- BODY --}}
    <div>
        <label class="block font-medium">Body</label>
        <textarea name="body" rows="4"
            class="w-full border rounded px-3 py-2">{{ old('body', $content->body ?? '') }}</textarea>
    </div>

    {{-- IMAGE --}}
    <div>
        <label class="block font-medium">Image</label>
        <input type="file" name="image">

        @if (!empty($content?->image))
            <img src="{{ asset('storage/'.$content->image) }}"
                 class="mt-2 h-24 rounded">
        @endif
    </div>

    {{-- POSITION --}}
    <div>
        <label class="block font-medium">Position</label>
        <input type="number" name="position"
            value="{{ old('position', $content->position ?? 0) }}"
            class="w-full border rounded px-3 py-2">
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        {{ isset($content) ? 'Update' : 'Save' }}
    </button>

</div>
