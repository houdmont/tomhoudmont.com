// Author: Tom Houdmont

$(function() {

    $heading = $('h1');

    $('.lettering, a').lettering();
    $('.fittext').fitText(0.8);

    $('.name').on({
        mouseenter: function() {
            c = $(this).attr('class');
            $heading.find('.'+c).css('top', '3px');
        },
        mouseleave: function() {
            c = $(this).attr('class');
            $heading.find('span').css('top', '0px');
        }
    }, 'span');
});