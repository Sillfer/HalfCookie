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

    // add a new category
    static public function add($data) {
        $stmt = DB::connect()->prepare('INSERT INTO category(name_category) VALUES (:name)');
        $stmt->bindParam(':name', $data['name_category']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }

    // get one category
    static public function getOne($id_category) {
        $stmt = DB::connect()->prepare('SELECT * FROM category WHERE id_category = :id_category');
        $stmt->bindParam(':id_category', $id_category);
        $stmt->execute();
        return $stmt->fetch();
        // $stmt->close();
        $stmt = null;
    }

    static public function delete($data) {
        $id = $data['id_category'];
        $stmt = DB::connect()->prepare('DELETE FROM category WHERE id_category = :id');
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }
}


?>