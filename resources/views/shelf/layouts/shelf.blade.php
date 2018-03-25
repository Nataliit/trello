<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('top_scripts')
    @stack('top_styles')
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <nav class="row">
                <nav class="navbar-default navbar-static-side" role="navigation">

                </nav>
                <div id="page-wrapper" class="gray-bg dashbard-1">
                    <div id="mainContent" class="container" style="width: 980px;">
                        @yield('content')
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
@stack('bottom_scripts')
@stack('bottom_styles')
</body>
</html>