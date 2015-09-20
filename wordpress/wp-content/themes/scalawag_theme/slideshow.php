<?php query_posts('category_name=Featured&showposts=6'); while (have_posts()) : the_post(); ?>

<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
    <div class="featured-post slide">
        <?php the_post_thumbnail('full', array('class' => "featured-image")); ?>
        <h2 class="featured-headline"><?php the_title(); ?></h2>
    </div>
<?php endif; ?>

<?php endwhile; ?>

<?php wp_reset_query(); ?>