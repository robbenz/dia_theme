<style>
  .top-menu-ul {padding: 0; margin-bottom: 0; width: 100%; list-style: none; display: flex; justify-content: space-around;}
  a.top-menu-main-a li {text-decoration: none; color: white; display: inline-block;}
  .main-navbar-header {width: 100%;}
  .top-menu-main-a {padding: 12px 20px;}
  .hoverline {border-bottom: 2px solid white;}
  .drop-menu-panel {display: none; width: 100%; padding: 10px 0 40px; background-color: rgba(255,255,255,0.92); border-bottom: 2px solid #ccc; position: absolute; z-index: 6666;}
  ul {list-style: none;}
  li {text-decoration: none;}
  #mve_cols {columns: 80px 3;}
  a.top-menu-facility-filter li {margin: 10px auto;}
</style>





<script type="text/javascript">

(function($) {
  "use strict";
  $(document).ready(function() {


    var timer = 0;


    $(".top-menu-main-a")
      .mouseenter(function(){
        // clearTimeout(timer);
        $(this).addClass('hoverline');
        timer = setTimeout(function(){
          $('#med_equipment_drop').stop().fadeIn(200);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        $(this).removeClass('hoverline');
        console.log(timer);
      });



    $("#masthead").mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(200);});



    $(".drop-menu-panel").mouseleave(function(){$('.drop-menu-panel').stop().fadeOut(200);});



  });
}(jQuery));



</script>








<nav id="drop-menu" class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header main-navbar-header">
      <ul class="top-menu-ul">
        <a class='top-menu-main-a' id='main_home' href='#'><li>HOME</li></a>
        <a class='top-menu-main-a' id='main_medical_equipment' href='#'><li>MEDICAL EQUIPMENT</li></a>
        <a class='top-menu-main-a' id='main_part_search' href='#'><li>PART SEARCH</li></a>
        <a class='top-menu-main-a' id='main_service' href='#'><li>SERVICE</li></a>
        <a class='top-menu-main-a' id='main_manufacturers' href='#'><li>MANUFACTURERS</li></a>
        <a class='top-menu-main-a' id='main_contact_us' href='#'><li>CONTACT US</li></a>
        <a class='top-menu-main-a' id='main_my_account' href='#'><li>MY ACCOUNT</li></a>
      </ul>
    </div>
  </div>
</nav>

<!-- Medical Equipment Drop Menu-->
<nav id="med_equipment_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h4 class="panel-title">Filter By Your Facility Type</h4>
        <ul>
          <a href="#" class="top-menu-facility-filter"><li>VIEW ALL CATEGORIES</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Hospitals</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Nursing Schools & Simulation</li></a>
          <a href="#" class="top-menu-facility-filter"><li>SimLabSolutions.com</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Long Term Care</li></a>
          <a href="#" class="top-menu-facility-filter"><li>EMS Education</li></a>
          <a href="#" class="top-menu-facility-filter"><li>EMS Field Ready</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Physical Therapy</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Veterinarian</li></a>
        </ul>
      </div>
      <div class="col-sm-9" id="mve_cols">
        <ul>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <a class="hospital-stuff"><li>Hospital stuff</li></a>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
          <li>Medication Dispensing</li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- Parts Search Drop Menu-->
<nav id="parts_drop" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h4 class="panel-title">Filter By Your Facility Type</h4>
        <ul>
          <a href="#" class="top-menu-facility-filter"><li>VIEW ALL CATEGORIES</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Hospitals</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Nursing Schools & Simulation</li></a>
          <a href="#" class="top-menu-facility-filter"><li>SimLabSolutions.com</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Long Term Care</li></a>
          <a href="#" class="top-menu-facility-filter"><li>EMS Education</li></a>
          <a href="#" class="top-menu-facility-filter"><li>EMS Field Ready</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Physical Therapy</li></a>
          <a href="#" class="top-menu-facility-filter"><li>Veterinarian</li></a>
        </ul>
      </div>
      <div class="col-sm-9" id="mve_cols">

      </div>
    </div>
  </div>
</nav>
