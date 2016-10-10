<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$repairs_cat_pumps = array(
	'9364' => 'Alaris',
	'9366' => 'B. Braun',
	'9367' => 'Baxter',
	'9368' => 'Hospira',
	'9369' => 'Sabratek',
	'9370' => 'Sigma'
);

if ( ! empty( $breadcrumb ) ) {

	echo $wrap_before;

	if (is_product_category('9363')) { // infusion pump repairs?>
		<nav class="woocommerce-breadcrumb">
			<a href="<?php echo site_url(); ?>">Home</a> /
			<a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/">On-Site Repairs &amp; Preventive Maintenance</a> /
			Infusion Pump - Service &amp; Repairs
		</nav>
	<?php
} elseif (is_product_category('9374')) { // component repairs ?>
	<nav class="woocommerce-breadcrumb">
		<a href="<?php echo site_url(); ?>">Home</a> /
		<a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/">On-Site Repairs &amp; Preventive Maintenance</a> /
		Hill-Rom Components - Repairs
	</nav>
<?php
} elseif (is_product_category(array_keys($repairs_cat_pumps) ) ){
	foreach ($repairs_cat_pumps as $key => $value) {
		if (is_product_category($key)) { ?>
		<nav class="woocommerce-breadcrumb">
			<a href="<?php echo site_url(); ?>">Home</a> /
			<a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/">On-Site Repairs &amp; Preventive Maintenance</a> /
			<a href="<?php echo site_url(); ?>/product-category/infusion-pump-service-repairs/">Infusion Pump - Service &amp; Repairs</a> /
			<?php echo $value; ?>
		</nav>
	<?php
}
}
} else {
		foreach ( $breadcrumb as $key => $crumb ) {
			echo $before;

			if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
				echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
			} else {
				echo esc_html( $crumb[0] );
			}
			echo $after;

			if ( sizeof( $breadcrumb ) !== $key + 1 ) {
				echo $delimiter;
			}
		}
	}
	echo $wrap_after;

}
