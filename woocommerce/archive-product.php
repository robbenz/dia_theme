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


if ( is_product_category( array ( '5828', // These are all the parts categories - dont forget to put in functions too for producst diaply count
														    	'8390',
																  '5797',
															  	'5786',
																	'6412',
																	'3683',
																	'8135',
																	'8279',
																	'2305',
																	'3206',
																	'5805',
																	'8264',
																	'8278',
																	'6428',
																	'8402',
																	'8216',
																	'6416',
																	'6432',
																	'8219',
																	'6418',
																	'6414',
																	'8283',
																	'5361',
																	'5834',
																	'1960',
                                  '8889',
                                  '8890',
                                  '8888',
																	'5777',
																	'8131',
																	'6323',
																	'5173',
																	'5832',
																	'5826',
																	'8865',
																	'8864',
																	'8832',
																	'8868',
																	'8869',
																	'8133'
																	) ) ):
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
<br /><br /><!-- end table -->

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php else : ?>

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'woocommerce_before_shop_loop' ); ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php do_action( 'woocommerce_after_shop_loop' ); ?>

            <?php //THIS IS CRUCIAL FOR DIVA PLUGIN
            $t_id = get_queried_object()->term_id;
            $term_meta = get_option( "taxonomy_$t_id" );?>
            <p style=" float: right; font-size: 13px; text-align: center; width: 75%;" class="diva"><?php echo $term_meta['custom_term_meta']; ?></p>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		get_template_part('includes/sidebar');
	?>
<?php endif; ?>
