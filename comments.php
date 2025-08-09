<?php

//vars

$comments_args = [
    "label_submit" => "ثبت نظر",
    "class_submit" => "bg-red-600 py-2 px-4 rounded-xl text-white mr-auto cursor-pointer block" ,
    "fields" => [
        "author" => '<div class="mb-4 flex justify-between gap-4"><div class="w-full"><label class="block font-normalv mb-2 whitespace-nowrap" for="author">نام</label><input class="font-mediumv border border-gray-300 bg-white rounded-xl outline-none p-2 w-full transition-all duration-300 focus:border-primary" id="author" name="author" aria-required="true"></input></div>' ,
        "email" => '<div class="w-full"><label class="block font-normalv mb-2  whitespace-nowrap" for="email">ایمیل</label><input class="font-mediumv border border-gray-300 bg-white rounded-xl outline-none p-2 w-full transition-all duration-300 focus:border-primary" id="email" name="email" aria-required="true"></input></div></div>',
        "url" => '',
        "cookies" => ''
    ],
    "comment_field" => '<div class="mb-2"><label class="block font-normalv mb-2 whitespace-nowrap" for="comment">دیدگاه شما</label><textarea class="font-mediumv min-h-40 h-40 border border-gray-300 bg-white rounded-xl outline-none p-2 w-full transition-all duration-300 focus:border-primary" id="comment" name="comment" aria-required="true"></textarea></div>',
    "logged_in_as" => '',
    "title_reply" => '',
    "comment_notes_before" => '',
    "title_reply_before" => '<p class="flex justify-between items-center mb-2" id="reply-title">'
];
$comments_number = get_comments_number();

//functions

function comment_lis_callback($comment , $args , $depth){
    $comment_reply_link = get_comment_reply_link(array_merge($args , [
        "add_bellow" => "comment",
        "depth" => $depth ,
        "max_depth" => $args["max_depth"]
    ]));

    ?>
    <div id="comment-<?php comment_ID(); ?>" class="mb-3 768:mb-6 comment-body bg-white border border-gray-200 p-3 rounded-xl relative overflow-hidden">
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center gap-3">
                <?php echo generate_comment_author_avatar(get_comment_author()); ?>
                <div>
                    <p class="font-semibold text-black max-768:text-sm"><?php echo get_comment_author(); ?></p>
                </div>
            </div>
            <p class="p-1 text-sm font-normal"><span><?php echo get_comment_time(); ?> -</span><span> <?php echo get_comment_date('Y/m/d'); ?></span></p>
        </div>
        <p class="text-black pl-11 max-768:text-sm"><?php echo get_comment_text(); ?></p>
        <div class="absolute left-1 bottom-1 z-2 bg-gray-50 hover:bg-gray-100 rounded-sm px-4 py-1">
            <?php echo $comment_reply_link; ?>
        </div>
    </div>
    <?php
}

function generate_comment_author_avatar($author_name, $size = 40, $font_size = 16) {
    // Color palette
    $colors = [
        '193, 75, 99',
        '40, 122, 178',
        '146, 107, 16',
        '45, 115, 115',
        '122, 81, 136',
        '117, 60, 6',
        '0, 110, 40',
        '204, 70, 28',
        '50, 65, 147',
        '186, 24, 79',
    ];
    
    // Generate stable hash from author name for color selection
    $hash = crc32($author_name);
    $color_index = $hash % count($colors);
    $color = $colors[$color_index];
    $style_colors = sprintf('background-color: rgb(%s);', $color);
  
    // Extract initials from author name
    $words = preg_split('/\s+/u', trim($author_name));
    $first_initial = isset($words[0]) ? mb_substr($words[0], 0, 1) : '';
    $second_initial = isset($words[1]) ? mb_substr($words[1], 0, 1) : '';
    $initials = $first_initial . ($second_initial ? ' ' . $second_initial : '');
  
    return sprintf(
        '<div class="text-center flex justify-center items-center rounded-full font-extrabold tracking-tight text-white" style="width:%1$dpx;height:%1$dpx;font-size:%2$dpx;%3$s word-spacing:-2px;">
            <span>%4$s</span>
        </div>',
        intval($size),
        intval($font_size),
        esc_attr($style_colors),
        esc_html($initials ?: '؟؟')
    );
}

?>
<div>
    <div id="comments">
        <div class="comments-title mb-3">
            <?php
            if($comments_number>0){
                ?><h3> <?php echo $comments_number; ?> دیدگاه</h3> <?php
            }else{
                ?> <h3>دیدگاهی برای این مقاله ثبت نشده</h3><?php
            } ?>
        </div>
        <div class="comments-list">
            <?php 
            wp_list_comments([
                "style" => "ol",
                "callback" => "comment_lis_callback"
            ]);
            ?>
        </div>
        <div class="comment_form">
            <?php comment_form($comments_args); ?>
        </div>
    </div>
</div>

