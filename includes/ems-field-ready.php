<?php


echo '<div class="header-wrap-text-medical-equipment"><h2 class="header-wrap-text-medical-equipment-header">';
  echo 'EMS Field Ready Gear';
  echo '</h2>' ;
  echo ' ';
  echo '</div>';



$ltcLinks = array(
  array(
    "name" => "AEDs, Defibrillators &amp; CPR Management",
    "img"  => "2017/07/life-line-arm-250x275.png",
    "slug" => "aeds-defibrillators/" ),
  array(
    "name" => "Ambulance Child Restraint",
    "img"  => "2017/06/Ambulance-Child-Restraint-1-250x275.png",
    "slug" => "../medical-equipment/emergency-rescue/emergency-transport-supplies/ambulance-child-restraints/ambulance-child-restraint/" ),
  array(
    "name" => "Emergency Accessories",
    "img"  => "2015/08/JSA_1000_W_Fire_Blanket_Cabinet-258x275.jpg",
    "slug" => "emergency-accessories/" ),
  array(
    "name" => "Emergency Bags",
    "img"  => "2015/05/Professional-Resuscitation-Bag-19220_400x400-258x275.png",
    "slug" => "emergency-bags/" ),
  array(
    "name" => "Emergency Cots &amp; Stretchers",
    "img"  => "2015/06/Ferno-35-A-Mobile-Transporter-Series-291_400x4001-258x275.png",
    "slug" => "cots-stretchers-ems/" ),
  array(
    "name" => "Extrication Devices &amp; Patient Transfer",
    "img"  => "2015/05/Spencer-Shell-Basket-Stretcher-19263_400x400-258x275.png",
    "slug" => "emergency-transport-supplies/" ),
  array(
    "name" => "Loaded Emergency Packs™",
    "img"  => "2017/06/Field_Ready_ALS_Jump_Bag-250x275.png",
    "slug" => "field-ready-loaded-packs/" ),
  array(
    "name" => "Trauma Supplies",
    "img"  => "2015/07/Tablu-Tri-Fold-Evacuation-Board-258x275.png",
    "slug" => "immobilization/" )

);

if(function_exists('benz_loop_special_cats')) benz_loop_special_cats($ltcLinks);

?>
