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
				<h3>Blog</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active"><?=$article->post_title?></li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->

		<main class="site-main">
		
			<!-- Blog Single -->
			<div class="container-fluid no-left-padding no-right-padding blog-single">	
				<!-- Container -->
				<div class="container">
					<!-- Content Area -->
					<div class="col-md-9 col-sm-6 col-xs-12 content-area">
						<!-- Type Post -->
						<article class="type-post">
							<div class="entry-header">
							<?php
							if (!empty($article->post_img)) {
								?>
								<img src="<?=$f->media . "images/" . $article->post_img?>" alt="<?=$article->post_title?>" />
								<?php
							}
							?>
								<div class="post-date"><a href="#">14 <span>OCT</span></a></div>
							</div>
							<h3 class="entry-title"><?=$article->post_title?></h3>
							<div class="entry-meta">
								<span class="byline"><a href="#"><?=$f->get_author_full_name($article->author_id)?></a></span>
								<span class="post-category"><a href="#">Bible Study</a></span>
							</div>
							<div class="entry-content">
								<?=$article->post_body?>
							</div>
							<div class="about-author">
								<i><img src="<?=$future->media . "images/" . $f->get_author_pic_url($article->author_id)?>" alt="About Author" height="65" width="65" /></i>
								<h3><?=$f->get_author_full_name($article->author_id)?></h3>
								<p><?=$f->fetch_author($article->author_id)->author_bio?></p>
							</div>
							<div class="social-share">
								<h3>Did You Like This Post? Share It:</h3>
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
								<div class="post-control">
									<a href="article1.html"><i class="fa fa-angle-left"></i> Prev</a>
									<a href="article3.html">Next <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</article><!-- Type Post /- -->
						
						<!-- Comment Area -->
						<div id="comments" class="comments-area">
							<h2 class="comments-title">Comments</h2>
							<ol class="comment-list">
								<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
									<div class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img alt="img" src="<?=$future->theme_assets?>/images/male.jpg" class="avatar avatar-72 photo"/>
												<b class="fn">Jesulayomi Omotosho</b>
											</div>
											<div class="comment-metadata">
												<a href="#">Sep 20,2017</a>											
											</div>
										</footer>
										<div class="comment-content">
											<p>Blanaced diet for the spirit.</p>
										</div>
										<div class="reply">
											<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
										</div>
									</div>
									<ol class="children">
										<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
											<div class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img alt="img" src="<?=$future->theme_assets?>/images/male.jpg" class="avatar avatar-72 photo"/>
														<b class="fn">Ladejobi Blessing</b>
													</div>
													<div class="comment-metadata">
														<a href="#">Sep 29,2017</a>											
													</div>
												</footer>
												<div class="comment-content">
													<p>Am richly blessed.</p>
												</div>
												<div class="reply">
													<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
												</div>
											</div>
										</li>
									</ol>
								</li>
								<li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
									<div class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img alt="img" src="<?=$future->theme_assets?>/images/female.png" class="avatar avatar-72 photo"/>
												<b class="fn">Olosunde Busola</b>
											</div>
											<div class="comment-metadata">
												<a href="#">Oct 20,2017</a>											
											</div>
										</footer>
										<div class="comment-content">
											<p>The unmerited grace of God. Thanks for the words.</p>
										</div>
										<div class="reply">
											<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
										</div>
									</div>
								</li>
							</ol><!-- .comment-list -->
							<!-- Comment Form -->
							<div id="respond" class="comment-respond">
								<h2 class="comment-reply-title">Write Comments</h2>
								<form method="post" id="commentform" class="comment-form row">
									<div class="col-md-5 col-xs-12">
										<p class="comment-form-author">
											<input id="author" name="author" placeholder="Name*" required="required" type="text"/>
										</p>
										<p class="comment-form-phone">
											<input id="url" name="url" placeholder="Phone Number" type="text" />
										</p>
										<p class="comment-form-email">
											<input id="email" name="email" placeholder="Email Id*" required="required" type="email"/>
										</p>
									</div>
									<div class="col-md-5 col-xs-12">
										<p class="comment-form-comment">
											<textarea id="comment" name="comment" rows="8" placeholder="Message*" required="required"></textarea>
										</p>
									</div>
									<div class="col-md-2 col-xs-12">
										<p class="form-submit">
											<input name="submit" class="submit" value="Send" type="submit"/>
										</p>
									</div>
								</form>
							</div><!-- Comment Form /- -->
						</div>
						<!-- Comment Area -->
						
					</div><!-- Content Area /- -->
					
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-6 widget-area">
						<!-- Widget : Search -->
						<aside class="widget widget_search">
							<h3 class="widget-title">search box</h3>
							<form method="get" class="searchform" action="#">
								<div class="input-group">
									<input placeholder="Search Heare" class="form-control" required="" type="text"/>
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
						</aside><!-- Widget : Search /- -->
						<!-- Widget : Categories -->
						<aside class="widget widget_categories">
							<h3 class="widget-title">Catagories</h3>
							<ul>
								<li><a href="#">Inspirational</a></li>
								<li><a href="#">Bible Study</a></li>
								<li><a href="#">Discipleship</a></li>
								<li><a href="#">Christian Comedy</a></li>
								<li><a href="#">News</a></li>
							</ul>
						</aside><!-- Widget : Categories -->
						<!-- Widget : Latest Post -->
						<aside class="widget widget_latestposts">
							<h3 class="widget-title">latest news</h3>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-1.jpg" class="wp-post-image" alt="blog-1" height="100" width="85"></i></a>
								<h5><a title="Choir Concert" href="#">Choir Concert</a></h5>
								<span><a href="#">January 20,2018</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-2_.jpg" class="wp-post-image" alt="blog-1" height="100" width="85"></i></a>
								<h5><a title="Writers' Club" href="#">Opportunity to join the CWC(Chapel Writers' Club)</a></h5>
								<span><a href="#">January 29,2018</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="<?=$future->theme_assets?>/images/ftr-wd-lp-3.jpg" class="wp-post-image" alt="blog-1" height="100" width="85"></i></a>
								<h5><a title="Art Group" href="#">Opportunity to join the Art Group</a></h5>
								<span><a href="#">January 29,2018</a></span>
							</div>
						</aside><!-- Widget : Latest Post /- -->
						<!-- Widget : Text -->
						<aside id="text" class="widget widget_text">
							<h3 class="widget-title">TEXT WIDGETS</h3>
							<div class="textwidget">
								<p>Life is like a piano with white and black keys. We play both keys to produce melody. Challenges of life are black keys which are there to help us in producing our melody</p>
							</div>
						</aside><!-- Widget : Text -->
						<!-- Widget : Categories -->
						<aside class="widget widget_archive">
							<h3 class="widget-title">BLOG archives</h3>
							<ul>
								<li><a href="#">September</a> (20)</li>
								<li><a href="#">October</a> (14)</li>
								<li><a href="#">November</a> (24)</li>
								<li><a href="#">December</a> (03)</li>
							</ul>
						</aside><!-- Widget : Categories -->
						<!-- Widget : Tags -->
						<aside id="tag_cloud" class="widget widget_tag_cloud">
							<h3 class="widget-title">Tags</h3>
							<div class="tagcloud">
								<a href="#" title="Law">Writer Club</a>
								<a href="#" title="Lawyers">Couples</a>
								<a href="#" title="Justicer">Mission's Team</a>
								<a href="#" title="Criminal law">Art</a>
								<a href="#" title="Family law">Fellowships</a>
								<a href="#" title="Diverse Law">Study</a>
							</div>
						</aside><!-- Widget : Tags /- -->
					</div><!-- Widget Area /- -->
				</div><!-- Container /- -->
			</div><!-- Blog /- -->
			
		</main>
	
    </div>
    <?php
    require dirname(__DIR__) . "/includes/umca.footer.php";