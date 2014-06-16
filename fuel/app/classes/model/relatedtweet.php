<?php

class Model_Relatedtweet extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'retweets' => array('data_type' => 'string'),
        'favorites'  => array('data_type' => 'string'),
        'entrant_id'  => array('data_type' => 'string'),
        'tid'  => array('data_type' => 'string'),
        'contest_id'  => array('data_type' => 'string'),
        'scored'  => array('data_type' => 'string'),



    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'related_tweets';
    public static function get_results()
    {
        // Database interactions
    }

}