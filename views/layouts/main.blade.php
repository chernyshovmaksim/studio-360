<!DOCTYPE html>
<html lang="ru">

@include('parts.head')

<body>

    @include('parts.preloader')
    @include('parts.mobile_menu')
    @include('parts.header_without_hero')
    @yield('content')
    @include('parts.footer')

</body>

</html>
