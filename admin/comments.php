<?php
//import future
require "app/app.php";
// I NEVER WAS, I AM ALWAYS TO BE, NO ONE EVER SAW ME OR EVER WILL AND YET I AM FOR COMFORT OF ALL WHO LIVE AND BREATH.
$page_title = "Comments";
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
						<a href="index.html">Admin</a>
						<i class="fa fa-angle-right"></i>
						<span><?=$page_title?></span>
					</h2>
				</div>
				
				<div class="blank">
					<div class="blank-page">
						<p>
						<?php
						require "includes/admin-comment-home.php";
						?>
						</p>
					</div>
			   </div>
				<!-- //blank-page -->
			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			<p><?=$future->footer_credit()?></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="<?=$future->assets?>/js/bootstrap.js"></script>
	<script src="<?=$future->assets?>/js/proton.js"></script>
</body>
</html>