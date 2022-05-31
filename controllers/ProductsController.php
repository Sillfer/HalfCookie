<?php

class ProductsController{
    public function getAllProducts() {
        $products = Product::getAll();
        return $products;
    }
    public function getProductByCategory($id_category) {
        if(isset($id_category)) {
            $data = array(
                'id_category' => $id_category
            );
            $products = Product::getByCategory($data);
            return $products;
        }
    }
    public function getProduct() {
        if(isset($_POST["product_id"])) {
            $data = array(
                'id_category' => $_POST["product_id"]
            );
            $product = Product::getProductById($data);
            return $product;
        }
    }
    public function emptyCart($id, $price) {
        unset($_SESSION["products_" . $id]);
        $_SESSION["count"] -= 1;
        $_SESSION["totaux"] -= $price;
        Session::set("success", "Product Removed!");
        Redirect::to("cart");
    }
}