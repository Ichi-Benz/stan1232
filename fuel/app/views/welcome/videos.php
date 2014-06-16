<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff"><?php echo $data['videos_heading'];?></h1>
    </div>
</div>
    <div class="row">
        <div class="" style="color:#ffffff">
            <div class="row" style="margin-bottom:30px">
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
            <?php foreach($videos as $video){
                $vid =$video['id'];
                echo "<div class='col-md-3  col-xs-6 text-center' style='margin-bottom: 5px;'>";
                echo "<a href='./videos?id=$vid'><img style='max-height:150px;' class='img-responsive img-thumbnail' src='". Uri::base(false). "./files/".$video['thumbnail']. "'/>";
                echo "<div class='row'><span class='label label-danger' style='margin-top: 3px; position: relative;'>" . $video['title'] . "</span></a></div>";
                echo "</div>";
            } ?>

        </div>
    </div>
    <div class="row">
        <h4 style="color:lightslategrey "><?php echo $data['videos_content'];?></h4>


</div></div>