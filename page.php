<?php get_template_part('includes/header'); ?>

<?php if ( is_home() || is_front_page() ): //  -- HOMEPAGE CHECK ?>

<?php get_template_part('includes/home-index'); ?>

    <?php elseif ( is_cart() || is_checkout() || is_account_page() ): //  -- WOO ENDPOINT - drop sidebar CHECK ?>
      <div class="container">
        <div class="row">
          <div id="content" role="main">
            <?php get_template_part('includes/loops/content', 'page'); ?>
          </div><!-- /#content -->


        <?php elseif ( is_page('86') ): //  -- WOO ENDPOINT - drop sidebar CHECK ?>
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
                <?php dynamic_sidebar('sidebar-widget-area'); ?>
              </div>
              <div class="col-xs-12 col-sm-8">
              <div id="content" role="main">
                <?php get_template_part('includes/loops/content', 'page'); ?>
              </div><!-- /#content -->
</div>


    <?php else: //  -- EVERY OTHER PAGE ?>
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div id="content" role="main">
            <?php get_template_part('includes/loops/content', 'page'); ?>
          </div><!-- /#content -->
        </div>

        <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
          <?php get_template_part('includes/sidebar'); ?>
        </div>
<?php endif; ?>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
