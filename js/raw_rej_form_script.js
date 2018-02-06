jQuery(window).load(function() {
  // alert("hello world");

    findMe = jQuery(location).attr('search');
    changeMe = findMe.replace('?', '');
    cleanMe = changeMe.replace(/\-/g, ' ');

    jQuery(function() {
        jQuery('#vfb-field-315').val(cleanMe).css('text-transform', 'capitalize');
    });

});
