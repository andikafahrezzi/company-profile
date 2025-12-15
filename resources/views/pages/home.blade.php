@extends('layouts.public')

@section('content')

@foreach ($page->sections as $section)

    {{-- ================= HERO / BANNER ================= --}}
    @if ($section->code === 'hero')
        @php $hero = $section->contents->first(); @endphp

        <section 
x-data="{
    active:0,
    slides: {{ $page->sections->firstWhere('code','hero')->contents->count() }},
    start(){
        setInterval(()=> this.active = (this.active+1)%this.slides, 5000)
    }
}"
x-init="start"
class="relative h-screen overflow-hidden">

@foreach ($page->sections->firstWhere('code','hero')->contents as $i => $content)
<div 
    x-show="active === {{ $i }}"
    x-transition.opacity.duration.1000ms
    class="absolute inset-0 bg-cover bg-center"
    style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.6)), url('{{ asset('storage/'.$content->image) }}')">

    <div class="flex items-center justify-center h-full text-center px-6">
        <div class="max-w-3xl text-white animate-fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                {{ $content->title }}
            </h1>
            <p class="text-xl opacity-90">
                {{ $content->body }}
            </p>
        </div>
    </div>
</div>
@endforeach

{{-- Wave --}}
<div class="absolute bottom-0 w-full">
<svg viewBox="0 0 1440 120">
<path fill="#fff" d="M0,64L80,74.7C160,85,320,107,480,101.3C640,96,800,64,960,58.7C1120,53,1280,75,1360,85.3L1440,96L1440,0L0,0Z"/>
</svg>
</div>

</section>

    @endif

    {{-- ================= SERVICES PREVIEW ================= --}}
    @if ($section->code === 'services')
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($section->contents as $content)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition p-8 text-center">
                            <img
                                src="{{ asset('storage/'.$content->image) }}"
                                class="w-20 h-20 mx-auto mb-6 object-cover rounded-xl"
                            >
                            <h3 class="text-xl font-semibold mb-3">
                                {{ $content->title }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $content->body }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($section->code === 'Slider')
<section 
    x-data="{ active: 0 }" 
    class="relative overflow-hidden bg-gray-900 text-white"
>
    {{-- SLIDES --}}
    <div class="flex transition-transform duration-700"
         :style="`transform: translateX(-${active * 100}%)`">
        @foreach ($section->contents as $content)
            <div class="min-w-full h-[500px] relative">
                <img 
                    src="{{ asset('storage/'.$content->image) }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-60"
                >
                <div class="relative z-10 flex h-full items-center justify-center text-center px-6">
                    <div class="max-w-3xl animate-fade-up">
                        <h2 class="text-4xl md:text-6xl font-bold mb-4">
                            {{ $content->title }}
                        </h2>
                        <p class="text-lg text-gray-200">
                            {{ $content->body }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- NAV --}}
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2">
        @foreach ($section->contents as $i => $c)
            <button 
                @click="active = {{ $i }}"
                :class="active === {{ $i }} ? 'bg-white' : 'bg-white/40'"
                class="w-3 h-3 rounded-full transition"
            ></button>
        @endforeach
    </div>
</section>
@endif


@endforeach

@endsection
