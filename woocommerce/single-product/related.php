<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

// Benz Mod File
// line 53 -- Customers Who Purchased This Also Bought

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) === 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );
$woocommerce_loop['columns'] = $columns;

if ( $products->have_posts() ) : ?>

	<div class="related products">

	<?php
	if( is_dia_part() ):
		$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
		$single_cat = array_shift( $product_cats );
	?>

	<h2>Shop More <?php echo $product->get_categories();?> Parts</h2><hr>
	<div id="hill-rom-parts-table">
		<div class="hill-rom-parts-row">
			<div class="hill-rom-parts-cell"><h4></h4></div>
			<div class="hill-rom-parts-cell"><h4>Manufacturer</h4></div>
			<div class="hill-rom-parts-cell"><h4>Part Number</h4></div>
			<div class="hill-rom-parts-cell"><h4>Description</h4></div>
			<div class="hill-rom-parts-cell"><h4>Price</h4></div>
			<div class="hill-rom-parts-cell"><h4>Condition</h4></div>
		</div>

		<?php	while ( $products->have_posts() ) : $products->the_post(); ?>

			<a class="hill-rom-parts-row" target="_blank" href="<?php echo site_url(); ?>/results/keyword/<?php echo $product->get_sku(); ?>/search-in/product/cat-in/all/search-other/product">
				<div class="hill-rom-parts-cell"><?php echo $product->get_image(array(150,150)); ?></div>
				<div class="hill-rom-parts-cell"><?php echo $single_cat->name; ?></div>
				<div class="hill-rom-parts-cell"><?php echo $product->get_sku(); ?></div>
				<div class="hill-rom-parts-cell"><?php echo the_content(); ?></div>
				<div class="hill-rom-parts-cell"><?php echo '$' . $product->get_price(); ?></div>
				<div class="hill-rom-parts-cell"><?php echo get_post_meta( get_the_ID(), 'benz_condition_select', true ); ?></div>
			</a>

		<?php endwhile; ?>

	</div>

<?php else : ?>
		<h2><?php _e( 'You may also like…', 'woocommerce' ); ?></h2>
		<?php woocommerce_product_loop_start(); ?>
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				<?php wc_get_template_part( 'content', 'product' ); ?>
			<?php endwhile; // end of the loop. ?>
		<?php woocommerce_product_loop_end(); ?>

<?php endif; ?>

	</div>

<?php endif;

wp_reset_postdata();
