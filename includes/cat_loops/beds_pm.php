<div class="header-wrap-text-medical-equipment">
  <h2 class="header-wrap-text-medical-equipment-header">Hill-Rom Bed Repairs</h2>
Preventive Maintenance Services from DiaMedical USA will evaluate the condition of your equipment and determine the most cost-effective and manageable solution to ensure its overall performance, safety and reliability.  </div>
<ul class="products">

    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' => 'hill-rom-beds', 'orderby' => 'title', 'order'   => 'ASC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li class="product">
                    <a href="<?php echo esc_url(add_query_arg('vfb-field-97', 'hello', get_permalink(62913) ) ); ?>">
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
                    </a>
                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->
