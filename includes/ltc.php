<?php /* Template Name: Long Term Care */
get_template_part('includes/header');

?>

<div class="container woocommerce landing_page">
  <div class="row">
    <?php woocommerce_breadcrumb(); ?>
    <img class="header-img" src="<?php echo site_url(); ?>/wp-content/imgs/includes/ltc.png" />

    <div class="col-xs-6" id="sidebar" role="navigation">
      <?php get_template_part('includes/sidebar'); ?>
    </div>

    <div class="col-xs-12 col-sm-8">

      <?php
$ltcLinks = array(
  array(
    "name" => "Batteries, Cables &amp; Sensors",
    "img"  => "2015/06/Hill-Rom-Small-Bed-Exit-Sensor-Strip-6360802.jpg",
    "slug" => "batteries-cables-sensors/" ),
  array(
    "name" => "Bariatric Care",
    "img"  => "2017/05/Bariatric_patient_lift-250x275.jpg",
    "slug" => "bariatric-care/" ),
  array(
    "name" => "Burke Bariatric Beds",
    "img"  => "2015/07/Burke-Tri-Flex-II-Bariatric-Bed_400x400-258x275.jpg",
    "slug" => "hospital-beds/burke-bariatric-beds/" ),
  array(
    "name" => "Canes",
    "img"  => "2015/07/MDS86222CHR_PRI02-258x275.jpg",
    "slug" => "mobility/canes/" ),
  array(
    "name" => "Carts &amp; Storage",
    "img"  => "2015/02/Waterloo-Pediatric-Medical-Cart_400x400-258x275.jpg",
    "slug" => "carts-storage/" ),
  array(
    "name" => "Cots &amp; Stretchers",
    "img"  => "2015/06/Ferno-35-A-Mobile-Transporter-Series-291_400x400-258x275.jpg",
    "slug" => "ems-cots-and-stretchers/" ),
  array(
    "name" => "Crutches",
    "img"  => "2015/03/Aluminum-Crutches-PC023230_400x400-258x275.jpg",
    "slug" => "mobility/crutches/" ),
  array(
    "name" => "Diagnostic Equipment",
    "img"  => "2015/02/Nurse-Combo-DG090651_400x400-258x275.jpg",
    "slug" => "diagnostics/" ),
  array(
    "name" => "Furnishings",
    "img"  => "2015/03/Classic-Bedside-Cabinet_400x400-258x275.jpg",
    "slug" => "furniture/" ),
  array(
    "name" => "Hill-Rom Parts",
    "img"  => "2015/05/circuit-board-258x275.jpg",
    "slug" => "hill-rom-parts-online/" ),
  array(
    "name" => "Infection Control",
    "img"  => "2015/02/Brewer-Step-On-Steel-Waste-Can-35269_400x400-258x275.jpg",
    "slug" => "infection-control/" ),
  array(
    "name" => "Infusion &amp; Dialysis",
    "img"  => "2015/05/Alaris-Medley-infusion-pump-combo-IV010519_400x400-258x275.jpg",
    "slug" => "infusion-dialysis/" ),
  array(
    "name" => "Knee Walkers",
    "img"  => "2015/07/PF59316_PRI02-258x275.jpg",
    "slug" => "mobility/knee-walkers/" ),
  array(
    "name" => "Medical Supplies",
    "img"  => "2015/06/3526-258x275.jpg",
    "slug" => "supplies-2/" ),
  array(
    "name" => "Mobility",
    "img"  => "2016/07/Lynx_LX3_blue400-250x275.gif",
    "slug" => "mobility/" ),
  array(
    "name" => "Obstetrics &amp; Pediatrics",
    "img"  => "2015/03/Novum-Medical-Standard-Infant-Crib-1980_400x400-258x275.jpg",
    "slug" => "medical-pediatrics-obstetrics/" ),
  array(
    "name" => "Refrigerators &amp; Freezers",
    "img"  => "2015/04/FF590VAC-31057-main-258x275.jpg",
    "slug" => "refrigerators-freezers/" ),
  array(
    "name" => "Respiratory",
    "img"  => "2015/03/Laerdal-Suction-Unit-RS014201_400x400-258x275.jpg",
    "slug" => "respiratory/" ),
  array(
    "name" => "Rollators",
    "img"  => "2015/07/MDS86850EBS8_PRI03-258x275.jpg",
    "slug" => "mobility/rollators/" ),
  array(
    "name" => "Surgical",
    "img"  => "2015/03/Reconditioned-Amsco-3080-Surgical-Table_400x400-258x275.jpg",
    "slug" => "surgical/" ),
  array(
    "name" => "Walkers",
    "img"  => "2015/07/MDS86410URRH_PRI01-258x275.jpg",
    "slug" => "mobility/walkers/" ),
  array(
    "name" => "Walking Aid Accessories",
    "img"  => "2015/07/G00502_HRE01-258x275.jpg",
    "slug" => "mobility/walking-aids/" ),
  array(
    "name" => "Wheelchairs",
    "img"  => "2015/07/MDS806140PEDE_PRI02-258x275.jpg",
    "slug" => "mobility/wheelchairs-mobility/" )
);

if(function_exists('benz_loop_special_cats')) benz_loop_special_cats($ltcLinks);

?>

    </div>
  </div>
</div>
<!-- /.row -->
</div>
<!-- /.container -->

<?php get_template_part('includes/footer'); ?>
