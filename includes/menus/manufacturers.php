<style>

.top-menu-mfr {margin: 20px auto;}
.top-menu-mfr-img {margin: 20px auto;}

</style>

<?php
  $mfrs = array("ALARIS","BAXTER","HILL-ROM","INVACARE","HOSPIRA","MEDLINE","MIDMARK","SPAN AMERICA","SIMLABSOLUTIONS","STRYKER","ZOLL","DRIVE","HAUSTED","JOERNS","LUMEX","AIRPAL","GRAHAM-FIELD","AMICO","KCI","FERNO","TENTE","BURKE","3AM","FOLLETT","SUMMIT INDUSTRIES","MEDMIZER","GRAINGER","HARLOFF","HAUSMANN","WELCH ALLYN","STERIS","LAERDAL","LEADING EDGE","AVKIN");
  asort($mfrs);
?>

<nav id="mfrs_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <ul>
          <?php foreach ($mfrs as $mfr) { ?>
            <a href="<?php echo site_url(); ?>/?s='<?php $mfr ?>'&amp;post_type=product"><li class="top-menu-mfr"><strong><?php $mfr ?></strong></li></a>
          <?php } ?>
        </ul>
      </div>
      <div class="col-sm-3 text-center">
        <a href="<?php echo site_url(); ?>/simlabsolutions/"><img src="<?php echo site_url(); ?>/wp-content/imgs/includes/sim-lab.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/"><img alt="Reconditioned Hill Rom Parts" src="<?php echo site_url(); ?>/wp-content/imgs/Hill-Rom-MFT.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/?s=HAUSTED&amp;post_type=product"><img src="<?php echo site_url(); ?>/wp-content/imgs/haustedlogo.png" class="top-menu-mfr-img"/></a>
      </div>
    </div>
  </div>
  <div class="text-center">
    <p style="margin: 40px 0 0; background-color: #ffad00; padding: 12px;">Don't want to browse manufacturers? Try searching your manufacturer at the top of the page!</p>
  </div>
</nav>












<!--

<nav id="mfrs_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <ul>
          <a href="<?php echo site_url(); ?>/?s=ALARIS&amp;post_type=product"><li class="top-menu-mfr"><strong>ALARIS</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=BAXTER&amp;post_type=product"><li class="top-menu-mfr"><strong>BAXTER</strong></li></a>
          <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/"><li class="top-menu-mfr"><strong>HILL-ROM</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=INVACARE&amp;post_type=product"><li class="top-menu-mfr"><strong>INVACARE</strong></li></a>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
          <a href="<?php echo site_url(); ?>/?s=HOSPIRA&amp;post_type=product"><li class="top-menu-mfr"><strong>HOSPIRA</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=MEDLINE&amp;post_type=product"><li class="top-menu-mfr"><strong>MEDLINE</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=MIDMARK&amp;post_type=product"><li class="top-menu-mfr"><strong>MIDMARK</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=SPAN+AMERICA&amp;post_type=product"><li class="top-menu-mfr"><strong>SPAN AMERICA</strong></li></a>
        </ul>
      </div>
      <div class="col-sm-3">
        <ul>
          <a href="<?php echo site_url(); ?>/simlabsolutions"><li class="top-menu-mfr"><strong>SIMLABSOLUTIONS</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=STRYKER&amp;post_type=product"><li class="top-menu-mfr"><strong>STRYKER</strong></li></a>
          <a href="<?php echo site_url(); ?>/?s=zoll&amp;post_type=product"><li class="top-menu-mfr"><strong>ZOLL</strong></li></a>
          <a href="<?php echo site_url(); ?>/manufacturers/"><li class="top-menu-mfr"><strong>View All</strong></li></a>
        </ul>
      </div>
      <div class="col-sm-3 text-center">
        <a href="<?php echo site_url(); ?>/simlabsolutions/"><img src="<?php echo site_url(); ?>/wp-content/imgs/includes/sim-lab.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/"><img alt="Reconditioned Hill Rom Parts" src="<?php echo site_url(); ?>/wp-content/imgs/Hill-Rom-MFT.png" class="top-menu-mfr-img"/></a>
        <a href="<?php echo site_url(); ?>/?s=HAUSTED&amp;post_type=product"><img src="<?php echo site_url(); ?>/wp-content/imgs/haustedlogo.png" class="top-menu-mfr-img"/></a>
      </div>
    </div>
  </div>
  <div class="text-center">
    <p style="margin: 40px 0 0; background-color: #ffad00; padding: 12px;">Don't want to browse manufacturers? Try searching your manufacturer at the top of the page!</p>
  </div>
</nav>
  -->
<!--

<ul class="sub-menu" style="
    display: block;
">	<li id="menu-item-57627" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-57627"><a href="https://diamedicalusa.com/?s=ALARIS&amp;post_type=product">ALARIS</a><ul class="sub-menu">		<li id="menu-item-57628" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57628"><a href="">BAXTER</a></li>
		<li id="menu-item-57554" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-57554"><a href="https://diamedicalusa.com/product-category/hill-rom-parts-online/">HILL-ROM</a></li>
		<li id="menu-item-57629" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-57629"><a href="">INVACARE</a></li>
	</ul>
</li>
	<li id="menu-item-57630" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-57630"><a href="">HOSPIRA</a><ul class="sub-menu">		<li id="menu-item-57632" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-57632"><a href="">MEDLINE</a></li>
		<li id="menu-item-57633" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-57633"><a href="">MIDMARK</a></li>
		<li id="menu-item-70996" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-70996"><a href="">SPAN AMERICA</a></li>
	</ul>
</li>
	<li id="menu-item-57637" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-57637"><a href="">SimLabSolutions</a><ul class="sub-menu">		<li id="menu-item-57638" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-57638"><a href="">STRYKER</a></li>
		<li id="menu-item-57631" class="benz-blueheader menu-item menu-item-type-custom menu-item-object-custom menu-item-57631"><a href="">ZOLL</a></li>
		<li id="menu-item-57639" class="benz-viewall menu-item menu-item-type-custom menu-item-object-custom menu-item-57639"><a href="">View All</a></li>
	</ul>
</li>
<div class="benz-bottom-colors" style="background-color:#f1c400;">Don’t want to browse manufacturers? Try searching your manufacturer at the top of the page!</div>
<div class="arrow-down"></div>
<a href="https://diamedicalusa.com/product-category/hill-rom-parts-online/"><img alt="Reconditioned Hill Rom Parts" src="https://11phezz50jn48hxwx40jk1k1-wpengine.netdna-ssl.com/wp-content/imgs/Hill-Rom-MFT.png" id="benz-menu-img-mft1" class="benz-menu-img"></a>
<a href="https://www.diamedicalusa.com/simlabsolutions/"><img src="https://11phezz50jn48hxwx40jk1k1-wpengine.netdna-ssl.com/wp-content/imgs/includes/sim-lab.png" id="benz-menu-img-mft4" style="position: relative; top: -79px; width: 269px; left: 70px;" class="benz-menu-img"></a>
<a href="https://www.diamedicalusa.com/?s=hausted&amp;post_type=product"><img src="https://11phezz50jn48hxwx40jk1k1-wpengine.netdna-ssl.com/wp-content/imgs/haustedlogo.png" id="benz-menu-img-mft3" class="benz-menu-img"></a></ul> -->
