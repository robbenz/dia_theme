<?php
/*
The Search Loop
===============
*/
?>

<?php

$allowed_roles = array('shop_manager', 'administrators', 'shop_observers');

if(have_posts()): while(have_posts()): the_post();

 global $product;

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

    <article style="
    padding: 0.69em;
    color:#fff;
    margin-bottom:20px;
    background-color: #00426a;
    border: 3px solid #fff;
    outline: 5px solid #00426a;
    height:auto;
    min-height:225px;
    border-radius: 8px; "
    role="article" id="post_<?php the_ID()?>" <?php post_class()?>>

        <header>
            <h4><a href="<?php the_permalink(); ?>"><span style="color:#78be20;">Part Number: </span><span style="color:#fff;"><?php the_title()?></span></a></h4>
        </header>

        <div class="lightbox" style="float:left; width:15%; margin-right:2%; ">
          <?php echo $product->get_image(array(150,150)); ?>
        </div>

        <div style="float:left; width:60%;margin-right:4%; ">
          <h6>Part Number: <?php echo $product->get_sku(); ?></h6>
          <h6><span style="color:#fbad17;">Category: </span><?php echo $single_cat->name; ?></h6>
          <h6 class="search-results-description"><span style="color:#78be20;">Description: </span><?php the_content(); ?></h6>
        </div>

        <div style="float:left; width:18%;margin-top:-25px; ">
          <h6><span style="color:#78be20;">List Price: </span>
            <?php if (strlen($_list_price) > 0 ) : ?>
            <span style="text-decoration: line-through;"><?php echo '$'.number_format($_list_price, 2); ?></span>
          <?php else : ?>
            n/a
          <?php endif ; ?>
          </h6>

          <?php if ( is_user_logged_in() ) : ?>
            <h6><span style="color:#78be20;">Price: </span><?php echo $product->get_price_html(); ?></h6>

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
              <button class="search-rs-read-more" href="<?php the_permalink(); ?>">View Options</button>
            <?php endif ; ?>

      <?php else : ?>
        <button href="#" class="search-rs-read-more eModal-1" >View Price</button>
      <?php endif ; ?>
    </div>

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
          <table class="dia_tg" id="imfuckingsweetatcoding">
            <?php

            $dia_specs_coolshit = array (
              "Manufacturer: " => $_mft,
              "MFT Part #: " => $_mft_part_number,
              "MFT List Price: " => $_list_price,
              "Vendor 1: " => $_supplier_1,
              "Vendor 1 Part Number" => $_vendor_pn_1,
              "Cost: " => $_cost_1,
              "Verified on: " => $_price_check_1,
              "2nd Vendor: " => $_supplier_2,
              "2nd Cost: " => $_cost_2,
              "2nd Verified on: " => $_price_check_2
            );
            $_x=1;

            foreach ( $dia_specs_coolshit as $key => $value ) {
              if ( strlen($value) > 0 ) {
                echo '<tr><td>' . $key . '</td><td>';
                if ( $_x == 3 || $_x == 6 || $_x == 9 ) {
                  echo '<span style="color:#78be20;">$'.number_format($value, 2).'</span>';
                } else {
                  echo $value;
                }
                echo '</td></tr>';
              } else {
                echo '<tr><td>' . $key . '</td><td>n/a</td></tr>';  // switch to n/a for empty value
              }
              $_x++;
            }
            ?>

          </table>
        </div>

      <?php endif ; ?>

    </article>
<?php endwhile; else: ?>
    <div class="alert alert-warning">
        <i class="glyphicon glyphicon-exclamation-sign"></i> <?php _e('Sorry, your search yielded no results.', 'bst'); ?>
    </div>
<?php endif; ?>
