<?php

defined( 'ABSPATH' ) || exit;

get_header();

?>
<div class="w-[90%] lg:w-[1024px] xl:w-[1280px] mx-auto flex flex-col lg:flex-row mt-[90px] lg:mt-[200px] gap-4 mb-2">
	<aside class="w-full lg:w-[25%] bg-gray-50 rounded-2xl p-4 shadow-sm">
		
	</aside>
	<main class="w-full lg:w-[75%]">
	<?php
	do_action( 'woocommerce_before_main_content' );

	do_action( 'woocommerce_shop_loop_header' );

	if ( woocommerce_product_loop() ) {

		do_action( 'woocommerce_before_shop_loop' );

		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

				do_action( 'woocommerce_shop_loop' );

				wc_get_template_part( 'content', 'product' );
			}
		}

		woocommerce_product_loop_end();

		do_action( 'woocommerce_after_shop_loop' );
	} else {

		do_action( 'woocommerce_no_products_found' );
	}

	do_action( 'woocommerce_after_main_content' );

	//do_action( 'woocommerce_sidebar' );

	?>

	</main>
</div>
<?php
get_footer();
