@extends('layouts.main')

@section('content')
    <section class="product-hero">
        <img class="product-hero__image" srcset="/theme/media/images/projects/card-1.jpg" src="" sizes="" />
        <div class="product-hero__overview"></div>
        <div class="container">
            <a href="/" class="product-hero__link-callback">
                Все проекты
            </a>

            <div class="product-hero__categories">
                <a href="/" class="product-hero__categories-item">
                    Архитектура
                </a>
                <a href="/" class="product-hero__categories-item">
                    BIM
                </a>
                <a href="/" class="product-hero__categories-item">
                    Инженерия
                </a>
            </div>

            <h1 class="product-hero__title">
                Жилой комплекс «Бадаевский»
            </h1>

            <div class="product-hero__date">
                Ноябрь 2024
            </div>
        </div>
    </section>

    <section class="product-info">
        <div class="container">
            <div class="product-info__row">
                <div class="product-info__col">
                    <div class="product-info__title">
                        <h1>Многофункциональный жилой комплекс</h1>
                    </div>
                    <div class="product-info__categories">
                        <a href="/">Генеральное проектирование</a>
                    </div>
                    <div class="product-info__description">
                        <p>
                            Жилой комплекс с подземной автостоянкой LEVEL – проект из 4 корпусов, расположенный на первой
                            береговой
                            линии реки Москвы
                        </p>
                    </div>
                    <div class="product-info__small-params">
                        <div class="product-info__small-param">
                            <div class="product-info__small-param-value">57 950 м²</div>
                            <span class="product-info__small-param-title">Общая площадь</span>
                        </div>
                        <div class="product-info__small-param">
                            <div class="product-info__small-param-value">90 м</div>
                            <span class="product-info__small-param-title">Высотность</span>
                        </div>
                    </div>
                </div>
                <div class="product-info__col">
                    <div class="product-info__params">
                        <div class="product-info__param">
                            <span class="product-info__param-title">Расположение</span>
                            <div class="product-info__param-value">
                                г. Москва, муниципальный округ Нагатино-Садовники,
                                Нагатинская наб., земельный участок 10А
                            </div>
                        </div>
                        <div class="product-info__param">
                            <span class="product-info__param-title">Статус</span>
                            <div class="product-info__param-value">
                                Завершен
                            </div>
                        </div>
                        <div class="product-info__param">
                            <span class="product-info__param-title">Публикация</span>
                            <div class="product-info__param-value">
                                -
                            </div>
                        </div>
                        <div class="product-info__param">
                            <span class="product-info__param-title">Степень участия</span>
                            <div class="product-info__param-value">
                                Генеральное проектирование
                            </div>
                        </div>
                        <div class="product-info__param">
                            <span class="product-info__param-title">Заказчик</span>
                            <div class="product-info__param-value">
                                -
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="product-slider">
        <div class="container" id="product-slider">
            <img class="product-slider__item" srcset="/theme/media/images/projects/1.png" alt="">
            <img class="product-slider__item" srcset="/theme/media/images/projects/2.png" alt="">
        </div>
    </section>

    <section class="blog-page">
        <div class="container container--small">
            <h3 class="blog-page__title">Архитектурно-планировочные решения</h3>
            <div class="blog-page__text">
                <p>
                    4 корпуса проекта имеют разную этажность - от 26 до 27 этажей. Стилобат имеет два этажа.
                    Кровля стилобата является благоустроенным внутренним двором.
                </p>
                <p>
                    Надземная часть стилобата и первые этажи жилых корпусов заняты входными группами и коммерческими
                    помещениями. Остальные надземные площади занимают жилые квартиры. В жилом комплексе представлено более
                    40
                    вариантов планировок, из них два - редкого формата.

                </p>
                <p>
                    В подземной части стилобата расположена подземная автостоянка с техническими и служебными помещениями и
                    кладовыми жильцов.
                </p>
            </div>
        </div>
    </section>


    <div class="product-footer">
        <div class="container container-full">
            <div class="product-footer__image">
                <img srcset="/theme/media/images/projects/footer.png" alt="">
            </div>
            <div class="product-footer__links">
                <a href="/" class="product-footer__link product-footer__link--prev">
                    <div>
                        <span><img srcset="/theme/images/icons/prev.svg" alt=""></span>
                        <span>Жилой комплекс «Бадаевский»</span>
                    </div>
                </a>
                <a href="/" class="product-footer__link product-footer__link--next">
                    <div>
                        <span>СберСити в Рублево-Архангельском</span>
                        <span><img srcset="/theme/images/icons/next.svg" alt=""></span>

                    </div>
                </a>
            </div>
        </div>
    </div>


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
    </section>
@endsection
