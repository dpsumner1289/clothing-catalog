<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function catalog_widgets() {
	register_sidebar( array(
		'name'          => esc_html__( 'Dress Listings Sidebar', 'build-create-nrc' ),
		'id'            => 'sidebar-dress-listings',
		'description'   => esc_html__( 'Add widgets here for dress listings page sidebar.', 'build-create-nrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'catalog_widgets' );

/**
 * Enqueue scripts and styles.
 */
function catalog_dependencies() {
	//#- Styles
	wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri().'/assets/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.css' );
}
add_action( 'wp_enqueue_scripts', 'catalog_dependencies' );

// generic pagination 
function catalog_pagination($current = 1, $total = 1, $ppp = 10, $klass = ''){
	$pages = ceil($total / $ppp);
		$start_page = ($current - 3) >= 1 ? $current - 3 : 1;
		$end_page = ($current + 3) <= $pages ? $current + 3 : $pages;
		$first = true;
	?>
	<div class="catalog_pagination <?php echo $klass; ?>">
		<?php if($current > 1) : ?>
			<a class="previous" data-page="<?php echo $current - 1; ?>">PREVIOUS</a>
		<?php else : ?>
			<span class="previous disabled">PREVIOUS</span>
		<?php endif; ?>

		<div class="page-wrap">	
			<?php for($i = $start_page; $i <= $end_page; $i++) : ?>

				<?php if($first && ($i != 1)) : ?>
					<a href="<?php echo $i; ?>">1 ...</a>
				<?php endif; ?>
				<?php $first = false; ?>
				
				<?php if($i != $current) : ?>
					<a data-page="<?php echo $i; ?>"><?php echo $i; ?></a>
				<?php else : ?>	
					<span class="current"><?php echo $i; ?></span>
				<?php endif; ?>
				
				<?php if(($i == $end_page) && ($end_page < $pages)) : ?>
					<a data-page="<?php echo $i; ?>">... <?php echo $pages; ?></a>
				<?php endif; ?>
			<?php endfor;?>
		</div>

		<?php if($current < $pages) : ?>
			<a class="next" data-page="<?php echo $current + 1; ?>">NEXT</a>
		<?php else : ?>
			<span class="next disabled">NEXT</span>
		<?php endif; ?>
	</div>
	<?php
}

/**
 * Add custom post types
 */
include (trailingslashit(get_template_directory()).'cpts/dress-post-type.php');

/**
 * Add custom post type categories
 */
include (trailingslashit(get_template_directory()).'cpts/taxonomies/dress_taxonomies.php');

/**
 * Change CPT icon to custom icon
 */

add_action('admin_head', 'icon_styles');

function icon_styles() {
  echo '<style>
  #adminmenu .wp-menu-image img {
    max-width: 100%;
    max-height: 20px;
    padding-top: 7px;
	}
	</style>';
}

/**
 * Add filtering
 */

 // Dress type
add_action("wp_ajax_dress_type_filter", "dress_type_filter");
add_action("wp_ajax_nopriv_dress_type_filter", "dress_type_filter");

function dress_type_filter(){
	ob_start();
	$postsnum = $_POST['postsnum'];
	$page = $_POST['page'] ? $_POST['page'] : 1;
	$args = array(
		'paged' => $page,
		'post_type' => 'dress',
		'post_status' => 'publish',
		'posts_per_page' => $postsnum
	);		
	$choices = $_POST['choices'];
	$tax_query = array('relation' => 'AND');

	foreach($choices as $key => $val) {
		$tax_query[] = array( 'taxonomy' => $key, 'terms' => $val);
	}
	$args['tax_query'] = $tax_query;
	
	$qry = new WP_Query($args);
	if($qry->found_posts) : ?>
		<div class="flex row dress-list">
		<?php foreach($qry->posts as $q) : 
			$image = get_the_post_thumbnail( $q->ID, 'full');
			$budgets = get_the_terms( $q->ID, 'budget' );
			$link = get_the_permalink($q->ID);
			$budget = join(', ', wp_list_pluck($budgets, 'name'));

			echo '<a href="'.$link.'"><div class="item_1_4 flex dress column"><figure class="dress">'.$image.'<div class="dress_meta flex row"><div class="dress_name">'.get_the_title($q->ID).'</div><div class="dress_budget">'.$budget.'</div></div></figure></div></a>';
		endforeach;
		?>
		</div><!-- /.dress-list -->
		<?php catalog_pagination($page, $qry->found_posts, 12, 'flex row vc'); ?>
		<?php else : ?>
		<div class="ajax-no-result wrapper">
			<h3 style="font-size:50px;font-family:'Lato',sans-serif;text-transform:uppercase;">Sorry, nothing was found.</h3>
			<p style="font-size:30px;">Please choose another category.</p>
		</div>
		<?php
	endif;

	echo ob_get_clean();
	die();
}

/**
 * add AJAX searches
 */
add_action("wp_ajax_dress_search", "dress_search");
add_action("wp_ajax_nopriv_dress_search", "dress_search");

function dress_search() {
	ob_start();
	$page = $_POST['page'] ? $_POST['page'] : 1;
	$keywords = $_POST['keywords'];
	$args = array(
		'paged' => $page,
		'post_type' => 'dress',
		's' => $keywords,
		'post_status' => 'publish',
		'posts_per_page' => 12,
		'orderby' => 'post_name',
		'order' => 'ASC'
	);

	$choices = $_POST['choices'];
	$tax_query = array('relation' => 'AND');

	foreach($choices as $key => $val) {
		$tax_query[] = array( 'taxonomy' => $key, 'terms' => $val);
	}
	$args['tax_query'] = $tax_query;
	
	$dresses = new WP_Query( $args );

	if($dresses->found_posts): ?>
	<div class="flex row dress-list">
		<?php foreach($dresses->posts as $d) : 
			$image = get_the_post_thumbnail( $d->ID, 'full');
			$budgets = get_the_terms( $d->ID, 'budget' );
			$budget = join(', ', wp_list_pluck($budgets, 'name'));

			echo '<div class="item_1_4 flex dress column"><figure class="dress">'.$image.'</figure><div class="dress_meta flex row"><div class="dress_name">'.get_the_title($d->ID).'</div><div class="dress_budget">'.$budget.'</div></div></div>';
		endforeach;
		?>
		</div><!-- /.dress-list -->
		<?php catalog_pagination($page, $dresses->found_posts, 12, 'flex row vc'); ?>
		<?php else : ?>
		<div class="ajax-no-result wrapper">
			<h3 style="font-size:50px;font-family:'Lato',sans-serif;text-transform:uppercase;">Sorry, nothing was found.</h3>
			<p style="font-size:30px;">Please try your search again.</p>
		</div>
	<?php
	endif;

	echo ob_get_clean();
	die();
}