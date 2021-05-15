<!DOCTYPE html>
<!--[if IE 10]>    <html class="no-js ie10" lang="en"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel')</title>

    <!-- Meta -->
    <link rel="author" href="{{ asset('humans.txt') }}">

    <meta name="description" content="@yield('description')">
    <meta name="url" content="{{ Request::url() }}">

    <!-- Open Graph -->
    <meta property="fb:app_id" content="{{ env('FB_APP_ID', '') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Laravel')">
    <meta property="og:image" content="@yield('image', '')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="@yield('title')">
    <meta property="og:locale" content="{{ Localization::getCurrentLocaleRegional() }}">
    @foreach(Localization::getSupportedLocales() as $locale)
        <meta property="og:locale:alternate" content="{{$locale->regional()}}" />
    @endforeach

    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:title" content="@yield('title', 'Laravel')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">

    <!-- Android theme color -->
    <meta name="theme-color" content="#E64545">

    <!-- Favicon -->
    <!--
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    -->

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body id="app">

    @yield('navigation')

    @yield('content')

    @yield('footer')

    <!-- Outdated browser -->
    <script src="{{ asset('js/vendor/outdatedbrowser/outdatedbrowser.min.js') }}"></script>
    <script>
        //event listener: DOM ready
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }
        //call plugin function after DOM ready
        addLoadEvent(function(){
            outdatedBrowser({
                bgColor: '#f25648',
                color: '#ffffff',
                lowerThan: 'boxShadow',
                languagePath: '{{ asset('js/vendor/outdatedbrowser/lang/' . App::getLocale() . '.html') }}'
            })
        });
    </script>
    <div id="outdated"></div>
</body>
</html>
