@extends('front.layouts.app')

@section('content')
    <div class="jackpot-section">
        {!! \BlockVisualEditor::render('jackpot', '
        <div class="jackpot-content">
            <div class="jackpot-content__left">
                <h1 class="jackpot-title">
                    <span class="first-span">Have time to take part. </span>
                    <span>  This time Mega Jackpot
                <span class="inner-span">  10 000 000$ </span>
            </span>
                </h1>
                <p class="jackpot-text">
                    Make your first deposit right now and <br> become a millionaire today. <br>
                    <span>Until the end of tshe action left </span>
                </p>
                <div class="timer-container timer-container-two">
                    <div class="timer-container__right">
                        <div class="clock" id="clock"></div>
                        <div class="button-block">
                            <div class="wrapper-big-button">
                                <button class="button-block__btn-big-border"> Get your bonus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jackpot-content__right">
                <img src="img/jackpot-img.png" alt="">
            </div>
        </div>
        ') !!}
        <div class="home-head__img-1">
            <img src="img/blue-smoke.png" alt="">
        </div>
        <div class="home-head__img-2">
            <img src="img/green-smoke.png" alt="">
        </div>
    </div>

@endsection