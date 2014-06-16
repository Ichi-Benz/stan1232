<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Contest</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $video->name;?>" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" id="desc" name="desc"><?php echo $video->desc;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cimage">Contest Image</label>
                       <img src="../files/<?php echo $video->cimage;?>" />
                        <input type="file" name="cimage[]" id="cimage">

                    </div>
                    <div class="form-group">
                        <label for="startd">Start Date</label>
                        <input type="text" class="form-control" id="startd" name="startd" value="<?php echo date("Y-m-d h:m:s",$video->startdate);?>" placeholder="Enter start date" required>
                    </div>

                    <div class="form-group">
                        <label for="endd">End Date</label>
                        <input type="text" class="form-control" id="endd" name="endd" value="<?php echo date("Y-m-d h:m:s",$video->enddate);?>" placeholder="Enter end date" required>
                    </div>

                    <div class="form-group">
                        <label for="hashtag">Hashtag for Scoring</label>
                        <input type="text" class="form-control" id="hashtag" name="hashtag" value="<?php echo $video->hashtag;?>" placeholder="Enter hashtag" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="pname">Prize Name</label>
                        <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $video->ptitle;?>" placeholder="Enter prize name" required>
                    </div>

                    <div class="form-group">
                        <label for="pimage">Prize Image</label>
                        <img src="../files/<?php echo $video->pimage;?>" />
                        <input type="file" name="pimage[]" id="pimage">
                    </div>

<input type="hidden" name="editid" value="<?php echo $video->id;?>"/>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



</div>