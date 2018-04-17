function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var orderID = getParameterByName('post');

jQuery(document).ready(function() {

  jQuery( ".wp-heading-inline" ).replaceWith( '<h1 class="wp-heading-inline">Edit Quote</h1>');
  jQuery( ".page-title-action" ).replaceWith( '<a href="https://diamedicalusa.com/wp-admin/post-new.php?post_type=shop_order" class="page-title-action">Add Quote</a>');
  jQuery( "#order_data h2" ).replaceWith( '<h2>Quote #EC-'+orderID+'details</h2>' );
  jQuery( ".order_data_column > p.form-field-wide:first > label" ).replaceWith( '<label for="order_status">Quote Date: </label>');
  jQuery( "p.wc-order-status > label" ).replaceWith( '<label for="order_status">Quote Status: </label>');
  jQuery( "div.woocommerce_order_items_wrapper th.item_cost" ).replaceWith( '<th class="item_cost sortable" data-sort="float">Price</th>');

});
