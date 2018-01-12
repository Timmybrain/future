<?php
$temp_dir = glob('templates/*');
?>
<div class="row collection templates">

<?php
//
foreach ($temp_dir as $dir) {
    $n = str_replace("templates/", "", $dir);
    $m = ucfirst($n);
    $o = "
    <div class=\"col hoverable card-panel s12 m4 l4 collection-item\">
        <img src=\"$dir/screenshots/$n.default.png\" class=\"responsive-img\"/>
        <h4>$m</h4>
    </div>
    ";
    echo $o;
}

?>
</div>