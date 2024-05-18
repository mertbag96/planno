<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icons/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')
</head>

<body class="container-fluid">

@include('layout.header')

@yield('content')

@include('layout.newsletter')

@include('layout.footer')

</body>

<script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('scripts')

</html>

