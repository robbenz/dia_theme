(function($) {
    "use strict";
    $(document).ready(function() {

      // Comments
      $(".commentlist li").addClass("panel panel-default");
      $(".comment-reply-link").addClass("btn btn-default");

      // Forms
      $('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
      $('input[type=submit]').addClass('btn btn-primary');

      /*** Add classes to #PM # Shipping -- product page on load & Resize ***/
      function addClassesProducts($when) {
        $(window).on($when, function() {
          if ($(window).width() < 992) {
            $('#ship-repair-container').addClass('container');
            $('#ship-row').addClass('row');
            $('repair-row').addClass('row');
          } else {
            $('#ship-repair-container').removeClass('container');
            $('#ship-row').removeClass('row');
            $('repair-row').removeClass('row');
          }
        })
      }
      addClassesProducts('load');
      addClassesProducts('resize');
      /*** END ***/

      /*** Add classes to #mobile-navbar on load & Resize ***/
      function addClassesMobile($when) {
        $(window).on($when, function() {
          if ($(window).width() < 992) {
            $('#mobile-navbar').addClass('navbar navbar-default navbar-fixed-top');
            $('#form-row').addClass('row');
            $('#drop-menu').removeClass('navbar navbar-default navbar-static-top');
          } else {
            $('#mobile-navbar').removeClass('navbar navbar-default navbar-fixed-top');
            $('#form-row').removeClass('row');
            $('#drop-menu').addClass('navbar navbar-default navbar-static-top');
          }
        })
      }
      addClassesMobile('load');
      addClassesMobile('resize');
      /*** END ***/

      /*** Remove blue bar when previous button is clicked on checkout page ***/
      $("[href='#previous']").click(function() {
          $(".current").next().removeClass("done");
      });
      /*** END ***/

      /*** Max Length for checkout shipping input field ***/
      function FUauthorize_net($inputField, $maxLen) {
        $($inputField).attr("maxlength", $maxLen);
        $($inputField).on("keyup", function() {
          if ($(this).val().length == $maxLen) {
            $(".red-alert").remove();
            $($inputField+"_field").append("<p class='red-alert'>Maximum Length Reached</p>");
            $(".red-alert").hide(2000, function() {
            });
          }
        });
      }
      FUauthorize_net("#billing_address_1", 60)
      FUauthorize_net("#billing_company", 50)
      FUauthorize_net("#billing_address_2", 50)
      /*** END ***/

      /*** Little hover effect for work order form on PM page ***/
      function littleHoverPM() {
        if ($(window).width() > 991) {
          $("#pm_ltgreen_1_link").mouseover(function() {
            $("#pm_ltgreen_1_link em, #pm_ltgreen_1_link span").animate({fontSize: "25px"}, 200 ).css('color', '#00426a');
          });
          $("#pm_ltgreen_1_link").mouseleave(function() {
            $("#pm_ltgreen_1_link em, #pm_ltgreen_1_link span").animate({fontSize: "24px"}, 100 ).css('color', '#000');
          });
        }
      }
      littleHoverPM();
      /*** END ***/

      /*** something about the part search menu placeholder text for typed.js ***/
      $("#menu-parts-search #searchform #s").attr("placeholder", "Search Over 1,000,000 Parts").val("").focus().blur();
      /*** END ***/

      /*** show hide add-on desc for headwalls ***/
      $(".addon-description").hide();
      $(".addon-checkbox").click(function() {
        if($(this).is(":checked")) {
          $(".addon-description").show(269);
        } else {
          $(".addon-description").hide(169);
        }
      });
      /*** END ***/

      /*** show hide add-on desc for med box  ***/
      $('.wccpf-fields-group-1').hide();
      $('#configuration').change(function(){
        if($('#configuration').val() == 'Customized Medication Box') {
          $('.wccpf-fields-group-1').show();
        } else {
          $('.wccpf-fields-group-1').hide();
        }
      });
      /*** END ***/

      /*** add columns class to long lists in product tabs  ***/
      $('#woocommerce_tabs ul').filter(function () {
        return $(this).children().length >= 17
      }).addClass('columns_list');
      /*** END ***/

      /*** left sidebar ***/
      $('.sidebar-replace').hide();
      $('.view-all').show();

      $('#facility_select').change(function() {
        $('.sidebar-replace').hide();
        $('.' + $(this).val()).slideDown();
        $.cookie( 'diaMenuSelected', $(this).val(), { expires: 90, path: '/'} );
      });

      $('.arrow-toggle').click(function() {
        if ( $(this).children('.rotate').hasClass('down') ) {
          $('.rotate').removeClass('down');
        } else {
          $('.rotate').removeClass('down');
          $(this).children('.rotate').toggleClass('down');
        }
      });

      $('.rotate-medqpt').addClass('down');
      $('.arrow-toggle-medqpt').click(function() {
        $('.rotate-medqpt').toggleClass('down');
      });

      if($.cookie('diaMenuSelected') != null) {
        $('.sidebar-replace').hide();
        $('#facility_select option[value="' + $.cookie('diaMenuSelected') + '"]').attr('selected', 'selected');
        $('.' + $.cookie('diaMenuSelected')).slideDown();
      }
      /*** END ***/

      /*** Tracking stuff on my account page - string replace ***/
      $('.variation-tracking_item_number').html(function(index, text) {
        return text.replace(/\_/g, ' ');
      });
      $('.variation-tracking_item_freight_provider').html(function(index, text) {
        return text.replace(/\_/g, ' ');
      });
      $('.variation-tracking_item_number').css('text-transform', 'capitalize');
      $('.variation-tracking_item_freight_provider').css('text-transform', 'capitalize');
      /*** END ***/



      findit = $(location).attr('search').replace('?', '');
      $('#vfb-field-315').val(findit);





    });
  }(jQuery));



/*** add active look to top menu pages ***/
// $(function() {
//   var topMenus = [
//     { "Slug": "/hospital-equipment/", "Class": ".landing_nav-hospital", "Color": "#00426a" },
//     { "Slug": "/healthcare-education/", "Class": ".landing_nav-schools", "Color":"#2774ae" },
//     { "Slug": "/simlabsolutions/", "Class": ".landing_nav-simlab", "Color":"#ffad00" },
//     { "Slug": "/emergency-rescue/", "Class": ".landing_nav-ems", "Color":"#d6001c" },
//     { "Slug": "/long-term-care/", "Class": ".landing_nav-ltc", "Color":"#72d0f4" },
//     { "Slug": "/request-quote/", "Class": ".landing_nav-qq", "Color":"#464444" }
//   ];
//   for(var x=0; x < topMenus.length; x++){
//     var place = window.location.href;
//     var slug = new RegExp (topMenus[x].Slug);
//     if(slug.test(place)){
//       $(topMenus[x].Class).css({
//         'background-color' : topMenus[x].Color,
//         'color' : '#fff'
//       });
//     }
//   }
// });
/* END */
