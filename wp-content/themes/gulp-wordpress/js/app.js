jQuery(function () {
    var nav = $('.nav');
    $('li', nav)
        .mouseover(function () {
            $('ul', this).stop().slideDown('fast');
        })
        .mouseout(function () {
            $('ul', this).stop().slideUp('fast');
        });
});

