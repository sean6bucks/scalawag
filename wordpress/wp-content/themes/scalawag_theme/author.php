<?php get_header(); ?>
<?php get_template_part( 'minheader' ); ?>
	
<div class="articles-headline">
    <h3><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h3>
</div>

<div class="posts-wrapper">

    <?php get_template_part('search-loop'); ?>
    
    <?php get_template_part('pagination'); ?>

</div>

<?php get_footer(); ?>
