$(function () {
    $('.header-menu__open-wrapper li').on('click', function () {
        $('.header-menu__open').toggleClass('open-menu')
        $('.header__left').toggleClass('open-menu')
        $('.home__section').toggleClass('open-menu')
        $('.about').toggleClass('open-menu')
        $('.norms__wrapper').toggleClass('open-menu')
        $('.wood').toggleClass('open-menu')
        $('.header__menu-icon').toggleClass('open-menu')
    })

    $(".callback-bt").click(function(){
        var PhoneNumber = $(this).data('phone');
        PhoneNumber=PhoneNumber.replace("Phone:","");
        window.location.href="tel://"+PhoneNumber;
    });
})
