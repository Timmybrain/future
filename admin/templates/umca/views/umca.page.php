<?php
$article = $future->pull_content($requested);
$post_title = $article->post_title;
require dirname(__DIR__) . "/includes/umca.header.php";
?>
	<div class="main-container">
	
		<!-- Page Banner -->
		<div class="container-fluid no-left-padding no-right-padding page-banner">
			<!-- Container -->
			<div class="container">
				<h3><?=$post_title?></h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Fellowships</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
			
		<main class="site-main">
			<!-- Services Section -->
			<div class="container-fluid no-left-padding no-right-padding services-section no-top-padding">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header text-center">
						<h3><?=$post_title?></h3>
					</div>

					<div class="main-container">
						<div class="container" style="box-shadow: 3px 3px 5px #999;margin-bottom: 10px;margin: 1px solid grey;padding: 20px;border: 1px solid #e3e3e3;font-size: 17px; ">
							<div class="entry-header">
								<?php
								if (!empty($article->post_img)) {
									?>
									<center>
										<img src="<?=$f->media . "images/" . $article->post_img?>" alt="<?=$article->post_title?>" />
									</center>
									<?php
								}
								?>
							</div>
							
							<div class="entry-content">
								<?=$article->post_body?>
							</div>
						</div>					
				</div><!-- Container /- -->			
		</main>
	
	</div>
	<?php
	require dirname(__DIR__) . "/includes/umca.footer.php";