<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<title><?php if( !is_home() ){ wp_title(' - ', true, 'right'); } ?><?php bloginfo('name'); ?></title>
<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('hotel-common.js', get_template_directory_uri() . '/js/common.js');
wp_head();
?>
</head>
<body <?php body_class(); ?>>
    <header class="globalHeader">
        <div class="inner">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo01.png" height="40" width="300" alt="ホテル・技評リゾート石垣島"></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            <?php get_search_form(); ?>
        </div>
    </header><!-- /.globalHeader -->

<?php if( is_home() ): ?>
    <div class="homeVisual"><span>石垣島でのんびりゆったりと。</span></div>
<?php endif; ?>

<nav class="globalNavi">
<?php 
$args = array(
    'menu' => 'global-navigation', // 管理画面で作成したメニューの名前
    'container' => false, // <ul>タグを囲んでいる<div>タグを削除
);
wp_nav_menu($args);
?>
</nav><!-- /.globalNavi -->

<?php if( !is_home() ): ?>
<div class="breadcrumbs">
<?php
// パンくずリストを表示
if ( function_exists( 'bcn_display' ) ) {
    bcn_display();
}
?>
</div>
<?php endif; ?>