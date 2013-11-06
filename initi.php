<?php


session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'suffera',
        'password' => '123456',
        'db' => 'myoop'
    ),
    'remember' => array(
        'cookie_name' => 'hash', //име на бисквитката
        'cookie_expiry' => 604800 //време на  действие
    ),
    'session' => array(
        'session_name' => 'user'//името на сесията 
    )
);


spl_autoload_register(function($class) {
            require_once 'classes/' . $class . '.php';
        });
require_once 'functions/sanitize.php';
 
