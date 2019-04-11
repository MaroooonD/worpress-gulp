<?php 
if( !is_home() ) : //トップページの時は適用しない
    $args = array(
        'post_type' => 'post', //投稿記事だけを指定
        'posts_per_page' => 3, //最新記事を3件表示
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
?>
<section class="recentEntries">
    <h1 class="type-C">最新記事</h1>
    <div class="entries">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section class="entry">
            <a href="<?php the_permalink() ?>">
            <?php if( has_post_thumbnail() ): ?>
                <figure><?php the_post_thumbnail( array(50, 50) ); ?></figure>
            <?php else: ?>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_50x50.png" height="50" width="50" alt=""></figure>
            <?php endif; ?>
                <div class="text">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
            </a>
        </section><!-- /.entry -->
        <?php endwhile; ?>
    </div><!-- /.entries -->
</section><!-- /.recentEntries -->
<?php 
    endif;
endif;
?>