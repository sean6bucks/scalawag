<?php get_header(); ?>
<?php get_template_part( 'minheader' ); ?>

<div id="jumbotron-wrapper">
    <!-- Grab featured posts and stack them -->
    <?php get_template_part( 'slideshow' ); ?>

</div>

<div class="slider-nav">
    <a class="arrow-prev"><img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-prev.png"></a>
    <ul class="slider-dots">
        <?php get_template_part( 'slideNavigation' ); ?>
    </ul>
    <a  class="arrow-next"><img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-next.png"></a>
</div>

<!-- <div id="index-min-wrapper">
<div id="index-min-header">
    <a href="<?php bloginfo('url'); ?>/category/words" ><div id="min-words" class="min-page">
        <h2 class="min-title">Words</h2>
    </div></a>
    <a href="<?php bloginfo('url'); ?>/category/pictures" ><div id="min-pictures" class="min-page">
        <h2 class="min-title">Pictures</h2>
    </div></a>
    <a href="<?php bloginfo('url'); ?>/category/films" ><div id="min-films" class="min-page">
        <h2 class="min-title">Films</h2>
    </div></a>
</div>
</div> -->

<div id="pages-wrapper">
    <a href="<?php bloginfo('url'); ?>/category/words" ><div id="words" class="page">
        <h2 class="page-title">Words</h2>
    </div></a><!--
    --><a href="<?php bloginfo('url'); ?>/category/pictures" ><div id="pictures" class="page">
        <h2 class="page-title">Pictures</h2>
    </div></a><!--
    --><a href="<?php bloginfo('url'); ?>/category/films" ><div id="films" class="page">
        <h2 class="page-title">Films</h2>
    </div></a>
</div>

<div class="articles-headline"><h3>Latest Projects</h3></div>
<div id="articles-wrapper" class="clearfix">

    <?php get_template_part('loop'); ?>
    
</div>

<?php get_footer(); ?>
