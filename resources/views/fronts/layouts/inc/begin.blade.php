<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="keywords" content="keyword1, keyword2, mykolaVoitovych" />
    <meta name="description" content="this is description mykolaVoitovych" />
    <title>{{ $title }}</title>
    <!-- Vendor styles plugins -->
    <!-- build:css css/plugins.css -->
    <link rel="stylesheet" href="/its-client/vendor/reset-css/reset.css">
    <link rel="stylesheet" href="/its-client/vendor/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="/its-client/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/its-client/vendor/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/its-client/vendor/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="/its-client/vendor/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="/its-client/css/style.css" inline>
    <link rel="stylesheet" href="/css/common.css" inline>
    <script src="https://use.fontawesome.com/5ad77bb345.js"></script>
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
            <style>
                .my-animate {
                     visibility: visible;
                }
                .norms__tablet-button {
                    display: flex;
                }
                .icon-svg-download {
                    display: block;
                }

                .typography a{
                    display: block;
                }
            </style>
    @endif
    <!-- endbuild -->
    <!-- Styles application -->

</head>
<body>
<div id="cke-panel" style="display: none">
    <a class="btn-cke btn-cke-success js-editable-blocks-save"
       data-url="{{ route('admin.blocks.visual') }}"
       data-locale="{{ \UrlAliasLocalization::getCurrentLocale() }}"
    >Сохранить</a>
</div>
