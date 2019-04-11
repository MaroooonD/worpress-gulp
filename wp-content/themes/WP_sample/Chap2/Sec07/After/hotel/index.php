<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">

            <div class="aboutBlock block">
                <div class="banners">
                    <ul>
                        <li><a href="about.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_about.png" height="97" width="320" alt="ホテル紹介"></a></li>
                        <li><a href="access.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_access.png" height="97" width="320" alt="アクセス"></a></li>
                    </ul>
                </div>
            </div><!-- /.aboutBlock -->

            <section class="newsBlock block">
                <h1 class="type-B"><span>新着情報</span></h1>
                <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                            <?php the_category(); ?>
                            </div>
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                        </div>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
                        <p>[<a href="<?php the_permalink(); ?>">続きを読む</a>]</p>
                    </div>
                    <figure>
                    <?php if( has_post_thumbnail() ): ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></figure>
                    <?php else: ?>
                        <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" height="180" width="180" alt=""></a>
                    <?php endif; ?>
                </article><!-- /.news -->
                <?php 
                    endwhile;
                endif;
                ?>
            </section><!-- /.newsBlock -->

        </div><!-- /.mainContents -->

        <aside class="subContents">
        <?php get_sidebar(); ?>
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>