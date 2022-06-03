<?php
$order = new OrdersController();
foreach ($_SESSION as $name => $product) {
    if(substr($name,0,9) == "products_"){
        $data = array(
            "first_name" => $_SESSION["first_name"],
            "last_name" => $_SESSION["last_name"],
            "product" => $product["title"],
            "quantity" => $product["qte"],
            "price" => $product["price"],
            "total" => $product["total"],
            "order_status" => "Waiting for validation"
        );

        // print_r($data);
        $order->addOrder($data);
    }else{
        Redirect::to("allCookies");
    }
}