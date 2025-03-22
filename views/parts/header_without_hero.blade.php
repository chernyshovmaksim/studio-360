<header class="without-hero">
    <nav>
        <div class="container container--full">
            <a href="/">
                <div class="logo">{{ evo()->getConfig('site_name') }}</div>
                {{-- <img class="logo" src="/{{ evo()->getConfig('client_logo') }}" alt=""> --}}
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
</header>
