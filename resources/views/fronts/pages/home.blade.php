@extends('fronts.layouts.app', ['title' => 'Главная'])

@section('content')
    @include('fronts.layouts.inc.home-header')
<main>
<div class="home">
    <div id="fullpage">
        <div class="section" data-anchor="rubble">
            <div class="home__section" style="background-image:  url('/its-client/img/datsuk/home-one.png') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim fadeInLeft animated delay-0.5s" data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_one_more', '
                        <p class="text-head">70X120, 40X70, 20X40, 5X20, 2X5</p>
                        <h3 class="name">Щебінь</h3>
                        <ul>
                            <li class="text-bottom"><span style="font-size:22px;"></span><span style="font-size:26px;">відсів</span><span style="font-size:22px;"> - </span><span style="font-size:20px;">опис ...</span><span style="font-size:22px;"></span></li>
                            <li class="text-bottom"><span style="font-size:22px;"></span><span style="font-size:26px;">базальт</span><span style="font-size:22px;"> - </span><span style="font-size:20px;">опис ...</span><span style="font-size:22px;"></span></li>
                            <li class="text-bottom"><span style="font-size:22px;"></span><span style="font-size:26px;">гарніт</span><span style="font-size:22px;"> - </span><span style="font-size:20px;">о</span><span style="font-size:20px;">пис ...</span><span style="font-size:22px;"><span style="font-size:22px;"></span></span></li>
                            <li class="text-bottom"><span style="font-size:22px;"></span><span style="font-size:26px;">посипка</span><span style="font-size:22px;"> - </span><span style="font-size:20px;">опис ...</span><span style="font-size:22px;"></span></li>
                        </ul>
                    ') !!}
                    </div>
                    <div class="home__section-right anim fadeInRight animated delay-0.5s" data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_one_submit', '
                        <p>Бажаєте замовити або за детальнішою інформацію зателефонуте, або нпишіть нам</p>
                        <a href="/write">Залишити заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="sand">
            <div class="home__section" style="background-image:  url('/its-client/img/datsuk/home-two.png') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim none delay-0.1s" data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_two_more', '
                        <p class="text-head"> </p>
                        <h2 class="name">Пісок</h2>
                        <ul>
                            <li class="text-bottom"><span style="font-size:26px;">Чистий - </span><span style="font-size:20px;">для заливки, штукатурки, мурування та стяжки.</span><span style="font-size:26px;"></span></li>
                            <li class="text-bottom"><span style="font-size:26px;">З глинкою - </span><span style="font-size:20px;">для муровання та вирівнювання площ.</span><span style="font-size:26px;"></span></li>
                            <li class="text-bottom"><span style="font-size:26px;">Крупнозернистий - </span><span style="font-size:20px;">для виготовлення бетонних розчинів.</span><span style="font-size:26px;"></span></li>
                            <li class="text-bottom"><span style="font-size:26px;">На вимостку</span></li>
                        </ul>
                    ') !!}
                    </div>
                    <div class="home__section-right anim none delay-0.7s" data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_two_submit', '
                            <p>Бажаєте замовити або за детальнішою інформацію зателефонуте, або нпишіть нам</p>
                            <a href="/write">Залишити заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="peat">
            <div class="home__section" style="background-image:  url('/its-client/img/datsuk/home-three.png') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim none " data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_three_more', '
                        <p class="text-head"> </p>

                        <h2 class="name">Торф</h2>

                        <p class="text-bottom">Торф<br />
                        Чорнозем<br />
                        Замля на вимостку</p>
                    ') !!}
                    </div>
                    <div class="home__section-right anim none " data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_three_submit', '
                          <p>Бажаєте замовити або за детальнішою інформацію зателефонуте, або нпишіть нам</p>
                          <a href="/write">Залишити заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
            {{--@include('fronts.layouts.inc.footer')--}}
        </div>
        <div class="section" data-anchor="wood">
            <div class="home__section" style="background-image:  url('/its-client/img/datsuk/home-four.jpg') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim none " data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_four_more', '
                        <p class="text-head">ОСТ 16 0.684.014-80</p>
                        <h2 class="name">Дрова</h2>
                        <p class="text-bottom">
                            якийсь текст ...
                        </p>
                    ') !!}
                    </div>
                    <div class="home__section-right anim none " data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_four_submit', '
                          <p>Бажаєте замовити або за детальнішою інформацію зателефонуте, або нпишіть нам</p>
                          <a href="/write">Залишити заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="bobcat">
            <div class="home__section" style="background-image:  url('/its-client/img/datsuk/home-five.jpg')">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim none " data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_five_more', '
                        <h2 class="name">Послуги БОБКАТА</h2>
                        <ul>
                            <li class="text-bottom"><span style="font-size:20px;">Навантажування і розгортання землі, щебню</span></li>
                            <li class="text-bottom"><span style="font-size:20px;">Підготовка території під викладання бруківки</span></li>
                            <li class="text-bottom"><span style="font-size:20px;">Розвезення чорнозему по території</span></li>
                            <li class="text-bottom"><span style="font-size:20px;">Засипаємо землю в цоколь</span></li>
                            <li class="text-bottom"><span style="font-size:20px;">Рівняння земельних ділянок</span></li>
                            <li class="text-bottom"><span style="font-size:20px;">Копання котлованів</span></li>
                            <li class="text-bottom"><span style="font-size:20px;">Розчищення снігових заметів</span></li>
                        </ul>
                    ') !!}
                    </div>
                    <div class="home__section-right anim none " data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_five_submit', '
                        <p>Бажаєте замовити або за детальнішою інформацію зателефонуте, або нпишіть нам     </p>
                        <a href="/write">Залишити заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div type="button" class="callback-bt" data-phone="{{ variable('company_phone', '+380509910785') }}">
    <div class="text-call">
        <i class="fa fa-phone"></i>
    </div>
</div>
</main>

@endsection
