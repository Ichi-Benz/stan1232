<div class="container">
<div class="row">
    <div class="col-md-12">
    </div>
</div>
    <div class="row">
        <div class="" style="color:#ffffff">
            <?php  foreach($videos as $video){


                $vid =$video['id'];
                echo "<div class='col-md-3 col-xs-6' style=''>";
                echo "<a href='./videos?id=$vid'><img style='max-height:150px;' class='img-responsive img-thumbnail' src='". Uri::base(false). "./files/".$video['thumbnail']. "'/>";
                echo "<div class='row'><span style='position: relative' class='label label-danger'>" . $video['title'] . "</span></a></div>";
                echo "</div>";
            } ?>


        </div>
    </div>


</div>