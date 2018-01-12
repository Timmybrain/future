<?php
require "includes/company.header.php";
require "includes/company.navmenu.php";
$contents = $future->pull_blog_contents(3);
?>

<div class="banner-wrapper">
  <div class="row">
    
  </div>
  <div class="clear"></div>
  <div class="banner">
    <div class="banner-bg">
      <div class="panel">
        <div class="title">
          <h1>Exceptional <br />
            vestibulum ut semper</h1>
        </div>
        <div class="content">
          <p>Nulla sapien vestibulum ut semper <br />
            Pellentesque habitant morbi.</p>
        </div>
        <div class="banner-button"><a href="#">Primi ipsum dolor</a></div>
      </div>
      <div class="banner-img">
	  	<div id="carousel">
		<div id="slides">
				<ul>
						<li><img src="<?=$future->theme_assets?>/images/banner-img3.png"  alt="Slide 3"/></li>
						<li><img src="<?=$future->theme_assets?>/images/banner-img1.png"  alt="Slide 1"/></li>
						<li><img src="<?=$future->theme_assets?>/images/banner-img2.png"  alt="Slide 2"/></li>
						
						
				</ul>
				<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div id="buttons"> <a href="#" id="prev">prev</a> <a href="#" id="next">next</a>
				<div class="clear"></div>
		</div>
</div>
	  
	  </div>
    </div>
  </div>
</div>
<!-- end of BANNER WRAPPER -->
<div class="page">
  <div class="boxs1">
    <div class="panel">
      <div class="title">
        <h1>ENOCH MILAS</h1>
        <h2>Cheif Financial Officer</h2>
      </div>
      <div class="panel-img"><img src="<?=$future->theme_assets?>/images/img1.jpg" alt="" /></div>
      <div class="content">
        <p>Tongue condimentum ipsum. Integer et enim a massa dictum congue urabit.</p>
      </div>
      <div class="controller">
        <div class="buttons">
          <h2><a href="#">MORE</a></h2>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="boxs2">
    <div class="panel">
      <div class="title">
        <h1>TIMMY BRAIN</h1>
        <h2>Cheif Executive Officer</h2>
      </div>
      <div class="panel-img"><img src="<?=$future->theme_assets?>/images/TimmyBrain.jpg" alt="" /></div>
      <div class="content">
        <p>Aliquam cursus ultrices gravida. Maecenas nisl leo, lobortis nec egestas sodales.</p>
      </div>
      <div class="controller">
        <div class="buttons">
          <h2><a href="#">MORE</a></h2>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="boxs3">
    <div class="panel">
      <div class="title">
        <h1>BAMIGBADE JOSHUA</h1>
        <h2>Chief Marketing Officer</h2>
      </div>
      <div class="panel-img"><img src="<?=$future->theme_assets?>/images/img3.jpg" alt="" /></div>
      <div class="content">
        <p> Vestibulum et justo massa. Pellentesque habitant morbi tristique senectus.</p>
      </div>
      <div class="controller">
        <div class="buttons">
          <h2><a href="#">MORE</a></h2>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<!-- end of BOX WRAPPER -->
<div class="page padding-bottom">
  <div class="content_wrap">
    <div class="left-panel">
      <?php
      foreach ($contents as $content) {
        ?>
        <div class="panel">
        <div class="title">
          <div class="icons"><img src="<?=$future->theme_assets?>/images/arrow-icons.png" alt="" /></div>
          <h1><?= $content->post_title ?></h1>
          <h2><?= $content->post_subtitle ?></h2>
        </div>
        <div class="content">
          <p><?= $content->post_body ?></p>
        </div>
        <div class="controller">
          <div class="buttons">
            <h2><a href="<?= $content->post_url ?>">MORE</a></h2>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
        <?php
      }
      ?>
    </div>
    <div class="right-panel">
      <div class="contact-panel">
        <div class="title">
          <h1>PROIN A RISUS</h1>
          <h2>Vestibulum suscipit nib</h2>
        </div>
        <div class="form">
          <ul>
            <li>
              <input type="text"  class="text-field" value="your name here"/>
            </li>
            <li>
              <input name="" type="text"  class="text-field" value="your email  here"/>
            </li>
            <li>
              <textarea name="" cols="" rows="" class="textarea">your message  here
</textarea>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="controller">
          <div class="buttons">
            <h2><a href="#">SUBMIT</a></h2>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div class="panel martop">
        <div class="title">
          <h1>DUIS AT LACUS</h1>
          <h2>Sed sagittis mi scelerisque</h2>
        </div>
        <div class="content">
          <ul>
            <li><a href="#">Posuere justo velitet laotinoc us</a></li>
            <li><a href="#">Donec egestas diam sed odiotio</a></li>
            <li><a href="#">Integer eu nibh vitae massa kun</a></li>
            <li><a href="#">Lorem ipsum dolor sit amet, con</a></li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
      <div class="contact-panel padding-bottm">
        <div class="title">
          <h1>ALIQUAM ADIPIS</h1>
          <h2>Suspendisse ut urna enim</h2>
        </div>
        <div class="search">
          <ul>
            <li class="libg">
              <input type="text" class="search-filed" value="search here..."/>
            </li>
            <li><img src="<?=$future->theme_assets?>/images/search-bt.jpg" alt="" /></li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- end of BOX WRAPPER -->
  <div class="clear"></div>
</div>
<?php
require "includes/company.footer.php";