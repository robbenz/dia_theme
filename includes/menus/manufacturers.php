<?php
  $mfrs = array("BAXTER","ALARIS","HILL-ROM","INVACARE","HOSPIRA","MEDLINE","MIDMARK","SPAN AMERICA","SIMLABSOLUTIONS","STRYKER","ZOLL","DRIVE","HAUSTED","JOERNS","LUMEX","AIRPAL","GRAHAM-FIELD","AMICO","KCI","FERNO","TENTE","BURKE","3AM","FOLLETT","SUMMIT INDUSTRIES","MEDMIZER","GRAINGER","HARLOFF","HAUSMANN","WELCH ALLYN","STERIS","LAERDAL","LEADING EDGE","AVKIN");
  asort($mfrs);
  $mfrslength = count($mfrs);
  $mfrsthird = (int)($mfrslength / 3) + 2;
  $_x = 0;
?>

<nav id="mfrs_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <ul>
          <?php
          foreach ($mfrs as $mfr) :
            $_x++;
            if ($_x == $mfrsthird) :
              $_x = 1;
              ?>
              </ul></div><div class="col-sm-3"><ul>
            <?php endif;

            if ($mfr == "HILL-ROM" ) :?>
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
          <a href="<?php echo site_url(); ?>/manufacturers/"><li class="top-menu-mfr"><strong>View All</strong></li></a>
        </ul>
      </div>
      <div class="col-sm-3 text-center top-menu-mfr-container">
        <!-- <a href="<?php echo site_url(); ?>/simlabsolutions/"><img src="<?php echo site_url(); ?>/wp-content/imgs/includes/sim-lab.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/"><img alt="Reconditioned Hill Rom Parts" src="<?php echo site_url(); ?>/wp-content/imgs/Hill-Rom-MFT.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/?s=AMICO&amp;post_type=product/"><img alt="Amico" src="<?php echo site_url(); ?>/wp-content/uploads/2017/07/Amico_Logo-1.jpeg" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/?s=HAUSTED&amp;post_type=product"><img src="<?php echo site_url(); ?>/wp-content/imgs/haustedlogo.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/?s=FERNO&amp;post_type=product"><img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/ferno.jpg" class="top-menu-mfr-img"/></a> -->
        <a href="<?php echo site_url(); ?>/manufacturers/"><img src="<?php echo site_url(); ?>/wp-content/uploads/2017/11/product_logos.png" class="top-menu-mfr-img"/></a>
      </div>
    </div>
  </div>
  <div class="text-center">
    <p style="margin: 40px 0 0; background-color: #ffad00; padding: 12px;">Don't want to browse manufacturers? Try searching your manufacturer at the top of the page!</p>
  </div>
</nav>
