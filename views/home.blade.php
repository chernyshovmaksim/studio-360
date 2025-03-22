@extends('layouts.home')

@section('content')
    {{-- <div class="title title-achievements">
        <div class="container">
            <h2>Награды и публикации</h2>
            <p>Наша компания участвует в многочисленных выставках, конференциях
                и конкурсах. Предлагаем ознакомиться с некоторыми докладами</p>
        </div>
    </div>

    <section class="achievements">
        <div class="achievements__gradient"></div>
        <div class="container container--full" id="achievements">
            @if (!empty($awards))
                @foreach ($awards as $item)
                    <div class="achievement">
                        <picture>
                            <source
                                srcset="/{{ evo()->runSnippet('phpthumb', [
                                    'input' => $item['image'],
                                    'options' => 'h=100,far=C',
                                    'webp' => 1,
                                ]) }}"
                                type="image/webp">
                            <img src="/{{ evo()->runSnippet('phpthumb', [
                                'input' => $item['image'],
                                'options' => 'h=100,far=C',
                            ]) }}"
                                alt="">
                        </picture>
                    </div>
                @endforeach
            @endif
        </div>
    </section> --}}


    {{-- @if (!empty($posts))
        <section class="blog">
            <div class="container container--full" id="blog">
                @foreach ($posts as $item)
                    <div class="blog__post">
                        <a href="{{ $item['url'] }}" class="blog__link">
                            <div class="blog__image">
                                <img src="/{{ $item['poster'] }}" alt="{{ $item['pagetitle'] }}">
                            </div>
                        </a>
                        <a href="{{ $item['url'] }}" class="blog__link">
                            <div class="blog__title">{{ $item['pagetitle'] }}</div>
                        </a>
                        <a href="{{ $item['url'] }}" class="blog__link">
                            <div class="blog__category">
                                <span>{{ $item['completion_date'] }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif --}}



    @if (!empty($competencies))
        <section class="title">
            <div class="container">
                <h2>Компетенции</h2>
            </div>
        </section>

        <section class="competencies">
            <div class="container" id="competencies">
                @foreach ($competencies as $index => $item)
                    <div class="accordion competency">
                        <div class="accordion__count">
                            <span>0{{ $index + 1 }}</span>
                        </div>
                        <div class="accordion__wrapper">
                            <div class="accordion__title">
                                <h3>{{ $item['pagetitle'] }}</h3>
                                <div class="accordion__arrow">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 10L12.5 15L17 10" stroke="#566272"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="accordion__description">
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>

                        @if (!empty($data['competencies']['fieldValue']))
                            @foreach ($data['competencies']['fieldValue'] as $ai)
                                @dd($ai)
                                <div class="accordion__content">
                                    <ul class="accordion__list">
                                        <li class="accordion__item">
                                            <div class="accordion__item-title">
                                                <h4>Title</h4>
                                            </div>
                                            <div class="accordion__item-content">
                                                <p>
                                                    Description
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach
            </div>
        </section>
    @endif




    @if (!empty($clients))
        <section class="clients">
            <div class="container container--full" id="clients">
                @foreach ($clients as $client)
                    <div class="client">
                        <picture>
                            <source
                                srcset="{{ evo()->runSnippet('phpthumb', [
                                    'input' => $client['image'],
                                    'options' => 'h=80,far=C',
                                    'webp' => 1,
                                ]) }}"
                                type="image/webp">
                            <img src="{{ evo()->runSnippet('phpthumb', [
                                'input' => $client['image'],
                                'options' => 'h=80,far=C',
                            ]) }}"
                                alt="">
                        </picture>
                    </div>
                @endforeach
            </div>
        </section>
    @endif




    @if (!empty($projects))
        <section class="title">
            <div class="container">
                <h2>Проекты</h2>
            </div>
        </section>
        <section class="projects">
            <div class="container container--full" id="projects">
                @foreach ($projects as $item)
                    <div class="project">
                        <a href="{{ $item['url'] }}" class="project__image">
                            <img src="/{{ $item['poster'] }}" alt="">
                        </a>
                        <div class="project__title">
                            <h3>{{ $item['pagetitle'] }}</h3>
                        </div>
                        @if (!empty($item['tags']))
                            <div class="project__tags">
                                @foreach ($item['tags'] as $tag)
                                    <span>{{ $tag['pagetitle'] }}</span>
                                @endforeach
                            </div>
                        @endif
                        <div class="project__info">
                            <div class="project__date">
                                <span>{{ $item['completion_date'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
@endsection
