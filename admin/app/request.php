<?php
namespace FX\CMS;
class  Request
{
    function index($url = "")
    {
        $urls = ['/', 'index', '/Route/web.php', 'home'];
        if (empty($url)) {
            return true;
        }
        elseif (!empty($url) && in_array($url, $urls)) {
            return true;
        }
        else {
            return false;
        }
    }

    function request_handler()
    {
        $grab = !empty($_GET['url']) ? $_GET['url'] : "";
        $requested = $this->clean_request($grab);

        //looking through the url in the browser
        if (empty($requested) && !$this->index()) {
            $option_url = $_SERVER['REQUEST_URI'];
            //$option_url = str_replace("/Route/web.php", "", $option_url);
            if (!empty($option_url)) {
                $requested = $option_url;
            }
            else {
                //do nothing
                $requested = "/";
            }
        }
        //fancy way to handle comment and other front-end posting
        $exts = ["/post", ".php", ".html", ".htm", ".txt", ".md", ".doc", ".pdf"];
        foreach ($exts as $ext) {
            $requested = $this->omit_ext($requested, $ext);
        }
        return $requested;
    }

    function omit_ext($requested, $ext)
    {
        $minus = strlen($ext) * -1;

        if (substr($requested, $minus) == $ext) {
            $request = substr($requested, 0, $minus);
            return $request;
        }
        else {
            return $requested;
        }

    }

    function clean_request($data) {
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }

    function request_type($requested)
    {
        //First, whether it is a blog post / page
        if ( !empty($requested)) {
            //the SQL query to check post type
            $sql = "SELECT post_type FROM contents WHERE post_url = :post_url AND post_status = 'published'";
            //PDO statement prepare
            $stmt = $this->db()->prepare($sql);
            //testing the validity of the query
            if ($stmt) {
                //the statement is established
                $stmt->execute(array(':post_url' => $requested));
            }
            //fecth the post_type and store the data in $result 
            $post_type = $stmt->fetch()['post_type'];
            return $post_type;
        }
    }

    function is_post_request()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            return true;
        }
        else {
            return false;
        }
    }

    function request_array($requested)
    {
        $res = explode("/", $requested);
        return $res;
    }

    function is_admin()
    {
        session_start();
        $redirect_to = $_SERVER['SCRIPT_NAME'];
        $goto_address = "login.php?redirect_to=" . $redirect_to;
        if( empty($_SESSION['username']) || empty($_SESSION['author_data'])) {
            header("Location: $goto_address");
            exit;
        }
    }
}
