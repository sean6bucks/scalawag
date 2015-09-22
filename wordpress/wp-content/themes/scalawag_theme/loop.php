<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="post-preview" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    
    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : 
    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
        if ($post_image_id) {
            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
            if ($thumbnail) (string)$thumbnail = $thumbnail[0];
        } ?>
        <div class="article-preview-image" style="background-image: url('<?php echo $thumbnail; ?>');">
        </div>
    <?php else: ?>
        <div class="preview-image"></div>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <div class="article-preview-body">
        <!-- post title -->
        <h4 class="article-preview-headline"><?php the_title(); ?></h4>
        <!-- /post title -->

        <!-- post excerpt -->
        <?php html5wp_excerpt('html5wp_index'); ?>

        <!-- post details -->
        <div class="article-preview-details">
            <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
            <!-- /post details -->
        </div>
    </div>
    </a>
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
