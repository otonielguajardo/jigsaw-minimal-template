<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
        <script defer src="{{ url('assets/js/main.js') }}"></script>
    </head>
    <body>
        @yield('body')
    </body>
</html>
