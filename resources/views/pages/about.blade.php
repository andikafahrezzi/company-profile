@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)

<section class="py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6">
        @foreach ($section->contents as $content)
            <h2 class="text-3xl font-bold mb-6">
                {{ $content->title }}
            </h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                {{ $content->body }}
            </p>
        @endforeach
    </div>
</section>

@endforeach

@endsection
