<div class="carusel-in-tabs-container">
    <div class="tabs-wrapper">
        <nav>
            <a class="first-item">
                {!! \BlockVisualEditor::render('sports_betting_title', '
                <h5> Sports betting </h5>
                <p> Sports betting with high odds </p>
                ') !!}
            </a>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <!-- <a class="nav-item nav-link active first-link" > </a> -->
                <a class="nav-item nav-link active" id="nav-footbal-tab" data-toggle="tab" href="#nav-footbal" role="tab" aria-controls="nav-footbal" aria-selected="true">
                    <div class="event-block">
                        <img src="/its-client/img/Football.png" alt="">
                        <div class="event-block__text">
                            <h5> Footbal</h5>
                            <p> 5 events</p>
                        </div>
                    </div>
                </a>
                <a class="nav-item nav-link" id="nav-sweepstakes-tab" data-toggle="tab" href="#nav-sweepstakes" role="tab" aria-controls="nav-sweepstakes" aria-selected="false">
                    <div class="event-block">
                        <img src="/its-client/img/horse.png" alt="">
                        <div class="event-block__text">
                            <h5>  Sweepstakes </h5>
                            <p> 2 events</p>
                        </div>
                    </div>
                </a>
                <a class="nav-item nav-link" id="nav-boxing-tab" data-toggle="tab" href="#nav-boxing" role="tab" aria-controls="nav-boxing" aria-selected="false">
                    <div class="event-block">
                        <img src="/its-client/img/boxing.png" alt="">
                        <div class="event-block__text">
                            <h5> Boxing </h5>
                            <p> 3 events</p>
                        </div>
                    </div>
                </a>
                <a class="nav-item nav-link" id="nav-formula-tab" data-toggle="tab" href="#nav-formula" role="tab" aria-controls="nav-formula" aria-selected="false">
                    <div class="event-block">
                        <img src="/its-client/img/formula_one.png" alt="">
                        <div class="event-block__text">
                            <h5> Formula 1 </h5>
                            <p> 1 events</p>
                        </div>
                    </div>
                </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-footbal" role="tabpanel" aria-labelledby="nav-footbal-tab">
                <div class="left-block">
                    <div class="uni-block">
                        <h5 class="uni-block__title">Arsenal - Tottenham </h5>
                        <p class="uni-block__text"> Football / Champions League</p>
                        <span class="uni-state__date"> 03.12.18 23:30</span>
                    </div>
                    <div class="uni-block">
                        <h5 class="uni-block__title">Arsenal - Tottenham </h5>
                        <p class="uni-block__text"> Football / Champions League</p>
                        <span class="uni-state__date"> 03.12.18 23:30</span>
                    </div>
                    <div class="uni-block">
                        <h5 class="uni-block__title">Arsenal - Tottenham </h5>
                        <p class="uni-block__text"> Football / Champions League</p>
                        <span class="uni-state__date"> 03.12.18 23:30</span>
                    </div>
                    <div class="uni-block uni-hide">
                        <h5 class="uni-block__title">Arsenal - Tottenham </h5>
                        <p class="uni-block__text"> Football / Champions League</p>
                        <span class="uni-state__date"> 03.12.18 23:30</span>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/its-client/img/carusel1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/its-client/img/carusel1.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/its-client/img/carusel1.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="right-block">
                    <div class="wrapper-inner-block">
                        <div class="top-absolute">
                            <h5 class="wrapper-inner-block__title">  Roma - Real Madrid </h5>
                            <div class="row-two">
                                <span class="row-two__left"> November 3, 2018  </span>
                                <span class="row-two__rigth"> 23:30</span>
                            </div>
                        </div>
                        <div class="row-three">
                            <p class="row-three__text">
                                Madrid "Real" won in the last four meetings with the "Roma"
                            </p>
                        </div>
                        <div class="row-four">
                            <button class="row-four__button"> Read more</button>
                        </div>
                        <div class="row-nav">
                            <div class="row-nav__prev">
                                <a href="#"><img src="/its-client/img/prev.png" alt=""> <p>PREVIOUS</p> </a>
                            </div>
                            <div class="row-nav__next">
                                <a href="#"> <p>NEXT</p> <img src="/its-client/img/next.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-sweepstakes" role="tabpanel" aria-labelledby="nav-sweepstakes-tab">...</div>
            <div class="tab-pane fade" id="nav-boxing" role="tabpanel" aria-labelledby="nav-boxing-tab">...</div>
            <div class="tab-pane fade" id="nav-formula" role="tabpanel" aria-labelledby="nav-formula-tab">...</div>
        </div>
    </div>
</div>