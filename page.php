<?php
get_template_part('includes/header');
$open_no_side = '<div class="container woocommerce"><div class="row"><div id="content" role="main">';
$open_side = '<div class="container woocommerce landing_page"><div class="row">';
$loops_arr = array(
  '57882' => 'includes/hill-rom',
  '58427' => 'includes/sim-lab',
  '61274' => 'includes/imaging_loops/fujitsu',
  '61275' => 'includes/imaging_loops/ge',
  '61276' => 'includes/imaging_loops/siemens',
  '61280' => 'includes/imaging_loops/al',
  '61281' => 'includes/imaging_loops/kz',
  '58688' => 'includes/mft'
);
$pro_pm = 'includes/cat_loops/products_pm';
$cat_pm = 'includes/cat_loops/category_pm';
$side_loops_arr = array(
  '58430' => 'includes/nursing',
  '58429' => 'includes/ems',
  '58431' => 'includes/hospital',
  '58428' => 'includes/ltc',
  '68934' => $pro_pm,
  '68957' => $pro_pm,
  '68958' => $pro_pm,
  '68959' => $pro_pm,
  '68960' => $pro_pm,
  '68961' => $pro_pm,
  '68962' => $pro_pm,
  '68963' => $pro_pm,
  '68964' => $pro_pm,
  '68968' => $pro_pm,
  '68970' => $pro_pm,
  '68971' => $pro_pm,
  '68972' => $pro_pm,
  '68973' => $pro_pm,
  '68965' => $pro_pm,
  '68966' => $pro_pm,
  '68969' => $pro_pm,
  '68991' => $pro_pm,
  '68992' => $pro_pm,
  '68993' => $pro_pm,
  '68994' => $pro_pm,
  '68995' => $pro_pm,
  '68996' => $pro_pm,
  '68956' => $cat_pm,
  '68967' => $cat_pm,
  '68990' => $cat_pm
);

if ( is_home() || is_front_page() ): //  -- HOMEPAGE CHECK
  get_template_part('includes/home-index');

elseif ( is_cart() || is_checkout() || is_account_page() ): //  -- WOO ENDPOINT - drop sidebar CHECK
  echo $open_no_side;
  get_template_part('includes/loops/content', 'page');
  echo '</div>';

elseif ( is_page(array_keys($loops_arr) ) ) :
  foreach ($loops_arr as $key => $value) {
   if ( is_page($key) ) {
     echo $open_no_side;
     get_template_part($value, 'page');
     echo '</div>';
   }
 }

elseif ( is_page(array_keys($side_loops_arr) ) ) :
  foreach ($side_loops_arr as $key => $value) {
   if ( is_page($key) ) {
     echo $open_side ;
     woocommerce_breadcrumb();
     if (!strpos($value, 'cat_loops') ) {
       echo '<img style="width:97%; margin:0 1.5% 1em;" src="' . site_url() . '/wp-content/imgs/' . $value . '.png" />';
     }
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

 elseif ( is_page('86') ): //  -- Parts Search CHECK
  echo $open_side; ?>
  <img style="border:6px solid #00426a; max-width: 100%; " src="<?php echo site_url(); ?>/wp-content/imgs/homepage/parts-search-circuit-board_FINAL.png" />
  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
    <?php dynamic_sidebar('sidebar-widget-area'); ?>
  </div>
  <div class="col-xs-12 col-sm-8">
    <div id="content" role="main">
      <?php get_template_part('includes/loops/content', 'page'); ?>
    </div><!-- /#content -->
  </div>

<?php elseif ( is_page('61277') ): //  --  CHECK Imaging PAGE
  echo $open_side; ?>
    <nav class="woocommerce-breadcrumb"> <a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/medical-equipment/">Medical Equipment</a> / Imaging Parts </nav>
  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
    <?php get_template_part('includes/sidebar'); ?>
  </div>
  <div class="col-xs-12 col-sm-8">
    <div id="content" role="main">
      <?php get_template_part('includes/cat_loops/imaging', 'page'); ?>
    </div><!-- /#content -->
  </div>

<?php else: //  -- EVERY OTHER PAGE
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
