<html lang='en'>
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
</html> 
<?php
//$category = $_GET['category'];
echo "The latest tech news is FutureX Media to consider Ajax in projects";

foreach ($_REQUEST as $key => $value) {
    echo "$key => $value <br />";
}