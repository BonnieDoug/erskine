$(function () {
    // your current click function
    $('.scrolling').on('click', function (e) {

        $('html, body').animate({
            scrollTop: +($("#" + $(this).data('hash')).offset().top) + -15 + 'px'
        }, 1000, 'swing');
    });

    // *only* if we have anchor on the url
    if (window.location.hash) {

        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: +($(window.location.hash).offset().top) + -60 + 'px'
        }, 1000, 'swing');
    }

});
$(document).ready(function () {

    $('select').material_select();
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $(".match-height").matchHeight();
    $(".dropdown-button").dropdown({
        belowOrigin: true
    });

    var footerOffset = $('body > footer').first().length ? $('body > footer').first().offset().top : 0;
    var bottomOffset = footerOffset;
    $('.pinned').pushpin({
        top: ($('#index-banner').height() - 50),
        offset: $('nav').height(),
        bottom: bottomOffset
    });
    $('ul.tabs').tabs();


});