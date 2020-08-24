<form action="<?php echo get_site_url() ?>" method="get" role="search" class="search-form">
    <input type="search" name="s" class="search-field" placeholder="Search.." value="<?php the_search_query(); ?>" />
    <input type="submit" class="search-submit" value="">
</form>

