$(window).load(function() {
    $mySpot = $(location).attr('search');
    $mySlug = $mySpot.replace('?', '');
    $myCleanSlug = $mySlug.replace(/\-/g, ' ');

    $(function() {
        $('#vfb-field-97').val($myCleanSlug).css('text-transform', 'capitalize');
    });

});

$("label[for='vfb-field-103']").hide();
$("label[for='vfb-field-105']").hide();
$("label[for='vfb-field-106']").hide();
