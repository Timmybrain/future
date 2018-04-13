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
                <div class="panel">
                    <!--The main panel satrts from here..-->
                    <form id="theForm">
                        <p id="result"></p>
                        <div class="form-group">
                            <h2 class="text-primary">Post Title</h2>
                            <input class="form-control" type="text" id="post_title" name="post_title" value="<?=@$post['post_title']; ?>" >
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 label-control"><?=$future->base_url?>/</label>
                            <input type="text" class="form-control"  name="post_url" id="post_url" value="">
                        </div>
                        <div class="form-group">
                            <textarea name="post_body" id="editor">
                                <?=@$post['post_body']; ?>
                            </textarea>
                        </div>
                        <input type="hidden" name="post_meta" value="Getting Started!">
                        <input type="hidden" name="post_keywords" value="CMS, PHP, jQuery, CSS3, Materialize, Open Source">
                    </form>
                </div>
                <div class="panel">
                    <div class="checkbox-inline">
                        <label>
                            <input type="checkbox" name="post_type" checked data-toggle="toggle" data-on="Blog" data-off="Page" data-onstyle="success" data-offstyle="danger" >
                        </label>
                    </div>
                </div>

                <div class="clear"></div>
                <button class="btn btn-danger" id="saveAsDraft">Draft</button>
                <button class="btn btn-primary" id="saveAsPublished">Publish</button>
                </div>
            </div>
            </div>
        </div>
    </div>
					</div>
			   </div>
				<!-- //blank-page -->
			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			<p><?=$future->footer_credit()?></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="<?=$future->assets?>/js/bootstrap.js"></script>
    <script src="<?=$future->assets?>/js/proton.js"></script>
    
    <script>

        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,           // set editor height
                minHeight: 500,       // set minimum height of editor
                maxHeight: 1024,     // set maximum height of editor
                focus: true         // set focus to editable area after initializing summernote
        });

    var post_title = $("input[type='text']#post_title").val();
    $("input[type='text']#post_url").val(post_title.replace(new RegExp(' ', 'gi'), "-"));

    $("input[type='text']#post_title").keypress(function() {
        $("input[type='text']#post_url").val($("input[type='text']#post_title").append().val().replace(new RegExp(' ', 'gi'), "-"));
    });
    //fresh content
    $("#saveAsDraft").click(function(){ save_content("draft")}); //INSERT
    $("#saveAsPublished").click(function(){save_content("published")}); //INSERT

    //not fresh
    //$("#updateDraft").on("click", "revert", save_content); //UPDATE
    //$("#updatePublished").on("click", "update", save_content); //UPDATE
});

function save_content(postStatus) {
    var rawData = $("#theForm").serializeArray();
    var field = {};

    rawData.forEach(element => {
        field[element.name] = element.value;
    });
    field["post_status"] = postStatus;

    $.post("post.php", field, function (data, status) {
        if (status == "success") {
            alert(data);
        }
    }, "text");
}

</script>

</body>
</html>