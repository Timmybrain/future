<?php
//Welcome to Future 0.0.1
class Future {
    const version = "0.0.1";
    public $view;
    public $base_url;
    public $theme;
    public $theme_assets;
    public $assets;

    function __construct()
    {
        header("X-Powered-By: FutureX Media Nigeria");       
        date_default_timezone_set('Africa/Lagos');
        //current direcory of the file
        define('ABSPATH', dirname(dirname(dirname(__FILE__))));
        define('DEBUG', true, true);
        $this->theme = strtolower($this->derive('theme'));
        $this->view = strtolower($this->derive('theme')) . "/views/" . strtolower($this->derive('theme'));
        $this->base_url = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] . ":" : "http:")."//{$_SERVER['HTTP_HOST']}";
        $this->theme_assets = $this->base_url . "/admin/templates/" . $this->theme ."/assets/";
        $this->assets = "//" . $_SERVER['HTTP_HOST'] . "/assets";
    }

    function is_admin()
    {
        session_start();
        $redirect_to = $_SERVER['SCRIPT_NAME'];
        $goto_address = "login.php?redirect_to=" . $redirect_to;
        if(empty($_SESSION['username'])) {
            header("Location: $goto_address");
            exit;
        }
    }

    function plugin_status($slug)
    {
        global $future;
        
        $sql = "SELECT * FROM plugins WHERE plugin_slug = :slug";

        $stmt = $this->db()->prepare($sql);

        if ($stmt) {
            $stmt->execute(array(':slug' => $slug));
        }
        if($stmt->rowCount() === 1) {
            $result = $stmt->fetch();
        }
        else {
            return false;
        }

        if ($result['plugin_status'] == 1 || $result['plugin_status'] == true) {
            return true;
        }
    }

    function db()
    {
        if ( $this->is_localhost() ) {
            # code...
            $db_host = "localhost";
            $db_user = "realtimmybrain";
            $db_password = "tcvJitBYQKaiea8h";
            $db_name = "future";
        }
        else {
            //the originals
            $db_host = '';
            $db_user = '';
            $db_password = '';
            $db_name = '';
        }

        //constant
        $dbc = mysqli_connect($db_host, $db_user, $db_password, $db_name);
        $db_conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

        return $db_conn;
    }

    function request_handler()
    {
        $grab = !empty($_GET['url']) ? $_GET['url'] : "";
        $requested = $this->clean_request($grab);

        //looking through the url in the browser
        if (empty($requested) && $_SERVER['PHP_SELF'] != "/index.php") {
            $option_url = $_SERVER['PHP_SELF'];
            $option_url = str_replace("/Route/web.php", "", $option_url);
            if (!empty($option_url)) {
                $requested = $option_url;
            }
            else {
                //do nothing
                $requested = "Home";
            }
        }

        //fancy way to handle comment and other front-end posting
        $posted = false;
        if (substr($requested, -5) === "/post") {
            $posted = true;
            $requested = substr($requested, 0, -5);
        }
        if(substr($requested,-5) === ".html") {
            $requested = substr($requested, 0, -5);
        }
        return $requested;
    }
    
    private $secret_key = "(#$&^OTAFXMBJEMDS^&$#)";
    private $hash = "";

    //encrypt the data
    function encrypt($data)
    {
        $data = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->secret_key, $data, MCRYPT_MODE_ECB); //some encrytion technique
        return base64_encode($data);
    }

    //decrypt the data
    function decrypt($data)
    {
        $data = base64_decode($data);
        return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->secret_key, $data, MCRYPT_MODE_ECB);
    }

    function match($prefer, $state = 'Yes')
    {
        $sql = "SELECT prefer_state FROM preferences WHERE preference = :prefer";

        $stmt = $this->db()->prepare($sql);

        if ($stmt) {
            $stmt->execute(array(':prefer' => $prefer));
        }

        $result = $stmt->fetch();

        if ($result['prefer_state'] === $state) {
            return true;
        }
        else {
            return false;
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

    function get_traffic($requested)
    {
        $sql = "SELECT `post_views` FROM `contents` WHERE `post_url` = :requested";
        //first, get current number of visitors
        $stmt = $this->db()->prepare($sql);
        if ($stmt) {
            $stmt->execute(array(':requested' => $requested));
            //get the result from array, make sure it is int...
            $result = $stmt->fetch()['post_views'];
            return $result;
        }
    }

    private function set_traffic($requested)
    {
        $sql = "UPDATE `contents` SET `post_views` = :new_value WHERE `post_url` = :request";
        $stmt = $this->db()->prepare($sql);
        if ($stmt) {
            $stmt->execute( 
                array(':new_value' => ($this->get_traffic($requested) + 1),
                ':request' => $requested));
            //change how many row the query affected
            if ($stmt->rowCount() === 1) {
                
                //set cookie to monitor this browser for 1 month
                setcookie("has_visited[$requested]",md5("exactly!"), time()+(60 * 60 * 24 * 30));
            }
            else {
                //$this->block_visitor();
            }
        }

    }

    function output($content)
    {
        //$content = htmlentities($content);
        //$content = htmlspecialchars($content);
        $content = stripcslashes($content);

        return $content;
    }

    function save_content()
    {
        $status = $_POST['post_status'];
        if ($_SERVER['REQUEST_METHOD'] == "POST"):

            $sql = ["INSERT INTO `contents`(`post_url`, `post_title`, `post_body`, `author_id`, `post_meta`, `post_keywords`, `post_type`, `post_status`) VALUES (:post_url, :post_title, :post_body, :author, :post_meta, :keywords, :post_type, :post_status)"];

            $stmt = $this->db()->prepare($sql[0]);

            if ($stmt) {
                $stmt->execute(array(
                    ':post_url' => $_POST['post_url'],
                    ':post_title' => $_POST['post_title'],
                    ':post_body' => $_POST['post_body'],
                    ':author' => 1,
                    ':post_meta' => $_POST['post_meta'],
                    ':keywords' => $_POST['post_keywords'],
                    ':post_type' => $_POST['post_type'],
                    ':post_status' => $_POST['post_status']

                ));

                if ($stmt->rowCount() == 1) {
                    echo "Successfully saved as $status";
                }
            }

        endif;
    }

    function set_content($post, $action)
    {
        $sql = "UPDATE contents SET post_status = :act WHERE post_id = :post";
    
        $stmt = $this->db()->prepare($sql);

        if ($stmt) {
            $stmt->execute( array(':act' => $action, ':post' => $post));
        }

        if ($stmt->rowCount() >= 1 ) {
            echo "<script>alert('Posted successfully updated!'); window.history.go(0);</script>";
        }
    }

    function del_content($id)
    {
        try {
            $db = $this->db();
            $db->beginTransaction();
            if ($db->exec("DELETE FROM `contents` WHERE `post_id` = $id")) {
                echo "<script>alert('Post Deleted!'); window.history.go(0);</script>";
            }
            else {
                throw new PDOException("Error Processing Request", 1); 
            }
        }catch(PDOException $e) {
            $db->rollBack();
        }
    }

    function set_preference($preference, $prefer_state, $action)
    {
        $que = ["INSERT INTO `preferences`(`preference`, `prefer_state`) VALUES(:prefer, :prefered)",
        "UPDATE `preferences` SET `prefer_state` = :prefered WHERE `preference`= :prefer",
        "DELETE * FROM `preferences` WHERE `preference`= :prefer AND `prefer_state` = :prefered)"];

        switch ($action) {
            case 'create':
            $sql = $que[0];
                break;

            case 'new':
                $sql = $que[0];
                break;

            case 'update':
                $sql = $que[1];
                break;

            case 'change':
                $sql = $que[1];
                break;

            case 'delete':
                $sql = $que[2];
                break;

            case 'del':
                $sql = $que[2];
                break;

            default:
                # code...
                break;
        }

        $stmt = $this->db()->prepare($sql);

        if ($stmt) {
            $stmt->execute(array(':prefer' => $prefer, ':prefer_state' => $prefer_state));
        }
        if ($stmt->rowCount() === 1) {
            return true;
        }
        else {
            return false;
        }
    }

    private $query = "SELECT * FROM `contents` WHERE `post_url` = :requested";

    function pull_content($requested, $admin_use = false)
    {
        $stmt = $this->db()->prepare($this->query);
        //
        if ($stmt) {
            $stmt->execute(array(':requested' => $requested));
        }
        $content = $stmt->fetch(PDO::FETCH_OBJ);

        if ( !empty($content) && $admin_use) {
            return $content;
        }
        else {
            if (!empty($content) && !$admin_use && $content->post_status == 'published') {
                if (empty($_COOKIE["has_visited"][$requested])) {
                    //the user is either in private mode
                    //or the user is new to the page
                    //or the user has cleared the cookies
                    $this->set_traffic($requested);
                }
                else {
                    //nothing for now!      
                }
                return $content;
            }
            else {
                return $this->fx404();
            }
        }
    }

    function e($input)
    {
        //$output = stripcslashes($input);
        //$output = strip_tags($output);
        return $input;
    }

    function fetch_author($id)
    {
        $sql = "SELECT * FROM authors WHERE author_id = :id";

        $stmt = $this->db()->prepare($sql);

        if($stmt) {
            $stmt->execute(array(
            ':id' => $this->e($id)
        ));
        }
        $author = $stmt->fetch(PDO::FETCH_OBJ);

        return $author;
    }

    function pull_contents(string $type = null, int $limit = null, bool $unpublished = false)
    {
        $limit = $this->e($limit);
        //pull_contents("post")
        if ($type != null and $limit == null and $unpublished == false) {
            $sql = "SELECT * FROM `contents` WHERE `post_type` = :ctype AND `post_status` = :cstatus";
            $array = [':ctype' => $this->e($type), ':cstatus' => 'published'];
        }
        //pull_contents("post", 5)
        elseif ( $type != null and $limit != null && $unpublished === false) {
            $sql = "SELECT * FROM `contents` WHERE `post_type` = :ctype AND `post_status` = :cstatus LIMIT $limit";
            $array = [':ctype' => $this->e($type), ':cstatus' => 'published'];
        }
        //pull_contents("post", 5, true)
        elseif ($type != null and $limit != null and $unpublished === true) {
            $sql = "SELECT * FROM `contents` WHERE `post_type` = :ctype LIMIT $limit";
            $array = [':ctype' => $this->e($type)];
        }
        else {
            $sql = "SELECT * FROM `contents`";
            $array = null;
        }
        //statement
        $stmt = $this->db()->prepare($sql);

        //if preparable
        if ($stmt) {
            $stmt->execute($array);
        }

        $contents = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $contents;
    }
    
    function __call($name, $params)
    {
        if(@$params[1] == null)  {
            $unpublished = false;
        }
        else {
            $unpublished = true;
        }

        if ($name == "pull_blog_contents") {
            $r = array_reverse($this->pull_contents("post", @$params[0], $unpublished));
        }
        elseif ($name == "pull_pages") {
            $r = $this->pull_contents("page", @$param[0], $unpublished);
        }

        return $r;
    }

    function is_localhost()
    {
        if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1" || strpos(".cms", $_SERVER["HTTP_HOST"])) {
            return true;
        }
        else {
            return false;
        }
    }

    function derive($preference)
    {
        $sql = "SELECT `prefer_state` FROM preferences WHERE preference = :prefer";
        $stmt = $this->db()->prepare($sql);
        if ($stmt) {
            $stmt->execute(array(':prefer' => $preference));
        }
        $prefer_state = $stmt->fetch();
        return $prefer_state["prefer_state"];
    }

    function set_theme(Type $var = null)
    {
        # code...
    }

}