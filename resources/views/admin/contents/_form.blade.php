@php
    $isEdit = isset($content);
@endphp

<form
    action="{{ $isEdit
        ? route('admin.contents.update', $content->id)
        : route('admin.contents.store') }}"
    method="POST"
    enctype="multipart/form-data"
>
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- PAGE --}}
    <div>
        <label>Page</label>
        <select name="page_id" required>
            @foreach ($pages as $page)
                <option value="{{ $page->id }}"
                    @selected(old('page_id', $content->page_id ?? '') == $page->id)>
                    {{ $page->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- SECTION --}}
    <div>
        <label>Section</label>
        <select name="section_id" required>
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
        <label>Title</label>
        <input type="text" name="title"
            value="{{ old('title', $content->title ?? '') }}">
    </div>

    {{-- BODY --}}
    <div>
        <label>Body</label>
        <textarea name="body" rows="5">{{ old('body', $content->body ?? '') }}</textarea>
    </div>

    {{-- IMAGE --}}
    <div>
        <label>Image</label>
        <input type="file" name="image">
        @if($isEdit && $content->image)
            <p>Current: {{ $content->image }}</p>
        @endif
    </div>

    {{-- POSITION --}}
    <div>
        <label>Position</label>
        <input type="number" name="position"
            value="{{ old('position', $content->position ?? 0) }}">
    </div>

    <button type="submit">
        {{ $isEdit ? 'Update Content' : 'Create Content' }}
    </button>
</form>
