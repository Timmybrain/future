<?php
//require "admin/includes/blog-database.php";
//require "Route/web.php";

// if ( empty($requested) || $requested == "index.php" || $requested == "Home") {
//     $sql = "SELECT * FROM fx_blog WHERE post_status = 'published'";
    
// }
// else {
//     $sql = "SELECT * FROM fx_blog WHERE post_url = :requested_url AND post_status = 'published'";
// }
$sql = "SELECT * FROM fx_blog WHERE post_status = 'published'";
$stmt = $db_conn->prepare($sql);

if ($stmt) {
    $stmt->execute(array('requested_url' => $requested));
}

$posts = $stmt->fetchAll();

if ( empty($requested) || $requested == "index.php") {
    $page_title = "Home";
}
else {
    if (empty($posts) || count($posts) < 1) {
        $post = array();
        $post['post_title'] = "404 - Page Not Found";
        $post['post_body'] = "<p>Sorry, this page has either been deleted, moved to another location or does not exist.</p>";
        $post['post_img'] = "media/images/404.jpg";
        $post['author_id'] = 1;
        $post['post_url'] = "404.html";
    }
    else {
        $post = $posts[0]; 
    }
    
    $page_title = $post["post_title"];
}
require "admin/includes/blog-header.php";
if ($page_title == "Home" || empty($requested) || $requested == "index.php") {
    ?>
    <body class="container grey darken-2">
        
    <div class="row">
    <?php
    foreach ($posts as $post) {

        $sql = "SELECT * FROM authors WHERE author_id = :id";

        $stmt = $db_conn->prepare($sql);

        if($stmt) {
            $stmt->execute(array(
            ':id' => $post['author_id']
        ));
        }
        $author = $stmt->fetch(); 
        ?>
        <div class="col s12 m6">
            <div class="card white darken-4">
                <div class="card-image">
                    <a href="<?= $post['post_url']; ?>"><img src="media/images/<?= $post['post_img'] ?>"></a>
                </div>

                <div class="card-content">
                    <span class="card-title green-text">
                        <a href="<?= $post['post_url']; ?>"><h3 class="entry-title"><?= $post["post_title"] ?></h3></a>
                    </span>
                    <div class="truncate">
                        <?= $post['post_body']; ?>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light blue">
                        <i class="fa fa-facebook"></i>
                    </button>
                    <button class="btn waves-effect waves-light cyan">
                        <i class="fa fa-twitter"></i>
                    </button>
                    <button class="btn waves-effect waves-light red">
                        <i class="fa fa-google"></i>
                    </button>
                    <a class="right blue-grey-text" href="#">
                        <i class="fa fa-user"></i> <?= ucfirst($author['author_fname'] . " " . $author['author_lname']); ?></a>
                </div>
            </div>
        </div>


        <?php
    }
}
else {
    if ($posted) {
        require "admin/includes/blog-comment-handler.php";
    }
    require "admin/includes/blog-single.php";
}

?>

</div>
<div id="logOutMessage" style="display: none">Do you want to logout?</div>
<footer>
    <div class="card-panel footer-copyright center pink white-text">
        <p class="flow-text">&copy; <?= date('Y') ?> 
        <a class="yellow-text" href="http://www.fxnigeria.com">FutureX Media</a>
        </p>
    </div>  
</footer>

</body>
<script type="text/javascript">
    $(document).ready( function () {
        $("#logOutMessage").dialog({
        draggable: true,
        resizable: false,
        height: 300,
        width: 300,
        modal: true,
        position: {
            my: "center center",
            at: "center center",
            of: "body"
        },
        show: 1000,
        hide: 1000,
        autoOpen: false,
        buttons: {
            "YES": function () { 
                //$("#openDialog").html("You clicked okay");
                window.location.href = "logout.php";
            },
             "NO": function () { 
                 //$("#openDialog").html("You clicked CANCEL");
                 $(this).dialog("close");
            }
        }

    });

    $(".collection div.collection-item").click( function () { 
        $.post()
     })

    $("#logOut").click(function () { 
        $("#logOutMessage").dialog("open");
     });

     //handle the event
     $("#getNews").click( function () {
         var query = $("#getNews").attr("title");
         queryServer(query);
     });
});

//get the content from server
function queryServer(query) {
    $.ajax({
        type: "GET",
        url: "error.php?q=" + query,
        success: embedContent
   });
}
//put the content into the tag
function embedContent(data, status) { 
    $("#content").html(data);
 }


</script>
