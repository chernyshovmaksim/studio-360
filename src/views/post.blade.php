@extends('layouts.main')


@section('content')
    <section class="product-hero">
        <img class="product-hero__image" srcset="/{{ $main_image['fhd'] }} 2x, /{{ $main_image['hd'] }} 1x"
            src="{{ $main_image['hd'] }}" />
        <div class="product-hero__overview"></div>
        <div class="container">
            <a href="/projects" class="product-hero__link-callback">
                Все публикации
            </a>

            @if (!empty($tags))
                <div class="product-hero__categories">
                    @foreach ($tags as $item)
                        {{-- @dd($item) --}}
                        <a href="/blog/tags/{{ $item['id'] }}" class="product-hero__categories-item">
                            {{ $item['pagetitle'] }}
                        </a>
                    @endforeach
                </div>
            @endif

            <h1 class="product-hero__title">
                {{ $documentObject['pagetitle'] }}
            </h1>

            <div class="product-hero__date">
                Январь 2024
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



    {{-- <section class="title">
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
        </div>
    </section> --}}


    @if (!empty($prevnextlinks))
        <div class="product-footer__links">
            @if (!empty($prevnextlinks['prev']))
                <a href="{{ $prevnextlinks['prev']['url'] }}" class="product-footer__link product-footer__link--prev">
                    <div>
                        <span><img srcset="/theme/images/icons/prev.svg" alt=""></span>
                        <span>{{ $prevnextlinks['prev']['pagetitle'] }}</span>
                    </div>
                </a>
            @endif

            @if (!empty($prevnextlinks['next']))
                <a href="{{ $prevnextlinks['next']['url'] }}" class="product-footer__link product-footer__link--next">
                    <div>
                        <span>{{ $prevnextlinks['next']['pagetitle'] }}</span>
                        <span><img srcset="/theme/images/icons/next.svg" alt=""></span>

                    </div>
                </a>
            @endif
        </div>
    @endif
@endsection
