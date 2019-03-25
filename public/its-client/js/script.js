(function ($) {
    'use strict'

    $(document).ready(function () {
        svg4everybody({})

        // var doFullpage = document.documentElement.clientWidth;
        // if (doFullpage > 768) {
        var $fullpage = $('#fullpage')
        $fullpage.fullpage({
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
            autoScrolling: true,
            afterLoad: function (origin, destination, direction) {
                if (origin) {
                    $fullpage.find('> .section').each(function (index) {
                        var $wow = $(this).find('.anim')
                        $wow.each(function (i) {
                            var effect = $(this).data('effect')
                            if (index !== destination.index) {
                                $(this)
                                    .removeClass(effect)
                                    .removeClass('animated')
                                    .addClass('none')
                            } else {
                                $(this)
                                    .addClass(effect)
                                    .addClass('animated')
                                    .removeClass('none')
                            }
                        })
                    })
                }
            },
        });

        var WHeight = $('.wood-content__right_wrapper').height() - 55,
            WHT = $('.wood-content__left').height()

        if ($(window).width() <= 1080) {
            WHeight = 429;
        } 
        if ($(window).width() <= 767) {
            WHeight = 398;
        } 
        $('.wood-content__left').height(WHeight)

        var toggleClickBrums = false
        $('.wood-content__btn').on("click", function () {
            if (toggleClickBrums === false) {
                $('.wood-content__left').css({
                    height: WHT
                })
                $('.btn-drums').children('span').text('Свернуть')
                toggleClickBrums = true
            } else {
                $('.wood-content__left').height(WHeight)
                $('.btn-drums').children('span').text('Подробнее')
                toggleClickBrums = false
            }
            $(this).toggleClass('active')
        })


        $('.btn-1').on('click', function () {
            $('.norms__left').toggleClass('active')
            $(this).toggleClass('active')
        })

        $('.btn-2').on('click', function () {
            $('.norms__right').toggleClass('active')
            $(this).toggleClass('active')
        })

        $('.header__menu-icon').on('click', function () {
            $('.header-menu__open').toggleClass('open-menu')
            $('.header__left').toggleClass('open-menu')
            $('.home__section').toggleClass('open-menu')
            $('.about').toggleClass('open-menu')
            $('.norms__wrapper').toggleClass('open-menu')
            $('.wood').toggleClass('open-menu')
            $(this).toggleClass('open-menu')
        })

        new WOW().init();

        var listElementAnimate = $(".my-animate");

        listElementAnimate.each(function (i, value) {

            $(value).addClass("animated").css({
                "animation-duration": $(value).data("duration") + "s",
                "animation-delay": $(value).data("delay") + "s"
            })

            setTimeout(function () {
                $(value).css("visibility", "visible");
            }, $(value).data("delay") * 1000)

        })
        if ($(window).width() < 768) {
            $('.header__menu-icon').on('click', function () {
                $('body').toggleClass('active')
            })
        } else {
            return false;
        }

        var mySwiper = (".swiper-container-mobile")
        function initSwiper() {
            var screenWidth = $(window).width();
            if(screenWidth < 768 && mySwiper == (".swiper-container-mobile")) {            
                mySwiper = new Swiper('.swiper-container-mobile', {            
                    spaceBetween: 0,
                    slidesPerView: 'auto',
                    navigation: {
                        nextEl: '.swiper-button-next-mobile',
                        prevEl: '.swiper-button-prev-mobile',
                    }
                });
            } else if (screenWidth > 768 && mySwiper != (".swiper-container-mobile")) {
                mySwiper.destroy();
                mySwiper = (".swiper-container-mobile");
                jQuery('.swiper-wrapper').removeAttr('style');
                jQuery('.swiper-slide').removeAttr('style');            
            }        
        }

        initSwiper()
          

            
        })


          //Добавляем свои иконки для кнопок увеличить/уменьшить на карту
          function CustomZoomControl(controlDiv, map) { 
              var controlUIzoomIn= document.getElementById('zoom-in'),
                  controlUIzoomOut= document.getElementById('zoom-out');
              controlDiv.appendChild(controlUIzoomIn);
              controlDiv.appendChild(controlUIzoomOut);

              //Делаем привязку для кнопок увеличить/уменьшить при клике
              google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
                  map.setZoom(map.getZoom()+1)
              });
              google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
                  map.setZoom(map.getZoom()-1)
              });
          }

          var zoomControlDiv = document.createElement('div');
          var zoomControl = new CustomZoomControl(zoomControlDiv, map);

          //Помещаем кнопки увеличить/уменьшить на карту в левый верхний угол
          map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(zoomControlDiv);

})(jQuery)