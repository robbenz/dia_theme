<?php
/* Template Name: Nursing School HomePage */
get_template_part('includes/header');
?>

<div class="container woocommerce landing_page">
  <div class="row">
    <?php woocommerce_breadcrumb(); ?>

    <img class="header-img" src="<?php echo site_url(); ?>/wp-content/imgs/includes/nursing.png" />

    <?php get_template_part('includes/newer-sidebar'); ?>

    <div id="content" role="main">
      <div id="ns_rotate_wrap">

        <?php if ( function_exists( 'soliloquy' ) ) soliloquy( '70956' ); ?>

        <?php if ( function_exists('dia_custom_slider') ) dia_custom_slider('Featured Products', 'ns_featured_slider'); ?>

        <div class="ns_home_flt-lft" id="hospitalbuttonhome">
          <a href="<?php echo site_url(); ?>/product-category/hospital-beds/">
            <img
            src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-2.png"
            alt="hospital beds"
            onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-2-hover.png';"
            onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-2.png';"
            />
          </a>
        </div>

        <div class="ns_home_flt-lft" id="infusionbuttonhome">
          <a href="<?php echo site_url(); ?>/product-category/infusion-dialysis/infusion-pumps">
            <img
            src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-infusion.png"
            alt="infusion pumps"
            onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-infusion-hover.png';"
            onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-infusion.png';"
            />
          </a>
        </div>

        <div class="ns_home_flt-lft" id="simlabbuttonhome">
          <a href="<?php echo site_url(); ?>/product-category/simulated-iv-bags/">
            <img
            src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-iv-fluid.png"
            alt="sim labs"
            onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-iv-fluid-hover.png';"
            onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-iv-fluid.png';"
            />
          </a>
        </div>

        <div class="ns_home_flt-lft" id="headwallbuttonhome">
          <a href="<?php echo site_url(); ?>/product-category/headwalls/">
            <img
            src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-headwall.png"
            alt="headwalls"
            onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-headwall-hover.png';"
            onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-headwall.png';"
            />
          </a>
        </div>

        <div class="ns_home_flt-lft" id="practibuttonhome">
          <a href="<?php echo site_url(); ?>/product-category/loaded-crash-carts/">
            <img
            src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-lcc.png"
            alt="practi-meds"
            onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-lcc-hover.png';"
            onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ns-home-lcc.png';"
            />
          </a>
        </div>

        <div class="ns_home_flt-lft" id="medmatbuttonhome">
          <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/loaded-emergency-packs/">
            <img
            src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ems_packs_nshome.png"
            alt="hospital mattresses"
            onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ems_packs_nshome-hover.png';"
            onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/ems_packs_nshome.png';"
            />
          </a>
        </div>

        <?php if ( function_exists('dia_custom_slider') ) dia_custom_slider('Free Shipping On These Products!', 'ns_sale_slider'); ?>

        <div class="row">
          <div class="col-md-6">
            <a href="#" class="eModal-2">
              <img src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/2018-nursing-school-request.png" alt="Emergency &amp; Rescue Training" />
            </a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo site_url(); ?>/Catalog.pdf">
              <img src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/2018-nursing-school-download.png" alt="Emergency &amp; Rescue Training" />
            </a>
          </div>
        </div>
        <div class="row">
          <div style="padding: 0 26px; margin-top:10px;" class="col-md-12">
            <a href="<?php echo site_url(); ?>/catalog-request-form">
              <img style="border-radius:0.5em;" src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/EMSFieldGear.jpg" alt="Emergency &amp; Rescue Training" />
            </a>
          </div>
        </div>

        <p class="diva" style=" float: right; font-size: 12.45px; text-align: center; width: 98%;">
          <br /> At DiaMedical USA, we value Healthcare Education. We want to make sure your medical students and nursing students are learning quickly and effectively as they move from the classroom to medical facilities. Our hospital beds are of the
          highest quality at the lowest price. Choose from various Hill-Rom hospital beds, Stryker hospital beds, Burke Bariatric hospital beds, Gendron hospital beds, Amico hospital beds, Invacare hospital beds, Graham-Field hospital beds, Medline
          hospital beds, Span America low hospital beds, and Transfer Master hospital beds. Complete your patient rooms and teach your medical and nursing students with our hands-on simulated and functioning training headwalls. Students will learn how
          to work in a hospital room with our affordable nonfunctioning headwalls, functioning wall mounted headwall packages, mobile headwall packages, wall mounted headwalls for centralized compressor, our compressors and SOT accessories.
          <br />
          <br /> We are the sole provider of the Loaded Crash Carts designed for use in simulation labs, nursing schools, training hospitals and other medical training facilities. Each Crash Cart is pre-stocked and available in several forms including
          the Emergency Crash Cart, Pediatric Crash Cart, Medication Cart, Isolation Cart and refill kits. Designed for healthcare education purposes only, browse our endless amount of simulated medications, simulated IV supplies, simulated intubation
          and airway supplies, simulated vascular supplies, basic medical supplies, and simulated infection control supplies. Our cost-effective loaded crash carts are also available as Treatment Carts, Anesthesia Carts, Procedure Carts and Phlebotomy
          Carts. We carry the most popular infusion pump brands including Alaris infusion pumps, B. Braun infusion pumps, Baxter infusion pumps, Hospira infusion pumps, Sabratek infusion pumps and Sigma infusion pumps. Purchase your infusion pumps with
          our best-selling simulated IV bags and save money while doing so. All of our simulated IV fluids are manufactured at Sim Lab Solutions here, at DiaMedical USA! Choose from our simulated IV bags, simulated lactated ringers, simulated blood
          bags, simulated plasma bags and simulated platelet bags. Our simulated IV fluids come in a variety of sizes and with different options for labeling. They are available for purchase pre-filled, empty, in bulk or individually.
          <br />
          <br />
        </p>
      </div><!-- ns_rotate_wrap -->
    </div><!-- #content -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
