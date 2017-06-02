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

    <!-- Android theme color -->
    <meta name="theme-color" content="#E64545">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
        window.Locale = '{{ App::getLocale() }}';
        window.Currency = '{{ trans('general.currency') }}';
        window.csrfToken = '{{ csrf_token() }}';
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="admin">

    @yield('content')

    <!-- Scripts -->

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

    @if(App::environment('production'))
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-########-#', 'auto');
            ga('send', 'pageview');
        </script>
    @endif

</body>
</html>
