<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20  5999
		 */
		do_action( 'woocommerce_before_main_content' );
?>
<?php


if ( is_search() ):  ?>
	<div class="container">
	  <div class="row">
	    <img style="border:6px solid #00426a; margin-bottom:10px; max-width: 100%;" src="https://diamedicalusa.com/wp-content/imgs/homepage/parts-search-circuit-board_FINAL.png">
			<?php wc_print_notices(); ?>
	    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
	        <?php get_template_part('includes/partssearch-sidebar'); ?>
	    </div>

	    <div class="col-xs-12 col-sm-8">
	      <div id="content" role="main">
					<h2><?php _e('Search Results for', 'bst'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
	        <hr/>
					<?php get_template_part('includes/loops/content', 'search'); ?>
	      </div><!-- /#content -->
	    </div>
		</div>
	</div>

<?php

elseif ( function_exists('is_dia_parts_cat') && is_dia_parts_cat() ) :
	$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
	$single_cat = array_shift( $product_cats );
?>

<div style="float:none !important; margin-left:auto;" class="container header-wrap-text-medical-equipment">
	<h2 class="header-wrap-text-medical-equipment-header">
		<?php echo $single_cat->name; ?>
	</h2>
	<?php do_action( 'woocommerce_archive_description' ); ?>
</div>

<div id="hill-rom-parts-table">
  <div class="hill-rom-parts-row">
    <div class="hill-rom-parts-cell"><h4></h4></div>
		<div class="hill-rom-parts-cell"><h4>Manufacturer</h4></div>
    <div class="hill-rom-parts-cell"><h4>Part Number</h4></div>
		<div class="hill-rom-parts-cell"><h4>Description</h4></div>
    <div class="hill-rom-parts-cell"><h4>Price</h4></div>
    <div class="hill-rom-parts-cell"><h4>Condition</h4></div>
  </div>

<?php
while ( have_posts() ) : the_post();
global $product, $post;

$part_price = $product->get_price();
if (empty($part_price) ) {
	$part_price = 'Reqeust A Quote';
} else {
	$part_price = $product->get_price_html();
}

?>

<a class="hill-rom-parts-row" target="_blank" href="<?php echo site_url(); ?>/?s=<?php echo $product->get_sku(); ?>&amp;post_type=product">
	<div class="hill-rom-parts-cell"><?php echo $product->get_image(array(150,150)); ?></div>
	<div class="hill-rom-parts-cell"><?php echo $single_cat->name; ?></div>
	<div class="hill-rom-parts-cell"><?php echo $product->get_sku(); ?></div>
	<div class="hill-rom-parts-cell"><?php echo wp_trim_words( get_the_content(), 16 ); ?></div>
	<div class="hill-rom-parts-cell"><?php echo $part_price; ?></div>
	<div class="hill-rom-parts-cell"><?php echo get_post_meta( get_the_ID(), 'benz_condition_select', true ); ?></div>
</a>

<?php endwhile; // end of the loop. ?>

</div>
<br />
<br /><!-- end table -->

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php else : ?>
<?php    // header stuff
		echo '<div class="header-wrap-text-medical-equipment"><h2 class="header-wrap-text-medical-equipment-header">';
		if ( is_shop() ) {
			echo 'Medical Equipment';
			echo '</h2>' ;
			echo 'DiaMedical USA, along with its subsidiaries MedMattress.com and SimLabSolutions, is a manufacturer and global distributor of healthcare products, supplies, mattresses and replacement parts. We lead the industry in Healthcare education by offering full service solutions in outfitting your simulation labs with products such as hospitals beds, training headwalls, infusion pumps, simulated IV fluids, loaded crash carts, and more!';
			echo '</div>';
		} else {
			single_cat_title();
			echo '</h2>' ;
			do_action( 'woocommerce_archive_description' );
			echo '</div>';
	}

	if ( !is_shop() ) {
		$katt = get_queried_object();
		$kattID = $katt->term_id;
	}

if ( have_posts() ) :

	get_template_part('includes/newer-sidebar');
	// get_template_part('includes/sidebar');

	do_action( 'woocommerce_before_shop_loop' );

	if ( !is_shop() && dia_check_for_kids($kattID) == true ):

		do_action( 'woocommerce_after_shop_loop');

		if( isset($_GET['view']) && $_GET['view'] === 'all' ) : ?>

			<div style="float: right"><a class="btn btn-primary" href=".">View Less</a></div>

			<?php

		endif;

	endif;

	woocommerce_product_loop_start();

	 if (! is_user_logged_in() ) { echo '<div style="width:100%; height:30px;"></div>'; }

	 $vet_cats_dogs = array ( '10604', '10850', '10851', '10852', '10854', '10853', '10855', '10856', '10857', '10858' );
	 foreach ($vet_cats_dogs as $hank) {
 		if (is_product_category($hank)) {
 			echo '<div style="width:100%;margin-top: -10px; margin-bottom: 1.5em; text-align: center;"><img style="margin-left:-7.5em;"class="aligncenter size-full wp-image-83810" src="';
 			echo site_url();
 			echo '/wp-content/uploads/2017/08/leading-edge.jpg" alt="" width="392" height="80" /></div>';
 		}
 	}

	woocommerce_product_subcategories();

	if (is_product_category('10946')) { ?>

		<li class="product type-product status-publish has-post-thumbnail">

			<a href="<?php echo site_url(); ?>/product-category/manikins/airway-management/">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/03/Nasco-Lifeform-Tracheostomy-Care-Simulator-LF01083U_400x400-250x275.jpg"
						 class="attachment-shop_catalog size-shop_catalog wp-post-image"
						 alt="Airway Manikins"
						 width="250" height="266">
						 <h3>Airway Manikins</h3>
					 </a>
		</li>

		<li class="last product type-product status-publish has-post-thumbnail">

			<a href="<?php echo site_url(); ?>/product-category/respiratory/oxygen-supplies/">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/06/5401-250x275.jpg"
						 class="attachment-shop_catalog size-shop_catalog wp-post-image"
						 alt="Oxygen Supplies"
						 width="250" height="266">
						 <h3>Oxygen Supplies</h3>
					 </a>
		</li>

		<li class="first product type-product status-publish has-post-thumbnail">

			<a href="<?php echo site_url(); ?>/product-category/respiratory/suction-machines-supplies/">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/03/Laerdal-Suction-Unit-RS014201_400x400-250x275.jpg"
						 class="attachment-shop_catalog size-shop_catalog wp-post-image"
						 alt="Suction Machines &amp; Supplies"
						 width="250" height="266">
						 <h3>Suction Machines &amp; Supplies</h3>
					 </a>
		</li>
	<?php }

	while ( have_posts() ) : the_post();

	wc_get_template_part( 'content', 'product' );

endwhile;

// Trauma Supplies
if (is_product_category('6325')) {  ?>

	<li class=" product type-product status-publish has-post-thumbnail">

		<a href="<?php echo site_url(); ?>/product-category/supplies-2/wound-care-first-aid//">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/06/3011-250x275.jpg"
					 class="attachment-shop_catalog size-shop_catalog wp-post-image"
					 alt="Wound Care &amp; First Aid"
					 width="250" height="266">
					 <h3>Wound Care &amp; First Aid</h3>
				 </a>
	</li>
	<?php }

	elseif (is_product_category('10957')) {  ?>

		<li class=" product type-product status-publish has-post-thumbnail">

			<a href="<?php echo site_url(); ?>/privacy-curtain-sizing-form/">

				<img src="<?php echo site_url(); ?>/wp-content/uploads/2017/09/custom-size-privacy-curtains.jpg"
						 class="attachment-shop_catalog size-shop_catalog wp-post-image"
						 alt="Custom Privacy Curtains"
						 width="250" height="266">
						 <h3>Custom Size Privacy Curtains</h3>
					 </a>
		</li>
		<?php }


woocommerce_product_loop_end();

do_action( 'woocommerce_after_shop_loop' );

if ( !is_shop() ) {
	$t_id = get_queried_object()->term_id;
	$term_meta = get_option( "taxonomy_$t_id" );
	if 	(isset($term_meta['custom_term_meta'])) {
		echo '<p style=" float: right; font-size: 13px; text-align: center; width: 75%;" class="diva">' . $term_meta['custom_term_meta']; '</p>';
	}
}
	?>
<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
	<?php wc_get_template( 'loop/no-products-found.php' ); ?>
<?php endif; ?>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php endif; ?>
