<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
            <h1 class="type-A">宿泊プラン</h1>
            <h2 class="title type-B"><span><?php the_title(); ?></span></h2>
            <div class="plan">
                <div class="left">
                    <?php 
                    $image = get_field('picture');
                    $url = $image['sizes'][ 'medium' ]; //中サイズ画像のURL
                    $width = $image['sizes'][ 'medium-width' ]; //中サイズ画像の横幅
                    $height = $image['sizes'][ 'medium-height' ]; //中サイズ画像の縦幅
                    ?>
                    <img src="<?php echo $url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />      
                </div>
                <div class="right">
                     <?php the_content(); ?>  
                </div>
            </div>
            <div class="plan">
                <div class="left">
                    <dl>
                        <dt>価格</dt>
                        <dd><em><?php echo number_format( get_field( 'price' ) ); ?>円/泊</em></dd>
                    </dl>
                    <dl>
                        <dt>ベッド</dt>
                        <dd>
                        <?php 
                        $bed = get_field('bed');
                        foreach ($bed as $key => $value) {
                            echo $value;
                            if ( $value != end( $bed ) ) {
                                echo '<br>';
                            }
                        }
                        ?>
                        </dd>
                    </dl>
                </div>
                <div class="right">
                    <dl>
                        <dt>チェックイン</dt>
                        <dd><?php echo nl2br( get_field( 'checkin' ) ); ?></dd>
                    </dl>
                    <dl>
                        <dt>朝食</dt>
                        <dd>
                        <?php if( get_field('food') ): ?>
                            あり
                        <?php else: ?>
                            なし
                        <?php endif; ?>
                        </dd>
                    </dl>
                </div>
            </div>
        </article><!-- /.page -->
        <?php 
        endwhile;
    endif;
    ?>    
    </div><!-- /.mainContents -->

    <aside class="subContents">
        <?php get_sidebar(); ?>
    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>