<?php
/**
 * ログインしたユーザーのみWebサイトの閲覧可能にする
 */
function my_require_login() {
    global $pagenow;
    if ( !is_user_logged_in() && $pagenow !== 'wp-login.php' ) {
        auth_redirect();
    }
}
add_action( 'init', 'my_require_login' );

