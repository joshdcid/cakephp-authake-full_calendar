<?php
// Load base configuration. Any of the core settings can be
// overridden here. Don't delete the $config var!
$config = array(
    'debug' => 1
);

// If declared in the $config array, String::UUID() crashes
Configure::write('Security.salt', 'DYhG93b0qyJfIxyfs2CguVoUrubWwvniRA2G0FDgaC9mi');
Configure::write('Security.cipherSeed', '7685930965745351983424967496836419815');


// AppFog Extraction
$services_json = json_decode(getenv('VCAP_SERVICES'),true);
$af_mysql_config = $services_json['mysql-5.1'][0]['credentials'];

// Database settings
Configure::write('Database.config', array(
    'default' => array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $af_mysql_config['hostname'],
        'login' => $af_mysql_config['username'],
        'password' => $af_mysql_config['password'],
        'database' => $af_mysql_config['name'],
        'prefix' => '',
        'encoding' => 'utf8',
    ),
    'authake' => array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => $af_mysql_config['hostname'],
        'login' => $af_mysql_config['username'],
        'password' => $af_mysql_config['password'],
        'database' => $af_mysql_config['name'],
        'prefix' => '',
        'encoding' => 'utf8',
    )
));

// ...other code

// Custom Log file settings to ROOT/data/logs/
CakeLog::config('default', array(
    'engine' => 'FileLog',
    'path'   => ROOT . DS . 'data' . DS . 'logs' . DS
));