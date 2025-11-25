<?php
require_once('../../../../wp-load.php');

$data = [];
$data["errors"] = [];
$data["ok"] = true;

// check user is logged in
$current_user_id = get_current_user_id();

if(!$current_user_id){
    $data["errors"][] = "لطفا برای افزودن علاقه مندی وارد حساب کاربری خود شوید";
    $data["ok"] = false;
}

// get post id
$post_id = isset($_POST['post_id']) ? sanitize_text_field($_POST['post_id']) : '';

// get post object
$post = get_post($post_id);

if(!$post){
    $data["errors"][] = "پست مورد نظر یافت نشد";
    $data["ok"] = false;
}

if($data["ok"]){
    $favorite_posts = get_user_meta($current_user_id, 'favorite_posts', true);
    if($favorite_posts){
        if(in_array($post_id, $favorite_posts)){
            // remove post id from favorite posts
            $favorite_posts = array_diff($favorite_posts, [$post_id]);
            $data["add_to_list"] = false;
        }else{
            // add post id to favorite posts
            $favorite_posts[] = $post_id;
            $data["add_to_list"] = true;
        }
    }else{
        $favorite_posts = [$post_id];
        $data["add_to_list"] = true;
    }
    update_user_meta($current_user_id, 'favorite_posts', $favorite_posts);
    
}
echo json_encode($data);
die();