<style>
  .top-menu-ul {padding: 0; margin-bottom: 0; width: 100%; list-style: none; display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-pack: distribute; justify-content: space-around;}
  a.top-menu-main-a li {text-decoration: none; color: white; display: inline-block;}
  .main-navbar-header {width: 100%;}
  .top-menu-main-a {padding: 12px 20px;}
  .hoverline {border-bottom: 2px solid white;}
  .drop-menu-panel {display: none; width: 100%; padding: 10px 0 0; background-color: white; background-color: rgba(255,255,255,0.95); border-bottom: 2px solid #ccc; position: absolute; z-index: 6666;}
  ul {list-style: none;}
  li {text-decoration: none;}
  #mve_cols {-webkit-columns: 80px 3;columns: 80px 3;}
  a.top-menu-facility-filter li {margin: 10px auto;}
</style>


<nav id="drop-menu" class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header main-navbar-header">
      <ul class="top-menu-ul">
        <a class='top-menu-main-a' id='main_home' href='#'><li>HOME</li></a>
        <a class='top-menu-main-a' id='main_medical_equipment' href='#'><li>MEDICAL EQUIPMENT</li></a>
        <a class='top-menu-main-a' id='main_part_search' href='#'><li>PART SEARCH</li></a>
        <a class='top-menu-main-a' id='main_service' href='#'><li>SERVICE</li></a>
        <a class='top-menu-main-a' id='main_manufacturers' href='#'><li>MANUFACTURERS</li></a>
        <a class='top-menu-main-a' id='main_contact_us' href='<?php echo site_url(); ?>'><li>CONTACT US</li></a>
        <a class='top-menu-main-a' id='main_my_account' href='<?php echo site_url(); ?>'><li>MY ACCOUNT</li></a>
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
