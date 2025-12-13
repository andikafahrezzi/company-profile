@extends('layouts.public')

@section('content')
    <h1>{{ $page->name }}</h1>

    @foreach ($page->sections as $section)
        <section>
            <h2>{{ $section->name }}</h2>

            @foreach ($section->contents as $content)
                <article>
                    @if ($content->title)
                        <h3>{{ $content->title }}</h3>
                    @endif

                    @if ($content->image)
                        <img src="{{ asset('storage/'.$content->image) }}" alt="">
                    @endif

                    {!! nl2br(e($content->body)) !!}
                </article>
            @endforeach
        </section>
    @endforeach
@endsection
