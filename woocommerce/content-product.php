<?php

defined( 'ABSPATH' ) || exit;

global $product;

$regular_price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
$currency = get_woocommerce_currency_symbol();

if(empty($product) || !$product->is_visible()){
    return;
}

$discount_percent = 0;
if( $product->is_on_sale() && $regular_price > 0){
    $discount_percent = round(($regular_price - $sale_price) / $regular_price * 100);
}

?>
<li <?php wc_product_class( '', $product ); ?>>
    <a href="<?php the_permalink(); ?>" class="block relative">
        <?php woocommerce_template_loop_product_thumbnail(); ?>

        <?php if($discount_percent > 0){ ?>
            <span class="absolute top-2 left-2 bg-[#e10a0a] text-white text-xs font-bold px-2 py-1 rounded-md shadow-md">
                -<?php echo $discount_percent; ?>%
            </span>
        <?php } ?>
    </a>
    <div class="p-2 text-center space-y-1">
        <h2 class="text-gray-800 font-semibold text-sm md:text-base line-clamp-2 h-10 group-hover:text-blue-600 transition">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <div class="mt-2">
            <?php if($product->is_on_sale()){ ?>
                <div class="flex items-center gap-2 flex-col lg:flex-row justify-center">
                    <span class="line-through text-gray-400 text-sm">
                        <?php echo number_format($regular_price); ?>
                        <span class="text-xs"><?php echo $currency; ?></span>
                    </span>
                    <span class="text-[#e10a0a] text-lg font-semibold">
                    
                        <?php echo number_format($sale_price); ?>
                        <span class="text-xs text-[#e10a0a] mr-[2px]"><?php echo $currency; ?></span>
                    </span>
                </div>
            <?php } else { ?>

                <span class="text-[#e10a0a] text-lg font-semibold">
                    <?php echo number_format($regular_price); ?>
                    <span class="text-sm text-[#e10a0a] mr-[2px]"><?php echo $currency; ?></span>
                </span>
            <?php } ?>
        </div>
        <div class="mt-3">
                <?php woocommerce_template_loop_add_to_cart(array(
                    'class' => 'bg-[#e10a0a] hover:bg-[#e10a0a]/80 text-white px-4 py-2 rounded-lg text-xs lg:text-base font-medium transition w-full block ',
                )); 
                ?>
        </div>
    </div>

</li>