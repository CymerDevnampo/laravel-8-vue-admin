<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->

    <link rel="icon" href="{{ asset('/admin/assets/images/favicon.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        id="main-font-link" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/fonts/phosphor/duotone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/fonts/tabler-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/fonts/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/fonts/material.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/style-preset.css') }}" />

    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    @env('local')
    {{-- <script src="http://localhost:8080/js/bundle.js"></script> --}}
    {{-- <script src="http://127.0.0.1:8000/js/bundle.js"></script> --}}
    @endenv

    <!-- Add your scripts at the end of the body -->
    <script src="/admin/assets/js/plugins/popper.min.js"></script>
    <script src="/admin/assets/js/plugins/simplebar.min.js"></script>
    <script src="/admin/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/admin/assets/js/icon/custom-font.js"></script>
    <script src="/admin/assets/js/script.js"></script>
    <script src="/admin/assets/js/theme.js"></script>
    <script src="/admin/assets/js/plugins/feather.min.js"></script>
    <script src="/admin/assets/js/plugins/apexcharts.min.js"></script>
    <script src="/admin/assets/js/pages/dashboard-default.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Run these after page load
            if (typeof layout_change === 'function') layout_change('light');
            if (typeof font_change === 'function') font_change('Roboto');
            if (typeof change_box_container === 'function') change_box_container('false');
            if (typeof layout_caption_change === 'function') layout_caption_change('true');
            if (typeof layout_rtl_change === 'function') layout_rtl_change('false');
            if (typeof preset_change === 'function') preset_change('preset-1');
        });
    </script>
</body>

</html>
