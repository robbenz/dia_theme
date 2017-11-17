<!-- Parts Search Drop Menu-->
<style>
#parts_drop #searchform {width:100%;}
#parts_drop #searchform input#s{height:50px;width:1080px;font-size:16px;}
#parts_drop #searchsubmit {height:50px;width: 52px;}
#parts_drop h3{color:#00426a;font-size: 24px;font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';}
#parts_drop .col-sm-2 {line-height:100px; height:100px;}
#parts_drop img{vertical-align: middle;}
</style>

<nav id="parts_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <h3>PART SEARCH</h3>
      <?php get_template_part('includes/navbar-search'); ?>
    </div>
    <div style="margin-top:8px;text-align:center;" class="row">
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
    </div>
  </div>
  <div class="text-center">
    <p style="margin: 10px 0 0; background-color: #78be20; padding: 12px;">Can’t find the part you’re looking for? Submit a request and we’ll email you a quote!</p>
  </div>
</nav>
