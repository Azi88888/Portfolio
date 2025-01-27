<?php
/*
Template Name: One Page
*/

$disable_scroll = get_post_meta( get_the_ID(), 'disable_scroll', true );
get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		if ( post_password_required() ) {
			get_template_part( 'inc/templates/password-protected' );
		} else {
			?>
			<div id="thb_fullscreen_rows" data-disable-scroll="<?php echo esc_attr( $disable_scroll ); ?>">
				<?php the_content(); ?>
			</div>
			<?php
		}
	endwhile;
endif;

get_footer();
