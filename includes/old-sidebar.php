<style>
/*LEFT MENU*/
#dmcssmenu4 {margin:1px 0 0 2px; height: 1397px; width: 250px; list-style: none; padding: 0px; border: 0; text-shadow:none;
-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;}
#dmcssmenu4 ul,
#dmcssmenu4 ul li {list-style: none;margin: 0;padding: 0;border: 0;background-color: transparent;}
#dmcssmenu4 ul ul li {list-style: none;margin: 0;padding: 0;border: 0;background-color: #f4f4f5;text-transform: none;}
#dmcssmenu4 ul {position: relative;z-index: 1;float: left;}
#dmcssmenu4 ul li.has-sub {text-transform: none; background-color: #fff; border-bottom: 2px solid #00426a!important; line-height: 1em; margin: 0.3em 0; min-height: 1px; pointer-events: auto;text-align: center;text-shadow: none; vertical-align: middle;}
#dmcssmenu4 ul li.has-sub:after {
    content: "";
    background-color: #00426a;;
    height: 2px;
    display: block;
    top: 2px;
    position: relative;
    background: -webkit-linear-gradient(to right,rgba(255,255,255,1) -1%, rgba(255,255,255,0) 50%, rgba(255,255,255,1) 100%);  /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(to right,rgba(255,255,255,1) -1%, rgba(255,255,255,0) 50%, rgba(255,255,255,1) 100%);  /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(to right,rgba(255,255,255,1) -1%, rgba(255,255,255,0) 50%, rgba(255,255,255,1) 100%);  /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right,rgba(255,255,255,1) -1%, rgba(255,255,255,0) 50%, rgba(255,255,255,1) 100%);  /* Standard syntax */
}

#dmcssmenu4 ul li.hover,
#dmcssmenu4 ul li:hover {position: relative;z-index: 599;cursor: default; text-shadow:none;text-transform: uppercase;}
#dmcssmenu4 ul ul {margin-top: 0px;visibility: hidden;position: absolute;top: 0px;left: 97%; z-index: 598;width: 100%; }
#dmcssmenu4 ul ul li {float: none;}
#dmcssmenu4 ul ul ul {top: 1px;left: 99%;}
#dmcssmenu4 ul li:hover > ul {visibility: visible; text-shadow:none;}
#dmcssmenu4 ul li {float: none;}
#dmcssmenu4 ul ul li {font-weight: normal;}
#dmcssmenu4 {font-family: 'Lato', sans-serif !important;border: 0;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;}
#dmcssmenu4 ul a,
#dmcssmenu4 ul a:link,
#dmcssmenu4 ul a:visited {display: block;color: #00426a;text-decoration: none;font-weight: 700;}
#dmcssmenu4 > ul {float: none;}
#dmcssmenu4 > ul > li > a { font-family: 'Lato',sans-serif !important;  font-size: 15.2px !important; padding: 5px 1px !important;}
#dmcssmenu4 > ul > li:hover { text-shadow:none;text-decoration: none;}
#dmcssmenu4 ul li:hover > a {color: #fff; text-decoration: none; border-bottom:none; font-weight: 500;text-shadow:none;}
#dmcssmenu4 > ul > li:hover {background: #00426a;border-bottom:none;}
#dmcssmenu4 ul ul a:link,
#dmcssmenu4 ul ul a:visited {font-weight: 700;font-size: 14px;color:#f1f1f1;}
#dmcssmenu4 ul ul a:hover {color: #00426a;background-color:#f1f1f1;}
#dmcssmenu4 ul ul { width: 225px; background: none; padding-left: 10px; }
#dmcssmenu4 ul ul a {padding: 5.69px 0;}
#dmcssmenu4 ul ul li {background-color: #00426a; line-height: 1.4em;}
#dmcssmenu4 ul ul li:first-child:after {content: '';display: block;width: 0;height: 0;position: absolute;left: -20px;top: 13px; }
/*END MENU*/
</style>
<aside class="sidebar">
  <div id="dmcssmenu4" style="pointer-events:auto;">
    <ul>
      <?php
      $dia_product_cats = array(
        "Loaded Crash Carts&trade;",
        "Loaded Emergency Packs&trade;",
        "Service &amp; Repairs"
      );
      $args = array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'show_count'   => 0,   // 1 for yes, 0 for no
        'pad_counts'   => 0,   // 1 for yes, 0 for no
        'hierarchical' => 1,   // 1 for yes, 0 for no
        'title_li'     => '',
        'hide_empty'   => 0
      );
      $all_categories = get_categories( $args );
      foreach ($all_categories as $cat) {
        if($cat->category_parent == 0) {
          array_push($dia_product_cats, $cat->name );
        }
      }
      $dia_product_cats = array_diff($dia_product_cats, ["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]);
      asort($dia_product_cats);
      foreach ( $dia_product_cats as $KAT ) {
        if ($KAT == "Loaded Crash Carts&trade;"){ ?>
          <li class="active has-sub">
            <a href="<?php echo site_url(); ?>/product-category/carts-storage/loaded-crash-carts/"><span>Loaded Crash Carts&trade;</span></a>
            <ul>
              <li><a href="<?php echo site_url(); ?>/product-category/carts-storage/refill-kits/"><span>Crash Cart Refill Kits</span></a></li>
              <li><a href="<?php echo site_url(); ?>/medical-equipment/carts-storage/loaded-crash-carts/loaded-5-emergency-crash-cart-kit/"><span>Loaded 5-Drawer Emergency Crash Cart Kit</span></a></li>
              <li><a href="<?php echo site_url(); ?>/medical-equipment/carts-storage/loaded-crash-carts/emergency-crash-cart/"><span>Loaded 6 Drawer Emergency Crash Cart Kit</span></a></li>
              <li><a href="<?php echo site_url(); ?>/medical-equipment/carts-storage/loaded-crash-carts/isolation-cart-kit/"><span>Loaded Isolation Cart Kit</span></a></li>
              <li><a href="<?php echo site_url(); ?>/medical-equipment/carts-storage/loaded-crash-carts/loaded-medication-cart-kit/"><span>Loaded Medication Cart Kit</span></a></li>
              <li><a href="<?php echo site_url(); ?>/medical-equipment/carts-storage/loaded-crash-carts/pediatric-crash-cart/"><span>Loaded Pediatric Crash Cart Kit</span></a></li>
            </ul>
          </li>
          <?php
        } elseif ($KAT == "Loaded Emergency Packs&trade;"){ ?>
          <li class="active has-sub">
            <a href="<?php echo site_url(); ?>/product-category/emergency-rescue/loaded-emergency-packs/"><span>Loaded Emergency Packs&trade;</span></a>
            <ul>
              <?php
              $ems_packs = array (
                  'ALS Training Pack' => 'loaded-als-training-pack',
                  'BLS Training Pack' => 'loaded-bls-training-pack',
                  'Pediatric Training Pack' => 'loaded-pediatric-training-pack',
                  'Simulated Medication Box' => 'loaded-simulated-medication-box',
                  'Opioid Overdose Training Kit' => 'opioid-overdose-training-kit'
              );
              foreach($ems_packs as $name => $slug) {
             echo '<li><a href="'.site_url().'/medical-equipment/emergency-rescue/loaded-emergency-packs/'.$slug.'/"><span>'.$name.'</span></a></li>';
           } ?>
            </ul>
          </li>
          <?php
        } elseif ($KAT == "Service &amp; Repairs") { ?>
          <li class="active has-sub">
            <a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/"><span>Service &amp; Repairs</span></a>
            <ul>
              <li><a href="<?php echo site_url(); ?>/product-category/on-site-repairs-preventive-maintenance/aeds-defibrillators-service-repairs/"><span>AEDS &amp; Defibrillators</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/on-site-repairs-preventive-maintenance/components-service-repairs/"><span>Components</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/cots-stretchers/"><span>Cots &amp; Stretchers</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/exam-tables-repairs/"><span>Exam Tables</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/headwalls-repairs/"><span>Headwalls</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/hospital-bed-repair/"><span>Hospital Beds</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/on-site-repairs-preventive-maintenance/infusion-pump-service-repairs/"><span>Infusion Pumps</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/vital-signs-monitors-repairs"><span>Vital Signs Monitors</span></a></li>
            </ul>
          </li>
          <?php
        } elseif ($KAT == "EMS Field Ready Gear") { ?>
          <li class="active has-sub">
            <a href="<?php echo site_url(); ?>/field-ready-ems-equipment/"><span>EMS Field Ready Gear</span></a>
            <ul>
              <li><a href="<?php echo site_url(); ?>/product-category/ems-field-ready-gear/airway-respiratory/"><span>Airway &amp; Respiratory</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/aeds-defibrillators/"><span>AEDs, Defibrillators &amp; CPR Management</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/emergency-rescue/emergency-accessories/"><span>Emergency Accessories</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/emergency-rescue/emergency-bags/"><span>Emergency Bags</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/emergency-rescue/cots-stretchers-ems/"><span>Emergency Cots &amp; Stretchers</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/ems-field-ready-gear/ems-field-ready-bundles/"><span>EMS Field Ready Bundles</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/emergency-rescue/emergency-transport-supplies/"><span>Extrication Devices &amp; Patient Transfer</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/field-ready-loaded-packs/"><span>Loaded Emergency Packs™</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/emergency-rescue/immobilization/"><span>Trauma Supplies</span></a></li>


            </ul>
          </li>
          <?php
        } else {
          woocommerce_subcats_from_parentcat_by_NAME($KAT);
        }
      }
      ?>
    </ul>
  </div>
</aside>
