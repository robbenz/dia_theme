<?php
  $all_mfrs = array("Baxter","Alaris","Hill-rom","Cardionics","Clinton","Invacare","Hospira","Medline","Midmark","Span America","Simlabsolutions","Stryker","Zoll","Drive","Hausted","Joerns","Lumex","Airpal","Graham-field","Amico","Kci","Ferno","Tente","Burke","3am","Follett","Summit Industries","Medmizer","Grainger","Harloff","Hausmann","Welch Allyn","Steris","Laerdal","Leading Edge","Avkin");
  asort($all_mfrs);
  $all_mfrs  = partition($all_mfrs, 4);
?>

<nav id="mfrs_drop" style="display:block;" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div style="text-align:center;" class="col-sm-4">
        <!-- <p style="color:#00426a; font-family: 'ristretto_proregular',sans-serif; font-size:34px;">DiaMedical USA</p> -->
        <p style="color:#00426a; font-family: 'ristretto_proregular',sans-serif; font-size:34px;">Manufacturer Directory</p>
        <!-- <p style="color:#00426a;font-family: 'Lato', sans-serif; font-size:16px;">Manufacturer Directory</p> -->
        <img style="width:75%;" src="<?php echo site_url(); ?>/wp-content/imgs/Manufacturers_directory.png" />
        <p style="font-family: 'Lato', sans-serif; font-size:24px; color:#00426a;margin-top:10px;" ><em><strong>We Can Do That!</strong></em></p>
      </div>
      <?php foreach ( $all_mfrs as $mfr_list ) : ?>
        <div class="col-sm-2">
          <ul>
            <?php foreach ($mfr_list as $mfr) : ?>
              <?php if ($mfr == "Hill-Rom") : ?>
                <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">
                  <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>
              <?php elseif ( $mfr == "Simlabsolutions" ) : ?>
                <a href="<?php echo site_url(); ?>/simlabsolutions/">
                  <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>
              <?php elseif ( $mfr == "Drive" ) : ?>
                <a href="<?php echo site_url(); ?>/?s=DRIVE+MEDICAL+PARTS&amp;post_type=product">
                  <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>
              <?php else : ?>
                <a href="<?php echo site_url(); ?>/?s=<?php echo $mfr ; ?>&amp;post_type=product">
                  <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <div class="text-center">
    <p style="margin: 20px 0 0; background-color: #78be20; padding: 12px; color:#fff; font-weight:600">We work with over 500 manufacturers for your one stop shopping convenience.</p>
  </div>
</nav>
