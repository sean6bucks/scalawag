<?php get_header(); ?>
		
<div id="jumbotron-wrapper">
    <!-- Grab featured posts and stack them -->
    <?php get_template_part('slideshow'); ?>

</div>

<div id="pages-wrapper">
    <div id="words" class="page">
        <h3 class="page-title">Words</h3>
    </div><!--
    --><div id="photos" class="page">
        <h3 class="page-title">Photos</h3>
    </div><!--
    --><div id="films" class="page">
        <h3 class="page-title">Films</h3>
    </div>
</div>

<!-- TO BE REPLACED BY POST TEMPATE -->
<div id="blog-wrapper">

    <?php get_template_part('loop'); ?>

</div>

<?php get_footer(); ?>
