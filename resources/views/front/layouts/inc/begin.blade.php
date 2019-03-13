<!DOCTYPE html>
<html lang="{{ \UrlAliasLocalization::getCurrentLocale() }}" class="{{ \UrlAliasLocalization::getCurrentLocale() == 'ar' ? 'active' : '' }}">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Vendor styles plugins -->
    <!-- build:css css/plugins.css -->
    <link rel="stylesheet" href="/its-client/vendor/reset-css/reset.css">
    <link rel="stylesheet" href="/its-client/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/its-client/vendor/swiper/dist/css/swiper.min.css">
    <!-- endbuild -->
    <!-- Styles application -->
    <link rel="stylesheet" href="/its-client/css/style.css" inline>
    @stack('styles')

    @if(config('visual-editable.available'))
    <!-- Inline CKEditor styles -->
    <link rel="stylesheet" href="/vendor/visual-editable/styles.css">
    <script src="/vendor/visual-editable/jquery-3.3.1.min.js"></script>
    <!-- Inline CKEditor scripts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="/vendor/visual-editable/scripts.js" defer></script>
    @endif
</head>

<body>
<div id="cke-panel" style="display: none">
    <a class="btn-cke btn-cke-success js-editable-blocks-save"
       data-url="{{ route('admin.blocks.visual') }}"
       data-locale="{{ \UrlAliasLocalization::getCurrentLocale() }}"
    >Сохранить</a>
</div>