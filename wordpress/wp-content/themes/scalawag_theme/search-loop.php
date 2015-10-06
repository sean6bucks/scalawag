<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="search-post-preview" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <!-- post thumbnail -->
        <?php if ( has_post_thumbnail()) : 
        $post_image_id = get_post_thumbnail_id($post_to_use->ID);
            if ($post_image_id) {
                $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
                if ($thumbnail) (string)$thumbnail = $thumbnail[0];
            } ?>
            <div class="search-preview-image" style="background-image: url('<?php echo $thumbnail; ?>');">
            </div>
        <?php else: ?>
            <div class="preview-image"></div>
        <?php endif; ?>
    </a>
    <!-- /post thumbnail -->
    <div class="article-preview-body">
        <!-- psot category -->
        <h4 class="category-tag"><?php exclude_post_categories( '5,1' ); ?></h4>
        <!-- post title -->
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h1 class="article-preview-headline"><?php the_title(); ?></h1>
            <!-- post excerpt -->
            <?php html5wp_excerpt('html5wp_index'); ?>

            <!-- post details -->
            <div class="search-preview-details">
                <h5 class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h5>
                <!-- /post details -->
            </div>
        </a>
    </div>
</div>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>
        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>
    <!-- /article -->

<?php endif; ?>