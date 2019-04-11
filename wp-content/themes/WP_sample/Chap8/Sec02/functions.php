<?php
/**
 * No Image画像を表示する関数
 */
function display_thumbnail() {
    if ( has_post_thumbnail() ) {
        echo '<a href="'.get_permalink().'">'.get_the_post_thumbnail( 'thumbnail' ).'</a>';
    }else {
        echo '<a href="'.get_permalink().'"><img src="'.get_template_directory_uri().'/images/common/noimage_180x180.png" height="180" width="180" alt=""></a>';
    }
}

/**
 * カスタムフィールドの画像を表示する関数
 */
function display_image( $field_name, $size = 'medium' ) {
    $image = get_field( $field_name );
    if ( !empty( $image ) ) {
        $url = $image['sizes'][ $size ]; //画像のURL
        $width = $image['sizes'][ $size.'-width' ]; //画像の横幅
        $height = $image['sizes'][ $size.'-height' ]; //画像の縦幅
        echo '<img src="' . $url . '" width="' . $width . '" height="' . $height . '" />';
    }
}
