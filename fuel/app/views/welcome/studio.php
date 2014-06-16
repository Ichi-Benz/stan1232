<?php
$number = Model_Social::query()->where('type', 0)->get_one();
$email = Model_Social::query()->where('type', 1)->get_one();?>

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="col-md-7"><?php  echo Asset::img('studio.jpg', array('id' => 'logo')); ?></div>
        <div class="col-md-4 text-center" style="color:darkred"><h3><span class="glyphicon glyphicon-earphone"></span> <?php echo $number->data1;?><br> <span class="glyphicon glyphicon-send"></span> <a style="color:inherit" href="mailto:<?php echo $email->data1;?>"><?php echo $email->data1;?></a></h3></div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12" style="color:#ffffff">
            <h1><?php echo $data['studio_heading'];?></h1>
           <p><?php echo $data['studio_content'];?></p>
            </div>
        </div>

</div>