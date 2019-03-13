@extends('front.layouts.app')

@section('content')

    <div class="last-beats-container ">
        @include('front.layouts.inc.header')

        <div class="last-beats-container__top">
            <div class="top-block-img">
                <img src="/its-client/img/img-top-beats.png" alt="">
            </div>
            {!! \BlockVisualEditor::render('live_now', '
            <div class="beats-right-block">
                <h1 class="beats-right-block__title">
                    LIVE NOW
                </h1>
                <div class="beats-right-block__button-content">
                    <div class="button-top-line">
                        <button class="button-top-line__btn">REAL MADRID CF </button>
                        <button class="button-top-line__btn">00</button>
                        <button class="button-top-line__btn">UD MELILLA </button>
                    </div>
                    <div class="button-bottom-line">
                        <button class="button-bottom-line__btn"> Real Madrid... <span> 1.069</span></button>
                        <button class="button-bottom-line__btn"> X <span>12.50</span></button>
                        <button class="button-bottom-line__btn"> UD Melilla <span> 23.00</span></button>
                    </div>
                    <div class="wrapper-big-button">
                        <a href="#" class="wrapper-big-button__btn-big-border"> Bet Now </a>
                    </div>
                </div>
            </div>
            ') !!}
            <div class="home-head__img-1">
                <img src="/its-client/img/blue-smoke.png" alt="">
            </div>
            <div class="home-head__img-2">
                <img src="/its-client/img/green-smoke.png" alt="">
            </div>
        </div>
    </div>
    <div class="beats-white-content ">
        <h2 class="beats-white-content__title">
            LAST BETS
        </h2>
        <div class="inner-container">
            <div class="inner-container__menu">
                <ul class="row-wrap-menu">
                    <li class="row-wrap-menu__item">
                        <a href="" class="wrap-item active">
                            <img src="/its-client/img/fotball-two.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Fotball
                                </h6>
                                <p class="text">
                                    35 events
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="row-wrap-menu__item">
                        <a href="" class="wrap-item">
                            <img src="/its-client/img/boxing-two.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Boxing
                                </h6>
                                <p class="text">
                                    3 events
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/formula-two.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Formula 1
                                </h6>
                                <p class="text">
                                    1 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/hockey.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Hockey
                                </h6>
                                <p class="text">
                                    3 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/basketball.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Basketball
                                </h6>
                                <p class="text">
                                    15 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/sweepstakes.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Sweepstakes
                                </h6>
                                <p class="text">
                                    2 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/tennis.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Sweepstakes
                                </h6>
                                <p class="text">
                                    2 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/tennis-big.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Sweepstakes
                                </h6>
                                <p class="text">
                                    2 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/table-tennis.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Formula 1
                                </h6>
                                <p class="text">
                                    2 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/hand-ball.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Hand Ball
                                </h6>
                                <p class="text">
                                    2 events
                                </p>
                            </div>
                        </a></li>
                    <li class="row-wrap-menu__item"><a href="" class="wrap-item">
                            <img src="/its-client/img/cs.png" alt="">
                            <div class="wrap-item__right">
                                <h6 class="title">
                                    Counter strike
                                </h6>
                                <p class="text">
                                    2 events
                                </p>
                            </div>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="table-content">
            <ul class="table-content__block-line">
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
                <li class="wrapper-uni-line">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>


                <li class="wrapper-uni-line active">
                    <div class="uni-line">
                        <div class="style-block uni-line__hour-block ">
                            20:00
                        </div>
                        <div class="uni-line-two">
                            <div class="style-block uni-line-two__name-block ">
                                Genoa CFC
                            </div>
                            <div class="style-block uni-line-two__vs-block ">
                                vs
                            </div>
                            <div class="style-block uni-line-two__two-name ">
                                Virtus Entella
                            </div>
                        </div>
                        <div class="uni-line-three">
                            <div class="uni-line-three__cof">1.37</div>
                            <div class="uni-line-three__cof">5.04</div>
                            <div class="uni-line-three__cof">7.62</div>
                            <div class="uni-line-three__cof  black-text">+168</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-wrapper">
        @include('front.layouts.inc.footer')
        <img class="blue-smoke" src="/its-client/img/blue-smoke.png" alt="">
        <img class="green-smoke" src="/its-client/img/green-smoke.png" alt="">
    </div>
@endsection