<div class="container">
<div class="row">
    <div class="col-md-12">
    <h1 style="color:#ffffff"><?php echo $data['photos_heading'];?></h1>
    </div>
</div>
    <div class="row">
        <div class="" style="color:#ffffff">
            <?php foreach($images as $image): ?>  
                <div class="col-md-3" style="height: 250px;">
                  <a class="fancybox" rel="group" href="./files/<?php echo $image['src']; ?>"><img style="max-height: 230px;"  class="img-responsive" src="./files/<?php if(!empty($image['thumbsrc'])){ echo $image['thumbsrc']; } else{ echo $image['src'];} ?>" alt="" /></a>
                </div>
            <?php endforeach;?>
        </div>
    </div>

<p style="color: lightslategray"><?php echo $data['photos_content'];?></p>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>