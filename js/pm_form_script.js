$(window).load(function() {
  $mySpot = $(location).attr('search');
  $mySlug = $mySpot.replace('?','');
  $myCleanSlug = $mySlug.replace(/\-/g, ' ');

  $(function () {
    $('#vfb-field-97').val($myCleanSlug).css('text-transform','capitalize');
  });

});
