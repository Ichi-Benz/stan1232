<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Contests</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Start</th>

                        <th>End</th>

                    </tr>
                <?php foreach($videos as $video):?>

                    <tr>

                        <td class="active"><?php echo $video['id'];?></td>
                        <td class="info"><?php echo $video['name'];?></td>
                        <td><?php echo date("Y-m-d h:m:s",$video['startdate']);?></td>
                        <td><?php echo date("Y-m-d h:m:s",$video['enddate']);?></td>
                  <?php
                            echo "<form method='get'><input type='hidden' name='delete' value=" . $video['id'] . "> <td class='danger'><button type='submit' class='btn btn-block btn-danger'>Delete</button></td></form>";

                        ?>


                        <form method="get"><input type="hidden" name="edit" value="<?php echo $video['id'];?>">   <td class="success"><button type="submit" class="btn btn-block btn-success">Edit</button></td></form>
                        <td><?php if(isset($active[0])){ echo "Yes";};?></td>
                    </tr>

                    <?php endforeach;?>

                </table>
            </div>
        </div>
    </div>
</div>



</div>