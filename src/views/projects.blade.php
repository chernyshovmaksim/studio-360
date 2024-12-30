@extends('layouts.main')


@section('content')
    <section class="projects-hero">
        <div class="projects-hero__slider" id="projects-slider">
            <div class="projects-hero__item">
                <img src="./theme/media/images/projects/1.png" alt="">
            </div>
            <div class="projects-hero__item">
                <img src="./theme/media/images/projects/2.png" alt="">
            </div>
        </div>
        <div class="projects-hero__info">
            <h3 class="projects-hero__subtitle">Креативные пространства от STUDIO 360</h3>
            <h1 class="projects-hero__title">Проекты</h1>
        </div>
    </section>


    <section class="filters">
        <div class="container">
            <div class="filters__group">
                <button class="filter__btn filter__btn--active">
                    Все
                </button>
                <button class="filter__btn">
                    Архитектура и концепция
                </button>
                <button class="filter__btn">
                    Градостроительство и генплан
                </button>
                <button class="filter__btn">
                    Конструктив
                </button>
                <button class="filter__btn">
                    Инженерия
                </button>
                <button class="filter__btn">
                    Геотехника
                </button>
                <button class="filter__btn">
                    Наука
                </button>
                <button class="filter__btn">
                    Технологии
                </button>
                <button class="filter__btn">
                    Цифровые технологии
                </button>
            </div>
        </div>
    </section>

    <section class="projects-page">
        <div class="container">
            <div class="projects-page__list">
                <div class="projects-page__item">
                    <a href="/product" class="projects-page__item-link">
                        <img src="/theme/media/images/projects/card-1.jpg" alt=""
                            class="projects-page__item-image" />

                        <div class="projects-page__item-info-wrapper">
                            <a href="/" class="projects-page__item-info">
                                <div class="projects-page__item-title">Жилой комплекс «Бадаевский» </div>
                                <div class="projects-page__item-date">Ноябрь 2024</div>
                            </a>
                            <div class="projects-page__item-categories">
                                <a class="projects-page__item-categories-link" href="/">Архитектура</a>
                                <a class="projects-page__item-categories-link" href="/">BIM</a>
                                <a class="projects-page__item-categories-link" href="/">Инженерия</a>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="projects-page__item">
                    <a href="/product" class="projects-page__item-link">
                        <img src="/theme/media/images/projects/card-1.jpg" alt=""
                            class="projects-page__item-image" />

                        <div class="projects-page__item-info-wrapper">
                            <a href="/" class="projects-page__item-info">
                                <div class="projects-page__item-title">Жилой комплекс «Бадаевский» </div>
                                <div class="projects-page__item-date">Ноябрь 2024</div>
                            </a>
                            <div class="projects-page__item-categories">
                                <a class="projects-page__item-categories-link" href="/">Архитектура</a>
                                <a class="projects-page__item-categories-link" href="/">BIM</a>
                                <a class="projects-page__item-categories-link" href="/">Инженерия</a>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="projects-page__item">
                    <a href="/product" class="projects-page__item-link">
                        <img src="/theme/media/images/projects/card-1.jpg" alt=""
                            class="projects-page__item-image" />

                        <div class="projects-page__item-info-wrapper">
                            <a href="/" class="projects-page__item-info">
                                <div class="projects-page__item-title">Жилой комплекс «Бадаевский» </div>
                                <div class="projects-page__item-date">Ноябрь 2024</div>
                            </a>
                            <div class="projects-page__item-categories">
                                <a class="projects-page__item-categories-link" href="/">Архитектура</a>
                                <a class="projects-page__item-categories-link" href="/">BIM</a>
                                <a class="projects-page__item-categories-link" href="/">Инженерия</a>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="projects-page__item">
                    <a href="/product" class="projects-page__item-link">
                        <img src="/theme/media/images/projects/card-1.jpg" alt=""
                            class="projects-page__item-image" />

                        <div class="projects-page__item-info-wrapper">
                            <a href="/" class="projects-page__item-info">
                                <div class="projects-page__item-title">Жилой комплекс «Бадаевский» </div>
                                <div class="projects-page__item-date">Ноябрь 2024</div>
                            </a>
                            <div class="projects-page__item-categories">
                                <a class="projects-page__item-categories-link" href="/">Архитектура</a>
                                <a class="projects-page__item-categories-link" href="/">BIM</a>
                                <a class="projects-page__item-categories-link" href="/">Инженерия</a>
                            </div>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
