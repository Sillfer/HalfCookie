<?php
session_start();

require_once('./bootstrap.php');

spl_autoload_register('autoload');

function autoload($class_name) {
    $array_path = array(
        'database/',
        'app/classes/',
        'controllers/',
        'models/'
    );

    $parts = explode('\\', $class_name);    // explode the class name into an array of parts    (ex: ['App', 'Classes', 'User'])    and store it in $parts
    $name = array_pop($parts);           // get the last element of the array   (ex: 'User')    and store it in $name

    foreach ($array_path as $path) {
        $file= sprintf($path. '%s.php', $name);
        if(is_file($file)) {
            include_once $file;
        }
    }
}