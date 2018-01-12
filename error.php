<?php

// $string = "holla/post";
// if (substr($string, -5) === "/post") {
//     $clean_url = '';
//     echo $clean_url;
// }

// foreach ($_SERVER as $key => $value) {
//     echo "$key => $value <br />";
// }


// function i_dirname($levels = 0)
// {
//     $dir_arrayed = explode( "\\", __DIR__);
//     $final = [];
//     for ($i=0; $i < (count($dir_arrayed) - $levels) ; $i++) { 
//         $final []= $dir_arrayed[$i];
//     }
//     $final = implode("\\", $final);
//     return $final;
// }

// print_r(i_dirname(2));
?>
<!-- <html>
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 - Classic editor</title>
    <script src="assets/ckeditor/ckeditor.js"></script>
</head>
<body>
    <h1>Classic editor</h1>
    <textarea name="content" id="editor">
        <p>This is some sample content.</p>
    </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html>

<head>
    <script src='assets/tinymce/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>

<body>
    <h1>TinyMCE Quick Start Guide</h1>
    <form method="post">
        <textarea id="mytextarea">Hello, World!</textarea>
    </form>
</body>

</html> -->
<?php
//$category = $_GET['category'];
echo "The latest tech news is FutureX Media to consider Ajax in projects";

foreach ($_REQUEST as $key => $value) {
    echo "$key => $value <br />";
}