<style>
.glyphicon { margin-right:10px; }
.panel-group { margin: 6px 0; }
.panel-body { padding:0px; }
.panel-body table tr td { padding: 4px 0 4px 16px;}
.panel-body table tr td+td {padding: 4px 0 4px 24px;}
.panel-body .table {margin-bottom: 0px;}
.static-categories {margin-bottom: 6px;}
.static-categories .panel {margin-bottom:0; border-radius: 4px;}
.static-categories .panel>.panel-heading {background-color: #00426a;}
.static-categories .panel+.panel{margin-top:5px;}
.static-categories .panel-heading{border-bottom:0;}
.static-categories .panel-heading+.panel-collapse>.list-group,.static-categories .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}
.static-categories .panel-footer{border-top:0}
.static-categories .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}
.part-search-panel table tr td {padding: 0;}
.part-search-panel .navbar-form {margin: 20px 0;}
td a {font-size: 13.5px; text-transform: capitalize;}
.panel-heading h4.panel-title a {font-size: 15px; color: #f1f1f1; text-transform: uppercase;}
.table td:hover {background-color: #f1f1f1;}
h4.panel-title:hover {color: #fff;}
.select-wrap {padding: 20px; background-color: #e9e9e9; border: 2px solid #f1f1f1; border-radius: 4px;}
.panel-group .panel-default>.panel-heading {padding: 6px 12px; background-color: #636363; color: #fff; -webkit-box-shadow: inset 0 0 0 0 #00426a; box-shadow: inset 0 0 0 0 #00426a; -webkit-transition: all ease 0.3s; transition: all ease 0.3s;}
.panel-group .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 #00426a; box-shadow: inset 0 100px 0 0 #00426a; -webkit-transition: all ease 0.3s; transition: all ease 0.3s;}
.hospital .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 #00426a;box-shadow: inset 0 0 0 0 #00426a;}
.hospital .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 #00426a; box-shadow: inset 0 100px 0 0 #00426a;}
.education .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 rgb(39, 116, 174);box-shadow: inset 0 0 0 0 rgb(39, 116, 174);}
.education .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(39, 116, 174); box-shadow: inset 0 100px 0 0 rgb(39, 116, 174);}
.sls .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 #ffad00;box-shadow: inset 0 0 0 0 #ffad00;}
.sls .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 #ffad00; box-shadow: inset 0 100px 0 0 #ffad00;}
.long-term-care .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 rgb(114, 208, 244);box-shadow: inset 0 0 0 0 rgb(114, 208, 244);}
.long-term-care .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(114, 208, 244); box-shadow: inset 0 100px 0 0 rgb(114, 208, 244);}
.emsedu .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 rgb(214, 0, 28);box-shadow: inset 0 0 0 0 rgb(214, 0, 28);}
.emsedu .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(214, 0, 28); box-shadow: inset 0 100px 0 0 rgb(214, 0, 28);}
.emsfr .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 rgb(214, 0, 28);box-shadow: inset 0 0 0 0 rgb(214, 0, 28);}
.emsfr .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(214, 0, 28); box-shadow: inset 0 100px 0 0 rgb(214, 0, 28);}
.physical-therapy .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 rgb(158, 113, 162);box-shadow: inset 0 0 0 0 rgb(158, 113, 162);}
.physical-therapy .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(158, 113, 162); box-shadow: inset 0 100px 0 0 rgb(158, 113, 162);}
.veterinary .panel-default>.panel-heading {-webkit-box-shadow: inset 0 0 0 0 rgb(65, 132, 141);box-shadow: inset 0 0 0 0 rgb(65, 132, 141);}
.veterinary .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(65, 132, 141); box-shadow: inset 0 100px 0 0 rgb(65, 132, 141);}
#collapseStatic1 div.form-group {width:76%;}
#collapseStatic1 div.form-group input {width:100%;}
</style>

<?php

$dia_product_cats = array();
$hospital_product_cats = array();
$nursing_product_cats = array();
$sls_product_cats = array();
$ltc_product_cats = array();
$emsedu_product_cats = array();
$emsfr_product_cats = array();
$pt_product_cats = array();
$vet_product_cats = array();

$args = array(
	'taxonomy'     => 'product_cat',
	'orderby'      => 'name',
	'show_count'   => 0,   // 1 for yes, 0 for no
	'pad_counts'   => 0,   // 1 for yes, 0 for no
	'hierarchical' => 1,   // 1 for yes, 0 for no
	'title_li'     => '',
	'hide_empty'   => 0
);
$all_categories = get_categories( $args );

foreach ($all_categories as $cat) {

	$myID = $cat->cat_ID;

	$_hospital_cbx = get_option("newside_hospital_cbx_$myID");
	$_nursing_cbx = get_option("newside_nursing_cbx_$myID");
	$_sls_cbx = get_option("newside_sls_cbx_$myID");
	$_ltc_cbx = get_option("newside_ltc_cbx_$myID");
	$_emsedu_cbx = get_option("newside_emsedu_cbx_$myID");
	$_emsfr_cbx = get_option("newside_emsfr_cbx_$myID");
	$_pt_cbx = get_option("newside_pt_cbx_$myID");
	$_vet_cbx = get_option("newside_vet_cbx_$myID");

	if ( $cat->category_parent == 0 ) { array_push($dia_product_cats, $cat->name ); }
	if ( $_hospital_cbx == 'yes' ) { array_push($hospital_product_cats, $cat->name ); }
	if ( $_nursing_cbx == 'yes' ) { array_push($nursing_product_cats, $cat->name ); }
	if ( $_sls_cbx == 'yes' ) { array_push($sls_product_cats, $cat->name ); }
	if ( $_ltc_cbx == 'yes' ) { array_push($ltc_product_cats, $cat->name ); }
	if ( $_emsedu_cbx == 'yes' ) { array_push($emsedu_product_cats, $cat->name ); }
	if ( $_emsfr_cbx == 'yes' ) { array_push($emsfr_product_cats, $cat->name ); }
	if ( $_pt_cbx == 'yes' ) { array_push($pt_product_cats, $cat->name ); }
	if ( $_vet_cbx == 'yes' ) { array_push($vet_product_cats, $cat->name ); }

}

asort($dia_product_cats);
asort($hospital_product_cats);
asort($nursing_product_cats);
asort($sls_product_cats);
asort($ltc_product_cats);
asort($emsedu_product_cats);
asort($emsfr_product_cats);
asort($pt_product_cats);
asort($vet_product_cats);


function sweet_dia_cats_menu($which_array = array(), $which_class, $which_counter) {
	$_x = $which_counter;
	foreach ($which_array as $single_cat) : $_x ++;
		$grabID = get_term_by('name', $single_cat, 'product_cat');
			 $product_cat_ID = $grabID->term_id;
			 $parent_link = get_term_link( $product_cat_ID, 'product_cat' );
			 $args = array(
					 'hierarchical' => 1,
					 'show_option_none' => '',
					 'hide_empty' => 0,
					 'parent' => $product_cat_ID,
					 'taxonomy' => 'product_cat'
		);
		$subcats = get_categories($args);

	?>
		<div class="panel-group <?php echo $which_class; ?> sidebar-replace" id="accordion<?php echo $_x; ?>">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h4 class="panel-title">
			      <a data-toggle="collapse" data-parent=".sidebar-replace" href="#collapse<?php echo $_x; ?>"><?php echo $single_cat; ?></a>
			    </h4>
			  </div>
				<div id="collapse<?php echo $_x; ?>" class="panel-collapse collapse">
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>
									<a style="font-weight:700; font-size:1.1em;" href="<?php echo $parent_link; ?>">VIEW ALL</a>
								</td>
							</tr>
							<?php foreach ($subcats as $sc) :
	              $link = get_term_link( $sc->slug, $sc->taxonomy ); ?>
	                <tr>
	                  <td style="padding-left: 20px;" >
	                    <a href="<?php echo $link; ?>"><?php echo $sc->name; ?></a>
	                	</td>
	                </tr>
	            <?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>

	<?php
endforeach;

} // sweet_dia_cats_menu

?>

<div class="col-sm-3 col-md-3">
  <div class="select-wrap">
    <select id="facility_select">
      <option value="" selected disabled>FILTER BY FACILITY</option>
      <option value="view-all">VIEW ALL CATEGORIES</option>
      <option value="hospital">Hospitals</option>
			<option value="education">Nursing Schools</option>
      <option value="sls">SimLabSolutions.com</option>
      <option value="long-term-care">Long Term Care</option>
      <option value="emsedu">EMS Education</option>
      <option value="emsfr">EMS Field Ready</option>
      <option value="physical-therapy">Physical Therapy</option>
			<option value="veterinary">Veterinary</option>
    </select>
  </div>

<?php

sweet_dia_cats_menu($dia_product_cats, "view-all", 800);
sweet_dia_cats_menu($hospital_product_cats, "hospital", 1 );
sweet_dia_cats_menu($nursing_product_cats, "education", 100 );
sweet_dia_cats_menu($sls_product_cats, "sls", 200 );
sweet_dia_cats_menu($ltc_product_cats, "long-term-care", 300 );
sweet_dia_cats_menu($emsedu_product_cats, "emsedu", 400 );
sweet_dia_cats_menu($emsfr_product_cats, "emsfr", 500 );
sweet_dia_cats_menu($pt_product_cats, "physical-therapy", 600 );
sweet_dia_cats_menu($vet_product_cats, "veterinary", 700 );

 ?>



	<hr>
	<div class="static-categories" id="">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic1">parts search</a>
				</h4>
			</div>
			<div id="collapseStatic1" class="panel-collapse collapse">
				<div class="panel-body part-search-panel">
					<table class="table">
						<tr>
							<td>
								<?php get_template_part('includes/navbar-search'); ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
					<h4 class="panel-title">
							<a data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic2">service | repairs</a>
					</h4>
			</div>
			<div id="collapseStatic2" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/hospital-bed-repair/">hospital bed service</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/product-category/infusion-pump-service-repairs/">infusion pump service</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/product-category/components-service-repairs/">component repair</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/exam-tables-repairs/">exam table service</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/headwalls-repairs/">headwall installation</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/vital-signs-monitors-repairs/">patient monitor repair</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/cots-stretchers/">stretcher repair</a></td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic3">manufacturers</a>
				</h4>
			</div>
			<div id="collapseStatic3" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a href="<?php echo site_url(); ?>/manufacturers/">VIEW ALL</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=alaris&post_type=product">alaris</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=baxter&post_type=product">baxter</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=hausted&post_type=product">hausted</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">hill-rom</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=hospira&post_type=product">hospira</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=invacare&post_type=product">invacare</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=medline&post_type=product">medline</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=midmark&post_type=product">midmark</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/simlabsolutions/">SimLabSolutions</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=span+america&post_type=product">span america</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=stryker&post_type=product">stryker</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=zoll&post_type=product">zoll</a></td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic4">contact us</a>
				</h4>
			</div>
			<div id="collapseStatic4" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a href="<?php echo site_url(); ?>/contact-us/">contact</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/terms-conditions">terms and conditions</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/shipping-returns">shipping and returns</a></td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic5">my account</a>
				</h4>
			</div>
			<div id="collapseStatic5" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a href="<?php echo site_url(); ?>/cart/">cart</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/my-account/">account settings</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/wp-login.php?action=logout">logout</a></td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
