<?php
//Types
/*  0 - Phone #
 *  1 - E-Mail
 *  2 - FaceBook
 *  3 - Twitter
 *  4 - Instagram
 *  5 - Youtube
 */

class Model_Social extends Orm\Model {

    public static $_properties = array(
        'id'         => array('data_type' => 'int'),
        'type' => array('data_type' => 'int'),
        'data1'  => array('data_type' => 'string'),
        'data2'  => array('data_type' => 'string'),
        'data3'  => array('data_type' => 'string'),
    );
    protected static $_primary_key = array('id');
    protected static $_table_name = 'social_accounts';
    public static function get_results()
    {
        // Database interactions
    }

}