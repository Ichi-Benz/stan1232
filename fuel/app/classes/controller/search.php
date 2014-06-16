<?php

class Controller_Search extends Controller
{

	public function action_index()
	{
        $view = View::forge('layout/guest');
        $terms = Input::get('terms');
        if(isset($terms)){
         var_dump($terms);
            $termarr = explode(" ", $terms);
        }
        $first = false;
        $result = DB::select()->from('videos')->where_open();
        foreach($termarr as $term){
            if($first == false){
                $result ->where('title', 'like', "%$term%");
                $result->where_close();
                if(count($termarr) != 1){
                    $result ->or_where_open();
                }else{

                }
                $first= true;
            }else{
                $result->or_where('title', 'like', "%$term%");
            }
        }
        if(count($termarr) != 1){
            $result->or_where_close();
        }


$result->execute();
        var_dump($result);

        $videos = Model_Picture::find('all', array('limit' => 100,
                'where' => array(
                    array('order', 'LIKE', 'desc'),
                ),
            )
        );
        $view->set_global('videos', $videos, false);
        $view->head = View::forge('layout/guest_head');
        $view->header = View::forge('layout/guest_header');
        $view->content = View::forge('welcome/search');
        $view->footer = View::forge('layout/guest_footer');
        return $view;
	}


	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
