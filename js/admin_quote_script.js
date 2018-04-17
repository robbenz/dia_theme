jQuery(document).ready(function() {

  jQuery( ".wp-heading-inline" ).replaceWith( '<h1 class="wp-heading-inline">Edit Quote</h1>');
  jQuery( ".page-title-action" ).replaceWith( '<a href="https://diamedicalusa.com/wp-admin/post-new.php?post_type=shop_order" class="page-title-action">Add Quote</a>');
  // jQuery( "#order_data h2" ).html().replace("Order", "Quote");
  jQuery( ".order_data_column > p.form-field-wide:first > label" ).replaceWith( '<label for="order_status">Quote Date: </label>');
  jQuery( "p.wc-order-status > label" ).replaceWith( '<label for="order_status">Quote Status: </label>');

});
