<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'default' => array(
        'type' => 'mysqli',
        'connection'  => array(
            'dsn'        => 'mysql:host=localhost;dbname=flipside',
            'username'   => 'root',
            'password'   => '',
        ),
    ),
);


/*

'type' => 'mysql',
        'connection'  => array(
    'dsn'        => 'mysql:host=sql3.freemysqlhosting.net;dbname=sql337369',
    'username'   => 'sql337369',
    'password'   => 'eE6*fX8*',
),*/