(function($) {

    "use strict";

    $(document).ready(function() {

        // Comments
        $(".commentlist li").addClass("panel panel-default");
        $(".comment-reply-link").addClass("btn btn-default");

        // Forms
        $('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
        $('input[type=submit]').addClass('btn btn-primary');

        // You can put your own code in here

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

        $("#billing_address_1").attr("maxlength", 60);
        $("#billing_address_1").on("keyup", function() {
            if ($(this).val().length == 60) {
                $("#billing_address_1_field").append("<p class='red-alert'>Maximum Length Reached</p>");
                $(".red-alert").hide(2000);
            }
        });

    });

}(jQuery));
