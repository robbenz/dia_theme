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
  if (is_page('58440') ) {
    wp_register_script('curtain_form', get_template_directory_uri() . '/js/curtain_form_script.js', array('jquery'),false, true);
    wp_enqueue_script('curtain_form');
  }
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
}
add_action('admin_enqueue_scripts', 'benz_chromefix_inline_css');
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

//  --  Register My Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'home'               => __( 'Home' ),
      'header-menu'        => __( 'Header Menu' ),
      'sign-in-menu'       => __( 'Sign In Menu' ),
      'repirstmp'          => __( 'repirstmp' ),
      'medical-equipment'  => __( 'Medical Equipment' ),
      'parts-search'       => __( 'Parts Search' ),
      'repairs'            => __( 'Service' ),
      'manufacturers'      => __( 'Manufacturers' ),
      'myaccount'          => __( 'My Account' ),
      'about-us'           => __( 'About Us' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
/* END */

/**********************/
/***** MENU STUFF *****/
/**********************/

// -- NEED HELP?
class BENZ_Walker_Nav_Menu extends Walker_Nav_Menu {
   function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu" style="color:#004ea8; font-weight:700;"><div class="arrow-up-mm"></div><div class="insert-img-here">NEED SOME ASSISTANCE?<br>';
        $output .= '<span style="color:#000; font-weight:normal;"><em>Browse these pages to read<br>our policies or to drop us a line!</em></span></div>';
    }
        function end_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '</ul>';
    }
}
// -- My Account
class BENZ_Walker_Nav_Menu_MYACCOUNT extends Walker_Nav_Menu {
   function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu" style="color:#004ea8; font-weight:700;"><div class="arrow-up-mm"></div><div class="insert-img-here">MANAGE YOUR ACCOUNT<br></div>';

    }
        function end_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<li class="log-in-out-link"><a href="'. wp_logout_url() .'">Log Out</a></li>';
        $output .= '</ul>';
    }
}

// -- Sign In
class BENZ_Walker_Nav_Menu_SIGNIN extends BENZ_Walker_Nav_Menu {

   function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu"><div class="arrow-up-mm"></div><div class="insert-img-here"><strong>SIGN IN</strong>' . do_shortcode('[wppb-login]') . '</div>';
    }
        function end_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<div class="insert-img-here" style="line-height: 22px; width:auto; color:#004ea8; font-weight:700; text-align:center; border-top: 1px solid #cccccc; ">';
        $output .= 'NEW CUSTOMER? <br><span style="color:#000; font-weight:normal;"><em>Registration is easy and<br>only takes a few seconds!</em></span>';
        $output .= '<a href="https://diamedicalusa.com/my-account" id="benz-register-link">REGISTER</a></div></ul>';
    }

}
// -- PART SEARCH
class BENZ_Walker_Nav_Menu_PS extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu">';

    }

function end_lvl(&$output, $depth = 0, $args = Array()) {
    if( 0 == $depth ) {
        $output .= '<div class="benz-bottom-colors" style="background-color:#78be20">Can’t find the part you’re looking for? Submit a part request and we’ll email you a quote!</div>';
        $output .= woo_predictive_search_widget( $ps_echo );
        $output .= '<div id="mattresshomeimgwrap"><a style="float:left; width:18.5%;"" href="https://diamedicalusa.com/product-category/hill-rom-parts-online/"><img style="margin:0 0.8em;" src="https://diamedicalusa.com//wp-content/imgs/hill-rom-logo.png" alt="New &amp; Reconditioned Hill-Rom Parts" /></a><a style="float:left; width:18.5%;"" href="https://diamedicalusa.com//results/keyword/STRYKER/search-in/product/cat-in/all/search-other/productPeepOpen_skuPeepOpen_cat"><img style="margin:7px 0.8em 0;" src="https://diamedicalusa.com//wp-content/imgs/strykerlogo.png" alt=" " /></a><a style="float:left; width:18.5%;"" href="https://diamedicalusa.com//results/keyword/amico/search-in/product/cat-in/all/search-other/productPeepOpen_skuPeepOpen_cat"><img style="margin: -6px 0.8em 0.6em; max-height: 50px; height:50px;" src="https://diamedicalusa.com//wp-content/imgs/amico_logo.png" alt=" " /></a><a style="float:left; width:18.5%;"" href="https://diamedicalusa.com//results/keyword/hausted/search-in/product/cat-in/all/search-other/product,p_sku"><img style="margin:1.0em 0.8em 0 -17px;" src="https://diamedicalusa.com//wp-content/imgs/haustedlogo.png" alt=" " /></a><a style="float:left; width:18.5%;"" href="https://diamedicalusa.com//results/keyword/midmark/search-in/product/cat-in/all/search-other/productPeepOpen_skuPeepOpen_cat"><img style="margin:7px 0.8em 0 -10px;" src="https://diamedicalusa.com//wp-content/imgs/midmarklogo.png" alt=" " /></a></div><div class="arrow-down"></div>';
    }
    $indent = str_repeat( "\t", $depth );
    $output .= "{$indent}</ul>\n";
}
}
// -- Manufacturers
    class BENZ_Walker_Nav_Menu_MFT extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu">';
    }

function end_lvl(&$output, $depth = 0, $args = Array()) {
    if( 0 == $depth ) {
        $output .= '<div class="benz-bottom-colors" style="background-color:#f1c400;">Don’t want to browse manufacturers? Try searching your manufacturer at the top of the page!</div>';
        $output .= '<div class="arrow-down"></div>';
        $output .= '<a href="http://diamedicalusa.com/product-category/hill-rom-parts-online/"><img alt="Reconditioned Hill Rom Parts" src="https://diamedicalusa.com/wp-content/imgs/Hill-Rom-MFT.png" id="benz-menu-img-mft1" class="benz-menu-img" /></a>';
        $output .= '<a href="http://www.diamedicalusa.com/simlabsolutions/"><img src="https://diamedicalusa.com/wp-content/imgs/includes/sim-lab.png" id="benz-menu-img-mft4" style="position: relative; top: -79px; width: 269px; left: 70px;" class="benz-menu-img"/></a>';
        $output .= '<a href="http://www.diamedicalusa.com/results/keyword/hausted/search-in/product/cat-in/all/search-other/product,p_sku"><img src="https://diamedicalusa.com/wp-content/imgs/haustedlogo.png" id="benz-menu-img-mft3" class="benz-menu-img" /></a>';
    }
    $indent = str_repeat( "\t", $depth );
    $output .= "{$indent}</ul>\n";
  }
}

// -- REPAIRS

class BENZ_Walker_Nav_Menu_RP extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    $output .= '<ul class="sub-menu">';
  }
  function end_lvl(&$output, $depth = 0, $args = Array()) {
    if( 0 == $depth ) {
        $output .= '<div class="benz-bottom-colors" style="background-color:#f1c400;">Don’t want to browse manufacturers? Try searching your manufacturer at the top of the page!</div>';
        $output .= '<div class="arrow-down"></div>';
        $output .= '<a id="biomedrepairs" href="#"><img src="https://diamedicalusa.com/wp-content/imgs/homepage/biomedical-repairs-menu.png" /></a>';
    }
    $indent = str_repeat( "\t", $depth );
    $output .= "{$indent}</ul>\n";
  }
}

// -- MEDICAL EQUIPMENT
class BENZ_Walker_Nav_Menu_EQP extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu">';
    }

function end_lvl(&$output, $depth = 0, $args = Array()) {
    if( 0 == $depth ) {
        $output .= '<div class="benz-bottom-colors" style="background-color:#ffad00;">Browse our wide selection of medical and instructional products or browse by manufacturer or part number.</div>';
        $output .= '<a id="mmlogomenu" href="http://www.medmattress.com"><img src="https://diamedicalusa.com/wp-content/imgs/homepage/medmattress-logomenu.png" /></a>';
        $output .= '<div class="arrow-down"></div>';
        $output .= '<a id="fluidslogomenu" href="http://www.diamedicalusa.com/simlabsolutions/"><img src="https://diamedicalusa.com/wp-content/imgs/ns-home-imgs/simulated-iv-fluids-menu.png" /></a>';
    }
    $indent = str_repeat( "\t", $depth );
    $output .= "{$indent}</ul>\n";
}
}
// -- ABOUT US
class BENZ_Walker_Nav_Menu_ABOUT extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $output .= '<ul class="sub-menu">';
        $output .= '<div id="benz-menu-about"><p class="benz-menu-about-header">WHO ARE WE?</p>';
        $output .= '<p class="benz-menu-about-copy">DiaMedical USA, along with its subsidiaries MedMattress.com and SimLabSolutions, is a manufacturer ';
        $output .= 'and global distributor of healthcare products, supplies, mattresses and replacement parts. ';
        $output .= 'We lead the industry in Healthcare education by offering full service solutions in outfitting your simulation labs with products such as hospitals beds, training headwalls, infusion pumps, simulated IV fluids, loaded crash carts, and more! </p>';
        $output .= '<p class="benz-menu-about-header">OUR MISSION</p>';
        $output .= '<p class="benz-menu-about-copy">We understand how tough it is to for hospitals and universities to build a budget ';
        $output .= 'without making sacrifices. That’s why we have no hidden fees nor built-in shipping ';
        $output .= 'costs! Our customers always have the lowest prices for their products without any ';
        $output .= 'sacrifice in quality. For every shipment we send we calculate the lowest price ';
        $output .= 'through our many shipping company affiliates. So you can always rest assured that ';
        $output .= 'we’re always getting you the lowest price - GUARANTEED. </p>';
        $output .= '<p class="benz-menu-about-header">CAREERS</p>';
        $output .= '<p class="benz-menu-about-copy">We want the brilliant ones, the tenacious ones, the ones who have the initiative and instincts to think outside the box. We want people who are resilient, team-oriented, and driven. We want all of this because we are intensely focused on customer service and helping our customers and carriers grow their businesses.</p></div>';
        $output .= '<div class="arrow-down"></div>';
    }

function end_lvl(&$output, $depth = 0, $args = Array()) {
    if( 0 == $depth ) {
        $output .= '<div id="about_fltrght">';
        $output .= '<p class="about-phone" style="color:#000;">Phone Number:</p>';
        $output .= '<p class="about-phone-number" style="color:#004ea8;"><i class="fa icon-phone fa-lg"></i>(877) 593-6011</p>';
        $output .= '<p class="about-fax" style="color:#000;">Fax Number:</p>';
        $output .= '<p class="about-fax-number" style="color:#004ea8;"><i class="fa icon-print fa-lg"></i>(248) 671-1550</p>';
        $output .= '<p class="about-email" style="color:#000;">Email Address:</p>';
        $output .= '<p class="about-email-number" style="color:#004ea8;"><i class="fa icon-laptop fa-lg"></i>Info@DiaMedicalUSA.com</p>';
        $output .= '<p class="about-mail" style="color:#000;">Mailing Address: </p>';
        $output .= '<p class="about-mail-number" style="color:#004ea8;"><i class="fa icon-envelope fa-lg"></i>5807 W. Maple, Suite #175<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West Bloomfield, MI 48322</p>';
        $output .= '</div><div class="benz-bottom-colors" style="background-color:#7fa6d3">Need help finding our policies? Visit our help page for our shipping and return policies.</div>';
    }
    $indent = str_repeat( "\t", $depth );
    $output .= "{$indent}</ul>\n";
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
    return 9999;
  elseif( is_product_category( '9350') ) :  // Bariatric Care
    return 27;
  elseif (isset($_GET['view']) && $_GET['view'] === 'all') :  // View all page
    return 9999;
  else :
   return 12;
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

//  --  remove '(Free)' or '(FREE!)' label text on cart page for Shipping and Handling if cost equal to $0
function benz_custom_shipping_free_label( $label ) {
    $label =  str_replace( "(Free)", " ", $label );
    $label =  str_replace( "(FREE!)", " ", $label );
    return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label' , 'benz_custom_shipping_free_label' );
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
	$args['posts_per_page'] = 4;
	$args['columns'] = 4;
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
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );


// Edit order items table template defaults  -- Show Sku on emails
function BENZ_wc_order_email_skus( $table, $order ) {

	ob_start();

	$template = $plain_text ? 'emails/plain/email-order-items.php' : 'emails/email-order-items.php';
	wc_get_template( $template, array(
		'order'                 => $order,
		'items'                 => $order->get_items(),
		'show_download_links'   => $show_download_links,
		'show_sku'              => true,
		'show_purchase_note'    => $show_purchase_note,
		'show_image'            => $show_image,
		'image_size'            => $image_size
	) );

	return ob_get_clean();
}
add_filter( 'woocommerce_email_order_items_table', 'BENZ_wc_order_email_skus', 10, 2 );
/* END */

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
    if ($product_cat_ID == '5249') {
      echo '<li><a href="' . site_url() . '/privacy-curtain-sizing-form/"><span>Privacy Curtains</span></a></li>';
    }
  }
  echo '</ul></li>';
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
  echo mb_strimwidth($content, 0, 507, '');
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

/** Add Custom Field To Category Form */
add_action( 'product_cat_add_form_fields', 'product_cat_taxonomy_custom_fields', 10, 2 );
add_action( 'product_cat_edit_form_fields', 'product_cat_taxonomy_custom_fields', 10, 2 );
function product_cat_taxonomy_custom_fields($tag) {
   // Check for existing taxonomy meta for the term you're editing
   $t_id = $tag->term_id; // Get the ID of the term you're editing
   $term_meta = get_option( "product_cat_featured_$t_id" ); // Do the check
?>
<div style="width:100%;clear:both;float:left;margin:15px 0 30px 0;">
<tr class="form-field">
    <th scope="row" valign="top">
        <label style="margin-right:110px; font-weight:bold;" for="presenter_id"><?php _e('Category Staus'); ?></label>
    </th>
    <td>
      <select style="width:300px;" name="featured" id="featured" class="postform">
    <option value="0">Select</option>
    <option <?= $term_meta=='Parts'?'selected':'' ?>   value="Parts">Parts</option>
    <option <?= $term_meta=='Equipment'?'selected':'' ?>   value="Equipment">Equipment</option>
    <option <?= $term_meta=='Repairs'?'selected':'' ?>   value="Repairs">Repairs</option>
</select>
    </td>
</tr>
</div>
<?php
}
/** Save Custom Field Of Category Form */
add_action( 'created_product_cat', 'product_cat_form_custom_field_save', 10, 2 );
add_action( 'edited_product_cat', 'product_cat_form_custom_field_save', 10, 2 );

function product_cat_form_custom_field_save( $term_id, $tt_id ) {

    if ( isset( $_POST['featured'] ) ) {
        $option_name = 'product_cat_featured_' . $term_id;
        update_option( $option_name, $_POST['featured'] );
    }
}
/** query the post and turn into usuable function */
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


add_action( 'woocommerce_flat_rate_shipping_add_rate', 'add_another_custom_flat_rate', 10, 2 );

function add_another_custom_flat_rate( $method, $rate ) {
	$new_rate          = $rate;
	$new_rate['id']    .= ':' . 'nextday_rate_name'; 
	$new_rate['label'] = 'Next Day';
	$new_rate['cost']  += 0;

	// Add it to WC
	$method->add_rate( $new_rate );
}
