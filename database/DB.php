<?php

class DB {
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=half_cookie", "root", "");
        $db->exec("SET NAMES utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}
?>