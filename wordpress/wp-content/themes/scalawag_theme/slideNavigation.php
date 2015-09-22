<?php query_posts('category_name=Featured&showposts=6'); while (have_posts()) : the_post(); ?>

<li class="dot">&bull;</li>

<?php endwhile; ?>

<?php wp_reset_query(); ?>