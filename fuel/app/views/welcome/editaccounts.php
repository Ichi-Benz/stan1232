<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff">Edit Accounts</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Data</th>

                        <th>Delete</th>
                        <th>Edit</th>
                        <th>Active</th>
                    </tr>
                <?php foreach($accounts as $video):?>
                    <?php
                    if($video['data2'] != "null"){
                        $active = explode(",", $video['data2']);

                    }

                    switch($video['type']){
                        case(0):
                            $type = "Phone Number <span class='glyphicon glyphicon-earphone'></span>";
                        break;
                        case(1):
                            $type = "E-Mail <span class='glyphicon glyphicon-send'></span>";
                            break;
                        case(2):
                            $type = "Facebook <span class='glyphicon glyphicon-bullhorn'></span>";
                            break;
                        case(3):
                            $type = "Twitter <span class='glyphicon glyphicon-retweet'></span>";
                            break;
                        case(4):
                            $type = "Instagram <span class='glyphicon glyphicon-camera'></span>";
                            break;
                        case(5):
                            $type = "Youtube <span class='glyphicon glyphicon-facetime-video'></span>";
                            break;
                    }
                    ?>
                    <tr>
                        <td class="active"><?php echo $video['id'];?></td>
                        <td class="info"><?php echo $type;?></td>
                        <td><?php echo $video['data1'];?></td>
                        <?php if(($video['id'] == '1')){
                            echo "<td><span class='label label-danger'>Not allowed</span></td>";
                        }else if($video['id'] == '2'){
                            echo "<td><span class='label label-danger'>Not allowed</span></td>";
                        }else{
                            echo "<form method='get'><input type='hidden' name='delete' value=" . $video['id'] . "> <td class='danger'><button type='submit' class='btn btn-block btn-danger'>Delete</button></td></form>";

                        }?>


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