<?php

class Model_Video extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'title' => array('data_type' => 'string'),
        'thumbnail'  => array('data_type' => 'string'),
        'src'   => array('data_type' => 'string'),
        'page'   => array('data_type' => 'int'),
        'order'   => array('data_type' => 'int'),
        'featured' => array('data_type' => 'int'),
        'visible' => array('data_type' => 'int'),

    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'videos';
    public static function get_results()
    {
        // Database interactions
    }

}