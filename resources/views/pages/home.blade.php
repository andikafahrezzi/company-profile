@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)
    @if ($section->code === 'hero')
        @foreach ($section->contents as $content)
            <h1>{{ $content->title }}</h1>
            <p>{{ $content->body }}</p>
            @if ($content->image)
                <img src="{{ asset('storage/'.$content->image) }}">
            @endif
        @endforeach
    @endif
@endforeach


@endsection
