<div class="container">
  <div class="row">
    <div id="content" role="main">
      <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '57643' ); } ?>
      <div style="margin-top:28px; width:100%;">
        <div class="col-xs-12 col-md-8 rgt-img-home">
          <a href="/healthcare-education/">
          <img style="width:100%;" src="<?php echo site_url(); ?>/wp-content/imgs/homepage/Healthcare-Education.png" />
          </a>
        </div>

        <div class="col-xs-6 col-md-4 lft-img-home" style="padding: 0 0 0 0.75%;margin-bottom: 4%;">

          <?php if ( is_user_logged_in() ) : ?>

            <a href="<?php echo site_url(); ?>/results">
              <img style="width:100%;" src="<?php echo site_url(); ?>/wp-content/imgs/homepage/biomedical-parts-search-for-hill-rom-parts.png" />
            </a>
            <?php get_template_part( 'includes/navbar-search' ); ?>

          <?php else : ?>

            <div style="border: 1.5px solid #000;padding: 1.5% 2.5%">
              <span style="font-size: 23px; font-weight: 600;">SIGN IN</span>
              <?php echo do_shortcode('[wppb-login]'); ?>
              <a href="<?php echo site_url(); ?>/my-account/lost-password/" id="benz_forgot">Lost Password?</a>

              <a href="<?php echo site_url(); ?>/my-account" id="benz-register-link">New Customer? <em>Register Here</em></a>
           </div>

        <?php endif ;?>

        </div>

      </div>
      <?php echo do_shortcode('[wpb-feature-product title="Feature Products"]'); ?>
    </div>
    <!-- /#content -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
<div id="homeorangewrap">
  <h3>Medical equipment from your most trusted brands.</h3>
  We offer a large variety of infusion pumps, hospital beds, headwalls, simulated IV fluids, furniture, manikins and<br />
  replacement parts for your Hill-Rom, Stryker, Hausted, MidMark, Span America beds, stretchers, wheelchairs &amp; more!<br />
  <div style="margin-top: 10px;" id="mattresshomeimgwrap">
    <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/"><img style="margin:0 0.8em;" src="<?php echo site_url(); ?>/wp-content/imgs/hill-rom-logo.png" alt="New &amp; Reconditioned Hill-Rom Parts" /></a>
    <a href="<?php echo site_url(); ?>/?s=STRYKER&amp;post_type=product"><img style="margin:0 0.8em;" src="<?php echo site_url(); ?>/wp-content/imgs/strykerlogo.png" alt=" " /></a>
    <a href="<?php echo site_url(); ?>/?s=amico&amp;post_type=product"><img style="margin: 0 0.8em 0.3em; max-height: 50px; height:50px;" src="<?php echo site_url(); ?>/wp-content/imgs/amico_logo.png" alt=" " /></a>
    <a href="<?php echo site_url(); ?>/?s=hausted&amp;post_type=product"><img style="margin:1.2em 0.8em 0;" src="<?php echo site_url(); ?>/wp-content/imgs/haustedlogo.png" alt=" " /></a>
    <a href="<?php echo site_url(); ?>/?s=midmark&amp;post_type=product"><img style="margin:0 0.8em;" src="<?php echo site_url(); ?>/wp-content/imgs/midmarklogo.png" alt=" " /></a>
  </div>
</div>
<div class="container" style="margin-bottom:2%;">
<div class="row">
  <div id="content" role="main">
    <div class="col-md-4" style="">
      <a href="<?php echo site_url(); ?>/product-category/simulated-iv-bags/"><img class="home-img-thirds" src="<?php echo site_url(); ?>/wp-content/imgs/homepage/simlab/IV-fluids.png" /></a>
    </div>
    <div class="col-md-4" style="">
      <a href="http://www.diamedicalusa.com/Catalog.pdf" target="_blank"><img class="home-img-thirds" src="<?php echo site_url(); ?>/wp-content/imgs/DiaMedical_Catalog_2017.png" /></a>
    </div>
    <div class="col-md-4" style="">
      <a href="<?php echo site_url(); ?>/product-category/carts-storage/loaded-crash-carts/">  <img class="home-img-thirds" src="<?php echo site_url(); ?>/wp-content/imgs/homepage/simlab/loaded-carts.png" /></a>
    </div>
  </div>
  <!-- /#content -->
</div>
<!-- /.row -->
