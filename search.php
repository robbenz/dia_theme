<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">

    <img style="border:6px solid #00426a; max-width: 100%;" src="https://diamedicalusa.com/wp-content/imgs/homepage/parts-search-circuit-board_FINAL.png">

    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/partssearch-sidebar'); ?>
    </div>

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <h2><?php _e('Search Results for', 'bst'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
        <hr/>
				<?php get_template_part('includes/loops/content', 'search'); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
