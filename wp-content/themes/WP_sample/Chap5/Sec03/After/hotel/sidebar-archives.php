<section class="recentArchives">
    <h1 class="type-C">月別アーカイブ</h1>
    <ul class="archives">
    <?php 
    $args = array(
        'type' => 'monthly', //月別を指定
        'show_post_count' => true, //投稿数を表示
    );
    wp_get_archives( $args );
    ?>
    </ul><!-- /.archives -->
</section><!-- /.recentArchives -->