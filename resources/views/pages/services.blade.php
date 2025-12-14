@extends('layouts.public')

@section('content')

<h1>Our Services</h1>

@foreach ($page->sections as $section)
    @if ($section->code === 'services_list')
        <div class="services">
            @foreach ($section->contents as $content)
                <div class="card">
                    <h4>{{ $content->title }}</h4>
                    <p>{{ $content->body }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endforeach


@endsection
