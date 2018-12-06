<?php
/**
 * The template for displaying all dresses
 *
 * @package build/create_-_nrc
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main class="container container-md">
            <?php
            while(have_posts()): the_post();
                get_template_part( 'template-parts/content-dress' );
            endwhile;
            ?>
		</main><!-- /.container -->
	</div><!-- /#primary -->

<?php
get_footer();
