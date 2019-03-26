@extends('fronts.layouts.app', ['title' => 'Главная'])

@section('content')
    @include('fronts.layouts.inc.home-header')
<main>
<div class="home">
    <div id="fullpage">
        <div class="section">
            <div class="home__section" style="background-image:  url('/its-client/img/home-one.png') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim fadeInLeft animated delay-0.5s" data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_one_more', '
                            <p class="text-head">ГОСТ 5151-79</p>
                            <h1 class="name">Кабельные деревянные барабаны </h1>
                            <p class="text-bottom">
                                Wooden drums for electrical <br> cables and wires
                            </p>
                            <a href="/wood">Подробнее</a>
                    ') !!}
                    </div>
                    <div class="home__section-right anim fadeInRight animated delay-0.5s" data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_one_submit', '
                        <p>С нами надежно, как с АК-47. <br> т.к. мы просто хорошо делаем свою работу.</p>
                        <a href="/write">Отправить заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="home__section" style="background-image:  url('/its-client/img/home-two.png') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim none delay-0.1s" data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_two_more', '
                        <p class="text-head">ГОСТ 11127-78</p>
                        <h2 class="name">Барабаны деревянные <br> для стальных канатов</h2>
                        <p class="text-bottom">
                            Wooden drums for wire ropes
                        </p>
                        <a href="/cable">Подробнее</a>
                    ') !!}
                    </div>
                    <div class="home__section-right anim none delay-0.7s" data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_two_submit', '
                            <p>С нами надежно, как с АК-47. <br> т.к. мы просто хорошо делаем свою работу.</p>
                            <a href="/write">Отправить заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="home__section" style="background-image:  url('/its-client/img/home-three.png') ">
                <div class="home__section-wrapper" >
                    <div class="home__section-left anim none " data-effect="fadeInLeft">
                    {!! \BlockVisualEditor::render('home_three_more', '
                            <p class="text-head">ОСТ 16 0.684.014-80</p>
                            <h2 class="name">Барабаны металлические многооборотные для электрических проводов</h2>
                            <p class="text-bottom">
                                Metal Drums for electrical cables and wires
                            </p>
                            <a href="/metallic">Подробнее</a>
                    ') !!}
                    </div>
                    <div class="home__section-right anim none " data-effect="fadeInRight">
                    {!! \BlockVisualEditor::render('home_three_submit', '
                              <p>С нами надежно, как с АК-47. <br> т.к. мы просто хорошо делаем свою работу.</p>
                              <a href="/write">Отправить заявку</a>
                    ') !!}
                    </div>
                </div>
            </div>
            @include('fronts.layouts.inc.footer')
        </div>
    </div>
</div>
</main>

@endsection