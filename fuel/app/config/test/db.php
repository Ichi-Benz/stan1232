<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'development' => array(
        'type'           => 'mysqli',
        'connection'     => array(
            'hostname'       => 'localhost',
            'port'           => '3306',
            'database'       => 'fuel_db',
            'username'       => 'your_username',
            'password'       => 'y0uR_p@ssW0rd',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'     => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => false,
    ),

// a PDO driver configuration, using PostgreSQL
    'production' => array(
        'type'           => 'pdo',
        'connection'     => array(
            'dsn'            => 'pgsql:host=localhost;dbname=fuel_db',
            'username'       => 'your_username',
            'password'       => 'y0uR_p@ssW0rd',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'     => '"',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => array('slave1', 'slave2', 'slave3'),
    ),

    'slave1' => array(
        // configuration of the first production readonly slave db
    ),

    'slave2' => array(
        // configuration of the second production readonly slave db
    ),

    'slave3' => array(
        // configuration of the third production readonly slave db
    ),
);


/*

'type' => 'mysql',
        'connection'  => array(
    'dsn'        => 'mysql:host=sql3.freemysqlhosting.net;dbname=sql337369',
    'username'   => 'sql337369',
    'password'   => 'eE6*fX8*',
),*/