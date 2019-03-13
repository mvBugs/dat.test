@extends('front.layouts.app')

@section('content')
    <div class="cruise">
        @include('front.layouts.inc.header')
        <div class="cruise__wrapper">

            {!! \BlockVisualEditor::render('casino_cruise', '
            <div class="cruise-head">
                <div class="img">
                    <img src="/its-client/img/green-smoke.png" alt="">
                </div>
                <div class="img-1">
                    <img src="/its-client/img/blue-smoke.png" alt="">
                </div>
                <div class="cruise-head__wrapper">
                    <div class="cruise-head__block">
                        <div class="first">
                            <img src="/its-client/img/cruise-logo.png" alt="">
                        </div>
                        <div class="second">
                            <span>Casino Review </span>
                            <h1 class="cruise-head__name">CASINO CRUISE</h1>
                            <p>Modern platform offers different types of games, betting and entertainment</p>
                            <div class="home-head__button">
                                <a href="#">Login and get a bonus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ') !!}

            {!! \BlockVisualEditor::render('casino_cruise_review', '
            <div class="cruise-review">
                <div class="cruise-review__wrapper">
                    <div class="cruise-review__left">
                        <div class="cruise-review__name">
                            Review
                        </div>
                        <div class="cruise-review__foname">
                            Large selection of games
                        </div>
                        <div class="cruise-review__text">In this casino, you can choose the games of manufacturers such as Microgaming, NetEnt, Vivo, Nyx and Play ‘N Go, including all the jackpots they offer. This is one of the few casinos in Arabic. However, the translation is most likely done with the help of Google translate so do not overstate your expectations. This is compensated by a convenient platform, a wide range of games, a variety of financial options, quality customer service - this is what makes Casino Cruise so attractive to players from Arab countries.</div>
                        <div class="cruise-review__foname">
                            Reliable company
                        </div>
                        <div class="cruise-review__text">Casino Cruise is owned by EveryMatrix Limited. This company, registered in Malta, also owns several other well-known gambling sites. It has different types of licenses issued by the governments of Malta, the United Kingdom and the Netherlands Antilles. Right on the main page of the site, in its lower part, you will find all the important information about the founders, documentation, head office and so on.</div>
                    </div>
                    <div class="cruise-review__right">
                        <img src="/its-client/img/review-img.png" alt="">
                    </div>
                </div>
            </div>
            ')!!}

            {!! \BlockVisualEditor::render('casino_cruise_games', '
            <div class="cruise-games">
                <div class="cruise-games__wrapper">
                    <div class="cruise-games__name">Casino games</div>
                    <div class="cruise-games__blocks">
                        <div class="cruise-games__block">
                            <img src="/its-client/img/games-1.png" alt="">
                            <p>Forsaken</p>
                            <p>Kingdom</p>
                        </div>
                        <div class="cruise-games__block">
                            <img src="/its-client/img/games-2.png" alt="">
                            <p>Gonzo’s</p>
                            <p>Quest</p>
                        </div>
                        <div class="cruise-games__block">
                            <img src="/its-client/img/games-3.png" alt="">
                            <p>Starburst</p>
                        </div>
                        <div class="cruise-games__block">
                            <img src="/its-client/img/games-4.png" alt="">
                            <p>Spinata</p>
                            <p>Grande</p>
                        </div>
                        <div class="cruise-games__block">
                            <img src="/its-client/img/games-5.png" alt="">
                            <p>Viking</p>
                            <p>Quest</p>
                        </div>
                    </div>
                    <div class="cruise-games__text">Some of the most popular slot games available at this casino include such hits as Forsaken Kingdom, Gonzo’s Quest, Starburst, Spinata Grande, Viking Quest and others.</div>
                    <div class="cruise-games__text">Players who prefer to play with live dealers will also find suitable entertainment here: many options for blackjack, baccarat and roulette are available for playing with real dealers via a webcam. Another important detail of this casino is its mobile gaming platform.</div>
                </div>
            </div>
            ') !!}

            {!! \BlockVisualEditor::render('bonuses_and_promotions', '
            <div class="cruise-bonuses">
                <div class="cruise-bonuses__wrapper">
                    <div class="cruise-bonuses__left"><img src="/its-client/img/bonuses.png" alt=""></div>
                    <div class="cruise-bonuses__right">
                        <div class="cruise-bonuses__name">Bonuses and promotions</div>
                        <div class="cruise-bonuses__text">Cruise online casino offers its players a variety of different bonuses. Currently, for example, they offer 100% on the first deposit up to $ 300 + 100 free spins. As a result, you will get many chances to win from the very beginning. There are also bonuses for subsequent replenishment.</div>
                        <div class="cruise-bonuses__text">Other bonuses include regular bonuses every Tuesday, a monthly bonus, gifts on Fridays, a real sea cruise raffle, as well as promotions for games with real dealers. You can test the products presented in the free mode. Tournaments between clients are also held here.</div>
                        <div class="home-head__button">
                            <a href="#">All offers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cruise-support">
                <div class="cruise-support__wrapper">
                    <div class="cruise-support__name">Support</div>
                    <div class="cruise-support__text">For any questions you are interested in and if you have different problems, please contact the round-the-clock support service for help. The help section is very informative. There is also a chat in which casino employees do not always respond instantly, but during the day your request will most likely be considered.</div>
                    <div class="cruise-support__text">The support service is not yet available in Arabic, but the initial level of English is enough to solve the question you need.</div>
                </div>
            </div>
            ') !!}

            {!! \BlockVisualEditor::render('detailed_information', '
            <div class="cruise-information">
                <div class="cruise-information__wrapper">
                    <div class="cruise-information__name">Detailed information </div>
                    <div class="cruise-information__blocks">

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                        <div class="cruise-information__block">
                            <div class="cruise-information__block-text">Welcome to bonus </div>
                            <div class="cruise-information__block-name">До 1000 EUR </div>
                        </div>

                    </div>
                </div>
            </div>
            ') !!}

            {!! \BlockVisualEditor::render('advantages_and_disadvantages', '
            <div class="cruise-advantages">
                <div class="cruise-advantages__name">
                    Advantages and disadvantages
                </div>
                <div class="cruise-advantages__wrapper">
                    <div class="cruise-advantages__left">
                        <div class="cruise-advantages__block">
                            <div class="cruise-advantages__block-img">
                                <img src="/its-client/img/add.png" alt="">
                            </div>
                            <div class="cruise-advantages__block-name">The reputation of an honest casino with a loyal attitude to the players</div>
                        </div>
                        <div class="cruise-advantages__block">
                            <div class="cruise-advantages__block-img">
                                <img src="/its-client/img/add.png" alt="">
                            </div>
                            <div class="cruise-advantages__block-name">Uninterrupted payment of winnings up to $ 100,000 per month</div>
                        </div>
                        <div class="cruise-advantages__block">
                            <div class="cruise-advantages__block-img">
                                <img src="/its-client/img/add.png" alt="">
                            </div>
                            <div class="cruise-advantages__block-name">Wide choice of software providers</div>
                        </div>
                        <div class="cruise-advantages__block">
                            <div class="cruise-advantages__block-img">
                                <img src="/its-client/img/add.png" alt="">
                            </div>
                            <div class="cruise-advantages__block-name">Variety of bonus program</div>
                        </div>
                    </div>
                    <div class="cruise-advantages__right">
                        <div class="cruise-advantages__block">
                            <div class="cruise-advantages__block-img">
                                <img src="/its-client/img/remote.png" alt="">
                            </div>
                            <div class="cruise-advantages__block-name">Restrictions for some countries</div>
                        </div>
                        <div class="cruise-advantages__block">
                            <div class="cruise-advantages__block-img">
                                <img src="/its-client/img/remote.png" alt="">
                            </div>
                            <div class="cruise-advantages__block-name">Serious account verification requirements</div>
                        </div>
                    </div>
                </div>
            </div>
            ') !!}

            {!! \BlockVisualEditor::render('casino_cruise_footer', '
            <div class="cruise-head cruise-head_last">
                <div class="img">
                    <img src="/its-client/img/green-smoke.png" alt="">
                </div>
                <div class="img-1">
                    <img src="/its-client/img/blue-smoke.png" alt="">
                </div>
                <div class="cruise-head__wrapper">
                    <div class="cruise-head__block">
                        <h1 class="cruise-head__name">CASINO CRUISE</h1>
                        <p>Modern platform offers different types of games, betting and entertainment</p>
                        <div class="home-head__button">
                            <a href="#">Login and get a bonus</a>
                        </div>
                    </div>
                </div>
            </div>
            ') !!}

        </div>
    </div>

    @include('front.layouts.inc.footer')

@endsection