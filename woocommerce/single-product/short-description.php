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
	return;
}

?>
<div itemprop="description">
	<?php if ( is_page('73317') || is_page('91437') || is_page('80657') is_page('73306') || is_page('73299') || is_page('91440') ) : ?>
	<a href="#" onclick="jQuery('#vfb-field-182').val('SimServeRX Online Demo');return false;" class="eModal-2">Click here to request an <b>Online Demonstration</b></a>
	<?php endif; ?>
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
