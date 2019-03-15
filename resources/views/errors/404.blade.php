@extends('fronts.layouts.app', ['title' => '404'])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_error">
        <div class="about__wrapper">
            <div class="store-error">
                <div class="store-error__img">
                    <img src="img/ellipse.png" alt="">
                </div>
                <div class="store-error__wrapper">
                    <div class="store-error__big-text">404</div>
                    <div class="store-error__text"> Извините, страница, которую ви ищете, не существует.</div>
                    <div class="store-error__button">
                        <a href="/">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('fronts.layouts.inc.footer-inner')
@endsection