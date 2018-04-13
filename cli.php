<?php
require __DIR__ . "/admin/app/app.php";
$action = $argv[1];
$dir = $argv[2];
$name = $argv[3];

switch ($action) {
    case 'create':
        create();
        break;
    case 'delete':
        delete();
        break;
    
    default:
        # code...
        break;
}


function find_dir($dirname)
{
    if (is_dir("admin/$dirname")) {
        return "admin/$dirname/";
    }
}

function make_file($dir, $name)
{
    global $template;
    file_put_contents(find_dir($dir) . $name, $template);
}

function create()
{
     $name = $name . ".php";
    make_file($dir, $name);
}

function delete()
{
//
}