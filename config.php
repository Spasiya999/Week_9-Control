<?php

$config = [
    'db_host' => 'localhost',
    'db_port' => '3306',
    'db_name' => 'posts',
    'db_username' => 'root',
    'db_password' => 'Sachiya999@',
    'site_url' => 'http://localhost:8080'
];

foreach($config as $key => $value){
    $GLOBALS[$key] = $value;
}