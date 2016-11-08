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
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
?>
<?php
if ( function_exists('is_dia_parts_cat') && is_dia_parts_cat() ) :
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
global $product;
?>

<a class="hill-rom-parts-row" target="_blank" href="<?php echo site_url(); ?>/results/keyword/<?php echo $product->get_sku(); ?>/search-in/product/cat-in/all/search-other/product">
	<div class="hill-rom-parts-cell"><?php echo $product->get_image(array(150,150)); ?></div>
	<div class="hill-rom-parts-cell"><?php echo $single_cat->name; ?></div>
	<div class="hill-rom-parts-cell"><?php echo $product->get_sku(); ?></div>
	<div class="hill-rom-parts-cell"><?php echo the_content(); ?></div>
	<div class="hill-rom-parts-cell"><?php echo '$' . $product->get_price(); ?></div>
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
?>

<?php

$katt = get_queried_object();

$kattID = $katt->term_id;

if ( have_posts() ) :

	get_template_part('includes/sidebar');

	do_action( 'woocommerce_before_shop_loop' );

	if ( !is_shop() && dia_cat_has_parent($kattID) == true ):

		do_action( 'woocommerce_after_shop_loop');

		if( isset($_GET['view']) && $_GET['view'] === 'all' ) : ?>

			<div style="float: right"><a class="btn btn-primary" href=".">View Less</a></div>

			<?php

		endif;

	endif;

	woocommerce_product_loop_start();

	woocommerce_product_subcategories();

	while ( have_posts() ) : the_post();

	wc_get_template_part( 'content', 'product' );

endwhile;

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
