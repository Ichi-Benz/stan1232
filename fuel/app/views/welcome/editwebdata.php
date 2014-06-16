
<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Text</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="container">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="row">
                    <div class="form-group col-md-11">

                            <label for="mainheading">Heading</label>
                        <p class="help-block">HTML works here (JS/CSS too!)! Type &lt;br&gt; to break a paragraph</p>
                            <textarea class="ckeditor" name="mainheading" id="mainheading" class="form-control"><?php echo $webdata['mainpage_heading'];?> </textarea>

                    <label for="maincontent">Main Page</label>

                    <textarea  class="ckeditor"  id="maincontent" name="maincontent" rows="10" class="form-control"><?php echo $webdata['mainpage'];?> </textarea>

                    </div>
                    </div>
<hr>
                    <div class="row">
                    <div class="form-group col-md-11">
                        <label for="img">Videos</label>
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="videoheading">Heading</label>
                            <textarea    class="ckeditor" name="videoheading" rows="10"  id="videoheading" class="form-control"><?php echo $webdata['videos_heading'];?> </textarea>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="videocontent">Text Content</label>
                            <textarea  class="ckeditor" id="videocontent"  rows="10" name="videocontent" class="form-control"><?php echo $webdata['videos_content'];?> </textarea>
                            </div>
                        </div>

                    <hr>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="img">Photos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="photoheading">Heading</label>
                            <textarea  class="ckeditor" name="photoheading" rows="10"  id="photoheading" class="form-control"><?php echo $webdata['photos_heading'];?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="photocontent">Text Content</label>
                            <textarea  class="ckeditor" id="photocontent"  rows="10" name="photocontent" class="form-control"><?php echo $webdata['photos_content'];?></textarea>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="eventsheading">Events</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="eventsheading">Heading</label>
                            <textarea  class="ckeditor" name="eventsheading"  rows="10" id="eventsheading" class="form-control"><?php echo $webdata['events_heading'];?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="eventscontent">Text Content</label>
                            <textarea class="ckeditor"  name="eventscontent"  rows="10" id="eventscontent" class="form-control"><?php echo $webdata['events_content'];?></textarea>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="img">Studio</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="studioheading">Heading</label>
                            <textarea class="ckeditor"  name="studioheading"  rows="10" id="studioheading" class="form-control"><?php echo $webdata['studio_heading'];?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-11">
                            <label for="studiocontent">Text Content</label>
                            <textarea class="ckeditor"  name="studiocontent"  rows="10" id="studiocontent" class="form-control"><?php echo $webdata['studio_content'];?></textarea>
                        </div>
                    </div>
<button type="submit" class="btn btn-primary">Submit</button>


                </form>

            </div>
            </div>
        </div>
    </div>
</div>



</div>