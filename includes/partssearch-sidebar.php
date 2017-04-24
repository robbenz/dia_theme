<?php

echo '<div style="width:100%; clear:both; float:left;">';
echo '<h4 style="color:#00426a; background-color:#ffad00; font-size:22px; border-radius:0.29em; text-align:center; padding: 4px; margin-top:90px;">Search Here</h4>';
echo '</div>';

echo '<div style="width:100%; clear:both; float:left;">';
get_template_part('includes/navbar-search');
echo '</div>';

echo '<div style="width:100%; clear:both; float:left;">';
echo '<h4 style="color:#00426a; background-color:#ffad00; font-size:22px; border-radius:0.29em; text-align:center; padding: 4px;">Cart</h4>';
echo '</div>';

echo '<div style="width:100%; clear:both; float:left;">';
echo wc_get_template( 'cart/mini-cart.php' );
echo '</div>';

?>
