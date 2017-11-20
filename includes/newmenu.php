<style>
  .top-menu-ul {padding: 0; margin-bottom: 0; width: 100%; list-style: none; display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-pack: distribute; justify-content: space-around;}
  a.top-menu-main-a li {text-decoration: none; color: white; display: inline-block;}
  .main-navbar-header {width: 100%;}
  .top-menu-main-a {padding: 12px 20px; border-bottom: 0; -webkit-transition: all 0.2s; transition: all 0.2s;}
  .hoverline {border-bottom: 2px solid white; -webkit-transition: all 0.2s; transition: all 0.2s;}
  .drop-menu-panel {display: none; width: 100%; padding: 10px 0 0; background-color: white; background-color: rgba(255,255,255,0.95); position: absolute; z-index: 6666;}
  #med_equipment_drop ul {list-style: none;}
  #med_equipment_drop li {text-decoration: none;}
  #hospital_main{}
  #column4_menu_list{-webkit-columns: 100px 4;columns: 100px 4;}
  #menu_all_main h6{margin-top:0px; margin-bottom: 15px; font-weight: 600; font-size: 15px; }
  .mve_cols { padding-top:16px; padding-bottom:10px;}
  .mve_cols li{margin-left:6px;}
  .mve_cols h3 {text-align:center; color:#fff; margin-top:-20px; margin-bottom:20px;font-size:20px; padding:10px;}
  .mve_cols h4{font-size: 16px;text-transform: uppercase;font-weight:600;margin-bottom:5px;margin-top:0px;}
  .top-menu-mfr, .top-menu-mfr-img {margin: 20px auto;}
  a.top-menu-facility-filter {padding: 5px auto;}
  a.top-menu-facility-filter:hover {text-decoration:none;}
  .top-menu-mfr-container {height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: space-around;}
  a.top-menu-facility-filter li {margin: 9px auto;padding: 8px; font-weight: 600;font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'; color:#000;}
  #drop-menu {margin-bottom: 0px !important;}
  #med_equipment_drop ul {margin-bottom:0px;padding-left: 10px;}
  #med_equipment_drop a:hover {cursor: pointer;}
  #service_drop li { margin: 20px 0px; font-weight:700;}
  .text-center p {font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'; font-size: 15px; }
  #parts_drop #searchform {width:100%;}
  #parts_drop #searchform input#s{height:50px;width:1080px;font-size:16px;}
  #parts_drop #searchsubmit {height:50px;width: 52px;}
  #parts_drop h3 {color:#00426a;font-size: 24px;font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif';}
  #parts_drop .col-sm-2 {line-height:100px; height:100px;}
  #parts_drop img {vertical-align: middle;}
  .menu-view-all{font-size:0.92em; text-decoration: underline !important; margin-bottom:8px;}
  #med_equipment_drop .mve_cols li {color:#000;}

</style>

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
