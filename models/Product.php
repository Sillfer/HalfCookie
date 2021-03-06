<?php

class Product
{
    // Get all products
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    // Get the products by category
    static public function getByCategory($data)
    {
        $id_category = $data['id_category'];
        try {
            $stmt = DB::connect()->prepare('SELECT * FROM product WHERE product_category_id = :id_category');
            $stmt->execute(array(':id_category' => $id_category));  // execute the query with the data array as parameter
            return $stmt->fetchAll();

            $stmt = null;
        } catch (PDOException $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }
    // Get the product by id for the show product page
    static public function getProductById($data)
    {
        $id_category = $data['id_category'];
        try {
            $stmt = DB::connect()->prepare('SELECT * FROM product WHERE product_id = :id_category');
            $stmt->execute(array(':id_category' => $id_category));
            $product = $stmt->fetch(PDO::FETCH_OBJ);
            return $product;

            $stmt = null;
        } catch (PDOException $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }

    // Get the total price of all products Sold
    static public function getTotalPrice()
    {
        $stmt = DB::connect()->prepare('SELECT SUM(total) AS total FROM product_order');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }

    // Get the total quantity of products sold
    static public function getTotalQuantity()
    {
        $stmt = DB::connect()->prepare('SELECT SUM(quantity) AS total FROM product_order');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }
    // Update the order status
    static public function updateOrderStatus($data)
    {
        $id = $data['id_order'];
        $status = $data['order_status'];
        try {
            $stmt = DB::connect()->prepare('UPDATE product_order SET order_status = :status_order WHERE id_order = :id');
            $stmt->execute(array(':status_order' => $status, ':id' => $id));
            $stmt = null;
        } catch (PDOException $ex) {
            echo 'Error' . $ex->getMessage();
        }
    }
    // Add a new product to the database
    static public function insertProduct($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO product (product_name, product_category_id, product_price, product_quantity, product_description, short_description, product_image ) 
        VALUES (:product_name, :product_category_id, :product_price, :product_quantity, :product_description, :short_description, :product_image)');
        $stmt->bindParam(':product_name', $data['product_name']);   // bind the data to the placeholders in the query   
        $stmt->bindParam(':product_category_id', $data['product_category_id']);
        $stmt->bindParam(':product_price', $data['product_price']);
        $stmt->bindParam(':product_quantity', $data['product_quantity']);
        $stmt->bindParam(':product_description', $data['product_description']);
        $stmt->bindParam(':short_description', $data['short_description']);
        $stmt->bindParam(':product_image', $data['product_image']);
        if ($stmt->execute()) {

            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }
    
    // update product
    static public function updateProduct($data)
    {
        $stmt = DB::connect()->prepare('UPDATE product SET 
        product_name = :product_name,
        product_category_id = :product_category_id,
        product_price = :product_price,
        product_quantity = :product_quantity,
        product_description = :product_description,
        short_description = :short_description,
        product_image = :product_image 
        WHERE product_id = :product_id');
        $stmt->bindParam(':product_id', $data['product_id']);   // bind the data to the placeholders in the query
        $stmt->bindParam(':product_name', $data['product_name']);
        $stmt->bindParam(':product_category_id', $data['product_category_id']);
        $stmt->bindParam(':product_price', $data['product_price']);
        $stmt->bindParam(':product_quantity', $data['product_quantity']);
        $stmt->bindParam(':product_description', $data['product_description']);
        $stmt->bindParam(':short_description', $data['short_description']);
        $stmt->bindParam(':product_image', $data['product_image']);
        if ($stmt->execute()) { // execute the query with the data array as parameter
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }
    // Get all products and join with category table
    static public function getAllProducts()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM product INNER JOIN category ON product.product_category_id = category.id_category');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    // delete product by id with confirmation
    static public function deleteProduct($data)
    {
        $id = $data['product_id'];
        $stmt = DB::connect()->prepare('DELETE FROM product WHERE product_id = :id');
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }
    // get random product
    static public function getRandom($count)
    {
        $stmt = DB::connect()->prepare("SELECT * FROM product order by rand() limit " . $count);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
}
