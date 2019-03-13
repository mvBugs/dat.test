@extends('front.layouts.app')

@section('content')
    <main>
        <div class="home home_ar">
            @include('front.layouts.inc.header')
            <div class="home__wrapper">
                <div class="home-head">
                    <div class="home-head__wrapper">
                        {!! \BlockVisualEditor::render('top_casino_reviews', '
                        <div class="home-head__block">
                            <div class="home-head__block-wrapper">
                                <h1 class="home-head__name">لماذا يختارون المركز</h1>
                                <p>أفضل المختصين</p>
                                <span>لماذا يختارون المركز الطبي لدكتور نزارالييف</span>
                                <div class="home-head__button">
                                    <a href="#">كيف نعالج</a>
                                </div>
                            </div>
                        </div>
                        ') !!}
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
                <div class="home-top">
                    <div class="home-top__wrapper">
                        <div class="home-top__name big-text">
                            لماذا يختارون المركز
                        </div>
                        <div class="home-top__text small-text">
                            بالنسبة لنا، كل المريض داخل المركز هو الشخص الفريد مع الاحتياجات الفريدة
                        </div>
                        <div class="home-top__slider">
                            <div class="swiper-container swiper-container-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider-1.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                            <a href="#">ماذا نعالج</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider-2.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider-1.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider-2.png" alt="">
                                            <p>Young, extremely ambitious casino</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider-1.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="home-top__slider-info">
                                            <img src="/its-client/img/head-slider-2.png" alt="">
                                            <p>لماذا يختارون المركز الطبي لدكتور نزارالييف</p>
                                            <p class="inner">العلمية والعملية للمركز محفوظة  ب 10 براءات اختراع</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-top"></div>

                            <div class="swiper-button-prev swiper-button-prev-top">
                                <img src="/its-client/img/arrow-left.png" alt="">
                            </div>
                            <div class="swiper-button-next swiper-button-next-top">
                                <img src="/its-client/img/arrow-right.png" alt="">
                            </div>
                        </div>
                    </div>
                    <img class="line" src="/its-client/img/line-arrow.png" alt="">
                </div>
            </div>
            <div class="home-stream">
                <div class="home-head__img-1">
                    <img src="/its-client/img/blue-smoke.png" alt="">
                </div>
                <div class="home-head__img-2">
                    <img src="/its-client/img/red-smoke.png" alt="">
                </div>
                <div class="home-stream__name big-text">ماذا نعالج</div>
                <div class="home-stream__wrapper">
                    <div class="home-stream__left">
                        <div class="home-stream__text small-text">خلال ال 25 سنة من الممارسة الطبية نشرت الآلاف من المقالات، وصورت مئات من اللقاءات وعشرات من الأفلام. لكننا نود التركيز على فيلم أهم قناة في التلفزيون الروسي، تعمل على البث في اللغة الإنجليزية وهي...</div>
                        <div class="home-stream__text small-text">الفريق الطبي - الفريق المتماسك من المهنيين ذوي المهارات العالية في مجال الإدمان والطب النفسي. </div>
                        <div class="home-stream__text small-text">الفريق الطبي - الفريق المتماسك من المهنيين ذوي المهارات العالية في مجال الإدمان والطب النفسي.</div>
                        <a href="#">ماذا نعالج</a>
                    </div>
                    <div class="home-stream__right">
                        <div class="home-stream__video">
                            <iframe width="569" height="356" src="https://www.youtube.com/embed/PXz15FFdk3M"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="home-stream__block">
                            <p><img src="/its-client/img/steam-img.png" alt=""></p>
                            <p><img src="/its-client/img/steam-img.png" alt=""></p>
                            <p><img src="/its-client/img/steam-img.png" alt=""></p>
                        </div>
                    </div>
                </div>
                <div class="line">
                    <img src="/its-client/img/line-arrow.png" alt="">
                </div>
            </div>
            <div class="home-news">
                <div class="home-news__wrapper">
                    <div class="home-news__head">
                        <div class="home-news__name big-text">ماذا نعالج</div>
                        <a href="#" class="home-news__text small-text">ماذا نعالج</a>
                    </div>
                    <div class="home-news__content">
                        <div class="home-news__content-left">
                            <img src="/its-client/img/news.png" alt="">
                            <p>أكاديمية الروسية للعلوم الطبية. الأعتراف الرسمي لطريقة...</p>
                            <span>أول تجربة للمخدر غالباً ما تحدث في سن المراهقة. لأن في  هذه الفترة يحاول الشخص تأكيد فرديته. ومن الغريب، يتم ذلك عن طريق نسخ سلوك أصدقائهم الذين هم من نفس الفئة العمرية. وكقاعدة، السلوك غير المشروع في مجموعات الشباب مرحب به.</span>
                            <a href="#">ماذا نعالج</a>
                        </div>
                        <div class="home-news__content-right">
                            <div class="home-news__content-block">
                                <p>
                                    <img src="/its-client/img/news-img.png" alt="">
                                </p>
                                <div>
                                    <div class="news-name">ماذا نعالج</div>
                                    <span class="small-text">في عيادة الدكتور نزارالييف: تستخدم أساليب العلاج الأصلية التي ليس لها مثيل في العالم</span>
                                </div>
                            </div>
                            <div class="home-news__content-block active">
                                <p>
                                    <img src="/its-client/img/news-img.png" alt="">
                                </p>
                                <div>
                                    <div class="news-name">ماذا نعالج</div>
                                    <span>في عيادة الدكتور نزارالييف: تستخدم أساليب العلاج الأصلية التي ليس لها مثيل في العالم</span>
                                </div>
                            </div>
                            <div class="home-news__content-block">
                                <p>
                                    <img src="/its-client/img/news-img.png" alt="">
                                </p>
                                <div>
                                    <div class="news-name">ماذا نعالج</div>
                                    <span>في عيادة الدكتور نزارالييف: تستخدم أساليب العلاج الأصلية التي ليس لها مثيل في العالم</span>
                                </div>
                            </div>
                            <div class="home-news__content-block">
                                <p>
                                    <img src="/its-client/img/news-img.png" alt="">
                                </p>
                                <div>
                                    <div class="news-name">ماذا نعالج</div>
                                    <span>في عيادة الدكتور نزارالييف: تستخدم أساليب العلاج الأصلية التي ليس لها مثيل في العالم</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line">
                    <img src="/its-client/img/line-arrow.png" alt="">
                </div>
            </div>
            <div class="timer-container timer-container_ar">
                <div class="timer-container__left">
                    <img src="/its-client/img/people.png" alt="">
                </div>
                <div class="timer-container__right">
                    <div class="timer-top">
                        <h2 class="timer-top__title"> ماذا نعالج</h2>
                        <p class="timer-top__text">أكاديمية الروسية للعلوم الطبية. الأعتراف الرسمي لطريقة...</p>
                    </div>
                    <div class="clock" id="clock"></div>
                    <form action="#">
                        <div class="button-block">
                            <input placeholder="أخبارنا" class="button-block__btn">
                            <input placeholder="أخبارنا" class="button-block__btn">
                            <div class="wrapper-big-button">
                                <button type="submit" class="button-block__btn-big-border">ماذا نعالج</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="carusel-in-tabs-container carusel-in-tabs-container_ar">
                <div class="tabs-wrapper">
                    <nav>
                        <a class="first-item">
                            <h5>الطريقة الفريدة</h5>
                            <p>المخدرات والعجز الجنسي</p>
                        </a>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <!-- <a class="nav-item nav-link active first-link" > </a> -->
                            <a class="nav-item nav-link active" id="nav-footbal-tab" data-toggle="tab" href="#nav-footbal" role="tab" aria-controls="nav-footbal" aria-selected="true">
                                <div class="event-block">
                                    <img src="/its-client/img/Football.png" alt="">
                                    <div class="event-block__text">
                                        <h5> أخبارنا</h5>
                                        <p>أخبارنا</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-sweepstakes-tab" data-toggle="tab" href="#nav-sweepstakes" role="tab" aria-controls="nav-sweepstakes" aria-selected="false">
                                <div class="event-block">
                                    <img src="/its-client/img/horse.png" alt="">
                                    <div class="event-block__text">
                                        <h5>أخبارنا</h5>
                                        <p>أخبارنا</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-boxing-tab" data-toggle="tab" href="#nav-boxing" role="tab" aria-controls="nav-boxing" aria-selected="false">
                                <div class="event-block">
                                    <img src="/its-client/img/boxing.png" alt="">
                                    <div class="event-block__text">
                                        <h5>أخبارنا</h5>
                                        <p>أخبارنا</p>
                                    </div>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-formula-tab" data-toggle="tab" href="#nav-formula" role="tab" aria-controls="nav-formula" aria-selected="false">
                                <div class="event-block">
                                    <img src="/its-client/img/formula_one.png" alt="">
                                    <div class="event-block__text">
                                        <h5>أخبارنا</h5>
                                        <p>أخبارنا</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-footbal" role="tabpanel" aria-labelledby="nav-footbal-tab">
                            <div class="left-block">
                                <div class="uni-block">
                                    <h5 class="uni-block__title">المخدرات والعجز الجنسي</h5>
                                    <p class="uni-block__text">المخدرات والعجز الجنسي</p>
                                    <span class="uni-state__date"> 03.12.18 23:30</span>
                                </div>
                                <div class="uni-block">
                                    <h5 class="uni-block__title">المخدرات والعجز الجنسي</h5>
                                    <p class="uni-block__text">المخدرات والعجز الجنسي</p>
                                    <span class="uni-state__date"> 03.12.18 23:30</span>
                                </div>
                                <div class="uni-block">
                                    <h5 class="uni-block__title">المخدرات والعجز الجنسي</h5>
                                    <p class="uni-block__text">المخدرات والعجز الجنسي</p>
                                    <span class="uni-state__date"> 03.12.18 23:30</span>
                                </div>
                                <div class="uni-block uni-hide">
                                    <h5 class="uni-block__title">المخدرات والعجز الجنسي</h5>
                                    <p class="uni-block__text">المخدرات والعجز الجنسي</p>
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
                                        <h5 class="wrapper-inner-block__title">المخدرات والعجز الجنسي</h5>
                                        <div class="row-two">
                                            <span class="row-two__left"> November 3, 2018  </span>
                                            <span class="row-two__rigth"> 23:30</span>
                                        </div>
                                    </div>
                                    <div class="row-three">
                                        <p class="row-three__text">
                                            لماذا يختارون المركز الطبي لدكتور نزارالييف
                                        </p>
                                    </div>
                                    <div class="row-four">
                                        <button class="row-four__button">ماذا نعالج</button>
                                    </div>
                                    <div class="row-nav">
                                        <div class="row-nav__prev">
                                            <a href="#"><img src="/its-client/img/prev.png" alt=""> <p>ماذا نعالج</p> </a>
                                        </div>
                                        <div class="row-nav__next">
                                            <a href="#"> <p>ماذا نعالج</p> <img src="/its-client/img/next.png" alt=""></a>
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
            <div class="wrapper-questions wrapper-questions_ar">
                <div class="wrapper-questions__line">
                    <img src="/its-client/img/line-arrow.png" alt="">
                </div>
                <h3 class="wrapper-questions__title">ماذا نعالج</h3>
                <div class="questions-content">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">المقالات</a>
                            <a class="nav-item nav-link" id="nav-operation-tab" data-toggle="tab" href="#nav-operation" role="tab" aria-controls="nav-operation" aria-selected="false">أفضل المختصين</a>
                            <a class="nav-item nav-link" id="nav-security-tab" data-toggle="tab" href="#nav-security" role="tab" aria-controls="nav-security" aria-selected="false">المقالات</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                            <div class="pane-inner-wrapper">
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text">
                                        <p>التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img ">
                                        <img class="" src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text">  <p>ومن المعروف ،ان مركزنا الطبي مشهور بأعلى معدلات الشفاء في العالم لأنواع مختلفة من الادمانات. التعافي السنوي عند المرضى الذين يعانون من الإدمان على المخدرات هي 83٪، ومن الإدمان على الكحول - 92٪.</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text"> <p> التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="pane-inner-wrapper">
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text"> <p>التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">

                                    </button>
                                </div>
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text">
                                        <h6 class="questions" >التغلب على الادمان - الفيلم الوثائقي من قناة "...</h6>
                                        <p class="hide-text text-answer"> ومن المعروف ،ان مركزنا الطبي مشهور بأعلى معدلات الشفاء في العالم لأنواع مختلفة من الادمانات. التعافي السنوي عند المرضى الذين يعانون من الإدمان على المخدرات هي 83٪، ومن الإدمان على الكحول - 92٪. </p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-operation" role="tabpanel" aria-labelledby="nav-operation-tab">
                            <div class="pane-inner-wrapper">
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text">
                                        <p>التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img class="" src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text">  <p> التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text"> <p>التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="pane-inner-wrapper">
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text"> <p>التغلب على الادمان - الفيلم الوثائقي من قناة "...</p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">

                                    </button>
                                </div>
                                <div class="pane-inner-block pane-inner-block-ar">
                                    <div class="pane-inner-block__text">
                                        <h6 class="questions" > التغلب على الادمان - الفيلم الوثائقي من قناة "...</h6>
                                        <p class="hide-text text-answer"> الفريق الطبي - الفريق المتماسك من المهنيين ذوي المهارات العالية في مجال الإدمان والطب النفسي. نحن باستمرار نقوم بتحسين المهارات من خلال المشاركة في برامج التدريب والمؤتمرات الإقليمية. </p>
                                        <a href="" class="hide-text">ماذا نعالج</a>
                                    </div>
                                    <button class="pane-inner-block__img">
                                        <img src="/its-client/img/Vector.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab">
                        </div>
                    </div>
                </div>
                <div class="wrapper-questions__line">
                    <img src="/its-client/img/line-arrow.png" alt="">
                </div>
            </div>
            <div class="wrapper-partners">
                <h3 class="wrapper-partners__title">ماذا نعالج</h3>
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
        </div>
    </main>

    @include('front.layouts.inc.footer')

    {{--

        <br>
        <br>
        <h1>Главная страница</h1>

        <div class="cke-block" data-block="top_casino_reviews">
            {!! \Block::setAlias('top_casino_reviews')->body() !!}
        </div>

        <div class="cke-block" data-block="test2">
            {!! \Block::setAlias('test2')->body() !!}
        </div>

        <div class="cke-block" data-block="test3">
            {!! \Block::setAlias('test3')->body('<h3>sdfsfdsf</h3>[block:reviews]') !!}
        </div>
    --}}

@endsection