@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
    <div class="wood wood_metallic">
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
                {!! \BlockVisualEditor::render('metallic-content', '
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
                                <a href="/its-client/img/metallic-img.png" data-fancybox="gallery">
                                    <img src="/its-client/img/metallic-img.png" alt="">
                                </a>
                            </div>
                            <div class="wood-content__right-image" data-toggle="modal" data-target="#table-modal">
                                <img src="/its-client/img/metallic-image.png" alt="">
                                <button class="search">
                                    <svg class="icon-svg icon-svg-search "><use xlink:href="/its-client/img/sprite.svg#search"></use></svg>
                                </button>
                            </div>
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
                    </div>
                </div>
                ') !!}
            </div>
            <div class="about about_advantages">
                <div class="about__wrapper">
                    <h1 class="about__name big-name">Преимущества</h1>
                    <div class="advantages">
                        {!! \BlockVisualEditor::render('advantages-block-metallic', '
                        <div class="advantages__wrapper">
                            <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="1">
                                <div class="advantages__img">
                                    <svg class="icon-svg icon-svg-advantages-5 "><use xlink:href="/its-client/img/sprite.svg#advantages-5"></use></svg>
                                </div>
                                <div class="advantages__name">Не резидент РФ?</div>
                                <div class="advantages__text">Организуем экспортную поставку! Широкая география поставок. Затаможка в течении часа. Водитель на загрузке получает полный пакет документов!</div>
                            </div>
                            <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="1.6">
                                <div class="advantages__img">
                                    <svg class="icon-svg icon-svg-advantages-7 "><use xlink:href="/its-client/img/sprite.svg#advantages-7"></use></svg>
                                </div>
                                <div class="advantages__name">Доставка</div>
                                <div class="advantages__text">Организуем доставку кабельных барабанов по самым низким расценкам автоперевозчиков</div>
                            </div>
                            <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="2.2">
                                <div class="advantages__img">
                                    <svg class="icon-svg icon-svg-wood-5 "><use xlink:href="/its-client/img/sprite.svg#wood-5"></use></svg>
                                </div>
                                <div class="advantages__name">Широкая география поставок</div>
                                <div class="advantages__text">Россия, СНГ, ближнее зарубежье</div>
                            </div>
                            <div class="advantages__block my-animate fadeInUp" data-duration="2" data-delay="2.8">
                                <div class="advantages__img">
                                    <svg class="icon-svg icon-svg-wood-4 "><use xlink:href="/its-client/img/sprite.svg#wood-4"></use></svg>
                                </div>
                                <div class="advantages__name">100% лояльности</div>
                                <div class="advantages__text">Клиенты возвращаются к нам</div>
                            </div>
                        </div>
                    ') !!}
                    </div>
                </div>
            </div>

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
                                <div class="map" id="google-map">
                                    <div id="google-container"></div>
                                    <div class="arrows-button">
                                        <div id="zoom-in">+</div>
                                        <div id="zoom-out">-</div>
                                    </div>
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
        var latitude = {{ variable('contact_latitude', '55.847069') }},
            longitude = {{ variable('contact_longitude', '49.153202') }},
            map_zoom = {{ variable('contact_map_zoom', '17') }};

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
            position: {lat: latitude, lng: longitude},
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
                        {!! \BlockVisualEditor::render('modal_metallic', '
                            <div class="norms__wrapper">
                            <div class="new-image">
                                <img src="/its-client/img/metallic-image.png" alt="">
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
                            <div class="typography">
                                    <table>
                                        <caption>Нормы загрузки</caption>
                                        <tr>
                                        <th>№</th>
                                        <th>Ø1</th>
                                        <th>Ø2</th>
                                        <th>Ø4</th>
                                        <th>К3(Ø5)</th>
                                        <th>К4 (Ø5)</th>
                                        <th>е</th>
                                        <th>L1</th>
                                        <th>L2</th>
                                        <th>K1</th>
                                        <th>K2</th>
                                        </tr>
                                        <tr>
                                        <td>№8</td>
                                        <td>798</td>
                                        <td>450</td>
                                        <td>53</td>
                                        <td>61</td>
                                        <td>61</td>
                                        <td>140</td>
                                        <td>346</td>
                                        <td>240</td>
                                        <td>30</td>
                                        <td>40</td>
                                        </tr>
                                        <tr>
                                        <td>№10</td>
                                        <td>992</td>
                                        <td>546</td>
                                        <td>53</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>125</td>
                                        <td>610</td>
                                        <td>500</td>
                                        <td>30</td>
                                        <td>40</td>
                                        </tr>
                                        <tr>
                                        <td>№12</td>
                                        <td>1196</td>
                                        <td>644</td>
                                        <td>80</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>227</td>
                                        <td>650</td>
                                        <td>500</td>
                                        <td>60</td>
                                        <td>200</td>
                                        </tr>
                                        <tr>
                                        <td>№14</td>
                                        <td>1376</td>
                                        <td>748</td>
                                        <td>80</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>227</td>
                                        <td>860</td>
                                        <td>710</td>
                                        <td>70</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                        <td>№17</td>
                                        <td>1710</td>
                                        <td>800</td>
                                        <td>75</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>227</td>
                                        <td>1390</td>
                                        <td>980</td>
                                        <td>70</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                        <td>№18</td>
                                        <td>1800</td>
                                        <td>888</td>
                                        <td>104</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>297</td>
                                        <td>1170</td>
                                        <td>990</td>
                                        <td>70</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                        <td>№19</td>
                                        <td>1894</td>
                                        <td>800</td>
                                        <td>75</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>260</td>
                                        <td>1400</td>
                                        <td>1000</td>
                                        <td>50</td>
                                        <td>100</td>
                                        </tr>
                                        <tr>
                                        <td>№20</td>
                                        <td>1948</td>
                                        <td>798</td>
                                        <td>92</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>297</td>
                                        <td>1120</td>
                                        <td>990</td>
                                        <td>80</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                        <td>№22</td>
                                        <td>2190</td>
                                        <td>1280</td>
                                        <td>104</td>
                                        <td>60</td>
                                        <td>120</td>
                                        <td>297</td>
                                        <td>1410</td>
                                        <td>1250</td>
                                        <td>70</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                        <td>№25</td>
                                        <td>2516</td>
                                        <td>1600</td>
                                        <td>150</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>2380</td>
                                        <td>2200</td>
                                        <td>130</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                        <td>№26</td>
                                        <td>2616</td>
                                        <td>1700</td>
                                        <td>600</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>1660</td>
                                        <td>1500</td>
                                        <td>80</td>
                                        <td>300</td>
                                        </tr>
                                        <tr>
                                        <td>№28</td>
                                        <td>2800</td>
                                        <td>1800</td>
                                        <td>140</td>
                                        <td>63</td>
                                        <td>63</td>
                                        <td>500</td>
                                        <td>2120</td>
                                        <td>1800</td>
                                        <td>100</td>
                                        <td>250</td>
                                        </tr>
                                        <tr>
                                            <td>№30</td>
                                            <td>3050</td>
                                            <td>1800</td>
                                            <td>600</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1660</td>
                                            <td>1520</td>
                                            <td>80</td>
                                            <td>300</td>
                                        </tr>
                                        <tr>
                                            <td>№32</td>
                                            <td>3200</td>
                                            <td>2000</td>
                                            <td>125</td>
                                            <td>63</td>
                                            <td>63</td>
                                            <td>600</td>
                                            <td>2150</td>
                                            <td>1880</td>
                                            <td>100</td>
                                            <td>250</td>
                                        </tr>
                                        <tr>
                                            <td>№36</td>
                                            <td>3600</td>
                                            <td>2400</td>
                                            <td>120</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>2150</td>
                                            <td>1990</td>
                                            <td>200</td>
                                            <td>400</td>
                                        </tr>
                                    </table>

                                        <a href="#">
                                            <svg class="icon-svg icon-svg-download "><use xlink:href="/its-client/img/sprite.svg#download"></use></svg>
                                            <span></span>
                                            <span>Нормы загрузки</span>
                                        </a>
                                        <a href="#">
                                            <svg class="icon-svg icon-svg-download "><use xlink:href="/its-client/img/sprite.svg#download"></use></svg>
                                            <span></span>
                                            <span>Нормы намотки кабеля</span>
                                        </a>
                                        <h5 style="color: white">
                                            * - Данные в таблице приведены справочно и могут варьироваться в зависимости от размера полуприцепов. В силу особенностей погрузки может быть перегруз или недогруз до 10% .
                                        </h5>
                                        <p>
                                            <img src="/its-client/img/norms-img.png" alt="">

                                        </p>
                            </div>
                        </div>
                        ') !!}
                    </div>
                </div>
            </div>
        </div>
@endsection