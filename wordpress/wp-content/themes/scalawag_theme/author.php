<?php get_header(); ?>
<?php get_template_part( 'minheader' ); ?>

<?php if (have_posts()): the_post(); ?>
	
	<div class="articles-headline">
	    <h3><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h3>
	</div>

<?php if ( get_the_author_meta('description')) : ?>

<?php echo get_avatar(get_the_author_meta('user_email')); ?>

	<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

	<?php echo wpautop( get_the_author_meta('description') ); ?>

<?php endif; ?>

<div class="posts-wrapper">

    <?php get_template_part('search-loop'); ?>
    
    <?php get_template_part('pagination'); ?>

</div>
	<!-- /article -->


<?php else: ?>

	<!-- article -->
	<article>

		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>
