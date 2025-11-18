<?php
require_once('../../../../wp-load.php');

// get data from post
$post_id = isset($_POST['post_id']) ? sanitize_text_field($_POST['post_id']) : '';
$client_name = isset($_POST['client_name']) ? sanitize_text_field($_POST['client_name']) : '';

$data = [];

$read_time = get_post_meta($post_id, 'read_time', true);
$view_count = get_post_meta($post_id, 'view_count', true);
$data["post_id"] = $post_id;
$data["client_name"] = $client_name;
$data["read_time"] = $read_time;
$data["view_count"] = $view_count;

echo json_encode($data);
die();