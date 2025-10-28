<div class="p-5 mb-6">
    <form method="get" id="product-filters-form" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">دسته بندی</label>
            <?php
            wp_dropdown_categories(array(
                'taxonomy' => 'product_cat',
                'show_option_all' => 'همه دسته‌ها',
                'name' => 'product_cat' ,
                'class' => 'w-full border-gray-300 rounded-lg p-2 text-gray-700 focus:ring-2 focus:ring-blue-500',
                'selected' => get_query_var('product_cat'),
                'value_field' => 'slug'
            ));
            ?>

        </div>

        <hr class="border-gray-300 my-4">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">محدوده قیمت</label>
            <div class="flex items-center gap-2">
                <input type="number" name="min_price" placeholder="حداقل" value="<?php echo $_GET['min_price']??''; ?>" class="w-1/2 border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                <input type="number" name="max_price" placeholder="حداکثر" value="<?php echo $_GET['max_price']??''; ?>" class="w-1/2 border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <hr class="border-gray-300 my-4">

        <div class="flex justify-between items-center pt-3">
            <button type="submit" class="bg-[#e10a0a] cursor-pointer hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">اعمال فیلترها</button>

            <a href="<?php echo get_post_type_archive_link('product'); ?>" class="text-gray-500 hover:text-gray-700 text-sm">ریست</a>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded' , function(){
        const form = document.getElementById("product-filters-form");
        form.addEventListener('submit' , function(e){
            const min_price = form.querySelector("[name='min_price'");
            const max_price = form.querySelector("[name='max_price'");

            if(!min_price.value || Number(min_price.value) <= 0 ){
                min_price.removeAttribute('name');
            }
            if(!max_price.value || Number(max_price.value) <= 0 ){
                max_price.removeAttribute('name');
            }
        });
    });
</script>