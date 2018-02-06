jQuery(window).load(function() {

    findMe = jQuery(location).attr('search');
    changeMe = findMe.replace('?', '#');

    jQuery(function() {
        jQuery('#vfb-field-315').val(changeMe).css('text-transform', 'capitalize');
    });

});
