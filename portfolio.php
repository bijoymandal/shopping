<?php 

/* Template name: Portfolio */


get_header(); 

echo woodmart_shortcode_portfolio( array( 'portfolio_location' => 'page' ) );

do_action( 'woodmart_after_portfolio_loop' );

get_footer(); ?>