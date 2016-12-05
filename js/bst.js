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
        $("#billing_address_1").attr("maxlength", 60);
        $("#billing_address_1").on("keyup", function() {
            if ($(this).val().length == 60) {
                $(".red-alert").remove();
                $("#billing_address_1_field").append("<p class='red-alert'>Maximum Length Reached</p>");
                $(".red-alert").hide(2000, function() {

                });
            }
        });
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

        /*** Add archive class to body for hospital & ltc pages - so they behave like woocomerce pages ***/
        $(function() {
          var spot = window.location.href;
          if(/long-term-care/.test(spot) || /hospital-equipment/.test(spot) ) {
            $('body').addClass("archive");
          }
        });
        /*** END ***/

        /*** add active look to top menu pages ***/
        $(function() {
          var topMenus = [
            { "Slug": "/hospital-equipment/", "Class": ".landing_nav-hospital", "Color": "#00426a" },
            { "Slug": "/healthcare-education/", "Class": ".landing_nav-schools", "Color":"#2774ae" },
            { "Slug": "/simlabsolutions/", "Class": ".landing_nav-simlab", "Color":"#ffad00" },
            { "Slug": "/emergency-rescue/", "Class": ".landing_nav-ems", "Color":"#d6001c" },
            { "Slug": "/long-term-care/", "Class": ".landing_nav-ltc", "Color":"#72d0f4" },
            { "Slug": "/request-quote/", "Class": ".landing_nav-qq", "Color":"#464444" }
          ]
          for(var x=0; x < topMenus.length; x++){
            var place = window.location.href;
            var slug = new RegExp (topMenus[x].Slug);
            if(slug.test(place)){
              $(topMenus[x].Class).css({
                'background-color' : topMenus[x].Color,
                'color' : '#fff'
              });
            }
          }
        });
      /* END */


});

}(jQuery));
