<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" crossorigin href="{{ asset('/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('/assets/compiled/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/@fortawesome/fontawesome-free/css/all.min.css') }}">
  
    <title>{{ $title ?? config('app.name')}}</title>
</head>

<body>
    <div id="auth">
    {{ $slot }}
    </div>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
</body>

</html>
