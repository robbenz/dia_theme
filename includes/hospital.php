<?php
/* Template Name: Hospital HomePage */
get_template_part('includes/header');

?>

  <div class="container woocommerce landing_page">
    <div class="row">

      <?php woocommerce_breadcrumb(); ?>

      <img class="header-img" src="<?php echo site_url(); ?>/wp-content/imgs/includes/hospital.png" />

<?php get_template_part('includes/newer-sidebar'); ?>

      <div class="col-xs-12 col-sm-8">
        <div id="content" role="main">


          <div id="hospital_content_wrap" style="float: right;  margin: 19px -26px 10px 0px; width: 850px;">

            <div style="height:382px; position:relative; background-image: url(https://diamedicalusa.com/wp-content/imgs/hospital-home/Hospital-home-part-search.png); ">

              <div style="font-family: 'ristretto_probold', Arial, sans-serif; position:absolute; top:22px;line-height:46px; right:17px;color:#00426a;">
                <span style="font-size:68px; ">ANY PART</span>
                <span style="font-size:38px; ">&nbsp;&nbsp;FOR</span><br />
                <span style="font-size:68px; ">ANY HOSPITAL BED</span>
                <span style="font-size:38px;">&nbsp;&nbsp;FROM</span><br />
                <span style="font-size:68px; ">ANY MANUFACTURER</span>
              </div>
              <span style="color:#fff; position:absolute; bottom:56px; left:14px; font-family: 'ristretto_promedium', Arial, sans-serif; font-size:48px; line-height:43px;">
SEARCH <br />
BIOMEDICAL <br />
PARTS</span>

              <?php get_template_part( 'includes/navbar-search' ); ?>

            </div>

            <br />
            <div class="ns_home_flt-lft" id="hospitalbuttonhome"><a href="<?php echo site_url(); ?>/product-category/hospital-beds/">
<img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Hospital-Beds.png" alt="hospital beds"
onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Hospital-Beds-Select.png';"
onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Hospital-Beds.png';"/></a></div>

            <div class="ns_home_flt-lft" id="infusionbuttonhome"><a href="<?php echo site_url(); ?>/product-category/supplies-2/">
<img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Medical-Supplies.png" alt="infusion pumps"
onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Medical-Supplies-Select.png';"
onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Medical-Supplies.png';"/></a></div>

            <div class="ns_home_flt-lft" id="simlabbuttonhome"><a href="<?php echo site_url(); ?>/product-category/refrigerators-freezers/">
<img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Refrigerators-Freezers.png" alt="Refrigerators-Freezers"
onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Refrigerators-Freezers-Select.png';"
onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Refrigerators-Freezers.png';"/></a></div>

            <div class="ns_home_flt-lft" id="headwallbuttonhome"><a href="<?php echo site_url(); ?>/results">
<img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Bio-Med-Imaging-Parts.png" alt="headwalls"
onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Bio-Med-Imaging-Parts-Select.png';"
onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Bio-Med-Imaging-Parts.png';"/></a></div>

            <div class="ns_home_flt-lft" style="margin-top: -79px !important ;" id="practibuttonhome"><a href="<?php echo site_url(); ?>/product-category/loaded-crash-carts/">
<img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Medical-Equipment.png" alt="practi-meds"
onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Medical-Equipment-Select.png';"
onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Medical-Equipment.png';"/></a></div>

            <div class="ns_home_flt-lft" id="medmatbuttonhome"><a href="<?php echo site_url(); ?>/product-category/emergency-rescue/loaded-emergency-packs/">
<img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Furnishings.png" alt="hospital mattresses"
onMouseOver="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Furnishings-Select.png';"
onMouseOut="this.src='<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Furnishings.png';"/></a></div>

            <a target="_blank" href="https://medmattress.com/"><img style="margin-bottom:1em;" src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/HealthcareMattress.png" /></a>
            <a href="<?php echo site_url(); ?>/medical-equipment/"><img src="<?php echo site_url(); ?>/wp-content/imgs/hospital-home/Hospital-Equipmentgallery.png" /></a>
          </div>

        </div>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <?php get_template_part('includes/footer'); ?>
