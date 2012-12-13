<?php
// Load base configuration. Any of the core settings can be
// overridden here. Don't delete the $config var!
$config = array(
    'debug' => 1
);

// If declared in the $config array, String::UUID() crashes
Configure::write('Security.salt', 'DYhG93b0qyJfIxyfs2CguVoUrubWwvniRA2G0FDgaC9mi');
Configure::write('Security.cipherSeed', '7685930965745351983424967496836419815');

// Database settings
Configure::write('Database.config', array(
    'default' => array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'root',
        'database' => 'recursa_local',
        'prefix' => '',
        'encoding' => 'utf8',
        'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
    ),
    'authake' => array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'root',
        'database' => 'recursa_local',
        'prefix' => '',
        'encoding' => 'utf8',
    )
));

// Custom Log file settings to ROOT/data/logs/
CakeLog::config('default', array(
    'engine' => 'FileLog',
    'path'   => ROOT . DS . 'data' . DS . 'logs' . DS
));