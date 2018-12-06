<?php
/* Template Name: Dress List */

get_header();
?>

<h1>wedding dress gallery</h1>
<div class="template-dress container container-md-lg-1 flex row">
<div class="filter-bar has-archive item_1_5 dress-sidebar">
	<?php 
	get_template_part('template-parts/dress', 'sidebar_filter');
	?>
</div>
	<?php
	get_template_part('template-parts/dresses', 'layout');
	?>
</div>

<?php 
get_footer(); ?>