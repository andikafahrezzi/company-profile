@extends('layouts.public')

@section('content')

<h1>Our Services</h1>

@foreach ($page->sections as $section)
    <section id="{{ $section->code }}">
        <h2>{{ $section->name }}</h2>

        <div class="services-wrapper">
            @foreach ($section->contents as $content)
                <div class="service-card">
                    <h3>{{ $content->title }}</h3>

                    @if ($content->image)
                        <img src="{{ asset('storage/'.$content->image) }}" alt="">
                    @endif

                    {!! nl2br(e($content->body)) !!}
                </div>
            @endforeach
        </div>
    </section>
@endforeach

@endsection
