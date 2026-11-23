<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $direction }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ __('home.description') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    @vite(["resources/css/vendor/bootstrap.{$direction}.css", 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{ $slot }}
</body>
</html>
