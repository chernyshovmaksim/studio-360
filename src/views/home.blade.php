@extends('layouts.home')

@section('content')
    <div class="title title-achievements">
        <div class="container">
            <h2>Награды и публикации</h2>
            <p>Наша компания участвует в многочисленных выставках, конференциях
                и конкурсах. Предлагаем ознакомиться с некоторыми докладами</p>
        </div>
    </div>

    <section class="achievements">
        <div class="achievements__gradient"></div>
        <div class="container container--full" id="achievements">
            <div class="achievement">
                <picture>
                    <source srcset="/theme/media/images/1.png" type="image/webp">
                    <img src="/theme/media/images/1.png" alt="">
                </picture>

            </div>
            <div class="achievement">
                <picture>
                    <source srcset="/theme/media/images/2.png" type="image/webp">
                    <img src="/theme/media/images/2.png" alt="">
                </picture>

            </div>
            <div class="achievement">
                <picture>
                    <source srcset="/theme/media/images/3.png" type="image/webp">
                    <img src="/theme/media/images/3.png" alt="">
                </picture>

            </div>
            <div class="achievement">
                <picture>
                    <source srcset="/theme/media/images/4.png" type="image/webp">
                    <img src="/theme/media/images/4.png" alt="">
                </picture>
            </div>
        </div>
    </section>


    <section class="blog">
        <div class="container container--full" id="blog">
            <div class="blog__post">
                <a href="/" class="blog__link">
                    <div class="blog__image">
                        <img src="/theme/media/images/blog_1.jpg" alt="">
                    </div>
                </a>
                <a href="/" class="blog__link">
                    <div class="blog__title">100 ЛУЧШИХ ПРОЕКТОВ РОССИИ - WINEPARK</div>
                </a>
                <a href="/" class="blog__link">
                    <div class="blog__category">
                        <span>Telegram-канал, Москва</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4"
                            fill="none">
                            <circle cx="2" cy="2" r="2" fill="#566272"></circle>
                        </svg>
                        <span>30 мая 2023</span>
                    </div>
                </a>
            </div>
            <div class="blog__post blog__post--accent">
                <a href="/" class="blog__link">
                    <div class="blog__image">
                        <img src="/theme/media/images/blog_2.png" alt="">
                    </div>
                </a>
                <a href="/" class="blog__link">
                    <div class="blog__title">Апартаменты премиум-класса SLAVA</div>
                </a>
                <a href="/" class="blog__link">
                    <div class="blog__category">
                        <span>MARKSGROUP, Москва</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4"
                            fill="none">
                            <circle cx="2" cy="2" r="2" fill="#566272"></circle>
                        </svg>
                        <span>Сентябрь 2023</span>
                    </div>
                </a>
            </div>
            <div class="blog__post">
                <a href="/" class="blog__link">
                    <div class="blog__image">
                        <img src="/theme/media/images/blog_1.jpg" alt="">
                    </div>
                </a>
                <a href="/" class="blog__link">
                    <div class="blog__title">100 ЛУЧШИХ ПРОЕКТОВ РОССИИ - WINEPARK</div>
                </a>
                <a href="/" class="blog__link">
                    <div class="blog__category">
                        <span>Telegram-канал, Москва</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4"
                            fill="none">
                            <circle cx="2" cy="2" r="2" fill="#566272"></circle>
                        </svg>
                        <span>30 мая 2023</span>
                    </div>
                </a>
            </div>
        </div>
    </section>



    <section class="title">
        <div class="container">
            <h2>Компетенции</h2>
        </div>
    </section>

    <section class="competencies">
        <div class="container" id="competencies">
            <div class="accordion competency">
                <div class="accordion__count">
                    <span>01</span>
                </div>
                <div class="accordion__wrapper">
                    <div class="accordion__title">
                        <h3>Архитектура и концепт</h3>
                        <div class="accordion__arrow">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10L12.5 15L17 10" stroke="#566272"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion__description">
                        <p>Создание и адаптация архитектурных концепций, разработка документации</p>
                    </div>
                </div>
                <div class="accordion__content">
                    <ul class="accordion__list">
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Архитектура</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Разработка концепции, архитектурное проектирование - от идеи до ввода объекта в
                                    эксплуатацию
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Адаптация зарубежных концепций</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Подготовка проектной и рабочей документации на базе архитектурного/инженерного
                                    решения
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Дизайн-проекты</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Для жилых и общественных помещений. Авторский надзор, ЗD - моделирование, VR -
                                    визуализация
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Проектная и рабочая документация</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Прохождение экспертизы, авторский надзор, сопровождение строительства
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="accordion competency">
                <div class="accordion__count">
                    <span>02</span>
                </div>
                <div class="accordion__wrapper">
                    <div class="accordion__title">
                        <h3>Градостроительство и генплан</h3>
                        <div class="accordion__arrow">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10L12.5 15L17 10" stroke="#566272"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion__description">
                        <p>Разработка планов территорий, учитывающих транспортную инфраструктуру, зонирование и
                            устойчивое развитие</p>
                    </div>
                </div>
                <div class="accordion__content">
                    <ul class="accordion__list">
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Разработка документации</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Определение общей стратегии развития территории, формирование облика, определение
                                    функциональных зон, транспортная инфраструктура и другие аспекты градостроительства.
                                    Подготовка комплекса документов для экспертизы
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Градостроительный анализ</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Анализ потенциала территории: исследование градостроительных, зональных и
                                    территориальных ограничений. Архитектурно-функциональные концепции населённого
                                    пункта, района, социально-бытовая инфраструктура и т.д.
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Проектирование</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Разработка решений по проектируемому рельефу в Civil 3D, расчёты объёма земляных
                                    работ, подбор покрытий, материалов
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Ландшафтный дизайн</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Подбор МАФ, расчёт озеленения, дендропроектирование
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Благоустройство</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Разработка комфортной городской среды, включая площади, парки, скверы, а также
                                    системы освещения, водоснабжения и водоотведения
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="accordion competency">
                <div class="accordion__count">
                    <span>03</span>
                </div>
                <div class="accordion__wrapper">
                    <div class="accordion__title">
                        <h3>Конструктив</h3>
                        <div class="accordion__arrow">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10L12.5 15L17 10" stroke="#566272"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion__description">
                        <p>Разработка строительных конструкций и технических решений</p>
                    </div>
                </div>
                <div class="accordion__content">
                    <ul class="accordion__list">
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Конструктивные решения</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Выполнение необходимых расчетов для обоснования принятых решений
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Проверочные расчеты</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Аудит проектных решений выполненных другими проектными компаниями, разработка
                                    рекомендаций
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Выполнение математического моделирования</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Анализ ветровых воздействий с учетом окружающей застройки и оценка пешеходной
                                    комфортности
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Концептуальный анализ</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Анализ конструктивных схем и вариантов с учётом поиска архитектурной формы на
                                    начальной стадии развития проекта, включая оценку геометрии центрального ядра
                                    жёсткости
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="accordion competency">
                <div class="accordion__count">
                    <span>04</span>
                </div>
                <div class="accordion__wrapper">
                    <div class="accordion__title">
                        <h3>Инженерия</h3>
                        <div class="accordion__arrow">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 10L12.5 15L17 10" stroke="#566272"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion__description">
                        <p>Разработка внутренних и наружных инженерных систем для зданий и сооружений</p>
                    </div>
                </div>
                <div class="accordion__content">
                    <ul class="accordion__list">
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Разработка внутренних сетей</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Водоснабжение, водоотведение, электроснабжение, электроосвещение, отопление,
                                    вентиляция, кондиционирование, сети связи и автоматизация
                                </p>
                            </div>
                        </li>
                        <li class="accordion__item">
                            <div class="accordion__item-title">
                                <h4>Инженерное проектирование</h4>
                            </div>
                            <div class="accordion__item-content">
                                <p>
                                    Теплоснабжение, газоснабжение, бытовое водоотведение, комплексная схема инженерного
                                    обеспечения
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="clients">
        <div class="container container--full" id="clients">
            <div class="client">
                <picture>
                    <source srcset="/theme/media/images/client_1.png" type="image/webp">
                    <img src="/theme/media/images/client_1.png" alt="">
                </picture>
            </div>
            <div class="client">
                <picture>
                    <source srcset="/theme/media/images/client_2.png" type="image/webp">
                    <img src="/theme/media/images/client_2.png" alt="">
                </picture>
            </div>
            <div class="client">
                <picture>
                    <source srcset="/theme/media/images/client_3.png" type="image/webp">
                    <img src="/theme/media/images/client_3.png" alt="">
                </picture>
            </div>
            <div class="client">
                <picture>
                    <source srcset="/theme/media/images/client_4.png" type="image/webp">
                    <img src="/theme/media/images/client_4.png" alt="">
                </picture>
            </div>
            <div class="client">
                <picture>
                    <source srcset="/theme/media/images/client_5.png" type="image/webp">
                    <img src="/theme/media/images/client_5.png" alt="">
                </picture>
            </div>
        </div>
    </section>


    <section class="title">
        <div class="container">
            <h2>Проекты</h2>
        </div>
    </section>

    <section class="projects">
        <div class="container container--full" id="projects">
            <div class="project">
                <a href="/product" class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </a>
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
                <a href="/product" class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </a>
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
                <a href="/product" class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </a>
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
                <a href="/product" class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </a>
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
                <a href="/product" class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </a>
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
                <a href="/product" class="project__image">
                    <img src="/theme/media/images/blog_1.jpg" alt="">
                </a>
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
