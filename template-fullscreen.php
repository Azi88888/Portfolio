<?php
/*
Template Name: Fullscreen
*/
get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		if ( post_password_required() ) {
			get_template_part( 'inc/templates/password-protected' );
		} else {
			$thb_id    = get_the_ID();
			$fs_layout = get_post_meta( $thb_id, 'fs_layout', true ) ? get_post_meta( $thb_id, 'fs_layout', true ) : 'style1';
			get_template_part( 'inc/templates/fullscreen/' . $fs_layout );
		}
	endwhile;
endif;

get_footer();
