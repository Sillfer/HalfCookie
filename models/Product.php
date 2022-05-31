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

}

?>