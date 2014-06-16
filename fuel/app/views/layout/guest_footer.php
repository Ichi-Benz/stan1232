<?php
$number = Model_Social::query()->where('type', 0)->get_one();
$email = Model_Social::query()->where('type', 1)->get_one();
$facebook = Model_Social::find('all', array(
    'where' => array(
        array('type', 2),
    ),
));
$twitter = Model_Social::find('all', array(
    'where' => array(
        array('type', 3),
    ),
));

$ig = Model_Social::find('all', array(
    'where' => array(
        array('type', 4),
    ),
));
$youtube = Model_Social::find('all', array(
    'where' => array(
        array('type', 5),
    ),
));
$col1 = array();


?>
<div style="background-image:url('./assets/img/darkwall.png');">
<div class="container-fluid" style="color: #ffffff;">
    <div class="">
            <div class="col-md-3 col-xs-4 col-lg-2 col-sm-3 col-md-offset-2">
                <ul class="list-unstyled">
                    <li><h3>Connect With Us</h3><li>
                   <li class="text-danger"><span class="glyphicon glyphicon-phone"></span> <?php echo $number->data1;?>
                      </li>
                    <li class="text-danger"><span class="glyphicon glyphicon-envelope"></span> <a href="mailto: <?php echo $email->data1;?>" style=""> <?php echo $email->data1;?></a></li>

                </ul>
            </div>
            <div class="col-md-3 col-xs-4 col-lg-2 col-sm-3">
                <ul class="list-unstyled list-inline">
                   <h3>Facebook</h3>
                    <?php
                    $pastid = 0;
                    foreach($facebook as $fb){
                        foreach(explode(",", $fb->data2) as $col){
                            if($pastid != $fb->id){
                                echo "<li><a href='$fb->data1'>" . Asset::img('facebook.png', array('class' => 'img-responsive'))."</a></li>";
                            }
                            $pastid = $fb->id;
                        }
                    }
                    ?>
                    </ul>
                </div>
            <div class="col-md-3 col-xs-4 col-lg-2 col-sm-3">
                <ul class="list-unstyled list-inline">
                    <h3>Youtube</h3>
                    <?php
                    foreach($youtube as $yt){
                        foreach(explode(",", $yt->data2) as $col){
                            if($pastid != $fb->id){
                                echo "<li><a href='$yt->data1'>" . Asset::img('youtube.png', array('class' => 'img-responsive'))."</a></li>";

                        }
                            $pastid = $yt->id;
                    }}
                    ?>
                    </ul>
                </div>
            <div class="col-md-3 col-xs-4 col-lg-2 col-sm-3">
                <ul class="list-unstyled list-inline">
                    <h3>Instagram</h3>
                    <?php
                    foreach($ig as $insta){
                        foreach(explode(",", $insta->data2) as $col){
                            if($pastid != $fb->id){
                                echo "<li><a href='$insta->data1'>" . Asset::img('youtube.png', array('class' => 'img-responsive'))."</a></li>";

                        }
                            $pastid = $insta->id;
                    }}
                    ?>
                </ul>
            </div>
            <div class="col-md-3 col-xs-4 col-lg-2 col-sm-3">
                        <ul class="list-unstyled list-inline">
                            <h3>Twitter</h3>
                    <?php
                    foreach($twitter as $twit){
                        foreach(explode(",", $twit->data2) as $col){
                            if($pastid != $fb->id){

                                echo "<li><a href='$twit->data1'>" . Asset::img('twitter.png', array('class' => 'img-responsive'))."</a></li>";
                        }
                            $pastid = $twit->id;
                    }
                    }
                    ?>
                </ul>
                </div>

        </div>
    </div>
    <div class="container-fluid" style="background-image:url('./assets/img/darkwall.png'); padding-bottom: 15px">
        <div class="col-lg-12">
            <div class="col-md-4 col-md-offset-2">
                <div class="fb-like" data-href="https://www.facebook.com/FlipsideAdventures" data-colorscheme="dark" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <p class="muted pull-right">© 2009 -  <?php echo date("Y"); ?> Flipside Studios. All rights reserved</p>
            </div>
        </div>
    </div>
</div>