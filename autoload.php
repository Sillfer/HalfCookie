<?php
session_start();

require_once('./bootstrap.php');

spl_autoload_register('autoload');  // register the autoload function to load the classes when needed

function autoload($class_name) {
    $array_path = array(
        'database/',
        'app/classes/',
        'controllers/',
        'models/'
    );

    $parts = explode('\\', $class_name);    // explode the class name into an array of parts    (ex: ['App', 'Classes', 'User'])    and store it in $parts
    $name = array_pop($parts);           // get the last element of the array   (ex: 'User')    and store it in $name

    foreach ($array_path as $path) {    // loop through the array of paths
        $file= sprintf($path. '%s.php', $name);   // create the path to the file
        if(is_file($file)) {       // if the file exists
            include_once $file;   // include the file
        }
    }
}