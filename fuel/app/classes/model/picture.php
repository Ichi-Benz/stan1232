<?php

class Model_Picture extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'src' => array('data_type' => 'string'),
        'views'  => array('data_type' => 'string'),
        'description'   => array('data_type' => 'string'),
        'title'   => array('data_type' => 'string'),
        'order'   => array('data_type' => 'int'),
        'thumbsrc'=> array('data_type' => 'string'),

    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'photos';
    public static function get_results()
    {
        // Database interactions
    }

}