<?php
if (isset($_POST["product_id"])) {
    $id = $_POST["product_id"];
    $data = new ProductsController();
    $product = $data->getProduct();

    // var_dump($_SESSION);

    if (isset($_SESSION["products_" . $id])) {
        Session::set("info", "You already added this product to your cart!");
        Redirect::to("cart");
        
    } else { // product quantity is not available
        if ($product->product_quantity < $_POST["product_qte"]) {
            Session::set("info", "The quantity available is : $product->product_quantity");
            Redirect::to("allCookies");
        } else { //
            $_SESSION["products_" . $product->product_id] = array(
                "id" => $product->product_id,
                "title" => $product->product_name,
                "price" => $product->product_price,
                "qte" => $_POST["product_qte"],
                "total" => $product->product_price * $_POST["product_qte"],
            );
            if(isset($_SESSION['totaux'])) {
                $_SESSION['totaux'] += $product->product_price * $_POST["product_qte"];
            } else {
                $_SESSION['totaux'] = $product->product_price * $_POST["product_qte"];
            }
            if(isset($_SESSION['count'])) {
                $_SESSION['count'] += 1;
            } else {
                $_SESSION['count'] = 1;
            }
            // $_SESSION["totaux"] += $_SESSION["products_" . $product->product_id]["total"];
            // $_SESSION["count"] += 1;
            Session::set("success", "You added $product->product_name to your cart!");
            Redirect::to("cart");
        }
    }
}
