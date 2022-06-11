<?php

class OrdersController
{

    public function addOrder($data)
    {
        $result = Order::createOrder($data);
        if ($result == 'ok') {
            foreach ($_SESSION as $name => $product) {
                if(substr($name,0,9) == "products_"){
                    unset($_SESSION[$name]);
                    unset($_SESSION["count"]);
                    unset($_SESSION["totaux"]);
                }
            }
            Session::set("success", "Your order has been recorded!");
            Redirect::to("allCookies");
        }
    }
    public function getWaitingOrders()
    {
        $total = Order::countWaitingOrders();
        return $total;
    }

    public function displayOrders()
    {
        $orders = Order::displayOrders();
        return $orders;
    }

    public function getOrdersByUserId($user_id)
    {
        $orders = Order::getOrdersByUserId($user_id);
        return $orders;
    }

    public function getUserOrders()
    {
        $orders = Order::getUserOrders($_SESSION["user_id"]);
        return $orders;
    }
}
