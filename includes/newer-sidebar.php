<style>
.panel-group, .panel, .panel-default, .panel-heading, .panel-title {border-radius: 0;}
.panel-group { margin: 0; }
.panel-body { padding:0px; }
.panel-body table tr td { padding: 2px 0 2px 15px;}
.panel-body .table {margin-bottom: 0px;}
.static-categories {margin-bottom: 6px; border-top: 1.5px solid #00426a; padding-top:1.25em;}
.static-categories .panel-heading h4.panel-title a {text-transform:uppercase;  color: #fff;}
.static-categories .panel>.panel-heading {background-color: #00426a; padding: 0;}
.static-categories .panel {margin: 5px 0 0 0;}
.part-search-panel table tr td {padding: 0;}
.part-search-panel .navbar-form {margin: 20px 0;}
.panel-body table td a {font-size: 12.5px;text-transform: capitalize;color: #00426a;font-family: 'Open Sans', sans-serif}
.panel-heading h4.panel-title a {font-size: 13.5px;padding: 7px 12px;color: #00426a;text-transform: capitalize;font-family: 'Open Sans', sans-serif;font-weight: 600;}
.table td:hover {background-color: #f1f1f1;}
h4.panel-title a:hover, .panel-heading:hover {color: #fff;}
.panel-group .panel-default>.panel-heading {padding: 0px; background-color: #fff; color: #222; -webkit-box-shadow: inset 0 0 0 0 #00426a; box-shadow: inset 0 0 0 0 #00426a; /*-webkit-transition: all ease 0.3s; transition: all ease 0.3s;*/}
.panel-group .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 #00426a; box-shadow: inset 0 100px 0 0 #00426a; }
.hospital .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 #00426a; box-shadow: inset 0 100px 0 0 #00426a;}
.education .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(39, 116, 174); box-shadow: inset 0 100px 0 0 rgb(39, 116, 174);}
.sls .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 #ffad00; box-shadow: inset 0 100px 0 0 #ffad00; }
.long-term-care .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(114, 208, 244); box-shadow: inset 0 100px 0 0 rgb(114, 208, 244);}
.emsedu .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(214, 0, 28); box-shadow: inset 0 100px 0 0 rgb(214, 0, 28);}
.emsfr .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(214, 0, 28); box-shadow: inset 0 100px 0 0 rgb(214, 0, 28);}
.physical-therapy .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(158, 113, 162); box-shadow: inset 0 100px 0 0 rgb(158, 113, 162);}
.veterinary .panel-default>.panel-heading:hover {color: #fff; -webkit-box-shadow: inset 0 100px 0 0 rgb(65, 132, 141); box-shadow: inset 0 100px 0 0 rgb(65, 132, 141);}
#collapseStatic1 div.form-group {width:76%;}
#collapseStatic1 div.form-group input {width:100%;}
.rotate,.rotate-medqpt{color:#fff; float: right;	font-size: 12px; -moz-transition: -moz-transform 0.35s cubic-bezier(0.680, -0.550, 0.265, 1.550); -webkit-transition: -webkit-transform 0.35s cubic-bezier(0.680, -0.550, 0.265, 1.550);transition: transform 0.35s cubic-bezier(0.680, -0.550, 0.265, 1.550); -moz-transform:rotate(90deg);-webkit-transform:rotate(90deg);transform:rotate(90deg);}
.rotate-medqpt {font-size:15px;}
.rotate.down, .rotate-medqpt.down{-moz-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);}
a[data-toggle=collapse] {width: 100%; height: 100%; display: block;}
.table>tbody>tr>td {border: none;}
.panel-default>.panel-heading+.panel-collapse>.panel-body {border: none;}
.select-wrap { padding-bottom: 1.25em; border-bottom: 1.5px solid #00426a; margin-bottom:0.25em;}
.panel-heading h4.panel-title a.arrow-toggle-medqpt {background-color:#00426a;border:0;color:#fff;padding: 13px 12px;text-transform:uppercase;font-size:14.5px;}
</style>

<?php include_menu_arrays(); ?>

<?php

function sweet_dia_cats_menu($which_array = array(), $which_class, $which_counter) {
	$_x = $which_counter;
	foreach ($which_array as $single_cat) :
		$_x ++;
		$grabID 					= get_term_by('name', $single_cat, 'product_cat');
		$product_cat_ID 	= $grabID->term_id;
		$parent_link			= get_term_link( $product_cat_ID, 'product_cat' );

		$args = array(
			'hierarchical'		 	=> 1,
			'show_option_none' 	=> '',
			'hide_empty'			 	=> 0,
			'parent' 						=> $product_cat_ID,
			'taxonomy' 					=> 'product_cat'
		);
		$subcats = get_categories($args);

		$_in = '';
		if ( is_product_category($grabID->slug) ) $_in = ' in';
		foreach ($subcats as $maybecat) {
			if ( is_product_category($maybecat->slug) ) $_in = ' in';
		}

	?>

		<div class="panel-group <?php echo $which_class; ?> sidebar-replace" id="accordion<?php echo $_x; ?>">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h4 class="panel-title">
			      <a class="arrow-toggle" data-toggle="collapse" data-parent=".sidebar-replace" href="#collapse<?php echo $_x; ?>"><?php echo $single_cat; ?>
						</a>
			    </h4>
			  </div>
				<div id="collapse<?php echo $_x; ?>" class="panel-collapse collapse<?php echo $_in; ?>">
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>
									<a style="font-weight:700; font-size: 13px;" href="<?php echo $parent_link; ?>">VIEW ALL</a>
								</td>
							</tr>
							<?php if (count($subcats) >= 1 ) : foreach ($subcats as $sc) : $link = get_term_link( $sc->slug, $sc->taxonomy ); ?>
	                <tr>
										<td style="padding-left: 20px;" >
	                    <a style="<?php if (is_product_category($sc->slug) ) echo 'font-weight:700'; ?>" href="<?php echo $link; ?>"><?php echo $sc->name; ?></a>
	                	</td>
	                </tr>
	            <?php
						endforeach;
					else:
						$find_products = array(
							'post_type' 	=> 'product',
							'product_cat' => $grabID->slug,
							'orderby' 		=> 'title',
							'order' 			=> 'ASC'
						);
						$loop = new WP_Query( $find_products );
						while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
								<tr>
									<td style="padding-left: 20px;" >
										<a href="<?php echo $loop->post->guid; ?>"><?php echo $loop->post->post_title ; ?></a>
									</td>
								</tr>
							<?php endwhile; endif; ?>
						</table>
					</div> <!-- .panel-body -->
				</div><!-- .panel-collapse .collapse -->
			</div><!-- .panel .panel-default -->
		</div><!-- #accordion$_x .sidebar-replace -->

	<?php endforeach;
} // end sweet_dia_cats_menu();  ?>

<div class="col-sm-3 col-md-3">

	<div class="panel panel-default">
		<div style="padding: 0;" class="panel-heading">
				<h4 class="panel-title">
						<a class="arrow-toggle-medqpt" data-toggle="collapse" href="#collapseStatic00">Medical Equipment
							<div class="fa fa-chevron-up rotate-medqpt"></div>
						</a>

				</h4>
		</div>

		<div id="collapseStatic00" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="select-wrap">
					<h5 style="font-family: 'Open Sans', sans-serif">Filter By Your Facility Type</h5>
			    <select id="facility_select">
			      <option value="view-all">VIEW ALL CATEGORIES</option>
			      <option value="hospital">Hospitals</option>
						<option value="education">Nursing Schools &amp; Simulation</option>
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

			</div><!-- .panel-body -->
		</div><!-- #collapseStatic00 .panel-collapse .collapse .in -->
	</div><!-- .panel .panel-default -->


	<div class="static-categories">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="arrow-toggle" data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic1">parts search
						<div class="fa fa-chevron-up rotate"></div>
					</a>
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
							<a class="arrow-toggle" data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic2">service &amp; repairs
								<div class="fa fa-chevron-up rotate"></div>
							</a>
					</h4>
			</div>
			<div id="collapseStatic2" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a style="font-weight: 700;" href="<?php echo site_url(); ?>/site-repairs-preventive-maintenance/">VIEW ALL</a></td></tr>
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
					<a class="arrow-toggle" data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic3">manufacturers
					<div class="fa fa-chevron-up rotate"></div>
				</a>
				</h4>
			</div>
			<div id="collapseStatic3" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a style="font-weight: 700;" href="<?php echo site_url(); ?>/manufacturers/">VIEW ALL</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=alaris&amp;post_type=product">alaris</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=baxter&amp;post_type=product">baxter</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=hausted&amp;post_type=product">hausted</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/product-category/hill-rom-parts-online/">hill-rom</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=hospira&amp;post_type=product">hospira</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=invacare&amp;post_type=product">invacare</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=medline&amp;post_type=product">medline</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=midmark&amp;post_type=product">midmark</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/simlabsolutions/">SimLabSolutions</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=span+america&amp;post_type=product">span america</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=stryker&amp;post_type=product">stryker</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/?s=zoll&amp;post_type=product">zoll</a></td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="arrow-toggle" data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic4">contact us
						<div class="fa fa-chevron-up rotate"></div>
					</a>
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
					<a class="arrow-toggle" data-toggle="collapse" data-parent=".static-categories" href="#collapseStatic5">my account
					<div class="fa fa-chevron-up rotate"></div>
				</a>
				</h4>
			</div>
			<div style="border-bottom: 1.5px solid #00426a;padding-bottom:8px; margin-bottom:8px;" id="collapseStatic5" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table">
						<tr><td><a href="<?php echo site_url(); ?>/cart/">cart</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/my-account/">account settings</a></td></tr>
						<tr><td><a href="<?php echo site_url(); ?>/wp-login.php?action=logout">logout</a></td></tr>
					</table>
				</div>
			</div>
		</div>
	</div><!-- .static-categories -->
</div><!-- .col-sm-3 -->
