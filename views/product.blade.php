@extends('layouts.main')
@section('content')
    <section class="product-hero">
        <img class="product-hero__image" src="/{{ $main_images['fhd'] }}" />
        <div class="product-hero__overview"></div>
        <div class="container">
            <a href="/projects" class="product-hero__link-callback">
                Все проекты
            </a>

            <div class="product-hero__categories">
                @foreach ($tags as $tag)
                    <a href="/tags/{{ $tag['id'] }}" class="product-hero__categories-item">
                        {{ $tag['pagetitle'] }}
                    </a>
                @endforeach
            </div>

            <h1 class="product-hero__title">
                {{ $documentObject['pagetitle'] }}
            </h1>

            <div class="product-hero__date">
                {{ $product_date_create }}
            </div>
        </div>
    </section>

    <section class="product-info">
        <div class="container">
            <div class="product-info__row">
                <div class="product-info__col">
                    <div class="product-info__title">
                        <h1>{{ $documentObject['longtitle'] }}</h1>
                    </div>
                    <div class="product-info__categories">
                        @foreach ($tags as $tag)
                            <a href="/tags/{{ $tag['id'] }}" class="product-hero__categories-item">
                                {{ $tag['pagetitle'] }}
                            </a>
                        @endforeach
                    </div>
                    <div class="product-info__description">
                        {{ $documentObject['introtext'] }}
                    </div>
                    <div class="product-info__small-params">
                        @if ($product_main_params == '')
                        @else
                            @foreach ($product_main_params as $param)
                                <div class="product-info__small-param">
                                    <div class="product-info__small-param-value">{{ $param['value'] }}</div>
                                    <span class="product-info__small-param-title">{{ $param['name'] }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="product-info__col">
                    <div class="product-info__params">
                        @if ($product_other_params == '')
                        @else
                            @foreach ($product_other_params as $param)
                                <div class="product-info__param">
                                    <span class="product-info__param-title">{{ $param['name'] }}</span>
                                    <div class="product-info__param-value">
                                        {{ $param['value'] }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>

    @if (!@empty($pbcontent))
        @foreach ($pbcontent as $block)
            @if (View::exists('pagebuilder.' . $block['config']))
                @if ($block['config'] == 'footer')
                    @include('pagebuilder.' . $block['config'], [
                        'block' => $block,
                        'index' => $loop->index,
                        'prevnextlinks' => $prevnextlinks,
                    ])
                @else
                    @include('pagebuilder.' . $block['config'], [
                        'block' => $block,
                        'index' => $loop->index,
                    ])
                @endif
            @else
                <p style="color: brown;">View for config <b>{{ $block['config'] }}</b> not found</p>
            @endif
        @endforeach
    @endif

    {{-- 

    <section class="title">
        <div class="container">
            <h2>Еще по теме</h2>
        </div>
    </section>

    <section class="projects">
        <div class="container container--full" id="projects">
            <div class="project">
                <div class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </div>
                <div class="project__title">
                    <h3>МФК AKHMAT TOWER</h3>
                </div>
                <div class="project__tags">
                    <span>Конструктив</span>
                    <span>Инженерия</span>
                    <span>BIM</span>
                </div>
                <div class="project__info">
                    <div class="project__location">
                        <span>Россия, Москва</span>
                    </div>
                    <div class="project__date">
                        <span>Июль,2023</span>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </div>
                <div class="project__title">
                    <h3>ЖК PRIME PARK</h3>
                </div>
                <div class="project__tags">
                    <span>Конструктив</span>
                    <span>Инженерия</span>
                    <span>BIM</span>
                </div>
                <div class="project__info">
                    <div class="project__location">
                        <span>Россия, Москва</span>
                    </div>
                    <div class="project__date">
                        <span>Июль,2023</span>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </div>
                <div class="project__title">
                    <h3>МФК AKHMAT TOWER</h3>
                </div>
                <div class="project__tags">
                    <span>Конструктив</span>
                    <span>Инженерия</span>
                    <span>BIM</span>
                </div>
                <div class="project__info">
                    <div class="project__location">
                        <span>Россия, Москва</span>
                    </div>
                    <div class="project__date">
                        <span>Июль,2023</span>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </div>
                <div class="project__title">
                    <h3>ЖК PRIME PARK</h3>
                </div>
                <div class="project__tags">
                    <span>Конструктив</span>
                    <span>Инженерия</span>
                    <span>BIM</span>
                </div>
                <div class="project__info">
                    <div class="project__location">
                        <span>Россия, Москва</span>
                    </div>
                    <div class="project__date">
                        <span>Июль,2023</span>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </div>
                <div class="project__title">
                    <h3>МФК AKHMAT TOWER</h3>
                </div>
                <div class="project__tags">
                    <span>Конструктив</span>
                    <span>Инженерия</span>
                    <span>BIM</span>
                </div>
                <div class="project__info">
                    <div class="project__location">
                        <span>Россия, Москва</span>
                    </div>
                    <div class="project__date">
                        <span>Июль,2023</span>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </div>
                <div class="project__title">
                    <h3>ЖК PRIME PARK</h3>
                </div>
                <div class="project__tags">
                    <span>Конструктив</span>
                    <span>Инженерия</span>
                    <span>BIM</span>
                </div>
                <div class="project__info">
                    <div class="project__location">
                        <span>Россия, Москва</span>
                    </div>
                    <div class="project__date">
                        <span>Июль,2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
