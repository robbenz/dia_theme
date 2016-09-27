<div class="header-wrap-text-medical-equipment">
  <h2 class="header-wrap-text-medical-equipment-header">Hill-Rom Bed Repairs</h2>
    Add to your EMS division or Cardiac lab with our most reliable AEDs, AED trainers, defibrillators, and arrhythmia simulators. Becoming familiar with these products and their functions is crucial to a student’s training. They are easy to program and operate, and allow students to practice how to react in different life-threatening, cardiac scenarios. We sell new and reconditioned Zoll, Phillips, and Physio-Control units, which all offer industry-leading technology. We promise each device to be long-lasting and reliable!
  </div>
<ul class="products">

    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'product_cat' => 'hill-rom-beds', 'orderby' => 'title' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li class="product">
                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </li>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->
