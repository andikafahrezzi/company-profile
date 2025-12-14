@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)
    <section>
        <h2>{{ $section->name }}</h2>

        @foreach ($section->contents as $content)
            <h3>{{ $content->title }}</h3>
            <p>{{ $content->body }}</p>
        @endforeach
    </section>
@endforeach


@endsection
