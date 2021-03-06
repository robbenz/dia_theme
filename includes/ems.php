<?php
/* Template Name: EMS Education */
get_template_part('includes/header');
?>

<div class="container woocommerce landing_page">
  <div class="row">
    <?php woocommerce_breadcrumb(); ?>

    <img class="header-img" src="<?php echo site_url(); ?>/wp-content/imgs/includes/ems.png" />

    <?php get_template_part('includes/newer-sidebar'); ?>

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <div style="float: right; height: auto; margin-right: -26px; margin-top: 19px; width: 850px;">

          <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '71778' ); } ?>

          <?php if ( function_exists('dia_custom_slider') ) dia_custom_slider('Featured Products', 'ems_edu_ft_slider'); ?>

          <div class="ns_home_flt-lft" id="hospitalbuttonhome">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/loaded-emergency-packs/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/Emergency_Packs.png"
              alt="Loaded Emergency Packs"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/Emergency_Packs_hover.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/Emergency_Packs.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="infusionbuttonhome">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/loaded-emergency-packs/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/Opiod_kits.png"
              alt="Opiod Kits"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/Opiod_kits_hover.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/Opiod_kits.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="simlabbuttonhome">
            <a href="<?php echo site_url(); ?>/product-category/simulated-iv-bags/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/Simulated_iv_Fluids_meds.png"
              alt="Simulated Iv Fluids"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/Simulated_iv_Fluids_meds_hover.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/Simulated_iv_Fluids_meds.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="emsmanikinsbuttonhome" style="clear:both; margin-top:-36px;">
            <a href="<?php echo site_url(); ?>/product-category/manikins/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/ems_Manikins.png"
              alt="EMS Training Aids"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ems_Manikins_hover.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ems_Manikins.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="ambulancebuttonhome" style="margin: -124px 14px 1em 14px;">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/ambulance-simulator/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/ems_ambulance_simulator.png"
              alt="Ambulance Simulator"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ems_ambulance_simulator_hover.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ems_ambulance_simulator.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="stretchersbuttonhome" style="margin-top:-176px;">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/cots-stretchers-ems/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/ems_cots_stretchers.png"
              alt="EMS cots &amp; Stretchers"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ems_cots_stretchers_hover.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ems_cots_stretchers.png';"
              />
            </a>
          </div>

            <?php if ( function_exists('dia_custom_slider') ) dia_custom_slider('Products On Sale Now!', 'ems_edu_sale_slider'); ?>

            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/simulation-bundles/">
              <img style="margin-bottom:0.35em;"src="<?php echo site_url(); ?>/wp-content/imgs/ems/loaded_ems_packs_banner.png" />
            </a>


            <div class="row">
              <div class="col-md-6">
                <a href="<?php echo site_url(); ?>/catalog-request-form/">
                  <img src="<?php echo site_url(); ?>/wp-content/imgs/emails/EMSCatalogButton_2018_RequestCatalogEMS.jpg" alt="Emergency &amp; Rescue Training" />
                </a>
              </div>
              <div class="col-md-6">
                <a href="<?php echo site_url(); ?>/wp-content/pdf/EMSCatalog_Final.pdf">
                  <img src="<?php echo site_url(); ?>/wp-content/imgs/emails/EMSCatalogButton_2018_InteractiveEMSCatalog.jpg" alt="Emergency &amp; Rescue Training" />
                </a>
              </div>
            </div>

            <div class="row">
              <div style="padding: 0 22px; margin-top:5px;" class="col-md-12">
                <a href="#" class="eModal-2">
                  <img style="border-radius:1em;" src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/CatalogRequest_NursingSchool.jpg" alt="Emergency &amp; Rescue Training" />
                </a>
              </div>
            </div>

            <p class="diva" style="float: right; font-size: 12.45px; text-align: center; width: 98%;">
              <br />
              At DiaMedical USA we value our first responders. We want to make sure EMT and paramedic instructors have tools they need to provide quality emergency medical instruction and simulation from basic first responder classes to advanced
              paramedic training. Our EMS medical equipment and simulated intravenous medications will help EMS schools, academies, and training facilities meet National Registry Paramedic Psychomotor Competency Portfolio standards. We have everything
              you need run out-of-hospital scenarios, practical EMS continuing education, and in-service training. Give your students hands-on practical experience with one of our ambulance simulators. We have the lowest prices on Ferno and Stryker stretchers
              and stair chairs.
              <br /> Choose from our simulated IV bags, simulated normal saline, simulated lactated ringers, and simulated blood bags. Our simulated IV bags come in a variety of sizes and are available for purchase pre-filled, empty, in bulk or individually.
              DiaMedical USA and SimLabSolutions are the exclusive provider of Loaded Emergency Packs for EMS education and training. These packs have been designed for emergency medical technicians, paramedics, fire fighters, law enforcement and specialized
              rescue teams by EMS professionals and simulation specialists to provide a new level of realism and precision to EMS education. Loaded Emergency Packs are filled with all of the supplies and practi-meds needed for pre-service and in-service
              training. Each Loaded Emergency Pack is pre-stocked and available in several forms including Loaded Simulated Medication Box, Loaded Pediatric Pack, Loaded ALS Pack, BLS Pack and refill kits.
              <br />
            </p>

        </div>

      </div><!-- #content -->
    </div><!-- .col-xs-12 col-sm-8 -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
