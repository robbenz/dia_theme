(function($) {
  "use strict";
  $(document).ready(function() {

    var timer = 0;

    // hover underline effect
    $(".top-menu-main-a").mouseenter(function(){removeUnderline();$(this).addClass('hoverline');});
    $('#main_home').mouseleave(function(){$(this).removeClass('hoverline');});
    $('#main_my_account').mouseleave(function(){$(this).removeClass('hoverline');});
    $('#main_contact_us').mouseleave(function(){$(this).removeClass('hoverline');});

    // keep the menu open only in appropriate mouse locations
    $("#masthead").mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(100); removeUnderline();});

    $(".drop-menu-panel").mouseleave(function(){$('.drop-menu-panel').stop().fadeOut(100); removeUnderline();});

    // remove the underline from hovered menu link
    function removeUnderline() {
      $('.top-menu-main-a').removeClass('hoverline');
    }

    // close open menus on hover of other links that don't have drop menus associated
    function closeMenuz (hoveredLink) {
      $(hoveredLink).mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(100);});
    }

    // show drop menu based on hovered link
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

    closeMenuz('#main_home');
    showTopDropMenus('#main_medical_equipment', '#med_equipment_drop');
    showTopDropMenus('#main_part_search', '#parts_drop');
    showTopDropMenus('#main_service', '#service_drop');
    showTopDropMenus('#main_manufacturers', '#mfrs_drop');
    closeMenuz('#main_contact_us');
    closeMenuz('#main_my_account');

  });
}(jQuery));
