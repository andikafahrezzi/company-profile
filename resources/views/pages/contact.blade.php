@extends('layouts.public')

@section('content')
    <h1>Contact Us</h1>

    @foreach ($page->sections as $section)
        <section>
            <h2>{{ $section->name }}</h2>

            @foreach ($section->contents as $content)
                <p>{!! nl2br(e($content->body)) !!}</p>
            @endforeach
        </section>
    @endforeach
@endsection
