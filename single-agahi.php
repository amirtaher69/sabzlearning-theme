<?php
get_header();

$post_id = get_the_ID();
$post_title = get_the_title($post_id);
$post_content = get_the_content($post_id);
$post_thumbnail = get_the_post_thumbnail_url($post_id);

$price = get_field('price');
$area = get_field('area');
$parking = get_field('parking');
$rooms_count = get_field('rooms_count');


?>
<section class="max-w-[1250px] mx-auto mt-[124px] lg:mt-[200px] flex flex-col lg:flex-col">
    <h1><?php echo $post_title; ?></h1>
    <?php if($price){ ?>
        <p>قیمت : <?php echo number_format($price); ?> تومان</p>
    <?php } ?>
    <?php if($area){ ?>
        <p>متراژ : <?php echo $area; ?> متر</p>
    <?php } ?>
    <?php if($parking){ ?>
        <p>پارکینگ : <?php echo $parking == true ? 'دارد' : 'ندارد'; ?></p>
    <?php } ?>
    <?php if($rooms_count){ ?>
    <p>تعداد اتاق : <?php echo $rooms_count; ?></p>
    <?php } ?>
</section>
<?php
get_footer();
?>