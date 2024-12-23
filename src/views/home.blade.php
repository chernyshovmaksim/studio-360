<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заголовок</title>
    <script src="/theme/js/preloader.js"></script>


    <link rel="stylesheet" href="/theme/libs/slick/slick.css">
    <link rel="stylesheet" href="/theme/libs/slick/slick-theme.css">


    <link rel="stylesheet" href="/theme/dist/css/main.css">


    <script defer src="/theme/libs/jquery/jquery.min.js"></script>
    <script defer src="/theme/libs/slick/slick.min.js"></script>



    <script defer src="/theme/dist/js/sliders.js"></script>
    <script defer src="/theme/dist/js/accordions.js"></script>
    <script defer src="/theme/dist/js/mobile-menu.js"></script>
    <script defer src="/theme/dist/js/map.js"></script>
    <script defer src="/theme/dist/js/app.js"></script>
</head>

<body>

    <div class="preloader">
        <div class="preloader__wave"></div>
        <div class="preloader__container">
            <div class="preloader__percent">
                <span>0%</span>
            </div>
            <div class="preloader__title">
                <h4>STUDIO 360</h4>
            </div>
            <div class="preloader__subtitle">
                <h5>Генеральное проектирование</h5>
            </div>
        </div>
    </div>


    <div class="mobile-menu mobile-menu--closed">
        <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
                <a href="/" class="mobile-menu__link">Главная</a>
            </li>
            <li class="mobile-menu__item">
                <a href="/" class="mobile-menu__link">Проекты</a>
            </li>
            <li class="mobile-menu__item">
                <a href="/" class="mobile-menu__link">Публикации</a>
            </li>
            <li class="mobile-menu__item">
                <a href="/" class="mobile-menu__link">О компании</a>
            </li>
            <li class="mobile-menu__item">
                <a href="/" class="mobile-menu__link">Контакты</a>
            </li>
        </ul>
        <div class="mobile-menu__contacts">
            <a href="tel:+79999999999" class="mobile-menu__phone">+7 999 999 99 99</a>
            <a href="mailto:info@studio360.ru" class="mobile-menu__email">info@studio360.ru</a>
        </div>
    </div>


    <header>
        <video autoplay muted loop playsinline preload="auto">
            <source media="(min-width: 501px)" src="/theme/media/video_full.mp4" type="video/mp4">
            <source media="(max-width: 500px)" src="/theme/media/video.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <nav>
            <div class="container container--full">
                <a href="/">
                    <div class="logo">STUDIO 360</div>
                </a>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header__links">
                    <a href="/" class="header__link">Главная</a>
                    <a href="/" class="header__link">Проекты</a>
                    <a href="/" class="header__link">Публикации</a>
                    <a href="/" class="header__link">О компании</a>
                    <a href="/" class="header__link">Контакты</a>
                </div>
            </div>
        </nav>
        <div class="hero">
            <h1>Студия 360</h1>
            <h2>Генеральное проектирование</h2>
            <h2>Реализация всех типов объектов «под ключ»</h2>
        </div>
    </header>

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
                    <p>
                        Разработка планов территорий, учитывающих транспортную инфраструктуру, зонирование и устойчивое
                        развитие
                    </p>
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


    <footer class="footer">
        <div class="container" id="footer">
            <div class="footer__callback">
                <h3>
                    Обсудим ваш
                </h3>
                <a href="/">проект</a>
            </div>
            <div class="footer__address">
                <h4 class="footer__address-title">
                    Офис Москва
                </h4>
                <a href="tel:+79999999999" class="footer__address-phone">+7 999 999 99 99</a>
                <a href="mailto:info@studio360.ru" class="footer__address-email">info@studio360.ru</a>
                <span class="footer__address-address">
                    Москва, ул. Ленина, 123
                </span>
            </div>
            <div class="footer__links">
                <ul class="footer__links-list">
                    <li class="footer__links-item">
                        <a href="/" class="footer__links-link">VK</a>
                    </li>
                    <li class="footer__links-item">
                        <a href="/" class="footer__links-link">TG</a>
                    </li>
                    <li class="footer__links-item">
                        <a href="/" class="footer__links-link">YT</a>
                    </li>
                </ul>
            </div>
            <div class="footer__copyright">
                <span>© 2024 STUDIO 360</span>
            </div>
        </div>
    </footer>

</body>

</html>
