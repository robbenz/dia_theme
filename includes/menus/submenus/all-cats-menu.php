<?php
$dia_menu_product_cats = array();
$args = array(
	'taxonomy'     => 'product_cat',
	'orderby'      => 'name',
	'hierarchical' => 1,   // 1 for yes, 0 for no
	'hide_empty'   => 0
);
$all_categories = get_categories( $args );
foreach ($all_categories as $cat) {
  if ( $cat->category_parent == 0 ) array_push($dia_menu_product_cats, $cat->name );
}
$dia_menu_product_cats = array_diff( $dia_menu_product_cats,[ "On-Site Repairs &amp; Preventive Maintenance" ]); asort($dia_menu_product_cats);
$_x = 0;
?>

<div class="col-md-9 mve_cols" id="menu_all_main">
  <div class="row">
    <div class="col-md-12">
      <h3 style="background-color:#00426a;">Shop All Medical Equipment</h3>
    </div>
  </div>
  <div class="row">
    <?php
    foreach($dia_menu_product_cats as $category_name) :
      $grabcat = get_term_by('name', $category_name, 'product_cat');
      if ($_x == 0 || $_x == 9 || $_x == 18 || $_x == 27) :  ?>
      <div class="col-md-3">
        <ul>
          <a href="<?php echo $grabcat->slug; ?>">
            <h6><?php echo $category_name; ?></h6>
          </a>
        <?php elseif ($_x == 8 || $_x == 17 || $_x == 26 || $_x == 35) : ?>
          <a href="<?php echo $grabcat->slug; ?>">
            <h6><?php echo $category_name; ?></h6>
          </a>
        </ul>
      </div>
    <?php else: ?>
      <a href="<?php echo $grabcat->slug; ?>">
        <h6><?php echo $category_name; ?></h6>
      </a>
    <?php endif; ?>
    <?php $_x++; endforeach; ?>
  </div>
</div>
