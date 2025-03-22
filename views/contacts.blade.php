@extends('layouts.main')


@section('content')
    <section class="contacts">
        <div class="container">
            <div class="contacts__text-title">
                Стать клиентом или партнёром
            </div>
            <a class="contacts__text-email"
                href="mailto:{{ evo()->getConfig('client_email') }}">{{ evo()->getConfig('client_email') }}</a>
            <a class="contacts__text-phone"
                href="tel:{{ evo()->getConfig('client_phone') }}">{{ evo()->getConfig('client_phone') }}</a>
            <div class="contacts__text-address">{{ evo()->getConfig('client_adr') }}</div>
            <div class="contacts__text-working-hours">Режим работы &nbsp;•&nbsp; Пн.&nbsp;— Пт.&nbsp;10.00—19.00
            </div>
        </div>
        <div class="container container--full">
            <div class="contacts__map">
                <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7c6a2e075544c6193650b2fb76715fb7ed67e15544e6ba6569d68befc8b1c117&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true">
                </script>
            </div>
        </div>
    </section>
@endsection
