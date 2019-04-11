<form action="<?php echo home_url('/'); ?>" method="get" class="searchform">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="サイト内検索">
    <input type="submit" id="searchSubmit" value="">
</form>