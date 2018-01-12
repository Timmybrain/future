<?php
//$sidebar_menus = array();
$sidebar_menus = array(
    array(
        'display' => 'Dashboard',
        'script' => 'dashboard.php',
        'icon' => 'fa fa-dashboard'
    ),

    array(
        'display' => 'Articles',
        'script' => 'post.php',
        'icon' => 'fa fa-edit',
    ),

    array(
        'display' => 'Comments',
        'script' => 'comments.php',
        'icon' => 'fa fa-comment'
    ),
    array(
        'display' => 'Media',
        'script' => 'media.php',
        'icon' => 'fa fa-image'
    ),
    array(
        'display' => 'Templates',
        'script' => 'templates.php',
        'icon' => 'fa fa-columns'
    ),
    array(
        'display' => 'Plugins',
        'script' => 'plugins.php',
        'icon' => 'fa fa-plug'
    ),

    array(
        'display' => 'Settings',
        'script' => 'settings.php',
        'icon' => 'fa fa-cog'
    )
);

//some manipulations to make adding more menu possible
?>
<div class="collection black white-text">
<?php
foreach ($sidebar_menus as $menu) {
    echo "<a class='collection-item" . ( ($page_title == $menu['display']) ? ' active' : '')
    . "' href='./{$menu['script']}'><i class='{$menu['icon']}'></i> {$menu['display']}</a>";
}
?>
</div>