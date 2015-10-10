<?php get_header(); ?>
<?php get_template_part( 'minheader' ); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
		<div class="post-featured-image">
			<?php the_post_thumbnail(); // Fullsize image for the single post ?>
		</div>
	<?php endif; ?>
	<!-- /post thumbnail -->
	<!-- post details -->
	<div class="publish-information">
		<p><h4 class="post-category"><?php exclude_post_categories( '5,1' ); ?></h4> | <span class="post-date"><?php the_time('F j, Y'); ?></span></p>
	</div>
	<!-- post title -->
	<div class="post-headline">
		<h2><?php the_title(); ?></h2>
		<h5 class="author"> <?php _e( 'By' ); ?> <?php the_author_posts_link(); ?></h5>
	</div>
	<!-- /post title -->
	<!-- /post details -->
	<div class="text-wrapper">
		<?php the_content(); // Dynamic Content ?>
		
		<?php get_template_part( 'gallery' ); ?>
	</div>
	<div id="tags">
	<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
	</div>

</article>
<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>
