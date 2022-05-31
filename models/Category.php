<?php

class Category{
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM category');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

}

?>