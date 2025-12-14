<x-app-layout>
<x-slot name="header">Tambah Konten</x-slot>

<form method="POST" action="{{ route('admin.contents.store') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.contents._form')
</form>

</x-app-layout>
