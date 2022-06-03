<?php

class Product{
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    static public function getByCategory($data) {
        $id_category = $data['id_category'];
        try{
            $stmt = DB::connect()->prepare('SELECT * FROM product WHERE product_category_id = :id_category');
            $stmt->execute(array(':id_category' => $id_category));
            return $stmt->fetchAll();

            $stmt = null;
        }catch(PDOException $ex){
            echo 'Error' .$ex->getMessage();
        }
    }
    static public function getProductById($data) {
        $id_category = $data['id_category'];
        try{
            $stmt = DB::connect()->prepare('SELECT * FROM product WHERE product_id = :id_category');
            $stmt->execute(array(':id_category' => $id_category));
            $product = $stmt->fetch(PDO::FETCH_OBJ);
            return $product;

            $stmt = null;
        }catch(PDOException $ex){
            echo 'Error' .$ex->getMessage();
        }
    }
    static public function getTotalPrice() {
        $stmt = DB::connect()->prepare('SELECT SUM(total) AS total FROM product_order');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }

    static public function getTotalQuantity() {
        $stmt = DB::connect()->prepare('SELECT SUM(quantity) AS total FROM product_order');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }
    
    static public function updateOrderStatus($data) {
        $id = $data['id_order'];
        $status = $data['order_status'];
        try{
            $stmt = DB::connect()->prepare('UPDATE product_order SET order_status = :status_order WHERE id_order = :id');
            $stmt->execute(array(':status_order' => $status, ':id' => $id));
            $stmt = null;
        }catch(PDOException $ex){
            echo 'Error' .$ex->getMessage();
        }
    }

    

}
