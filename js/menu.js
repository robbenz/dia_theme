(function($) {
  "use strict";
  $(document).ready(function() {


    var timer = 0;

    $(".top-menu-main-a").mouseenter(function(){$(this).addClass('hoverline');}).mouseleave(function(){$(this).removeClass('hoverline');});
    $("#masthead").mouseenter(function(){$('.drop-menu-panel').stop().fadeOut(100);});
    $(".drop-menu-panel").mouseleave(function(){$('.drop-menu-panel').stop().fadeOut(100);});


    $("#main_home")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
      });

    $("#main_medical_equipment")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $('#med_equipment_drop').stop().fadeIn(100);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        console.log(timer);
      });

    $("#main_part_search")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $('#parts_drop').stop().fadeIn(100);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        console.log(timer);
      });

    $("#main_service")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $('#service_drop').stop().fadeIn(100);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        console.log(timer);
      });

      $("#main_manufacturers")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $('#mfrs_drop').stop().fadeIn(100);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        console.log(timer);
      });

      $("#main_contact_us")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $('#contact_drop').stop().fadeIn(100);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        console.log(timer);
      });

      $("#main_my_account")
      .mouseenter(function(){
        $('.drop-menu-panel').stop().fadeOut(100);
        clearTimeout(timer);
        timer = setTimeout(function(){
          $('#account_drop').stop().fadeIn(100);
        }, 200);
        console.log(timer);
      })
      .mouseleave(function(){
        clearTimeout(timer);
        console.log(timer);
      });



  });
}(jQuery));
