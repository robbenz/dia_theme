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
      $dia_product_cats = array_diff($dia_product_cats, ["Parts", "Infusion Pump - Service &amp; Repairs", "Components - Repairs &amp; Service" ]);
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
              <li><a href="<?php echo site_url(); ?>/product-category/components-service-repairs/"><span>Components</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/cots-stretchers/"><span>Cots &amp; Stretchers</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/exam-tables-repairs/"><span>Exam Tables</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/headwalls-repairs/"><span>Headwalls</span></a></li>
              <li><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/hospital-bed-repair/"><span>Hospital Beds</span></a></li>
              <li><a href="<?php echo site_url(); ?>/product-category/infusion-pump-service-repairs/"><span>Infusion Pumps</span></a></li>
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
      <li class="active has-sub"><a href="<?php echo site_url(); ?>/wp-content/pdf/medaffinity.pdf"><span>Simulation EHR</span></a></li>
    </ul>
  </div>
</aside>
