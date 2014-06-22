<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff"><?php echo $data['videos_heading'];?></h1>
    </div>
</div>
    <div class="" style="color:#ffffff">
            <div class="row">
                <?php $one = false; if(isset($featured)){
                    foreach($featured as $feat){
                        if($one == false){
                            $vid =$feat['id'];
                            echo "<div class='col-md-8 col-md-offset-1'>";
                            echo $feat['src'];
                            echo "</div>";
                            $one = true;
                        }

                    }
                }?>
            </div>
        <div class="row" style="margin-top: 30px">
            <?php foreach($videos as $video){
                $vid =$video['id'];
                echo "<div class='col-md-4 col-xs-6 text-center' style='margin-bottom: 5px;'>";
                echo "<div class='row'><a href='./videos?id=$vid'><h1 style='text-shadow: -1px 2px 4px #333333;font-weight: normal;background-color: #d9534f;color: #ffffff;font-size:200%;font: Helvetica, Arial, Sans-Serif;-webkit-box-shadow: 1px 0px 44px -5px rgba(255,255,255,1);-moz-box-shadow: 1px 0px 44px -5px rgba(255,255,255,1);box-shadow: 1px 0px 44px -5px rgba(255,255,255,1);' class='label label-danger'>" . $video['title'] . "</h1></a></div>";
                echo "<a href='./videos?id=$vid'><img style='max-height:150px;' class='img-responsive img-thumbnail' src='". Uri::base(false). "./files/".$video['thumbnail']. "'/></a>";
                echo "</div>";
            } ?>
        </div>

    </div>
    <div class="row">
        <h4 style="color:lightslategrey "><?php echo $data['videos_content'];?></h4>

    </div>
    </div>
