<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');

//  -- Load Text domain
function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}

// --  ADD woocommerce support to theme
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '';
}

function my_theme_wrapper_end() {
  echo '';
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/****** END THEME CORE ******/

// uncomment to delete user role
// $wp_roles = new WP_Roles(); $wp_roles->remove_role("shop_observer");

// -- Begin Scripts Styles
function benzy_enqueue_styles() {
    wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', false, false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'benzy_enqueue_styles' );

// scripts for tricky forms
function benz_add_jss() {
  if (is_page('62913') ) {
    wp_register_script('pm_form', get_template_directory_uri() . '/js/pm_form_script.js', array('jquery'),false, true);
    wp_enqueue_script('pm_form');
  }
  if (is_page('61651') ) {
    wp_register_script('raw_rej_form', get_template_directory_uri() . '/js/raw_rej_form_script.js', array('jquery'),false, true);
    wp_enqueue_script('raw_rej_form');
  }
  if (is_page('95032') ) {
    wp_register_script('demo_sim_form', get_template_directory_uri() . '/js/demo_sim_form_script.js', array('jquery'),false, true);
    wp_enqueue_script('demo_sim_form');
  }
  if (is_page('58440') ) {
    wp_register_script('curtain_form', get_template_directory_uri() . '/js/curtain_form_script.js', array('jquery'),false, true);
    wp_enqueue_script('curtain_form');
  }
  wp_register_script('typedJS', get_template_directory_uri() . '/js/typed.js', array('jquery'),false, true);
  wp_enqueue_script('typedJS');

  wp_register_script('menuJS', get_template_directory_uri() . '/js/menu.js', array('jquery'),false, true);
  wp_enqueue_script('menuJS');
}
add_action( 'wp_enqueue_scripts', 'benz_add_jss' );

// -- WP-ADMIN script
add_action( 'admin_enqueue_scripts', 'benz_admin_script' );
function benz_admin_script() {
    wp_enqueue_script('custom_js_script', get_bloginfo('template_url').'/js/admin_script.js', array('jquery'));
}
//  --  Benz admin css
function benz_chromefix_inline_css() {
  wp_add_inline_style( 'wp-admin', '.term-description-wrap { display: none ; }' );
  wp_add_inline_style( 'wp-admin', '#product_cat-all { max-height:400px }' );
  wp_add_inline_style( 'wp-admin', '#the-list .column-name a { display: inline ; }' );
  wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
  wp_add_inline_style( 'wp-admin', 'table.wp-list-table img { max-width: 165px; }' );
  wp_add_inline_style( 'wp-admin', '.column-predictive_search_focuskw { height:50px; max-height:50px;}' );
  wp_add_inline_style( 'wp-admin', '#dia-cust-fav-role-meta-box h2 {background-color: #00426a; color:#fff;}' );
  wp_add_inline_style( 'wp-admin', '#dia-tab-meta-box h2 {background-color: #00426a; color:#fff;}' );
  wp_add_inline_style( 'wp-admin', '#dia-search-pri-meta-box h2 {background-color: #00426a; color:#fff;}' );
  wp_add_inline_style( 'wp-admin', '#dia_order_quote_header_drop h2 {background-color: #00426a; color:#fff;}' );
  wp_add_inline_style( 'wp-admin', '#yith-ywraq-metabox-order h2 {background-color: #00426a; color:#fff;}' );
  wp_add_inline_style( 'wp-admin', '#order_shipping_line_items .shipping input.tracking_item_number{display:none;}' );
  wp_add_inline_style( 'wp-admin', '#order_shipping_line_items .shipping input.tracking_item_freight_provider{display:none;}' );
  wp_add_inline_style( 'wp-admin', '#order_shipping_line_items .shipping input.tracking_item_shipped{display:none;}' );
  wp_add_inline_style( 'wp-admin', '#order_shipping_line_items .shipping input.tracking_item_qty{display:none;}' );
  wp_add_inline_style( 'wp-admin', '#order_shipping_line_items .shipping input.number_of_shipments{display:none;}' );
  wp_add_inline_style( 'wp-admin', '#order_line_items .display_meta{display:none;}' );
  wp_add_inline_style( 'wp-admin', 'div.notice{display:none;}' );
  wp_add_inline_style( 'wp-admin', '.preview_quote_button, .preview_quote_button:visited, .preview_quote_button:active {padding: 1em; background-color: #00426a; color: #fff; text-decoration: none;font-size:1.2em;}' );
  wp_add_inline_style( 'wp-admin', '.preview_quote_button:hover {background-color: #78be20;color: #fff;}' );
}


add_action('admin_enqueue_scripts', 'benz_chromefix_inline_css');

function ds_enqueue_jquery_in_footer( &$scripts ) {
	if ( ! is_admin() )
		$scripts->add_data( 'jquery', 'group', 1 );
}
add_action( 'wp_default_scripts', 'ds_enqueue_jquery_in_footer' );
/* END Scripts / Styles */

//  --  LOGIN | LOGOUT STUFF
add_filter('woocommerce_login_redirect', 'login_redirect');
function login_redirect($redirect_to) {
    wp_redirect( home_url() );
    exit();
}
add_action('wp_logout','logout_redirect');
function logout_redirect(){
    wp_redirect( home_url() );
    exit();
}
/* END */

//  --  request a quote for empty price products BENZ
add_filter('woocommerce_empty_price_html', 'custom_call_for_price');
function custom_call_for_price() {
     return '<a href="#" class="eModal-2 r-a-qbutton-price">Request A Quote</a>';
}
/* END */

//  -- Sidebars Register
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'blog_sidebar',
            'name'          => __( 'Blog Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
/* END */

/***** MENU STUFF *****/
function register_my_menus() {
  register_nav_menus(
    array(
      'myaccount' => __( 'My Account' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

class BENZ_Walker_Nav_Menu_MYACCOUNT extends Walker_Nav_Menu {
   function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu" style="color:#004ea8; font-weight:700;"><div class="arrow-up-mm"></div><div class="insert-img-here">MANAGE YOUR ACCOUNT<br></div>';

    }
        function end_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<li class="log-in-out-link"><a href="'. wp_logout_url() .'">Log Out</a></li>';
        $output .= '</ul>';
    }
}
/* END */

/****** WOOCOMMERCE GALLERY PAGE STUFF ******/

// -- WooCommerce orderby dropdown
// -- Options: menu_order, popularity, rating, date, price, price-desc
add_filter( "woocommerce_catalog_orderby", "dia_woocommerce_catalog_orderby", 20 );
function dia_woocommerce_catalog_orderby( $orderby ) {
	unset($orderby["date"]);
	return $orderby;
}

// -- Change number or products per row
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
      return 3;
	}
}

// -- number of products per page
add_filter( 'loop_shop_per_page', 'products_per_page_category', 20 );
function products_per_page_category( $count ) {
  if ( function_exists('is_dia_parts_cat') && is_dia_parts_cat() ) :
    return 2700;
  elseif (isset($_GET['view']) && $_GET['view'] === 'all') :  // View all page
    return 9999;
  else :
   return 99;
  endif;
}
/* END */

//  --  remove "Add to Cart" button on product listing page in WooCommerce
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );
function remove_add_to_cart_buttons() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
}
/* END */

//  --  Re-Order product page layouts -- BENZ
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );// Button
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 11 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',   10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );// Button
/* END */

//  --  PREFIX ORDERNUMMER ADD MM- BENZ
add_filter( 'woocommerce_order_number', 'prefix_woocommerce_order_number', 1, 2 );
function prefix_woocommerce_order_number( $oldnumber, $order ) {
    return 'EC-' . $order->id;
  }
/* END */

//  --  Confirm password field on the register form under My Accounts BENZ
add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
	global $woocommerce;
	extract( $_POST );
	if ( strcmp( $password, $password2 ) !== 0 ) {
		return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
	}
	return $reg_errors;
}
add_action( 'woocommerce_register_form', 'wc_register_form_password_repeat' );
function wc_register_form_password_repeat() {
	?>
<div id="left-col-confirm-pass">
	<p class="form-row form-row-wide">
		<label for="reg_password2"><?php _e( 'Confirm Password', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>" />
	</p>
</div>
	<?php
}
/* END */

//  --   get rid of users "POSTS" cloumn, -- never use it
add_action('manage_users_columns','remove_user_posts_column');
function remove_user_posts_column($column_headers) {
    unset($column_headers['posts']);
    return $column_headers;
}
/* END */

//  --  Price Things -- From :$20 for variable products
add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );

function wc_wc20_variation_price_format( $price, $product ) {
  $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
  $price = $prices[0] !== $prices[1] ? sprintf( __( '<span class="var-price-wrap">From: %1$s</span>', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
  $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
  sort( $prices );
  $saleprice = $prices[0] !== $prices[1] ? sprintf( __( 'From: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
  if ( $price !== $saleprice ) {
    $price = '<span class="price-wrap-gal">' . $saleprice . '</span> <ins>' . $price . '</ins>';
  }
  if ( !is_page('86') ) {
    return $price;
  }
}
add_filter( 'woocommerce_show_variation_price', function() { return true; } );
/* END */

// only 3 related products instead of 4
add_filter( 'woocommerce_output_related_products_args', 'benz_related_products_args' );
  function benz_related_products_args( $args ) {
    global $product;
    if ( function_exists('is_dia_part') && is_dia_part() ){
      $args['posts_per_page'] = 8;
    } else {
      $args['posts_per_page'] = 4;
      $args['columns'] = 4;
    }
	return $args;
}


//  --  woocommerce side bar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
/* END */

//  -- New Class to add Sortable Registered date in users wp dash
class RRHE {

//  -- roll the ball
    public function __construct() {
        add_action( 'init', array( &$this, 'init' ) );
    }

//  -- All init functions
    public function init() {
		add_filter( 'manage_users_columns', array( $this,'users_columns') );
		add_action( 'manage_users_custom_column',  array( $this ,'users_custom_column'), 10, 3);
		add_filter( 'manage_users_sortable_columns', array( $this ,'users_sortable_columns') );
		add_filter( 'request', array( $this ,'users_orderby_column') );
		add_action( 'plugins_loaded', array( $this ,'load_this_textdomain') );
	}

//  -- Registers column for display
    public static function users_columns($columns) {
		$columns['registerdate'] = _x('Registered', 'user', 'recently-registered');
		return $columns;
	}

//  -- Handles the registered date column output.
    public static function users_custom_column( $value, $column_name, $user_id ) {

		global $mode;
		$mode = empty( $_REQUEST['mode'] ) ? 'list' : $_REQUEST['mode'];

        if ( 'registerdate' != $column_name ) {
           return $value;
        } else {
	        $user = get_userdata( $user_id );

          if ( is_multisite() && ( 'list' == $mode ) ) {
            $formated_date = __( 'm/d/Y' );
          } else {
            $formated_date = __( 'm/d/Y | g:i:s a' );
          }

          $registered   = strtotime(get_date_from_gmt($user->user_registered));
	        $registerdate = '<span>'. date_i18n( $formated_date, $registered ) .'</span>' ;

			return $registerdate;
		}
	}

//  --  Makes the column sortable
    public static function users_sortable_columns($columns) {
          $custom = array(
		  // meta column id => sortby value used in query
          'registerdate'    => 'registered',
          );
      return wp_parse_args($custom, $columns);
	}

//  --  Calculate the order if we sort by date.
    public static function users_orderby_column( $vars ) {
        if ( isset( $vars['orderby'] ) && 'registerdate' == $vars['orderby'] ) {
                $vars = array_merge( $vars, array(
                        'meta_key' => 'registerdate',
                        'orderby' => 'meta_value'
                ) );
        }
        return $vars;
	}

//  --  Internationalization - We're just going to use the language packs for this.
	public function load_this_textdomain() {
	    load_plugin_textdomain( 'recently-registered' );
	}
}
new RRHE();
/* END */





/*** Ship to a different address closed by default ***/
// add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false', 999 );

/**
 * Add order again button in my orders actions.
 *
 * @param  array $actions
 * @param  WC_Order $order
 * @return array
 */
 // test comment

function dia_add_order_again_to_my_orders_actions( $actions, $order ) {
	if ( $order->has_status( 'completed' ) ) {
		$actions['order-again'] = array(
			'url'  => wp_nonce_url( add_query_arg( 'order_again', $order->id ) , 'woocommerce-order_again' ),
			'name' => __( 'Order Again', 'woocommerce' )
		);
	}
	return $actions;
}
add_filter( 'woocommerce_my_account_my_orders_actions', 'dia_add_order_again_to_my_orders_actions', 50, 2 );
/*** END ***/

// Edit order items table template defaults  -- Show Sku on emails
// test comment

function BENZ_wc_order_email_skus( $table, $order ) {

	ob_start();

	$template = $plain_text ? 'emails/plain/email-order-items.php' : 'emails/email-order-items.php';
	wc_get_template( $template, array(
		'order'                 => $order,
		'items'                 => $order->get_items(),
		'show_sku'              => true
	) );

	return ob_get_clean();
}
add_filter( 'woocommerce_email_order_items_table', 'BENZ_wc_order_email_skus', 10, 2 );
/* END */

/*** Display Product Title at link in email ***/
add_filter( 'woocommerce_order_item_name', 'display_product_title_as_link', 10, 2 );
function display_product_title_as_link( $item_name, $item ) {
  $_product = get_product( $item['variation_id'] ? $item['variation_id'] : $item['product_id'] );
  $link = get_permalink( $_product->id );
  return '<a href="'. $link .'"  rel="nofollow">'. $item_name .'</a>';
}
/*** END ***/

// add_filter( 'woocommerce_order_items_meta_display', function ($output, $obj) {
// if($obj->product->parent->product_type == 'variable') {
//     $output = ltrim(explode(':', $output)[1]);
// }
// return $output; },10,2);

/***** ALL SHIPPING STUFF TO FOLLOW *******/

/**
 * Plugin Name: WooCommerce Enable Free Shipping on a Per Product Basis
 * Plugin URI: https://gist.github.com/BFTrick/d4a21524a8f7b25ec296
 *
 */

if ( ! class_exists( 'WC_Enable_Free_Shipping' ) ) :
class WC_Enable_Free_Shipping {
	protected static $instance = null;
	/**
	 * Initialize the plugin.
	 *
	 * @since 1.0
	 */
	private function __construct() {
		// add our check
		add_filter( 'woocommerce_shipping_free_shipping_is_available', array( $this, 'patricks_enable_free_shipping' ), 20 );
	}
	/**
	 * Enable free shipping for orders with products that have the free-shipping shipping class slug
	 *
	 * @param  bool $is_available
	 * @return bool
	 * @since  1.0
	 */
	public function patricks_enable_free_shipping( $is_available ) {
		global $woocommerce;
		// set the shipping classes that are eligible
		$eligible = array( 'free-shipping' );
		// get cart contents
		$cart_items = $woocommerce->cart->get_cart();
		// loop through the items checking to make sure they all have the right class
		foreach ( $cart_items as $key => $item ) {
			if ( ! in_array( $item['data']->get_shipping_class(), $eligible ) ) {
				// this item doesn't have the right class. return false
				return false;
			}
		}
		// nothing out of the ordinary return the default value
		return $is_available;
	}
	/**
	 * Return an instance of this class.
	 *
	 * @return object A single instance of this class.
	 * @since  1.0
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
}
add_action( 'init', array( 'WC_Enable_Free_Shipping', 'get_instance' ), 0 );
endif;

/**
 * woocommerce_package_rates is a 2.1+ hook
 */
add_filter( 'woocommerce_package_rates', 'hide_shipping_when_free_is_available', 10, 2 );
/**
 * Hide shipping rates when free shipping is available
 *
 * @param array $rates Array of rates found for the package
 * @param array $package The package array/object being shipped
 * @return array of modified rates
 */
function hide_shipping_when_free_is_available( $rates, $package ) {

 	// Only modify rates if free_shipping is present
  	if ( isset( $rates['free_shipping'] ) ) {

  		// To unset a single rate/method, do the following. This example unsets flat_rate shipping
  		unset( $rates['flat_rate'] );

  		// To unset all methods except for free_shipping, do the following
  		$free_shipping          = $rates['free_shipping'];
  		$rates                  = array();
  		$rates['free_shipping'] = $free_shipping;
	}

	return $rates;
}

//  --  remove '(Free)' or '(FREE!)' label text on cart page for Shipping and Handling if cost equal to $0
function benz_custom_shipping_free_label( $label ) {
    $label =  str_replace( "(Free)", " ", $label );
    $label =  str_replace( "(FREE!)", " ", $label );
    return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label' , 'benz_custom_shipping_free_label' );


/***  add custom shipping method for Next Day Shipping  ***/
function dia_nextday_shipping_method_init() {
  if ( ! class_exists( 'WC_DiaNextDay_Shipping_Method' ) ) {

    class WC_DiaNextDay_Shipping_Method extends WC_Shipping_Method {

      public function __construct() {
        $this->id                 = 'dia_nxtdy_shipping_method';
        $this->method_title       = __( 'Next Day' );
        $this->method_description = __( 'Description of your shipping method' );
        $this->enabled            = "yes";
        $this->title              = "Next Day";
        $this->init();
      }

      function init() {
        $this->init_form_fields(); // This is part of the settings API. Override the method to add your own settings
        $this->init_settings(); // This is part of the settings API. Loads settings you previously init.

        // Save settings in admin if you have any defined
        add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
      }

      public function calculate_shipping( $package ) {
        $rate = array(
          'id' => $this->id,
          'label' => $this->title,
          'cost' => ''
        );
        $this->add_rate( $rate );
      }

    }
  }
}
add_action( 'woocommerce_shipping_init', 'dia_nextday_shipping_method_init' );

function add_dia_nextday_shipping_method( $methods ) {
  $methods[] = 'WC_DiaNextDay_Shipping_Method';
  return $methods;
}
add_filter( 'woocommerce_shipping_methods', 'add_dia_nextday_shipping_method' );
/*** END ***/





//
//
//
// ///***** hospital bed shipping stuff *****///
// function dia_hospital_bed_shipping_method_init() {
//   if ( ! class_exists( 'WC_Dia_hospital_bed_Shipping_Method' ) ) {
//
//     class WC_Dia_hospital_bed_Shipping_Method extends WC_Shipping_Method {
//
//       public function __construct() {
//         $this->id                 = 'dia_hosbed_shipping_method';
//         $this->method_title       = __( 'Hospital Bed Delivery' );
//         $this->method_description = __( 'Description of your shipping method' );
//         $this->enabled            = "yes";
//         $this->title              = "Hospital Bed Delivery";
//         $this->init();
//       }
//
//       function init() {
//         $this->init_form_fields(); // This is part of the settings API. Override the method to add your own settings
//         $this->init_settings(); // This is part of the settings API. Loads settings you previously init.
//
//         // Save settings in admin if you have any defined
//         add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
//       }
//
//
//
//
//
//       public function calculate_shipping( $package ) {
//
//
//
//         //$__qty = WC()->cart->get_cart_contents_count();
//         $__qty = cat_cart_count (6401);
//         $first = intval($__qty);
//         $second = 500;
//         $operation = "*";
//
//         $answer = eval('return '.$first.$operation.$second.';');
//
//         $rate = array(
//           'id' => $this->id,
//           'label' => $this->title,
//           'cost' => $answer
//         );
//         $this->add_rate( $rate );
//       }
//
//     }
//   }
// }
// add_action( 'woocommerce_shipping_init', 'dia_hospital_bed_shipping_method_init' );
//
// function add_dia_hospital_bed_shipping_method( $methods ) {
//   $methods[] = 'WC_Dia_hospital_bed_Shipping_Method';
//   return $methods;
// }
// add_filter( 'woocommerce_shipping_methods', 'add_dia_hospital_bed_shipping_method' );
//
//
//
//
//
//
//
// add_action( 'woocommerce_shipping_init', 'cat_cart_count' );
//
// function cat_cart_count( $cat_name ) {
//   $cat_count = 0;
//   foreach(WC()->cart->get_cart() as $cart_item)
//   if( has_term( $cat_name, 'product_cat', $cart_item['product_id']))
//   $cat_count += $cart_item['quantity'];
//   return $cat_count;
// }
//






// reset choesen shipping method so it appears properly from cart page to checkout page
add_filter('woocommerce_shipping_chosen_method', 'dia_reset_default_shipping_method', 10, 2);
function dia_reset_default_shipping_method( $method, $available_methods ) {
	// get the id of the first method in the list
	$method = key($available_methods);
	return $method;
}
/*******  END SHIPING STUFF  *******/


//  --  Add custom produt meta for parts condition
// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {
  global $woocommerce, $post;
  echo '<div id="benz_product_select" class="options_group">';
// select input field
woocommerce_wp_select(
	array(
		'id'          => 'benz_product_select',
		'label'       => __( 'Product Status', 'woocommerce' ),
    'options'     => array(
                        'N/A'              => __( 'N/A', 'woocommerce' ),
                        'Part'             => __( 'Part', 'woocommerce' ),
                        'Part Repair'      => __( 'Part Repair', 'woocommerce' ),
                        'Equipment'        => __( 'Equipment', 'woocommerce' ),
                        'Equipment Repair' => __( 'Equipment Repair', 'woocommerce' )
                        ),
		'desc_tip'    => 'true',
		'description' => __( 'Part or Equipment?' )
	)
);
echo '</div><div id="benz_condition_select" class="options_group">';
woocommerce_wp_select(
	array(
		'id'          => 'benz_condition_select',
		'label'       => __( 'Part Condition', 'woocommerce' ),
    'options'     => array(
                        'N/A'             => __( 'N/A', 'woocommerce' ),
                        'New'             => __( 'New', 'woocommerce' ),
                        'Used'            => __( 'Used', 'woocommerce' ),
                        'Reconditioned'   => __( 'Reconditioned', 'woocommerce' ),
                        'OEM Replacement' => __( 'OEM Replacement', 'woocommerce' ),
                        'OEM Original'    => __( 'OEM Original', 'woocommerce' ),
                        'Outright'        => __( 'Outright', 'woocommerce' ),
                        'Exchange Only'   => __( 'Exchange Only', 'woocommerce' ),
                        'Tested'          => __( 'Tested', 'woocommerce' ),
                        'Untested'        => __( 'Untested', 'woocommerce' )
                        ),
		'desc_tip'    => 'true',
		'description' => __( 'Is this part New, Reconditioned, Untested, etc.?', 'woocommerce' )
	)
);
echo '</div><div id="benz_pm_checkbox" class="options_group">';
woocommerce_wp_checkbox(
array(
  'id'            => 'benz_pm_checkbox',
  'name'          => 'benz_pm_checkbox',
	'class'         => 'benz_pm_checkbox checkbox',
	'label'         => __('Link To PM?', 'woocommerce' ),
	'description'   => __( 'Check this box IF you want to link to a PM / Repair Product', 'woocommerce' )
	)
);
echo '</div><div id="pm_fields" class="options_group">';
woocommerce_wp_text_input(
	array(
		'id'          => 'benz_pm_text_field',
		'label'       => __( 'PM Product Title', 'woocommerce' ),
		'placeholder' => 'Probably an Infusion Pump',
		'desc_tip'    => 'true',
		'description' => __( 'Enter the Name of the product we are linking to', 'woocommerce' )
	)
);
woocommerce_wp_text_input(
array(
  'id'          => 'benz_pm_link_text_field',
  'label'       => __( 'PM Product URL<br>(site url included)', 'woocommerce' ),
  'placeholder' => 'medical-equipment/infusion-dialysis/infusion-pumps/sigma/sigma-spectrum-infusion-pump/',
  'desc_tip'    => 'true',
  'description' => __( 'Enter the URL of the product we are linking to', 'woocommerce' )
)
);

echo '</div>';

}

function woo_add_custom_general_fields_save( $post_id ) {
  // benz_condition_select  benz_product_select
  $woocommerce_wp_select = $_POST['benz_condition_select'];
  if( !empty( $woocommerce_wp_select ) ) {
    update_post_meta( $post_id, 'benz_condition_select', esc_attr( $woocommerce_wp_select ) );
  }
  else {
    update_post_meta( $post_id, 'benz_condition_select', esc_attr( $woocommerce_wp_select ) );
  }

  $woocommerce_wp_select_product = $_POST['benz_product_select'];
  if( !empty( $woocommerce_wp_select_product ) ) {
    update_post_meta( $post_id, 'benz_product_select', esc_attr( $woocommerce_wp_select_product ) );
  }
  else {
    update_post_meta( $post_id, 'benz_product_select', esc_attr( $woocommerce_wp_select_product ) );
  }
  // benz_pm_checkbox
  $woocommerce_checkbox = isset( $_POST['benz_pm_checkbox'] ) ? 'yes' : 'no';
  update_post_meta( $post_id, 'benz_pm_checkbox', $woocommerce_checkbox );
  // benz_pm_text_field
  $woocommerce_text_field = $_POST['benz_pm_text_field'];
  if( !empty( $woocommerce_text_field ) ) {
    update_post_meta( $post_id, 'benz_pm_text_field', esc_attr( $woocommerce_text_field ) );
  }
  else {
    update_post_meta( $post_id, 'benz_pm_text_field', esc_attr( $woocommerce_text_field ) );
  }
  // benz_pm_link_text_field
  $woocommerce_link_text_field = $_POST['benz_pm_link_text_field'];
  if( !empty( $woocommerce_link_text_field ) ) {
    update_post_meta( $post_id, 'benz_pm_link_text_field', esc_attr( $woocommerce_link_text_field ) );
  }
  else {
    update_post_meta( $post_id, 'benz_pm_link_text_field', esc_attr( $woocommerce_link_text_field ) );
  }
}
/* END */

/** Some menu functions - only really use by_NAME right now **/
function woocommerce_subcats_from_parentcat_by_ID($parent_cat_ID) {
    $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $parent_cat_ID,
       'taxonomy' => 'product_cat'
    );
  $subcats = get_categories($args);
    echo '<ul class="wooc_sclist">';
      foreach ($subcats as $sc) {
        $link = get_term_link( $sc->slug, $sc->taxonomy );
          echo '<li><a href="'. $link .'">'.$sc->name.'</a></li>';
      }
    echo '</ul>';
}

function woocommerce_subcats_from_parentcat_by_NAME($parent_cat_NAME) {
  $IDbyNAME = get_term_by('name', $parent_cat_NAME, 'product_cat');
  $product_cat_ID = $IDbyNAME->term_id;
    $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $product_cat_ID,
       'taxonomy' => 'product_cat'
    );

  $subcats = get_categories($args);
  echo '<li class="active has-sub">';
  $parent_link = get_term_link( $product_cat_ID, 'product_cat' );
  echo '<a href="' . $parent_link . '"><span>' . $parent_cat_NAME . '</span></a><ul>';
  // special cats
  if ($product_cat_ID != '8482'){
    foreach ($subcats as $sc) {
      $link = get_term_link( $sc->slug, $sc->taxonomy );
      echo '<li><a href="' . $link . '">' . '<span>' . $sc->name . '</span></a></li>';
    }
    if ($product_cat_ID == '5302') {
      echo '<li><a href="http://medmattress.com/custom-sizing-form/"><span>Custom Sizing</span></a></li>';
    }
  }
  echo '</ul></li>';
}
/* END */

/*** DIA hacker link - becuase categories cant have two parents ***/
add_action( 'after_theme_setup', 'dia_hacker_link' );
function dia_hacker_link($termID, $f_or_l){
  $_cat = get_term_by('id', $termID, 'product_cat');
  $_catLink = get_term_link( $termID, 'product_cat' );
  ?>
  <li class="product type-product status-publish has-post-thumbnail <?php echo $f_or_l; ?>">
    <a href="<?php echo $_catLink; ?>">
      <?php woocommerce_subcategory_thumbnail( $_cat ); ?>
      <h3><?php echo $_cat->name; ?></h3>
    </a>
  </li>
  <?php
}
/* END */

// -- Category headers
add_action( 'after_theme_setup', 'benz_add_category_headers' );
function benz_add_category_headers() {
  $content = get_the_content();
  echo '<div class="term-description"><div class="header-wrap-text-medical-equipment"><h2 class="header-wrap-text-medical-equipment-header">';
  the_title();
  echo '</h2>';
//  the_content();
if ( is_page(68956) || is_page(68967) ) {
  echo $content;
} else {
  echo mb_strimwidth($content, 0, 507, '');
}
  echo '</div></div>';
}
/* END */

// -- Small Repairs img for every gallery page -- PM project
add_action( 'after_theme_setup', 'benz_pm_img_placement' );
function benz_pm_img_placement(){
  echo '<img class="img_plc_pm_wrench" src="';
  echo site_url();
  echo '/wp-content/imgs/repairs-preventive-maintenance.png" />';
}
/* END */

/** is_dia_parts_cat(); */
add_action( 'after_theme_setup', 'is_dia_parts_cat' );
function is_dia_parts_cat(){
  if ( !is_shop() ){
    global $post;
    $parts_cats_all = array();
    $t_id = get_queried_object()->term_id;
    $option_find = get_option("product_cat_featured_$t_id");
    if ($option_find == 'Parts') {
      array_push($parts_cats_all, $t_id ) ;
    }
    if ( in_array($t_id, $parts_cats_all ) ){
      return true;
    }
  }
}
/* END */

/** is_dia_repairs_cat(); */
add_action( 'after_theme_setup', 'is_dia_repairs_cat' );
function is_dia_repairs_cat(){
  if ( !is_shop() ){
    global $post;
    $repairs_cats_all = array();
    $tid = get_queried_object()->term_id;
    $dia_option_find = get_option("product_cat_featured_$tid");
    if ($dia_option_find == 'Repairs') {
      array_push($repairs_cats_all, $tid ) ;
    }
    if ( in_array($tid, $repairs_cats_all ) ){
      return true;
    }
  }
}
/* END */

// --  Function to loop through arrays for special pages - hospital - ltc - ems - imaging
add_action( 'after_theme_setup', 'benz_loop_special_cats' );
function benz_loop_special_cats($cat_array) {
?>
  <ul class="products">
  <?php
  $count = 0;
  foreach ($cat_array as $link ) :
    if ($count % 3 == 0) {
      $first = ' first' ;
    } elseif ($count % 3 != 0) {
      $first = '' ;
    }
  ?>
    <li class="product-category product<?php echo $first; ?>">
      <a href="<?php echo site_url(); ?>/product-category/<?php echo $link['slug']; ?>">
        <img width="250" height="275" alt="<?php echo $link['name']; ?>" src="<?php echo site_url(); ?>/wp-content/uploads/<?php echo $link['img']; ?>">
        <h3><?php echo $link['name']; ?></h3>
      </a>
    </li>
  <?php $count++; ?>
  <?php endforeach ; ?>
  </ul>
<?php
}
/* END */

// -- IS_DIA_PART()
add_action( 'after_theme_setup', 'is_dia_part' );
function is_dia_part() {
  $isPart = get_post_meta( get_the_ID(), 'benz_product_select', true );
  if ($isPart == 'Part'){
    return true;
  }
}
/* END */

/** check for children categories -- if this returns true, its a gallery page with only products **/
add_action( 'after_theme_setup', 'dia_check_for_kids' );
function dia_check_for_kids($parent_cat_ID) {
    $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $parent_cat_ID,
       'taxonomy' => 'product_cat'
    );
  $subcats = get_categories($args);
  if ( count($subcats) == 0 ) {
    return true;
  }
}
/* END */

// Add custom placeholder image for woocommerce
add_filter( 'woocommerce_placeholder_img_src', 'dia_custom_woocommerce_placeholder', 10 );
function dia_custom_woocommerce_placeholder( $image_url ) {
  $image_url = 'https://diamedicalusa.com/wp-content/imgs/diamedical_coming_soon.png';
  return $image_url;
}
/* END */

/*** Reviews Stuff ***/
add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
function woo_reorder_tabs( $tabs ) {
    if(get_comments_number() >= 0){
      $tabs['reviews']['priority'] = 70;
    }
    return $tabs;
}
add_filter( 'woocommerce_product_review_list_args', 'newest_reviews_first' );
function newest_reviews_first($args) {
    $args['reverse_top_level'] = true;
    return $args;
}
add_action( 'comment_post', 'add_custom_comment_field' );
function add_custom_comment_field( $comment_id ) {
   add_comment_meta( $comment_id, 'comment_title', $_POST['comment_title'] );
}

add_action( 'wp_insert_comment','force_dia_approval', 99, 2 );
function force_dia_approval($comment_id, $comment_object) {
		if ( get_post_type($comment_object->comment_post_ID) == 'product' ) {
			wp_set_comment_status($comment_object->comment_ID, 'hold');

      $_user = wp_get_current_user();
      $_name = esc_html( $_user->user_firstname );
      $_email = esc_html( $_user->user_email );

      $to = 'rbenz@diamedicalusa.com';
      $subject = "New Product Review - Needs Approval";

      $message = 'Soneone posted a new product review check it out ';
      $message .= '<a href="https://diamedicalusa.com/wp-admin/post.php?post=';
      $message .= $comment_object->comment_post_ID;
      $message .= '&action=edit">here</a>';

      $headers[] = "From: $_name <$_email>" . "\r\n";
      $headers[] = "Bcc: Travis Morris <tmorris@diamedicalusa.com>" . "\r\n";
      $headers[] = "Bcc: Jeff Ambrose <jambrose@diamedicalusa.com>" . "\r\n";
      $headers[] = "Bcc: Gillian Peralta <gperalta@diamedicalusa.com>" . "\r\n";

      wp_mail( $to, $subject, $message, $headers );
		}
	}
/* END */

/**
 *Reduce the strength requirement on the woocommerce password.
 *
 * Strength Settings
 * 3 = Strong (default)
 * 2 = Medium
 * 1 = Weak
 * 0 = Very Weak / Anything
 */
function reduce_woocommerce_min_strength_requirement( $strength ) {
    return 1;
}
add_filter( 'woocommerce_min_password_strength', 'reduce_woocommerce_min_strength_requirement' );

/* bst.css Load Last Version */
add_action( 'wp_enqueue_scripts', 'dia_last_css_enqueue_scripts', 999 );
function dia_last_css_enqueue_scripts() {
	if ( ! wp_style_is( 'style', 'done' ) ) {
		wp_deregister_style( 'style' );
		wp_dequeue_style( 'style' );
		$style_filepath = get_stylesheet_directory() . '/css/bst.css';
		if ( file_exists($style_filepath) ) {
      wp_enqueue_style('style',
      get_template_directory_uri() . '/css/bst.css', false,
      filemtime(get_stylesheet_directory() . '/css/bst.css'));
		}
	}
}
/* END */

add_filter('woocommerce_registration_redirect', 'dia_wc_registration_redirect');
function dia_wc_registration_redirect( $redirect_to ) {
     $redirect_to = '/medical-equipment';
     return $redirect_to;
}

/*** ADD CUSTOM META BOX for Search Priority ***/
function add_dia_search_meta_box() {
    add_meta_box("dia-search-pri-meta-box", "DiaMedical USA Search Priority &amp; Additional Terms", "dia_search_meta_box_markup", "product", "normal", "high", null);
}
add_action("add_meta_boxes", "add_dia_search_meta_box");

function dia_search_meta_box_markup() {
  global $post;
  wp_nonce_field(basename(__FILE__), "dia-search-priority-meta-box-nonce");

  woocommerce_wp_text_input(
    array(
  		'id'                => 'dia_search_priority',
  		'label'             => __( 'DiaMedical Search Product Priority<br />', 'woocommerce' ),
      'style'             => 'width: 100px;',
  		'description'       => __( 'Enter the Priority number here. 1-50. 50 is top priority this will show first', 'woocommerce' ),
  		'type'              => 'number',
  		'custom_attributes' => array(
  				'step' 	=> 'any',
  				'min'	  => '1',
          'max'   => '50'
        )
        )
      );
  woocommerce_wp_text_input(
        array(
          'id'           => 'dia_search_extra_terms',
          'label'       => __( '<hr>DiaMedical Search - Extra Terms &amp; Keywords<br />', 'woocommerce' ),
          'style'       => 'width: 100%;',
          'description' => __( 'Type in competitor part numbers, obsolete part numbers, etc. Separate each keyword with a space.', 'woocommerce' ),
          'type'        => 'text'
          )
        );
      }

/*** SAVE THAT SHIT ***/
function save_dia_search_meta_box($post_id, $post, $update) {
  if (!isset($_POST["dia-search-priority-meta-box-nonce"]) || !wp_verify_nonce($_POST["dia-search-priority-meta-box-nonce"], basename(__FILE__)))
      return $post_id;

  if(!current_user_can("edit_post", $post_id))
      return $post_id;

  if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
      return $post_id;

  $slug = "product";
  if($slug != $post->post_type)
      return $post_id;

  $woo_dia_search_priority = $_POST['dia_search_priority'];
  if( !empty( $woo_dia_search_priority ) ) {
    update_post_meta( $post_id, 'dia_search_priority', esc_attr( $woo_dia_search_priority ) );
  } else {
    update_post_meta( $post_id, 'dia_search_priority', esc_attr( $woo_dia_search_priority ) );
  }

  $woo_dia_search_extra_shit = $_POST['dia_search_extra_terms'];
  if( !empty( $woo_dia_search_extra_shit ) ) {
    update_post_meta( $post_id, 'dia_search_extra_terms', esc_attr( $woo_dia_search_extra_shit ) );
  } else {
    update_post_meta( $post_id, 'dia_search_extra_terms', esc_attr( $woo_dia_search_extra_shit ) );
  }
}
add_action("save_post", "save_dia_search_meta_box", 10, 3);

/*** Re sort based on custom priority field ***/
function SearchFilter($query) {
    if ($query->is_main_query() && $query->is_search()) {
        $query->set('posts_per_page', '60');
        $query->set('post_type', 'product');
        $query->set('meta_key', 'dia_search_priority' );
        $query->set('orderby', 'meta_value_num' );
        $query->set('order', 'DESC' );
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');
/*** End new search funtion ***/

// Add Custom BACK TO SEARCH link to admin bar
function back_search_toolbar_link($wp_admin_bar) {
  if ( is_admin() ) {
    if( current_user_can('shop_manager') || current_user_can('administrator') ) {
      $screen = get_current_screen();
      if ( $screen->id == 'product' ) {
        global $post;
        $product_sku = get_post_meta( $post->ID, '_sku', true );
        $args = array(
          'id'    => 'back_to_search',
          'title' => 'Back To Search',
          'href'  => 'https://diamedicalusa.com/?s='.$product_sku.'&amp;post_type=product',
          'meta'  => array(
            'class' => 'back-to-search',
            'title' => 'Go Back To The Search Results For This Product'
          )
        );
        $wp_admin_bar -> add_node($args);
      }
    }
  }
}
add_action('admin_bar_menu', 'back_search_toolbar_link', 999);
/* END */

// HTML for Jeff Red flag protocol
function html_red_flag_code() {
  global $product;
	echo '<form style="clear:both;" id="red_flag_protocol" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
	echo '<p><input id="red_flag_protocol_submitted" type="submit" name="red-flag-protocol-submitted';
  echo $product->id;
  echo '" value="Alert Jeff" style="background-color: #d6001c;border: none;font-weight: 600;margin-top:5px;"></p>';
	echo '</form>';
}
// make sure the email will allow for html -- not just plain text
add_filter( 'wp_mail_content_type', 'set_html_red_flag_content_type' );
function set_html_red_flag_content_type() {
  return 'text/html';
}

// if the submit button is clicked, send the email
function deliver_red_flag_mail() {
  global $product;
  if ( isset($_POST["red-flag-protocol-submitted$product->id"]) ) {
    global $woocommerce, $product;

    $_user = wp_get_current_user();
    $_name = esc_html( $_user->user_firstname );
    $_email = esc_html( $_user->user_email );

    $subject = "DiaMedical Website Price Conflict [Urgent]";

    $message = '<p>Hey Jeff, This is a <span style="font-weight:bold;color:red">price conflict</span> alert!</p>';
    $message .='<p>The product is question is <strong>' . $product->get_title() . '</strong></p>';
    $message .='<p>The current online price is <strong>' . $product->get_price() . '</strong></p>';
    $message .='<p><a href="https://diamedicalusa.com/?s=' . $product->get_sku() . '&amp;post_type=product">Here is a link to the Search Results Page</a></p>';
    $message .='<p><a href="https://diamedicalusa.com/wp-admin/post.php?post=' . $product->id . '&amp;action=edit">Here is a link to the Edit Product Page</a></p>';
    $message .='<p>Please address immediately</p>';
    $message .='<p>Thanks, <br /> ' . $_name . '</p>';

		$to = 'jambrose@diamedicalusa.com';

		$headers[] = "From: $_name <orders@diamedicalusa.com>" . "\r\n";
    $headers[] = "Bcc: Rob Benz <rbenz@diamedicalusa.com>" . "\r\n";
    $headers[] = "Bcc: Travis Morris <tmorris@diamedicalusa.com>"."\r\n";

		// If everything worked -- display a success message
		if ( wp_mail( $to, $subject, $message, $headers ) ) {
			echo '<p>sent</p>';
		} else {
			echo 'An unexpected error occurred';
		}
    // reset wp_mail_content_type
    remove_filter( 'wp_mail_content_type', 'set_html_red_flag_content_type' );
	}

} // end function

function red_flag_shortcode() {
	ob_start();
	deliver_red_flag_mail();
	html_red_flag_code();

	return ob_get_clean();
}

add_shortcode( 'RED_FLAG', 'red_flag_shortcode' );
/*** END ***/

/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }

return $urls;
}




/*** Display IV Bag Waiver when products are in your cart & checkout  ***/
add_action( 'woocommerce_before_cart', 't_brady_cart_page_button' ,999 );
//add_action( 'woocommerce_review_order_after_order_total', 't_brady_cart_page_button' );

function t_brady_cart_page_button() {
  $cat_array = array (
    'iv-therapy',
    'simulated-iv-bags',
    'loaded-emergency-packs',
    'loaded-crash-carts',
    'refill-kits',
    'practi-meds',
    'supply-kits',
    'simulation-bundles'
  );
  // Set False - then prove TRUE
  $cat_check = false;

  foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    $product = $cart_item['data'];
    foreach ($cat_array as $cats) {
      if ( has_term( $cats, 'product_cat', $product->id ) ) {
        $cat_check = true;
        // break because we only need one "true" to matter here
        break;
      }
    }
  }
  if ( $cat_check ) {
    echo '<a style="font-size:1.3em;" target="_blank" href="https://diamedicalusa.com/iv-bag-waiver/">';
    echo '**Some of the items in your cart require this waiver before they will ship';
    echo '</a>';
  }
}
/*** END ***/

/*** Repairs Special Image ***/
function product_thumbnail_wrapper() {
	function product_thumbnail_wrapper_html( $html ) {
      $html = $html;
      if ( is_dia_repairs_cat() ) {
      $html .= '<img style="width:84px;float: right;margin-top: -98px;position:relative;z-index:8000;"  src="' ;
      $html .= site_url();
      $html .= '/wp-content/imgs/repairs-preventive-maintenance.png" /><div style="clear:both;"></div>';
  	}
    return $html;
  }
  add_filter( 'post_thumbnail_html', 'product_thumbnail_wrapper_html' );
}
add_action( 'woocommerce_before_shop_loop', 'product_thumbnail_wrapper' );

if ( ! function_exists( 'woocommerce_subcategory_thumbnail' ) ) {
  function woocommerce_subcategory_thumbnail( $category ) {
    $small_thumbnail_size   = apply_filters( 'single_product_small_thumbnail_size', 'shop_catalog' );
    $dimensions             = wc_get_image_size( $small_thumbnail_size );
    $thumbnail_id           = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true  );

    if ( $thumbnail_id ) {
      $image = wp_get_attachment_image_src( $thumbnail_id, $small_thumbnail_size  );
      $image = $image[0];
    } else {
      $image = wc_placeholder_img_src();
    }

    if ( $image ) {
      $image = str_replace( ' ', '%20', $image );
      echo '<img src="' . esc_url( $image ) . '" alt="' . esc_attr( $category->name ) . '" width="' . esc_attr( $dimensions['width'] ) . '" height="' . esc_attr( $dimensions['height'] ) . '" />';

      if ( is_dia_repairs_cat() ) {
        echo '<img style="width:84px;float: right;margin-top: -98px;position:relative;z-index:8000;"  src="' ;
        echo site_url();
        echo  '/wp-content/imgs/repairs-preventive-maintenance.png" /><div style="clear:both;"></div>';
      }
    }
  }

}
/*** END ***/

/*** override jpg quality - no longer reduce 90% AND reduce number of thumbnails generated ***/
//add_filter('jpeg_quality', function($arg){return 100;});
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );
function add_image_insert_override($sizes){
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['large']);
    return $sizes;
}
/*** END ***/

/*** Change images alt and title tag for dia_parts ***/
add_filter('wp_get_attachment_image_attributes', 'change_attachement_image_attributes', 20, 2);
function change_attachement_image_attributes($attr, $attachment) {
  global $post;
  if(!is_admin()) {
    if ( $post->post_type == 'product' ) {
      $title = $post->post_title;
      $content = get_the_content();
      $product = wc_get_product( $post->ID );
      $seo_title = get_post_meta( $post->ID, '_yoast_wpseo_focuskw', true );
      $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
      $single_cat = array_shift( $product_cats );
      $parentcats = get_ancestors($single_cat->term_id, 'product_cat');
      if ( function_exists('is_dia_part') && is_dia_part() ) {
        $attr['alt'] = $title .' | ' . $single_cat->name;
        $attr['title'] = strip_tags($content) ;
      }
      if ( in_array( 5310, $parentcats ) ) { // stretcher pads
        if ( strlen($seo_title) > 0 ) {
          $attr['alt'] = $seo_title .' | ' . $single_cat->name;
          $attr['title'] = $seo_title;
        } else {
          $attr['alt'] = $title .' | ' . $single_cat->name;
          $attr['title'] = $title;
        }
      }
    }
  }
  return $attr;
}
/*** END ***/

/*** var_dump_ array/string all cute and pretty  ***/
function _pre($array) { echo '<pre>'; print_r ($array); echo '</pre>'; }
/*** END ***/

/*** SOME QUOTING STUFF ***/
// add_action('admin_init', 'add_admin_shippings');
// function add_admin_shippings() {
//   add_filter( 'woocommerce_shipping_methods', 'dia_kill_weird_shipping_methods' );
//   function dia_kill_weird_shipping_methods( $methods ) {
//     unset ($methods['international_delivery']);
//     unset ($methods['local_pickup']);
//     return $methods;
//   }
// }


add_action('admin_init', 'stringreplace_order_quote');
function stringreplace_order_quote() {

    $post_id = $_GET['post'];
    $post = get_post($post_id);

    if ( is_admin() && ($post->post_type == 'shop_order') ) {
      if ( $post->post_status == 'wc-ywraq-new' || $post->post_status == 'wc-ywraq-pending') {

        add_action( 'admin_enqueue_scripts', 'benz_admin_quote_script' );
        function benz_admin_quote_script() {
            wp_enqueue_script('custom_quote_js_script', get_bloginfo('template_url').'/js/admin_quote_script.js', array('jquery'));
        }
      }
    }

}


/*** This makes dia_order_quote_header_drop_option usable in the ap-admin query string ***/
add_action( 'pre_get_posts', 'dia_quote_sort' );
function dia_quote_sort( $query ) {
  if ( $query->is_admin && isset( $_GET['dia_order_quote_header_drop_option'] ) ) {
		$meta_key_query = array(
			array(
				'key' => 'dia_order_quote_header_drop_option',
				'value' => $_GET['dia_order_quote_header_drop_option'],
			)
		);
		$query->set( 'meta_query', $meta_key_query );
	}
  if ( $query->is_admin && isset( $_GET['_current_user'] ) ) {
    $meta_key_query = array(
      array(
        'key' => '_current_user',
        'value' => $_GET['_current_user'],
      )
    );
    $query->set( 'meta_query', $meta_key_query );
  }
	return $query;
}
/*** END ***/


/*** Add a custom action to order actions select box on edit order page ***/
add_action( 'woocommerce_order_actions', 'dia_update_customer_info_quoting' );
function dia_update_customer_info_quoting( $actions ) {
	global $theorder;
  if ( $theorder->post_status == 'wc-ywraq-new' ) {
    	$actions['wc_update_customer_order_action'] = __( 'Update Customer Info For Quote', 'woocommerce' );
	}
	return $actions;
}
/*** END ***/

add_action( 'woocommerce_order_action_wc_update_customer_order_action', 'dia_process_update_customer_info_quoting' );
function dia_process_update_customer_info_quoting( $order ) {
  $ywraw_email_check = get_post_meta($order->id, '_billing_email', true);
  $ywraw_name_check  = get_post_meta($order->id, '_billing_first_name', true);
  $ywraw_name_check .= ' ';
  $ywraw_name_check .= get_post_meta($order->id, '_billing_last_name', true);

  update_post_meta ($order->id, 'ywraq_customer_email', $ywraw_email_check );
  update_post_meta ($order->id, 'ywraq_customer_name', $ywraw_name_check );
  update_post_meta ($order->id, '_ywraq_safe_submit_field', 'send_quote' );
  update_post_meta ($order->id, 'ywraq_raq', 'yes' );

}

// Adding Meta container
add_action( 'add_meta_boxes', 'dia_order_quote_header' );
function dia_order_quote_header() {
  add_meta_box( 'dia_order_quote_header_drop', __('Header Logo &amp; probably some other stuff later','woocommerce'), 'dia_order_quote_header_drop', 'shop_order', 'normal', 'high', NULL );
}
function dia_order_quote_header_drop() {
  global $post;
  $meta = get_post_meta( $post->ID, 'dia_secret', true );

  woocommerce_wp_select(
    array(
      'id'          => 'dia_order_quote_header_drop_option',
      'label'       => __( 'Header Logo For Quote<br />', 'woocommerce' ),
      'options'     => array(
        'not_appl'        => __( 'N/A', 'woocommerce' ),
        'nursing_school'  => __( 'Nursing School SLS', 'woocommerce' ),
        'hospital_mm'     => __( 'Hospital MedMattress', 'woocommerce' )
      ),
      'desc_tip'    => 'true',
      'description' => __( 'Do you want the SLS logo or the MedMattress.com logo on your quote PDF?' )
    )
  );
    woocommerce_wp_select(
      array(
        'id'          => 'dia_order_quote_subject_line',
        'label'       => __( 'Subject Line<br />', 'woocommerce' ),
        'options'     => array(
          'subject1'  => __( 'Shipping Calculated - Order Quote #EC-{quote_number} Now', 'woocommerce' ),
          'subject2'  => __( 'Your DiaMedicalUSA.com Quote #EC-{quote_number} Is Attached', 'woocommerce' )
        ),
        'desc_tip'    => 'true',
        'description' => __( 'What subject line do you want?' )
      )
    );

?>

<input type="hidden" name="dia_secret_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
<label for="dia_secret[textarea]">Top Secret Notes -- Dia Only</label><br>
<textarea name="dia_secret[textarea]" id="dia_secret[textarea]" rows="5" cols="30" style="width:500px;"><?php  if (is_array($meta) && isset($meta['textarea'])){ echo $meta['textarea']; } ?></textarea>
<br />
<br />
<a class="preview_quote_button" target="_blank" href="<?php echo site_url(); ?>/my-account/print-order/<?php echo $post->ID; ?>">PREVIEW QUOTE</a>
<br />
<br />
<?php

}


// save it
add_action('save_post', 'dia_quote_image_pdf', 10, 3);
function dia_quote_image_pdf() {
  global $post, $post_id;
  if (is_admin()){
    if ($post->post_type == 'shop_order') {


      // verify nonce
    	if ( !wp_verify_nonce( $_POST['dia_secret_nonce'], basename(__FILE__) ) ) {
    		return $post_id;
    	}
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}

      $old = get_post_meta( $post_id, 'dia_secret', true );
	     $new = $_POST['dia_secret'];


      	if ( $new && $new !== $old ) {
      		update_post_meta( $post_id, 'dia_secret', $new );
      	} elseif ( '' === $new && $old ) {
      		delete_post_meta( $post_id, 'dia_secret', $old );
      	}



      $dia_order_quote_header_drop_option = $_POST['dia_order_quote_header_drop_option'];
      if( !empty( $dia_order_quote_header_drop_option ) ) {
        update_post_meta( $post->ID, 'dia_order_quote_header_drop_option', esc_attr( $dia_order_quote_header_drop_option ) );
      }
      else {
        update_post_meta( $post->ID, 'dia_order_quote_header_drop_option', esc_attr( $dia_order_quote_header_drop_option ) );
      }
      $dia_order_quote_subject_line = $_POST['dia_order_quote_subject_line'];
      if( !empty( $dia_order_quote_subject_line ) ) {
        update_post_meta( $post->ID, 'dia_order_quote_subject_line', esc_attr( $dia_order_quote_subject_line ) );
      }
      else {
        update_post_meta( $post->ID, 'dia_order_quote_subject_line', esc_attr( $dia_order_quote_subject_line ) );
      }
    }
  }
}

// Add Custom BACK TO SEARCH link to admin bar
function my_quotes_stuff_button($wp_admin_bar) {
  if( current_user_can('shop_manager') || current_user_can('administrator') ) {
    $dia_user = wp_get_current_user();
    $dia_user_id = esc_html( $dia_user->ID );
    $URL = site_url();
    $args = array(
      'id'    => 'my_quotes_button',
      'title' => 'My Quotes',
      'href'  => $URL.'/wp-admin/edit.php?&post_type=shop_order&_current_user='.$dia_user_id,
      'meta'  => array(
        'title' => 'View Quotes That I Created'
      )
    );
    $wp_admin_bar -> add_node($args);

    $other_args = array(
      'id'    => 'ns_quotes_button',
      'title' => 'Nursing School Quotes',
      'href'  => $URL.'/wp-admin/edit.php?post_type=shop_order&dia_order_quote_header_drop_option=nursing_school',
      'meta'  => array(
        'title' => 'Hey Jon, How\'s your roomate(s)'
      )
    );
    $wp_admin_bar -> add_node($other_args);

    $ot_args = array(
      'id'    => 'hos_quotes_button',
      'title' => 'Hospital Team Quotes',
      'href'  => $URL.'/wp-admin/edit.php?post_type=shop_order&dia_order_quote_header_drop_option=hospital_mm',
      'meta'  => array(
        'title' => 'Justin is not funny. At all.'
      )
    );
    $wp_admin_bar -> add_node($ot_args);
  }
}
add_action('admin_bar_menu', 'my_quotes_stuff_button', 999);
/* END */


/*** END ***/

/*** Partition arrays into multiple arrays - second argument ***/
function partition(Array $list, $p) {
    $listlen = count($list);
    $partlen = floor($listlen / $p);
    $partrem = $listlen % $p;
    $partition = array();
    $mark = 0;
    for($px = 0; $px < $p; $px ++) {
        $incr = ($px < $partrem) ? $partlen + 1 : $partlen;
        $partition[$px] = array_slice($list, $mark, $incr);
        $mark += $incr;
    }
    return $partition;
}
/*** END ***/

/*** change order status to processing after a purchase order payment, or whatver ***/
add_action( 'woocommerce_thankyou', 'dia_purchase_order_make_processing' );
function dia_purchase_order_make_processing( $order_id ) {
  $order = new WC_Order( $order_id );
  if ('on-hold' == $order->status) {
    $order->update_status( 'processing' );
  }
}
/*** END ***/

/*** diaLink() ***/
function diaLink($cat, $html, $slug, $view = 'menu-view-all'){
  if ( $cat == 'cat' ) {
    $cat_slug = get_term_by('slug', $slug, 'product_cat', 'ARRAY_A');
    $cat_slug_link = get_term_link($cat_slug['term_id'], 'product_cat');
    $link = '<a href="';
    $link .= esc_url( $cat_slug_link );
    $link .= '" title="' . $cat_slug['name'] . '">';
    $link .= '<' . $html;
    if ($view == 'view-all' && $html == 'li') {
      $link .=  ' class="menu-view-all">View All';
    } else {
      $link .= '>' . $cat_slug['name'];
    }
    $link .= '</' . $html . '>';
    $link .= '</a>';
    if ( !is_wp_error($link) ) {
      echo $link;
    }
  } elseif ( $cat == 'pro' ) {
    $product_obj = get_page_by_path( $slug, OBJECT, 'product' );
    $link = '<a href="';
    $link .= esc_url($product_obj->guid);
    $link .= '" title="' . $product_obj->post_title. '">';
    $link .= '<' . $html . '>';
    $link .= $product_obj->post_title;
    $link .= '</' . $html . '>';
    $link .= '</a>';
    if ( !is_wp_error($link) ) {
      echo $link;
    }
  }
}
/*** END ***/

/*** dia_custom_slider() -- needs customer favorite plugin too ***/
function dia_custom_slider($whichProducts, $whichInput) {
  if ( shortcode_exists('wpb-product-slider') ) {
    global $wpdb;
    $result = array();
    foreach( $wpdb->get_results(" SELECT post_id FROM wp_postmeta WHERE meta_key = \"$whichInput\" AND meta_value = 'yes' ") as $key => $row) {
      $feat_id = $row->post_id;
      array_push($result, $feat_id);
    }

    if (count($result) >= 5 ) {
      $clean_ft =  implode (",", $result);
      echo '<br><div style="clear:both"><h3 class="slider-headers">'.$whichProducts.'</h3>';
      echo do_shortcode( '[wpb-product-slider product_type="id" id="'.$clean_ft.'"]' );
      echo '</div><br>';
    }
  }
}
/*** END ***/

/*** Adds custom fields catalog sorting options using postmeta **/
function diamedical_add_postmeta_ordering_args( $sort_args ) {
  $orderby_value = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

  switch( $orderby_value ) {
    case 'diamedical_search_priority':
    $sort_args['orderby'] = 'meta_value_num';
    $sort_args['order'] = 'desc';
    $sort_args['meta_key'] = 'dia_search_priority';
    break;
  }
  return $sort_args;
}
add_filter( 'woocommerce_get_catalog_ordering_args', 'diamedical_add_postmeta_ordering_args' );

// Add these new sorting arguments to the sortby options on the frontend
function diamedical_add_new_postmeta_orderby( $sortby ) {
	$sortby['diamedical_search_priority'] = __( 'Sort by Frequently Purchased', 'woocommerce' );
	return $sortby;
}
add_filter( 'woocommerce_default_catalog_orderby_options', 'diamedical_add_new_postmeta_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'diamedical_add_new_postmeta_orderby' );
/*** END ***/


/*** ADDING NEW COLUMNS TO EDIT ORDERS ***/
add_filter( 'manage_edit-shop_order_columns', 'custom_shop_order_column', 20 );
function custom_shop_order_column($columns) {
  $reordered_columns = array();
  // Inserting after "order_title" column
  foreach( $columns as $key => $column) {
    $reordered_columns[$key] = $column;
    if( $key ==  'order_title' ) {
      $reordered_columns['dia_custom_col'] = __( 'Quote Created By:', 'diamedical');
    }
  }
  return $reordered_columns;
}

add_action( 'manage_shop_order_posts_custom_column' , 'dia_add_quote_created_sorting', 20, 2 );
function dia_add_quote_created_sorting( $column, $post_id ) {
  switch ( $column ) {
    case 'dia_custom_col' :
      $admin_id = get_post_meta($post_id , '_current_user', true);
      $adminuser = get_user_by( 'id', $admin_id );
      echo '<a href="'.site_url().'/wp-admin/edit.php?&post_type=shop_order&_current_user='.$admin_id.'">'.$adminuser->first_name.' '.$adminuser->last_name.'</a>';
    break;
  }
}
/*** END ***/


// Remove some checkout billing fields


// add_filter( 'woocommerce_checkout_fields', 'dia_filter_billing_fields' );
// function dia_filter_billing_fields($fields){
//     unset( $fields["billing_country"] );
//     unset( $fields["billing_company"] );
//     unset( $fields["billing_first_name"] );
//     unset( $fields["billing_last_name"] );
//     unset( $fields["billing_address_1"] );
//     unset( $fields["billing_address_2"] );
//     unset( $fields["billing_city"] );
//     unset( $fields["billing_state"] );
//     unset( $fields["billing_postcode"] );
//     unset( $fields["billing_phone"] );
//     unset( $fields["billing_email"] );
//
//     $order = array(
//       "billing_company",
//       "billing_first_name",
//       "billing_last_name",
//       "billing_address_1",
//       "billing_address_2",
//       "billing_city",
//       "billing_state",
//       "billing_postcode",
//       // "billing_country",
//       "billing_email",
//       "billing_phone"
//     );
//
//     foreach($order as $field) {
//         $ordered_fields[$field] = $fields["billing"][$field];
//       }
//
//       $fields["billing"] = $ordered_fields;
//
//     return $fields;
// }






/*** Create user account when new customer profile form submits ***/
// add_action( 'vfbp_after_email', 'create_dia_profile_account', 10, 2 );
//
// function create_dia_profile_account( $entry_id, $form_id  ){
//   if ($form_id == 9) {
//
//
// // vfb-field-298
//
//
//   $username = $_POST['vfb-field-233']['first'] . $_POST['vfb-field-233']['last'];
//   $email = $_POST['vfb-field-236'];
//
//   $pass = $_POST['vfb-field-'];
//
//   $exists = email_exists( $email );
//      if (! $exists ) {
//        wp_create_user( $username, $pass, $email );
//      }
//    }
// }
/*** END ***/

// Adding Meta container
// add_action( 'add_meta_boxes', 'dia_shipping_admin_add_meta_boxes' );
// function dia_shipping_admin_add_meta_boxes() {
//   add_meta_box( 'send_some_tracking_info', __('specs_dump','woocommerce'), 'dia_specs_dump', 'shop_order', 'normal', 'high', NULL );
// }
// function dia_specs_dump() {
//    global $theorder;
//   // // $items = $theorder->get_items();
//   // $shipping_items = $theorder->get_items( 'shipping' );
//   // // _pre($shipping_items);
//   // // _pre($shipping_items);
//   // // _pre() $shipping_items[1]['method_id'];
//   //
//   // foreach ( $shipping_items as $shipping_item ) {
//   //   echo $shipping_item['method_id'];
//   // }
//
//   $adminuser = get_user_by( 'id', get_post_meta($theorder->id , '_current_user', true) );
//
// _pre($adminuser);
// }



/*** END ***/


// update some shit
//
$update_stuff = array (
  '42667',
  '42669',
  '42673',
  '42675',
  '42677',
  '42644',
  '42679',
  '42646',
  '42681',
  '42648',
  '42650',
  '42652',
  '42662'
);

foreach ($update_stuff as $thing) {
  //update_post_meta( $thing, 'dia_whitespace_adj', 'yes' );
  //update_post_meta( $thing, 'mft_image', 'http://diamedicalusa.com/wp-content/uploads/2017/09/simusuit-logo.jpg' );
  update_post_meta( $thing, 'mft_image', 'http://diamedicalusa.com/wp-content/uploads/2018/05/Medline.jpg' );
}
