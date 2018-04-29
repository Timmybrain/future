<?php
//import future
require "app/app.php";
$page_title = "Editor";
//admin <head>
$future->is_admin();
$links = [$f->add_js("ckeditor.4.9.1/ckeditor.js"), $f->add_css('custom/css/switch.css'), 
        $f->add_css('custom/css/upload.css'), $f->add_js('custom/js/upload.js')];
$future->add_script_to_head($links);
$future->admin_html_head($page_title);
$future->admin_sidebar($page_title);
$future->admin_nav_section();
$categories = $f->fetch_categories();
$post = "";
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
                    <input type="text" id="post_title" class="form-control round" placeholder="Post Title">
                </div>
            </div>

            <!-- CKEDITOR container -->
            <div class="panel-body">
                <textarea name="" id="editor"></textarea>
            </div>
            <!-- //CKEDITOR container -->

            <!-- panel footer -->
            <div class="panel-footer">
                <div class="row">
                    <!-- The Page/Blog button -->
                    <div class="col-md-4 row">
                        <div class="col-md-4 col-sm-4"><b>PAGE</b>:</div>
                        <div class="col-md-8 col-sm-8">
                            <label class="switch">
                                <input id="post_typed" type="checkbox" name="post_type">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <!-- //The Page/Blog button -->

                    <!-- The url text-input -->
                    <div class="col-md-8">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2"><b>URL</b>:</label>
                            <div class="col-md-10">
                                <span id="post_url_box"></span>
                            </div>
                        </div>
                    </div>
                    <!-- The url text-input -->

                </div>
                <!-- // panel footer ends -->
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="meta_title">SEO Title:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control round" name="meta_title" id="seo_meta_title">
                    </div>
                </div>
            </div>
            
            <div class="panel-body">
                <label for="">Meta Description:</label>
                <textarea name="meta_decription" cols="30" rows="10" id="meta_description"></textarea>
            </div>

            <div class="panel-footer">
                <label for="keywords">Keywords:</label>
                <input type="text" name="keywords" id="the_keywords">
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
            <label for="post_status"><i class="fa fa-key"></i> Status</label>
            <span id="my_post_status"><b>Draft</b></span> <a href="#edit" id="edit_status">Edit</a>
            </div>

            <div class="form-group">
            <label for="postDate"><i class="fa fa-calendar"></i> Publish:</label> <b>immediately</b> <a href="#edit">Edit</a>
            <!--input type="datetime" class="form-control" name="post_date" id="post_date"-->
            </div>

            <div class="form-group">
                <label for=""><i class="fa fa-eye"></i> Visibility:</label> 
                <b id="post_visibility">public</b> <a id="change_visibility">Change</a>
            </div>
</div>
        <div class="panel-footer">
            <button id="save_as_draft" class="btn btn-primary left">Draft</button>
            <button id="publish_post_button" class="btn btn-success right">Publish</button>
        </div>

        </div>
        <!-- //The Publisher Panel -->

        <!-- Category Panel -->

        <div class="panel panel-primary">
            <div class="panel-heading"><h5>Categories</h5></div>
            <div class="panel-body">
                <div id="list_of_categories">
                </div>
            </div>
        <div class="panel-footer">
            <button class="btn btn-dark" id="add_category_button">Add Category</button>

            <div id="add_category_cavas">
                <input type="text" name="input_new_category" id="input_new_category" />
                <button type="submit" class="btn btn-danger" id="save_category_button">Save</button>
            </div>

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
              <div id="targetLayer"></div>
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
    var editor = CKEDITOR.replace( 'editor');
</script>

<script>
$(document).ready(function () {
    var the_categories = <?=json_encode($categories)?>;
    update_categories_list(the_categories);
    //for editing!
    var editable = <?=json_encode($post)?>;
    $("#add_category_cavas").hide();

    $("#add_category_button").click( function () {
        $("#add_category_cavas").toggle();
    });

    $("#save_category_button").click( function () {
        //alert($("#input_new_category").val());
        var fields = {};
        fields['new_category'] = $("#input_new_category").val();

        $.post("test.php", fields, function (data, status) {
        if (status == "success") {
            update_categories_list(data);
            $("#input_new_category").val("");
            $("#add_category_cavas").hide();
        }
    }, "json");
    });
    //$()
    $("#publish_post_button").click( function () {
        var this_post = {
            <?php
            if (!empty($post)) {
                echo "'post_id': {$post['post_id']},\n";
            }
            ?>
            'action': what_action(editable),
            'post_title' : $("#post_title").val(),
            'post_body' : CKEDITOR.instances.editor.getData(),
            'post_image' : $("#post_image").attr('src'),
            'post_categories': selected_categories(),
            'post_type': post_type(),
            'post_status': 'published',
            'post_meta_desc' : $("#meta_description").val(),
            'post_meta_title' : $("#seo_meta_title").val(),
            'post_keywords' : $("#the_keywords").val(),
            'post_visibility' : $("#post_visibility").text()
        };
        
        if (confirm("Are you sure you want to go live?")) { 
            $.post("save.php", this_post, function (data, status) {
                if (status == "success") {
                    alert("Successfully " + data.post_status);
                    $("#post_url_box").html("<a href='<?=$f->base_url?>/" + data.post_url + "'><?=$f->base_url?>/" + data.post_url + "</a>");
                }
            }, "json");
        }
    });
    if (editable != '') {
        CKEDITOR.instances.editor.setData(editable.post_body);
        $("#post_title").val(editable.post_title);
        $("#post_url_box").append("<a href='<?=$f->base_url?>/" + editable.post_url + "'><?=$f->base_url?>/" + editable.post_url + "</a>");
        $("#targetLayer").html('<img src="<?=$f->media?>/images/' + editable.post_img + '" id="post_image" width="200px" height="200px" class="upload-preview" />');
        $("#my_post_status").html("<b>" + editable.post_status +"</b>");
        $("#publish_post_button").text("Update");
        $("#meta_description").val(editable.post_meta);
        $("#seo_meta_title").val(editable.post_subtitle)
        if (editable.post_type == "page") {
            $("input#post_typed")[0].checked = true;
        }
    }
});

//functions
function update_categories_list(the_categories) {
    $("#list_of_categories").html("");
    the_categories.forEach(element => {
        $("#list_of_categories").append(`<input class="post_category" type="checkbox" name="` + element.category_id + `">` + element.category_name + `<br />`);
    });
}
//to know
function what_action(editable) { 
    if (editable != '') {
        return 'update';
    }
    else {
        return 'insert';
    }
 }
function selected_categories () {
    var categories = $(".post_category").toArray();
    var selected = [];
    for (const input_c of categories) {
        if (input_c.checked) {
            selected.push(input_c.name);
        }   
    }
    if (selected.length == 0) {
        selected.push('empty');
    }
    return selected;    
}

function post_type() {
    var post_type = $("input#post_typed");
    if (post_type[0].checked == true) {
        return "page";
    }
    else {
        return "post";
    }
 }
</script>
<!-- footer -->
<?php
$future->footer()
?>
<!-- //footer -->
