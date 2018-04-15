<?php
//Welcome to Future 0.0.1
namespace FX\CMS;

class Future {
    const name = "FUTURE";
    const version = "0.0.1";
    public $view;
    public $base_url;
    public $theme;
    public $theme_assets;
    public $assets;
    public $head_added_scripts;
    public $foot_added_scripts;
    public $media;

    function __construct()
    {
        header("X-Powered-By: FutureX Media Nigeria");       
        date_default_timezone_set('Africa/Lagos');
        $this->theme = strtolower($this->derive('theme'));
        $this->view = strtolower($this->derive('theme')) . "/views/" . strtolower($this->derive('theme'));
        $this->base_url = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] . ":" : "http:")."//{$_SERVER['HTTP_HOST']}";
        $this->theme_assets = $this->base_url . "/admin/templates/" . $this->theme ."/assets";
        $this->assets = "//" . $_SERVER['HTTP_HOST'] . "/assets";
        $this->media = "//" . $_SERVER['HTTP_HOST'] . '/media/';
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
            $db_password = "pE89kP9Xn2dG4T65";
            $db_name = "future";
        }
        else {
            //the originals
            $db_host = 'db734211079.db.1and1.com';
            $db_user = 'dbo734211079';
            $db_password = 'Muslimat2018$!';
            $db_name = 'db734211079';
        }

        //constant
        $dbc = mysqli_connect($db_host, $db_user, $db_password, $db_name);
        $db_conn = new \PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

        return $db_conn;
    }

    function add_script_to_head($list_of_scripts)
    {
        $this->head_added_scripts = [];

        if (is_array($list_of_scripts)) {
            foreach ($list_of_scripts as $script) {
                $this->head_added_scripts []= $script;
            }
        }
        else {
            $this->head_added_scripts [] = $list_of_scripts;
        }
        
        return $this->head_added_scripts;
    }

    function add_script_to_footer($list_of_scripts)
    {
        $this->foot_added_scripts = [];

        if (is_array($list_of_scripts)) {
            foreach ($list_of_scripts as $script) {
                $this->foot_added_scripts []= $script;
            }
        }
        else {
            $this->foot_added_scripts [] = $list_of_scripts;
        }
        
        return $this->foot_added_scripts;
    }

    function hook($var) {
        $report = "";
        if (!empty($var) && is_array($var)) {
            foreach ($var as $script) {
                $report .= "\n". $script;
            }
            return $report;
        }
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
    
    function request_array($requested)
    {
        $res = explode("/", $requested);
        return $res;
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
    function admin_sidebar($page_title)
    {
        $sidebar_menus = array(
        array(
            'display' => 'Dashboard',
            'script' => 'dashboard.php',
            'icon' => 'fa fa-home nav_icon'
        ),

        array(
            'display' => 'Articles',
            'script' => 'post.php',
            'icon' => 'fa fa-file-text-o nav_icon',
        ),

        array(
            'display' => 'Comments',
            'script' => 'comments.php',
            'icon' => 'fa fa-comment nav_icon'
        ),
        array(
            'display' => 'Media',
            'script' => 'media.php',
            'icon' => 'fa fa-image nav_icon'
        ),
        array(
            'display' => 'Templates',
            'script' => 'templates.php',
            'icon' => 'fa fa-columns nav_icon'
        ),
        array(
            'display' => 'Plugins',
            'script' => 'plugins.php',
            'icon' => 'fa fa-list-ul nav_icon'
        ),

        array(
            'display' => 'Profile',
            'script' => 'profile.php',
            'icon' => 'fa fa-user nav_icon' 
        ),

        array(
            'display' => 'Settings',
            'script' => 'settings.php',
            'icon' => 'fa fa-cog nav_icon'
        )
    );

    //some manipulations to make adding more menu possible
    echo '<nav class="main-menu">
            <ul>
        ';

    foreach ($sidebar_menus as $menu) {
        echo 
        "<li " . ( ($page_title == $menu['display']) ? 'class="active"' : ''). ">" .
        
        "
			<a href=\"./{$menu['script']}\">
                <i class=\"{$menu['icon']}\"></i>
                <span class=\"nav-text\">
                    {$menu['display']}
                </span>
			</a>
        </li>
        ";
    }
    echo '
            </ul>
        </nav>';

    }
    function count_unread_comments(Type $var = null)
    {
        # code...
    }

    function total_comments(Type $var = null)
    {
        
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
                echo "<script>alert('Post Deleted!'); window.history.go(-1);</script>";
            }
            else {
                throw new \PDOException("Error Processing Request", 1); 
            }
        }catch(PDOException $e) {
            $db->rollBack();
        }
    }
    //set preference
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
        $content = $stmt->fetch(\PDO::FETCH_OBJ);

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
        $author = $stmt->fetch(\PDO::FETCH_OBJ);

        return $author;
    }

    function get_author_full_name($id, $letter_case = "sentence", $reverse = false)
    {
        $fname = $this->fetch_author($id)->author_fname;
        $lname = $this->fetch_author($id)->author_lname;

        if ($letter_case === "sentence") {     
            return ($reverse) ? ucwords($lname . " ". $fname) : ucwords($fname . " ". $lname );
        }
        elseif ($letter_case === "upper") {
            return ($reverse) ? strtoupper($lname . " ". $fname) : strtoupper($fname . " ". $lname );
        }
        elseif ($letter_case == "lower") {
            return ($reverse) ? strtolower($lname . " ". $fname) : strtolower($fname . " ". $lname );
        }
        else {
            return false;
        }
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

        $contents = $stmt->fetchAll(\PDO::FETCH_OBJ);
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
        else {
            $r = null;
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

    function set_theme($theme)
    {
        if ($this->set_preference('theme',$theme,'change')) {
            return true;
        }
        else {
            return false;
        }
    }

    function admin_authorize()
    {
        $username = $_POST['username'];

        $password = $_POST['password'];

        $redirect = !empty($_POST['redirect_to']) ? $_POST['redirect_to'] : "dashboard.php";

        $sql = "SELECT * FROM authors WHERE author_email = :username OR author_nick = :username AND author_password = SHA(:passkey)";

        $stmt = $this->db()->prepare($sql);

        if ($stmt) {
            $stmt->execute(array ('username' => $username,':passkey' => $password));
        }

        $result = $stmt->fetch(\PDO::FETCH_OBJ);

        if ($stmt->rowCount() == 1 && !empty($result)) {
            session_start();
            $_SESSION['username'] = $result->author_nick;
            $_SESSION['author_data'] = $result;
            header("Location: $redirect");
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
    //..
    function update_user_profile($id)
    {
        if ($this->is_post_request() && $_POST['password'] === $_POST['cpassword']) {
            $sql = "UPDATE `authors` SET `author_email`= :email,`author_fname`= :fname,`author_lname`= :lname,`author_bio`= :mybio,`author_timezone`= :timezone,`author_password`= SHA(:pass) WHERE `author_id`= :id";
            //stmt
            $stmt = $this->db()->prepare($sql);
            //
            if ($stmt) {
                $stmt->execute(
                    array(
                    ':email' => $_POST['email'],
                    ':fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    ':mybio' => $_POST['mybio'],
                    ':timezone' => $_POST['timezone'],
                    ':pass' => $_POST['password'],
                    ':id' => $id
                ));

                if ($stmt->rowCount() === 1) {
                    return $_SESSION['author_data'] = $this->fetch_author($id);
                }
            }
        }
        else {
            return false;
        }  
    }

    function set_author_pic_url($custom_name)
    {
        $sql = "UPDATE `authors` SET `author_pic_url` = :pic_url WHERE `author_id` = :id";
        $stmt = $this->db()->prepare($sql);
        if ($stmt) {
            $stmt->execute(
                array(
                    ':pic_url' => $custom_name,
                    ':id' => $_SESSION['author_data']->author_id
                )
            );

            if ($stmt->rowCount() === 1) {
                return true;
            }
            else {
                return false;
            }
        }
    }
    function get_author_pic_url($id)
    {
        return $this->fetch_author($id)->author_pic_url;
    }
    function public_header($page_title = "Hello Future", $meta="CMS")
    {
        $head = <<<EOD
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{$this->assets}/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="{$this->assets}/css/single.min.css">
        <link rel="stylesheet" href="{$this->assets}/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{$this->assets}/jquery-ui/jquery-ui.min.css">
        <link href="{$this->assets}/css/font-awesome.css" rel="stylesheet">
        <!-- bootstrap-css -->
        <link rel="stylesheet" href="{$this->assets}/css/bootstrap.css">
        <!-- //bootstrap-css -->
        <!-- Custom CSS -->
        <link href="{$this->assets}/css/colored-style.css" rel='stylesheet' type='text/css' />
        <!-- font CSS -->
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="{$this->assets}css/font.css" type="text/css"/>
        <title>$page_title</title>
        <script src="{$this->assets}/js/materialize.min.js"></script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> 
        <!-- //font-awesome icons --> 
        <script src="{$this->assets}/jquery-ui/jquery-ui.min.js"></script>
        <script src="{$this->assets}/js/jquery2.0.3.min.js"></script>
    </head>
EOD;
    echo $head;
}
    function admin_html_head($page_title = "Hello Future")
    {
        $head = <<<EOD
<!DOCTYPE html>
<head>
<title>$page_title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{$this->assets}/colored/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{$this->assets}/colored/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{$this->assets}/colored/css/font.css" type="text/css"/>
<link href="{$this->assets}/colored/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{$this->assets}/colored/js/jquery2.0.3.min.js"></script>
<script src="{$this->assets}/colored/js/modernizr.js"></script>
<script src="{$this->assets}/colored/js/jquery.cookie.js"></script>
<script src="{$this->assets}/colored/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="{$this->assets}/colored/js/raphael-min.js"></script>
<script src="{$this->assets}/colored/js/morris.js"></script>
<link rel="stylesheet" href="{$this->assets}/colored/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="{$this->assets}/colored/js/skycons.js"></script>
<!--//skycons-icons-->
{$this->hook($this->head_added_scripts)}
EOD;
        echo $head;
    }

    function add_js($dir, $assets = TRUE)
    {
        if ($assets === TRUE) {
            $add_js =  "<script src=\"{$this->assets}/$dir\"></script>";
        }
        else {
            $add_js = "<script src=\"$assets/$dir\"></script>";
        }
        return $add_js;
    }

    function add_css($dir, $assets = TRUE)
    {
        if ($assets === TRUE) {
            $add_css =  "<link rel=\"stylesheet\" href=\"{$this->assets}/$dir\" />";
        }
        else {
            $add_css = "<link rel=\"stylesheet\" href=\"$assets/$dir\" />";
        }
        return $add_css;
    }

    function admin_nav_section(Type $var = null)
    {
        $content = <<<EOD
        <body class="dashboard-page">
        <section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="./"><img src="{$this->assets}/colored/images/logo.png" alt="" />Future</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
									   <div class="user_img"><img src="{$this->assets}/colored/images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="{$this->assets}/colored/images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									</a></li>
									<li><a href="#">
									   <div class="user_img"><img src="{$this->assets}/colored/images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div> 
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>
							</li>	
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending tasks</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>	
										</div>
									   <div class="progress progress-striped active">
											 <div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending tasks</a>
										</div> 
									</li>
								</ul>
							</li>	
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="./settings.php"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="./profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="./logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>

EOD;
        echo $content;
    }

    function footer()
    {
        $footer = <<<EOD
        <div class="footer">
			<p>&copy; 2018 <a href="http://fxnigeria.com" title="FutureX Media Inc.">FutureX Media Inc.</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="{$this->assets}/colored/js/bootstrap.js"></script>
    <script src="{$this->assets}/colored/js/proton.js"></script>
    {$this->hook($this->foot_added_scripts)}
</body>
</html>
EOD;
        echo $footer;
    }

}
//single instance philosophy
$future = new Future();
$f = $future;
$app = $future;