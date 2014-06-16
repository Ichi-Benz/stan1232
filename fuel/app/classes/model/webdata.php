<?php

class Model_Webdata extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'mainpage' => array('data_type' => 'string'),
        'mainpage_heading' => array('data_type' => 'string'),
        'videos_heading'  => array('data_type' => 'string'),
        'videos_content'   => array('data_type' => 'string'),
        'photos_heading'   => array('data_type' => 'string'),
        'photos_content'   => array('data_type' => 'string'),
        'events_heading'   => array('data_type' => 'string'),
        'events_content'   => array('data_type' => 'string'),
        'studio_heading'   => array('data_type' => 'string'),
        'studio_content'   => array('data_type' => 'string'),
    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'webdata';
    public static function get_results()
    {
        // Database interactions
    }

}