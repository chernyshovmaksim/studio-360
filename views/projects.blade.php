@extends('layouts.main')


@section('content')
    <section class="projects-hero">
        <div class="overlay"></div>
        <div class="projects-hero__slider" id="projects-slider">
            @if (!empty($slider))
                @foreach ($slider as $item)
                    <div class="projects-hero__item">
                        <img srcset="
                            /{{ evo()->runSnippet('phpthumb', [
                                'input' => $item['src'],
                                'options' => 'w=1920,h=1080,zc=1',
                                'webp' => 1,
                            ]) }} 1920w,
                             /{{ evo()->runSnippet('phpthumb', [
                                 'input' => $item['src'],
                                 'options' => 'w=1280,h=720,zc=1',
                                 'webp' => 1,
                             ]) }} 1280w,
                            "
                            src="/{{ evo()->runSnippet('phpthumb', [
                                'input' => $item['src'],
                                'options' => 'w=1280,h=720,zc=1',
                            ]) }}"
                            alt="">
                    </div>
                @endforeach
            @endif
        </div>
        <div class="projects-hero__info">
            <h3 class="projects-hero__subtitle">{{ $documentObject['longtitle'] }}</h3>
            <h1 class="projects-hero__title">{{ $documentObject['pagetitle'] }}</h1>
        </div>
    </section>


    <section class="filters">
        <div class="container">
            <div class="filters__group">
                {{-- filter__btn--active --}}
                {{-- <a href="/projects" class="filter__btn filter__btn--active">
                    Все
                </a> --}}
                {{-- @if (!empty($filters))
                    @foreach ($filters as $item)
                        <a href="/tags/{{ $item['id'] }}" class="filter__btn">
                            {{ $item['pagetitle'] }}
                        </a>
                    @endforeach
                @endif --}}
            </div>
        </div>
    </section>

    <section class="projects-page">
        <div class="container">
            <div class="projects-page__list">
                @foreach ($projects as $item)
                    @include('parts.product_card', [
                        'item' => $item,
                    ])
                @endforeach
            </div>
        </div>
    </section>
@endsection
