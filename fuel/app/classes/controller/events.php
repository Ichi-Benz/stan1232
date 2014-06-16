<?php

class Controller_Events extends Controller
{

	public function action_index()
	{
        $view = View::forge('layout/guest');
        $view->head = View::forge('layout/guest_head');
        try{
            $webdata = Cache::get('webdata');
        }catch (\CacheNotFoundException $e){
            $webdata = Model_Webdata::find(1);
            Cache::set('webdata', $webdata, 3600 * 168);
        }
        $view->set_global('data', $webdata, false);
        $videos = Model_Video::find('all', array('limit' => 10,
                'where' => array(
                    array('page', 2),
                ),

            )

        );
        $view->set_global('videos', $videos, false);
        $view->header = View::forge('layout/guest_header');
        $view->content = View::forge('welcome/events');
        $view->footer = View::forge('layout/guest_footer');
        return $view;
	}


	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
