<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Add Picture</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" id="desc" id="desc" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumb">Thumbnail. ~300px</label>
                        <input type="file" name="thumb[]" id="thumb">
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" name="img[]" id="img">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



</div>