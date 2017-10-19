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

.hospital .panel-default>.panel-heading {padding: 6px 12px; background-color: #636363; color: #fff; box-shadow: inset 0 0 0 0 #00426a;
	-webkit-transition: all ease 0.3s;
	-moz-transition: all ease 0.3s;
	transition: all ease 0.3s;}
.hospital .panel-default>.panel-heading:hover {color: #fff; box-shadow: inset 0 100px 0 0 #00426a; -webkit-transition: all ease 0.3s;
-moz-transition: all ease 0.3s;
transition: all ease 0.3s;}

.education .panel-default>.panel-heading {padding: 8px 14px; background-color: #636363; color: #fff; box-shadow: inset 0 0 0 0 #ffad00;
	-webkit-transition: all ease 0.3s;
	-moz-transition: all ease 0.3s;
	transition: all ease 0.3s;}
.education .panel-default>.panel-heading:hover {color: #fff; box-shadow: inset 0 100px 0 0 #ffad00; -webkit-transition: all ease 0.3s;
-moz-transition: all ease 0.3s;
transition: all ease 0.3s;}

</style>

<?php //get_template_part('includes/navbar-search');

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

sweet_dia_cats_menu($hospital_product_cats, "hospital",1 );
sweet_dia_cats_menu($nursing_product_cats, "education",100 );
sweet_dia_cats_menu($sls_product_cats, "sls",200 );
sweet_dia_cats_menu($ltc_product_cats, "long-term-care",300 );
sweet_dia_cats_menu($emsedu_product_cats, "emsedu",400 );
sweet_dia_cats_menu($emsfr_product_cats, "emsfr",500 );
sweet_dia_cats_menu($pt_product_cats, "physical-therapy",600 );
sweet_dia_cats_menu($vet_product_cats, "veterinary",700 );

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
						<tr>
							<td>
								<a href="#">hospital bed service</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">infusion pump service</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">component repair</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">exam table service</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">headwall installation</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">patient monitor repair</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">stretcher repair</a>
							</td>
						</tr>
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
						<tr>
							<td>
								<a href="#">VIEW ALL</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">alaris</a>
							</td>
						</tr>
						<tr>
								<td>
										<a href="#">baxter</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">hill-rom</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">invacare</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">hausted</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">hospira</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">medline</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">midmark</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">simlabsolutions</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">span america</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">stryker</a>
								</td>
						</tr>
						<tr>
								<td>
										<a href="#">zoll</a>
								</td>
						</tr>
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
						<tr>
							<td>
								<a href="#">contact</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">terms and conditions</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">shipping and returns</a>
							</td>
						</tr>
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
						<tr>
							<td>
								<a href="#">cart</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">account settings</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">logout</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- <div class="container"> -->
    <!-- <div class="row"> -->
<!-- <div class="col-sm-3 col-md-3">
  <div class="select-wrap">
    <select id="facility_select">
      <option value="" selected disabled>SHOP BY FACILITY</option>
      <option value="view-all">VIEW ALL CATEGORIES</option>
      <option value="hospital">hospital</option>
      <option value="education">education</option>
      <option value="long-term-care">three</option>
      <option value="four">four</option>
      <option value="five">five</option>
    </select>
  </div>

    <div class="panel-group hospital sidebar-replace" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">hospital beds</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                          <td>
                            <a href="#">VIEW ALL <?php echo $_single_cat; ?></a>
                          </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">hill-rom</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">stryker</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">invacare</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">medline</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">medical supplies</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">pharmacy</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">IV supplies</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">adhesives</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">gloves</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">refrigerators and freezers</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">compact</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">counter height</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">full size</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">vaccine</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">medical equipment</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">AEDs</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">anatomical models</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">diagnostic equipment</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">surgical</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group education sidebar-replace" id="accordion2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Anatomical Models</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion3" href="#collapse13">Physical Therapy</a>
                </h4>
            </div>
            <div id="collapse13" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/cpm-padding-kit/"><span>CPM Padding Kit</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/cushions-and-positioners/"><span>Cushions and Positioners</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/daily-living-aids/"><span>Daily Living Aids</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/exercise-aids/"><span>Exercise Aids</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/exercise-equipment/"><span>Exercise &amp; Mobility Equipment</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/exercise-machines/"><span>Exercise Machines</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/hand-therapy-tables/"><span>Hand Therapy Tables</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/hi-lo-tables/"><span>Hi-Lo Tables</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/hot-cold-therapy/"><span>Hot &amp; Cold Therapy</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/mat-platforms/"><span>Mat Platforms</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/mirrors/"><span>Mirrors</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/parallel-bars/"><span>Parallel Bars</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/pain-relief-first-aid/"><span>Pain Relief &amp; First Aid</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/rack-wagons-and-organizers/"><span>Racks, Wagons, and Organizers</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/recovery-aids/"><span>Recovery Aids</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/staircases/"><span>Staircases</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/stress-test-systems/"><span>Stress Test Systems</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/whirlpool-tables-and-chairs/"><span>Whirlpool Tables and Chairs</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/work-activity-tables/"><span>Work Activity Tables</span></a></td></tr>
                      <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/work-conditioning/"><span>Work Conditioning</span></a></td></tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
            </h4>
          </div>
          <div id="collapse16" class="panel-collapse collapse">
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td>
                    <a href="#">AEDs</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">anatomical models</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">diagnostic equipment</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">surgical</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </div>

    <div class="panel-group long-term-care sidebar-replace" id="accordion3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">crash carts</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">loaded emergency packs</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">item</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">sim meds</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">compact</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">counter height</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">full size</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">vaccine</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">infusion pumps</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">AEDs</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">anatomical models</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">diagnostic equipment</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">surgical</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div class="static-categories" id="">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent=".static-categories" href="#collapseNine">parts search</a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
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
                    <a data-toggle="collapse" data-parent=".static-categories" href="#collapseTen">service | repairs</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">hospital bed service</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">infusion pump service</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">component repair</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">exam table service</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">headwall installation</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">patient monitor repair</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">stretcher repair</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent=".static-categories" href="#collapseEleven">manufacturers</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">alaris</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">baxter</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">hill-rom</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">invacare</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">hospira</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">medline</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">midmark</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">simlabsolutions</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">span america</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">stryker</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">view all</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent=".static-categories" href="#collapse18">contact us</a>
                </h4>
            </div>
            <div id="collapse18" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                          <td>
                            <a href="#">contact</a>
                          </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">terms and conditions</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">shipping and returns</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent=".static-categories" href="#collapse17">my account</a>
                </h4>
            </div>
            <div id="collapse17" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="#">cart</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">account settings</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">logout</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!-- </div> -->
<!-- </div> -->
