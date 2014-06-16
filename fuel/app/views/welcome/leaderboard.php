<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<div class="container-fluid" style="font-family: 'Lora', serif;">
    <?php //var_dump($contest);?>
    <h1 style="color: white"><?php echo $contest->name;?></h1>
    <table class="table table-bordered" style="background-color: #f5f5f5">
        <tr>
            <th>Position</th>
            <th>Handle</th>
            <th>Score</th>
        </tr>
        <?php $i=1; foreach($entrants as $entrant):?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $entrant->name;?>, @<?php echo $entrant->handle;?></td>

            <td><?php echo $entrant->score;?></td>
        </tr>
        <?php $i++; endforeach;?>

    </table>
</div>