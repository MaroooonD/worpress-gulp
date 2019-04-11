jQuery(function($) {

    // フッターのページに戻るボタン
    $('#js-pagetop').on({
        'click': function() {
            $('html,body').animate({scrollTop:0});
        }
    });

});