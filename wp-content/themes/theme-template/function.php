<?php

add_theme_support('menus');

register_sidebar(
    array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

add_theme_support('post-thumbnails');

function shortcode_tw() {
    return '<a href="http://twitter.com/taguchi">@taguchi</a>をフォローしてね！';
}
add_shortcode('tw', 'shortcode_tw');