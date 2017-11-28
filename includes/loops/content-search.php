<?php

$allowed_roles = array('shop_manager', 'administrator', 'shop_observer');

if(have_posts()): while(have_posts()): the_post();

 global $post, $woocommerce, $product;

 $product_full_price = $product->get_price();

 $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
 $single_cat = array_shift( $product_cats );
 $current_user = wp_get_current_user();
 $_mft = get_post_meta( get_the_ID(), 'dia_product_mft', true );
 $_mft_part_number = get_post_meta( get_the_ID(), 'dia_product_mft_part_number', true );
 $_list_price = get_post_meta( get_the_ID(), 'dia_product_list_price', true );
 $_supplier_1 = get_post_meta( get_the_ID(), 'dia_product_supplier_1', true );
 $_cost_1 = get_post_meta( get_the_ID(), 'dia_product_cost_1', true );
 $_vendor_pn_1 = get_post_meta( get_the_ID(), 'dia_product_vendor_pn_1', true );
 $_price_check_1 = get_post_meta( get_the_ID(), 'dia_product_price_check_1', true );
 $_price_check_person_1 = get_post_meta( get_the_ID(), 'dia_product_price_check_person_1', true );
 $_supplier_2 = get_post_meta( get_the_ID(), 'dia_product_supplier_2', true );
 $_cost_2 = get_post_meta( get_the_ID(), 'dia_product_cost_2', true );
 $_vendor_pn_2 = get_post_meta( get_the_ID(), 'dia_product_vendor_pn_2', true );
 $_price_check_2 = get_post_meta( get_the_ID(), 'dia_product_price_check_2', true );
 $_price_check_person_2 = get_post_meta( get_the_ID(), 'dia_product_price_check_person_2', true );
 $id = $product->id;

 ?>

 <script type="text/javascript">
 function jsAddPartNumber() {
   jQuery('#vfb-field-293').val('<?php print_r( the_title() ) ; ?>').css('text-transform', 'capitalize');
   jQuery('#vfb-field-294').val('<?php echo $product->get_sku(); ?>');
 }
</script>

    <article style="
    padding: 0.69em;
    color:#fff;
    margin-bottom:20px;
    background-color: #00426a;
    border: 3px solid #fff;
    outline: 5px solid #00426a;
    height:auto;
    min-height:225px;
    border-radius: 8px;"
    role="article" id="post_<?php the_ID(); ?>" <?php post_class(); ?>>

        <header>
          <h4><a href="<?php the_permalink(); ?>"><span style="color:#78be20;">
          <?php if ( function_exists('is_dia_part') && is_dia_part() ) : ?>
          Part Number:
        <?php else : ?>
          Product Name:
        <?php endif ; ?>
        </span>
          <span style="color:#fff;"><?php the_title(); ?></span>
        </a>
      </h4>

    </header>

        <div class="images" style="float:left; width:15%; margin-right:1.9%; ">

          <?php

          if ( has_post_thumbnail() ) {
            $image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
      			$image_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
        //  $image_link = wp_get_attachment_url( get_post_thumbnail_id() );
      			$image_link = get_permalink();
      			$image = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
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

           ?>
        </div>

        <div style="float:left; width:57.5%;margin-right:3.5%; ">
          <h6>Part Number: <?php echo $product->get_sku(); ?></h6>

          <?php
          $condition = get_post_meta( get_the_ID(), 'benz_condition_select', true );
          $cat_link = site_url();
          $cat_link .= "\/product-category\/";
          $cat_link .= $single_cat->slug;

          if (function_exists('is_dia_part')) {
          	if (is_dia_part() && strlen($condition) >= 3 ) {
          		echo '<h6>Part Condition: ' . $condition . '</h6>';
          	}
          } ?>

          <h6>
            <span style="color:#fbad17;">Category: </span>
            <a style="color:#fff;" href="<?php echo $cat_link; ?>"><?php echo $single_cat->name; ?></a>
          </h6>

          <h6 class="search-results-description"><span style="color:#78be20;">Description: </span>
            <?php
            $content = get_the_content();
            $driection = '... <a href="';
            $driection .= get_the_permalink();
            $driection .= '">Read more &rarr; </a>';
            echo mb_strimwidth($content, 0, 420, $driection );
            ?>
          </h6>
        </div>

        <div style="float:left; width:22%;margin-top:-25px; ">
          <h6><span style="color:#78be20;">List Price: </span>
            <?php if ( strlen($_list_price) > 0 ) : ?>
              <?php if ( intval($product_full_price) < intval($_list_price)  ): ?>
                <span style="text-decoration: line-through;"><?php echo '$'.number_format($_list_price, 2); ?></span>
              <?php else : ?>
                n/a
              <?php endif ;?>
            <?php else : ?>
              n/a
            <?php endif ; ?>
          </h6>

          <?php if ( is_user_logged_in() ) : ?>
            <h6><span style="color:#78be20;">Price: </span>
              <?php
              if ( $product->is_purchasable() ) {
                echo $product->get_price_html();
              } else {
                echo 'n/a';
              }
            ?>
          </h6>

          <?php if ( $product->is_purchasable() ) : ?>

            <?php if( $product->is_type( 'simple' ) ) : ?>

              <form class="cart" method="post" enctype="multipart/form-data">
                <div style="color:#00426a; padding-top:6px; " class="quantity">
                  <input type="number" step="1" min="1" max="" style="width:40px;" name="quantity" value="1" title="Quantity" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                </div>
                <input type="hidden" name="add-to-cart" value="<?php echo get_the_ID(); ?>">
                <button style="margin-top:8px; border-radius:0.25em; padding:0.69em 1.19em;"
                        type="submit"
                        class="alt ajax_add_to_cart add_to_cart_button product_type_simple button">
                  <i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
              </form>

            <?php elseif( $product->is_type( 'variable' ) ) : ?>
              <br><a class="search-rs-read-more" href="<?php the_permalink(); ?>">View Options</a>
            <?php endif ; ?>

          <?php else : ?>
            <a href="#" onclick="jsAddPartNumber();return false;" class="eModal-14 r-a-qbutton-price">Request Quote</a>
          <?php endif ; ?>

    <?php else : ?>
      <button href="#" class="search-rs-read-more eModal-1" >View Price</button>
    <?php endif ; ?>

  </div>

  <?php if( current_user_can('shop_manager') || current_user_can('administrator') ) : ?>
    <a style="color:#fff;clear: both;float: left;" href="<?php echo site_url(); ?>/wp-admin/post.php?post=<?php echo $id; ?>&amp;action=edit">edit</a>
  <?php endif ;?>

    <div id="search_results_specs_wrap" style="padding-top:8px; clear:both;width:100%; height:auto;">

    <?php  if( array_intersect($allowed_roles, $current_user->roles ) ) : ?>
        <input id="show_spec_chex_<?php echo $id; ?>" type="checkbox" class="show_specs_archive_each">
        <label for="show_spec_chex_<?php echo $id; ?>">&nbsp;&nbsp;Show Specs</label>

        <script type="text/javascript">
        jQuery(document).ready(function() {
          jQuery("#search_results_specs_wrap input[type=checkbox]").attr('checked',false);
          jQuery("#show_spec_div_wrap_<?php echo $id; ?>").hide();
          jQuery("#show_spec_chex_<?php echo $id; ?>").click(function() {
            if(jQuery(this).is(":checked")) {
              jQuery("#show_spec_div_wrap_<?php echo $id; ?>").show(369);
            } else {
              jQuery("#show_spec_div_wrap_<?php echo $id; ?>").hide(269);
            }
          });
        });
        </script>

        <div id="show_spec_div_wrap_<?php echo $id; ?>" class="show_spec_div_wrap">

          <?php if( $product->is_type( 'variable' ) ):
            $available_variations = $product->get_available_variations();
            ?>

              <select id="var_pro_drop_<?php echo $id; ?>" >
                <option class="nothing" value="select-option">Select Option</option>

                <?php foreach ( $available_variations as $attribute_name => $options ) :
                  $new_array = array_values($options["attributes"]);
                  $newstring = implode(' | ', $new_array);
                  ?>
                  <option class="var_specs_drop_option_<?php echo $options["variation_id"]; ?>"
                          value="var_product_<?php echo $options["variation_id"]; ?>">
                          <?php echo $newstring ;?>
                 </option>
               <?php endforeach; ?>
             </select>

             <?php
                foreach ($available_variations as $_AV ) {

                  $dia_varlistprice     = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_list_price', true );
                  $dia_varlistprice_fi  = floatval($dia_varlistprice);
                  $dia_var_cost         = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_cost', true );
                  $dia_var_cost_fi      = floatval($dia_var_cost);
                  $var_vend2cost        = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_cost2', true );

                  echo '<div style="color:#fff;border: 1px solid #fff;" class="var_specs_wrap" id="var_specs_wrap_'. $_AV[ 'variation_id' ] . '">';
                  echo 'Manufacturer: ' . get_post_meta( $_AV[ 'variation_id' ], 'dia_var_mft', true ) .'<br>';
                  echo 'MFT Part #: ' . get_post_meta( $_AV[ 'variation_id' ], 'dia_var_mft_pn', true ) .'<br>';
                  echo 'List Price: <span style="color:#78be20;">$' . number_format($dia_varlistprice_fi, 2) .'</span><br>';

                  echo 'Vendor 1: ' . get_post_meta( $_AV[ 'variation_id' ], 'dia_var_vendor1', true ) .'<br>';
                  echo 'Vendor PN: ' . get_post_meta( $_AV[ 'variation_id' ], 'dia_var_vendor_pn', true ) .'<br>';
                  echo 'Cost: <span style="color:#78be20;">$' . number_format($dia_var_cost_fi, 2) .'</span><br>';
                  echo 'Date Verified: ' . get_post_meta( $_AV[ 'variation_id' ], 'dia_var_date_check', true ) .'<br>';
                  echo 'Verified by: ' . get_post_meta( $_AV[ 'variation_id' ], 'dia_var_date_check_person1', true ) .'<br>';

                  $var_vend2 = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_vendor2', true );
                  if (strlen($var_vend2) > 0) { echo 'Vendor 2: ' . $var_vend2 .'<br>'; }

                  $var_vendpn2 = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_vendor_pn2', true );
                  if (strlen($var_vendpn2) > 0) { echo 'Vender 2 PN: ' . $var_vendpn2 .'<br>'; }

                  if (strlen($var_vend2cost) > 0) {
                    $var_vend2cost_fi = floatval($var_vend2cost);
                    echo 'Vender 2 Cost: <span style="color:#78be20;">$' . number_format($var_vend2cost_fi, 2) .'</span><br>';
                  }

                  $var_vend2dv = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_date_check2', true );
                  if (strlen($var_vend2dv) > 0) { echo 'Date Verified: ' . $var_vend2dv .'<br>'; }

                  $var_vend2dvname = get_post_meta( $_AV[ 'variation_id' ], 'dia_var_date_check_person2', true );
                  if (strlen($var_vend2dvname) > 0) { echo 'Verified by: ' . $var_vend2dvname .'<br>'; }

                  echo '</div>';
                }
              ?>

              <?php foreach ( $available_variations as $attribute_name => $options ) :?>

              <script type="text/javascript">
              jQuery(document).ready(function() {

                jQuery(".var_specs_wrap").hide();

                jQuery("#var_pro_drop_<?php echo $id; ?>").change(function() {
                    var val = jQuery(this).val();
                    if(val === "var_product_<?php echo $options["variation_id"]; ?>") {
                        jQuery(".var_specs_wrap").hide();
                        jQuery("#var_specs_wrap_<?php echo $options["variation_id"]; ?>").show();
                    }
                  });

              });
              </script>

            <?php endforeach; ?>

          <?php elseif( $product->is_type( 'simple' ) ): ?>
            <?php
            //
            // if( current_user_can('shop_manager') || current_user_can('administrator') ) {
            //   if ( !function_exists( 'YITH_YWRAQ_Frontend' ) ) {
            //     require_once( YITH_YWRAQ_INC . 'class.yith-request-quote-frontend.php' );
            //     YITH_YWRAQ_Frontend();
            //   }
            //
            //   YITH_YWRAQ_Frontend()->print_button( $product );
            // }
            ?>

          <table class="dia_tg" id="imfuckingsweetatcoding">

            <?php
            $dia_specs_coolshit = array (
              "Manufacturer: "           => $_mft,
              "MFT Part #: "             => $_mft_part_number,
              "MFT List Price: "         => $_list_price,
              "Vendor 1: "               => $_supplier_1,
              "Cost: "                   => $_cost_1,
              "Price Verified: "         => $_price_check_1,
              "Vendor 1 Part Number: "   => $_vendor_pn_1,
              "2nd Vendor: "             => $_supplier_2,
              "2nd Cost: "               => $_cost_2,
              "2nd Vendor Part Number: " => $_vendor_pn_2
            );
            $_x=1;

            foreach ( $dia_specs_coolshit as $key => $value ) {
              if ( $_x <= 7 ){
                if ( strlen($value) > 0 ) {
                  echo '<tr><td>'.$key.'</td><td>';
                  if ( $_x == 3 || $_x == 5 ) {
                    echo '<span style="color:#78be20;">$'.number_format($value, 2).'</span>';
                  } else {
                    echo $value;
                  }
                  echo '</td></tr>';
                } else {
                  echo '<tr><td>'.$key.'</td><td>n/a</td></tr>';
                }
              } else {   // 2nd vendor -- hide entire row if empty -- no reason for n/a
                if ( strlen($value) > 0 ) {
                  echo '<tr><td>'.$key.'</td><td>';
                  if ( $_x == 9 ) {
                    echo '<span style="color:#78be20;">$'.number_format($value, 2).'</span>';
                  } else {
                    echo $value;
                  }
                  echo '</td></tr>';
                } else {
                  echo ' ';  // switch to n/a for empty value
                }
              }
              $_x++;
            }
            ?>
          </table>

        <?php endif ; ?>

          <?php echo do_shortcode('[RED_FLAG]'); ?>

        </div>

      <?php endif ; ?>

    </article>
<?php endwhile; else: ?>

  <div id="ps_footer_container"><div style="clear:both"></div>
  <p style="padding-left:2em;">
    <i class="glyphicon glyphicon-exclamation-sign"></i>
    <span class="sorry-you-cant-find">&nbsp;Could not find any results</span>
    <br><br>
    <span>However, we may still carry this product</span>
  </p>
  <p style="padding-left:2em;">Please <a href="#" class="eModal-14 click-here-parts-link" style="font-weight:bold">contact us</a>
    and we will get back to you with an answer as soon as possible.</p>
    <p style="padding-left:2em;">Please include your facility name and address so we can email you an official quote.</p>
    <p style="padding-left:2em;">Thank you</p>
    <p style="padding-left:2em;"><strong>Tel:</strong> (877) 593-6011</p>
    <p style="padding-left:2em;"><strong>Fax:</strong> (248) 671-1550</p>
    <p style="padding-left:2em;"><strong>Email:</strong> sales@diamedicalusa.com</p>
    <p></p>
  </div>

<?php endif; ?>
