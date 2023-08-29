<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel Technical Assessment</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="antialiased">
    @yield('content')
    @livewireScripts
<body>
</html>
