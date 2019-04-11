<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <section class="planBlock block">
            <h1 class="type-A"><?php single_term_title( '' ); ?>の宿泊プラン</h1>
            <div class="plans">
                <?php get_template_part('loop', 'plan'); ?>
            </div><!-- /.plans -->
        </section><!-- /.planBlock -->
    </div><!-- /.mainContents -->

    <aside class="subContents">
        <?php get_sidebar('beds'); ?>
    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>