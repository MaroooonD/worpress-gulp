jQuery(function () {
    var nav = $('.menu > ul');
    $('li', nav)
        .mouseover(function () {
            $('ul', this).stop().slideDown('fast');
        })
        .mouseout(function () {
            $('ul', this).stop().slideUp('fast');
        });
});
