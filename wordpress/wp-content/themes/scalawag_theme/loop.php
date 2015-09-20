<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="post-preview" id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="preview-image">
				<?php the_post_thumbnail(array(250,250)); // Declare pixel size you need inside the array ?>
			</div>
		<?php else: ?>
			<div class="preview-image"></div>
		<?php endif; ?>
		<!-- /post thumbnail -->
		<div class="preview-body">
			<!-- post title -->
			<h2 class="preview-headline"><?php the_title(); ?></h2>
			<!-- /post title -->

			<!-- post excerpt -->
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

			<!-- post details -->
			<div class="preview-details">
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				<!-- /post details -->
				<?php edit_post_link(); ?>
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
