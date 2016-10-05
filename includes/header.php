<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>

<?php
$newFormRow = '<div class="userRow"><p style="clear:both;" class="form-row form-row-wide validate-required" id="add_pro_PN"><label for="rqa-part" class="">Part Number</label><input style="height: 34px; border: 1px solid #ccc; border-radius: 4px;" type="text" class="input-text" value="" name="addedonepart[]" id="rqa-part[]"></p><p class="form-row form-row-wide validate-required" id="add_pro_DS"><label for="rqa-desc" class="">Product Name / Description</label><input style="height: 34px; border: 1px solid #ccc; border-radius: 4px;" type="text" class="input-text " name="addedonedesc[]" value="" id="rqa-desc[]" ></p><p class="form-row form-row-wide validate-required" id="add_pro_QT"><label for="rqa-qty" class="">Quantity</label><input style="height: 34px; border: 1px solid #ccc; border-radius: 4px;" type="text" class="input-text " name="addedoneqty[]" value="" id="rqa-qty[]" ></p><a href="javascript:;" class="removeRow">X</a><div>';
?>
<script type="text/javascript">

jQuery(function(){
    var rows = 0;

    jQuery('#addRow').click(function(){
jQuery('#userRows').append('<?php echo($newFormRow); ?>'); rows++;
    });

    jQuery(document).on('click', '.removeRow', function(){
        jQuery(this).closest('.userRow').remove();
    });
});

</script>

<script type="text/javascript">
/*
jQuery(document).ready(function() {
    jQuery('#cat_mail').hide();
		jQuery("option[name=rqa_cat_email]").click(function () {
				jQuery('#cat_mail').hide();
		});
		jQuery("option[name=rqa_cat_select]").click(function () {
				jQuery('#cat_mail').hide();
		});
    jQuery("option[name=rqa_cat_sendmail]").click(function () {
        jQuery('#cat_mail').show();
    });
		jQuery("option[name=rqa_cat_both]").click(function () {
				jQuery('#cat_mail').show();
		});

 });

*/

</script>
<script>
/*** Add classes to #mobile-navbar on load & Resize ***/

function addClassesMobile($when) {
	$(window).on($when, function() {
		if($(window).width() < 800) {
				$('#mobile-navbar').addClass('navbar navbar-default navbar-fixed-top');
		} else {
			$('#mobile-navbar').removeClass('navbar navbar-default navbar-fixed-top');
		}
	})
}
addClassesMobile('load');
addClassesMobile('resize');

</script>

</head>


<body <?php body_class(); ?>>
<div id="landing_nav-wrap">
	<div class="container">
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-hospital" href="<?php echo site_url(); ?>/hospital-equipment">Hospitals<a>
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-mattresses" target="_blank" href="http://www.medmattress.com">Mattresses<a>
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-schools" href="<?php echo site_url(); ?>/healthcare-education">Healthcare Education<a>
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-simlab" href="<?php echo site_url(); ?>/simlabsolutions">SimLabSolutions<a>
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-ems" href="<?php echo site_url(); ?>/emergency-rescue">Emergency &amp; Rescue<a>
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-ltc" href="<?php echo site_url(); ?>/long-term-care">Long Term Care<a>
<a class="landing_nav hvr-shutter-out-horizontal landing_nav-qq" href="<?php echo site_url(); ?>/request-quote">Quick Quote<a>

</div>

</div>
<?php
		if(isset($_GET['login']) && $_GET['login']=='failed') {
			echo '<p style="margin-top:0.8em;" class="woo-ma-login-failed woo-ma-error error-home-class-red">';
			_e('Login failed, please try again','woocommerce-my-account-widget');
			echo '</p>';
		}
?>
<!-- TODO: create a container that goes around the menu button and the search bar. give it a background of whatever blue.-->
<header id="masthead" role="banner">
	<nav id="mobile-navbar">
	<div class="container-fluid">
		<div id="dia-logo-left">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo site_url(); ?>/wp-content/imgs/DiaMedical-Logo-main.png" />
			</a>
		</div>
		<div class="container-fluid">
<div style="width:300px; float:left; margin-left: 43px;">
		<?php
	$ps_echo = true ;
	if ( function_exists( 'woo_predictive_search_widget' ) ) woo_predictive_search_widget( $ps_echo );
	?>
</div>
	<div id="mm-right-contact">

		<?php

 $benzitems = '<ul id="%1$s" class="%2$s sf-menu sf-js-enabled">%3$s</ul>';

	echo '<span class="mm-right-contact-1">' . 'CONTACT US: (877) 593-6011' . '</span>';
	echo '<span class="mm-right-contact-2">' . '   (M-F: 7-6 EST)' . '</span>' . '<br />';

	wp_nav_menu( array( 'theme_location'  => 'header-menu',
	                    'items_wrap'      => $benzitems,
	                    'walker'          => new BENZ_Walker_Nav_Menu
										) );

										if ( is_user_logged_in() ) {
											wp_nav_menu( array( 'theme_location'  => 'myaccount',
											                    'items_wrap'      => $benzitems,
	                                        'walker'          => new BENZ_Walker_Nav_Menu_MYACCOUNT
																				) );
										} else {
											wp_nav_menu( array( 'theme_location'  => 'sign-in-menu',
    																			'items_wrap'      => $benzitems,
																					'walker'          => new BENZ_Walker_Nav_Menu_SIGNIN
																				) );
	};

	echo do_shortcode('[WooCommerceWooCartPro]');

	?>
</div> <!-- #mm-right-contact -->
</div> <!-- .container -->
</div>
</nav>
</header> <!-- #masthead -->



<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">

			<?php
$benzmenu  = 'benz-menu';
wp_nav_menu(array(
    'theme_location' => 'home',
    'items_wrap' => $benzitems,
    'container_class' => $benzmenu
));
wp_nav_menu(array(
    'theme_location'  => 'medical-equipment',
    'items_wrap'      => $benzitems,
    'container_class' => $benzmenu . ' ' . $benzmenu . '-equipt',
    'walker'          => new BENZ_Walker_Nav_Menu_EQP
));

$ps_echo = true ;
if ( function_exists( 'woo_predictive_search_widget' ) ) {
    wp_nav_menu(array(
        'theme_location'  => 'parts-search',
        'items_wrap'      => $benzitems,
        'container_class' => $benzmenu . ' ' . $benzmenu . '-parts',
        'walker'          => new BENZ_Walker_Nav_Menu_PS
    ));
} else {
    wp_nav_menu(array(
        'theme_location'  => 'parts-search',
        'items_wrap'      => $benzitems,
        'container_class' => $benzmenu . ' ' . $benzmenu . '-parts'
    ));
}

wp_nav_menu(array(
    'theme_location'  => 'repirstmp',
    'items_wrap'      => $benzitems,
    'container_class' => $benzmenu . ' ' . $benzmenu . '-repairs'
  //    'walker'        => new BENZ_Walker_Nav_Menu_RP
));
wp_nav_menu(array(
    'theme_location'  => 'manufacturers',
    'items_wrap'      => $benzitems,
    'container_class' => $benzmenu . ' ' . $benzmenu . '-manufacturers',
    'walker'          => new BENZ_Walker_Nav_Menu_MFT
));
wp_nav_menu(array(
    'theme_location'  => 'about-us',
    'items_wrap'      => $benzitems,
    'container_class' => $benzmenu . ' ' . $benzmenu . '-about',
    'walker'          => new BENZ_Walker_Nav_Menu_ABOUT
));
?>

		</div><!-- .navbar-header -->
  </div><!-- /.container -->
</nav>
