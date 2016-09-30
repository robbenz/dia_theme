<?php benz_add_category_headers(); ?>

<ul class="products">
  <?php
  $product_pm_array= array(
    'amico-beds'=> '68957',
    'gendron-beds'=> '68958',
    'graham-field-beds' => '68959',
    'hill-rom-beds' => '68934',
    'invacare-beds' => '68960',
    'medline-beds' => '68961',
    'stryker-beds' => '68962',
    'span-america-beds' => '68963',
    'transfer-master-beds' => '68964',
    'amico-stretchers' => '68968',
    'ferno-cots-stretchers-ems' => '68969',
    'hausted-stretchers' => '68970',
    'hill-rom-stretchers' => '68971',
    'pedigo-stretchers' => '68972',
    'stryker-stretchers' => '68973',
    'exam-tables' => '68965',
    'vital-signs-monitors'  => '68966',  // '31167' / '31169' (exclude 2 stands )
    'non-functioning-headwalls' => '68991',
    'functioning-wall-mounted-headwall-packages-w-compressor' => '68992',
    'mobile-headwall-packages' => '68993',
    'wall-mounted-headwalls-for-use-w-centralized-compressor' => '68994',
    'air-compressors' => '68995',
    'sot-accessories' => '68996'
  );

  foreach ($product_pm_array as $key => $value) :
    if (is_page($value)) :
      $counter = 0;
      $args = array( 'post_type' => 'product', 'posts_per_page' => 36, 'product_cat' => $key, 'orderby' => 'title', 'order'   => 'ASC', 'post__not_in' => array(31167,31169) );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); global $product;
      $pm_product_id = $loop->post->ID;
      $product = get_post( $pm_product_id );
      $slug = $product->post_name;
      if ($counter % 3 == 0) {
        $first = ' first' ;
      } elseif ($counter % 3 != 0) {
        $first = '' ;
      }
       ?>

      <li class="product<?php echo $first; ?>">
        <a href="<?php echo site_url(); ?>/preventative-maintenance-work-order-request/?<?php echo esc_attr($slug); ?>">
          <?php
          if (has_post_thumbnail( $loop->post->ID )) {
            echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
            benz_pm_img_placement();
          } else {
            echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />';
          }
          ?>
          <h3><?php the_title(); ?> - <span style="font-weight:bold;">Repair</span></h3>
        </a>
      </li>
      <?php

      $counter++ ;
    endwhile;
    wp_reset_query();
  endif;
endforeach; ?>

</ul><!--/.products-->
