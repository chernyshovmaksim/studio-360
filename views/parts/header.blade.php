<header>
    <video autoplay muted loop playsinline preload="auto" id="hero-video">
        <source media="(min-width: 501px)" src="/theme/media/video_full.mp4" type="video/mp4">
        <source media="(max-width: 500px)" src="/theme/media/video.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <nav>
        <div class="container container--full">
            <a href="/">
                <div class="logo">{{ evo()->getConfig('site_name') }}</div>
            </a>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__links">
                <a href="/" class="header__link">Главная</a>
                <a href="/projects" class="header__link">Проекты</a>
                <a href="/blog" class="header__link">Публикации</a>
                {{-- <a href="/" class="header__link">О компании</a> --}}
                <a href="/contacts" class="header__link">Контакты</a>
            </div>
        </div>
    </nav>
    <div class="hero">
        <h1>Студия 360</h1>
        <h2>Генеральное проектирование</h2>
        <h2>Реализация всех типов объектов «под ключ»</h2>
    </div>
</header>
