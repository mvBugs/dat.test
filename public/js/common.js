$(function () {
    var location = window.location.href;
    var cur_url = '/' + location.split('/').pop();
    $('.header-menu__open-wrapper li').each(function () {
        var link = $(this).find('a').attr('href');
        if(cur_url == link) {
            $(this).find('a').addClass('active');
        }
    });
});