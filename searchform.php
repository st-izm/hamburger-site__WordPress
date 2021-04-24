<form role="search" method="get" action="<?php echo esc_url( home_url('/') ); ?>" >
    <label for="search"><?php home_url( '/' ); ?></label>
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" class="p-search__textArea" placeholder="&#xF002;" style="font-family:Arial, FontAwesome">
    <input type="submit" name="button" class="p-search__button" value="検索">
</form>
