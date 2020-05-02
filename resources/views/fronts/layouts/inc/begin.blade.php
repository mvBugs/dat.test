<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, viewport-fit=cover"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta http-equiv="cleartype" content="on"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>

    <title>
        {{ variable('app_name') }}
    </title>
    <meta name="keywords" content="{{ variable('keywords') }}"/>
    <meta name="description" content="{{ variable('description') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content=""/>
    <meta name="copyright" content="(c)">
    <meta http-equiv="Reply-to" content="noreply@datsuk-truns.com">

    <meta name="theme-color" content="#000000">


    <!-- Twitter card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@twitter" />
    <meta name="twitter:creator" content="@twitter" />
    <meta name="twitter:image" content="https://example.com/example.png" />
    <meta name="twitter:description" content="{{ variable('description') }}" />
    <meta name="twitter:title" content="{{ variable('title') }}" />


    <!-- Open Graph -->
    <meta property="og:title" content="{{ variable('title') }}" />
    <meta property="og:description" content="{{ variable('description') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="https://example.com/example1200x630.png" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="{{ variable('title') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
