<?php query_posts('category_name=Words&showposts=4'); while (have_posts()) : the_post(); ?>

<div class="post-preview" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    
    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <div class="article-preview-image">
            <?php the_post_thumbnail(array(250, 250)); // Declare pixel size you need inside the array ?>
        </div>
    <?php else: ?>
        <div class="preview-image"></div>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <div class="article-preview-body">
        <!-- post title -->
        <h3 class="article-preview-headline"><?php the_title(); ?></h3>
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

<?php endwhile; ?>

<?php wp_reset_query(); ?>