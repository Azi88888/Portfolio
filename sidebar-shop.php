<?php
	$get_sidebar = !empty($_GET['sidebar']) ? sanitize_text_field( $_GET['sidebar'] ) : '';
	$shop_sidebar = $get_sidebar ? $get_sidebar : ot_get_option( 'shop_sidebar', 'no' );
?>
<div class="small-12 large-3 columns sidebar woo small-order-2<?php if ( $shop_sidebar == 'left' ) { echo ' large-order-1'; } ?>">
	<div class="thb-fixed">
		<?php

			##############################################################################
			# Display the shop sidebar
			##############################################################################

		?>
		<?php dynamic_sidebar( 'shop' ); ?>
	</div>
</div>
