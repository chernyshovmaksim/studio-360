<!DOCTYPE html>
<html lang="ru">

@include('parts.head')

<body>

    @include('parts.preloader')


    @include('parts.mobile_menu')


    @include('parts.header')

    @yield('content')

    @include('parts.footer')

</body>

</html>
