<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Tambah Content</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('admin.contents.store') }}">
            @csrf

            <div>
                <label>Page</label>
                <select name="page_id" required>
                    @foreach($pages as $page)
                        <option value="{{ $page->id }}">{{ $page->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Section</label>
                <select name="section_id" required>
                    @foreach($sections as $section)
                        <option value="{{ $section->id }}">
                            {{ $section->name }} ({{ $section->code }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label>Title</label>
                <input type="text" name="title">
            </div>

            <div>
                <label>Body</label>
                <textarea name="body"></textarea>
            </div>

            <div>
                <label>Position</label>
                <input type="number" name="position" value="0">
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
</x-app-layout>
 