<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Admin menu!</h1>
        <div class="panel panel-default" style="">
            <div class="panel-body">
                <style>.col-md-2{
                        padding: 1%;

                    }</style>
                <div class="row">
                <div class="col-md-2 col-md-offset-4">

                <?php echo Html::anchor('admin/addvideo', "<span class='glyphicon glyphicon-film'></span> Add Video",
                    array('class' => 'btn btn-lg btn-block btn-primary'));
                ?></div>
                    <div class="col-md-2">

                        <?php echo Html::anchor('admin/editvideos', "<span class='glyphicon glyphicon-film'></span> Edit Video",
                            array('class' => 'btn btn-lg btn-block btn-primary'));
                        ?>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-2 col-md-offset-4">
                <?php echo Html::anchor('admin/addpicture', "<span class='glyphicon glyphicon-camera'></span> Add Photo",
                    array('class' => 'btn btn-lg btn-block btn-warning'));
                ?>
                    </div>
               <div class="col-md-2">
                <?php echo Html::anchor('admin/editpictures', "<span class='glyphicon glyphicon-camera'></span> Edit Photo",
                    array('class' => 'btn btn-lg btn-block btn-warning'));
                ?>
                </div>
                </div>
                <div class="row">
                <div class="col-md-2 col-md-offset-4">
                <?php echo Html::anchor('admin/addaccount', "<span class='glyphicon glyphicon-user'></span> Add Account",
                    array('class' => 'btn btn-lg btn-block btn-success'));
                ?></div>   <div class="col-md-2">
                <?php echo Html::anchor('admin/editaccounts', "<span class='glyphicon glyphicon-user'></span> Edit Accounts",
                    array('class' => 'btn btn-lg btn-block btn-info'));
                ?>
          </div></div>
                <div class="row">
                <div class="col-md-2  col-md-offset-4">
                <?php echo Html::anchor('admin/edittext', "<span class='glyphicon glyphicon-pencil'></span> Edit Textareas",
                    array('class' => 'btn btn-lg btn-block btn-info'));
                ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2  col-md-offset-4">
                        <?php echo Html::anchor('admin/addcontest', "<span class='glyphicon glyphicon-glass'></span> Add Contests",
                            array('class' => 'btn btn-lg btn-block btn-danger'));
                        ?>
                    </div>
                    <div class="col-md-2  col-md-offset-4">
                        <?php echo Html::anchor('admin/editcontests', "<span class='glyphicon glyphicon-glass'></span> Edit Contests",
                            array('class' => 'btn btn-lg btn-block btn-danger'));
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



</div>