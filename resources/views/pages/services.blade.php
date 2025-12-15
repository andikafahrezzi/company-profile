@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
        @foreach ($section->contents as $content)
            <div class="rounded-2xl border hover:shadow-xl transition overflow-hidden">
                <img
                    src="{{ asset('storage/'.$content->image) }}"
                    class="w-full h-48 object-cover"
                >
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">
                        {{ $content->title }}
                    </h3>
                    <p class="text-gray-600 text-sm">
                        {{ $content->body }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endforeach

@endsection
