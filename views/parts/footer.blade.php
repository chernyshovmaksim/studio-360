<footer class="footer">
    <div class="container" id="footer">
        <div class="footer__callback">
            <h3>
                Обсудим ваш
            </h3>
            <a href="/callback">проект</a>
        </div>
        <div class="footer__wrapper">
            <div class="footer__address">
                <h4 class="footer__address-title">
                    Офис Оренбург
                </h4>
                <div class="footer__address-wrapper">
                    <a href="tel:{{ evo()->getConfig('client_phone') }}"
                        class="footer__address-phone">{{ evo()->getConfig('client_phone') }}</a>
                    <a href="mailto:{{ evo()->getConfig('client_email') }}"
                        class="footer__address-email">{{ evo()->getConfig('client_email') }}</a>
                    <span class="footer__address-address">
                        {{ evo()->getConfig('client_adr') }}
                    </span>
                </div>
            </div>
            <div class="footer__links">
                <ul class="footer__links-list">
                    <li class="footer__links-item">
                        <a href="{{ evo()->getConfig('client_vk') }}" target="_blank" class="footer__links-link">VK</a>
                    </li>
                    <li class="footer__links-item">
                        <a href="{{ evo()->getConfig('client_tg') }}" target="_blank" class="footer__links-link">TG</a>
                    </li>
                </ul>
            </div>
            <div class="footer__copyright">
                <span>© {{ date('Y') }} {{ evo()->getConfig('site_name') }}</span>
            </div>
        </div>
    </div>
</footer>
