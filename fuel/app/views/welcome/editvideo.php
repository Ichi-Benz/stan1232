<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Videos</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <?php
                    $test = explode("=", $video['src']);
                    if (preg_match("/'([^']+)'/", $test[1], $m)) {

                    }
                    if (preg_match("/'([^']+)'/", $test[2], $n)) {

                    }
                       $tst = explode('/', $test[3]);

                   ?>
                    <div class="row">
                    <div class="form-group col-md-4">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" value="<?php echo $video['title'];?>" name="title" id="title">
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="title">URL</label>
                            <input class="form-control" type="text" value="https://www.youtube.com/watch?v=<?php echo $tst[4];?>" name="url" id="url">
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="img">Thumbnail</label>
                        <img class="img-responsive" src="../files/<?php echo $video['thumbnail'];?>"><br>
                        <input type="file" name="img" id="img">
                    </div>
</div>
                        <div class="row">
                    <div class="form-group col-md-4">
                        <label for="width">Width</label>
                        <input class="form-control" type="text" value="<?php echo$m[1];?>" name="width" id="width">
                    </div>
                            <div class="form-group col-md-4">
                                <label for="height">Height</label>
                                <input class="form-control" type="text" value="<?php echo$n[1];?>" name="height" id="height">
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
                            <label for="page">Page</label>
                            <select class="form-control" name="page" id="page">
                                <option value="0"<?php if($video['page'] == 0) echo "selected";?>>
                                    Videos
                                </option>
                                <option value="1"<?php if($video['page'] == 1) echo "selected";?>>Homepage</option>
                                <option value="2"<?php if($video['page'] == 2) echo "selected";?>>Events</option>
                            </select>
                            </div>
                        </div>



                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="featured" <?php if($video['featured'] == 1) echo "checked";?>> Featured
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="autoplay"> Autoplay
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="related"> Show related videos after
                                </label>
                            </div>
                            </div>
                        </div>
            <?php if(isset($taken)):?>
                    <div class="alert alert-danger"><?php echo $taken;?></div>
                    <?php endif;?>
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