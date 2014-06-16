<?php

class Model_Contest extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'name' => array('data_type' => 'string'),
        'desc'  => array('data_type' => 'string'),
        'cimage'   => array('data_type' => 'string'),
        'hashtag'   => array('data_type' => 'string'),
        'ptitle'   => array('data_type' => 'string'),
        'pimage' => array('data_type' => 'string'),
        'startdate' => array('data_type' => 'string'),
        'enddate' => array('data_type' => 'string'),


    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'contests';
    public static function get_results()
    {
        // Database interactions
    }

}