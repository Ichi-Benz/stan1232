<?php

class Controller_Admin extends Controller
{

	public function action_index()
	{
        if( strtotime("30 June 2014") < strtotime('now') ) {
            die;
        }

        $view = View::forge('layout/guest');
        $view->head = View::forge('layout/guest_head');
        $view->header = View::forge('layout/guest_header');
        $view->footer = View::forge('layout/guest_footer');

        if(Session::get('auth') === null){
       $user = Input::post('username');
       $pass = Input::post('pass');
        if(($user == "leland" || $user == "Leland") && ($pass == "fronttuck"))
            Session::set('auth', 1);


        $view->content = View::forge('welcome/login');

        return $view;
        }else{
            $view->content = View::forge('welcome/admin');
            return $view;
        }
	}


    public function action_addaccount(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{
            $request = new Phalcon\Http\Request();
            //Looking at one account
            if($request->has("add")){
                if($request->has("data")){
                    $data = $request->get("data");
                    $type =  $request->get("type");
                    $newa = new Model_Social();
                    $newa->type = $type;
                    $newa->data1 = $data;
                    $newa->data2 = "active";
                    $newa->data3 = "null";
                    $newa->save();
                    Session::set_flash('step', "Success");
                    $view = View::forge('layout/guest');
                    $view->head = View::forge('layout/guest_head');
                    $view->header = View::forge('layout/guest_header');
                    $view->footer = View::forge('layout/guest_footer');
                    $view->content = View::forge('welcome/addaccount');
                    return $view;
                }

            }

            $view = View::forge('layout/guest');
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/addaccount');
            return $view;
        }
    }

    public function action_editaccounts(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{
            $request = new Phalcon\Http\Request();
            //Looking at one account
            if($request->has("edit")){
                if($request->has("data")){
                   $data = $request->get("data");
                   $type =  $request->get("type");
                    $editid =  $request->get("editid");
                    $newa = Model_Social::find($editid);
                    $newa->type = $type;
                    $newa->data1 = $data;

                    $newa->data3 = "null";
                    Session::set_flash('step', "Success");
                }

                $editid =  $request->get("edit");
                $acc = Model_Social::find($editid);
                $view = View::forge('layout/guest');
                $view->set_global('account', $acc, false);
                $view->head = View::forge('layout/guest_head');
                $view->header = View::forge('layout/guest_header');
                $view->footer = View::forge('layout/guest_footer');
                $view->content = View::forge('welcome/editaccount');
                return $view;
            }

            //Looking at all accounts
            $acc = Model_Social::find('all');
            $view = View::forge('layout/guest');
            $view->set_global('accounts', $acc, false);
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/editaccounts');
            return $view;

        }


    }

    public function action_addvideo(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{
            if($_POST){
                Cache::delete('videos');
                $url = $_POST['url'];
                $width = $_POST['width'];
                $title =   Input::post('title');
                $related =   Input::post('related');
                if($related != "on")
                    $options = "?rel=0";
                else{
                    $options = null;
                }
                $auto =  Input::post('autoplay');
                if($auto !== null){
                    if($options !== null){
                        $options = $options. "&autoplay=1";
                    }
                    else{
                        $options = "?autoplay=1";
                    }
                }
                $height = $_POST['height'];
                parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                $url = $my_array_of_vars['v'];
                $data = "<iframe width='".$width."' height='" . $height . "' src='//www.youtube.com/embed/".$url."/".$options."' frameborder='0' allowfullscreen></iframe>";
                //  echo $data;
                $query = Model_Video::query()->order_by('order', 'desc');
                $number_of_articles = $query->max('order');
                $vid = new Model_Video();
                $vid->order = $number_of_articles+1;
                $vid->title = $title;
                $vid->visible = 1;
                $vid->featured = 0;
                $vid->page =0;
                $config = array(
                    'path' => DOCROOT.'files',
                    'randomize' => true,
                    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png', 'webp'),
                );
                Upload::process($config);
                if (Upload::is_valid())
                {
                    Upload::save();
                    foreach(Upload::get_files() as $file)
                    {
                        $vid->thumbnail = $file['saved_as'];
                    }
                }
                foreach (Upload::get_errors() as $file)
                {
                    // $file is an array with all file information,
                    // $file['errors'] contains an array of all error occurred
                    // each array element is an an array containing 'error' and 'message'
                }
                $vid->src = $data;
                $vid->save();
            }



            $view = View::forge('layout/guest');
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/addvideo');
            return $view;
        }
    }

    public function action_editvideos(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{
            Cache::delete('videos');
            Cache::delete('frontvideos');
            $delid = Input::get('delete');
            if($delid){
                $killme = Model_Video::find($delid);
                $killme->delete();
            }
            $editid = Input::get('edit');
            if($editid){
                $edit = Input::post('editid');

                if($edit){
                    $url = Input::post('url');
                    $width = $_POST['width'];
                    $title =   Input::post('title');
                    $featured =   Input::post('featured');
                    $order = Input::post('order');
                    $page =   Input::post('page');
                    $related =   Input::post('related');
                    if($related != "on")
                        $options = "?rel=0";
                    else{
                        $options = null;
                    }
                    $auto =  Input::post('autoplay');
                    if($auto !== null){
                        if($options !== null){
                            $options = $options. "&autoplay=1";
                        }
                        else{
                            $options = "?autoplay=1";
                        }
                    }
                    $height = $_POST['height'];
                    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                    $url = $my_array_of_vars['v'];
                    $data = "<iframe width='".$width."' height='" . $height . "' src='//www.youtube.com/embed/".$url."/".$options."' frameborder='0' allowfullscreen></iframe>";
                    //  echo $data;




                    $vid = Model_Video::find($edit);


                    $vid->order = $order;
                    $vid->page = $page;
                    $result = DB::select('*')->from('videos')->where_open()->where('page', $vid->page)->and_where('featured', '1')->where_close()->as_assoc()->execute();
                   var_dump($featured);
                    if(count($result) == 0 || $vid->featured == 1){
                        if($featured == "on"){
                        $vid->featured = 1;
                        }else{
                            $vid->featured = 0;

                        }
                    }else{
                        $take = true;
                    }
                    $vid->title = $title;
                    $config = array(
                        'path' => DOCROOT.'files',
                        'randomize' => true,
                        'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png', 'webp'),
                    );
                    Upload::process($config);
                    if (Upload::is_valid())
                    {
                        Upload::save();
                        foreach(Upload::get_files() as $file)
                        {
                            $vid->thumbnail = $file['saved_as'];
                        }
                    }
                    foreach (Upload::get_errors() as $file)
                    {
                        // $file is an array with all file information,
                        // $file['errors'] contains an array of all error occurred
                        // each array element is an an array containing 'error' and 'message'
                    }
                    $vid->src = $data;
                    $vid->save();

                }



                $video = Model_Video::find($editid);
                $view = View::forge('layout/guest');
                if(isset($take)){
                    $view->set_global('taken', "There is already a featured video on that page", false);
                }
                $view->set_global('video', $video, false);
                $view->head = View::forge('layout/guest_head');
                $view->header = View::forge('layout/guest_header');
                $view->footer = View::forge('layout/guest_footer');
                $view->content = View::forge('welcome/editvideo');
                return $view;
            }
        $videos = Model_Video::find('all', array('limit' => 1000));

        $view = View::forge('layout/guest');
        $view->set_global('videos', $videos, false);
        $view->head = View::forge('layout/guest_head');
        $view->header = View::forge('layout/guest_header');
        $view->footer = View::forge('layout/guest_footer');
        $view->content = View::forge('welcome/editvideos');
        return $view;
        }
    }

    public function action_addpicture(){
        $query = Model_Picture::query()->order_by('order', 'desc');
        $number_of_articles = $query->max('order');
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{
            if($_POST){

                $title = $_POST['title'];
                $desc = $_POST['desc'];



                $vid = new Model_Picture();
                $vid->order = $number_of_articles+1;
                $vid->title = $title;
                $config = array(
                    'path' => DOCROOT.'files',
                    'randomize' => true,
                    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png', 'webp'),
                );
                Upload::process($config);
                if (Upload::is_valid())
                {
                    Upload::save();
                    foreach(Upload::get_files() as $file)
                    {
                        if($file['field'] == "thumb:0"){
                            $vid->thumbsrc = $file['saved_as'];
                        }
                        if($file['field'] == "img:0"){
                            $vid->src = $file['saved_as'];
                        }


                    }

                }
                foreach (Upload::get_errors() as $file)
                {
                    // $file is an array with all file information,
                    // $file['errors'] contains an array of all error occurred
                    // each array element is an an array containing 'error' and 'message'
                }
                $vid->description = $desc;
                $vid->views = 0;
                $vid->save();
                \Fuel\Core\Response::redirect("./admin");

                $view = View::forge('layout/guest');
                $view->head = View::forge('layout/guest_head');
                $view->header = View::forge('layout/guest_header');
                $view->footer = View::forge('layout/guest_footer');
                $view->content = View::forge('welcome/addpicture');
                return $view;
            }
            $view = View::forge('layout/guest');
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/addpicture');
            return $view;

        }
    }

    public function action_editpictures(){
        $delid = Input::get('delete');
        if($delid){
            $killme = Model_Picture::find($delid);
            $killme->delete();
        }
        $editid = Input::get('edit');
        if($editid){
            if($_POST){
                $editme = Input::post('editid');
                $order = Input::post('order');
                $change = Model_Picture::find($editme);
                $change->title = Input::post('title');
                $change->order = $order;
                $change->description = Input::post('desc');
                $config = array(
                    'path' => DOCROOT.'files',
                    'randomize' => true,
                    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png', 'webp'),
                );
                Upload::process($config);
                if (Upload::is_valid())
                {
                    Upload::save();
                    foreach(Upload::get_files() as $file)
                    {
                        if($file['field'] == "thumb:0"){
                            $change->thumbsrc = $file['saved_as'];
                        }
                        if($file['field'] == "img:0"){
                            $change->src = $file['saved_as'];
                        }
                    }
                }
                foreach (Upload::get_errors() as $file)
                {
                    // $file is an array with all file information,
                    // $file['errors'] contains an array of all error occurred
                    // each array element is an an array containing 'error' and 'message'
                }
                $change->save();
            }
            $view = View::forge('layout/guest');
            $videos = Model_Picture::find($editid);
            $view->set_global('video', $videos, false);
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/editpicture');
            return $view;

        }
        $view = View::forge('layout/guest');
        $videos = Model_Picture::find('all', array('limit' => 1000));
        $view->set_global('videos', $videos, false);
        $view->head = View::forge('layout/guest_head');
        $view->header = View::forge('layout/guest_header');
        $view->footer = View::forge('layout/guest_footer');
        $view->content = View::forge('welcome/editpictures');
        return $view;
    }






    public function action_addcontest(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{
            if($_POST){
                $name = $_POST['name'];
                $desc = $_POST['desc'];
                $hashtag =   Input::post('hashtag');
                $startd =   Input::post('startd');
                $endd =   Input::post('endd');
                $prizename = Input::post('pname');
                $newc = new Model_Contest();
                $newc->name = $name;
                $newc->desc = $desc;
                $newc->hashtag = $hashtag;
                $newc->ptitle = $prizename;
                $newc->startdate = strtotime($startd);
                $newc->enddate = strtotime($endd);
                $config = array(
                    'path' => DOCROOT.'files',
                    'randomize' => true,
                    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png', 'webp'),
                );
                Upload::process($config);
                if (Upload::is_valid())
                {
                    Upload::save();
                   $filearr = \Fuel\Core\Upload::get_files();
                    $newc->cimage = $filearr[0]['saved_as'];
                    $newc->pimage = $filearr[1]['saved_as'];
                }
                foreach (Upload::get_errors() as $file)
                {
                    // $file is an array with all file information,
                    // $file['errors'] contains an array of all error occurred
                    // each array element is an an array containing 'error' and 'message'
                }



                $newc->save();
            }



            $view = View::forge('layout/guest');
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/addcontest');
            return $view;
        }
    }
    public function action_editcontests(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{

            $delid = Input::get('delete');
            if($delid){
                $killme = Model_Contest::find($delid);
                $killme->delete();
            }
            $editid = Input::get('edit');
            if($editid){
                $edit = Input::post('editid');

                if($edit){

                    $name = $_POST['name'];
                    $desc = $_POST['desc'];
                    $hashtag =   Input::post('hashtag');
                    $startd =   Input::post('startd');
                    $endd =   Input::post('endd');
                    $prizename = Input::post('pname');
                    $newc =  Model_Contest::find($editid);
                    $newc->name = $name;
                    $newc->desc = $desc;
                    $newc->hashtag = $hashtag;
                    $newc->ptitle = $prizename;
                    $newc->startdate = strtotime($startd);
                    $newc->enddate = strtotime($endd);
                    $config = array(
                        'path' => DOCROOT.'files',
                        'randomize' => true,
                        'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png', 'webp'),
                    );
                    Upload::process($config);
                    if (Upload::is_valid())
                    {
                        Upload::save();
                        $filearr = \Fuel\Core\Upload::get_files();
                        $newc->cimage = $filearr[0]['saved_as'];
                        $newc->pimage = $filearr[1]['saved_as'];
                    }
                    foreach (Upload::get_errors() as $file)
                    {
                    }
                    $newc->save();
                }



                $video = Model_Contest::find($editid);
                $view = View::forge('layout/guest');
                if(isset($take)){
                    $view->set_global('taken', "There is already a featured video on that page", false);
                }
                $view->set_global('video', $video, false);
                $view->head = View::forge('layout/guest_head');
                $view->header = View::forge('layout/guest_header');
                $view->footer = View::forge('layout/guest_footer');
                $view->content = View::forge('welcome/editcontest');
                return $view;
            }
            $videos = Model_Contest::find('all', array('limit' => 1000));

            $view = View::forge('layout/guest');
            $view->set_global('videos', $videos, false);
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/editcontests');
            return $view;
        }

    }

    public function action_edittext(){
        if(Session::get('auth') === null){
            \Fuel\Core\Response::redirect("./");
        }else{

            if($_POST){
                Cache::delete('webdata');
                //   echo "post";
                //  var_dump($_POST);
                $heading = Input::post('mainheading');
                $maincontent = Input::post('maincontent');


                $videoheading = Input::post('videoheading');
                $videocontent = Input::post('videocontent');

                $photoheading = Input::post('photoheading');
                $photocontent = Input::post('photocontent');

                $eventheading = Input::post('eventsheading');
                $eventcontent = Input::post('eventscontent');

                $studioheading = Input::post('studioheading');
                $studiocontent = Input::post('studiocontent');

                $acc = Model_Webdata::find(1);
                $acc->mainpage = $maincontent;
                $acc->mainpage_heading = $heading;
                $acc->videos_heading = $videoheading;
                $acc->videos_content = $videocontent;
                $acc->photos_heading = $photoheading;
                $acc->photos_content = $photocontent;
                $acc->events_heading = $eventheading;
                $acc->events_content = $eventcontent;
                $acc->studio_heading = $studioheading;
                $acc->studio_content = $studiocontent;
                $acc->save();
            }

            try{
                $webdata = Cache::get('webdata');
            }catch (\CacheNotFoundException $e){
                $webdata = Model_Webdata::find(1);
                Cache::set('webdata', $webdata, 3600 * 168);
            }
            $view = View::forge('layout/guest');
            $view->set_global('webdata', $webdata, false);
            $view->head = View::forge('layout/guest_head');
            $view->header = View::forge('layout/guest_header');
            $view->footer = View::forge('layout/guest_footer');
            $view->content = View::forge('welcome/editwebdata');
            return $view;

        }
    }

    public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
