@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="wood wood_cable">
        <div class="wood__wrapper">
            <div class="about about_norms">
                <div class="about__wrapper">
                    <h1 class="about__name big-name">{{ $node->name }}</h1>
                </div>
            </div>
            <div class="wood-content">
                <div class="wood-content__button">
                    <a href="@if(!empty($node->getFirstMedia('file'))) {{ $node->getFirstMediaUrl('file') }} @endif">
                        <svg class="icon-svg icon-svg-download "><use xlink:href="/its-client/img/sprite.svg#download"></use></svg>
                        <span class="line"></span>
                        <span>Скачать ГОСТ</span>
                    </a>
                </div>

                {!! \BlockVisualEditor::render('cable-content', '
                    <div class="wood-content__wrapper">
                    <div class="wood-content__left_wrapper">
                        <div class="wood-content__left">
                            <div class="wood-content__left-block">
                                <div class="wood-content__left-name">
                                    Барабаны для кабеля – от производителя!
                                </div>
                                <div class="wood-content__left-text">
                                    Основной тарой для перевозки кабельной продукции различных типов является барабан для кабеля. Согласно ГОСТ барабаны деревянные для электрических кабелей выполняются из древесины как из хвойных так и лиственных пород. Стандартная катушка под кабель представлена несколькими типоразмерами. Прежде чем искать объявления в интернете , каждый клиент должен не только выразить свое желание: «Куплю катушки для кабеля в вашей компании или куплю барабаны кабельные деревянные», но и указать на все дополнительные технические требования (при наличии).
                                </div>
                            </div>
                            <div class="wood-content__left-block">
                                <div class="wood-content__left-foname">
                                    Катушка для кабеля: особенности конструкции
                                </div>
                                <div class="wood-content__left-text">
                                    Для надежного хранения и безопасной транспортировки изолированных проводников применяют барабаны для кабеля различных размеров. Наружные витки провода, намотанные на катушку для кабеля, должны быть надежно защищены от механических повреждений. Поэтому производство деревянных кабельных барабанов связано с тщательной проработкой технологии производства.
                                </div>
                                <div class="wood-content__left-text">
                                    Деревянные кабельные барабаны имеют специальную обшивку. Одним из ее традиционных способов является наложение сплошного ряда досок с последующим креплением на края щек. Через ленту из стали, которая обтягивает барабан для намотки кабеля по краям, обшивка прикрепляется посредством гвоздей. На такой барабан кабель наматывается по определенным правилам и нередко при использовании специализированного оборудования.
                                </div>
                            </div>
                            <div class="wood-content__left-block">
                                <div class="wood-content__left-foname">
                                    Барабан под кабель
                                </div>
                                <div class="wood-content__left-text">
                                    Сегодня производство деревянных барабанов, как основного вида тары для кабельной продукции, регулируется правилами
                                    <span>ГОСТ 5151-79</span>
                                    . В связи с тем, что катушки для кабеля деревянные могут применяться для различных целей и использоваться на разных по направленности объектах, многие производители предлагают не полную, а частичную обшивку. Таким образом, можно купить барабан деревянный с таким видом обшивки, при котором зазоры между ближайшими досками могут составлять до 50% от их ширины. В данном случае на деревянный кабельный барабан цена будет зависеть и от конструкционных особенностей.
                                </div>
                            </div>
                            <div class="wood-content__left-block">
                                <div class="wood-content__left-foname">
                                    Кабельные деревянные барабаны – оптимальное соотношение стоимости и качества
                                </div>
                                <div class="wood-content__left-text">
                                    Если директор какой-либо организации решил: «куплю деревянные барабаны для кабеля», он руководствуется не только качественными характеристиками, но и стоимостью продукции. Наиболее приемлемые предложения исходят от непосредственных производителей такой продукции. Но в большинстве случаев перевозка барабанов с кабелем осуществляется силами продавца и закладывается в стоимость. Многие не имеют возможности специального транспорта, чтобы купить барабан для кабеля на заводе и вывезти его самостоятельно. Поэтому мы предлагаем услугу доставки, что бы вы могли в кратчайшие сроки получить барабаны для кабеля . Если интересуют более дешевые барабаны для кабеля, цена зависит и от способа приобретения.
                                </div>
                                <div class="wood-content__left-text">
                                    Многие в целях экономии просматривают объявления на интернет площадках или в печатных изделиях вида: «Продам катушки для кабеля б/у и новые; продам барабаны для кабеля по невысокой цене». Хорошим вариантом является размещение собственного сообщения, например: «куплю деревянные барабаны для кабеля недорого». Но такой подход целесообразен лишь в том случае, если у вас есть время, потому что достойный отклик на подобное объявление может последовать нескоро. На такие сообщения, как «куплю деревянные барабаны для провода» нередко откликаются перекупщики, у которых обычная катушка для кабеля цену имеет выгодную лишь для самого продавца.
                                </div>
                                <div class="wood-content__left-text">
                                    Наша компания предлагает деревянные барабаны для кабеля с лучшими условиями для клиентов, при этом все катушки и барабаны деревянные для электрических кабелей имеют качество согласно ГОСТ. Приемлемая стоимость, высокий уровень качества – особенности, которыми обладают наши деревянные барабаны для кабеля и прочая продукция. От того, какие вы решили деревянные барабаны для кабеля купить, зависит конечная стоимость изделия.
                                </div>
                            </div>
                        </div>
                        <div class="wood-content__btn">
                            <button class="btn-drums">
                                <svg class="icon-svg icon-svg-arrow "><use xlink:href="/its-client/img/sprite.svg#arrow"></use></svg>
                                <span>Подробнее</span>
                            </button>
                        </div>
                    </div>
                    <div class="wood-content__right">
                        <div class="wood-content__right_wrapper">
                            <div class="wood-content__right-img">
                                <a href="/its-client/img/wood-img.png" data-fancybox="gallery">
                                    <img src="/its-client/img/wood-img.png" alt="">
                                </a>
                            </div>
                            <div class="wood-content__right-image" data-toggle="modal" data-target="#table-modal">
                                <img src="/its-client/img/cable-image.png" alt="">
                                <button class="search">
                                    <svg class="icon-svg icon-svg-search "><use xlink:href="/its-client/img/sprite.svg#search"></use></svg>
                                </button>
                            </div>
                            <p>
                                1 - щека; 2 - шейка; 3 - круг шейки; 4 - шпилька; 5 - втулка
                            </p>
                        </div>
                    </div>
                </div>
               ') !!}

            </div>
            <div class="wood-img">
                <div class="swiper-container swiper-container-mobile">
                    <div class="swiper-wrapper">
                        @foreach($node->getMedia('image') as $image)
                            @if(!empty($image))
                            <div class="swiper-slide">
                                <div class="wood-img__block">
                                    <a href="{{ $image->getUrl() ?? '/its-client/img/wood-img-1.png' }}" data-fancybox="gallery">
                                        <img src="{{ $image->getUrl() ?? '/its-client/img/wood-img-1.png' }}" alt="">
                                        <div class="hide">
                                            <svg class="icon-svg icon-svg-add "><use xlink:href="/its-client/img/sprite.svg#add"></use></svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev-mobile">
                    <svg class="icon-svg icon-svg-arrow-left "><use xlink:href="/its-client/img/sprite.svg#arrow-left"></use></svg>
                </div>
                <div class="swiper-button-next swiper-button-next-mobile">
                    <svg class="icon-svg icon-svg-arrow-right "><use xlink:href="/its-client/img/sprite.svg#arrow-right"></use></svg>
                </div>
            </div>
            @include('fronts.blocks.advantages-block')

            <div class="about about_contacts">
                <div class="about__wrapper">
                    <h1 class="about__name big-name">Контакты</h1>
                    <div class="contacts">
                        <div class="contacts__wrapper">
                            {!! \BlockVisualEditor::render('contacts', '
                               <div class="contacts__left my-animate fadeInLeft" data-duration="2" data-delay="1">
                                   <span class="line"></span>
                                   <p>
                                       <svg class="icon-svg icon-svg-contacts-location "><use xlink:href="/its-client/img/sprite.svg#contacts-location"></use></svg>
                                       Казань, ул. Адоратского д. 50 а, оф. 112
                                   </p>
                                   <p>
                                       <svg class="icon-svg icon-svg-contacts-phone "><use xlink:href="/its-client/img/sprite.svg#contacts-phone"></use></svg>
                                       (843) 239-02-81
                                   </p>
                                   <p>
                                       <svg class="icon-svg icon-svg-contacts-mail "><use xlink:href="/its-client/img/sprite.svg#contacts-mail"></use></svg>
                                       info@bazza.su
                                   </p>
                                   <p>
                                       <svg class="icon-svg icon-svg-contacts-day "><use xlink:href="/its-client/img/sprite.svg#contacts-day"></use></svg>
                                       пн-птн , с 9:00 до 18:00
                                   </p>
                               </div>
                           ') !!}
                            <div class="contacts__right my-animate fadeInRight" data-duration="2" data-delay="1">
                                <div class="map" id="google-map" data-page="contacts">
                                    <div id="google-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Qv3PhtLRXw8_cP707YTs8NwHukEnf9k">
    </script>

    <script>
        var latitude = 55.847569,
            longitude = 49.153202,
            map_zoom = 17;

        var style= [
            {
                "featureType": "all",
                "elementType": "all",
                "stylers": [
                    {
                        "gamma": "0.5"
                    },
                    {
                        "saturation": "-89"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "saturation": "-78"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "saturation": "-88"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "geometry",
                "stylers": [
                    {
                        "saturation": "-31"
                    },
                    {
                        "lightness": "15"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "saturation": "-99"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "hue": "#001cff"
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels",
                "stylers": [
                    {
                        "saturation": "-63"
                    },
                    {
                        "gamma": "1.14"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "gamma": "0.92"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "gamma": "1.29"
                    },
                    {
                        "saturation": "-6"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "hue": "#ff0000"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 100
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "hue": "#bbbbbb"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 26
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [
                    {
                        "hue": "#ffffff"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 100
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                    {
                        "hue": "#000000"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": -100
                    },
                    {
                        "visibility": "off"
                    }
                ]
            }
        ]


        var map_options = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: map_zoom,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style
        }

        var map = new google.maps.Map(document.getElementById('google-container'), map_options);

        var marker = new google.maps.Marker ({
            map: map,
            position: {lat: 55.847109, lng: 49.153111},
            icon: '/its-client/img/marker.svg'
        })
    </script>
    @include('fronts.layouts.inc.footer-inner')
    <div class="modal fade" id="table-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="norms">
                        {!! \BlockVisualEditor::render('modal_cable', '
                            <div class="norms__wrapper">
                            <div class="new-image">
                                <img src="img/metallic-image.png" alt="">
                                <div class="wood-content__right-text">
                                 <span>
                                     "КБ - № барабана
                                 </span>
                                    <span>Ø1 (D1) - диаметры щек</span>
                                    <span>Ø2 (D2) - диаметр шейки</span>
                                    <span>Ø3 (D3) - наружные диаметры втулок</span>
                                    <span>Ø4 (D4) - внутренние диаметры втулок</span>
                                    <span>Ø5 (D5) - диаметры поводковых отверстий</span>
                                    <span>е - расстояния от центров щек до центров поводковых отверстий щеки к шейке</span>
                                    <span>L1 - габаритная ширина барабана</span>
                                    <span>L2 - ширина шейки</span>
                                    <span>K1 - ширина отверстия для ввода кабеля</span>
                                    <span>K2 - длина отверстия для ввода кабеля</span>
                                </div>
                            </div>
                            <div class="norms__left-wood">
                                <div class="norms__left" data-duration="2" data-delay="1">
                                    <div class="norms__table">
                                        <table>
                                            <span class="table__name">Нормы загрузки</span>
                                            <tr>
                                                <th rowspan="3">Номер <br> барабана</th>
                                                <th rowspan="3">Масса, <br> кг </th>
                                                <th rowspan="3"> Кол-во комплектов* в <br> фуре (горизонтально)</th>
                                            </tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr>
                                                <td>8</td>
                                                <td>34</td>
                                                <td>500</td>
                                            </tr>
                                            <tr>
                                                <td>8 а</td>
                                                <td>36.5</td>
                                                <td>500</td>
                                            </tr>
                                            <tr>
                                                <td>8 б</td>
                                                <td>38</td>
                                                <td>500</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>39</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td>10 а</td>
                                                <td>55</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>99</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td>12 а</td>
                                                <td>107</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>165</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>14 а</td>
                                                <td>152</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>14 б</td>
                                                <td>171</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>14 г</td>
                                                <td>176</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>241</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>16 а</td>
                                                <td>237</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>277</td>
                                                <td>70</td>
                                            </tr>
                                            <tr>
                                                <td>17 а</td>
                                                <td>295</td>
                                                <td>70</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>422</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>18 а</td>
                                                <td>422</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>584</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>20 а</td>
                                                <td>555</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>20 б</td>
                                                <td>631</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>759</td>
                                                <td>30</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="norms__tablet-button">
                                        <a href="#">
                                            <svg class="icon-svg icon-svg-download "><use xlink:href="./img/sprite.svg#download"></use></svg>
                                            <span class="line"></span>
                                            <span>Нормы загрузки</span>
                                        </a>
                                    </div>
                                    <div class="norms__left-bottom">
                                        <div class="norms__left-text">
                                            * - Данные в таблице приведены справочно и могут варьироваться в зависимости от размера полуприцепов. В силу особенностей погрузки может быть перегруз или недогруз до 10% .
                                        </div>
                                        <div class="norms__left-img">
                                            <img src="img/norms-img.png" alt="">
                                            <svg class="icon-svg icon-svg-add "><use xlink:href="./img/sprite.svg#add"></use></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ') !!}

                    </div>
                </div>
            </div>
        </div>
@endsection