<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Add Contest</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" id="desc" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cimage">Contest Image</label>
                        <input type="file" name="cimage[]" id="cimage">

                    </div>
                    <div class="form-group">
                        <label for="startd">Start Date</label>
                        <input type="text" class="form-control" id="startd" name="startd" placeholder="Enter start date" required>
                    </div>

                    <div class="form-group">
                        <label for="endd">End Date</label>
                        <input type="text" class="form-control" id="endd" name="endd" placeholder="Enter end date" required>
                    </div>

                    <div class="form-group">
                        <label for="hashtag">Hashtag for Scoring</label>
                        <input type="text" class="form-control" id="hashtag" name="hashtag" placeholder="Enter hashtag" required>
                    </div>
<hr>
                    <div class="form-group">
                        <label for="pname">Prize Name</label>
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter prize name" required>
                    </div>

                    <div class="form-group">
                        <label for="pimage">Prize Image</label>
                        <input type="file" name="pimage[]" id="pimage">
                    </div>


                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



</div>