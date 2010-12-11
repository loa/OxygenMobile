$(document).ready(function( ) {
    $('.main-item')
        .prepend('<div class="touch"></div>') 
        .children('.touch').click(function() {
            if($(this).siblings('.item-subject').find('.item-nav').length != 0)
                window.location = $(this).siblings('.item-subject')
                    .find('.item-nav').find('a').attr('href');
        })
        .end()
        .children('.icon').click(function() {
            if($(this).siblings('.item-subject').find('.item-nav').length != 0)
                window.location = $(this).siblings('.item-subject')
                    .find('.item-nav').find('a').attr('href');
    });

    $('.item-subject').click(function() {
        console.log(this);
        window.location = $(this).find('.hn').children('a').attr('href');
    });

    $('.item-info').click(function() {
        window.location = $(this).find('a').attr('href');
    });
});
