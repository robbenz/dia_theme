<!-- Medical Equipment Drop Menu-->
<nav id="med_equipment_drop" style="display:block;" class="drop-menu-panel">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4 class="panel-title">Filter By Your Facility Type</h4>
        <ul>
          <a id="menu_all_main_hover" href="#" class="top-menu-facility-filter">
            <li style="color:#00426a; font-weight:700;font-size:16px;">VIEW ALL CATEGORIES</li>
          </a>
          <a id="hospital_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #00426a;">Hospitals</li>
          </a>
          <a id="nursing_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #2774ae;">Nursing Schools &amp; Simulation</li>
          </a>
          <a id="sls_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #ffad00;">SimLabSolutions.com</li>
          </a>
          <a id="ltc_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #72d0f4;">Long Term Care</li>
          </a>
          <a id="ems_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #d6001c;">Emergency &amp; Rescue</li>
          </a>
          <a id="therapy_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #9e71a2;">Physical Therapy</li>
          </a>
          <a id="veterinary_main_hover" href="#" class="top-menu-facility-filter">
            <li style="border-bottom: 2px solid #657f3f;">Veterinary</li>
          </a>
        </ul>
      </div>

     <?php
     get_template_part('includes/menus/submenus/all-cats-menu');
     get_template_part('includes/menus/submenus/hos-menu');
     get_template_part('includes/menus/submenus/ns-menu');
     get_template_part('includes/menus/submenus/sls-menu');
     get_template_part('includes/menus/submenus/ltc-menu');
     get_template_part('includes/menus/submenus/ems-menu');
     get_template_part('includes/menus/submenus/pt-menu');
     get_template_part('includes/menus/submenus/vet-menu');
     ?>
  </div>
</div>

  <div class="text-center">
    <p style="margin: 10px 0 0; background-color: #00426a; color:#fff; padding: 12px;">Browse our wide selection of medical and instructional products or browse by manufacturer or part number.</p>
  </div>
</nav>
