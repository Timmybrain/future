<?php
//import future
require "app/app.php";
$page_title = "Editor";
//admin <head>
$links = [$f->add_js("ckeditor.4.9.1/ckeditor.js"), $f->add_css('custom/css/switch.css'), 
        $f->add_css('custom/css/upload.css'), $f->add_js("jquery-1.9.1.js", "http://code.jquery.com"),
        $f->add_js('custom/js/upload.js')];
$future->add_script_to_head($links);
$future->admin_html_head($page_title);
$future->admin_sidebar($page_title);
$future->admin_nav_section();

if (!empty($_GET['p'])) {
    $editable = $_GET['p'];

    $sql  = "SELECT * FROM contents WHERE post_id = :editable";

    $stmt = $future->db()->prepare($sql);

    if ($stmt) {
        $stmt->execute(array(':editable' => $editable));
    }

    $post = $stmt->fetch();
}
//checking the autosave
?>
<div class="main-grid">
    <div class="agile-grids">	
        <div class="progressbar-heading grids-heading">
                <h2><?=$page_title?></h2>
        </div>

            
        <!-- blank-page -->
        <div class="banner">
            <h2>
                <a href="./">Admin</a>
                <i class="fa fa-angle-right"></i>
                <span><?=$page_title?></span>
            </h2>
        </div>

        <div class="blank-page">

        </div>
</div>
        
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1');
</script>
<!-- footer -->
<?php
$future->footer()
?>
<!-- //footer -->
