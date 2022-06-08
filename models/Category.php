<?php

class Category{
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM category');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    // count the number of products in each category
    static public function getAllWithProducts() {
        $stmt = DB::connect()->prepare('SELECT * FROM category');
        $stmt->execute();
        $categories = $stmt->fetchAll();
        foreach ($categories as $key => $category) {
            $stmt = DB::connect()->prepare('SELECT * FROM product WHERE product_category_id = :category_id');
            $stmt->bindParam(':category_id', $category['id']);
            $stmt->execute();
            $categories[$key]['products'] = $stmt->fetchAll();
        }
        return $categories;
        // $stmt->close();
        $stmt = null;
    }

}


?>