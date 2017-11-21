(function($) {
  "use strict";
  $(document).ready(function() {

    var timer = 0;

    // hover underline effect
    $(".top-menu-main-a").mouseenter(function(){$(this).addClass('hoverline');}).mouseleave(function(){$(this).removeClass('hoverline');});

    // keep the menu open only in appropriate mouse locations
    $("#masthead").mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(100);});
    $(".drop-menu-panel").mouseleave(function(){$('.drop-menu-panel').stop().fadeOut(100);});


    /*** Medical Equipment Facility toggle ***/
    var main_cats = [
      "menu_all_main",
      "hospital_main",
      "nursing_main",
      "sls_main",
      "ltc_main",
      "ems_main",
      "therapy_main",
      "veterinary_main"
    ];
    $('.mve_cols').hide();
    $('#menu_all_main').show();
    $.each(main_cats, function( i, val ) {
      $('#' + val + '_hover').mouseenter(function(){
        $('.top-menu-facility-filter > li').css({
          'background-color' : 'transparent',
          'color' : '#000'
        });
        $('.mve_cols').hide();
        $('#' + val).stop().show();

        switch (val) {
          case 'hospital_main':
            $('#hospital_main_hover > li').css({'background-color' : '#00426a', 'color' : '#fff'});
            break;
          case 'nursing_main':
            $('#nursing_main_hover > li').css({'background-color' : '#2774ae', 'color' : '#fff'});
            break;
          case 'sls_main':
            $('#sls_main_hover > li').css({'background-color' : '#ffad00', 'color' : '#fff'});
            break;
          case 'ltc_main':
            $('#ltc_main_hover > li').css({'background-color' : '#72d0f4', 'color' : '#fff'});
            break;
          case 'ems_main':
            $('#ems_main_hover > li').css({'background-color' : '#d6001c', 'color' : '#fff'});
            break;
          case 'therapy_main':
            $('#therapy_main_hover > li').css({'background-color' : '#9e71a2', 'color' : '#fff'});
            break;
          case 'veterinary_main':
            $('#veterinary_main_hover > li').css({'background-color' : '#657f3f', 'color' : '#fff'});
            break;
          // case 'menu_all_main':
          //   $('#menu_all_main_hover > li').css({'text-transform' : 'underline'});
          //   break;
        }

      });
    });
    /*** END ***/

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
