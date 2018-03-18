<?php
$page_title = "Editor";
$future = new FX\CMS\Future();
$future->admin_head($page_title);

if (!empty($_GET['post'])) {
    $editable = $_GET['post'];

    $sql  = "SELECT * FROM contents WHERE post_id = :editable";

    $stmt = $future->db()->prepare($sql);

    if ($stmt) {
        $stmt->execute(array(':editable' => $editable));
    }

    $post = $stmt->fetch();
}
require "includes/admin-navmenu.php";
//checking the autosave
?>
<div class="card-panel">
    <div class="row"> 
        <!-- This is the sidebar-->  
        <div class="col s2 m2 l2 sidebar">
            <?= $future->admin_sidebar($page_title);?>
        </div>

        <!--The main panel satrts from here.. -->
        <div class="col s10 m10 l10">
            <div class="row">
                <!-- The main form for all the writing -->
                <div class="col s12 m8 l8 hoverable z-depth-3">
                <p id="result"></p>

                <form id="theForm">
                    <input type="text" id="post_title" name="post_title" value="<?=@$post['post_title']; ?>" >

                    <div class="col s4 m4 l4">
                        <?=$future->base_url?>/
                    </div>

                    <div class="col s8 m8 l8">
                        <input type="text"  name="post_url" id="post_url" value="">
                    </div>

                    <div class="col s12">
                        <textarea id="summernote" name="post_body">
                            <?=@$post['post_body']; ?>
                        </textarea>
                    </div>
                    
                    <input type="hidden" name="post_type" value="post">
                    <input type="hidden" name="post_meta" value="Getting Started!">
                    <input type="hidden" name="post_keywords" value="CMS, PHP, jQuery, CSS3, Materialize, Open Source">
                </form>

                </div>
                <!--The right bar for updating and others -->
                <div class="col right s12 m4 l4">
                    <div class="card-panel">
                        <button class="btn waves-effect blue hoverable" id="saveAsDraft">Draft</button>
                        <button class="btn red hoverable" id="saveAsPublished">Publish</button>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    //$('#summernote').summernote();
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
            $("#result").text(data);
        }
    }, "text");
}

</script>
<?php require "includes/blog-footer.php" ?>
