<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Videos</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="row">
                    <div class="form-group col-md-4">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" value="<?php echo $video['title'];?>" name="title" id="title">
                    </div>
                    </div>

                        <div class="form-group col-md-12">
                            <div class="form-group">
                                <label for="thumb">Thumbnail. ~300px</label>
                                <input type="file" name="thumb[]" id="thumb">
                            </div>
                            </div>


                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="img">Image</label>
                        <img class="img-responsive" src="../files/<?php echo $video['src'];?>"><br>
                        <input type="file" name="img[]" id="img">
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" class="form-control"><?php echo $video['description'];?></textarea>
                            </div>
                        </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="order">Order</label>
                            <input class="form-control" type="text" value="<?php echo $video['order'];?>" name="order" id="order">
                            </div>
                        </div>


                    <div class="row">
                        <div class="form-group col-md-4">
                            <input type="hidden" value="<?php echo $video['id'];?>" name="editid">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                            </div>
                        </div>

                </form>

            </div>
        </div>
    </div>
</div>



</div>