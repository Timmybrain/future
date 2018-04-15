<?php
//import future
require "app/app.php";
$page_title = "Editor";
//admin <head>
$links = [$f->add_js("ckeditor/ckeditor.js"), $f->add_css('ckeditor/style.css')];
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

        <form action="">

            <textarea id="editor1">
                <h1>Hello world!</h1>
                <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
            </textarea>

             <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>
























                
	</div>
</div>
<!-- footer -->
<?php
$future->footer()
?>
<!-- //footer -->
