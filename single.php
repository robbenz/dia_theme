<?php get_template_part('includes/header'); ?>

<div class="container blog">
  <div class="row">
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php dynamic_sidebar( 'blog_sidebar' ); ?>
    </div>


    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>



  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
