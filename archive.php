<?php
get_header();
?>
<h1 class="pt-[20px] mt-[124px] lg:mt-[200px] max-w-[1250px] mx-auto px-[15px] lg:px-0 text-[24px] font-semibold"><?php echo get_queried_object()->name;  ?></h1>
<?php
if(have_posts()){
    ?>
    <section class="max-w-[1250px] mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8 px-[15px] lg:px-0">
    <?php
    while(have_posts()){
        the_post();
        $post_id = get_the_ID();
        $post_thumbnail = get_the_post_thumbnail_url($post_id);
        $post_title = get_the_title();
        $post_date = get_the_date('Y M d' , $post_id);
        $author_id = get_post_field('post_author' , $post_id );
        $author_name = get_the_author_meta('display_name' , $author_id);
        $post_link = get_permalink();
        ?>
        <div class="flex flex-col gap-4">
            <div class="flex relative">
            <div>
                <?php if($post_thumbnail){ ?>
                    <img class="w-full h-full rounded-[4px]" src="<?php echo $post_thumbnail; ?>" alt="">
                <?php } ?>
                

                <?php
                $terms = get_the_terms($post_id , "category");
                if(!empty($terms)){
                    ?>
                    <div class="absolute bottom-[15px] right-[20px] z-50 text-white flex gap-2">
                    <?php
                    foreach($terms as $term){
                        ?>
                        <a href="<?php echo get_term_link($term); ?>" class="bg-[#fc4a00] px-[10px] rounded-[4px] text-[11px] font-bold">
                            <?php echo $term->name; ?>
                        </a>
                        <?php
                    }
                    ?>
                    </div>
                    <?php
                }
                ?>
                
                    
            </div>
            </div>
            <div class="flex flex-col gap-2">
                <a class="text-[18px] font-semibold text-black hover:text-red-600" href="<?php echo $post_link; ?>">
                    <?php echo $post_title; ?>
                </a>
                <div class="flex items-center gap-2">
                    <img class="w-[46px] h-[46px] rounded-full" src="<?php echo THEME_DIR; ?>/src/img/d14e485e223f3dc7b7711e22c0a040d8.png" alt="">
                    <p class="text-[13px] font-normal text-[#9b9b9b]"><?php echo $author_name; ?></p>
                    <div class="flex items-center gap-1">
                    <svg class="w-[14px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 237.54 237.54"><path fill="#999999" d="M118.77 0c32.8 0 62.49 13.29 83.98 34.79 21.49 21.49 34.79 51.19 34.79 83.98s-13.29 62.49-34.79 83.98c-21.49 21.49-51.19 34.79-83.98 34.79-32.8 0-62.49-13.29-83.98-34.79C13.29 181.26 0 151.56 0 118.77s13.29-62.49 34.79-83.98C56.28 13.29 85.97 0 118.77 0zm-9.71 60.2c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5v60l45.14 26.76c3.08 1.82 4.11 5.8 2.29 8.89-1.82 3.08-5.8 4.11-8.89 2.29l-47.99-28.45c-2.11-1.08-3.55-3.27-3.55-5.79zm84.5-16.22C174.42 24.84 147.98 13 118.77 13c-29.21 0-55.65 11.84-74.79 30.98C24.84 63.12 13 89.56 13 118.77c0 29.21 11.84 55.65 30.98 74.79 19.14 19.14 45.58 30.98 74.79 30.98 29.21 0 55.65-11.84 74.79-30.98 19.14-19.14 30.98-45.58 30.98-74.79.01-29.21-11.83-55.65-30.97-74.79z"></path></svg>
                    <p class="text-[13px] font-normal text-[#999999]"><?php echo $post_date; ?></p>
                </div>
                </div>
                <p class="text-[14px] font-normal"><?php the_excerpt(); ?></p>
            </div>
            
        </div>
        <?php
    }
    ?>
    </section>
    <?php
} else{
    ?>
    <section class="max-w-[1250px] mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8 px-[15px] lg:px-0">
        <p>هیچ محتوایی یافت نشد</p>
    </section>
    <?php
}
?>
    <?php
    get_footer();
    ?>