<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <section class="planBlock block">
            <h1 class="type-A">宿泊プラン</h1>
            <div class="plans">
                <?php get_template_part('loop', 'plan'); ?>
            </div><!-- /.plans -->
        </section><!-- /.planBlock -->
    </div><!-- /.mainContents -->

    <aside class="subContents">
        <?php get_sidebar(); ?>
    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>