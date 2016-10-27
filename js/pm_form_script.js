jQuery(window).load(function() {
    $mySpot = jQuery(location).attr('search');
    $mySlug = $mySpot.replace('?', '');
    $myCleanSlug = $mySlug.replace(/\-/g, ' ');

    jQuery(function() {
        jQuery('#vfb-field-97').val($myCleanSlug).css('text-transform', 'capitalize');
    });

});

jQuery("label[for='vfb-field-103']").hide();
jQuery("label[for='vfb-field-105']").hide();
jQuery("label[for='vfb-field-106']").hide();
