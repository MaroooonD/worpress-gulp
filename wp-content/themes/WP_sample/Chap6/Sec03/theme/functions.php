<?php 
/**
 * ログイン画面に独自のCSSを読み込ませる
 */
add_action('admin_print_styles', 'print_admin_stylesheet'); 
add_action('login_head', 'print_admin_stylesheet'); 
function print_admin_stylesheet() {
    echo '<link href="' . get_template_directory_uri() . '/css/admin.css" type="text/css" rel="stylesheet" media="all" />' . PHP_EOL;
}

/**
 * 投稿画面を表示した時のモード指定する
 */
add_filter( 'wp_default_editor', 'my_wp_default_editor' );
function my_wp_default_editor(){
    return 'tinymce'; 
}