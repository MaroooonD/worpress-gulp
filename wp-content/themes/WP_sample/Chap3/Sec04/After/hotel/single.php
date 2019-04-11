<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>              
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                <h1 class="type-A">新着情報</h1>
                <h2 class="title type-B"><span><?php the_title(); ?></span></h2>

                <div class="entryInfo">
                    <div class="categories">
                        <?php the_category(); ?>
                    </div>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                </div><!-- /.entryInfo -->

                <section class="content">
                <?php the_content(); ?>
                </section><!-- /.content -->

                <nav class="postNavi">
                    <span class="prev"><?php previous_post_link('%link'); ?></span>
                    <span class="next"><?php next_post_link('%link'); ?></span>
                </nav>
            </article><!-- /.entry -->
            <?php 
                endwhile;
            endif;
            ?>              
        </div><!-- /.mainContents -->

        <aside class="subContents">
            <div class="wrapper">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div><!-- /.wrapper -->
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>