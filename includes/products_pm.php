<?php
/* Template Name: Repairs - Products */
get_template_part('includes/header');

?>

  <div class="container woocommerce landing_page">
    <div class="row">

      <?php woocommerce_breadcrumb(); ?>

  <?php get_template_part('includes/newer-sidebar'); ?>

<div class="col-xs-12 col-sm-8">
      <div id="content" role="main">

        <?php if (function_exists('benz_add_category_headers')) benz_add_category_headers(); ?>

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
              'vital-signs-monitors'  => '68966',
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
                  $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 36,
                    'product_cat' => $key,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post__not_in' => array(31167,31169)  // stuff to exclude - vital signs stands
                  );
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
            if (function_exists('benz_pm_img_placement')) benz_pm_img_placement();
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

      </ul>
      <!--/.products-->
      <hr>
      <strong>Who We Service:</strong>

      <table>
        <tbody>
          <tr>
            <td width="300">
              <ul>
                <li>Hospitals</li>
              </ul>
            </td>
            <td width="300">
              <ul>
                <li>Nursing Schools</li>
              </ul>
            </td>
            <td width="300">
              <ul>
                <li>Government Facilities</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td width="300">
              <ul>
                <li>Long Term Care</li>
              </ul>
            </td>
            <td width="300">
              <ul>
                <li>Doctors’ Offices</li>
              </ul>
            </td>
            <td width="300">
              <ul>
                <li>Surgery Centers</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td width="300">
              <ul>
                <li>Veterinarians</li>
              </ul>
            </td>
            <td width="300">
              <ul>
                <li>Research Facilities</li>
              </ul>
            </td>
            <td width="300">
              <ul>
                <li>Simulation Centers</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
      <hr>
      <strong>Benefits:</strong><br>

      <strong>Customized Service Contracts</strong> – Work with our advisors to piece together a contract that is perfect for your facility.
      <br>
      <strong>Preventive Maintenance</strong> – Avoid unnecessary downtime and extend the life of your equipment with regular tune-ups.
      <br>
      <strong>On-site Repair</strong> – Let our technicians lend a helping hand especially for time-sensitive repairs.
      <br>
      <strong>Equipment Upgrades</strong> – Keep your equipment up to date with the latest OEM upgrades.
      <br>
      <strong>Calibration, Safety Checks and Regulatory Compliance</strong> – Rest easy knowing that your equipment is accurate, safe and compliant.
      <br><br>



    </div>
    </div>
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container -->

  <?php get_template_part('includes/footer'); ?>
