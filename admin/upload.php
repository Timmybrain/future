<?php
require "app/app.php";
$future->is_admin();
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$custom_name = str_replace(" ", "-", $_FILES['userImage']['name']);
$targetPath = dirname(__DIR__) . "/media/images/". $custom_name;
$id = $_POST['current_edit_id'];
if(move_uploaded_file($sourcePath,$targetPath)) {
    $future->set_author_pic_url($custom_name, $id);
?>
<img src="<?php echo $future->media . "images/". $future->get_author_pic_url($id); ?>" width="200px" height="200px" class="upload-preview" />
<?php
}
}
}
?>