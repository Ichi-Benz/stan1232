<?php $types = array("Phone Number", "E-Mail", "Facebook", "Twitter", "Instagram", "Youtube");?>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Add Account</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="type">Type</label>
                  <select name="type" id="type" class="form-control">
                        <?php foreach($types as $key => $type){
                            echo "<option value='". $key ."'>$type</option>";
                        }?>
                  </select>
                    </div>
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="text" class="form-control" id="data" name="data">
                        <input type="hidden"  id="data" name="add" value="1">
                        <p class="help-block">Profile URL ex. http://www.youtube.com/Slapmedia</p>
                    </div>
                    <?php $suc = Session::get_flash("step"); if(isset($suc)){echo "<div class='alert alert-success'>". Session::get_flash("step") . "</div>";}?>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>



</div>