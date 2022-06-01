<?php
$order = new OrdersController();
foreach ($_SESSION as $name => $product) {
    if(substr($name,0,9) == "products_"){
        $data = array(
            "first_name" => "Elmahdi",
            "last_name" => "GLIOUINE",
            "product" => $product["title"],
            "quantity" => $product["qte"],
            "price" => $product["price"],
            "total" => $product["total"],
            "order_status" => "pending"
        );

        // print_r($data);
        $order->addOrder($data);
    }else{
        Redirect::to("allCookies");
    }
}