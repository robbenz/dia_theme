<<<<<<< HEAD
var btnValue, colorValue;
jQuery(document).ready(function() {
    jQuery('#accordion-toggle').hide();
});


jQuery(function() {

    jQuery('#button_click').click(function(e) {
        e.preventDefault();
        jQuery('#accordion-toggle').slideToggle(300);
    });

});
var valArr = ["Boardwalk", "Florence", "Honeycomb", "Madison", "Orbitz", "Patio", "Simplicity", "Tic Tac", "Windsor"]
for (var i = 0; i < valArr.length; i++) {
    var addVal = "#accordion-2-t" + (i + 1);
    jQuery(addVal).attr("value", valArr[i]);
    jQuery(addVal).addClass("coll-select");
}

jQuery(function() {
    jQuery(".coll-select").click(function() {
        btnValue = jQuery(this).attr("value");
        jQuery("#vfb-field-79").val(btnValue);
        switch (btnValue) {
            case "Boardwalk":
                jQuery("#vfbField78").removeClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Florence":
                jQuery("#vfbField80").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Honeycomb":
                jQuery("#vfbField83").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Madison":
                jQuery("#vfbField82").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Orbitz":
                jQuery("#vfbField81").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Patio":
                jQuery("#vfbField84").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Simplicity":
                jQuery("#vfbField85").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Tic Tac":
                jQuery("#vfbField86").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Windsor":
                jQuery("#vfbField87").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                break;
            default:
                break;
        }
    })
});

jQuery(function() {
    jQuery(".color-select").click(function(e) {
        e.preventDefault();
        colorValue = jQuery(this).attr("value");
        switch (btnValue) {
            case "Boardwalk":
                jQuery("#vfb-field-78").val(colorValue);
                break;
            case "Florence":
                jQuery("#vfb-field-80").val(colorValue);
                break;
            case "Honeycomb":
                jQuery("#vfb-field-83").val(colorValue);
                break;
            case "Madison":
                jQuery("#vfb-field-82").val(colorValue);
                break;
            case "Orbitz":
                jQuery("#vfb-field-81").val(colorValue);
                break;
            case "Patio":
                jQuery("#vfb-field-84").val(colorValue);
                break;
            case "Simplicity":
                jQuery("#vfb-field-85").val(colorValue);
                break;
            case "Tic Tac":
                jQuery("#vfb-field-86").val(colorValue);
                break;
            case "Windsor":
                jQuery("#vfb-field-87").val(colorValue);
                break;
            default:
                break;

        }
    })
});
=======
var btnValue, colorValue;
jQuery(document).ready(function() {
    jQuery('#accordion-toggle').hide();
});


jQuery(function() {

    jQuery('#button_click').click(function(e) {
        e.preventDefault();
        jQuery('#accordion-toggle').slideToggle(300);
    });

});
var valArr = ["Boardwalk", "Florence", "Honeycomb", "Madison", "Orbitz", "Patio", "Simplicity", "Tic Tac", "Windsor"]
for (var i = 0; i < valArr.length; i++) {
    var addVal = "#accordion-1-t" + (i + 1);
    jQuery(addVal).attr("value", valArr[i]);
    jQuery(addVal).addClass("coll-select");
}

jQuery(function() {
    jQuery(".coll-select").click(function() {
        btnValue = jQuery(this).attr("value");
        jQuery("#vfb-field-79").val(btnValue);
        switch (btnValue) {
            case "Boardwalk":
                jQuery("#vfbField78").removeClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Florence":
                jQuery("#vfbField80").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Honeycomb":
                jQuery("#vfbField83").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Madison":
                jQuery("#vfbField82").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Orbitz":
                jQuery("#vfbField81").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Patio":
                jQuery("#vfbField84").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Simplicity":
                jQuery("#vfbField85").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Tic Tac":
                jQuery("#vfbField86").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField87").addClass("vfb-rule-hide");
                break;
            case "Windsor":
                jQuery("#vfbField87").removeClass("vfb-rule-hide");
                jQuery("#vfbField78").addClass("vfb-rule-hide");
                jQuery("#vfbField80").addClass("vfb-rule-hide");
                jQuery("#vfbField81").addClass("vfb-rule-hide");
                jQuery("#vfbField82").addClass("vfb-rule-hide");
                jQuery("#vfbField83").addClass("vfb-rule-hide");
                jQuery("#vfbField84").addClass("vfb-rule-hide");
                jQuery("#vfbField85").addClass("vfb-rule-hide");
                jQuery("#vfbField86").addClass("vfb-rule-hide");
                break;
            default:
                break;
        }
    })
});

jQuery(function() {
    jQuery(".color-select").click(function(e) {
        e.preventDefault();
        colorValue = jQuery(this).attr("value");
        switch (btnValue) {
            case "Boardwalk":
                jQuery("#vfb-field-78").val(colorValue);
                break;
            case "Florence":
                jQuery("#vfb-field-80").val(colorValue);
                break;
            case "Honeycomb":
                jQuery("#vfb-field-83").val(colorValue);
                break;
            case "Madison":
                jQuery("#vfb-field-82").val(colorValue);
                break;
            case "Orbitz":
                jQuery("#vfb-field-81").val(colorValue);
                break;
            case "Patio":
                jQuery("#vfb-field-84").val(colorValue);
                break;
            case "Simplicity":
                jQuery("#vfb-field-85").val(colorValue);
                break;
            case "Tic Tac":
                jQuery("#vfb-field-86").val(colorValue);
                break;
            case "Windsor":
                jQuery("#vfb-field-87").val(colorValue);
                break;
            default:
                break;

        }
    })
});
>>>>>>> 0ac8033b06d41b023ff43bbe96683185e354e778
