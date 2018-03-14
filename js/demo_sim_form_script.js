jQuery(window).load(function() {

    findMe = jQuery(location).attr('search');
    changeMe = findMe.replace('?', '');
    findReplaceMe = changeMe.replace(/\-/g, ' ');

    jQuery(function() {
        jQuery('#vfb-field-182').val(findReplaceMe).css('text-transform', 'capitalize');
    });

});
