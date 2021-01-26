<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.title', 'robvankeilegom.be') }}</title>

    <!-- Meta -->
    <link rel="author" href="{{ asset('humans.txt') }}">

    <meta name="description" content="My name is Rob. I'm a 25 year old developer graduated in June 2017. I currently work as a Progress developer over at Organi (Wilrijk, Belgium). In my free time I work on personal or open source projects. When I'm not programming I'm probably busy volunteering at Frag-o-Matic, playing video- and boardgames or out snowboarding.">
    <meta name="url" content="{{ Request::url() }}">

    <!-- Open Graph -->
    <meta property="fb:app_id" content="{{ env('FB_APP_ID', '') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'robvankeilegom.be')">
    <meta property="og:image" content="@yield('image', asset('images/profile_picture.jpg'))">
    <meta property="og:description" content="My name is Rob. I'm a 24 year old developer graduated in June 2017. I currently work as a Progress developer over at Organi (Wilrijk, Belgium). In my free time I work on personal or open source projects. When I'm not programming I'm probably busy volunteering at Frag-o-Matic, playing video- and boardgames or out snowboarding.">
    <meta property="og:site_name" content="@yield('title', 'robvankeilegom.be')">
    <meta property="og:locale" content="en">


    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:title" content="@yield('title', 'Laravel')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image', asset('images/profile_picture.jpg'))">

    <!-- Android theme color -->
    <meta name="theme-color" content="#E64545">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png') }}">

    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
        </script>
    </head>
    <body id="page-top">

            @yield('navigation')

            @yield('header')

            @yield('content')

            @yield('footer')

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-to-top d-lg-none position-fixed ">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                <i class="far fa-chevron-up"></i>
            </a>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

        <script async defer data-website-id="2bdbb4cb-687f-4806-b584-eef56c4366e7" src="https://analytics.robvankeilegom.be/umami.js"></script>
    </body>
</html>
