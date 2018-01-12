<ul class="collection">
<?php
//require "admin-plugin-status.php";
$plugins_folder = glob("plugins/*");
$plugin_details = array();
foreach ($plugins_folder as $plugin_folder) {
    $plugin_slug = substr($plugin_folder, 8);
    $index_file = fopen($plugin_folder . "/index.php", "r");
    while ( ($line = fgets($index_file)) !== false ) {
        if ( (strpos($line, "*/")) !== false) {
            break;
        }
        elseif ( (rtrim($line) == "<?php") || (rtrim($line) == "/*") ) {
            continue;
        }
        else {
            $title = explode("=>", rtrim($line));
            $plugin_details[rtrim(strtolower($title[0]))] = $title[1];
        }

    }
    if( ! $future->plugin_status($plugin_slug)) {
        $activator = '</i><a href="?plug=' . $plugin_slug . '&amp;action=activate">Activate </a>'; 
    }
    else {
        $activator = '</i><a class="red-text" href="?plug=$plugin_slug&amp;action=deactivate">Deactivate </a>';
    }

    $item = <<<EOD
    <li class="collection-item">
    <h6>{$plugin_details["plugin name"]}</h6> 
    $activator
    <a href="?page=$plugin_slug&amp;action=settings">Settings </a>
    <a href="?plug=$plugin_slug&amp;action=uninstall">Uninstall </a>
    <span class="right">
    version {$plugin_details["plugin version"]} 
    <i class="fa fa-link"></i><a href="{$plugin_details["provider website"]}" target="_blank"> website</a>
    </span>
    </li>
EOD;
    echo $item;
}
?>
</ul>