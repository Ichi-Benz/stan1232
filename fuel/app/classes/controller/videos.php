<?php

class Controller_Videos extends Controller
{

	public function action_index()
	{

        $id = Input::get('id');
           if($id !== null){
               $video = Model_Video::find($id);
               $view = View::forge('layout/guest');
               $view->head = View::forge('layout/guest_head');

               $view->header = View::forge('layout/guest_header');
               $view->content = View::forge('welcome/viewvideo');
               $view->set_global('video', $video, false);
               $view->footer = View::forge('layout/guest_footer');
               return $view;
           }
        else{
            try
            {
                $videos = Cache::get('videos');
            }
            catch (\CacheNotFoundException $e)
            {
                $videos = Model_Video::find('all', array('limit' => 100,
                        'order_by' => array(
                            array('order', 'desc'),
                        ),
                    )
                );
                Cache::set('videos', $videos, 3600 * 168);
            }




        $view = View::forge('layout/guest');
            $featured = Model_Video::find('all', array(
                'where' => array(
                    array('page', 0),
                    array('featured', 1),

                ),
            ));
            $view->set_global('featured', $featured, false);
        $view->head = View::forge('layout/guest_head');
            try{
                $webdata = Cache::get('webdata');
            }catch (\CacheNotFoundException $e){
                $webdata = Model_Webdata::find(1);
                Cache::set('webdata', $webdata, 3600 * 168);
            }
            $view->set_global('data', $webdata, false);
        $view->header = View::forge('layout/guest_header');
        $view->content = View::forge('welcome/videos');
        $view->set_global('videos', $videos, false);
        $view->footer = View::forge('layout/guest_footer');
        return $view;
        }
	}




	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
