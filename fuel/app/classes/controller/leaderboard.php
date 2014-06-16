<?php

class Controller_Leaderboard extends Controller
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
$contestid = Input::get('id');
        $entry = Model_Entrant::find('all', array(
            'where' => array(
                array('contest', $contestid),
            ),
            'order_by' => array('score' => 'desc'),
        ));

        $view->set_global('contest', Model_Contest::find($contestid), false);
        $view->set_global('entrants', $entry, false);
        $view->header = View::forge('layout/guest_header');
        $view->content = View::forge('welcome/leaderboard');
        $view->footer = View::forge('layout/guest_footer');
        return $view;
	}


	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
