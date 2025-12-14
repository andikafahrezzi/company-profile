@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)
    @foreach ($section->contents as $content)
        <p>{{ $content->body }}</p>
        @if ($content->image)
                <img src="{{ asset('storage/'.$content->image) }}">
            @endif
    @endforeach
@endforeach

@endsection
