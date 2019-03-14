@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about">
        <div class="about__wrapper">
            <h1 class="about__name big-name">{{ $node->name }}</h1>
                <div class="about__content">
                    {!! \BlockVisualEditor::render('about', '
                <div class="about__content-head">
                    <div class="my-animate about__content-block fadeInUp" data-duration="2" data-delay="0.6">
                        <div class="about__content-text">Ваша безопасность. <br> Весь лес закупается <br> официально по системе</div>
                        <span class="about__content-info">ЕГАИС</span>
                    </div>
                    <div class="my-animate about__content-block fadeInUp" data-duration="2" data-delay="1">
                        <div class="about__content-text">Среднее время <br> производства фуры</div>
                        <span class="about__content-info">3-4 дня</span>
                    </div>
                    <div class="my-animate about__content-block fadeInUp" data-duration="2" data-delay="1.6">
                        <div class="about__content-text">Работаем с</div>
                        <span class="about__content-info">2012 г</span>
                    </div>
                    <div class="my-animate about__content-block fadeInUp" data-duration="2" data-delay="2.2">
                        <div class="about__content-text">Производственных <br> цехов</div>
                        <span class="about__content-info">4</span>
                    </div>
                </div>
                <div class="about__content-bottom">
                    <div class="my-animate about__content-block fadeInUp" data-duration="2" data-delay="2.8">
                        <div class="about__content-text">Широкая география поставок</div>
                        <span class="about__content-info">Россия, СНГ, ближнее <br> зарубежье</span>
                    </div>
                    <div class="my-animate about__content-block fadeInUp" data-duration="2" data-delay="3.4">
                        <div class="about__content-text">Клиенты возвращаются к нам</div>
                        <span class="about__content-info">100% лояльности</span>
                    </div>
                </div>
                    ') !!}
            </div>
        </div>
    </div>

    @include('fronts.layouts.inc.footer')
@endsection