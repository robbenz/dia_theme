<?php
$dia_menu_product_cats = array("Casters");
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
?>

<div class="col-md-9 mve_cols" id="menu_all_main">
  <div class="row">
    <div class="col-md-12">
			<a href="<?php echo site_url(); ?>/medical-equipment/">
				<h3 style="background-color:#00426a;">Shop All Medical Equipment</h3>
			</a>
    </div>
  </div>
  <div class="row">
    <?php
    $dia_4menu_product_cats = partition($dia_menu_product_cats, 4);
    foreach ($dia_4menu_product_cats as $category_list) : ?>
    <div class="col-md-3">
      <ul>
        <?php
        foreach ($category_list as $category_name) :
          $grabcat = get_term_by('name', $category_name, 'product_cat');
					if ($category_name == "Casters") : ?>
          <a href="<?php echo site_url();?>/?s=casters&amp;post_type=product&amp;product_cat=casters">
            <h6>Casters</h6>
          </a>
				<?php elseif ($category_name == "AEDs, Defibrillators &amp; CPR Management"): ?>
          <a href="<?php echo site_url() . '/product-category/' . $grabcat->slug; ?>">
            <h6>AEDs &amp; Defibrillators</h6>
          </a>
				<?php else: ?>
        <a href="<?php echo site_url() . '/product-category/' . $grabcat->slug; ?>">
          <h6><?php echo $category_name; ?></h6>
        </a>
        <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
</div>
</div>
