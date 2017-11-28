<?php
  $all_mfrs = array("Baxter","Alaris","Hill-rom","Cardionics","Clinton","Invacare","Hospira","Medline","Midmark","Span America","Simlabsolutions","Stryker","Zoll","Drive","Hausted","Joerns","Lumex","Airpal","Graham-field","Amico","Kci","Ferno","Tente","Burke","3am Technologies","Follett","Summit Industries","Medmizer","Grainger","Harloff","Hausmann","Welch Allyn","Steris","Laerdal","Leading Edge","Avkin");
  asort($all_mfrs);
  $all_mfrs  = partition($all_mfrs, 4);
  $_x = 0;
?>

<nav id="mfrs_drop" class="drop-menu-panel">
  <div class="container">
    <div style="padding:15px 60px 0px 60px;" class="row">

      <?php foreach ( $all_mfrs as $mfr_list ) :
        if ($_x == 2 ) : ?>
        <div style="text-align:center;" class="col-sm-4">
          <p style="color:#00426a; font-family: 'Lato', sans-serif; font-size:29px;">Manufacturer Directory</p>
          <p style="color:#00426a;font-family: 'Lato', sans-serif; font-size:15px;">DiaMedical USA works with over 500 manufacturers for your one stop shopping convenience. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br /> Just remember...</p>
          <!-- <img style="width:75%;" src="<?php echo site_url(); ?>/wp-content/imgs/Manufacturers_directory.png" /> -->
          <p style="font-family: 'Lato', sans-serif; font-size:24px; color:#00426a;margin-top:10px;" ><em><strong>We Can Do That!</strong></em></p>
        </div>
      <?php endif; ?>
        <div class="col-sm-2">
          <ul>
            <?php foreach ($mfr_list as $mfr) : ?>

              <?php if ($mfr == "Hill-Rom") : ?>
                <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">
              <?php elseif ( $mfr == "Simlabsolutions" ) : ?>
                <a href="<?php echo site_url(); ?>/simlabsolutions/">
              <?php elseif ( $mfr == "Drive" ) : ?>
                <a href="<?php echo site_url(); ?>/?s=DRIVE+MEDICAL+PARTS&amp;post_type=product">
              <?php else : ?>
                <a href="<?php echo site_url(); ?>/?s=<?php echo $mfr ; ?>&amp;post_type=product">
              <?php endif; ?>
              <?php $float = "left" ; if ( $_x == 2 || $_x == 3 )  $float = "right" ; ?>
                  <li style="text-align: <?php echo $float; ?>" class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>

            <?php endforeach; ?>
          </ul>
        </div>
      <?php $_x++; endforeach; ?>

    </div>
  </div>
  <div class="text-center">
    <p style="margin: 20px 0 0; background-color: #78be20; padding: 12px; color:#fff; font-weight:600">We work with over 500 manufacturers for your one stop shopping convenience.</p>
  </div>
</nav>
