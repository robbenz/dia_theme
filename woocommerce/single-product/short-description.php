<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

if ( ! $post->post_excerpt ) {

	if ( $post->ID == '84550' || $post->ID == '73317' || $post->ID == '91437' || $post->ID == '80657' || $post->ID == '73306' || $post->ID == '73299' || $post->ID == '91440' ) : ?>
	<a href="#" onclick="jQuery('#vfb-field-182').val('SimServeRX Online Demo');return false;" class="eModal-2">Click here to request an <b>Online Demonstration</b></a>
	<?php endif ;

	return;
}

?>
<div itemprop="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
