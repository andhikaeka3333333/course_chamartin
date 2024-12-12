<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Chamartin</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/dayjs@1.11.7/dayjs.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dayjs@1.11.7/plugin/advancedFormat.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dayjs@1.11.7/plugin/localeData.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dayjs@1.11.7/plugin/weekOfYear.js"></script>
        <script>
            dayjs.extend(dayjs_plugin_advancedFormat);
            dayjs.extend(dayjs_plugin_localeData);
            dayjs.extend(dayjs_plugin_weekOfYear);
        </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <div>
            @include('layouts.navigation')
            <main>{{ $slot }}</main>
        </div>
    </body>
    <x-footer-welcome></x-footer-welcome>
</html>
