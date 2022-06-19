<?php
if (isset($_POST["product_id"])) {
    $id = $_POST["product_id"];
    $data = new ProductsController();
    $product = $data->getProduct(); 


    if (isset($_SESSION["products_" . $id])) {
        Session::set("info", "You already added this product to your cart!");
        Redirect::to("cart");
        
    } else { // product quantity is not available
        if ($product->product_quantity < $_POST["product_qte"]) {       // if the product quantity is less than the quantity requested
            Session::set("info", "The quantity available is : $product->product_quantity"); // display the quantity available
            Redirect::to("allCookies");
        } else { //
            $_SESSION["products_" . $product->product_id] = array(  // create an array with the product_id
                "id" => $product->product_id,   
                "title" => $product->product_name,
                "price" => $product->product_price,
                "qte" => $_POST["product_qte"],
                "total" => $product->product_price * $_POST["product_qte"], // total price of the product * quantity requested
            );
            if(isset($_SESSION['totaux'])) {
                $_SESSION['totaux'] += $product->product_price * $_POST["product_qte"]; // add the total price of the product * quantity requested to the total price of the cart
            } else {
                $_SESSION['totaux'] = $product->product_price * $_POST["product_qte"];
            }
            if(isset($_SESSION['count'])) {
                $_SESSION['count'] += 1;    // Add 1 to the total number of products in the cart
            } else {
                $_SESSION['count'] = 1;
            }
            Session::set("success", "You added $product->product_name to your cart!");
            Redirect::to("cart");
        }
    }
}
