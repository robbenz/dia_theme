w<?php
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

wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', false, false, 'all' );
wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), false, true );

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}

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

//  --  request a quote for empty price products BENZ
add_filter('woocommerce_empty_price_html', 'custom_call_for_price');

function custom_call_for_price() {
     return '<a href="#" class="eModal-2 r-a-qbutton-price">Request A Quote</a>';
}

//  --  Benz fix for multiple html input field in category edit smashboard becuase of tnymce plugin
function benz_chromefix_inline_css() {
  wp_add_inline_style( 'wp-admin', '.term-description-wrap { display: none ; }' );
  wp_add_inline_style( 'wp-admin', '#product_cat-all { max-height:400px }' );
  wp_add_inline_style( 'wp-admin', '#the-list .column-name a { display: inline ; }' );
  wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
  wp_add_inline_style( 'wp-admin', '.column-predictive_search_focuskw { height:50px; max-height:50px;}' );
}
add_action('admin_enqueue_scripts', 'benz_chromefix_inline_css');


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
      'repairs'            => __( 'Repairs' ),
      'manufacturers'      => __( 'Manufacturers' ),
      'myaccount'          => __( 'My Account' ),
      'about-us'           => __( 'About Us' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

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
        $output .= '<a href="http://www.diamedicalusa.com/results/keyword/stryker/search-in/product/cat-in/all/search-other/product,p_sku"><img src="https://diamedicalusa.com/wp-content/imgs/MFT-drop-Stryker.png" id="benz-menu-img-mft2" class="benz-menu-img"/></a>';
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
        $output .= '<a id="fluidslogomenu" href="http://www.diamedicalusa.com/product-category/simulated-iv-bags/"><img src="https://diamedicalusa.com/wp-content/imgs/homepage/simuulated-iv-fluids-menu.png" /></a>';
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

// -- Change number or products per row, and number of products per page
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
      return 3;
	}
}

function products_per_page_category( $count ) {
  if( is_product_category( array ( '5828',   // These are all the parts categories
                                   '8390',
                                   '5797',
                                   '5786',
                                   '6412',
                                   '3683',
                                   '8135',
                                   '8279',
                                   '2305',
                                   '3206',
                                   '5805',
                                   '8264',
                                   '8278',
                                   '6428',
                                   '8402',
                                   '8216',
                                   '6416',
                                   '6432',
                                   '8219',
                                   '6418',
                                   '6414',
                                   '8283',
                                   '5361',
                                   '5834',
                                   '1960',
                                   '5777',
                                   '8131',
                                   '6323',
                                   '5173',
                                   '5832',
                                   '5826',
                                   '8865',
                                   '8864',
                                   '8832',
                                   '8133'
                                   ) ) ) :
        return 1999;
    else :
        return 12;
    endif;
}
add_filter( 'loop_shop_per_page', 'products_per_page_category', 20 );

if (is_woocommerce() && is_archive()) {
        wp_enqueue_script( 'frontend-custom', get_template_directory_uri() . '/js/frontend-custom.js', array("jquery"));
            add_thickbox();
}

//  --  remove "Add to Cart" button on product listing page in WooCommerce
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );

function remove_add_to_cart_buttons() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
}

//  --  Re-Order product page layouts
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


//  --  PREFIX ORDERNUMMER ADD MM- BENZ
add_filter( 'woocommerce_order_number', 'prefix_woocommerce_order_number', 1, 2 );

function prefix_woocommerce_order_number( $oldnumber, $order ) {
    return 'EC-' . $order->id;
  }

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


//  --  remove '(Free)' or '(FREE!)' label text on cart page for Shipping and Handling if cost equal to $0
function benz_custom_shipping_free_label( $label ) {
    $label =  str_replace( "(Free)", " ", $label );
    $label =  str_replace( "(FREE!)", " ", $label );

    return $label;
}
add_filter( 'woocommerce_cart_shipping_method_full_label' , 'benz_custom_shipping_free_label' );

//  --   get rid of users "POSTS" cloumn, -- never use it
add_action('manage_users_columns','remove_user_posts_column');
function remove_user_posts_column($column_headers) {
    unset($column_headers['posts']);
    return $column_headers;
}


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
  if ( is_page('86') ) {

  } else { return $price;
  }

}

add_filter( 'woocommerce_show_variation_price', function() { return true; } );

//  --  woocommerce side bar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//  -- New Class to add Sortable Registered date in users wp dash -- HOT
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
		// add_filter( 'plugin_row_meta', array( $this ,'donate_link'), 10, 2 );

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

// Edit order items table template defaults
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

//  --  Remove password strength
/*
function BENZ_remove_password_strength() {
	if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
		wp_dequeue_script( 'wc-password-strength-meter' );
	}
}
add_action( 'wp_print_scripts', 'BENZ_remove_password_strength', 100 ); */


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

//  --  BENZ add custom produt meta for parts condition

// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {
  global $woocommerce, $post;
  echo '<div class="options_group">';
// select input field
woocommerce_wp_select(
	array(
		'id'          => 'benz_condition_select',
		'label'       => __( 'Product Condition', 'woocommerce' ),
    'options'     => array(
                        'N/A'             => __( 'N/A', 'woocommerce' ),
                        'New'             => __( 'New', 'woocommerce' ),
                        'Reconditioned'   => __( 'Reconditioned', 'woocommerce' ),
                        'OEM Replacement' => __( 'OEM Replacement', 'woocommerce' ),
                        'OEM Original'    => __( 'OEM Original', 'woocommerce' ),
                        'Tested'          => __( 'Tested', 'woocommerce' ),
                        'Untested'        => __( 'Untested', 'woocommerce' ),
                        ),
		'desc_tip'    => 'true',
		'description' => __( 'Is this part New, Reconditioned, Untested, etc.?', 'woocommerce' )
	)
);

echo '</div>';

}

function woo_add_custom_general_fields_save( $post_id ) {
// Text Field
$woocommerce_wp_select = $_POST['benz_condition_select'];
if( !empty( $woocommerce_wp_select ) ) {
update_post_meta( $post_id, 'benz_condition_select', esc_attr( $woocommerce_wp_select ) );
}
else {
update_post_meta( $post_id, 'benz_condition_select', esc_attr( $woocommerce_wp_select ) );
}

}

// -- Add custom checkbox on Category page
