<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;
$shipping_class = $product->get_shipping_class();
/*
$sls_array_products = array ('54313', '1234ff5' );
foreach ($sls_array_products as $SLS) {
	if ($post->ID == $SLS){ ?>
		<div style="margin-top: -0.5em; margin-bottom: -20px;">
			<img style="margin-left:38px;" src="https://diamedicalusa.com/wp-content/imgs/includes/sim-lab.png" alt="SimLabSolutions Exclusive" width="330" />
		</div>
		<style>
		.single-product .favimg_bottomleft, .single-product .favimg_bottomright { top: 384px; }
		.single-product .favimg_topleft, .single-product .favimg_topright { top: 120px; }
		div.product div.summary { margin-top:-69px !important; }
		</style>
	<?php	}
} */
?>

<div style="max-height:none !important; " class="images">

	<?php

	$vet_array_products = array ('73131', '73141', '78818', '78788', '78808', '78813', '78828', '78823', '78764', '78802', '78807', '78772', '73130', '78833', '78797', '78777', '78756', '78760', '78767', '78793' );
	foreach ($vet_array_products as $vet) {
		if ($post->ID == $vet) {
			echo '<div style="margin-top: -1.5em; margin-bottom: -20px;"><img style="position:relative; z-index:999;" class="aligncenter size-full wp-image-83810" src="';
			echo site_url();
			echo '/wp-content/uploads/2017/08/leading-edge.png" alt="" width="392" height="80" /></div>';
		}
	}


		if ( has_post_thumbnail() ) {

			$image_title 	= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
			$image       	= get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title'	=> $image_title,
				'alt'	=> $image_title
				) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_caption, $image ), $post->ID );

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );

		}

		// stuff for repairs image

		/*
		$descendant = get_the_terms( $post->ID, 'product_cat' );
    $descendant = array_reverse($descendant);
    $descendant = $descendant[0];
		if ( $descendant->term_id == '10981' || $descendant->term_id == '10975' ) :
*/
		$is_repair = get_post_meta( get_the_ID(), 'benz_product_select', true );
		if ( $is_repair == "Equipment Repair" ) :

?>
		<img
			style="float: right;width: 119px;position: relative;margin-bottom: -130px;bottom: 130px;right: 119px;"
			src="<?php echo site_url(); ?>/wp-content/imgs/repairs-preventive-maintenance.png" />
		<?php endif ; ?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>


<?php if ( $shipping_class == 'free-shipping' ) : ?>

<div id="ship-repair-container" class="">
 <div id="ship-row" class="">

	<div id="free_ship-productpage" class="">
	<img width="110" alt="Free Shipping Mattresses" src="https://www.medmattress.com/wp-content/imgs/Free_shipping.png" class="shipping-img" />
	 <div style="padding-top:10px;">
		<span class="red_free">FREE SHIPPING</span><br>When You Order Online
	 </div>
	</div>
</div> <!-- end row -->
<?php endif; ?>

<?php
global $post;
$pm_check = get_post_meta( $post->ID, 'benz_pm_checkbox', true );
$pm_link = get_post_meta( $post->ID, 'benz_pm_link_text_field', true );
$pm_title = get_post_meta( $post->ID, 'benz_pm_text_field', true );
?>

<?php if ($pm_check == 'yes') : ?>
	<?php if (! $shipping_class == 'free-shipping' ) : ?>
		<div id="ship-repair-container" class="">
	<?php endif; ?>
 <div id="repair-row" class="">
	 <div id="p_maint-productpage">
		 <a href="<?php echo site_url() . '/' . $pm_link; ?>"><img class="maint-img" src="<?php echo site_url(); ?>/wp-content/imgs/repairs-preventive-maintenance.png" /></a>
		 <div class="maint-text">
			 <a href="<?php echo site_url() . '/' . $pm_link; ?>">Click Here to Order<br>
				 <span class="pm_blue">Preventative Maintenance</span>
				 <br> for
				 <?php if (strlen($pm_title) > 1) {
					 echo 'your ' . $pm_title;
				 }  else {
					 echo 'this item';
				 } ?>
			 </a>
		 </div>
	 </div>
 </div> <!-- end row -->
</div> <!-- end container -->

<?php elseif ( $shipping_class == 'free-shipping' && $pm_check !== 'yes')  : ?>
</div> <!-- ship-repair-container -->

<?php endif ;?>
