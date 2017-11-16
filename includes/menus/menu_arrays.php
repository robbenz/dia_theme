<?php

$dia_product_cats 			= array();
$hospital_product_cats 	= array();
$nursing_product_cats 	= array();
$sls_product_cats 			= array();
$ltc_product_cats 			= array();
$emsedu_product_cats 		= array();
$emsfr_product_cats 		= array();
$pt_product_cats			  = array();
$vet_product_cats 			= array();

$args = array(
	'taxonomy'     => 'product_cat',
	'orderby'      => 'name',
	'show_count'   => 0,   // 1 for yes, 0 for no
	'pad_counts'   => 0,   // 1 for yes, 0 for no
	'hierarchical' => 1,   // 1 for yes, 0 for no
	'hide_empty'   => 0
);
$all_categories = get_categories( $args );

foreach ($all_categories as $cat) :

	$myID = $cat->cat_ID;

	$_hospital_cbx 	= get_option("newside_hospital_cbx_$myID");
	$_nursing_cbx  	= get_option("newside_nursing_cbx_$myID");
	$_sls_cbx      	= get_option("newside_sls_cbx_$myID");
	$_ltc_cbx     	= get_option("newside_ltc_cbx_$myID");
	$_emsedu_cbx  	= get_option("newside_emsedu_cbx_$myID");
	$_emsfr_cbx    	= get_option("newside_emsfr_cbx_$myID");
	$_pt_cbx       	= get_option("newside_pt_cbx_$myID");
	$_vet_cbx      	= get_option("newside_vet_cbx_$myID");

	if ( $cat->category_parent == 0 ) array_push($dia_product_cats, $cat->name );

	if ( $_hospital_cbx 	== 'yes' && $cat->category_parent == 0 ) array_push($hospital_product_cats, $cat->name );
	if ( $_nursing_cbx 		== 'yes' && $cat->category_parent == 0 ) array_push($nursing_product_cats, $cat->name );
	if ( $_sls_cbx 				== 'yes' && $cat->category_parent == 0 ) array_push($sls_product_cats, $cat->name );
	if ( $_ltc_cbx 				== 'yes' && $cat->category_parent == 0 ) array_push($ltc_product_cats, $cat->name );
	if ( $_emsedu_cbx 		== 'yes' && $cat->category_parent == 0 ) array_push($emsedu_product_cats, $cat->name );
	if ( $_emsfr_cbx 			== 'yes' && $cat->category_parent == 0 ) array_push($emsfr_product_cats, $cat->name );
	if ( $_pt_cbx 				== 'yes' && $cat->category_parent == 0 ) array_push($pt_product_cats, $cat->name );
	if ( $_vet_cbx 				== 'yes' && $cat->category_parent == 0 ) array_push($vet_product_cats, $cat->name );

endforeach;

$dia_product_cats 			= array_diff( $dia_product_cats, 			["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($dia_product_cats);
$hospital_product_cats 	= array_diff( $hospital_product_cats, ["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($hospital_product_cats);
$nursing_product_cats 	= array_diff( $nursing_product_cats, 	["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($nursing_product_cats);
$sls_product_cats 			= array_diff( $sls_product_cats, 			["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($sls_product_cats);
$ltc_product_cats 			= array_diff( $ltc_product_cats, 			["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($ltc_product_cats);
$emsedu_product_cats 		= array_diff( $emsedu_product_cats, 	["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($emsedu_product_cats);
$emsfr_product_cats 		= array_diff( $emsfr_product_cats, 		["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($emsfr_product_cats);
$pt_product_cats 				= array_diff( $pt_product_cats, 			["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($pt_product_cats);
$vet_product_cats 			= array_diff( $vet_product_cats, 			["Parts", "On-Site Repairs &amp; Preventive Maintenance" ]); asort($vet_product_cats);
