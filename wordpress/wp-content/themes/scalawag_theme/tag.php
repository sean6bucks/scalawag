<?php get_header(); ?>
<?php get_template_part( 'minheader' ); ?>
    
<div class="articles-headline">
    <h3><?php _e( 'Posts Tagged "', 'html5blank' ); echo single_tag_title('', false); echo '"'; ?></h3>
</div>

<div class="posts-wrapper">

    <?php get_template_part('search-loop'); ?>
    
    <?php get_template_part('pagination'); ?>

</div>

<?php get_footer(); ?>