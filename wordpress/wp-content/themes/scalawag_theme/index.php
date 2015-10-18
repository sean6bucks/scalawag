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

<div id="pages-wrapper">
    <a href="<?php bloginfo('url'); ?>/category/words" ><div id="words" class="page">
        <h2 class="page-title shade">WORDS</h2>
        <h2 class="page-title">WORDS</h2>
        <img class="page-image" src="<?php bloginfo('template_directory'); ?>/img/cat-words.jpg" />
    </div></a><!--
    --><a href="<?php bloginfo('url'); ?>/category/pictures" ><div id="pictures" class="page">
        <h2 class="page-title shade">PICTURES</h2>
        <h2 class="page-title">PICTURES</h2>
        <img class="page-image" src="<?php bloginfo('template_directory'); ?>/img/cat-pictures.jpg" />
    </div></a><!--
    --><a href="<?php bloginfo('url'); ?>/category/films" ><div id="films" class="page">
        <h2 class="page-title shade">FILMS</h2>
        <h2 class="page-title">FILMS</h2>
        <img class="page-image" src="<?php bloginfo('template_directory'); ?>/img/cat-films.jpg" />
    </div></a>
</div>

<div class="articles-headline"><h3>Latest Projects</h3></div>
<div id="articles-wrapper" class="clearfix">

    <?php get_template_part('loop'); ?>
    
</div>

<?php get_footer(); ?>
