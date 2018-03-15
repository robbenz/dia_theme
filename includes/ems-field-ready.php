<?php
/* Template Name: EMS Field Ready */
get_template_part('includes/header');
?>

<div class="container woocommerce landing_page">
  <div class="row">

    <?php woocommerce_breadcrumb(); ?>

    <img class="header-img" src="<?php echo site_url(); ?>/wp-content/imgs/includes/ems-field-ready.png" />

    <?php get_template_part('includes/newer-sidebar'); ?>

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <div style="float: right; height: auto; margin-right: -26px; margin-top: 19px; width: 850px;">

          <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '83581' ); } ?>

          <?php if ( function_exists('dia_custom_slider') ) dia_custom_slider('Featured Products', 'ems_fr_ft_slider'); ?>

          <div class="ns_home_flt-lft" id="hospitalbuttonhome">
            <a href="<?php echo site_url(); ?>/product-category/field-ready-loaded-packs/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/LOAD-JUMP-BAGS.png"
              alt="Loaded Jump Bags"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/LOAD-JUMP-BAGS-SELECTED.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/LOAD-JUMP-BAGS.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="infusionbuttonhome" style="margin: 0 13px !important">
            <a href="<?php echo site_url(); ?>/medical-equipment/emergency-rescue/emergency-transport-supplies/ambulance-child-restraints/ambulance-child-restraint/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/SPECIALIZED-EQUIPMENT-SELECTED.png"
              alt="Specialized Emergency Equipment"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/SPECIALIZED-EQUIPMENT-SELECTED.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/SPECIALIZED-EQUIPMENT.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="simlabbuttonhome">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/immobilization/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/TRAUMA-EQUIPMENT.png"
              alt="Emergency Trauma Equipment"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/TRAUMA-EQUIPMENT-SELECTED.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/TRAUMA-EQUIPMENT.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="emsmanikinsbuttonhome" style="clear:both; margin-top:-36px;">
            <a href="<?php echo site_url(); ?>/product-category/ems-field-ready-gear/airway-respiratory/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/ADVANCE-AIRWAY-SUPPLIES.png"
              alt="Advance Airway Supplies"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ADVANCE-AIRWAY-SUPPLIES-SELECTED.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ADVANCE-AIRWAY-SUPPLIES.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="ambulancebuttonhome" style="margin: -124px 13px 1em 13px;">
            <a href="<?php echo site_url(); ?>/product-category/aeds-defibrillators/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/ADVANCE-CARDIAC-EQUIPMENT.png"
              alt="Advance Cardiac Equipment"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ADVANCE-CARDIAC-EQUIPMENT-SELECTED.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/ADVANCE-CARDIAC-EQUIPMENT.png';"
              />
            </a>
          </div>

          <div class="ns_home_flt-lft" id="stretchersbuttonhome" style="margin-top:-176px;">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/cots-stretchers-ems/">
              <img
              src="<?php echo site_url(); ?>/wp-content/imgs/ems/COTS.png"
              alt="EMS cots &amp; Stretchers"
              onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/COTS-SELECTED.png';"
              onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/ems/COTS.png';"
              />
            </a>
          </div>

          <?php if ( function_exists('dia_custom_slider') ) dia_custom_slider('Featured Products', 'ems_fr_ft_slider'); ?>

          <a href="<?php echo site_url(); ?>/product-category/ems-field-ready-gear/ems-field-ready-bundles/">
            <img style="margin-bottom:0.35em;"src="<?php echo site_url(); ?>/wp-content/imgs/ems/FIELD-READY-BUNDLE.png" />
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
            <div style="padding: 0 22px; margin:5px 0px 10px 0px;" class="col-md-12">
              <a href="#" class="eModal-2">
                <img style="border-radius:1em;" src="<?php echo site_url(); ?>/wp-content/imgs/ns-home-imgs/CatalogRequest_NursingSchool.jpg" alt="Emergency &amp; Rescue Training" />
              </a>
            </div>
          </div>

        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
