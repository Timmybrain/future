<!-- The SECTION -->
<div class="row">
    <!-- 8 of 12 -->
    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="form-group">
                    <input type="text" class="form-control round" placeholder="Post Title">
                </div>
            </div>

            <!-- CKEDITOR container -->
            <div class="panel-body">
                <textarea name="" id="editor1">
                    <h1>Hello World!</h1>
                </textarea>
            </div>
            <!-- //CKEDITOR container -->

            <!-- panel footer -->
            <div class="panel-footer">
                <div class="row">
                    <!-- The Page/Blog button -->
                    <div class="col-md-3 row">
                        <div class="col-md-3 col-sm-3">page:</div>
                        <div class="col-md-9 col-sm-9">
                            <label class="switch">
                                <input type="checkbox" name="post_type">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <!-- //The Page/Blog button -->

                    <!-- The url text-input -->
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2">url:</label>
                            <div class="col-md-10">
                                <input class="form-control" name="post_url" type="text"  id="post_url_box">
                            </div>
                        </div>
                    </div>
                    <!-- The url text-input -->

                </div>
                <!-- // panel footer ends -->
            </div>
        </div>
    </div>
    <!-- // 8 of 12 -->

    <!-- 4 of 12 -->
    <div class="col-md-4">
        <div class="text-center">
            <h6>Featured Image</h6>
            <div id="body-overlay">
                <div>
                  <img src="<?=$future->media . "images/loading.gif"?>" width="64px" height="64px"/>
                </div>
            </div>
          <div class="bgColor">
            <form id="uploadForm" action="upload.php" method="post">
            <div id="targetOuter">
              <div id="targetLayer">
                <img src="<?= $future->media . "images/". $future->get_author_pic_url($_SESSION['author_data']->author_id); ?>" width="200px" height="200px" class="upload-preview" />
              </div>
              <img src="<?=$future->media . "images/photo.png"?>"  class="icon-choose-image" />
              <div class="icon-choose-image" >
              <input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
              </div>
            </div>
            <div>
            <input type="submit" value="Upload Photo" class="btnSubmit" />
            </form>
          </div>
          </div>
        </div>

    </div>
</div>
<!-- The SECTION -->