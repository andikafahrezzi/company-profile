@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)

    {{-- HERO SECTION --}}
    @if ($section->code === 'hero')
        <section id="hero">
            @foreach ($section->contents as $content)
                <h1>{{ $content->title }}</h1>
                <p>{!! nl2br(e($content->body)) !!}</p>
            @endforeach
        </section>
    @endif

    {{-- INTRO SECTION --}}
    @if ($section->code === 'intro')
        <section id="intro">
            @foreach ($section->contents as $content)
                <h2>{{ $content->title }}</h2>
                <p>{!! nl2br(e($content->body)) !!}</p>
            @endforeach
        </section>
    @endif

    {{-- SERVICES HIGHLIGHT --}}
    @if ($section->code === 'services_highlight')
        <section id="services">
            <h2>Our Services</h2>
            <div class="services-wrapper">
                @foreach ($section->contents as $content)
                    <div class="service-card">
                        <h3>{{ $content->title }}</h3>
                        <p>{{ $content->body }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    {{-- PROJECT / PORTFOLIO --}}
    @if ($section->code === 'projects')
        <section id="projects">
            <h2>Our Projects</h2>
            <div class="project-list">
                @foreach ($section->contents as $content)
                    <div class="project-card">
                        <h3>{{ $content->title }}</h3>
                        <p>{{ $content->body }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

@endforeach

@endsection
