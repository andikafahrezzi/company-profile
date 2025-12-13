<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Content Management</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('admin.contents.create') }}" class="btn btn-primary">
            + Tambah Content
        </a>

        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th>Page</th>
                    <th>Section</th>
                    <th>Title</th>
                    <th>Position</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td>{{ $content->page->name }}</td>
                    <td>{{ $content->section->name }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->position }}</td>
                    <td>
                        <a href="{{ route('admin.contents.edit', $content) }}">Edit</a>
                        |
                        <form action="{{ route('admin.contents.destroy', $content) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
