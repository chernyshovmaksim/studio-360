<div class="mobile-menu mobile-menu--closed">
    <ul class="mobile-menu__list">
        <li class="mobile-menu__item">
            <a href="/" class="mobile-menu__link">Главная</a>
        </li>
        <li class="mobile-menu__item">
            <a href="/projects" class="mobile-menu__link">Проекты</a>
        </li>
        <li class="mobile-menu__item">
            <a href="/blog" class="mobile-menu__link">Публикации</a>
        </li>
        {{-- <li class="mobile-menu__item">
            <a href="/" class="mobile-menu__link">О компании</a>
        </li> --}}
        <li class="mobile-menu__item">
            <a href="/contacts" class="mobile-menu__link">Контакты</a>
        </li>
    </ul>
    <div class="mobile-menu__contacts">
        <a href="tel:{{ evo()->getConfig('client_phone') }}"
            class="mobile-menu__phone">{{ evo()->getConfig('client_phone') }}</a>
        <a href="mailto:{{ evo()->getConfig('client_email') }}"
            class="mobile-menu__email">{{ evo()->getConfig('client_email') }}</a>
    </div>
</div>
