<?php
$id = $_POST["product_id"]; // $_POST["product_id"] is the product_id   from the form   in the view 
$price = $_POST["product_price"] * $_POST["product_qte"];
$data = new ProductsController();
$data->emptyCart($id, $price);