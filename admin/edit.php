<?php
//import future
require "app/app.php";
$page_title = "Editor";
//admin <head>
$future->is_admin();
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
            <!-- The SECTION -->
<div class="row">
    <!-- 8 of 12 -->
    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="form-group">
                    <input type="text" class="form-control round" placeholder="Post Title">
                </div>
            </div>

            <!-- CKEDITOR container -->
            <div class="panel-body">
                <textarea name="" id="editor1">
                    <h1>Hello World!</h1>
                </textarea>
            </div>
            <!-- //CKEDITOR container -->

            <!-- panel footer -->
            <div class="panel-footer">
                <div class="row">
                    <!-- The Page/Blog button -->
                    <div class="col-md-3 row">
                        <div class="col-md-3 col-sm-3">page:</div>
                        <div class="col-md-9 col-sm-9">
                            <label class="switch">
                                <input type="checkbox" name="post_type">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <!-- //The Page/Blog button -->

                    <!-- The url text-input -->
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2">url:</label>
                            <div class="col-md-10">
                                <input class="form-control" name="post_url" type="text"  id="post_url_box">
                            </div>
                        </div>
                    </div>
                    <!-- The url text-input -->

                </div>
                <!-- // panel footer ends -->
            </div>
        </div>
    </div>
    <!-- // 8 of 12 -->

    <!-- 4 of 12 -->
    <div class="col-md-4">
    <!-- Side Panel -->
        <!-- The Publisher Panel -->
        <div class="panel panel-primary">
            <div class="panel-heading"><h5>Publish</h5></div>
            <div class="panel-body">
            <div class="form-group">
            <label for="postDate">Post Date:</label>
            <input type="datetime" class="form-control" name="post_date" id="post_date">
            </div>
            </div>
            <div class="panel-footer">
             <button class="btn btn-primary">Publish</button>
            </div>
        </div>
        <!-- //The Publisher Panel -->

        <!-- Category Panel -->

        <div class="panel panel-primary">
        <div class="panel-heading"><h5>Categories</h5></div>
        <div class="panel-body">
        
        </div>
        <div class="panel-footer">
        Add Category
        </div>
        </div>
        <!-- //Category Panel-->
        
        <div class="panel panel-primary">
            <!-- Panel Heading -->
            <div class="panel-heading">
                <h5>Featured Image</h5>
            </div>

            <div class="text-center">
            <div id="body-overlay"><div>
                <!-- Panel Heading -->
                  <img src="<?=$future->media . "images/loading.gif"?>" width="64px" height="64px"/>
                </div>
            </div>

          <div class="bgColor">
            <form id="uploadForm" action="upload.php" method="post">
            <div id="targetOuter">
              <div id="targetLayer">
                <img src="<?= $future->media . "images/". $future->get_author_pic_url($_SESSION['author_data']->author_id); ?>" width="200px" height="200px" class="upload-preview" />
              </div>
              <img src="<?=$future->media . "images/photo.png"?>"  class="icon-choose-image" />
              <div class="icon-choose-image" >
              <input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
              </div>
            </div>
            <div>
            <input type="submit" value="Upload Photo" class="btnSubmit" />
            </form>
          </div>
          </div>
        </div>
        </div>
    </div>
</div>
<!-- The SECTION -->
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
