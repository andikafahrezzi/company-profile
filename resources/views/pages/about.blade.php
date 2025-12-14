@extends('layouts.public')

@section('content')

<h1>About Us</h1>

@foreach ($page->sections as $section)
    <section id="{{ $section->code }}">
        <h2>{{ $section->name }}</h2>

        @foreach ($section->contents as $content)
            <article>
                @if ($content->title)
                    <h3>{{ $content->title }}</h3>
                @endif

                {!! nl2br(e($content->body)) !!}
            </article>
        @endforeach
    </section>
@endforeach

@endsection
