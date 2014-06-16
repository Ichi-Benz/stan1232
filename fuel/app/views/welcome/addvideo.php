<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Add Video</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="url" class="form-control" id="url" name="url" placeholder="Enter url" required>

                    </div>
                    <div class="form-group form-inline">
                        <label for="width">Width</label>
                        <input type="text" class="form-control" name="width" id="width" value="940">
                        <label for="width">Height</label>
                        <input type="text" class="form-control" name="height" id="height" value="529">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="autoplay" type="checkbox"> Autoplay
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="related" type="checkbox" > Show related videos after
                        </label>
                    </div>
                    <div class="checkbox form-inline">
                        <label>
                            <input name="startat" type="checkbox" disabled> Start @ <input class="form-control" type="text" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="Thumbnail">Thumbnail</label>
                        <input type="file" name="thumbs[]" id="Thumbnail">

                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



</div>