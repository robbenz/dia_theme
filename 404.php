<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('includes/sidebar'); ?>
    </div>
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <div id="lost-pass-header-orange">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'bst'); ?> 404</h1></div>
          <p class="center-text"><?php _e('The page you are looking for is no longer here, or never existed in the first place. <br /> You can try using our Part Search below, or shop equipment <a href="/medical-equipment/">here</a>', 'bst'); ?></p>
        </div><!-- /#content -->
        <?php /*
        $ps_echo = true ;
        if ( function_exists( 'woo_predictive_search_widget' ) ) {
          woo_predictive_search_widget( $ps_echo );
        } else {
          get_template_part('includes/navbar-search');
        }
      */  ?>
      </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
