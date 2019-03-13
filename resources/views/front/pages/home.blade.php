@extends('front.layouts.app')

@section('content')
    <main>
        <div class="home">
            @include('front.layouts.inc.header')

            <div class="home__wrapper">
                <div class="home-head">
                    <div class="home-head__wrapper">
                        <div class="home-head__block">
                            {!! \BlockVisualEditor::render('top_casino_reviews', '
                            <div class="home-head__block-wrapper">
                                <h1 class="home-head__name">Top Casino Reviews</h1>
                                <p>from bearded Joker</p>
                                <span>Get individual bonuses of Bearded Joker up to $ 1000 on your first deposit now!</span>
                                <div class="home-head__button">
                                    <a href="#">Get your bonus</a>
                                </div>
                            </div>
                            ') !!}
                        </div>
                        <div class="home-head__img">
                            <img src="/its-client/img/home-head-img.png" alt="">
                        </div>
                        <div class="home-head__img-1">
                            <img src="/its-client/img/blue-smoke.png" alt="">
                        </div>
                        <div class="home-head__img-2">
                            <img src="/its-client/img/green-smoke.png" alt="">
                        </div>
                    </div>
                </div>
                {!! \BlockVisualEditor::include('top_10_casinos') !!}
            </div>

            <div class="home-stream">
                <div class="home-head__img-1">
                    <img src="/its-client/img/blue-smoke.png" alt="">
                </div>
                <div class="home-head__img-2">
                    <img src="/its-client/img/red-smoke.png" alt="">
                </div>
                {!! \BlockVisualEditor::render('last_stream', '
                <div class="home-stream__name big-text">Last stream</div>
                <div class="home-stream__wrapper">
                    <div class="home-stream__left">
                        <div class="home-stream__text small-text">Peace to you! My name is Bearded Joker. I collected for you the most interesting information about gambling in Arabic:</div>
                        <div class="home-stream__text small-text"> Free bonuses and codes, casino reviews, new slots, roulette strategies and sports bets.</div>
                        <div class="home-stream__text small-text">Watch my blog on YouTube and be the first to hear the hottest news about the gambling industry all over the world from a bearded brother.</div>
                        <a href="#">Subscribe to blog</a>
                    </div>
                    [block:render:slider_last_stream]
                </div>
                ') !!}
                <div class="line">
                    <img src="/its-client/img/line-arrow.png" alt="">
                </div>
            </div>

            {!! \BlockVisualEditor::include('casino_news') !!}

            <div class="timer-container">
                <div class="timer-container__left">
                    <img src="/its-client/img/people.png" alt="">
                </div>
                {!! \BlockVisualEditor::render('individual_bonus', '
                <div class="timer-container__right">
                    <div class="timer-top">
                        <h2 class="timer-top__title"> Individual BONUS</h2>
                        <p class="timer-top__text"> Get an individual BONUS from Bearded Joker up to $ 1000 on your first deposit right now.</p>
                    </div>
                    <div class="clock" id="clock"></div>
                    <form action="/form" method="POST" class="csrf-form">
                        <div class="button-block">
                            <input placeholder="Name" name="name" class="button-block__btn">
                            <input placeholder="E-mail" name="email" class="button-block__btn">
                            <div class="wrapper-big-button">
                                <button type="submit" class="button-block__btn-big-border"> Get your bonus</button>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="individual_bonus">
                    </form>
                </div>
                ') !!}
            </div>

            {!! \BlockVisualEditor::include('sports_betting') !!}
            {!! \BlockVisualEditor::include('popular_questions') !!}

            {!! \BlockVisualEditor::render('our_partners', '
            <div class="wrapper-partners cke-block">
                <h3 class="wrapper-partners__title"> Our partners </h3>
                <div class="array-logo">
                    <ul class="array-logo__line">
                        <li class="line-logo-one"> <img src="/its-client/img/partners1.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners2.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners3.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners4.png" class="line-logo-one__img" alt=""> </li>
                    </ul>
                    <ul class="array-logo__line">
                        <li class="line-logo-one"> <img src="/its-client/img/partners5.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners6.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners7.png" class="line-logo-one__img" alt=""> </li>
                    </ul>
                    <ul class="array-logo__line ">
                        <li class="line-logo-one"> <img src="/its-client/img/partners8.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners9.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners10.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners11.png" class="line-logo-one__img" alt=""> </li>
                    </ul>
                    <ul class="array-logo__line">
                        <li class="line-logo-one"> <img src="/its-client/img/partners12.png" class="line-logo-one__img" alt=""> </li>
                        <li class="line-logo-one"> <img src="/its-client/img/partners13.png" class="line-logo-one__img" alt=""> </li>
                    </ul>
                </div>
            </div>
            ') !!}
        </div>
    </main>

    @include('front.layouts.inc.footer')
@endsection