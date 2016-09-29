<div class="term-description">
  <div class="header-wrap-text-medical-equipment">
    <h2 class="header-wrap-text-medical-equipment-header"><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
  </div>
</div>

<ul class="products">

<?php

$pm_cats_array = array(
  '68956' => '6398',    // Hospital Beds
  '68967' => '6458'     // Cots & Stretchers
);

foreach ($pm_cats_array as $key => $value) :
  if (is_page($key)) :
    $counter = 0;
    $args = array( 'hierarchical' => 1, 'show_option_none' => '', 'hide_empty' => 0, 'parent' => $value, 'taxonomy' => 'product_cat' );
    $subcats = get_categories($args);
    foreach ($subcats as $sc) :
      if ($counter % 3 == 0) {
        $first = ' first' ;
      } elseif ($counter % 3 != 0) {
        $first = '' ;
      }
      $thumbnail_id = get_woocommerce_term_meta( $sc->term_id, 'thumbnail_id', true );
      $image = wp_get_attachment_url( $thumbnail_id );
      ?>
      <li class ="product-category product<?php echo $first; ?>">
        <a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/<?php echo $sc->slug ?>-repairs">
          <img src="<?php echo $image ?>" />
          <?php
          echo '<img style="width: 5.6vw; height:5.6vw; max-height:80px; max-width:80px; position:absolute; bottom: 50px; right:6px; z-index:99" src="';
          echo site_url();
          echo '/wp-content/imgs/repairs-preventive-maintenance.png" />';
          ?>
          <h3><?php echo $sc->name ?></h3>
        </a>
      </li>
      <?php $counter++;
    endforeach;
  endif;
endforeach; ?>

</ul><!--/.products-->
