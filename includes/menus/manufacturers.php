<?php
  $all_mfrs = array("Arjo Huntleigh | Getinge Group","Baxter","Alaris","Hill-rom","Cardionics","Clinton Industries","Invacare","Hospira","Midmark","Span America","SimLabSolutions","Stryker","Zoll","Drive","Hausted","Joerns","Lumex","Airpal","GF Health","Amico","KCI","Ferno","Tente","Burke inc.","3am Technologies","Follett","Summit Industries","Medmizer","Grainger","Harloff","Hausmann","Welch Allyn","Steris","Laerdal","Leading Edge","Avkin");
  asort($all_mfrs);
  $all_mfrs  = partition($all_mfrs, 4);
?>

  <nav id="mfrs_drop" class="drop-menu-panel">
    <div class="container">
      <div style="text-align:center" class="row">
        <div class="col-md-12">
          <p style="background-color:#78be20;color:#fff; letter-spacing:1px; font-family: 'ristretto_promedium', Arial, sans-serif; font-size:45px;">MANUFACTURERS DIRECTORY</p>
        </div>
      </div>
      <div style="padding:15px 60px 0px 60px;" class="row">
        <div style="text-align:center;" class="col-sm-4">
          <img style="width:100%;margin-top:3em;" src="<?php echo site_url(); ?>/wp-content/imgs/Scale_manufacturers.png" />
        </div>

        <?php foreach ( $all_mfrs as $mfr_list ) : ?>

        <div class="col-sm-2">
          <ul>
            <?php foreach ($mfr_list as $mfr) : ?>
              <?php if ($mfr == "Hill-Rom") : ?>
                <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">
              <?php elseif ( $mfr == "Simlabsolutions" ) : ?>
                <a href="<?php echo site_url(); ?>/simlabsolutions/">
              <?php elseif ( $mfr == "Drive" ) : ?>
                <a href="<?php echo site_url(); ?>/?s=DRIVE+MEDICAL+PARTS&amp;post_type=product">
              <?php elseif ( $mfr == "GF Health" ) : ?>
                <a href="<?php echo site_url(); ?>/?s=graham+field&amp;post_type=product">
              <?php elseif ( $mfr == "Arjo Huntleigh | Getinge Group" ) : ?>
                <a href="<?php echo site_url(); ?>/?s=arjo&amp;post_type=product">
              <?php else : ?>
                <a href="<?php echo site_url(); ?>/?s=<?php echo $mfr ; ?>&amp;post_type=product">
              <?php endif; ?>
              <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
            </a>
          <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <p>&nbsp;</p>
      </div>
      <div class="col-md-2">
        <a href="<?php echo site_url(); ?>/manufacturers/">
          <p style="background-color:#78be20;color:#fff;padding:0.5em;font-size:15px;text-align:center;">View All</p>
        </a>
      </div>
      <div class="col-md-1">
        <p>&nbsp;</p>
      </div>
    </div>

<div class="text-center">
  <p style="margin: 20px 0 0; background-color: #78be20; padding: 12px; color:#fff; font-weight:600">We work with over 500 manufacturers for your one stop shopping convenience.</p>
</div>
  </nav>
