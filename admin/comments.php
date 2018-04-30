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
						$comments = $f->fetch_comments();
						echo "<ul class=\"collection\">\n";

						foreach ($comments as $comment) {
							$frame = <<<EOD
							<li class="collection-item">{$comment->comment_body}</li>\n
EOD;

						echo $frame;
						}
						echo "</ul>";
						?>
						</p>
					</div>
			   </div>
				<!-- //blank-page -->
			</div>
		</div>
		
		<!-- footer -->
		<?=$future->footer()?>
		