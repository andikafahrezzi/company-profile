@extends('layouts.public')

@section('content')
    <h1>Our Services</h1>

    @foreach ($page->sections as $section)
        <h2>{{ $section->name }}</h2>

        <div class="services-wrapper">
            @foreach ($section->contents as $content)
                <div class="service-card">
                    <h3>{{ $content->title }}</h3>
                    <p>{{ $content->body }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
