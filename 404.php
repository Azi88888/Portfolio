<?php get_header(); ?>
<?php
$fourofour_page_content = ot_get_option( '404_page_content' );
if ( $fourofour_page_content ) {
	do_action( 'thb_page_content', $fourofour_page_content );
} else {
	?>
	<div class="page-404">
		<div>
			<h1><?php esc_html_e( '404 - Nothing found', 'werkstatt' ); ?></h1>
			<h4><strong><?php esc_html_e( "We are sorry, but the page you're looking for cannot be found.", 'werkstatt' ); ?></strong></h4>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn white"><span><?php esc_html_e( 'BACK TO HOME', 'werkstatt' ); ?></span></a>
		</div>
	</div>
	<?php
}
get_footer();
