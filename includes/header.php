<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/css/bst.css'); ?>" type="text/css" media="screen, projection" />
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="landing_nav-wrap">
	<div class="container">
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-hospital" href="<?php echo site_url(); ?>/hospital-equipment">Hospitals</a>
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-mattresses" target="_blank" href="http://www.medmattress.com">Mattresses</a>
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-schools" href="<?php echo site_url(); ?>/healthcare-education">Healthcare Education</a>
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-simlab" href="<?php echo site_url(); ?>/simlabsolutions">SimLabSolutions</a>
		<div class="dropdown">
			<button class="dropbtn hvr-shutter-out-horizontal landing_nav-ems landing_nav ems-button-cursor">Emergency &amp; Rescue</button>
			<div class="dropdown-content">
				<a href="<?php echo site_url(); ?>/emergency-rescue/">EMS Education</a>
      	<a href="<?php echo site_url(); ?>/field-ready-ems-equipment/">Field Ready Gear</a>
    	</div>
		</div>
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-ltc" href="<?php echo site_url(); ?>/long-term-care">Long Term Care</a>
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-pt" href="<?php echo site_url(); ?>/product-category/physical-therapy/">Physical Therapy</a>
		<a class="landing_nav hvr-shutter-out-horizontal landing_nav-qq" href="<?php echo site_url(); ?>//product-category/veterinary-equipment/">Veterinary</a>
	</div>
</div>

<?php
		if(isset($_GET['login']) && $_GET['login']=='failed') {
			echo '<p style="margin-top:0.8em;" class="woo-ma-login-failed woo-ma-error error-home-class-red">';
			_e('Login failed, please try again','woocommerce-my-account-widget');
			echo '</p>';
		}
?>

<header id="masthead" role="banner">
	<div class="container">
		<nav id="mobile-navbar" class="">
			<div id="fixed-row" class="row">
				<div id="dia-main-logo-left">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo site_url(); ?>/wp-content/imgs/logo/DiaMedical_USA_Logo.png" />
					</a>
				</div>
			</div>
			<div id="form-row" class="row">
				<?php get_template_part('includes/navbar-search'); ?>

				<div id="mm-right-contact">
					<div style="width:100%; height:39px; text-align:right">
						<a href="<?php echo site_url(); ?>/request-quote" class="qq_button">
						<i class="glyphicon glyphicon-envelope"></i>&nbsp;Quick Quote
					</a>
						<?php echo do_shortcode('[google-translator]'); ?>
					</div>
					<div id="right_contact_top">
						<span class="mm-right-contact-1">CONTACT US: (877) 593-6011</span>
						<span class="mm-right-contact-2">(M-F: 7-6 EST)</span>
					</div>
					<?php if (! is_user_logged_in() ) : ?>
					<a href="#" class="eModal-1">SIGN IN TO VIEW PRICING</a>
					<?php endif; ?>
				</div>
				<!-- #mm-right-contact -->
			</div>
			<!-- #form-row -->
		</nav>
	</div>

<?php if ( is_user_logged_in() ) :  $current_user = wp_get_current_user(); ?>
<div style="margin-top:-40px;" class="container">
	<div class="row">
		<div class="col-md-12" id="right_contact_bottom">
			<?php
			echo do_shortcode('[WooCommerceWooCartPro]');
			$dia_items = '<ul id="%1$s" class="%2$s sf-menu sf-js-enabled">%3$s</ul>';
			wp_nav_menu(
				array(
					'theme_location'  => 'myaccount',
					'items_wrap'      => $dia_items,
					'walker'          => new BENZ_Walker_Nav_Menu_MYACCOUNT
				)
			);
			?>
			<span class="welcome-user"> Welcome,
				<?php
				if (strlen($current_user->user_firstname) >= 2 ) {
					echo $current_user->user_firstname . '&nbsp;|&nbsp;';
				} else {
					echo $current_user->user_login . '&nbsp;|&nbsp;';
				}
				?>
			</span>
		</div>
	</div>
</div>
<?php endif; ?>


</header>
<!-- #masthead -->

<?php get_template_part('includes/newmenu'); ?>

<div style="width:100%;clear:both;float:left;height:15px;">&nbsp;</div>
