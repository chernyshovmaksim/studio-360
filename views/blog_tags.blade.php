@extends('layouts.main')


@section('content')

    <section class="title" style="margin-bottom: 2rem;">
        <div class="container">
            <h2>{{ $title }}</h2>
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
