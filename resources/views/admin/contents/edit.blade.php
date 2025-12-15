<x-app-layout>
<x-slot name="header">Edit Konten</x-slot>

<form method="POST"
      action="{{ route('admin.contents.update', $content) }}"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')
    @include('admin.contents._form')

</form>
</x-app-layout>
