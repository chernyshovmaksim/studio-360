@extends('layouts.main')

@section('content')
    <section class="hero-blog">
        <video autoplay muted loop playsinline preload="auto">
            <source media="(min-width: 501px)" src="/theme/media/blog_full.mp4" type="video/mp4">
            <source media="(max-width: 500px)" src="/theme/media/blog.mp4" type="video/mp4">
        </video>
        <div class="container">
            <h3 class="hero-blog__subtitle">
                Научные достижения, интервью и статьи ведущих профессиональных и публицистических изданий
            </h3>
            <h1 class="hero-blog__title">Публикации</h1>
        </div>
    </section>

    <section class="filters">
        <div class="container">
            <div class="filters__group">
                <a href="/blog" class="filter__btn filter__btn--active">
                    Все
                </a>

                @if (!empty($filters))
                    @foreach ($filters as $item)
                        <a href="/blog/tags/{{ $item['id'] }}" class="filter__btn">
                            {{ $item['pagetitle'] }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="blog-page">
        <div class="container">
            <div class="blog-page__list">
                @if (!empty($posts))
                    @foreach ($posts as $item)
                        <div class="blog-page__item">
                            <a href="{{ $item['url'] }}" class="blog-page__item-link">
                                <img src="/{{ $item['poster'] }}" alt="{{ $item['pagetitle'] }}"
                                    class="blog-page__item-image" />

                                <div class="blog-page__item-info-wrapper">
                                    <a href="{{ $item['url'] }}" class="blog-page__item-info">
                                        <div class="blog-page__item-title">
                                            {{ $item['pagetitle'] }}
                                        </div>
                                        <div class="blog-page__item-date">{{ $item['date_pub'] }}</div>
                                    </a>
                                </div>

                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
