<?php

class Model_Entrant extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'name' => array('data_type' => 'string'),
        'handle'  => array('data_type' => 'string'),
        'score'   => array('data_type' => 'string'),
        'contest'   => array('data_type' => 'string'),


    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'entrants';
    public static function get_results()
    {
        // Database interactions
    }

}