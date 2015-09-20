<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <div id="jumbotron-wrapper">
                
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
                <div class="post-preview">
                    <div class="preview-image"></div>
                    <div class='preview-body'>
                        <h4 class="category-tag"></h4>
                        <h2 class="preview-headline">NIGO Appointed as New Creative Director of YOHO!</h2>
                        <p class="preview-text">Led by youth culture magazine YOHO!, yesterday kicked started the annual YO’HOOD weekend in Shanghai, as swathes of fashion and lifestyle labels from the East and beyond arrived in the city for a three day trade show.</p>
                    </div>
                </div>
                <div class="post-preview">
                    <div class="preview-image"></div>
                    <div class='preview-body'>
                        <h4 class="category-tag"></h4>
                        <h2 class="preview-headline">6 Affordable Whiskeys You Should Drink This Fall</h2>
                        <p class="preview-text">Brisk temperatures call for good whiskey. As we near Fall, prepare your finest glasses and take a look at some of our suggestions for the colder season.</p>
                    </div>
                </div>
            </div>          

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
