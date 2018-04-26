<?php
require "app/app.php";
$future->is_admin();
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $sourcePath = $_FILES['userImage']['tmp_name'];
        $custom_name = str_replace(" ", "-", $_FILES['userImage']['name']);
        $targetPath = dirname(__DIR__) . "/media/images/". $custom_name;
        $user_id = !empty($_POST['current_edit_id']) ? $_POST['current_edit_id'] : "post";  
        if(move_uploaded_file($sourcePath, $targetPath)) {
            if ($user_id != "post") {
                $future->set_author_pic_url($custom_name, $user_id);
                echo "<img src=\"$future->media"."images/{$future->get_author_pic_url($user_id)}\" width=\"200px\" height=\"200px\" class=\"upload-preview\" />";
            }
            else{
                echo "<img src=\"$future->media"."images/$custom_name\" id=\"post_image\" width=\"200px\" height=\"200px\" class=\"upload-preview\" />";
            }
        }
    }
}