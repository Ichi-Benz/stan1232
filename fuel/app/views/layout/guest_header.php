<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
    <div class="row">
        <div class="col-md-4">
           <a href="<?php echo Uri::base(false);?>"> <?php
            echo Asset::img('tSp5J0P.gif', array('id' => 'logo', 'class'=>'img-responsive'));
            ?></a></div>

        <div class="col-md-8" style="padding-top: 3%;width: 66.5%">
            <nav class="navbar navbar-default navbar-inverse" role="navigation" style="background-color: #000000;border-color:#000000">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="cssmenu">
                        <ul>
                            <li class="<?php if(\Request::active()->controller == "Controller_Welcome")echo "active";?>"><?php echo Html::anchor('./', 'Home') ?></li>
                            <li><?php echo Html::anchor('../forum', 'Forum') ?></li>
                            <li class="<?php if(\Request::active()->controller == "Controller_Videos")echo "active";?>"><?php echo Html::anchor('./videos', 'Videos') ?></li>
                            <li class="<?php if(\Request::active()->controller == "Controller_Photos")echo "active";?>"><?php echo Html::anchor('./photos', 'Photos') ?></li>
                            <li class=""><?php echo Html::anchor('http://theflipside.myshopify.com/', 'Shop', false) ?></li>

                            <li class="<?php if(\Request::active()->controller == "Controller_Events")echo "active";?>"><?php echo Html::anchor('./events', 'Events') ?></li>
                            <li class="<?php if(\Request::active()->controller == "Controller_Studio")echo "active";?>"><?php echo Html::anchor('./studio', 'Studio') ?></li>
                            <li class="<?php if(\Request::active()->controller == "Controller_Contests")echo "active";?>"><?php echo Html::anchor('./contests', 'Contests') ?></li>
                            <li class="has-sub<?php if(\Request::active()->controller == "Controller_Studio")echo "active";?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search <b class="caret"></b></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="background-color: #5E5E5E; width: 250px">

                                    <li><?php echo Form::open(array('action' => 'search', 'method' => 'get', 'class' => 'container-fluid', 'role' => 'search'));?>

                                        <div class="form-group" style="margin-top: 10px">
                                            <input type="text" name="terms" class="form-control" style="" placeholder="Keywords">

                                            <button type="submit" style="margin-top: 10px" class="btn btn-block btn-primary">Submit</button>
                                        </div>


                                        </form></li>

                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>

</div>

