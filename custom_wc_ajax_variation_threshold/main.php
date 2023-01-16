<?php
/*
Plugin Name: custom_wc_ajax_variation_threshold
*/

function custom_wc_ajax_variation_threshold( $qty, $product ) {
	return 10000;
}

add_filter( 'woocommerce_ajax_variation_threshold', 'custom_wc_ajax_variation_threshold', 10, 2 );
