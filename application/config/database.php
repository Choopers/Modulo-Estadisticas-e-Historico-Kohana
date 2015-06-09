<?php

return array
(
    'default' => array(
        'type'       => 'mysql',
        'connection' => array(
            /**
             * The following options are available for PDO:
             *
             * string   dsn
             * string   username
             * string   password
             * boolean  persistent
             * string   identifier
             */
            'dsn'       => 'dblib:host=localhost:3306;dbname=test',
            'hostname'	=> 'localhost',
            'port'		=> '3306',
            'database'	=> 'productos',
            'username'  => 'root',
            'password'  => '',
            'persistent'=> TRUE,
        ),
        'table_prefix' => '',
        'charset'      => FALSE,
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),
);

?>