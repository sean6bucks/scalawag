<?php query_posts('category_name=Featured&showposts=6'); while (have_posts()) : the_post(); ?>

<?php if ( has_post_thumbnail()) : 
    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
        if ($post_image_id) {
            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
            if ($thumbnail) (string)$thumbnail = $thumbnail[0];
        } ?>
    <div class="featured-post slide" style="background-image: url('<?php echo $thumbnail; ?>');">
        <div class="featured-body">
            <h1 class="featured-headline"><?php the_title(); ?></h1>
            <?php html5wp_excerpt('html5wp_custom_post'); ?>
            <div class="explore-box"><h4>Explore</h4></div>
        </div>
    </div>
<?php endif; ?>

<?php endwhile; ?>

<?php wp_reset_query(); ?>