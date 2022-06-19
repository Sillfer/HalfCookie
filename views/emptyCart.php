<?php
foreach($_SESSION as $name => $product) :   // loop through the session
    if (substr($name, 0, 9) == "products_"){    // if the name starts with products_
        unset($_SESSION[$name]);          // unset the session
        unset($_SESSION["count"]);
        unset($_SESSION["totaux"]);
        Session::set("success", "Your cart is empty!");
        Redirect::to("cart");
    }
endforeach;