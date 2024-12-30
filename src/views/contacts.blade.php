@extends('layouts.main')


@section('content')
    <section class="contacts">
        <div class="contacts__wrapper">
            <div class="contacts__maps" id="contacts-maps">
                <div>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A7c6a2e075544c6193650b2fb76715fb7ed67e15544e6ba6569d68befc8b1c117&amp;source=constructor"
                        width="100%" height="400" frameborder="0"></iframe>
                </div>
                <div>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A7c6a2e075544c6193650b2fb76715fb7ed67e15544e6ba6569d68befc8b1c117&amp;source=constructor"
                        width="100%" height="400" frameborder="0"></iframe>
                </div>
            </div>
            <div class="contacts__info">
                <div class="contacts__blur"></div>
                <div class="contacts__text">
                    <div class="contacts__text-title">
                        Стать клиентом или партнёром
                    </div>
                    <a class="contacts__text-email" href="mailto:mail@marksgroup.ru">mail@studio360.ru</a>
                    <a class="contacts__text-phone" href="tel:+79999999999">+7 (999) 999-99-99</a>
                    <div class="contacts__text-address">Москва, 3-я ул. Ямского Поля, д. 20, с. 1, офис 704</div>
                    <div class="contacts__text-working-hours">Режим работы &nbsp;•&nbsp; Пн.&nbsp;— Пт.&nbsp;10.00—19.00
                    </div>
                </div>
                <div class="contacts__offices">
                    <h3 class="contacts__offices-title">Наши офисы</h3>
                    <div class="contacts__offices-carousel" id="contacts-offices">
                        <div class="contacts__offices-carousel-item">Оренбург</div>
                        <div class="contacts__offices-carousel-item">Москва</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
