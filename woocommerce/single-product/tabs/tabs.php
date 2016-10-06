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

 // begin if statement for free shipping icons on product pages
 global $product_notfree_ship;
     global $post;
     $product_id = $post->ID;
     $product_notfree_ship= array(
			 '68580',
			 '68577',
			 '68567',
			 '68583',
			 '68574',
			 '68571',
			 '68564',
			 '68561',
			 '68558',
			 '57953',
			 '57439',
			 '36450',
			 '36448',
			 '36446',
			 '36444',
			 '30724',
			 '30706',
			 '30712',
			 '30708',
			 '30714',
			 '30720',
			 '30722',
			 '30710',
			 '30704',
			 '30718',
			 '30716',
			 '30664',
			 '30666',
			 '30668',
			 '30670',
			 '30672',
			 '30674',
			 '30676',
			 '30678',
			 '30680',
			 '30682',
			 '30684',
			 '30686',
			 '30688',
			 '30694',
			 '30696',
			 '30698',
			 '30700',
			 '30702',
			 '30690',
			 '30692',
			 '30928',
			 '30937'
		 );

     if ( is_single($product_notfree_ship) ) {
         echo '<div id="free_ship-productpage">';
         echo '<img width="110" alt="Free Shipping Mattresses" src="https://www.medmattress.com/wp-content/imgs/Free_shipping.png" style="float:left; margin-right:0.5em; ">';
         echo '<div style="padding-top:10px;"><span class="red_free">FREE SHIPPING</span><br>When You Order Online</div>';
         echo '</div>';
     } else {
        // echo '<div id="free_ship-productpage">';
        // echo '<p class="add_shipp">*Additional Shipping Charges Apply</p>';
        // echo '</div>';
				 echo '';
     }


?>

<?php
global $product;
$pm_check = get_post_meta( $post->ID, 'benz_pm_checkbox', true );
$pm_link = get_post_meta( $post->ID, 'benz_pm_link_text_field', true );
$pm_title = get_post_meta( $post->ID, 'benz_pm_text_field', true );

if ($pm_check == 'yes')  {
	?>

<div id="p_maint-productpage">
	<a href="<?php echo site_url() . '/' . $pm_link; ?>"><img style="float:left; margin-right:0.5em;" width="84" src="<?php echo site_url(); ?>/wp-content/imgs/repairs-preventive-maintenance.png" /></a>
	<div style="padding-top:3px; margin-bottom: 1em; font-size:0.87em;">
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

<?php } else { }

$tabs = apply_filters( 'woocommerce_product_tabs', array() );
?>

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab">
					<a href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $tabs as $key => $tab ) : ?>
			<?php
			$isPart = get_post_meta( get_the_ID(), 'benz_product_select', true );
			if($isPart == 'Part'): ?>

			<div style="height:auto !important;padding-bottom:10px !important;" class="panel entry-content wc-tab %2" id="tab-<?php echo esc_attr( $key ); ?>">
			<?php else : ?>
				<div class="panel entry-content wc-tab %2" id="tab-<?php echo esc_attr( $key ); ?>">
				<?php endif ; ?>

				<?php call_user_func( $tab['callback'], $key, $tab ); ?>
			</div>
		<?php endforeach; ?>
	</div>
