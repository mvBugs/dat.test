@extends('fronts.layouts.app', ['title' => 'Отправлено'])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_write">
        <div class="about__wrapper">
            <h1 class="about__name big-name">Напишите нам</h1>
            <div class="write">
                <div class="write__wrapper my-animate fadeInUp" data-duration="2" data-delay="0.5">
                    <div class="write__form">
                        <div class="write-end">
                            <div class="write-end__text">
                                <svg class="icon-svg icon-svg-ok "><use xlink:href="/its-client/img/sprite.svg#ok"></use></svg>
                                <span>Ваше сообщение отправлено</span>
                            </div>
                            <div class="write-end__button">
                                <a href="{{ url('write') }}">Отправить ещё</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('fronts.layouts.inc.header')
@endsection