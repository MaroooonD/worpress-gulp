<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
            <?php if( is_month() ): ?>
                <h1 class="type-A"><?php the_time('Y年m月'); ?></h1>
            <?php else: ?>
                <h1 class="type-A"><?php wp_title(''); ?></h1>
            <?php endif; ?>
            <section class="newsBlock block">
            <?php get_template_part('loop', 'main'); ?>
            </section><!-- /.newsBlock -->
        </div><!-- /.mainContents -->

        <aside class="subContents">
            <div class="wrapper">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>       
            </div><!-- /.wrapper -->
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>