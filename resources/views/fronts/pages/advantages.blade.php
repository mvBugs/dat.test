@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="about about_advantages">
        <div class="about__wrapper">
            <h1 class="about__name big-name">{{ $node->name }}</h1>
            <div class="advantages">
    {!! \BlockVisualEditor::render('advantages', '
       <div class="advantages__wrapper">
           <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="1">
               <div class="advantages__img">
                   <svg class="icon-svg icon-svg-advantages-1 "><use xlink:href="/its-client/img//sprite.svg#advantages-1"></use></svg>
               </div>
               <div class="advantages__name">100% клиентов возвращаются</div>
               <div class="advantages__text">Большинство наших клиентов возвращаются к нам.</div>
           </div>
           <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="1.6">
               <div class="advantages__img">
                   <svg class="icon-svg icon-svg-advantages-2 "><use xlink:href="/its-client/img//sprite.svg#advantages-2"></use></svg>
               </div>
               <div class="advantages__name">Ваша безопасность</div>
               <div class="advantages__text">Весь лес закупается официально по системе ЕГАИС</div>
           </div>
           <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="2.2">
               <div class="advantages__img">
                   <svg class="icon-svg icon-svg-advantages-3 "><use xlink:href="/its-client/img//sprite.svg#advantages-3"></use></svg>
               </div>
               <div class="advantages__name">Полный цикл производства</div>
               <div class="advantages__text">Полный цикл производства от лесозаготовок до конечной продукции. 4 цеха по производству кабельных барабанов</div>
           </div>
           <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="3">
               <div class="advantages__img">
                   <svg class="icon-svg icon-svg-advantages-4 "><use xlink:href="/its-client/img//sprite.svg#advantages-4"></use></svg>
               </div>
               <div class="advantages__name">Комплексные решения</div>
               <div class="advantages__text">Наша команда обладает большым опытом в производстве кабельных деревянных барабанов. Предлагаем комплексное решение по комплектации метизами, металлоизделиями, а так же по сборке барабанов.</div>
           </div>
           <div class="block-bottom">
               <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="3.6">
                   <div class="advantages__img">
                       <svg class="icon-svg icon-svg-advantages-5 "><use xlink:href="/its-client/img//sprite.svg#advantages-5"></use></svg>
                   </div>
                   <div class="advantages__name">Не резидент РФ?</div>
                   <div class="advantages__text">Организуем экспортную поставку! Широкая география поставок. Затаможка в течении часа. Водитель на загрузке получает полный пакет документов!</div>
               </div>
               <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="4.2">
                   <div class="advantages__img">
                       <svg class="icon-svg icon-svg-advantages-6 "><use xlink:href="/its-client/img//sprite.svg#advantages-6"></use></svg>
                   </div>
                   <div class="advantages__name">Участок сборки</div>
                   <div class="advantages__text">Если вы не обладаете участком сборки, вы можете заказать эту услугу у нас.</div>
               </div>
               <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="5">
                   <div class="advantages__img">
                       <svg class="icon-svg icon-svg-advantages-7 "><use xlink:href="/its-client/img//sprite.svg#advantages-7"></use></svg>
                   </div>
                   <div class="advantages__name">Доставка</div>
                   <div class="advantages__text">Организуем доставку кабельных барабанов по самым низким расценкам автоперевозчиков.</div>
               </div>
           </div>
       </div>
    </div>
    ') !!}
</div>
</div>

<footer class="footer footer_inner">
<div class="footer__wrapper">
<div class="footer__text">© Copyright</div>
</div>
</footer>
@endsection