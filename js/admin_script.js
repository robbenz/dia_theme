jQuery(document).ready(function() {
    jQuery("#benz_product_select").find('select').change(function() {
        var $val = jQuery(this).val();
        if($val === 'Part'){
          jQuery('#benz_condition_select').show(300);
        } else if($val != 'Part'){
          jQuery('#benz_condition_select').hide(200);
        } else {
          jQuery('#benz_condition_select').show(300);
        }
    });
    jQuery("#pm_fields").hide();
    jQuery(".benz_pm_checkbox").click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery("#pm_fields").show(300);
        } else {
            jQuery("#pm_fields").hide(200);
        }
    });
});



jQuery(document).ready(function () {
    // jQuery( "<p>Test</p>" ).insertBefore( ".media-toolbar" );
  // jQuery( ".media-toolbar-secondary" ).append( '<div class="nonsense">hey whats up </div>' );
        jQuery(".media-toolbar-secondary").after('Hello World');
});
