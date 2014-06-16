<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<div class="container" style="font-family: 'Lora', serif;">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff"></h1>
    </div>
</div>
    <div class="row">

        <div class="" style="color:#ffffff">
            <?php foreach($images as $image): ?>
                <div class="container">
            <div class="jumbotron" style="min-height: 600px">
                <div class="col-md-12">
                    <div class="col-md-3">
                  <a class="fancybox" rel="group" href="./files/<?php echo $image['cimage']; ?>"><img style=""  class="img-responsive animated lightSpeedIn" src="./files/<?php echo $image['cimage']; ?>" alt="" /></a>
</div>
                    <div class="col-md-7">
                    <h2  style="color:#000000"><?php echo $image['name'];?></h2>
                <p style="color:#000000">    <?php echo $image['desc'];?>
                </p>
</div>
                <hr>

                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="./files/<?php echo $image['pimage']; ?>"><img style=""  class="img-responsive animated tada" src="./files/<?php echo $image['pimage']; ?>" alt="" /></a>

                <p style="color:#000000">
                    You could win
                    <?php echo $image['ptitle'];?>
                     if you tweet <?php echo $image['hashtag'];?>
                    <a href="./leaderboard?id=<?php echo $image->id;?>" class="btn btn-block btn-lg btn-primary">Leaderboard</a>
                </p>
                        </div>


                <br><br>   <br><br>   <br><br>   </div>
                </div></div>
            <?php endforeach;?>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>