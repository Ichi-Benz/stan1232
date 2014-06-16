<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Videos</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                <?php foreach($videos as $video):?>

                    <tr>
                        <td class="active"><?php echo $video['id'];?></td>
                        <td class="info"><?php echo $video['title'];?></td>
                        <form method="get"><input type="hidden" name="delete" value="<?php echo $video['id'];?>"> <td class="danger"><button type="submit" class="btn btn-block btn-danger">Delete</button></td></form>
                        <form method="get"><input type="hidden" name="edit" value="<?php echo $video['id'];?>">   <td class="success"><button type="submit" class="btn btn-block btn-success">Edit</button></td></form>
                    </tr>

                    <?php endforeach;?>

                </table>
            </div>
        </div>
    </div>
</div>



</div>