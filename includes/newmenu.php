<nav id="drop-menu" class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header main-navbar-header">
      <ul class="top-menu-ul">
        <a class="top-menu-main-a" id="main_home" href="<?php echo site_url(); ?>"><li>HOME</li></a>
        <a class="top-menu-main-a" id="main_medical_equipment" href="#"><li>MEDICAL EQUIPMENT</li></a>
        <a class="top-menu-main-a" id="main_part_search" href="#"><li>PART SEARCH</li></a>
        <a class="top-menu-main-a" id="main_service" href="#"><li>SERVICE</li></a>
        <a class="top-menu-main-a" id="main_manufacturers" href="#"><li>MANUFACTURERS</li></a>
        <a class="top-menu-main-a" id="main_contact_us" href="<?php echo site_url(); ?>/contact-us/"><li>CONTACT US</li></a>
        <a class="top-menu-main-a" id="main_my_account" href="<?php echo site_url(); ?>/my-account/"><li>MY ACCOUNT</li></a>
      </ul>
    </div>
  </div>
</nav>

<?php
get_template_part('includes/menus/medical-equipment');
get_template_part('includes/menus/parts-search');
get_template_part('includes/menus/service');
get_template_part('includes/menus/manufacturers');
// get_template_part('includes/menus/contact-us');
// get_template_part('includes/menus/my-account');
?>
