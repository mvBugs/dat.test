@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_delivery">
        <div class="about__wrapper">
            <h1 class="about__name big-name">{{ $node->name }}</h1>
            <div class="delivery">
                    {!! \BlockVisualEditor::render('delivery', '
                    <div class="delivery__wrapper">
                        <div class="my-animate delivery__left fadeInLeft"  data-duration="2" data-delay="1">
                            <img src="/its-client/img/delivery.png" alt="">
                            <div class="delivery__left-text">
                                Как показывает время и практика самым оптимальным вариантом доставки кабельных барабанов является грузоперевозка фурами.
                            </div>
                        </div>
                        <span class="line my-animate fadeInUp"  data-duration="2" data-delay="1"></span>
                        <div class="my-animate delivery__right fadeInRight"  data-duration="2" data-delay="1.2">
                            <p>Нормы загрузки в отличие от <br> вагонных, отличаются но не на много. </p>
                            <p>Фуру легче найти, если это международная поставка - <br> легче оформить , гтд оформляется в течении 40 мин.</p>
                            <p>Благодаря наработанным каналам логистики, мы <br> предоставляем стоимость грузоперевозок ниже рыночных!</p>
                            <p>Звоните! Мы всегда рады <br> сотрудничеству!</p>
                        </div>
                    </div>
                    ') !!}
                </div>
            </div>
        </div>
    @include('fronts.layouts.inc.footer-inner')
    @endsection