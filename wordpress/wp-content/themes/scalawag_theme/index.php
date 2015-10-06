<?php get_header(); ?>
		
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


<div id="pages-wrapper">
    <a href="category/words/" ><div id="words" class="page">
        <h2 class="page-title">Words</h2>
    </div></a><!--
    --><a href="category/pictures/" ><div id="pictures" class="page">
        <h2 class="page-title">Pictures</h2>
    </div></a><!--
    --><a href="category/films/" ><div id="films" class="page">
        <h2 class="page-title">Films</h2>
    </div></a>
</div>

<div class="articles-headline"><h3>Latest Projects</h3></div>
<div id="articles-wrapper">

    <?php get_template_part('loop'); ?>
    
</div>

<?php get_footer(); ?>
