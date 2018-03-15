<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$rating   = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
$verified = wc_review_is_from_verified_owner( $comment->comment_ID );

?>
	<li itemprop="review" itemscope itemtype="http://schema.org/Review" <?php comment_class(); ?> id="li-comment-
		<?php comment_ID() ?>">

		<div id="comment-<?php comment_ID(); ?>" class="comment_container">

			<?php echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '60' ), '' ); ?>

			<div class="comment-text">

				<?php if ( $rating && get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) : ?>
				<div style="float:left; width:20%;">
					<div style="float:left;" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo sprintf( __( 'Rated %d out of 5', 'woocommerce' ), $rating ) ?>">
						<span style="width:<?php echo ( $rating / 5 ) * 100; ?>%"><strong itemprop="ratingValue"><?php echo $rating; ?></strong> <?php _e( 'out of 5', 'woocommerce' ); ?></span>
					</div>
					<br>
					<p style="">
						<?php echo sprintf( __( '%d out of 5 Stars', 'woocommerce' ), $rating ) ; ?>
					</p>
				</div>

				<?php endif; ?>

				<?php do_action( 'woocommerce_review_before_comment_meta', $comment ); ?>

				<?php if ( $comment->comment_approved == '0' ) : ?>

				<p class="meta"><em><?php _e( 'Your comment is awaiting approval', 'woocommerce' ); ?></em></p>

				<?php else : ?>
				<div style="float:right; width:20%;">
					<p style="float:right;" class="meta">
						<time itemprop="datePublished" datetime="<?php echo get_comment_date( 'c' ); ?>"><?php echo get_comment_date( wc_date_format() ); ?></time>
						<strong itemprop="author"><br><?php comment_author(); ?><br></strong>
						<?php
					if ( get_option( 'woocommerce_review_rating_verification_label' ) === 'yes' )
					if ( $verified ) echo '<em class="verified">(' . __( 'verified purchase', 'woocommerce' ) . ')</em> ';
					?>
					</p>
				</div>

				<?php endif; ?>

				<div style="float:left; width:60%;">
					<?php do_action( 'woocommerce_review_before_comment_text', $comment ); ?>

					<h4 style="text-transform:capitalize; margin-top:0px;">
						<b><?php echo get_comment_meta( $comment->comment_ID, 'comment_title', true ); ?></b>
					<h4>

			<div style="font-size:14px;font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'; " itemprop="description" class="description"><?php comment_text(); ?></div>

			<?php do_action( 'woocommerce_review_after_comment_text', $comment ); ?>

		</div>
		</div>
	</div>
