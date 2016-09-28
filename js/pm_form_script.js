$(window).load(function() {
  $mySpot = $(location).attr('search');
  $mySlug = $mySpot.replace('?','');

  $(function () {
    $('#vfb-field-97').val($mySlug);
  });

});
