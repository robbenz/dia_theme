<?php /* Template Name: Part Search */
 get_template_part('includes/header'); ?>

 <div class="container woocommerce landing_page">
  <div class="row">
    <img
    style="border:6px solid #00426a; margin-bottom:10px; max-width: 100%;"
    src="<?php echo site_url(); ?>/wp-content/imgs/homepage/parts-search-circuit-board_FINAL.png">
    <?php wc_print_notices(); ?>
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('includes/partssearch-sidebar'); ?>
    </div>

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <h2>Welcome to the Part Search</h2>
        <hr/>
        <?php get_template_part('includes/search-html'); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
