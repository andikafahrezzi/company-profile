@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)

<section class="py-20 bg-gray-100">
    <div class="max-w-4xl mx-auto px-6 text-center">
        @foreach ($section->contents as $content)
            <h2 class="text-3xl font-bold mb-4">
                {{ $content->title }}
            </h2>
            <p class="text-gray-700 mb-8">
                {{ $content->body }}
            </p>
        @endforeach
    </div>
</section>

@endforeach

@endsection
