<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */

 global $product;
 $shipping_class = $product->get_shipping_class();
 ?>

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

<div id="woocommerce_tabs" class="woocommerce-tabs">
	<?php
	$tabs = apply_filters( 'woocommerce_product_tabs', array() );
	foreach ( $tabs as $key => $tab ) call_user_func( $tab['callback'], $key, $tab );
	?>
</div>
