import './bootstrap';

$('.item-btn').click(function () {

    const id = $(this).attr('data-id');

    if ($(this).hasClass('show')) {
        $(this).removeClass('show');
        $('#'+id).removeClass('show');
    } else {
        $(this).addClass('show');
        $('#'+id).addClass('show');
    }
})

$('.twoLineMenuMB').click(function (){
    $(this).toggleClass('show')
    $('.menu-detail-mb').toggleClass('show')
    $('.header-wrap').toggleClass('show-menu-mobile')
})
