<?php
  $all_mfrs = array("BAXTER","ALARIS","HILL-ROM","INVACARE","HOSPIRA","MEDLINE","MIDMARK","SPAN AMERICA","SIMLABSOLUTIONS","STRYKER","ZOLL","DRIVE","HAUSTED","JOERNS","LUMEX","AIRPAL","GRAHAM-FIELD","AMICO","KCI","FERNO","TENTE","BURKE","3AM","FOLLETT","SUMMIT INDUSTRIES","MEDMIZER","GRAINGER","HARLOFF","HAUSMANN","WELCH ALLYN","STERIS","LAERDAL","LEADING EDGE","AVKIN");
  asort($all_mfrs);
  $all_mfrs  = partition($all_mfrs, 4);
?>

<nav id="mfrs_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <?php foreach ( $all_mfrs as $mfr_list ) : ?>
        <div class="col-sm-3">
          <ul>
            <?php foreach ($mfr_list as $mfr) : ?>
              <?php  if ($mfr == "HILL-ROM" ) :?>
                <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">
                  <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>
              <?php elseif ( $mfr == "SIMLABSOLUTIONS" ) : ?>
                <a href="<?php echo site_url(); ?>/simlabsolutions/">
                  <li class="top-menu-mfr"><strong><?php echo $mfr ; ?></strong></li>
                </a>
              <?php elseif ( $mfr == "DRIVE" ) : ?>
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
    <!-- <div style="margin-top:8px;text-align:center;" class="row">
      <div class="col-sm-2">
        <a href="<?php echo site_url(); ?>/?s=amico&amp;post_type=product">
          <img style="width: 120px; margin-top: -21px;"src="<?php echo site_url(); ?>/wp-content/imgs/amico_logo.png" />
        </a>
      </div>
      <div class="col-sm-2">
        <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">
          <img src="<?php echo site_url(); ?>/wp-content/imgs/hill-rom-logo.png" />
        </a>
      </div>
      <div class="col-sm-2">
        <a href="<?php echo site_url(); ?>/?s=STRYKER&amp;post_type=product">
          <img src="<?php echo site_url(); ?>/wp-content/imgs/strykerlogo.png" />
        </a>
      </div>
      <div class="col-sm-2">
        <a href="<?php echo site_url(); ?>/?s=hausted&amp;post_type=product">
          <img style="margin-top: 16px;" src="<?php echo site_url(); ?>/wp-content/imgs/haustedlogo.png" />
        </a>
      </div>
      <div class="col-sm-2">
        <a href="<?php echo site_url(); ?>/?s=midmark&amp;post_type=product">
          <img src="<?php echo site_url(); ?>/wp-content/imgs/midmarklogo.png" />
        </a>
      </div>
      <div class="col-sm-2">
        <a href="<?php echo site_url(); ?>/?s=zoll&amp;post_type=product">
          <img style="width: 135px;" src="<?php echo site_url(); ?>/wp-content/uploads/2017/10/ZOLL-Logo-1.jpg" />
        </a>
      </div>
    </div> -->
  </div>
  <div class="text-center">
    <p style="margin: 20px 0 0; background-color: #ffad00; padding: 12px;">Don't want to browse manufacturers? Try searching your manufacturer at the top of the page!</p>
  </div>
</nav>
