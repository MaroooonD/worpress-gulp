<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">

            <div class="aboutBlock block">
                <div class="banners">
                    <ul>
                        <li><a href="<?php echo get_permalink( 50 ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_about.png" height="97" width="320" alt="ホテル紹介"></a></li>
                        <li><a href="<?php echo get_permalink( 55 ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_access.png" height="97" width="320" alt="アクセス"></a></li>
                    </ul>
                </div>
            </div><!-- /.aboutBlock -->

            <section class="newsBlock block">
                <h1 class="type-B"><span>新着情報</span></h1>
                <?php get_template_part('loop', 'main'); ?>
            </section><!-- /.newsBlock -->

        </div><!-- /.mainContents -->

        <aside class="subContents">
        <?php get_sidebar(); ?>
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>