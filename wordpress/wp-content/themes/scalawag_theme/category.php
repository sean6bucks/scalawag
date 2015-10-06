<?php get_header(); ?>

<div class="articles-headline">
    <h3 class="search-headline"><?php single_cat_title(); ?></h3>
</div>

<div class="posts-wrapper">

    <?php get_template_part('search-loop'); ?>
    
    <?php get_template_part('pagination'); ?>

</div>

<?php get_footer(); ?>
