<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{config('app.name')}} - @yield('title')</title>
</head>
<body class="@yield('body_class')">

<x-layout.components.shared.error-banner :errors="$errors" />

@yield('content')
@vite('resources/js/app.js')

@stack('scripts')
</body>
</html>
