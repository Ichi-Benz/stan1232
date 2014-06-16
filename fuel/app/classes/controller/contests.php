<?php

class Controller_Contests extends Controller
{
private function runContest($hashtag, $contestid){
    require("./twitter.class.php");
    $twitter = new Twitter("vuIh68vv9LK0tEfTMwIGR8lNo", "ALg4q5rwaIA4AulLiepfDFp258VjzOSryQtezzRnVni3h7Qt6j", "2375663430-yOKpwOtcSBWcERMMJ2fyK5QtQD3n6mKipyAqW3R", "fugsfHljJfKUhamtP0SKnIJMCzzXipydUk1G0dHA6x4zW");
    $results = $twitter->search($hashtag);
    foreach($results as $tweet){
        $query = Model_Entrant::query()->where('handle', $tweet->user->screen_name)->get_one();
        if(count($query) == 0){ //setup a new user on first tweet
            $newe = new Model_Entrant();
            $newe->name = $tweet->user->name;
            $newe->handle = $tweet->user->screen_name;
            //contest id here
            $newe->score = 0;
            $newe->contest = 1;
            $newe->used_ids = "";
            $newe->save();
        }
    }
    foreach($results as $tweet){
        $query = Model_Entrant::query()->where('handle', $tweet->user->screen_name)->get_one();
        if($query->handle == $tweet->user->screen_name && count(Model_Relatedtweet::query()->where('tid', $tweet->id)->get_one()) == 0){
            echo"saving new tweet";
            $relt = new Model_Relatedtweet();
            $relt->contest_id = $contestid; //contest id here
            $relt->tid = $tweet->id;
            $relt->retweets = $tweet->retweet_count;
            $relt->favorites = $tweet->favorite_count;
            $relt->entrant_id = $query->id;
            $relt->scored =0;
            $relt->save();

        }
        $relatedtweets = Model_Relatedtweet::query()->where('entrant_id', $query->id)->get();
        foreach($relatedtweets as $entrantstweets){
            if($tweet->id == $entrantstweets->tid){

                echo"found some updating tweet";
                $remove = Model_Entrant::query()->where('id', $entrantstweets->entrant_id)->get_one();
                // var_dump($remove);
                $remove->score = $remove->score - ($entrantstweets->retweets*2);
                $remove->score = $remove->score - ($entrantstweets->favorites*1);
                $remove->save();
                $entrantstweets->retweets = $tweet->retweet_count;
                $entrantstweets->favorites = $tweet->favorite_count;
                $entrantstweets->scored = 1;
                $entrantstweets->save();
                $remove->score = $remove->score + ($tweet->retweet_count*2);
                $remove->score = $remove->score + ($tweet->favorite_count*1);
                $remove->save();
            }
        }
    }
}

	public function action_index()
	{

        if($_POST){
            $contests = Model_Contest::find('all');
            foreach($contests as $contest){
                $this->runContest($contest->hashtag, $contest->id);
            }
        }


        $view = View::forge('layout/guest');
        $view->head = View::forge('layout/guest_head');
        try{
            $webdata = Cache::get('webdata');
        }catch (\CacheNotFoundException $e){
            $webdata = Model_Webdata::find(1);
            Cache::set('webdata', $webdata, 3600 * 168);
        }
        $view->set_global('data', $webdata, false);
        $videos = Model_Contest::find('all', array('limit' => 200,
                'order_by' => array(
                    array('enddate', 'desc'),
                ),
            )
        );
        $view->set_global('images', $videos, false);
        $view->header = View::forge('layout/guest_header');
        $view->content = View::forge('welcome/contests');
        $view->footer = View::forge('layout/guest_footer');
        return $view;
	}


	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
