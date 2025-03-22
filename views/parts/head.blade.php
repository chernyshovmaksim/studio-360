<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ $modx->getConfig('site_url') }}" />
    <title>{{ evo()->getConfig('site_name') }}
        @if ($documentObject['pagetitle'])
            | {{ $documentObject['pagetitle'] }}
        @endif
    </title>
    <script src="/theme/js/preloader.js"></script>


    <link rel="stylesheet" href="/theme/libs/slick/slick.css">
    <link rel="stylesheet" href="/theme/libs/slick/slick-theme.css">


    <link rel="stylesheet" href="/theme/dist/css/main.css">


    <script defer src="/theme/libs/jquery/jquery.min.js"></script>
    <script defer src="/theme/libs/slick/slick.min.js"></script>

    <script defer src="/theme/dist/js/sliders.js"></script>
    <script defer src="/theme/dist/js/accordions.js"></script>
    <script defer src="/theme/dist/js/mobile-menu.js"></script>
    <script defer src="/theme/dist/js/cursor.js"></script>
    <script defer src="/theme/dist/js/map.js"></script>
    <script defer src="/theme/dist/js/video_fix.js"></script>
    <script defer src="/theme/dist/js/app.js"></script>
</head>
