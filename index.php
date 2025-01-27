<?php
get_header();

$blog_header = ot_get_option( 'blog_header', 'style1' );
$blog_style  = ot_get_option( 'blog_style', 'style3' );
?>
<div class="blog-container <?php echo esc_attr( $blog_style ); ?> <?php
if ( 'style2' !== $blog_header ) {
	?>
	page-padding<?php } ?>">
	<?php
	if ( 'none' !== $blog_header ) {
		get_template_part( 'inc/templates/blog/blog-header-' . $blog_header );
	}
	get_template_part( 'inc/templates/blog/' . $blog_style );
	?>
</div>
<?php
get_footer();
