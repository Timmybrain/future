<?php
require "app/app.php";
$page_title = "Profile";
$app->is_admin();
$app->add_script_to_head("<!-- Nothing for now! -->");
$app->admin_html_head($page_title);
$app->admin_sidebar($page_title);
$app->admin_nav_section();
$users = $future->fetch_authors();
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
						foreach ($users as $user) {
                            echo "<li>$user->author_fname</li>";
                        }
						?>
						</p>
					</div>
			   </div>
				<!-- //blank-page -->
			</div>
		</div>
		
		<!-- footer -->
		<?=$future->footer()?>