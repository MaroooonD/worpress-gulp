<div class="wrapper">
    <section class="recentCategories">
        <h1 class="type-C">ベッド一覧</h1>
        <ul class="categories">
        <?php
        $args = array(
            'title_li' => '', //見出しを削除
            'show_count' => true, //投稿数を表示
            'taxonomy' => 'bed', //タクソノミーを指定
        );
        wp_list_categories( $args );
        ?>
        </ul>
    </section><!-- /.recentCategories -->
</div><!-- /.wrapper -->