@extends('layouts.public')

@section('content')

<h1>Contact Us</h1>

@foreach ($page->sections as $section)
    <section id="{{ $section->code }}">
        <h2>{{ $section->name }}</h2>

        @foreach ($section->contents as $content)
            <div class="contact-item">
                {!! nl2br(e($content->body)) !!}
            </div>
        @endforeach
    </section>
@endforeach

@endsection
