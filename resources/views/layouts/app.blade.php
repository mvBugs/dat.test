<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/vendor/admin-lte/img/favicon.png"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Панель керування - {{ config('app.name', 'Site') }}</title>

    <link rel="stylesheet" href='/assets/admin/css/libs.css'>
    <link rel="stylesheet" href='/assets/admin/css/app.css'>
    {{--<link rel="stylesheet" href="{{ asset('vendor/admin-lte/css/common.css') }}">--}}

</head>

    @yield('content')

<script src='/assets/admin/js/libs.js'></script>
<script src='/assets/admin/js/app.js'></script>

</html>
