@extends('layouts.public')

@section('content')
    <h1>About Us</h1>

    @foreach ($page->sections as $section)
        <section>
            <h2>{{ $section->name }}</h2>

            @foreach ($section->contents as $content)
                <div>
                    <strong>{{ $content->title }}</strong>
                    <p>{!! nl2br(e($content->body)) !!}</p>
                </div>
            @endforeach
        </section>
    @endforeach
@endsection
