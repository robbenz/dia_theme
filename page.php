<?php get_template_part('includes/header');
$open_no_side = '<div class="container woocommerce"><div class="row"><div id="content" role="main">';
$open_side = '<div class="container"><div class="row">';
$open_side_woo = '<div class="container woocommerce landing_page"><div class="row">';

if ( is_home() || is_front_page() ): //  -- HOMEPAGE CHECK
  get_template_part('includes/home-index');

elseif ( is_cart() || is_checkout() || is_account_page() ): //  -- WOO ENDPOINT - drop sidebar CHECK
  echo $open_no_side;
  get_template_part('includes/loops/content', 'page');
  echo '</div>';
elseif ( is_page('57882') ): //  --  CHECK HILL-ROM PAGE
  echo $open_no_side;
  get_template_part('includes/hill-rom', 'page');
  echo '</div>';
elseif ( is_page('58427') ): //  --  CHECK SIM LAB SOLUTIONS PAGE
  echo $open_no_side;
  get_template_part('includes/sim-lab', 'page');
  echo '</div>';
elseif ( is_page('58688') ): //  --  CHECK MFT SOLUTIONS PAGE
  echo $open_no_side;
  get_template_part('includes/mft', 'page');
  echo '</div>';
elseif ( is_page('61274') ): //  --  CHECK fujitsu PAGE
  echo $open_no_side;
  get_template_part('includes/imaging_loops/fujitsu', 'page');
  echo  '</div>';
elseif ( is_page('61275') ): //  --  CHECK ge PAGE
  echo $open_no_side;
  get_template_part('includes/imaging_loops/ge', 'page');
  echo  '</div>';
elseif ( is_page('61276') ): //  --  CHECK siemens PAGE
 echo $open_no_side;
 get_template_part('includes/imaging_loops/siemens', 'page');
 echo  '</div>';
elseif ( is_page('61280') ): //  --  CHECK imaging-parts-a-l PAGE
  echo $open_no_side;
  get_template_part('includes/imaging_loops/al', 'page');
  echo  '</div>';
elseif ( is_page('61281') ): //  --  CHECK imaging-parts-k-z PAGE
  echo $open_no_side;
  get_template_part('includes/imaging_loops/kz', 'page');
  echo  '</div>';
elseif ( is_page('58440') ): //  --  CHECK Curtain PAGE
  echo $open_no_side;
  if ( function_exists( 'ccf_output_form' ) ) {
    ccf_output_form( '59858' );
  }
  echo '</div>';

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

        <?php elseif ( is_page('58430') ): //  --  CHECK HEALTHCARE EDUCATION PAGE
          echo $open_side; ?>
                <img style="width:97%; margin:0 1.5% 1em;" src="<?php echo site_url(); ?>/wp-content/imgs/Nursing_School_Header.png" />
                <div class="col-xs-6" id="sidebar" role="navigation">
                  <?php get_template_part('includes/sidebar'); ?>
                </div>
                <div id="content" role="main">
                  <?php get_template_part('includes/nursing', 'page'); ?>
                </div><!-- /#content -->

            <?php elseif ( is_page('58429') ): //  --  CHECK EMS PAGE
              echo $open_side_woo ; ?>
              <img style="width:97%; margin:0 1.5% 1em;" src="<?php echo site_url(); ?>/wp-content/imgs/ems-header-banner.png" />
                  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                    <?php get_template_part('includes/sidebar'); ?>
                  </div>
                <div class="col-xs-12 col-sm-8">
                  <div id="content" role="main">
                    <?php get_template_part('includes/cat_loops/ems', 'page'); ?>
                  </div><!-- /#content -->
                </div>

              <?php elseif ( is_page('61277') ): //  --  CHECK Imaging PAGE
                echo $open_side_woo; ?>
                <nav class="woocommerce-breadcrumb"> <a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/medical-equipment/">Medical Equipment</a> / Imaging Parts </nav>

                    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                      <?php get_template_part('includes/sidebar'); ?>
                    </div>
                  <div class="col-xs-12 col-sm-8">
                    <div id="content" role="main">
                      <?php get_template_part('includes/cat_loops/imaging', 'page'); ?>
                    </div><!-- /#content -->
                  </div>

                <?php elseif ( is_page('58431') ): //  --  CHECK HOSPITAL PAGE
                  echo $open_side_woo; ?>
                    <img style="width:97%; margin:0 1.5% 1em;" src="<?php echo site_url(); ?>/wp-content/imgs/hospitalbanner.png" />
                    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                      <?php get_template_part('includes/sidebar'); ?>
                    </div>
                  <div class="col-xs-12 col-sm-8">
                    <div id="content" role="main">
                      <?php get_template_part('includes/cat_loops/hospital', 'page'); ?>
                    </div><!-- /#content -->
                  </div>

                <?php elseif ( is_page('58428') ): //  --  CHECK LTC PAGE
                  echo $open_side_woo; ?>
                      <img style="width:97%; margin:0 1.5% 1em;" src="<?php echo site_url(); ?>/wp-content/imgs/longtermbanner.png" />
                      <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                        <?php get_template_part('includes/sidebar'); ?>
                      </div>
                    <div class="col-xs-12 col-sm-8">
                      <div id="content" role="main">
                        <?php get_template_part('includes/cat_loops/ltc', 'page'); ?>
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
