<?php

class ProductsController
{
    public function getAllProducts()
    {
        $products = Product::getAll();
        return $products;
    }
    public function getProductByCategory($id_category)
    {
        if (isset($id_category)) {
            $data = array(
                'id_category' => $id_category
            );
            $products = Product::getByCategory($data);
            return $products;
        }
    }
    public function getProduct()
    {
        if (isset($_POST["product_id"])) {
            $data = array(
                'id_category' => $_POST["product_id"]
            );
            $product = Product::getProductById($data);
            return $product;
        }
    }
    public function emptyCart($id, $price)
    {
        unset($_SESSION["products_" . $id]);
        $_SESSION["count"] -= 1;
        $_SESSION["totaux"] -= $price;
        Session::set("success", "Product Removed!");
        Redirect::to("cart");
    }

    public function getTotal()
    {
        $total = Product::getTotalPrice();
        return $total;
    }
    public function getTotalQuantitySold()
    {
        $total = Product::getTotalQuantity();
        return $total;
    }

    public function updateOrderStatus($id, $status)
    {
        $data = array(
            'id_order' => $id,
            'order_status' => $status
        );
        Product::updateOrderStatus($data);
        Redirect::to("dashboard");
    }

    public function getProductAdmin()
    {
        $products = Product::getAllProducts();
        return $products;
    }

    public function newProduct()
    {
        if (isset($_POST["submit"])) {
            $data = array(
                'product_name' => $_POST["product_name"],
                'product_category_id' => $_POST["product_category_id"],
                'product_price' => $_POST["product_price"],
                'product_quantity' => $_POST["product_quantity"],
                'product_description' => $_POST["product_description"],
                'short_description' => $_POST["short_description"],
                'product_image' => $_POST["image"],
            );
            $result = Product::insertProduct($data);
            if ($result === "ok") {
                Session::set("success", "Product Added!");
                Redirect::to("products");
            } else {
                echo $result;
            }
        }
    }

    public function editProduct()
    {
        if (isset($_POST["submit"])) {
            $data = array(
                'product_id' => $_POST["product_id"],
                'product_name' => $_POST["product_name"],
                'product_category_id' => $_POST["product_category_id"],
                'product_price' => $_POST["product_price"],
                'product_quantity' => $_POST["product_quantity"],
                'product_description' => $_POST["product_description"],
                'short_description' => $_POST["short_description"],
                'product_image' => $_POST["image"],
            );
            $result = Product::updateProduct($data);
            if ($result === "ok") {
                Session::set("success", "Product Updated!");
                Redirect::to("products");
            } else {
                echo $result;
            }
        }
    }

    public function getRandomProducts()
    {
        $products = Product::getRandom(8);
        return $products;
    }

    public function removeProduct()
    {
        if (isset($_POST["delete_product_id"])) {
            $data = array(
                'product_id' => $_POST["delete_product_id"]
            );
            $result = Product::deleteProduct($data);
            if ($result === "ok") {
                Session::set("success", "Product Removed!");
                Redirect::to("products");
            } else {
                echo $result;
            }
        }
    }

}
