<?php get_template_part('includes/header'); ?>

<div class="container blog">
  <div class="row">

    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php dynamic_sidebar( 'blog_sidebar' ); ?>
    </div>

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <h1><?php echo single_cat_title(); ?> Articles</h1>
        <hr>
        <?php get_template_part('includes/loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>



  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
