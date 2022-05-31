<?php

require_once './autoload.php';
require_once ('./views/includes/header.php');

$home = new HomeController();

$pages = [ 
         'home', 'cart', 'dashboard', 'login', 'register', 'updateProduct', 'deleteProduct',
         'addProduct','emptyCart', 'show', 'cancelCart', 'checkout', 'logout', 'products',
         'orders', 'addOrder', 'about', 'contact', 'ingredients', 'refundPolicy',
         'wishlist', 'allCookies' 
        ];

if(isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {  // if the page is in the array
        $page = $_GET['page'];
        if($page === "dashboard" || $page === "deleteProduct" || $page === "updateProduct" || $page === "addProduct" || $page === "products") {
            if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                $admin =new AdminController();
                $admin->index($page);
        }else{
            include ('views/includes/404.php');
        }
    }else{
        $home->index($page);
    }
}else{
    include ('views/includes/404.php');
}
}else{
    $home->index('home');
}




$path = explode("/", $_SERVER["REQUEST_URI"])[2];   // get the path from the url 
        if($path != "login" && $path != "register") {   
require_once ('./views/includes/footer.php');}