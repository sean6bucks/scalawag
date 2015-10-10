<?php get_header(); ?>
<?php get_template_part( 'minheader' ); ?>

<div class="articles-headline">
    <h3 class="search-headline"><?php echo sprintf( __( '%s Search Results for "', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); echo('"') ?></h3>
</div>

<div class="posts-wrapper">

	<?php get_template_part('search-loop'); ?>

	<?php get_template_part('pagination'); ?>

</div>

<?php get_footer(); ?>
