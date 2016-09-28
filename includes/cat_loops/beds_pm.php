<div class="term-description">
  <div class="header-wrap-text-medical-equipment">
    <h2 class="header-wrap-text-medical-equipment-header"><?php the_title(); ?></h2>
Preventive Maintenance Services from DiaMedical USA will evaluate the condition of your equipment and determine the most cost-effective and manageable solution to ensure its overall performance, safety and reliability.
</div>
</div>
<ul class="products">


    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' => 'hill-rom-beds', 'orderby' => 'title', 'order'   => 'ASC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product;
        $pm_product_id = $loop->post->ID;
        $product = get_post( $pm_product_id );
        $slug = $product->post_name; ?>

                <li class="product">

                    <a href="<?php echo site_url(); ?>/preventative-maintenance-work-order-request/?<?php echo esc_attr($slug); ?>">
                        <?php
                        if (has_post_thumbnail( $loop->post->ID )) {
                           echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                           echo '<img style="width: 5.6vw; height:5.6vw; max-height:80px; max-width:80px; position:absolute; bottom: 50px; right:6px; z-index:99" src="';
                           echo site_url();
                           echo '/wp-content/imgs/repairs-preventive-maintenance.png" />';
                         } else {
                         echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />';
                       }
                         ?>
                        <h3><?php the_title(); ?></h3>
                        <?php ?>
                    </a>
                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

</ul><!--/.products-->

<?php elseif ( is_page('58429') ): //  --  CHECK EMS PAGE
  echo $open_side ; ?>
  <img style="width:97%; margin:0 1.5% 1em;" src="<?php echo site_url(); ?>/wp-content/imgs/ems-header-banner.png" />
      <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
      </div>
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/cat_loops/ems', 'page'); ?>
      </div><!-- /#content -->
    </div>
