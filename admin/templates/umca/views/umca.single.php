<?php
$article = $future->pull_content($requested);
$post_title = $article->post_title;
require dirname(__DIR__) . "/includes/umca.header.php";
?>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->	
	
	<!-- Header Section -->
	<header class="header_s header_s1">
		<!-- SidePanel -->
		<div id="slidepanel">
			
			<!-- Top Header -->
			<div class="container-fluid no-right-padding no-left-padding top-header">
				<!-- Container -->
				<div class="container">						
					<div class="top-left">
						<p><i class="fa fa-map-marker"></i>Off University Road, Tanke,Ilorin, Kwara State, Nigeria </p>
						<p><i class="fa fa-phone"></i> Mobile: <a href="tel:+234-703-3661-965"> +234-703-3661-965</a></p>
					</div>
					<div class="top-login">
						<p><i class="fa fa-user"></i><a href="#" title="Login">Login</a></p>
						
						<!--form class="lang-dropdown">
							<div class="form-group">
								<div id="basic" data-input-name="country"></div>
							</div>
						</form-->
					</div>
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
		</div><!-- SidePanel /- -->
		
		<!-- Ownavigation -->
		<nav class="navbar ownavigation">
			<!-- Container -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="<?=$future->theme_assets?>/images/logo.png" alt="logo" height="75" width="75"></a>
				</div>
				<div class="submit-btn">
					<a href="#" title="SignUp">Register as Member</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="index.html" title="Home">Home</a>
							<!--i class="ddl-switch fa fa-user"></i>
							<ul class="dropdown-menu">
								<li><a href="index.html" title="Homepage 01">Homepage 01</a></li>
								<li><a href="index.html" title="Homepage 02">Homepage 02</a></li>
							</ul-->
						</li>
						<li><a href="leadership.html" title="Leadership">LeaderShip</a></li>
						<li class="dropdown">
							<a href="fellowships.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Fellowships</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li>
									<a href="mensFellowships.html" title="Men's Fellowship">Men's Fellowship</a>
								</li>
								<li>
									<a href="ladiesFELLOWSHIP.html" title="Services List">Ladies's Fellowship</a>
								</li>
								<li>
									<a href="fellowships.html" title="Services">Couple's Koinonia</a>
								</li>
								<li>
									<a href="foyca.html" title="Fellowship of Young Christain Adult">FOYCA</a>
								</li>
								<li>
									<a href="fellowships.html" title="Services">Youth Fellowship</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="department.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Departments</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<!--ul class="dropdown-menu">
								<li><a href="fellowships.html" title="Dunamis Choir">Dunamis Choir</a></li>
								<li><a href="ladiesFellowship.html" title="Ushering">Ushering</a></li>
								<li><a href="fellowships.html" title="Drama Unit">Drama Unit</a></li>
								<li><a href="fellowships.html" title="Writers' Unit">Writers' Unit</a></li>
								<li><a href="fellowships.html" title="Arts Unit">Arts Unit</a></li>
								<li><a href="fellowships.html" title="Sunday School">Sunday School</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle btn-disabled" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="blog.html" title="Blog Single Page">Blog</a></li>
								<li><a href="blog-single.html" title="Blog Single Audio">Others</a></li>
							</ul>
						</li-->
						<li><a href="aboutus.html" title="About">About</a></li>
						<!--li><a href="contactus.html" title="Contact Us">Contact</a></li-->
					</ul>
				</div>
				<div id="loginpanel" class="desktop-hide">
					<div class="right" id="toggle">
						<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
						<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
					</div>
				</div>
			</div><!-- Container /- -->
		</nav><!-- Ownavigation /- -->
		
	</header><!-- Header Section /- -->	

	<div class="main-container">
	
		<!-- Page Banner -->
		<div class="container-fluid no-left-padding no-right-padding page-banner">
			<!-- Container -->
			<div class="container">
				<h3>Blog <span>Article2</span></h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active" style="background-color: #fff;padding: 5px">PARTNERING WITH OUR HUSBANDS IN MINISTRY WHILE EDUCATING OURSELVES AND REMAINING HOME KEEPERS</li>
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
								<img src="<?=$future->theme_assets?>/images/blog-1.jpg" alt="Blog" />
								<div class="post-date"><a href="#">14 <span>OCT</span></a></div>
							</div>
							<h3 class="entry-title">PARTNERING WITH OUR HUSBANDS IN MINISTRY WHILE EDUCATING OURSELVES AND REMAINING HOME KEEPERS</h3>
							<div class="entry-meta">
								<span class="byline"><a href="#">LADIE'S FELLOWSHIP</a></span>
								<span class="post-category"><a href="#">Bible Study</a></span>
							</div>
							<div class="entry-content">
								<b>PARTNERING</b>

<p>God plans and desires that husbands and wives be partners in their ministry. The implication of this principle is that for a man in life or ministry to be fulfilled in God’s sight, he must work in partnership with his wife, likewise the woman. This places great emphasis on the roles of wives to the ministries of their husbands. A role that not so many are opportune to play. According to Barbara, “every minister’s wife  should note and be well convinced of the fact that it is a very special and unique privilege that out of over six billion humans all over the world, God has chosen just a few for this vocation: being a minster’s wife”. To this, the Bible saying is fitting: …this honour no one takes to himself… This being so, it becomes needful to “guard against an attitude of entitlement”, she adds. We should remain grateful to God for the honour.

Certainly, it is not only a position of honour but also of great privileges, however, we are not only to seek to enjoy the honour that is attached to it. It is needful to appreciate the rare privilege of ministering to many lives committed to us by the Lord. The great privilege is being entrusted with God’s people to love and serve them. This being so, as ministers’ wife we should look unto God, who is the sender and joyfully do this noble job. This is particularly important as we know that we will give account of anything entrusted to us. The Lord, who is the Sender, would certainly make it bearable as we follows His dictates.

To be able to succeed in partnering with our husbands, we must learn the secret of dwelling in the secret place – the presence of the Lord (Psa 91:1). The presence of the lord, is a place that we must never neglect. It is a place where we daily receive ‘briefs’ from God. There we learn from God and speak to God. This is achieved through constant reading and studying of the word of God.

Furthermore, this is important because the ways of the Lord differ to that of man. Also each man differs from another.so if we will have to serve God in the lives of men, then one must constantly be before Him in prayers and studying His words. As we develop in this act, He deposits into our spirits what then becomes strength to us such that in times of difficulty, we would have been well equipped to face the challenges. The life of Jesus is a very clear example of this. Scriptures testified that he woke up many times before day break to be with His father. This He did at different times of the day and night as well (Mark 1:35; Luke 6:12; 22:39-41). Little wonder, God accomplished His purpose all the time by His hand and life.

Next, right from the beginning of creation, God instituted home and intends the couple to work as a team (Gen 1:28). A team is a unit of two or more individuals who interact interdependently to achieve a common objective. The contributions combine to dictate overall performance outcome for the team. When both are committed to the objective, which is the goal that God has set for them, the quantity and quality of the output get multiplied. There is no way that God’s intended goals given to couples will not be achieved if they both learn to agree with God and walk together. The outcome as started above is great abundant harvest (Eccl 4:9).

Furthermore, the foundational   principles of partnering between husband and wife is based on this God’s point of view in Genesis 2:18-25. Here, we discover that among all the creatures made by God, no one was made to fit into a man as a suitable help except the woman, his wife. This was a part of him that God made to become a help to him. As a result of this, each of them became probably competent but certainly not complete without the contribution of the other.

There would always be a missing gap in a husband’s calling if the wife does not make herself available or the husband is not giving her room to fit into this ‘gap’. It is Gods counsel and wisdom that a wife should assist the husband; she is not to compete `with Him. For this reason, she should be humble, submissive to and love him (1Cor 11:3). We are given opportunities to be wives to them not defiance, our lives is to bring blessings to them (2Cor 3:4-5).

Our roles would usually inter-wine and compliment that of our husbands’ position. Example of this include love to fellow staff or colleagues of our husbands. Also, reaching to others within the places we are called to serve; doing things in a way that others can be influenced for good. Attend meetings with children and that promptly. Support them by providing physical and emotional needs e.g. pray for them, encourage adequate rest, overlooking their faults, and treat them as treasures. Evaluate and make amends; speak words that will encourage him rather than discourage or destroy him.

Finally on partnering with our husbands, the biblical basis of oneness in ministry is very important. The place of communications in bring about oneness in marriage cannot be over emphasized. Communication between a husband and wife brings about common understanding that produces oneness in ministry. There would not be agreement if communication is lacking.</p>
<b>EDUCATION</b><p>
	However, to be effective in partnering with one’s husbands in ministry, getting oneself educated is very basic and essential. This aspect, gives a broad explanation on the schooling of a minister’s wife with relevance to secular or theological training. 2Timothy 2:15 points to the fact that the Bible clearly commands and encourages His servants in the vineyard, including the minister’s wife, to be schooled.

Untrained servants of God could be a hindrance and a damage to the overall development program of the church. She may be sincere but at the same time putting things upside down because of lack of required knowledge. God wants the minister’s wife to be acquainted with the Christian doctrines, not only in the Bible times but to be able to apply such knowledge to the modern world. How can she do this without been educated? Education is an eye opener and it equips man for the proper performance of the duties of life.

The importance of training in the life of a minister’s wife could be highlighted as shown below:  She needs to study in order to grow as a Christian. This brings improvement to her spiritual life and invariably, that of the congregation. Another importance is that training brings about increased capacity to solve complex human problems. There are two ways to describe how the minister’s wife can be educated. She can be taught directly by the Holy Spirit and also, she can be taught of God through her fellow men.

There are certain fundamental truths that a ministers’ wife should study. Inclusive of these are the Bible. We should get acquainted with and cultivate interest in Bible geography, get acquainted with the history of the compilation of the Bible into one book (Canonicity) among others. Basically, there are other subjects of interest within the theological setting and out of it that will prove relevant to the ministers’ wife. All these are needful to prepare the mind to become very sound and ready to confront the world we have been called to serve with the backing of the Holy Spirit. We could develop ourselves by forming the habit of personal reading and studies. The husband could assist in choosing good books both in the Christian faith and secular world that will develop the wife for the task ahead.

Finally, on issue of education, a minster’s wife must be ready to learn great lessons from circumstances/challenges of life. Life furnishes one with practical lessons. God also teaches His people through experiences, trials and difficult circumstances. Usually, behind every trial there are great spiritual lessons to learn.
</p>		
<b>KEEPING THE HOME</b><p>
	It is important to stress the fact that the home occupies a central place in God’s purpose here on earth. The home is the first and fundamental team set up by God to do His work here on earth. Churches, tribes and societies are made up of many families put together. Whatever affects the family affects the church and the nation, more especially, the minister’s home. If the minister and his wife become careless in building their home according to God’s laid down pattern through His principles as clearly laid down in the Bible, the effect is soon becomes glaring and this surely affects the work to which they have been called. When the home is broken down or sick, whatever we do outside will not be effective.

It should be noted that the building and keeping of a home has been largely divinely committed into the hands of women (Pro 14:1). She could build her home or tear it apart or down. God has inputted great potentials for the role of home keeping in every woman. We need to get sharpened through the help of the Holy Spirit and the counsel of elderly and experienced women (Titus 2:3-5). As such, pastors’ wives who are also meant to be examples to other women should allow God to so help them to build their homes along with their husbands in such  a way that God is glorified.

Home can only be built when the woman is available at home. According to Sade Akanni (2015) one of the main reasons for the establishment of the home was to be the seed-bed for nursing and raising children in godly way. There are numerous instances in the Bible where children who became great men of God were raised in a godly family setting. Our perfect example, Jesus Christ was one. Minister’s wife is expected to take care of business at home life. Facilitate order to the affairs of the home. She is not meant to take over the position/role of the husband, rather she is to be by his side. That is where she is fitted best to carry out her duties. She needs to demonstrate a firm believe in her husband; this should be known through our actions. She should always be in love with her husband and allow him to know this. She needs to think of him as many times as possible and allow God to inspire her on what she can contribute and how to make the burden lighter from the home front. Prayer and intercession for them and the children is very important duty of the wives.

First, the salvation of the children must be ascertained and encouraged to grow in the grace of Christ Jesus our Lord. Many have preconceived expectations that minister’s children fail and do not do well, we need to pray and trust God that, that will not come true in the lives of our own children. Minister’s wives should learn under God to discipline their children when there is need to do so. They should not be allowed to take decisions by themselves without providing adequate guide, especially when they are not yet ripe for such (Pro 20:11,30; 20:15-17; 22:15; 23:13-14).
</p><b>The following are crucial note:</b>	
<ul>
	<li>Do not defend your child all the time. If they are trained wrongly, most often they will bring embarrassment back to the home.</li>
	<li>They should be trained in ways that will help them relate well with others</li>
	<li>Teach them to love, honour church and the work of God that their father is involved in.</li>
	<li>Do not allow them to feel that they are unfortunate to have a Pastor for a father.</li>
	<li>Let them hear our views in life, our hearts and hear theirs too.</li>
	<li>They should be taught that success in life begins by always submitting ones plans to God.</li>
</ul>	
<p>The minister’s wife should remember that it is from home, that she is meant to serve as God’s workshop for the approval of anyone who would become a vessel for His use. The home should be in such a way that it is conducive for all to have as a resting place, it should be neat and organized, available for those that God might send in to have a place of anchor. It should be a place where spiritual, physical, material and emotional needs of all are met as we receive from God.</p>				<b>CONCLUSION</b>
<p>It is very important for a minister’s wife to know that it is God’s plan and intention for every married couple in ministry to couple in life and ministry. We noted that it is a great privilege in that out of the abundant members of human beings on earth, the few that are ministers have been called to serve in the lives of the rest. To be effective in this role of a suitable partner, in this contemporary time, educating ourselves in God approved ways to be made fit for the role is important.

However, home should never be neglected since it is very clear that women are assigned by God as the pivots in the home to be keepers at home. They must watch over the household and pay attention to the needs of their husbands and children. Praying and labouring over the family until their righteousness goes forth as brightness and their salvation as a lamp that burns. Therefore, to get the best out of this great calling, every minister’s wife should see herself as a suitable partner to her husband but not taking over her husband’s role or just enjoying the accrued benefits alone.

References

Akanni G (2000) The Kingdom Life Style: A collection of Bible Study outlines from peace House Discipleship work.Peace House Press, Gboko Benue State. ISBN 978-33002-6-1

Akanni S (2015) Christian woman and family life: A collection of Bible Study Outlines from Peace House Women Outreach Labour. Peace house press, Gboko Benue state. Pg.14-25.

Floyd J (2010) 10 Things every minister’s wife needs to know. Elojoe Nigeria Enterprises (Publishing Division) Apapa, Lagos Nigeria. ISBN 978-35181-9-4

Onwuka J. A. (2002) The True Minister of God. Africa Christian Textbooks (ACTS) Plateau State, ISBN 978-978-905-090-3. Pg. 147-174.

https://en.m.wikipedia.org/wiki/Team_composition  – Retrieved on 13th April, 2017.

Mrs. Adenike Olusegun</p>
							</div>
							<div class="about-author">
								<i><img src="<?=$future->theme_assets?>/images/male.jpg" alt="About Author" /></i>
								<h3>COUPLE KOINONIA</h3>
								<p>Nothin's gonna turn us back now. Straight ahead and on the track now.We're gonna make our dreams come true. We're gonna do it. On your mark get set and go now.</p>
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