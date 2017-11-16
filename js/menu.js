(function($) {
  "use strict";
  $(document).ready(function() {


    var timer = 0;

    $(".top-menu-main-a").mouseenter(function(){$(this).addClass('hoverline');}).mouseleave(function(){$(this).removeClass('hoverline');});
    $("#masthead").mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(100);});
    $(".drop-menu-panel").mouseleave(function(){$('.drop-menu-panel').stop().fadeOut(100);});
    $("#main_home").mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(100);});

    function showTopDropMenus (hoveredLink, shownMenu) {
      $(hoveredLink).mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $(shownMenu).stop().fadeIn(100);
        }, 200);
      })
      .mouseleave(function(){
        clearTimeout(timer);
      });
    }

    showTopDropMenus('#main_medical_equipment', '#med_equipment_drop');
    showTopDropMenus('#main_part_search', '#parts_drop');
    showTopDropMenus('#main_service', '#service_drop');
    showTopDropMenus('#main_manufacturers', '#mfrs_drop');
  //  showTopDropMenus('#main_contact_us', '#contact_drop');
  //  showTopDropMenus('#main_my_account', '#account_drop');

  });
}(jQuery));
