<?php
$page_title = "Login";
require "app/app.php";
$future = new FX\CMS\Future();

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $future->admin_authorize();
}
$future->admin_header($page_title);
?>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form action="." method="post">
					<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
					<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<input type="submit" class="register" value="Login">
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"> Forgot Password? </a></p>
					</div>
					<div class="text-right">
						<p><a href="signup.html"> Create New Account</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<h5>- OR -</h5>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<a href="index.html">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© <?=date('Y')?> FutureX Media All Rights Reserved</p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="js/proton.js"></script>
</body>
</html>
