<?php
get_template_part('includes/header');
$open_no_side = '<div class="container woocommerce"><div class="row"><div id="content" role="main">';
$open_side = '<div class="container woocommerce landing_page"><div class="row">';
$loops_arr = array(
  '57882' => 'includes/hill-rom',
  '61274' => 'includes/imaging_loops/fujitsu',
  '61275' => 'includes/imaging_loops/ge',
  '61276' => 'includes/imaging_loops/siemens',
  '61280' => 'includes/imaging_loops/al',
  '61281' => 'includes/imaging_loops/kz',
  '69773' => 'includes/loops/content',
  '58427' => 'includes/sim-lab',
  '58688' => 'includes/mft'
);
$pro_pm = 'includes/cat_loops/products_pm';
$cat_pm = 'includes/cat_loops/category_pm';
$side_loops_arr = array(
  '58430' => 'includes/nursing',
  '58429' => 'includes/ems',
  '58431' => 'includes/hospital',
  '58428' => 'includes/ltc',
  '57935' => 'includes/cat_loops/PM',
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
  '68990' => $cat_pm,
  '61277' => 'includes/cat_loops/imaging'
);

if ( is_home() || is_front_page() ): //  -- HOMEPAGE CHECK
  get_template_part('includes/home-index');

elseif ( is_cart() || is_checkout() || is_account_page() ): //  -- WOO ENDPOINT - drop sidebar CHECK
  echo $open_no_side;
  get_template_part('includes/loops/content', 'page');
  echo '</div>';

// -- Pages with no left side menu
elseif ( is_page(array_keys($loops_arr) ) ) :
  foreach ($loops_arr as $key => $value) {
   if ( is_page($key) ) {
     echo $open_no_side;
     get_template_part($value, 'page');
     echo '</div>';
   }
 }

// -- Pages with left side menu
elseif ( is_page(array_keys($side_loops_arr) ) ) :
  foreach ($side_loops_arr as $key => $value) {
   if ( is_page($key) ) {
     echo $open_side ;
     woocommerce_breadcrumb();
     if (!strpos($value, 'cat_loops') ) {
       echo '<img class="header-img" src="' . site_url() . '/wp-content/imgs/' . $value . '.png" />';
     }
     echo '<div class="col-xs-6" id="sidebar" role="navigation">';
     get_template_part('includes/sidebar');
     echo '</div>';
     if(! $key == array('58430', '58429') ) {
       echo 'hello';
        echo '<div class="col-xs-12 col-sm-8">';
      }
     echo '<div id="content" role="main">';
     get_template_part($value, 'page');
     if(! $key == array('58430', '58429') ) {
       echo '</div>';
     }
     echo '</div>';
   }
 }

//  -- Parts Search CHECK
 elseif ( is_page('86') ):
  echo $open_side; ?>
  <img style="border:6px solid #00426a; max-width: 100%;" src="<?php echo site_url(); ?>/wp-content/imgs/homepage/parts-search-circuit-board_FINAL.png" />
  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
    <?php dynamic_sidebar('sidebar-widget-area'); ?>
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
