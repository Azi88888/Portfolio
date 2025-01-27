<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		$article_style = ot_get_option( 'article_style', 'style1' );
		if ( 'on' === get_post_meta( get_the_ID(), 'article_style_override', true ) ) {
			$article_style = get_post_meta( get_the_ID(), 'article_style', true );
		}
		get_template_part( 'inc/templates/blogbit/' . $article_style );

		if ( comments_open() || get_comments_number() ) {
			comments_template( '', true );
		}
	endwhile;
endif;

do_action( 'thb_portfolio_nav' );

get_footer();
