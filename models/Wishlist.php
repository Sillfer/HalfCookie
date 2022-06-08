<?php

class Wishlist
{
    static public function add($data){
        { {
            $stmt = DB::connect()->prepare('SELECT * FROM wishlist WHERE user_id = :user AND product_id = :product');
            $stmt->execute(array(":user" => $data["user_id"], ":product" => $data["product_id"]));
            $result = $stmt->fetchAll();
            if (count($result) > 0) {
                return "Product already in wishlist";
            } else {
                $stmt = DB::connect()->prepare('INSERT INTO wishlist (user_id, product_id) VALUES (:user, :product)');
                $stmt->execute(array(":user" => $data["user_id"], ":product" => $data["product_id"]));
                return "ok";
            }
        }
    }
    }

    static public function getAll()
    {
        // $stmt = DB::connect()->prepare('SELECT * FROM wishlist WHERE user_id = :id');
        $stmt = DB::connect()->prepare('SELECT * FROM wishlist JOIN product JOIN category on product.product_id = wishlist.product_id and category.id_category = product.product_category_id WHERE user_id = :id;');
        $stmt->execute(array(":id" => $_SESSION["user_id"]));
        return $stmt->fetchAll(); // returns an array of arrays
        // $stmt->close(); // close the statement
        $stmt = null; // close connection
    }

    
}