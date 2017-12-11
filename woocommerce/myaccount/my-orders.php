<?php
/**
 * My Orders
 *
 * Shows recent orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$my_orders_columns = apply_filters( 'woocommerce_my_account_my_orders_columns', array(
	'order-number'  => __( 'Order', 'woocommerce' ),
	'order-date'    => __( 'Date', 'woocommerce' ),
	'order-status'  => __( 'Status', 'woocommerce' ),
	'order-total'   => __( 'Total', 'woocommerce' ),
	'order-actions' => '&nbsp;',
) );

$customer_orders = get_posts( apply_filters( 'woocommerce_my_account_my_orders_query', array(
	'numberposts' => $order_count,
	'meta_key'    => '_customer_user',
	'meta_value'  => get_current_user_id(),
	'post_type'   => wc_get_order_types( 'view-orders' ),
	'post_status' => array_keys( wc_get_order_statuses() )
) ) );

if ( $customer_orders ) : ?>

	<h2><?php echo apply_filters( 'woocommerce_my_account_my_orders_title', __( 'Recent Orders', 'woocommerce' ) ); ?></h2>

	<table class="shop_table shop_table_responsive my_account_orders">

		<thead>
			<tr>
				<?php foreach ( $my_orders_columns as $column_id => $column_name ) : ?>
					<th class="<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>



					<!-- <th style="border:0;" colspan="1">&nbsp;</th> -->



			</tr>
		</thead>

		<tbody>
			<?php foreach ( $customer_orders as $customer_order ) :
				$order      = wc_get_order( $customer_order );
				$item_count = $order->get_item_count();

				?>
				<tr class="order">
					<?php foreach ( $my_orders_columns as $column_id => $column_name ) : ?>
						<td class="<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number(); ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo date( 'Y-m-d', strtotime( $order->order_date ) ); ?>" title="<?php echo esc_attr( strtotime( $order->order_date ) ); ?>"><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo wc_get_order_status_name( $order->get_status() ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php echo sprintf( _n( '%s for %s item', '%s for %s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ); ?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
									$actions = array(
										'pay'    => array(
											'url'  => $order->get_checkout_payment_url(),
											'name' => __( 'Pay', 'woocommerce' )
										),
										'view'   => array(
											'url'  => $order->get_view_order_url(),
											'name' => __( 'View', 'woocommerce' )
										),
										'cancel' => array(
											'url'  => $order->get_cancel_order_url( wc_get_page_permalink( 'myaccount' ) ),
											'name' => __( 'Cancel', 'woocommerce' )
										)
									);

									if ( ! $order->needs_payment() ) {
										unset( $actions['pay'] );
									}

									if ( ! in_array( $order->get_status(), apply_filters( 'woocommerce_valid_order_statuses_for_cancel', array( 'pending', 'failed' ), $order ) ) ) {
										unset( $actions['cancel'] );
									}

									if ( $actions = apply_filters( 'woocommerce_my_account_my_orders_actions', $actions, $order ) ) {
										foreach ( $actions as $key => $action ) {
											// echo '<a href="' . esc_url( $action['url'] ) . '" class="button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
											echo '<a href="' . esc_url( $action['url'] ) . '" class="button button-' . $order->get_order_number() . ' ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
										}
									}
								?>
							<?php endif; ?>
						</td>


						<!-- <td style="border:0;" colspan="1">&nbsp;</td> -->



					<?php endforeach; ?>
				</tr>
				<!-- tracking button -->
				<script type="text/javascript">
        jQuery(document).ready(function() {
          jQuery(".order-trackem").hide();
          jQuery(".button-<?php echo $order->get_order_number(); ?>").click(function() {
						jQuery(".trackem-<?php echo $order->get_order_number(); ?>").toggle(400);
						jQuery(".trackem-content-<?php echo $order->get_order_number(); ?>").toggle(400);
          });
        });
        </script>

				<?php if ( $order->has_status( 'shipped' ) ) : ?>

					<tr class="order order-trackem trackem-<?php echo $order->get_order_number(); ?>">
						<td colspan="1"><strong>Product</strong></td>
						<td colspan="1"><strong>Item Shipped</strong></td>
						<td colspan="1"><strong>Quantity Shipped</strong></td>
						<td colspan="1"><strong>Freight Provider</strong></td>
						<td colspan="1"><strong>Tracking Number</strong></td>
					</tr>

					<?php
					$items = $order->get_items();
					foreach ($items as $item_id => $item_data) {

						  $shippcount = wc_get_order_item_meta( $item_id, "number_of_shipments_$item_id", true );
							$_z = intval($shippcount) + 1;

							for ($x=1 ; $x < $_z; $x++) {

							echo '<tr style="border:0;" class="order order-trackem trackem-content-'.$order->get_order_number().'">';

							if ($x == 1) {
								echo '<td style="border:0;" colspan="1">'.$item_data["name"].'</td>';
							} else {
								echo '<td style="border:0;" colspan="1">&nbsp;</td>';
							}
							echo '<td style="border:0;" colspan="1">'.$item_data["tracking_item_shipped$x"].'</td>';
							echo '<td style="border:0;" colspan="1">'.$item_data["tracking_item_qty$x"].'</td>';
							echo '<td style="border:0;" colspan="1">'.$item_data["tracking_item_freight_provider$x"].'</td>';
							echo '<td style="border:0;" colspan="1">'.$item_data["tracking_item_number$x"].'</td>';
							echo '</tr>';
						}
					}
					?>
				<?php endif; ?><!-- END  tracking button stuff  -->

			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<h2><?php echo apply_filters( 'woocommerce_my_account_my_orders_title', __( 'Recent Orders', 'woocommerce' ) ); ?></h2>
	<p>There are no orders associated with your online account at this time.</p>
<?php endif; ?>
