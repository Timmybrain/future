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
						<button id="new_user_button" title="New User" type="button" class="btn btn-dark">New User</button>
					</h2>
					
				</div>
				
				<div class="blank">
					<div class="blank-page">
                        <div class="list-group">
						<?php
						foreach ($users as $user) {
                            ?>
                            <li href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?=$app->get_author_full_name($user->author_id)?> <small class="left"><?=$user->level_title?></small></h5>
                            </div>
                            <p class="mb-1"><?=$user->author_bio?></p>
                            <small><a href="./user-edit.php?user=<?=$app->encrypt($user->author_email)?>">Edit Profile</a></small>
                            </li>

                            <?php
                        }
						?>
					</div>
			   </div>
				<!-- //blank-page -->
			</div>
		</div>
		<script>
		$(document).ready(function () { 
			$("#new_user_button").click(function () { 
				window.location.href = "./user-new.php";
			 });
		 });
		</script>
		
		<!-- footer -->
		<?=$future->footer();?>