<?php
require "app/app.php";
$page_title = "Profile";
$future->admin_html_head($page_title);
$future->admin_sidebar($page_title);
$future->admin_nav_section();
?>
<div class="main-grid">
			<div class="agile-grids">	
				<div class="progressbar-heading grids-heading">
						<h2><?=$page_title?></h2>
					</div>
				<!-- blank-page -->
				<div class="banner">
					<h2>
						<a href="./">Admin</a>
						<i class="fa fa-angle-right"></i>
						<span><?=$page_title?></span>
					</h2>
				</div>
				
				<div class="blank">
					<div class="blank-page">

					</div>
			   </div>
				<!-- //blank-page -->
			</div>
		</div>
		
		<!-- footer -->
			<p><?=$future->footer()?>