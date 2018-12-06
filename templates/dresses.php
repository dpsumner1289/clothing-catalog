<?php 
/* Template Name: Dresses */

get_header();

if(have_posts()): while(have_posts()): the_post();
    get_template_part('template-parts/flexible_content');
endwhile; endif;
?>
<h1>what are you looking for?</h1>
<div class="template-dress container container-md flex row">
	<div class="filter-bar has-archive dress-sidebar flex">
		<?php
		get_template_part('template-parts/dress', 'header_filter');
		?>
	</div><!-- /.filter-bar -->
		<?php
		get_template_part('template-parts/dresses', 'featured');
		?>
</div> <!-- /.template-dresses -->
<?php
get_footer();
?>