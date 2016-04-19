<?php get_template_part('includes/header'); ?>

<?php if ( is_home() || is_front_page() ): //  -- HOMEPAGE CHECK ?>

<?php get_template_part('includes/home-index'); ?>

    <?php elseif ( is_cart() || is_checkout() || is_account_page() ): //  -- WOO ENDPOINT - drop sidebar CHECK ?>
      <div class="container">
        <div class="row">
          <div id="content" role="main">
            <?php get_template_part('includes/loops/content', 'page'); ?>
          </div><!-- /#content -->


        <?php elseif ( is_page('86') ): //  -- WOO ENDPOINT - drop sidebar CHECK ?>
          <div class="container">
            <div class="row">
              <div syle="width:100%; content-align:center;">
              <img style="border:6px solid #00426a; max-width: 100%; " src="<?php echo site_url(); ?>/wp-content/imgs/homepage/parts-search-circuit-board_FINAL.png" />
            </div>
              <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                <?php dynamic_sidebar('sidebar-widget-area'); ?>
              </div>
              <div class="col-xs-12 col-sm-8">
              <div id="content" role="main">
                <?php get_template_part('includes/loops/content', 'page'); ?>
              </div><!-- /#content -->
</div>

<?php elseif ( is_page('57882') ): //  --  CHECK HILL-ROM PAGE ?>
  <div class="container">
    <div class="row">
      <div id="content" role="main">
        <?php get_template_part('includes/hill-rom', 'page'); ?>
      </div><!-- /#content -->

<?php elseif ( is_page('58427') ): //  --  CHECK SIM LAB SOLUTIONS PAGE ?>
      <div class="container">
        <div class="row">
          <div id="content" role="main">
            <?php get_template_part('includes/sim-lab', 'page'); ?>
          </div><!-- /#content -->

        <?php elseif ( is_page('58430') ): //  --  CHECK HEALTHCARE EDUCATION PAGE ?>
          <div class="container">
            <div class="row">
              <img style="width:97%; margin:0 1.5%;" src="http://diamedicalusa.com/images/newhome/Nursing_School_Header.png" />

              <div class="col-xs-6" id="sidebar" role="navigation">
                <?php get_template_part('includes/sidebar'); ?>
              </div>
              <div id="content" role="main">
                <?php get_template_part('includes/nursing', 'page'); ?>
              </div><!-- /#content -->

            <?php elseif ( is_page('58429') ): //  --  CHECK EMS PAGE ?>
              <div class="container woocommerce">
                <div class="row">
                  <img style="width:97%; margin:0 1.5%;" src="http://diamedicalusa.com/images/newhome/ems-header-banner.png" />
                  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                    <?php get_template_part('includes/sidebar'); ?>
                  </div>
                <div class="col-xs-12 col-sm-8">
                  <div id="content" role="main">
                    <?php get_template_part('includes/cat_loops/ems', 'page'); ?>
                  </div><!-- /#content -->
                </div>

              <?php elseif ( is_page('58431') ): //  --  CHECK HOSPITAL PAGE ?>
                <div class="container woocommerce">
                  <div class="row">
                    <img style="width:97%; margin:0 1.5%;" src="http://diamedicalusa.com/images/header/hospitalbanner.png" />
                    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                      <?php get_template_part('includes/sidebar'); ?>
                    </div>
                  <div class="col-xs-12 col-sm-8">
                    <div id="content" role="main">
                      <?php get_template_part('includes/cat_loops/hospital', 'page'); ?>
                    </div><!-- /#content -->
                  </div>


                <?php elseif ( is_page('58428') ): //  --  CHECK LTC PAGE ?>
                  <div class="container woocommerce">
                    <div class="row">
                      <img style="width:97%; margin:0 1.5%;" src="http://diamedicalusa.com/longterm/header/longtermbanner.png" />
                      <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                        <?php get_template_part('includes/sidebar'); ?>
                      </div>
                    <div class="col-xs-12 col-sm-8">
                      <div id="content" role="main">
                        <?php get_template_part('includes/cat_loops/ltc', 'page'); ?>
                      </div><!-- /#content -->
                    </div>



    <?php else: //  -- EVERY OTHER PAGE ?>
      <div class="container">
        <div class="row">
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
