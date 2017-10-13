<?php
get_template_part('includes/header');

$open_side = '<div class="container woocommerce landing_page"><div class="row">';

$side_loops_arr = array(
  '58430' => 'includes/nursing',
  '58428' => 'includes/ltc'
);


// -- Pages with left side menu
if ( is_page(array_keys($side_loops_arr) ) ) :
  foreach ($side_loops_arr as $key => $value) {
   if ( is_page($key) ) {
     echo $open_side ;
     woocommerce_breadcrumb();

    echo '<img class="header-img" src="' . site_url() . '/wp-content/imgs/' . $value . '.png" />';

     echo '<div class="col-xs-6" id="sidebar" role="navigation">';
     get_template_part('includes/sidebar');
     echo '</div>';

     if($key != '58430') {
        echo '<div class="col-xs-12 col-sm-8">';
      }

     echo '<div id="content" role="main">';
     get_template_part($value, 'page');

     if($key != '58430') {
       echo '</div>';
     }
     echo '</div>';
   }
 }

 elseif ( is_page('85159') ):
  echo $open_side; ?>
  <div class="col-xs-6 col-sm-4" id="new_sidebar" role="navigation">
    <?php get_template_part('includes/new-sidebar'); ?>
  </div>
  <div class="col-xs-12 col-sm-8">
    <div id="content" role="main">
      <?php get_template_part('includes/loops/content', 'page'); ?>
    </div><!-- /#content -->
  </div>


<?php else:
  echo $open_side; ?>
  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
    <?php get_template_part('includes/sidebar'); ?>
  </div>
  <div class="col-xs-12 col-sm-8">
    <div id="content" role="main">
      <?php get_template_part('includes/loops/content', 'page'); ?>
    </div><!-- /#content -->
  </div>

<?php endif; ?>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
