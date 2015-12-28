<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php _e('Search','html5reset'); ?></label>
        <span class="search_wrapper"><input type="search" id="s" name="s" value="" /></span>
        
        <span class="submit_wrapper"><input type="submit" value="<?php _e('Search','html5reset'); ?>" id="searchsubmit" /></span>
    </div>
</form>