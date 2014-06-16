<?php

class Controller_Welcome extends Controller
{

	public function action_index()
	{

        $view = View::forge('layout/guest');
        try{
            $webdata = Cache::get('webdata');
        }catch (\CacheNotFoundException $e){
            $webdata = Model_Webdata::find(1);
            Cache::set('webdata', $webdata, 3600 * 168);

        }
        $view->set_global('data', $webdata, false);
        $view->head = View::forge('layout/guest_head');


        $featured = Model_Video::find('all', array(
            'where' => array(
                array('page', 1),
                array('featured', 1),

            ),
            ));
        $view->set_global('featured', $featured, false);

        try
        {

            $videos = Cache::get('frontvideos');
        }
        catch (\CacheNotFoundException $e)
        {
            $videos = Model_Video::find('all', array('limit' => 10,
                'where' => array(
                    array('page', 1),),
                    'order_by' => array(
                        array('order', 'desc'),
                    ),
                )
            );
            Cache::set('frontvideos', $videos, 3600 * 168);
        }
        $view->set_global('videos', $videos, false);
        $view->header = View::forge('layout/guest_header');
        $view->content = View::forge('welcome/index');
        $view->footer = View::forge('layout/guest_footer');
        return $view;
	}


	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
